<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Message;

use Validator, Auth;

class MessageController extends Controller
{
    public function getChat($userId)
    {
        $chat = User::find($userId);
        $messages = Message::where(function($query) {
                  $query->where('to', Auth::id())
                        ->orWhere('from', Auth::id());
              })
              ->where(function($query) use ($userId) {
                  $query->where('to', $userId)
                        ->orWhere('from', $userId);
              })
              ->get();
        return response()->json([
            'status' => 'success',
            'chat' => $chat,
            'messages' => $messages
        ]);
    }

}
