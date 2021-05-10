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

/* Route::get('/', function () {
    return view('welcome');
}); */

# Para tener todas las rutas resource pordemos hacer
# Route::resource('Name_Ruta','Name_Cotroller');

Auth::routes();

Route::view('/','home')->name('home');
Route::view('/about','about')->name('about');
Route::view('/contact','contact')->name('contact');
Route::post('contact', 'MessageController@store')->name('contact');

Route::get('/projects', 'ProjectController@index')->name('projects.index');
Route::get('/projects/create', 'ProjectController@create')->name('projects.create');

Route::get('/projects/{project}/edit', 'ProjectController@edit')->name('projects.edit');
Route::patch('/projects/{project}/update', 'ProjectController@update')->name('projects.update');

Route::get('/projects/{project}', 'ProjectController@show')->name('projects.show');
Route::post('/projects', 'ProjectController@store')->name('projects.store');

Route::delete('/projects/{project}', 'ProjectController@destroy')->name('projects.destroy');

