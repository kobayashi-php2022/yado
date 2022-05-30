<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\User;
use App\Models\Order;
use App\Models\hotel;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, User $user)
    {
        $this->authorize($user);
        $query = Member::select('id','name');

        if($request->name) {
            $query->where('name', 'LIKE', '%' . $request->name . '%');
        }
        if($request->id) {
            $query->where('id','=' ,$request->id );
        }
        $users = $query->paginate(10);
        
        return view('admin/members/index',['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member, User $user)
    {
        $this->authorize($user);
        $orders = Order::with('user')->get();
        $user = Member::select('id','name','address','tel','email')->where('id', "=", $member->id)->first();
        return view('admin/members/show', ['user' => $user, 'orders' => $orders]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $user)
    {
        $user = \Auth::user();
        $this->authorize($user);
        $user_id = \Request::segment(2);
        $member = Member::find($user_id);
        // dd($member);
        return view('admin/members/edit', ['user' => $member]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user = \Auth::user();
        $this->authorize($user);
        $user_id = \Request::segment(2);
        $member = Member::find($user_id);
        $member->update([
            'name' => $request->name,
            'address' => $request->address,
            'tel' => $request->tel,
            'email' => $request->email,
        ]);
        return redirect(route('members.show',$member->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $user)
    {
        {
            $user = \Auth::user();
            $this->authorize($user);
            $user_id = \Request::segment(2);
            $member = Member::find($user_id);
            $member->delete();

            return redirect(route('members.index'));
        }

    }

    public function ruin(Order $order)
    {
        {
            
            $order_id = \Request::segment(2);
            $order = Order::find($order_id);
            $member_id=$order->user->id;
            $order->delete();
            return redirect(route('members.show',$member_id));
        }
    }
}
