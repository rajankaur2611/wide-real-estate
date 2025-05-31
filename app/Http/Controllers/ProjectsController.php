<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectsController extends Controller
{
    public function index()
    {
        return view('pages.frontend.ourprojects');
    }
    public function single($id)
    {
        return view('pages.frontend.single-estate');
    }
    public function getProjects(Request $request)
    {
        $category = $request->input('category');
        $index = $request->input('index');
        $projects = Project::getAll($category);
        $count = count($projects);
        // echo $count;
        return response()->json([
            'status' => true,
            'count' => $count,
            'projects' => $projects
        ]);
        // return view('pages.frontend.single-estate');
    }
}
