<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
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
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function complete(Request $request)
    {
        $conf = new \App\Models\User;
        $conf->name = $request->name;
        $conf->email = $request->email;
        $conf->password = $request->password;
        $conf->save();
        return view('complete');
        //return view(compact('title','firstname','email','password'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $conf = \App\Models\User::find($id);
        return view('edit',['conf'=>$conf]);
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
	public function form() {
		return view('register');
	}
    public function confirm() {
        return view('conf');
	}

    public function store(Request $request) {
        $this -> validate($request,[
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'password_confirmation' => 'required | same:password',
        ]);
        $user = $request->user->conf()->create($request->all());
        return redirect(route('home'));
    }
        /**
         * エラーメッセージ
         *
         * @return array
         */
        public function messages()
        {
            return [
                'password.confirmed' => 'パスワードが異なります',
            ];
        }
}
