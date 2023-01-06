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

// show create listings form
Route::get('listings/create', [ListingController::class, 'create'])->middleware('auth');

//Store Listings form
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

//Edit listings form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth'); 

// Update listings form
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

// Delete listing
Route::delete('/listings/{listing}', [ListingController::class, 'delete'])->middleware('auth');

// Manage listings
Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');

// Show single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);



// Show register form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Create new user
Route::post('users', [UserController::class, 'store']);

// Log Out User
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Show login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Login user
Route::post('users/authenticate', [UserController::class, 'authenticate']);