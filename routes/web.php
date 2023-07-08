<?php

use App\Http\Controllers\ListingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;
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
define('LISTINGS', '/listings');

//All Listings
Route::get('/', [ListingController::class, 'index']);

//Create Listing
Route::get(LISTINGS.'/create', [ListingController::class, 'create']);

//Store Listing
Route::post(LISTINGS, [ListingController::class, 'store']);

//Show Edit Form
Route::get(LISTINGS. '/{listing}/edit', [ListingController::class, 'edit']);

//Single Listing
Route::delete(LISTINGS.'/{listing}',[ListingController::class, 'delete']);

//Single Listing
Route::get(LISTINGS.'/{listing}',[ListingController::class, 'show']);

//Update Listing
Route::put(LISTINGS . '/{listing}',[ListingController::class, 'update']);

// Common Resources
# index - Display All Listings
# show - Display single listing
# create - Show for to create a new listing
# edit - Show for to edit a listing
# update - Update an existent listing
# destroy - Delete a listing

