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
    return view('welcome');
});

Route::get('/posts', [App\Http\Controllers\PostController::class, 'index']);
Route::get('/post/{id}/edit', [App\Http\Controllers\PostController::class, 'edit']);
Route::post('/edit_post', [App\Http\Controllers\PostController::class, 'update']);
Route::post('/create_post', [App\Http\Controllers\PostController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
