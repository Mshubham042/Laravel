<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpController;


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

Route::get('/demo', function () {
    return view('home');
});
Route::get('/home', function () {
    return view('template/layout');
});
Route::post('/register' , [EmpController::class ,'insertdata']);
Route::get('/user_Data' , [EmpController::class ,'showdata'] );
Route::get('/delete_user/{id}' , [EmpController::class ,'deleteuser'] );
Route::get('/edit_page/{id}' , [EmpController::class ,'editfun'] );

