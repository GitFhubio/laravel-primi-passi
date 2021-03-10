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
    return view('welcome');
});

Route::get('/help', function () {
    return view('help');
});

Route::get('/hellofabio', function () {
    return view('hellofabio', ['name' => 'fabio','array'=>['pippo','franco'],'array2'=>[],'i'=>1,'users'=>[['age'=>5,'city'=>'Rome'],['age'=>10,'city'=>'Milano']]]);
});

Route::get('/testcontroller', 'View\LandingPage');
