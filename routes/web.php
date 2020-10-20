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
Route::get('roles', function()
{
	return \App\Role::with('user')->get();
});

Route::get('/', ['as' => 'home', 'uses' => 'PagesController@home']);

//Route::get('contactame', ['as' => 'contactos', 'uses' => 'PagesController@contact']);
//Route::post('contacto', 'PagesController@mensajes');

Route::get('saludos/{nombre?}', ['as' => 'saludo', 'uses' => 'PagesController@saludo'])->where('nombre', "[A-Za-z]+");

//rest eloquent
Route::resource('mensajes', 'MessagesController');
Route::resource('usuarios', 'UsersController');
//rest normal
// Route::get('mensajes', ['as' => 'messages.index', 'uses' => 'MessagesController@index']);
// Route::get('mensajes/create', ['as' => 'messages.create', 'uses' => 'MessagesController@create']);
// Route::post('mensajes', ['as' => 'messages.store', 'uses' => 'MessagesController@store']);
// Route::get('mensajes/{id}', ['as' => 'messages.show', 'uses' => 'MessagesController@show']);
// Route::get('mensajes/{id}/edit', ['as' => 'messages.edit', 'uses' => 'MessagesController@edit']);
// Route::put('mensajes/{id}', ['as' => 'messages.update', 'uses' => 'MessagesController@update']);
// Route::delete('mensajes/{id}', ['as' => 'messages.destroy', 'uses' => 'MessagesController@destroy']);

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
// Route::get('login', 'Auth\LoginController@showLoginForm');
// Route::post('login', 'Auth\LoginController@login');