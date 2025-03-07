<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
