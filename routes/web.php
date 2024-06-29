<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $data = [
       "name" => "Simon",
       "surname" => "Misericordia",
       "age" => 28
       
    ];


    return view('welcome', $data );
});


Route::get('/home', function () {
    return view('welcome');
});
