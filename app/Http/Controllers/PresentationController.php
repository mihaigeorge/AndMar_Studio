<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Album;

class PresentationController extends Controller
{

    /**
     * Create a new admin controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    public function getIndex()
    {
    	$albums = ALbum::all();

    	return view('presentation')->with(array(
            'albums'  => $albums
        ));
    }
}
