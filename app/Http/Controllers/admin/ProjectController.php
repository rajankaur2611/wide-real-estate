<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use Validator;
use Image;

class ProjectController extends Controller
{
    public function index()
    {   
        $projects = Project::getAll();
        return view('pages.admin.project-list',compact("projects"));
    }
    public function add()
    {
        $project = new Project();
        return view('pages.admin.add-edit', compact("project"));
    }
    public function edit($id)
    {   
       
        $projectid = base64_decode($id);
        $project = Project::find($projectid);
        return view('pages.admin.add-edit', compact("project"));
    }
    public function save(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:5000',
        ]);
        if($validator->fails()){
            return back()->withErrors($validator->errors())->withInput();
        }
        $project = new Project();
        $image = $request->file('image');
        $imagename = $image->getClientOriginalName();
        $projectstatus = 'inserted';
        if($request->input('id') != null) {
            $project = Project::find(base64_decode($request->input('id')));
            $projectstatus = 'updated';
        } 
        $project->title = $request->input('title');
        $project->description = $request->input('description');
        $project->price = $request->input('price');
        
        $new_image = Image::make($image->getRealPath());
        $filename = time().'.'.$image->extension();
        if($new_image != null){
            $store_image = $new_image->save(public_path('images/large/' .$filename));
            if($store_image) {
                $image_width= $new_image->width();
                $image_height= $new_image->height();
                $new_width= 1200;
                $new_height= null;
                if($image_width > 1200 ){
                    $new_image->resize($new_width, $new_height, function ($constraint) {
                        $constraint->aspectRatio();
                    });
                }
                $store_small = $new_image->save(public_path('images/small/' .$filename));
                if(!$store_small){
                    return  back()->with('error', 'Project '.$projectstatus.' successfully');
                }
            }
            $project->image = $filename;    
        }
        $project->save();
        return redirect()->route('project-list')->with('success', 'Project '.$projectstatus.' successfully');
        //return redirect()->route('project-list')->with('message', 'Project created successfully.');
    }
    public function destroy($id)
    {
        $projectid = base64_decode($id);
        $project = Project::find($projectid);
        $project->delete();
        return redirect()->route('project-list')->with('success', 'Project deleted successfully');
    }
}
