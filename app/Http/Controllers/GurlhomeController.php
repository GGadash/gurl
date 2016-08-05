<?php

namespace App\Http\Controllers;

use App\Task;

class GurlhomeController extends Controller
{
    
    public function showGurl() {
    $tasks = Task::orderBy('created_at', 'asc')->get();

    return view('tasks', [
        'tasks' => $tasks
    ]);
    }
	
}