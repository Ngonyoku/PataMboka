<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Validation\Rule;
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

    //Show create form
    public function create() {
        return view('listings.create');
    }

     //Store form data
     public function store(Request $request) {
        //Validates the Input from the form
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('listings', 'company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'], # The email must be formatted as an email
            'tags' => 'required',
            'description' => 'required'
        ]);

        Listing::create($formFields);
        return redirect('/');
    }
}
