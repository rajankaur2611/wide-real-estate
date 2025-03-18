<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Images;
use Validator;
use Image;

class ProjectController extends Controller
{
    public function index()
    {   
        $projects = Project::getAll();
        return view('pages.admin.project.project-list',compact("projects"));
    }
    public function add()
    {
        $project = new Project();
        return view('pages.admin.project.add-edit', compact("project"));
    }
    public function edit($id)
    {   
       
        $projectid = base64_decode($id);
        $project = Project::find($projectid);
        $images = Images::where('project_id', $projectid)->get();
        return view('pages.admin.project.add-edit', compact("project", "images"));
    }
    public function save(Request $request)
    {   
        // print_r($request->all());
        // die();
        $rules = [
        'category' => 'required',
            'prime_category' => 'required',
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
        ];
        if($request->input('id') == null) {
            $rules['image'] = 'required|image|mimes:jpg,jpeg,png,svg,gif|max:5000';
        }
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            return back()->withErrors($validator->errors())->withInput();
        }
        $project = new Project();
        $projectstatus = 'inserted';
        if($request->input('id') != null) {
            $project = Project::find(base64_decode($request->input('id')));
            $projectstatus = 'updated';
        } 
        $project->category = $request->input('category');
        $project->prime_category = $request->input('prime_category');
        $project->title = $request->input('title');
        $project->description = $request->input('description');
        $project->price = $request->input('price');
        $project->save();
        $project->id;
        if($request->file('image')) {
            
            $files = $request->file('image');
            $images = [];
            foreach($files as $image) {
                $imagename = $image->getClientOriginalName();
                $name = explode('.', $imagename)[0];
                $new_image = Image::make($image->getRealPath());
                $filename = $name.'-'.time().'.'.$image->extension();
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
                    
                    $images[] = $filename;
                    $imageData = new Images();
                    $imageData->project_id = $project->id;
                    $imageData->image = $filename;
                    $imageData->save();
                }
            }   
        }
        return redirect()->route('project-list')->with('success', 'Project '.$projectstatus.' successfully');
    }
    public function destroy($id)
    {
        $projectid = base64_decode($id);
        $project = Project::find($projectid);
        $images = Images::where('project_id', $projectid)->get();
        $project->delete();
        if(count($images) > 0) {
            foreach($images as $image) {
                $largePath = public_path('images/large/' .$image['image']);
                $smallPath = public_path('images/small/' .$image['image']);
                $image->delete();
                if (file_exists($largePath) && file_exists($smallPath)) {
                    unlink($largePath);
                    unlink($smallPath);
                    return redirect()->route('project-list')->with('success', 'Project deleted successfully.');
                } else {
                    return redirect()->route('project-list')->with('error', 'Something went wrong.');
                }
        
            }
        }
        else {
            return redirect()->route('project-list')->with('success', 'Project deleted successfully');
        }
        //$project->delete();
        
    }
    public function image_delete(Request $request)
    {
        $image = Images::find($request->input('id'));
        $filename = $request->input('image');
        $largePath = public_path('images/large/' .$filename);
        $smallPath = public_path('images/small/' .$filename);
        $image->delete();
        if (file_exists($largePath) && file_exists($smallPath)) {
            unlink($largePath);
            unlink($smallPath);
            return response()->json(['message' => 'File deleted successfully']);
        } else {
            return response()->json(['error' => 'File not found'], 404);
        }
        
        // return redirect()->route('project-list')->with('success', 'Project deleted successfully');
    }
}
