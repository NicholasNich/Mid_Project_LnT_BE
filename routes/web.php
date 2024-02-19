<?php

use Illuminate\Support\Facades\Route;
use App\Http\EmployeeController;

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

Route::get('/', [EmployeeController::class, 'viewEmployee']);

Route::get('/add', [EmployeeController::class, 'add']);

Route::post('/store', [EmployeeController::class, 'store']);

Route::get('/employee/{name}', [EmployeeController::class, 'viewDetails']);

Route::get('/update/{nama}', [EmployeeController::class, 'viewUpdate']);

Route::patch('/saveUpdate/{nama}', [EmployeeController::class, 'updateData']);

Route
::delete('/delete/{nama}', [EmployeeController::class, 'delete']);
