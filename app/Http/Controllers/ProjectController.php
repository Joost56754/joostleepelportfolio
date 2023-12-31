<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
        $categories = Category::all();
        return view('projects.create', ['categories' => $categories]);
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
            'category_id' => 'required',
        ]);

        Project::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $request->image,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('Projects.index')->with('success', 'Project is aangemaakt'); // Verander 'Projects.index' naar 'projects.index' en 'succes' naar 'success'
    }

    /**
     * Display the specified resource.
     */
    public function locate(Request $request, Project $project)
    {
        $locate = $request->locate;

        $projects = Project::where(function ($query) use ($locate) {
            $query->where('title', 'like', "%$locate%")
                ->orWhere('description', 'like', "%$locate%");
        })
            ->orWhereHas('category', function ($query) use ($locate) {
                $query->where('name', 'like', "%$locate%");
            })
            ->get();

        return view('Projects.index', compact('projects', 'locate'));
    }
    public function show(Project $Project)
    {
        return view('Projects.show',compact('Project'));
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $Project)
    {
        $categories = Category::all();
        return view('Projects.edit', compact('Project', 'categories'));
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
            'category_id' => 'required',
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
