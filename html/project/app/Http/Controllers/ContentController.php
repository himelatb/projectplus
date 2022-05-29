<?php

namespace App\Http\Controllers;
use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    function adddata(Request $req)
    {
      $content = new Content;
      $content->name=$req->name;
      $content->email=$req->email;
      $content->phone=$req->phone;
      $content->message=$req->messege;
      $content->save();
      return redirect('/')->with('success','messege sent');
    }
}
