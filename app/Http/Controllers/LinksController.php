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

// Use the session
use Session;


class LinksController extends Controller
{
	public function index()
	{
		// return links in session
		return Link::whereIn('id', session('user.links'))->orderBy('created_at', 'DESC')->get();
	}

	public function store(Request $request)
	{
		// Validate the url
		$this->validate($request, ['url' => 'required|url']);

		// Find the url location if it has been already used
		// if not create a new one
		$location = Location::firstOrCreate(['url' => $request->input('url')]);

		// Create a new link with the foreign location id
		$link = Link::create(['location_id' => $location->id]);

		// Store the link in session
		Session::push('user.links', $link->id);

		// Return the url encoded i.d of the link
		return $link;
	}

	public function destroy(Request $request, $id)
	{
		// Check if the link belongs to the user
		$user_links = session('user.links');

		if(in_array($id, $user_links))
		{
			// It's in the array, let's proceed
			Link::find($id)->delete();
		}
	}
}
