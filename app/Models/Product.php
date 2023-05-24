<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Product extends Model
{
    use HasFactory;

    use HasFactory,HasSlug, HasTranslations;

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    public $translatable = [
        'meta_title','meta_keyword','meta_desc',
        'alt'];


    public function brands()
    {
        return $this->belongsTo('App\Models\Brand','category_id');
    
    }
    
    protected $fillable =['images'];
    
    protected $casts = ['images'=>'array'];
    





}
