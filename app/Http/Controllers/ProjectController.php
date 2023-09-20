<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $projects = Project::all();
        return view('Projects/index')
            ->with('projects', $projects);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('projects.create'); // Verander 'projects.create' naar 'projects.create'
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);

        Project::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $request->image,
        ]);

        return redirect()->route('Projects.index')->with('success', 'Project is aangemaakt'); // Verander 'Projects.index' naar 'projects.index' en 'succes' naar 'success'
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
    public function edit(Project $Project)
    {
        return view('Projects.edit', compact('Project')); // Verander 'Projects.edit' naar 'projects.edit' en 'Project' naar 'project'
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $Project)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);

        $Project->fill($request->post())->save();

        return redirect()->route('Projects.index')->with('succes', 'Project is aangepast');
    }

    /**
     * Remove the specified resource from storage.
     */
public function destroy(Project $Project)
{
    $Project->delete();
    return redirect()->route('Projects.index')->with('succes', 'Project is verwijderd');
}
}