<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/todos', [TodoController::class, 'index'])->name('todoIndex');
Route::post('/add-todo', [TodoController::class, 'store'])->name('todoStore');
Route::put('/update-todo/{id}', [TodoController::class, 'update'])->name('todoUpdate');
Route::delete('/delete-todo/{id}', [TodoController::class, 'destroy'])->name('todoDestroy');
