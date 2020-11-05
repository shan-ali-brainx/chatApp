<?php

namespace App;

use Illuminate\Support\Facades\Request;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
   protected $fillable=['text','thread_id','sender_id'];
   protected $touches = ['thread'];
   public function thread(){
       return $this->belongsTo(Thread::class);
   }
}
