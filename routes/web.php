<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\IncomingController;
use App\Http\Controllers\PersonnelController;
use App\Http\Controllers\DepInventoryController;
use App\Http\Controllers\ReturnInventoryController;
use App\Http\Controllers\DisposenInventoryController;
use Illuminate\Support\Facades\Auth;

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
    return redirect()->route('login');
});

// Route::get('/incoming', function () {
//     return view('incoming');
// });

Route::post('/category', [CategoryController::class, 'store'])->name('category');
Route::get('/category', [CategoryController::class, 'index'])->name('category');

Route::get('/incoming', [IncomingController::class, 'index'])->name('incoming');
Route::post('/incoming', [IncomingController::class, 'store'])->name('incoming');

Route::get('/personnel', [PersonnelController::class, 'index'])->name('personnel');
Route::post('/personnel', [PersonnelController::class, 'store'])->name('personnel');

Route::get('/subcategory', [SubcategoryController::class, 'index'])->name('subcategory');
Route::post('/subcategory', [SubcategoryController::class, 'store'])->name('subcategory');

Route::get('/deploy', [DepInventoryController::class, 'index'])->name('deploy');
Route::post('/deploy', [DepInventoryController::class, 'store'])->name('deploy');

Route::get('/return', [ReturnInventoryController::class, 'index'])->name('return');
Route::post('/return', [ReturnInventoryController::class, 'store'])->name('return');

Route::get('/dispose', [DisposenInventoryController::class, 'index'])->name('dispose');
Route::post('/dispose', [DisposenInventoryController::class, 'store'])->name('dispose');

Route::get('/reserve', [ReserveInventoryController::class, 'index'])->name('reserve');
Route::post('/reserve', [ReserveInventoryController::class, 'store'])->name('reserve');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
