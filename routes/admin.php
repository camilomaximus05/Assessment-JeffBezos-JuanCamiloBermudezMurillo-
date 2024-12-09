<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
 * Routes for administration of users:
 **
 ** The order in which the routes are defined is the order in which they will be displayed
 **
 *** Index: Is a list of users
 *** Store: Store a new user
 *** Create: Create a new user
 *** Show: Show a user
 *** Edit: Edit a user
 *** Update: Update a user
 *** Destroy: Delete a user
*/


Route::get('/', [UserController::class, 'index'])->name('admin.index');
Route::post('/', [UserController::class, 'store'])->name('admin.store');
Route::get('/create', [UserController::class, 'create'])->name('admin.create');
Route::get('/{id}', [UserController::class, 'show'])->name('admin.show');
Route::get('/{id}/edit', [UserController::class, 'edit'])->name('admin.edit');
Route::put('/{id}', [UserController::class, 'update'])->name('admin.update');
Route::delete('/{id}', [UserController::class, 'destroy'])->name('admin.destroy');
