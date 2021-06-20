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
//     return view('welcome');
// });


Route::get('/nome', function () {
    return view('nome',[
        "fullName" => "Andrei cismasu",
        "adress" => "via della Riserva nuova 70",
        "city" => "Rome",
        
    ]);
})-> name("contatto");



Route::get('/', function () {
    return view('home' , [
        "name" => "Andrei",
        "surname" => "Cismasu",
        "email" => "andrei_cismas@yahoo.it",

    ]);
})-> name("startPage");

Route::get('/contact_2', function () {
    return view('contact_2' , [
        "name" => "Irina",
        "surname" => "Solomon",
        "email" => "irina-sol@yahoo.it",

    ]);
})-> name("contatto_2");



