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

    // navbar links
    $links = [
        'home',
        'about',
        'contact',
        'careers'
    ];

    return view('home', compact('greeting', 'links'));
})->name('home');

Route::get('/about', function () {

    //page title
    $title = 'About';

    // navbar links
    $links = [
        'home',
        'about',
        'contact',
        'careers'
    ];

    return view('about', compact('title', 'links'));
})->name('about');

Route::get('/contact', function () {

    //page title
    $title = 'Contact us';

    // navbar links
    $links = [
        'home',
        'about',
        'contact',
        'careers'
    ];

    return view('contact', compact('title', 'links'));
})->name('contact');

Route::get('/careers', function () {

    //page title
    $title = 'Careers';

    // navbar links
    $links = [
        'home',
        'about',
        'contact',
        'careers'
    ];

    return view('careers', compact('title', 'links'));
})->name('careers');
