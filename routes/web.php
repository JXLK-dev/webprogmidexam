<?php

use App\Http\Controllers\Page_Controller;
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

Route::get('/', [Page_Controller::class, ('index')]);
Route::get('/book_detail', [Page_Controller::class, ('book_detail')]);
Route::get('/categories', [Page_Controller::class, ('categories')]);
Route::get('/publishers', [Page_Controller::class, ('publishers')]);
Route::get('/contact', [Page_Controller::class, ('contact')]);
