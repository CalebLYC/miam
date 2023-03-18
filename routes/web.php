<?php

use App\Http\Controllers\ManagerController;
use App\Http\Controllers\PlatController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RestaurantController;
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
})->name('home');

Route::resource('restaurants', RestaurantController::class);
Route::resource('plats', PlatController::class);

Route::get('/about', function(){
    return view('about');
})->name('about');

Route::get('/myPlats', [PlatController::class, 'index'])->name('myPlats');
Route::get('/manageResto', [RestaurantController::class, 'manageResto'])->name('manageResto');
Route::get('/restoDashboard', [ManagerController::class, 'dashboard'])->name('restoDashboard');
Route::get('/manage', [ManagerController::class, 'manage'])->name('managerDashboard');
Route::get('/logToManage', [ManagerController::class, 'logToManage'])->name('logToManage');
Route::get('/logToResto', [ManagerController::class, 'logToResto'])->name('logToResto');
Route::get('/restoProfile', [ManagerController::class, 'profile'])->name('restoProfile');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
