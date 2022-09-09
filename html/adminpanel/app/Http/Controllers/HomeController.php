<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use DB;
use Validator;
use Session;
use AuthenticatesUsers;

class HomeController extends Controller
{

  public function index(){

          return view('login');

  }

  public function login(Request $req){

      $validator = Validator::make($req->all(), [

        'email' => ['required'],
        'password' => ['required'],

      ]);

    if ($validator->fails()) {
              return redirect()
                ->back()
                ->withInput()
                ->withErrors($validator->errors());
      }


      $credentials = $req->only('email','password');

      if (Auth::attempt($credentials)) {
            return redirect()->route('home')
                        ->withSuccess('Signed in');
        }

        return redirect('login')->withSuccess('Login details are not valid');
    }

    public function home(Request $req){

            $search = $req['search'] ?? "";

            if($search !=""){

                  $students = DB::table('students')
                            ->join('users', 'created_by', '=', 'users.id')
                            ->where('student_name','LIKE','%'.$req->search.'%')
                            ->orwhere('roll','LIKE','%'.$req->search.'%')
                            ->orwhere('class_name','LIKE','%'.$req->search.'%')
                            ->orwhere('section_name','LIKE','%'.$req->search.'%')
                            ->orwhere('group_name','LIKE','%'.$req->search.'%')
                            ->select('students.*', 'users.user_name')
                            ->get();

            }
            else{
                $students = DB::table('students')
                          ->join('users', 'created_by', '=', 'users.id')
                          ->select('students.*', 'users.user_name')
                          ->get();
            }


            $classes = DB::table('classes')
                        ->orderBy('id')
                        ->get();
            $sections = DB::table('sections')->get();
            $groups = DB::table('groups')->get();


          return view('home',compact('students','classes', 'sections', 'groups', 'search'));
    }

   public function logout(Request $req){

          Auth::logout();

           return redirect('/');
   }

   public function add(Request $req){

     $validator = Validator::make($req->all(), [

                     'name' => ['required'],
                     'roll' => ['required'],
                     'class' => ['required'],
                     'section' => ['required'],
                     'group' => ['required'],
                    ]);

           if ($validator->fails()) {
               return redirect()
                 ->back()
                 ->withInput()
                 ->withErrors($validator->errors());
                }

          DB::table('students')->insert([
            "student_name" => $req->name,
            "roll" => $req->roll,
            "class_name" => $req->class,
            "section_name" => $req->section,
            "group_name" => $req->group,
            "created_by" => Auth::user()->id,
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s"),

          ]);

          return redirect('home');

   }

  public function delete($id){

        DB::table('students')->where('id',$id)->delete();

        return redirect('home');



  }


  public function getstudent($id){


        $studentdata = DB::table('students')->where('id',$id)->first();
        $classes = DB::table('classes')
                    ->orderBy('id')
                    ->get();
        $sections = DB::table('sections')->get();
        $groups = DB::table('groups')->get();

        return view('updatepage',compact('studentdata','classes', 'sections', 'groups'));



  }

  public function update(Request $req, $id){

    $validator = Validator::make($req->all(), [

                'name' => ['required'],
                'roll' => ['required'],
                'class' => ['required'],
                'section' => ['required'],
                'group' => ['required'],
               ]);

        if ($validator->fails()) {
                  return redirect()
                  ->back()
                  ->withInput()
                  ->withErrors($validator->errors());
                  }

          DB::table('students')->where('id',$id)
          ->update([

          "student_name" => $req->name,
          "roll" => $req->roll,
          "class_name" => $req->class,
          "section_name" => $req->section,
          "group_name" => $req->group,
          "created_by" => Auth::user()->id,
          "updated_at" => date("Y-m-d H:i:s"),

        ]);

        return redirect('home');



  }



}
