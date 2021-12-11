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

Route::get('/', function () {
    return view('posts');
});

Route::get('posts/{post}', function ($slug) {

    if (!file_exists($$path = __DIR__ . "/../resources/posts/{$slug}.html")) {
        // ddd('file does not exist'); // dump die debug
        // abort(404);
        return redirect('/');
    }

    $post = cache()->remember("posts.{$slug}", now()->addMinutes(30), fn () => file_get_contents($path));

    return view('post', [
        // 'post' => '<h1>Hello World</h1>' // $post
        'post' => $post
    ]);
})->where('post', '[A-z_\-]+'); // Regular expression constraints
