<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LrequestController;
use App\Http\Controllers\LtypeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified', 'role:admin'])->name('admin.')->prefix('admin')->group(function () {

    Route::get('/', [IndexController::class, 'index'])->name('index');
    Route::resource('/roles', RoleController::class);
    Route::resource('/leavetypes', LtypeController::class);


    Route::resource('/employees', EmployeeController::class);
});

Route::middleware(['auth', 'verified', 'role:employee'])->name('employee.')->prefix('employee')->group(function () {
    Route::resource('leaverequests', LrequestController::class);
});
require __DIR__ . '/auth.php';
