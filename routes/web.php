<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix("/users")->group(function (){
    Route::get("/", [\App\Http\Controllers\UserController::class, "index"])->name("users.list");
    Route::get("/create", [\App\Http\Controllers\UserController::class, "showFormCreate"])->name("users.showFormCreate");
    Route::post("/create", [\App\Http\Controllers\UserController::class, "create"])->name("users.create");
    Route::get("/delete/{id}", [\App\Http\Controllers\UserController::class, "delete"])->name("users.delete");
    Route::get("/edit/{id}", [\App\Http\Controllers\UserController::class, "showFormEdit"])->name("users.showFormEdit");
    Route::post("/edit/{id}", [\App\Http\Controllers\UserController::class, "edit"])->name("users.edit");
    Route::get("/search", [\App\Http\Controllers\UserController::class, "search"])->name("users.search");

});
