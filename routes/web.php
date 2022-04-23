<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerArticle;


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
    $name = "Maiva";
    return view('welcome', ["name" => $name]);
});

Route::get('/',[ControllerArticle::class,'index']);
Route::get('/add',[ControllerArticle::class,'create']);
Route::post('/add',[ControllerArticle::class,'store']);
Route::get('/delete/{id}',[ControllerArticle::class,'destroy']);
Route::get('/edit/{id}',[ControllerArticle::class,'edit']);
Route::post('/edit/{id}',[ControllerArticle::class,'update']);
Route::get('/article/{id}',[ControllerArticle::class,'show']);