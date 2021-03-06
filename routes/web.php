<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

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

//Route::get('/users', function () {
//    return view('layout');
//});

//Route::get('users', function()
//{
//    return View::make('users');
//});

Route::get('users', function()
{
    $users = User::all();
 
    return View::make('users')->with('users', $users);
});
