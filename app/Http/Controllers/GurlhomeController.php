<?php

namespace App\Http\Controllers;

use App\UrlMapping;

class GurlhomeController extends Controller
{
    
    public function showGurl() {
    $url_mappings = UrlMapping::orderBy('created_at', 'asc')->get();

    return view('url_mappings', [
        'url_mappings' => $url_mappings
    ]);
    }
	
}