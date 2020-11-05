<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    //
    protected $fillable=['type','name'];

    public function users(){
        return $this->hasManyThrough(User::class,ThreadUser::class);
    }
    public function manyUsers(){
        return $this->belongsToMany(User::class);
    }
    public function messages(){
        return $this->hasMany(Message::class);
    }
}
