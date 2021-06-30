<?php
use app\Http\Controllers\Usercontroller;
use app\Http\Controllers\Product;
use app\Http\Controllers\EmployeeController;
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

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', 'Usercontroller@login');
// Route::get('/', 'Product@index');
Route::get('/details/{id}', 'Product@details');

// Route::view('/', "login");
Route::get('/', 'EmployeeController@showEmployees');
Route::get('/employee/pdf','EmployeeController@createPDF');
