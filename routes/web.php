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
//blogs. Geral e filtrados
Route::get('/blog', 'PostsController@index')->name('posts.index');
Route::get('/blog/{id}', 'PostsController@show')->name('posts.show');
Route::get('/blog/categoria/{categoria}', 'PostsController@categoria')->name('posts.categoria');
Route::get('/blog/autor/{autor}', 'PostsController@autor')->name('posts.autor');
//pacotes e pacote especifico
Route::get('/pacotes', 'PacotesController@index')->name('pacotes.index');
Route::get('/pacotes/{id}', 'PacotesController@show')->name('pacotes.show');

Route::get('/sobreNos', function () {
  return view('sobreNos.index');
});
//destinos
Route::get('/peru', function () {
  return view('destinos.peru');
});
Route::get('/pantanalSul', function () {
  return view('destinos.pantanal');
});
Route::get('/bolivia', function () {
  return view('destinos.bolivia');
});
//login e logout
Route::get('login', [
  'as' => 'login',
  'uses' => 'Auth\LoginController@showLoginForm'
]);
Route::post('login', [
  'as' => '',
  'uses' => 'Auth\LoginController@login'
]);
Route::post('logout', [
  'as' => 'logout',
  'uses' => 'Auth\LoginController@logout'
]);


  
Route::group(['middleware' => ['auth']], function () {  
  //criação de post e pacote
  Route::post('/novoPost', 'PostsController@store')->name('posts.store');
  Route::post('/novoPacote', 'PacotesController@store')->name('pacotes.store');
  Route::get('/novoPost', function () {
    return view('post.create');
  });
  Route::get('/novoPacote', function () {
    return view('pacote.create');
  });

  //crud blog
  Route::get('/blog/edit/{id}', 'PostsController@edit')->name('posts.edit');
  Route::put('/blog/edit/{id}', 'PostsController@update')->name('posts.update');
  Route::delete('/blog/edit/{id}', 'PostsController@destroy')->name('posts.destroy');
  Route::post('/store/fotoPost/{id}', 'FotosController@store_post')->name('fotos.store_post');
  //crud pacote
  Route::get('/pacotes/edit/{id}', 'PacotesController@edit')->name('pacotes.edit');
  Route::put('/pacotes/edit/{id}', 'PacotesController@update')->name('pacotes.update');
  Route::delete('/pacotes/edit/{id}', 'PacotesController@destroy')->name('pacotes.destroy');
  Route::post('/store/fotoPacote/{id}', 'FotosController@store_pacote')->name('fotos.store_pacote');

  //foto edit e delete
  Route::put('/edit/foto/{id}', 'FotosController@update')->name('fotos.update');
  Route::delete('/edit/foto/{id}', 'FotosController@destroy')->name('fotos.destroy');
  
  //register
  Route::get('register', [
    'as' => 'register',
    'uses' => 'Auth\RegisterController@showRegistrationForm'
  ]);
  Route::post('register', [
    'as' => '',
    'uses' => 'Auth\RegisterController@register'
  ]);
  
});

//https://laraveldaily.com/9-things-you-can-customize-in-laravel-registration/
//https://stackoverflow.com/questions/43224300/override-default-auth-routes-in-laravel-5-4
//https://laracasts.com/discuss/channels/general-discussion/only-admin-can-create-new-users
//https://maxkostinevich.com/blog/default-admin-user-in-laravel