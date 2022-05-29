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


    public function userAppointment(){

      $user = auth()->user();
      return view('/page', ['user'=>$user]);
    }

    public function AllUser(){

      $user = User::All();
      return view('/page', ['user'=>$user]);
    }
}
