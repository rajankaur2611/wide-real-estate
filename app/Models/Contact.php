<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected function getAll()
    {
        return Contact::select('id','fullname','email','phone','status')->get();
    }
}
