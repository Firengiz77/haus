<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use App\Models\Product;

class Brand extends Model
{
    use HasFactory,HasSlug, HasTranslations;

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
            ->saveSlugsTo('slug');
    }


    protected $fillable =['images'];
    
    protected $casts = ['images'=>'array'];
    
    


    public $translatable = ['name','meta_title','meta_desc','meta_keyw','desc'];


    public function brands()
    {
        return $this->belongsTo('App\Models\Brand','category_id');
    }


    public function products()
    {
        return $this->hasMany(Product::class,'category_id');
    }







}
