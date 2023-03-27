<?php

use App\Http\Controllers\ImageController;
use App\Http\Controllers\PlatController;
use App\Http\Controllers\RateController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/restaurants', [RestaurantController::class, 'apiIndex'])->name('restaurants.api.index');
Route::get('/restaurants/{restaurant}', [RestaurantController::class, 'apiShow'])->name('restaurants.api.get');
Route::get('/restaurants/{restaurant}/plats', [PlatController::class, 'apiIndex'])->name('restaurants.api.plats');
Route::get('/plats/{plat}', [PlatController::class, 'apiShow'])->name('plats.api.get');
Route::get('/restaurants/{restaurant}/rates', [RateController::class, 'apiRestoRate'])->name('restaurants.api.rates');
Route::get('/users/{user}/rates', [RateController::class, 'apiUserRate'])->name('users.api.rates');
Route::get('/users', [UserController::class, 'apiIndex'])->name('users.api.index');
Route::get('/users/{user}', [UserController::class, 'apiGet'])->name('users.api.get');
Route::post('/auth')->name('auth.api');
Route::get('/restaurants/image/{restaurant}/link', [ImageController::class, 'apiRestoImageLink'])->name('image.api.resto.link');
Route::get('/plats/image/{plat}/link', [ImageController::class, 'apiPlatImageLink'])->name('image.api.plat.link');
Route::get('/restaurants/image/{restaurant}', [ImageController::class, 'apiRestoImage'])->name('image.api.resto');
Route::get('/plats/image/{plat}', [ImageController::class, 'apiPlatImage'])->name('image.api.plat');
