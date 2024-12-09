<?php

use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;

/*
 * Routes for administration of roles:
 **
 ** The order in which the routes are defined is the order in which they will be displayed
 **
 *** Index: Is a list of roles
 *** Store: Store a new role
 *** Create: Create a new role
 *** Show: Show a role
 *** Edit: Edit a role
 *** Update: Update a role
 *** Destroy: Delete a role
*/

Route::get('/', [RoleController::class, 'index'])->name('roles.index');
Route::post('/', [RoleController::class, 'store'])->name('roles.store');
Route::get('/create', [RoleController::class, 'create'])->name('roles.create');
Route::get('/{id}', [RoleController::class, 'show'])->name('roles.show');
Route::get('/{id}/edit', [RoleController::class, 'edit'])->name('roles.edit');
Route::put('/{id}', [RoleController::class, 'update'])->name('roles.update');
Route::delete('/{id}', [RoleController::class, 'destroy'])->name('roles.destroy');
