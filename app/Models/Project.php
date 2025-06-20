<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Project extends Model
{
    use HasFactory;
    protected function getAll()
    {
        return Project::select('id','title','address','price')->get();

    }
    protected function getsearchdata($category, $subcat = null,  $index = null, $limit = null)
    {
        $query = Project::select('id', 'category', 'prime_category', 'title','description','address', 'size','price');
        if($category != null) {
            if(is_numeric($category)) {
                $query = $query->where('category', $category);
            } else {
                $query = $query->where('prime_category', $category);
            }
        } 
        if($index != null && $limit != null){
            $query = $query->skip($index)->take($limit);
        }
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
