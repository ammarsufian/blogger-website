<?php

use Illuminate\Support\Facades\Route;
use App\Domains\ApplicationManagement\Http\Controllers\IndexPageController;
use App\Domains\ApplicationManagement\Http\Controllers\PostDetailPageController;

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

Route::get('/', IndexPageController::class)->name('index');

Route::get('/post/{id}', PostDetailPageController::class)->name('post.show');
