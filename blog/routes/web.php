<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
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
    $document = YamlFrontMatter::parseFile(
        resource_path('posts/my-fourth-post.html')
    );

    ddd($document);
    return view('posts',[
        'posts' => Post::all()
        ]);
});
Route::get('post/{post}', function($slug){


        $post = Post::find($slug);

        return view('post',[
        'post' => $post
        ]);


})->where( 'post','[A-z\-_]+');
