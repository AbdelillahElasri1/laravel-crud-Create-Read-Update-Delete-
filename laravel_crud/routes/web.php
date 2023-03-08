<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

// Route::get('/', function () {
//     return view('posts/layout');
// });
// Route::get('/create', function(){
//     return view('posts/create');
// });
// Route::get('/edit', function(){
//     return view('posts/edit');
// });
// Route::get('/show', function(){
//     return view('posts/show');
// });
// Route::get('/index', function(){
//     return view('posts/index');
// });
Route::resource('posts', PostController::class);
