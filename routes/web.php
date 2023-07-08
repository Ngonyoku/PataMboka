<?php

use App\Models\Listing;
use Illuminate\Http\Request;
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
define('LISTINGS', '/listings');

//All Listings
Route::get('/', [ListingController::class, 'index']);

//Create Listing
Route::get(LISTINGS.'/create', [ListingController::class, 'create'])->middleware('auth');

//Store Listing
Route::post(LISTINGS, [ListingController::class, 'store'])->middleware('auth');

//Show Edit Form
Route::get(LISTINGS. '/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

//Delete Listing
Route::delete(LISTINGS.'/{listing}',[ListingController::class, 'delete'])->middleware('auth');

//Single Listing
Route::get(LISTINGS.'/{listing}',[ListingController::class, 'show']);

//Update Listing
Route::put(LISTINGS . '/{listing}',[ListingController::class, 'update'])->middleware('auth');

//Show register create form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

//Create Users (Register)
Route::post('/users', [UserController::class, 'store']);

//Show Login Form
Route::get('/login',[UserController::class, 'login'])->name('login')->middleware('guest');

//Logout User
Route::post('/logout',[UserController::class, 'logout'])->middleware('auth');

//Login User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);



// Common Resources
# index - Display All Listings
# show - Display single listing
# create - Show for to create a new listing
# edit - Show for to edit a listing
# update - Update an existent listing
# destroy - Delete a listing

