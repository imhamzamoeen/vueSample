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


Route::view('/{any}', 'welcome')
    ->where('any', '.*');               // yaani koi b url ho usko idhr bhej do 
                                        // where conidtion on route is k jo paramter ho uski value kia honi chaiye tu hm n kha uski value kuch b ho