<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    protected $fillable = ['thread_id', 'user_id', 'category_id', 'title', 'body', 'photo_id'];

    public function user(){
        return $this->belongsTo('App\User');
    }
    public function category(){
        return $this->belongsTo('App\Category');
    }
    public function comments(){
        return $this->hasMany('App\Comment');
    }
    public function photo(){
        return $this->belongsTo('App\Photo');
    }
}
