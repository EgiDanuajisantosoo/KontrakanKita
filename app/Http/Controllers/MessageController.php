<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Events\NewMessage;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    // public function store(Request $request)
    // {
    //     $message = Message::create([
    //         'group_id' => $request->group_id,
    //         'user_id' => auth()->id(),
    //         'message' => $request->message,
    //     ]);

    //     broadcast(new MessageSent($message));

    //     return response()->json(['status' => 'Message Sent!']);
    // }

    public function store(Request $request, Group $group)
    {
        // Validate the message
        $request->validate([
            'message' => 'required|string',
        ]);

        // Store the message
        $message = new Message();
        $message->user_id = auth()->id();
        $message->group_id = $group->id;
        $message->message = $request->message;
        $message->save();

        // Broadcast the message
        broadcast(new MessageSent($message))->toOthers();
 // Broadcast the event

        return redirect()->route('groups.show', $group->id); // Redirect back to the group
    }
}
