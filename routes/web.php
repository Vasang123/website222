<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GlobalToDoListController;
use App\Http\Controllers\HomeController;
use App\Models\GlobalToDoList;
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

Route::middleware(['guest'])->group(function () {
    Route::get('/', [AuthController::class, 'showLogin']);
    Route::post('/', [AuthController::class, 'login']);
});
Route::middleware(['login'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/changePass/{id}', [AuthController::class, 'showChangePassword']);
    Route::post('/changePass/{id}', [AuthController::class, 'changePassword']);
    Route::get('/todolist/angkatan', [GlobalToDoListController::class,'index'])->name('todolist.angkatan');
    Route::post('/todolist/angkatan', [GlobalToDoListController::class,'store'])->name('create.todolist.angkatan');
    Route::get('/todolist/{id}', [GlobalToDoListController::class,'edit']);
    Route::post('/todolist/{id}', [GlobalToDoListController::class,'update']);
    Route::get('/finish/todolist/{id}', [GlobalToDoListController::class,'finish']);
});
Route::post('/logout', [AuthController::class, 'logout']);
