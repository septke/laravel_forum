<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model{
    protected $fillable = ['thread_id', 'user_id', 'body'];

    public function thread(){
        return $this->belongsTo('App\Thread');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
}
