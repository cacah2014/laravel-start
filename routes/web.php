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
    return view('welcome');
});

Route::get('/software', function () {
    $softwares = [
        ['name' => 'Mehdi', 'family' => 'Zenhari', 'email' => 'zenhari@gmail.com', 'age' => 45],
        ['name' => 'Reza', 'family' => 'Ahmadi', 'email' => 'Ahmadi@gmail.com', 'age' => 20],
        ['name' => 'Hamid', 'family' => 'Rasouli', 'email' => 'Rasouli@gmail.com', 'age' => 33]
    ];
    return view('software', ['softwares' => $softwares]);
});
