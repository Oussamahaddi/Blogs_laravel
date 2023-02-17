<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Models\Blog;

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

Route::get('/', [BlogController::class , 'index']);

// fetch and get single product with id
Route::get('/singleBlog/{blog}',[BlogController::class , 'show']);

Route::get('/blogs/create', [BlogController::class , 'create']);