<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\UrlMapping;

class GurldeleteController extends Controller
{

    public function delUrl (UrlMapping $urlmapping) {
    $urlmapping->delete();

    return redirect('/');
	}

}