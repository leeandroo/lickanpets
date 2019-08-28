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
//RUTAS AUTH (Autentificación)
Route::view('/','pages.landing');
Route::view('/login','auth.login');
Route::view('/register','auth.register');
Route::post('register', 'Auth\RegisterController@register')->name('register');
Route::post('login', 'Auth\LoginController@login')->name('login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

// RUTAS PROFILE (Vista de perfil de cliente con vistas a sus mascotas y planes)
//Route::get('/user-profile','InterfazController@get_user_profile');//compact('detalle_usuario')
Route::get('/user-profile', 'InterfazController@get_user_profile');

Route::view('/user-profile/mascota','pages.profile.cliente.pet');
Route::view('/user-profile/planes','pages.profile.cliente.plan');
Route::view('/user-profile/mascota/create','pages.mascota.create');
Route::view('/user-profile/mascota/index', 'pages.mascota.index');

Route::view('/cotizar', 'pages.stepers');
Route::view('/sugerido', 'pages.plan-sugerido');
Route::view('/plan-editar', 'pages.plan-edit');


// Route::get('/cotizar','InterfazController@cotizar');
// Route::get('/sugerido','InterfazController@sugerido');
// Route::get('/plan-editar','InterfazController@plan_editar');
//Route::view('/cotizar','pages.steper');