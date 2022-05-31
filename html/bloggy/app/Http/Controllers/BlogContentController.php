<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\BlogContent;

class BlogContentController extends Controller
{
    public function BlogPosts(){

      $posts = User::with('content')->get();

      return view('index',['posts'=> $posts]);

    }

    public function BlogPostsDetail($id){

      $blog = BlogContent::where('id',$id)->first();
      $posts = BlogContent::with('writer')
        ->where('id', '!=', $id)
        ->orderBy('id', 'desc')
        ->limit(4)
        ->get();

      return view('fulldetail', compact('blog', 'posts'));

    }
}
