<?php

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts/create', function(){ return view('create-post'); });

Route::post('/posts/new', function(Request $request){

    //validate request data
    $request->validate([
        "title" => [
            "required", 'unique:posts', 'min:10', 'max:100'
        ],
        "body" => [
            "required", "min:10", "max:300"
        ]
    ], [
        "title.unique" => "Post title already exists",
        "title.min" => "Enter valid title",
        "title.max" => "Title is too long",
        "body.min" => "Enter valid post body",
        "body.max" => "Body too long"
    ]);

    //create the post
    Post::create($request->only(['title', 'body']));

    //return response
    return response()->json([
        "message" => "Post created successfully"
    ], Response::HTTP_CREATED);

});