<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
   public function store()
   {
      $message = new Message;

      $message->name = request('name');
      $message->email = request('email');
      $message->message = request('message');
      $message->save();

      return redirect('/');
   }
}
