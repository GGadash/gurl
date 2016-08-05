<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Requests;
use App\Task;

class GurldeleteController extends Controller
{

    public function delUrl (Task $task) {
    $task->delete();

    return redirect('/');
	}

}