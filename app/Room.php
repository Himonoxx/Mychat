<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'name',
    ];
    
    public function users(){
        return $this->hasMany(User::class);
    }
    
    public function chatmessages(){
        return $this->hasMany(Chatmessage::class);
    }
}
