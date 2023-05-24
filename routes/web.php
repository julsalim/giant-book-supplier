<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

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

Route::get('/', [WebController::class, 'home']);
Route::get('/publisher', [WebController::class, 'publisher']);
Route::get('/detail/{books_id}', [WebController::class, 'detail']);
Route::get('/category/{categories:category}', [WebController::class, 'filterCategory']);
Route::get('/publisher/detail/{publisher_id}', [WebController::class, 'publisherDetail']);
Route::get('/contact', [WebController::class, 'contact']);
