<?php

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

Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => Listing::all()
    ]);
});

//Single Listing
Route::get('/listings/{listing}', function(Listing $listing){

    //Route Model Binding
    return view('listing', [
        'listing' => $listing
    ]);
    // $listing = Listing::find($id);

    // if ($listing){
    //     return view('listing', [
    //         'listing' => $listing
    //     ]);
    // } else {
    //     abort('404');
    // }
});


// Route::get('/hello', function() {
//     return response('<h1>Whats Up</h1>', 200)
//        ;
// });

// Route::get('/posts/{id}', function($id) {
//     dd($id);
//     return response('Post ' . $id);
// })->where('id', '[0-9]+');

// Route::get('/search', function(Request $request) {
//     return $request->name . ' ' . $request->city;
// });

