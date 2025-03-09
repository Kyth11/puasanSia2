<?php

use App\Http\Controllers\TransactionController;
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

Route::get('/.dabs/Transactions',[TransactionController::class,'getInspections']);

Route::get('/.dabs2/Transactions',[TransactionController::class,'getInspects']);
Route::get('/.dabs3/Transactions',[TransactionController::class,'getInspectionChallenging']);
Route::get('/.dabs4/Transactions',[TransactionController::class,'getInspectdiff']);
