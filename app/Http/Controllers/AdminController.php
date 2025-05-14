<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Service;

class AdminController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        $services = Service::all();

        return view('admin.dashboard', compact('projects', 'services'));
    }

    public function portfolio(Request $request)
    {
        $query = Project::query();

        if($request->filled('search')) {
            $search = $request->input('search');
            $query->where('title', 'like', "%{$search}%")
                ->orWhere('description', 'like', "%{$search}%")
                ->orWhere('technologies', 'like', "%{$search}%");
        };

        $projects = $query->get();

        return view('admin.portfolio', compact('projects'));
    }

    public function services(Request $request)
    {
        $query = Service::query();

        if($request->filled('search')) {
            $search = $request->input('search');
            $query->where('name', 'like', "%{$search}%");
        }

        $services = $query->get();

        return view('admin.services', compact('services'));
    }
}