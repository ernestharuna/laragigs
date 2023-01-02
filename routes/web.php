<?php

use App\Http\Controllers\ListingController;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;
use App\Models\User;

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

// Create listings form
Route::get('/listings/create', [ListingController::class, 'create']);

//Store Listings form
Route::post('/listings', [ListingController::class, 'store']);

//Edit listings form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

// Update listings form
Route::put('/listings/{listing}', [ListingController::class, 'update']);

// Delete listing
Route::delete('/listings/{listing}', [ListingController::class, 'delete']);

// Show single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);