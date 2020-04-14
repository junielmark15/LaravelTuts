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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
   return view('about',[
       'articles' => App\Article::take(3)->latest()->get()
   ]);
});
Route::post('/articles','ArticlesController@store');
Route::get('/articles','ArticlesController@index');
Route::get('/articles/create','ArticlesController@create');
Route::get('/articles/{article}', 'ArticlesController@show')->name('article.show');
Route::get('/articles/{article}/edit', 'ArticlesController@edit')->name('article.edit');
Route::put('/articles/{article}', 'ArticlesController@update');
