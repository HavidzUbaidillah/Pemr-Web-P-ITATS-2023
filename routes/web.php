<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function (){
    return view('page1-home.home');
});
Route::get('/login', function (){
    return view('page2-login.login');
});
Route::post('/login-auth', [LoginController::class, 'authLogin']);
Route::get('/dashboard',function(){
    return view('page3-dashboard.dashboard');
});
Route::get('/kelas',function(){
    return view('page4-kelas.kelas');
});
Route::get('/tes',function(){
    return view ('dash');
});