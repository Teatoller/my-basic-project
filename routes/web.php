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

// Route::get('/contact', function () {
//     return view('contact');
// });

// Route::get('/about', function () {
//     return view('about');
// });

Route::view('/', 'home');

Route::view('/contact', 'contact');

Route::view('/about', 'about');

// Route::get('/customers', function () {

//     $customers = [
//         'John Doe',
//         'Jane Doe',
//         'Bob the builder',
//     ];

//     return view('internals.customer', [
//         'customers'=>$customers,
//     ]);
// });

Route::get('/customers', 'CustomersController@list');
Route::post('/customers', 'CustomersController@store');
