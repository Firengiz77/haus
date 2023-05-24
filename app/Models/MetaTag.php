<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class MetaTag extends Model
{
    use HasFactory, HasTranslations;


    public $translatable = [
        'about_meta_title','about_meta_desc','about_meta_keyw',
        'home_meta_title','home_meta_desc','home_meta_keyw',
        'contact_meta_title','contact_meta_desc','contact_meta_keyw',
        'portfolio_meta_title','portfolio_meta_desc','portfolio_meta_keyw',
        'blog_meta_title','blog_meta_desc','blog_meta_keyw',
     ];


}
