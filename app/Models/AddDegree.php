<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddDegree extends Model
{
    use HasFactory;
    
    protected $table = 'add_degree';

    protected $fillable = [
        'degree',
        'degree_slug'
    ];

}
