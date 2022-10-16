<?php

use App\Domains\ApplicationManagement\Http\Controllers\PostController;
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

Route::prefix('{local}')->group(function () {
    Route::get('/', [PostController::class, 'index'])->name('index');
    Route::get('/post/{post}', [PostController::class, 'show'])->name('post.show');
});

