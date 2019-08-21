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

// RUTAS PROFILE (Vista de perfil de cliente con vistas a sus mascotas y planes)
//Route::get('/user-profile','InterfazController@get_user_profile');//compact('detalle_usuario')
Route::view('/user-profile','pages.profile.user');
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