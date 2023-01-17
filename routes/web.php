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

Route::get('/', function () {
    return view('layout');
});

Route::get('/rooms', function () {
    return view('room');
});



Route::get('/welcome2', function () {
    return view('welcome');

});

Route::get('/carrusel', function () {
    return view('carrousel');

});


// Route::get('/test', function () {
//     return view('test');

// });


Route::get('/test', function () {

    $user = DB::table('users')->get();

    return view('test', ['user' => $user]);
});




// Route::get('/raaa2', function () {
//     return view('test');
// });

// Route::get('/raaa2', function () {
//     return ;
// });


