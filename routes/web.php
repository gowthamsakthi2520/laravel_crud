<?php

use App\Http\Controllers\Sample_controller\Aboutcontroller;
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

Route::get('/Contact',[\App\Http\Controllers\ContactController::class,'create'])->name('contact_form');
Route::post('/Send',[\App\Http\Controllers\ContactController::class,'Store']);
Route::get('/Contact_list',[\App\Http\Controllers\ContactController::class,'list'])->name('Conduct');
Route::get('/Conduct_edit/{id}',[\App\Http\Controllers\ContactController::class,'edit'])->name('Conduct_edit');
Route::post('/update/{id}',[\App\Http\Controllers\ContactController::class,'update'])->name('update');
Route::get('/Delete/{id}',[\App\Http\Controllers\ContactController::class,'delete']);
Route::post('/Contactmailer',[\App\Http\Controllers\Contactmailer::class,'build']);
// Route::get('/mailerHTML',\App\Http\Controllers\Contactmailer::class,'build');