<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AddScholarship extends Model
{
    protected $table = 'add_scholarships';
    public $timestamps = true;

    protected $fillable = [
        'meta_title',
        'meta_keywords',
        'meta_description',
        'date',
        'time',
        'scholarship_name',
        'scholarship_slug',
        'scholarship_country',
        'scholarship_degree',
        'scholarship_description',
        'scholarship_university_logo',
        'scholarship_banner_img',
        'scholarship_content',
        'scholarship_website_url',
        'university_logo_alt_tag',
        'banner_img_alt_tag'
    ];
    
}
