<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FlowersController;

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

//routes linked to controllers

Route::get('/', function () {
    return view('welcome');
});
route::get('/', function () {
    return view('welcome');
});

Route::get('/flowers', [FlowersController::class, 'index']);

// Show a specific flower :
    Route::get('/flowers/{id}', [FlowersController::class, 'show']);

    // Show the form :
    Route::get('/create/flower', [FlowersController::class, 'create']);
    
    // Save data (using post method):
    Route::post('/create/flower', [FlowersController::class, 'store']);