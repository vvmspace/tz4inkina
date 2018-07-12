<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable = ['title', 'body', 'user_id'];

    static function stats(){
        $last = Post::orderBy('created_at', 'desc')->first();
        $first = Post::first();
        return ['first' => $first, 'last' => $last, 'count' => Post::count()];
    }

    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
}
