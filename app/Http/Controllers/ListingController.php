<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    // Show all Listings
    public function index() {
        // dd(request('tag')); # Die Dump function
        $listing = Listing::latest()->filter(request(['tag', 'search']))->get(); #
        return view('listings.index', [
            'listings' => $listing
        ]);
    }

    //Show single listing
    public function show(Listing $listing){
        return view('listings.show', ['listing' => $listing]);
    }
}
