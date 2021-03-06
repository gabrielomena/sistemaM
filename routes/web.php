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

Route::get('/', function () {
    return view('/admin/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/login', 'AuthController@login')->name('admin.login');

Route::resources([
    'partidos'=>'PartidosController',
    'municipios'=>'MunicipiosController',
    'autoridades'=>'AutoridadesController',
    'regionals'=>'RegionalsController',
    'hospitals'=>'HospitalController'
]);

