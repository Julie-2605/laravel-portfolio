<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Service;

class PortfolioController extends Controller
{
    public function index(Request $request)
    {
        $projects = Project::all();
        $services = Service::all();

        return view('portfolio', compact('projects', 'services'));
    }
}
