<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\UrlMapping;


class GurlmapController extends Controller
{
    // Home
    public function showGurl() {
    $url_mappings = UrlMapping::orderBy('created_at', 'asc')->get();

    return view('url_mappings', [
        'url_mappings' => $url_mappings
    ]);
    }


	// Add URL
	public function addUrl (Request $request) {

    $urlmapping = new UrlMapping;
    $urlmapping->longurl = $request->longurl;
    $urlmapping->save();

	return redirect('/urlinfo/'.$urlmapping->id);
	}


	// Delete URL
    public function delUrl (UrlMapping $urlmapping) {
    $urlmapping->delete();

    return redirect('/');
	}


	// Display Info
    public function displayInfo ($id) {
	
	$urlinfo = UrlMapping::where('id', $id)->first();
	
	return view('displayinfo', ['urlinfo' => $urlinfo]);
	
}


}
