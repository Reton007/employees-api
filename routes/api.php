<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/branches', [ Api\BrancheController::class, 'index' ]);
Route::get('/branches/{branche}', [ Api\BrancheController::class, 'show' ]);
Route::post('/branches', [ Api\BrancheController::class, 'create' ]);
Route::post('/employees', [ Api\EmployeeController::class, 'create' ]);