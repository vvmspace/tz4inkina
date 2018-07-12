<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index(){
        return view('index', ['posts' => Post::all()]);
    }

    public function store(Request $request)
    {
        $input=$request->all();

        if(Auth::check()){
            $post = new Post();
            $post->user_id = Auth::user()->id;
            $post->title = $input['title'];
            $post->body = $input['body'];
            $post->save();
        }

        return redirect('/');
    }
}
