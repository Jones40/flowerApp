<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlowerController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ApiController;
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

/*
    Create a route every time you need :
        - To access a page / view
        - To perfom an action (saving in DB; looking for something)
*/

Route::get('/flowers', [FlowerController::class, 'index']);

// Show the form to create flowers
Route::get('/new-flower', [FlowerController::class, 'create']);
Route::post('/new-flower', [FlowerController::class, 'store']);

// Show the form to update a  flower
Route::get('/update/flower/{id}', [FlowerController::class, 'edit'])->name('update.flower');
Route::post('/update/flower/{id}', [FlowerController::class, 'update']);

Route::get('/delete/flower/{id}', [FlowerController::class, 'destroy'])->name('delete.flower');;
Route::get('/show/flower/{id}', [FlowerController::class, 'show'])->name('show.flower');;

Route::get('/contact', [ContactController::class, 'create']);
Route::post('/contact', [ContactController::class, 'store']);


Route::get('/post/create', [PostController::class, 'create']);
Route::post('/post', [PostController::class, 'store']);

Route::get('/api/get-flowers', [ApiController::class, 'getFlowers']);
Route::get('/api/get-flower/qantity={amount}', [ApiController::class, 'getFlowersAmount']);
Route::get('/api/get-flower/id={id}', [ApiController::class, 'getFlower']);
Route::get('/api/get-flower/type={id}', [ApiController::class, 'getFlowerType']);

// CREATE THE ROUTE TO DISPLAY ONE SPECIFIC FLOWER
Route::get('/ajax-form', [FlowerController::class, 'ajaxForm'])->name('show.ajax.form');
// When we submit the form
Route::post('/ajax-answer', [FlowerController::class, 'ajaxAnswer'])->name('submit.ajax.form');

// User register form :
Route::get('/register-flower', [UserController::class, 'create'])->name('register.form');
// Submit register form
Route::post('/register-flower', [UserController::class, 'store'])->name('register.insert');

// User lohin form :
Route::get('/login', [UserController::class, 'show_login'])->name('login.form');
// Submit login form
Route::post('/login', [UserController::class, 'login'])->name('login.');
