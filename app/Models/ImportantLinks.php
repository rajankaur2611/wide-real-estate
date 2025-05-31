<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImportantLinks extends Model
{
    use HasFactory;
    protected function getAll($limit = null)
    {
        $query = ImportantLinks::select('id','title','description','link','created_at');
        if($limit != null) $query = $query->orderBy('created_at', 'desc')->limit($limit);
        return $query->get();
    }
}
