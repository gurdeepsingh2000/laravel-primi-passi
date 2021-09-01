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
    return view('HomePage',
        [
            'name_website' => 'Laravel Boolean',
            'LaravelLogo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png',
            'about' => 'http://127.0.0.1:8000/about',
            'documentation' => 'https://laravel.com/docs/'
        ]
    );
});


Route::get('/about', function () {
    return view('About',[
        'description' => 'Laravel is a free, open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the model–view–controller (MVC) architectural pattern and based on Symfony.',
        'homepage' => 'http://127.0.0.1:8000/',
        'name_section' => 'About',
        'LaravelLogo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png',
    ]);
});
