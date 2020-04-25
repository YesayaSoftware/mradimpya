<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function() {
	$name = request('name');

    return view('majaribio', [
    	'name' => $name
    ]);
});

Route::get('posts/{post}', function($post) {
    $posts = [
        'post-ya-kwanza' => 'Post ya kwanza',
        'post-ya-pili' => 'Post ya pili' 
    ];

    if(! array_key_exists($post, $posts))
        abort(404, "Samahani, post haipatikani.");

    return view('post', [
        'post' => $posts[$post]
    ]);
});
