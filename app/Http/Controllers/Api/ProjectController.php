<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    /**
     * Display a listing of projects.
     */
    public function index()
    {
        $projects = Project::all();
        return response()->json(['data' => $projects]);
    }

    /**
     * Display a project.
     */
    public function getProject($id)
    {
        $post = Project::findOrFail($id);
        return $post;
    }
}
