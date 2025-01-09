<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use Validator;
use Image;

class NewsController extends Controller
{
    public function index()
    {   
        $newses = News::getAll();
        return view('pages.admin.news.news-list', compact("newses"));
    }
    public function add()
    {
        $news = new News();
        return view('pages.admin.news.add-edit', compact("news"));
    }
    public function edit($id)
    {   
       
        $newsid = base64_decode($id);
        $news = News::find($newsid);
        return view('pages.admin.news.add-edit', compact("news"));
    }
    public function save(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'link' => 'required',
            // 'image' => 'required|image|mimes:jpg,jpeg,png,svg,gif|max:5000',
        ]);
        if($validator->fails()){
            return back()->withErrors($validator->errors())->withInput();
        }
        $news = new News();
        // $image = $request->file('image');
        // $imagename = $image->getClientOriginalName();
        $newsstatus = 'inserted';
        if($request->input('id') != null) {
            $news = News::find(base64_decode($request->input('id')));
            $newsstatus = 'updated';
        } 
        $news->title = $request->input('title');
        $news->description = $request->input('description');
        $news->link = $request->input('link');
        
        // $new_image = Image::make($image->getRealPath());
        // $filename = time().'.'.$image->extension();
        // if($new_image != null){
        //     $store_image = $new_image->save(public_path('images/large/' .$filename));
        //     if($store_image) {
        //         $image_width= $new_image->width();
        //         $image_height= $new_image->height();
        //         $new_width= 1200;
        //         $new_height= null;
        //         if($image_width > 1200 ){
        //             $new_image->resize($new_width, $new_height, function ($constraint) {
        //                 $constraint->aspectRatio();
        //             });
        //         }
        //         $store_small = $new_image->save(public_path('images/small/' .$filename));
        //         if(!$store_small){
        //             return  back()->with('error', 'Project '.$projectstatus.' successfully');
        //         }
        //     }
        //     $project->image = $filename;    
        // }
        $news->save();
        return redirect()->route('news-list')->with('success', 'News '.$newsstatus.' successfully');
    
    }
    public function destroy($id)
    {
        $newsid = base64_decode($id);
        $news = News::find($newsid);
        $news->delete();
        return redirect()->route('news-list')->with('success', 'News deleted successfully');
    }
}
