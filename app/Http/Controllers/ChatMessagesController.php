<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chatmessage;
use Auth;

class ChatMessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::check()){
            
        $chatmessage = new Chatmessage;
        $user = Auth::user();
        dd($request);
        $user->chatmessages()->create([
            
            'content' => $request->content,
            'room_id' => $request->room_id,
            
            ]);
        
        //メッセージ保存後に最新の状態をDBから取得する。    
        $chatmessages = Chatmessage::orderBy('id')->where('room_id',$request->room_id)->get(); 
            
            return view('rooms.show',[
                'chatmessages' => $chatmessages,
                'chatmessage' => $chatmessage,
                ]);
            
        }else{
            
            $chatmessage = new Chatmessage;
            $chatmessage = Chatmessage::orderBy('id')->where('room_id',$request->room_id)->get();
            
            return view('rooms.show',[
                'chatmessages' => $chatmessages,
                'chatmessage' => $chatmessage,
                ]);
        }
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
