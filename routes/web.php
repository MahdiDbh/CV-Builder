<?php

use App\Http\Controllers\backend\backendcontroller;
use App\Http\Controllers\frontend\frontendcontroller;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[frontendcontroller::class,'index']);
Route::get('/user/cv',[backendcontroller::class,'usercv']);