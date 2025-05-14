<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
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
            'image' => 'nullable|image|mimes:jpg,jpeg,png',
            'technologies' => 'nullable|string',
            'status' => 'nullable|string',
            'date' => 'nullable|date',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('asset', 'public');
            $validated['image'] = $path;
        }

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
            'image' => 'nullable|image|mimes:jpg,jpeg,png',
            'technologies' => 'nullable|string',
            'status' => 'nullable|string',
            'date' => 'nullable|date',
        ]);

        if ($request->hasFile('image')) {
            if ($project->image && Storage::disk('public')->exists($project->image)) {
                Storage::disk('public')->delete($project->image);
            }

            $path = $request->file('image')->store('asset', 'public');
            $validated['image'] = $path;
        }

        $validated['technologies'] = array_map('trim', explode(',', $validated['technologies'] ?? ''));

        $project->update($validated);

        return redirect()->route('admin.portfolio')->with('success', 'Projet mis à jour.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        if ($project->image && Storage::disk('public')->exists($project->image)) {
            Storage::disk('public')->delete($project->image);
        }

        $project->delete();
        return redirect()->route('admin.portfolio')->with('success', 'Projet supprimé.');
    }
}
