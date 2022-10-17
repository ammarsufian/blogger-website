<?php

use App\Http\Livewire\ShowPost;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\IndexPage;

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
    Route::get('/', IndexPage::class)->name('index');
    Route::get('/post/{post}', ShowPost::class)->name('post.show');
    // Route::get('/test/{post}',ShowPost::class)->name('post.show');
});

