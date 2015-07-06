<?php
namespace Shorty\Http\Controllers;

use Illuminate\Http\Request;

use Shorty\Http\Requests;
use Shorty\Http\Controllers\Controller;

// Use the base encoding class
use Shorty\Library\Base;

// Use the models
use Shorty\Link;
use Shorty\Location;

class LinksController extends Controller
{
	public function index()
	{
		return Links::all();
	}

	public function store(Request $request)
	{
		// Find the url location if it has been already used
		// if not create a new one
		$location = Location::firstOrCreate(['url' => $request->input('url')]);

		// Create a new link with the foreign location id
		$link = Link::create(['location_id' => $location]);

		// Return the url encoded i.d of the link
		return Base::encode($link->id);
	}
}
