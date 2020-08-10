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
//     return view('home');
// });


    Route::get('/home','HomeController@home');

    Route::get('/register','AuthController@register');
    Route::post('/welcome','AuthController@welcome');

    Route::get('/master',function() {
        return view('adminlte/master');
    });

    
    Route::get('/',function() {
        return view('adminlte/test');
    });

    Route::get('/data-tables',function(){
        return view('adminlte/datatables');
    });

    // Route::get('/pertanyaan/create','PertanyaanController@create');

    // Route::get('/pertanyaan/{pertanyaan_id}','PertanyaanController@show');

    // Route::get('/pertanyaan','PertanyaanController@index');

    // Route::get('/pertanyaan/{pertanyaan_id}/edit','PertanyaanController@edit');

    // Route::put('/pertanyaan/{pertanyaan_id}','PertanyaanController@update');

    // Route::post('/pertanyaan','PertanyaanController@store');
    
    // Route::delete('/pertanyaan/{pertanyaan_id}','PertanyaanController@destroy');

    Route::resource('mempertanyakan','MempertanyakanController');