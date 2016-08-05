<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Requests;
use App\Task;

class GurlpostController extends Controller
{
    
	public function addUrl (Request $request) {

    $task = new Task;
    $task->longurl = $request->longurl;
    $task->save();

    return redirect('/');
	//return redirect('/urlinfo/'.$task->id);
	}

}