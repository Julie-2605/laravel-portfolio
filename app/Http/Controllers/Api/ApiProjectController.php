<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ApiProjectController extends Controller
{
    function index()
    {
        $projects = Project::all();
        return response()->json($projects);
    }
}