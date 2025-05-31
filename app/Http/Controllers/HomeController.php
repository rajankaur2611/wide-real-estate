<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\ImportantLinks;
use App\Models\Project;

class HomeController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $newses = News::getAll(5);
        $importantLinks = ImportantLinks::getAll(5);
        
        $categorieslist = Project::categories();
        $categories = Project::getdata();
       
        $allCats = [];

        foreach ($categorieslist as $category) {
            $allCats[] = [
                'category_name' => $category,
                'project_count' => $categories[$category] ?? 0,
            ];
        }
        $data['allCats'] = $allCats;
        $data['newses'] = $newses;
        $data['importantLinks'] = $importantLinks;
        return view('pages.frontend.index')->with($data);
    }

    public function about()
    {
        return view('pages.frontend.about');
    }
    public function list()
    {
        return view('pages.frontend.ourprojects');
    }
}
