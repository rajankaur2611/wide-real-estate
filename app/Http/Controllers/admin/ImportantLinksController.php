<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ImportantLinks;
use Validator;
use Image;

class ImportantLinksController extends Controller
{
    public function index()
    {   
        $importantLinks = ImportantLinks::getAll();
        return view('pages.admin.importantLinks.list', compact("importantLinks"));
    }
    public function add()
    {
        $importantLinks = new ImportantLinks();
        return view('pages.admin.ImportantLinks.add-edit', compact("importantLinks"));
    }
    public function edit($id)
    {   
       
        $ImportantLinksid = base64_decode($id);
        $importantLinks = ImportantLinks::find($ImportantLinksid);
        return view('pages.admin.importantLinks.add-edit', compact("importantLinks"));
    }
    public function save(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'link' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,webp|max:5000',
        ]);

        if($validator->fails()){
            return back()->withErrors($validator->errors())->withInput();
        }
        $ImportantLinks = new ImportantLinks();
        
        $ImportantLinksstatus = 'inserted';
        if($request->input('id') != null) {
            $ImportantLinks = ImportantLinks::find(base64_decode($request->input('id')));
            $ImportantLinksstatus = 'updated';
        } 
        $ImportantLinks->title = $request->input('title');
        $ImportantLinks->description = $request->input('description');
        $ImportantLinks->link = $request->input('link');
        if($request->file('image')) {
            if($request->input('id') != null){
                $largePath = public_path('images/large/' .$ImportantLinks->image);
                $smallPath = public_path('images/small/' .$ImportantLinks->image);
                if (file_exists($largePath) && file_exists($smallPath)) {
                    unlink($largePath);
                    unlink($smallPath);
                }
            }
             
            $file = $request->file('image');
            $imagename = $file->getClientOriginalName();
            $name = explode('.', $imagename)[0];
            $new_image = Image::make($file->getRealPath());
            $filename = $name.'-'.time().'.'.$file->extension();
            
            if($new_image != null) {
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
                $ImportantLinks->image = $filename;    
            }
        }
            
        $ImportantLinks->save();
        return redirect()->route('important-links-list')->with('success', 'ImportantLinks '.$ImportantLinksstatus.' successfully');
    
    }
    public function destroy($id)
    {
        $ImportantLinksid = base64_decode($id);
        $ImportantLinks = ImportantLinks::find($ImportantLinksid);
        if($request->input('id') != null){
            $largePath = public_path('images/large/' .$ImportantLinks->image);
            $smallPath = public_path('images/small/' .$ImportantLinks->image);
            if (file_exists($largePath) && file_exists($smallPath)) {
                unlink($largePath);
                unlink($smallPath);
            }
        }
        $ImportantLinks->delete();
        return redirect()->route('important-links-list')->with('success', 'ImportantLinks deleted successfully');
    }
}
