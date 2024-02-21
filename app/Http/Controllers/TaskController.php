<?php

namespace App\Http\Controllers;

use App\Http\Resources\TaskCollection;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        // return response()->json(Task::all());
        return new TaskCollection(Task::all());
    }
}
