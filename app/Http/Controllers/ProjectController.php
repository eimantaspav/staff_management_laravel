<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index() {
        return view('projects.index', ['projects' => Project::orderBy('title')->get()]);
    }
    public function create() {
        return view('projects.create');
    }
    public function store(Request $request) {
        $project = new Project();

        $project->fill($request->all());
        $project->save();
        return redirect()->route('projects.index');
    }
 
    public function edit(Project $project){
        return view('projects.edit', ['project' => $project]);
    }
 
    public function update(Request $request, Project $project){
        $project->fill($request->all());
        $project->save();
        return redirect()->route('projects.index');
    }
 
     public function destroy(Project $project){
         $project->delete();
         return redirect()->route('projects.index');
     }
}
