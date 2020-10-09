<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Livewire\Info;

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



Auth::routes();

Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/blog', [FrontendController::class, 'blog'])->name('blog');
Route::get('/notizia/{article_id}/{article_title?}', [FrontendController::class, 'article'])->name('article');

