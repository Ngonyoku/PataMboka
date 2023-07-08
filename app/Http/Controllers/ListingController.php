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
        $listing = Listing::latest()
                    ->filter(request(['tag', 'search']))
                    ->simplePaginate(6)
        ; #
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

        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('listings', 'company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);

        # Store image to storage/app/public dir
        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public'); 
        }

        Listing::create($formFields);

        return redirect('/')->with('message', 'Successfully created listing');
    }
}
