<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        $orders = Order::with('user')->orderByDesc('created_at')->paginate(5);
        $user=User::where('id','=',\Auth::id())->first();
        return view('users/index', ['user'=> $user, 'orders' => $orders]);
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
        $conf = new \App\Models\User;
        $conf->name = $request->name;
        $conf->email = $request->email;
        $conf->password = Hash::make($request->password);
        $conf->auth = $request->auth; 
        $conf->save();
        return view('complete');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show',['user' => $user]);
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit',['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->validate($request,[
            'name'=>'max:20',
            'address'=>'max:100',
            'email'=>'max:100',
        ]);
        $user->update($request->all());
        return redirect(route('users.index',$user));
    }

    /**
     * Remove the specified resource from storage.
     *

     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect(route('hotels.index'));
    }



    
}
