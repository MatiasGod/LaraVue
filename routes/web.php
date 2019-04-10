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
    return view('welcome');
});
Route::get('task', 'Controlador@index');

/* Route::get('/task', function () {
    return array(
        array('id' => 1 , 'name' => 'tarea uno'),
        array('id' => 2 , 'name' => 'tarea dos'),
        array('id' => 3 , 'name' => 'tarea tres')
    );
}); */