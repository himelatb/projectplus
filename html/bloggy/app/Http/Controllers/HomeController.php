<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\BlogContent;
use DB;
use Illuminate\Http\File;


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
    public function home()
    {
      $posts = BlogContent::where('user_id',Auth::user()->id)->get();

      return view('home',['posts'=> $posts]);


    }

    public function delete($id){

      BlogContent::where('id',$id)->delete();

      $posts = BlogContent::where('user_id',Auth::user()->id)->get();

      return redirect()->route('home',compact('posts'))->with('success','Deleted successfully');

    }

    public function uploader(Request $req){



      $upload = new BlogContent;
      $upload->user_id= Auth::user()->id;
      $upload->postTitle=$req->title;
      $upload->postSummary=$req->summary;
      $upload->postDescription=$req->description;

      if($req->file('image')!=''){
        $photoName = rand().'.'.$req->file('image')->guessExtension();
      $upload->postPhoto=$req->image->move('public/assets/img',$photoName);
    }
      $upload->save();

      return redirect('home')->with('success','Post successfully.');

    }


    public function update(Request $req, $id){

      $upload = BlogContent::find($id);
      $upload->user_id=Auth::user()->id;
      $upload->postTitle=$req->title;
      $upload->postSummary=$req->summary;
      $upload->postDescription=$req->description;

      if($req->file('image')!=''){
        $upload->postPhoto=$req->image->move('public/assets/img',rand().'.'.$req->file('image')->GetExtension());
      }

      $upload->update();
      return redirect('home')->with('success','Updated successfully');

    }


    public function edit($req){

      $post=BlogContent::find($req);

      return view('edit',compact('post'));

    }

}
