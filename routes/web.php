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


// Route::get('/register', function () {
//     return view('register');
// });

// Route::get('/welcome', function () {
//     return view('welcome');
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