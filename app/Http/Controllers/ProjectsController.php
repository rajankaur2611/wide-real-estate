<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Images;

class ProjectsController extends Controller
{
    public function index()
    {
        return view('pages.frontend.ourprojects');
    }
    public function single($category, $id)
    {
        $data['project'] = Project::find($id);
        $data['images'] = Images::where('project_id', $id)->get();
        return view('pages.frontend.single-estate')->with($data);
    }
    public function getProjects(Request $request)
    {
        $category = ($request->input('category'))? $request->input('category') : $request->input('subcat');
        $index = $request->input('index');
        $limit = $request->input('limit');
        $projects = Project::getsearchdata($category);
        $projectsdata = Project::getsearchdata($category, $index, $limit);
        $count = count($projects);
        // echo $count;
        return response()->json([
            'status' => true,
            'count' => $count,
            'projects' => $projectsdata
        ]);
        // return view('pages.frontend.single-estate');
    }
}
