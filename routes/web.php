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
    
    $data=[
        'title' => 'Hello User',
         'earth_img' => 'earth-globe.svg',
    ];

    return view('home', $data); 

});

Route::get('/hello', function(){
    $data=[
        'text' => 'Hello to you dear World!!',
        'penguin_hi' => 'penguin-hi.svg',
        'background_callout' => 'callout-img.svg'
    ];
    return view('hello', $data);
});

Route::get('/not-hello', function(){
    $data=[
        'penguin_back' => 'back-penguin.svg',
        'earth_img' => 'earth-globe.svg'
    ];

    return view('not-hello', $data);
});