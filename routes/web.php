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
//RUTAS interfaz (solo redireccionamineto de vistas)
Route::get('/', 'InterfazController@get_landing_page'); // redireccionar a la pagina de inicio
Route::get('/login', 'InterfazController@get_login_page'); // redireccionar a la pagina de inicio de sesion
Route::get('/register', 'InterfazController@get_register_page'); // redireccionar a la pagina de registro
Route::get('/user-profile', 'InterfazController@get_user_profile'); // redirecciona al dashboard con la informacion del perfil
//RUTAS AUTH (Autentificación)
Route::post('register', 'Auth\RegisterController@register')->name('register');
Route::post('login', 'Auth\LoginController@login')->name('login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
//RUTAS Mascota
Route::get('/user-profile/mascota', 'MascotaController@index'); // redirecciona al controlador de mascota para obtener informacion y depues ir a la vista de las mascotas
Route::post('registerPet', 'MascotaController@agregarMascota')->name('registerPet');//redireccinoa al controlador para la insersion 
Route::get('/mascota/create','MascotaController@listEspecies');


// RUTAS PROFILE (Vista de perfil de cliente con vistas a sus mascotas y planes)
//Route::get('/user-profile','InterfazController@get_user_profile');//compact('detalle_usuario')

Route::get('/varianteexitosa', 'VarianteController@exitoso')->name('variante.resultado');


Route::view('/user-profile/planes','pages.profile.cliente.plan');
Route::view('/cotizar', 'pages.stepers');
Route::view('/sugerido', 'pages.plan-sugerido');
Route::view('/plan-editar', 'pages.plan-edit');

