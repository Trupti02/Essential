<?php

use App\Http\Controllers\BlogController;

use App\Http\Controllers\DashboardController;
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

route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

//blog
route::get('/blog/index',[BlogController::class,'index'])->name('blog.index');
route::get('/blog/create',[BlogController::class,'create'])->name('blog.create');




