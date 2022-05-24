<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index()
    {
            return view('conf');
    }

    public function create()
    {
        return view('register');
    }

    public function complete(Request $request)
    {
        $conf = new \App\Models\User;
        $conf->name = $request->name;
        $conf->email = $request->email;
        $conf->password = Hash::make($request->password);
        $conf->auth = $request->auth;
        $conf->save();
        return view('complete');
    }

    
   public function edit($id)
   {
       $conf = \App\Models\User::find($id);
       return view('edit',['conf'=>$conf]);
   }

  public function destroy($id)
  {
      //
  }

  public function form() {
      return view('register');
  }

  public function confirm(Request $request) {
      $this->validate($request,[
          'name' => 'required',
          'email' => 'required|unique:users,email',
          'password' => 'required',
          'confirm-password' => 'required | same:password',
      ]);
      return view('conf');
  }

  public function login(Request $request) {
      $this->validate($request,[
          'email' => 'required',
          'password' => 'required',
      ]);
      return view('login');
  }

}
