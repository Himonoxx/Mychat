<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function index(){
        
        $messages = Message::all();
        $message = New Message;
        
        return view('index',[
            'messages' => $messages,
            'message' => $message,
            ]);
    }
    
     public function store(Request $req){
        
        $message = New Message;
        $message->content = $req->content;
        $message->save();
        
        $messages =  Message::all();
        
        return redirect('/');
    }
    
    public function show($id){
        $message = Message::find($id);
        
        return view('index',[
            'message' => $message,
            ]);
    }
}
