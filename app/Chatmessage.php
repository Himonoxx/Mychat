<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chatmessage extends Model
{
    protected $fillable = [
        'content','user_id','room_id',
    ];
    
    //一意のUserに対して紐づく。
    public function user(){
        return $this->belognsTo(User::class);
    }
    
    //呟かれた部屋番号
    public function room(){
        return $this->belongsTo(Room::class);
    }
}
