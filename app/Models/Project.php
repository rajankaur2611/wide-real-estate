<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Project extends Model
{
    use HasFactory;
    protected function getAll($category = null)
    {
        $query = Project::select('id','title','description','price');
        if($category != null) $query = $query->where('category', $category);
        return $query->get();

    }
    protected function getdata()
    {
        return $categoryCounts = DB::table('projects')
        ->select('prime_category', DB::raw('COUNT(*) as project_count'))
        ->groupBy('prime_category')
        ->pluck('project_count', 'prime_category');

    }
    protected function categories()
    {
        return array('new-projects', 'ready-to-move', 'luxury', 'independent-villas', 'plots', 'commercial');
    }
    
}
