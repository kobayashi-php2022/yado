<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public $form_data = [
        ["secondname", "text"],
        ["firstname", "text"],
        ["email", "email"],
        ["password", "password"],
        ["password_confirmation", "password"],
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            return view('conf');
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
    // 入力欄の name を使って取得
        $secondname = $request->input('secondname');
        $firstname = $request->input('firstname');
        $email = $request->input('email');
        $password = $request->input('password');
        $password_confirmation = $request->input('password_confirmation');
    return view(compact('title','firstname','email','password','password_confirmation'));
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
/**
	 * フォーム表示
	 */
	public function form() {
		return view('register');
	}

	/**
	 * プロフィール表示
	 */
	public function show(Request $request) {
		$profile = array(
			'secondname' => $request->input('secondname'),
			'firstname' => $request->input('firstname'),
			'email' => $request->input('email'),
			'password' => $request->input('password'),
			'password_confirmation' => $request->input('password_confirmation'),
		);
		return view('user.show', $profile);
	}
    public function complete() {
        return view('complete');
	}
}
