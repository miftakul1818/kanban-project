<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController; // Ditambahkan

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
// 127.0.0.1:8000/taul ==> <h1> SAYA TAUL</h1>
Route::get('/', function () {
    return view('welcome');//Diperbarui
});

Route::get('/', function () {

    return view('welcome');

});


Route::get('/tasks/', [TaskController::class, 'index']); // Ditambahkan