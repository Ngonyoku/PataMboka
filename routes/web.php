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

//All Listings
Route::get('/', [ListingController::class, 'index']);

//Single Listing
Route::get('/listings/{listing}',[ListingController::class, 'show']);


// Common Resources
# index - Display All Listings
# show - Display single listing
# create - Show for to create a new listing
# edit - Show for to edit a listing
# update - Update an existent listing
# destroy - Delete a listing

