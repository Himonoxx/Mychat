<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Room;
use App\Chatmessage;
use Auth;

class RoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $rooms = Room::all();
        $room = New Room;
        
        return view('rooms.index',[
            'rooms' => $rooms,
            'room' => $room,
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $room = New Room;
        
        return view('rooms.index',[
            'room' => $room,
            'rooms' => $rooms,
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $room = new Room;
        $room->name = $request->name;
        $room->save();
        
        //部屋を新規作成した場合、ログインユーザーのroom_idを新規作成したroom_idに書き換える。
        $user = Auth::user();
        $user->room_id = $room->id;
        $user->save();
        
        
        $chatmessage = new Chatmessage;
        $chatmessages = Chatmessage::orderBy('id')->where('room_id',$request->room_id)->get();
        
        return view('rooms.show',[
            'room' => $room,
            'chatmessage' => $chatmessage,
            'chatmessages' => $chatmessages,
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (Auth::check()){
            
            $room = Room::find($id);
            $chatmessage = new Chatmessage;
            $chatmessages = $room->chatmessages()->get();
            
            //ログインユーザーのroom_idに入室した部屋idを紐づける。
            $user = Auth::user;
            $user->room_id = $room->id;
            $user->save();
            
            return view('rooms.show',[
                'room' => $room,
                'chatmessages' => $chatmessages,
                'chatmessage' => $chatmessage,
                ]);
            
        } else {
            
            return redirect('/');
        }
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
