<?php

use App\Models\User;
use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

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

// Show all listings 
Route::get('/', [ListingController::class, 'index']);

Route::middleware('auth')->group(function () {
    // show create listings form
    Route::get('listings/create', [ListingController::class, 'create']);

    //Store Listings form
    Route::post('/listings', [ListingController::class, 'store']);

    //Edit listings form
    Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

    // Update listings form
    Route::put('/listings/{listing}', [ListingController::class, 'update']);

    // Delete listing
    Route::delete('/listings/{listing}', [ListingController::class, 'delete']);

});
// Show single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);


// Create new user
Route::post('users', [UserController::class, 'store']);

// Log User Out
Route::post('/logout', [UserController::class, 'logout']);

Route::post('users/authenticate', [UserController::class, 'authenticate']);

Route::middleware('guest')->group(function(){
    // Show register form
    Route::get('/register', [UserController::class, 'create']);
    // Show login Form
    Route::get('/login', [UserController::class, 'login'])->name('login');
});