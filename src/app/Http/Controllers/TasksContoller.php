<?php

namespace App\Http\Controllers;

// use App\Http\Requests\TaskRequest;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return response()->json([], 200);
    }
}
