<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Models\User;

class IndexController extends Controller
{
    public function indexpage() {
      return view('index');
    }

    public function aboutpage(){
      return view('about');
    }

    public function contactpage(){
      return view('contact');
    }

    public function LoginAction(Request $req){

      $user = User::where('email', $req->email)->first();

      if(empty($user)){
        abort(404);
      }

      if (Auth::attempt([
        'email' => $req->email,
        'password' => $req->password
      ])){
        return redirect('/page');
      }
      return "not found";
    }

    public function userAppointment(){

      $user = auth()->user();
      return view('/page', ['user'=>$user]);
    }
}
