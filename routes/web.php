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
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/blog', 'PostsController@index')->name('posts.index');
Route::get('/pacotes', 'PacotesController@index')->name('pacotes.index');
Route::get('/blog/{id}', 'PostsController@show')->name('posts.show');
Route::get('/pacotes/{id}', 'PacotesController@show')->name('pacotes.show');
Route::get('/blog/categoria/{categoria}', 'PostsController@categoria')->name('posts.categoria');
Route::get('/blog/autor/{autor}', 'PostsController@autor')->name('posts.autor');

Auth::routes();
Route::group(['middleware' => ['auth']], function () {  

    Route::post('/novoPost', 'PostsController@store')->name('posts.store');
    Route::post('/novoPacote', 'PacotesController@store')->name('pacotes.store');
    Route::get('/blog/edit/{id}', 'PostsController@edit')->name('posts.edit');
    Route::put('/blog/edit/{id}', 'PostsController@update')->name('posts.update');
    Route::delete('/blog/edit/{id}', 'PostsController@destroy')->name('posts.destroy');

    Route::get('/pacotes/edit/{id}', 'PacotesController@edit')->name('pacotes.edit');
    Route::put('/pacotes/edit/{id}', 'PacotesController@update')->name('pacotes.update');
    Route::delete('/pacotes/edit/{id}', 'PacotesController@destroy')->name('pacotes.destroy');


    Route::put('/edit/foto/{id}', 'FotosController@update')->name('fotos.update');
    Route::delete('/edit/foto/{id}', 'FotosController@destroy')->name('fotos.destroy');
    Route::post('/store/fotoPacote/{id}', 'FotosController@store_pacote')->name('fotos.store_pacote');
    Route::post('/store/fotoPost/{id}', 'FotosController@store_post')->name('fotos.store_post');

    Route::get('/novoPost', function () {
        return view('post.create');
    });
    Route::get('/novoPacote', function () {
        return view('pacote.create');
    });
});