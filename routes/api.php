<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|


*/
//posts

//CRUD is basically
//1.get all(GET) /api/posts
//2. create a post(POST) /api/posts
//3.GET A SINGLE POST(GET) /api/posts/{id}
// 3. update a single(PUT/PATCH) /api/posts/{id}
//4.Delete (DELETE) /api/posts/{id}

Route::get('/posts',);

//to create a resource (posts) in laravel

//php artisan make::model -m

//create a service? Eloquent ORM
//create a controller to get info from the database
//return that info




Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
