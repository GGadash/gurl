<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\UrlMapping;

class GurlpostController extends Controller
{
    
	public function addUrl (Request $request) {

    $urlmapping = new UrlMapping;
    $urlmapping->longurl = $request->longurl;
    $urlmapping->save();

    return redirect('/');
	//return redirect('/urlinfo/'.$urlmapping->id);
	}

}