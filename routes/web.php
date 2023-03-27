<?php

use App\Http\Controllers\ManagerController;
use App\Http\Controllers\PlatController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RateController;
use App\Http\Controllers\RestaurantController;
use App\Models\Restaurant;
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
    $restaurants = Restaurant::all()->where('rate_stars', '>=', '4');
    return view('welcome', ['populars' => $restaurants]);
})->name('home');

Route::resource('restaurants', RestaurantController::class);
Route::resource('plats', PlatController::class)->middleware('authResto');

Route::get('/about', function(){
    return view('about');
})->name('about');

Route::get('/manage/login', [ManagerController::class, 'logToManage'])->name('logToManage');
Route::get('/resto/login', [ManagerController::class, 'logToResto'])->name('logToResto');
Route::post('/manage/login', [ManagerController::class, 'manageLogin'])->name('manage.login');
Route::post('/resto/login', [ManagerController::class, 'login'])->name('resto.login');

Route::middleware(['authResto'])->group(function(){
    Route::get('/myPlats', [PlatController::class, 'index'])->name('myPlats');
    Route::get('/resto/dashboard', [ManagerController::class, 'dashboard'])->name('resto.dashboard');
    Route::get('/resto/profile', [ManagerController::class, 'profile'])->name('resto.profile');
    Route::get('/resto/logout', [ManagerController::class, 'logout'])->name('resto.logout');
});

Route::middleware(['password.confirm','admin'])->group(function(){
    Route::get('/manage', [ManagerController::class, 'manage'])->name('manager.dashboard');
    Route::get('/manager/restaurants', [RestaurantController::class, 'manageResto'])->name('manager.restos');
    Route::get('/manage/profile', function(){
        return view('adminProfile');
    })->name('manager.profile');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/restaurant/rate/{restaurant}', [RateController::class, 'rateResto'])->name('restaurant.rate');

require __DIR__.'/auth.php';
