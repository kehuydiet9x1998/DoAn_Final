<?php

namespace App\Http\Controllers;

use App\Events\Message as EventsMessage;
use App\Events\MyEvent;
use App\Models\Message;
use App\Models\User;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Pusher\Pusher;

class ChatsController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
    $users = User::where('id', '!=', auth()->user()->id)->get();

    $users = DB::select(
      'select users.id, users.name, users.anhdaidien, count(is_read) as unread from users left join messages on users.id = messages.from and is_read = 0 and messages.to = ' .
        Auth::id() .
        ' where users.id != ' .
        Auth::id() .
        ' group by users.id, users.name, users.anhdaidien'
    );
    return view('chat.chat', ['users' => $users]);
  }

  public function getMessage($id)
  {
    $my_id = auth()->user()->id;

    Message::where(['from' => $id, 'to' => $my_id])->update(['is_read' => 1]);

    $messages = Message::where(function ($query) use ($id, $my_id) {
      $query->where('from', $my_id)->where('to', $id);
    })
      ->orWhere(function ($query) use ($my_id, $id) {
        $query->where('from', $id)->where('to', $my_id);
      })
      ->get();

    return view('chat.message', ['messages' => $messages]);
  }

  public function sendMessage(Request $request)
  {
    $from = Auth::id();
    $to = $request->receiver_id;
    $message = $request->message;

    Message::create([
      'from' => $from,
      'to' => $to,
      'message' => $message,
      'is_read' => 0,
    ]);

    event(new EventsMessage(['from' => $from, 'to' => $to]));
  }
}