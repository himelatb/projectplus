<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\BlogContent;
use DB;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function indexHome()
    {
      $posts = BlogContent::where('user_id',Auth::user()->id)->get();

      return view('home',['posts'=> $posts]);


    }

    public function Uploader(Request $req)
{


  $photoName = rand().'.'.$req->file('image')->guessExtension();


      $upload = new BlogContent;
      $upload->user_id=Auth::user()->id;
      $upload->postTitle=$req->title;
      $upload->postSummary=$req->summary;
      $upload->postDescription=$req->description;
      $upload->postPhoto=$req->image->move('public/assets/img',$photoName);
      $upload->save();

      return redirect('home')->with('success','You have successfully posted.');


    }

}
