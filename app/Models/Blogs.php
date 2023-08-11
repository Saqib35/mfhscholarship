<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    protected $table = 'blogs';
    
    protected $fillable = [
        'meta_title',
        'meta_keyworlds',
        'meta_description',
        'blog_name',
        'blog_slug',
        'blog_category',
        'blog_description',
        'blog_img',
        'blog_img_alt_tag',
        'blog_banner',
        'blog_banner_alt_tag',
        'blog_contentss'        
    ];
 
}
