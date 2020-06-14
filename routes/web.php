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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/about', function () {
//     $nama = 'Duh dek Ngehalu ae';
//     return view('about', ['nama' => $nama]);
// });

route::get('/', 'PagesController@home');
route::get('/about', 'PagesController@about');

route::get('/anggota', 'AnggotaController@index');

// route::get('/students', 'StudentsController@index');
// route::get('/students/create', 'StudentsController@create');
// route::get('/students/{student}', 'StudentsController@show');
// route::post('/students', 'StudentsController@store');
// route::delete('/students/{student}', 'StudentsController@destroy');
// route::get('/students/{student}/edit', 'StudentsController@edit');
// route::patch('/students/{student}', 'StudentsController@update');

route::resource('students', 'StudentsController');