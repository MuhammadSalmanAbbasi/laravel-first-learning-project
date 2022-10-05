<?php

namespace App\Http\Controllers;

use App\Models\listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{

//  Common Resources Routes
// index - Show All Resources
// show - Show Single Listing
// create - Show form to create new listing
// store -  Store new listing
// edit - Show form to edit listing
//  update - Update Existing listing
//  destroy - Delete Listing


    //Showing all Listing here
    public function index(){
        // dd(request('tag'));
        return view('listings.index', [
            'listings' => Listing::latest()->get()
        ]);
    }

    //  Shwing Single Listing Here
    public function show(listing $listing){
        return view('listings.show', [
            'listing' => $listing
        ]);
    }
}

