<?php

use Illuminate\Support\Facades\Route;

/*
* Routes for administrators:
**
**The order in which the groups are defined is the order in which they will be displayed
**
*** Groups of routes for administration of users:
*** Groups of routes for administration of roles:
**
*/

Route::prefix('admin')->group(function () {
    require __DIR__.'/admin.php';
});

Route::prefix('role')->group(function () {
    require __DIR__.'/role.php';
});


/*
** End of administrators route group
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
