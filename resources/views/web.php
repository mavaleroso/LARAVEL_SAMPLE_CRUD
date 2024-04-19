<?php

use App\Http\Controllers\StaffController;
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

Route::get('/', [StaffController::class, 'index']);
Route::get('/create', [StaffController::class, 'create']);
Route::post('/store', [StaffController::class, 'store']);
Route::get('/edit/{id}', [StaffController::class, 'edit']);
