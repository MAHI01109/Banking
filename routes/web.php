<?php

use App\Http\Controllers\BankController;
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

//Route::get('/', function () {
 //   return view('welcome');
//});
Route::get("/",[BankController::class,"index"]);
Route::get("/creat",[BankController::class,"creat"]);
Route::get("/withdr",[BankController::class,"withdr"]);
Route::get("/deposit",[BankController::class,"deposit"]);
Route::get("/Acc",[BankController::class,"Acc"]);
Route::get("/bala",[BankController::class,"bala"]);

