<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('add_books');
// });php artisan se

Route::get('/', 'HomeController@index');
Route::get('/search_book', 'HomeController@search_book');
Route::post('/add_book', 'HomeController@add_book');
Route::get('/book_list', 'HomeController@book_list');
Route::post('/issue_book', 'HomeController@issue_book');