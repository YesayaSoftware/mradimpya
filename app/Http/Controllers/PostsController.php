<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show($post) 
    {
        $posts = [
            'post-ya-kwanza' => 'Post ya kwanza',
            'post-ya-pili' => 'Post ya pili' 
        ];
    
        if(! array_key_exists($post, $posts))
            abort(404, "Samahani, post haipatikani.");
    
        return view('post', [
            'post' => $posts[$post]
        ]);
    }
}
