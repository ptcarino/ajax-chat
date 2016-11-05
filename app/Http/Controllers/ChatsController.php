<?php

namespace App\Http\Controllers;

use Request;
use App\Chat;
use DB;

class ChatsController extends Controller
{
    public function sendMessage() {
        Chat::create(Request::all());
    }

    public function getChatMessages() {
        $chats = DB::table("chats")->join("users", "chats.users_id", "=", "users.id")->where("read", 0)->take(1)->get();

//        $chats = DB::select('SELECT chats.*, users.* FROM chats JOIN users ON chats.users_id = users.id AND chats.read = 0 LIMIT 1');

        /*$chats = Chat::where('users_id', '=', $user_id)
            ->where('read', '=', false)->get();
            ->first();*/

        /*if(count($chats) > 0) {
            $chats->read = true;
            $chats->save();
            return $chats;
        }*/

        return $chats;
    }
}
