<?php

namespace App\Http\Controllers;
use App\Message;

use Illuminate\Http\Request;

class MessagesController extends Controller
{
    // Submit Form-e
    public function submit(Request $request){
        // Validacija
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);
        // Kreiram poruku
        $message = new Message;
        $message->name    = $request->input('name');
        $message->email   = $request->input('email');
        $message->message = $request->input('message');

        // Save
        $message->save();

        // Redirekt na home page
        return redirect('/')->with('success', 'Message Sent Successfully');
    }

    // Metoda za prikazivanje poruka
    public function getMessages(){
        $messages = Message::all();
        return view('messages')->with('messages', $messages);
    }
}
