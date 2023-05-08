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

Route::get('/', function () {

    //DATA ARRAY METHOD
    // $greeting = ['name' => 'Ciao Mondo!'];
    // return view('home', $greeting);

    //VARIABLES METHOD
    $greeting = 'Hello World!';
    return view('home', compact('greeting'));
});
