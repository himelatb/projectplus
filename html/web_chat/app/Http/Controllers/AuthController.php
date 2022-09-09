<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Message;
use App\Mail\VerificationEmail;

use Validator, Auth;

class AuthController extends Controller
{
    public function home()
    {
        $data = Message::with(['sender', 'receiver'])
              ->where('to', Auth::id())
              ->orWhere('from', Auth::id())
              ->orderBy('id', 'desc')
              ->get();

        $chatHeads = [];
        $chatHeadUniqueIds = [];

        foreach ($data as $row) {
            if(in_array($row->to, $chatHeadUniqueIds)
                || in_array($row->from, $chatHeadUniqueIds)) {
                  continue;
            }
            if ($row->to != Auth::id()) {
                $chatHeads[] = $row->receiver;
                $chatHeadUniqueIds[] = $row->to;
            } elseif ($row->from != Auth::id()) {
                $chatHeads[] = $row->sender;
                $chatHeadUniqueIds[] = $row->from;
            }
        }

        return view('home', compact('chatHeads'));
    }

    public function login()
    {
        return view('auth.login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()
          ->route('login');
    }

    public function loginAction(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'email' => ['required', 'email', 'exists:users,email'],
            'password' => ['required', 'min:6']
        ]);

        if ($validator->fails()) {
            return back()
              ->withInput()
              ->withErrors($validator->errors());
        }

        if (Auth::attempt($req->only(['email', 'password']))) {
            if(Auth::user()->is_verified == 'false') {
               Auth::logout();
               return redirect()->route('login')->with('error', 'Account not verified!');
            }
            return redirect()->route('home');
        } else {
            $validator->getMessageBag()->add('invalid-credentials', 'Invalid credentials!!');
        }

        return back()
          ->withInput()
          ->withErrors($validator->errors());
    }

    public function register()
    {
        return view('auth.register');
    }

    public function registerAction(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'min:6']
        ]);

        if ($validator->fails()) {
            return back()
              ->withInput()
              ->withErrors($validator->errors());
        }

        $user = new User();
        $user->name = $req->name;
        $user->email = $req->email;
        $user->verification_token = sha1(uniqid());
        $user->password = bcrypt($req->password);
        $user->save();

        $data = [
            'name' => $user->name,
            'token' => $user->verification_token
        ];

        try {
           \Mail::to([$user->email)->send(new \App\Mail\VerificationEmail($data));
        } catch (\Exception $e) {
           \Log::info($e->getMessage());
        }

        $validator->getMessageBag()->add('success', 'Verification Email sent to your email!');
        return redirect()
          ->route('login')
          ->withInput()
          ->withErrors($validator->errors());
    }

    public function verify($token)
    {
        $user = User::where('verification_token', $token)->first();

        if (empty($user)) {
            return redirect()->route('register');
        }
        if ($user->is_verified == 'true') {
            return redirect()->route('login');
        }
        $user->is_verified = 'true';
        $user->email_verified_at = date('Y-m-d H:i:s');
        $user->save();

        return redirect()->route('login')->with('success', 'Verification Successful!');
    }
}
