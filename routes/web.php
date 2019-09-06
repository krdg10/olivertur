<?php

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
Route::get('/','HomeController@index')->name('/'); // INDEX
Auth::routes();//ver pq tirar isso aqui dá bo
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function () {  

    Route::post('/novoPost', 'PostsController@store')->name('posts.store');
    Route::get('/blog', 'PostsController@index')->name('posts.index');
    Route::get('/blog/{id}', 'PostsController@show')->name('posts.show');
    Route::get('/blog/categoria/{categoria}', 'PostsController@categoria')->name('posts.categoria');
    Route::get('/blog/autor/{autor}', 'PostsController@autor')->name('posts.autor');
    Route::get('/blog/edit/{id}', 'PostsController@edit')->name('posts.edit');
    Route::put('/blog/edit/{id}', 'PostsController@update')->name('posts.update');
    Route::delete('/blog/edit/{id}', 'PostsController@destroy')->name('posts.destroy');
    Route::put('/blog/edit/foto/{id}', 'FotosController@update')->name('fotos.update');
    Route::delete('/blog/edit/foto/{id}', 'FotosController@destroy')->name('fotos.destroy');

    Route::get('/novoPost', function () {
        return view('post.create');
    });
});