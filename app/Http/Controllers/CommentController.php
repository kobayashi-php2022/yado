<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\User;
use App\Models\Hotel;
use App\Models\Category;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $hotel = Hotel::find($request->hotel_id);
        return view('users/comment_create', ['hotel' => $hotel]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, User $user, Hotel $hotel)
    {
        $this->validate($request, [
            "nickname" => "required|max:255",
            "rate" => "required",
            "comment" => 'max:200',
        ]);
        Comment::create([
            'hotels_id' => $request->hotel_id,
            'user_id' => \Auth::id(),
            'star' => $request->rate,
            'comment' => $request->comment,
        ]);
        $user = User::find(\Auth::id());
        if($user->nickname !== $request->nickname) {
            $user->update([
                'nickname' => $request->nickname,
            ]);
        }
        return redirect(route('hotels.show', ['hotel' => $request->hotel_id]));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
