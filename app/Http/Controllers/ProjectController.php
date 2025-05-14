<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('portfolio', compact('projects'));
    }

    public function admin()
    {
        $projects = Project::all();
        return view('admin.dashboard', compact('projects'));
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

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|url',
            'technologies' => 'nullable|string',
            'status' => 'nullable|string',
            'date' => 'nullable|date',
        ]);

        $validated['technologies'] = array_map('trim', explode(',', $validated['technologies'] ?? ''));

        Project::create($validated);

        return redirect()->route('admin.portfolio')->with('success', 'Projet ajouté.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|url',
            'technologies' => 'nullable|string',
            'status' => 'nullable|string',
            'date' => 'nullable|date',
        ]);

        $validated['technologies'] = array_map('trim', explode(',', $validated['technologies'] ?? ''));

        $project->update($validated);

        return redirect()->route('admin.portfolio')->with('success', 'Projet mis à jour.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('admin.portfolio')->with('success', 'Projet supprimé.');
    }
}