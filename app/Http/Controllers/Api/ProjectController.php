<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProjectResource;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        return ProjectResource::collection(Project::get());
    }

    public function getProject($id)
    {
        return new ProjectResource(Project::findOrFail($id));
    }

    public function destroy(Request $request)
    {
        try {
            $project = Project::findOrFail($request->id);
            $project->delete($request->all());

            return response()->json(['message' => 'Project deleted successfully'], 201);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error creating the project: ' . $e->getMessage()], 500);
        }
    }

    public function store(Request $request)
    {
        try {
            $project = Project::create($request->all());

            return response()->json(['message' => 'Project created successfully'], 201);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error creating the project: ' . $e->getMessage()], 500);
        }
    }

    public function update(Request $request)
    {
        try {
            $project = Project::findOrFail($request->id);
            $project->update($request->all());

            return response()->json(['message' => 'Project updated successfully'], 201);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error creating the project: ' . $e->getMessage()], 500);
        }
    }
}
