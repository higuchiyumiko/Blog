<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\StudentController;
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
Route::get('/', [PostController::class, 'index'])->name('index')->middleware('auth');

Route::get('/categories/{category}', [PostController::class, 'index'])->name('index')->middleware('auth');

Route::get('/', [PostController::class, 'index']);
Route::get('/posts/create', [PostController::class, 'create']);
Route::get('/posts/{post}/edit', [PostController::class, 'edit']);
Route::put('/posts/{post}', [PostController::class, 'update']);
Route::get('/posts/{post}',[PostController::class,'show']);
Route::post('/posts', [PostController::class, 'store']);
Route::delete('/posts/{post}', [PostController::class,'delete']);

Route::get('/categories/{category}',[CategoryController::class,'index']);

Route::get('/student',[StudentController::class,'index']);
Route::get('/student/create',[StudentController::class,'create']);
Route::post('/student/store',[StudentController::class,'store']);

Route::controller(PostController::class)->middleware(['auth'])->group(function(){
    Route::get('/','index');
    Route::get('/posts/create','create');
    Route::get('/posts/{post}/edit','edit');
    Route::put('/posts/{post}','update');
    Route::get('/posts/{post}','show');
    Route::post('/posts','store');
    Route::delete('/posts/{post}','delete');
});

Route::controller(StudentController::class)->middleware(['auth'])->group(function(){
    Route::get('/student', 'index');
    Route::get('/student/create', 'create');
    Route::post('/student/store', 'store');
});