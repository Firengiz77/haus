<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Client extends Model
{
    use HasFactory,HasTranslations;

    public $translatable = ['alt'];

    protected $fillable =['images'];
    
    protected $casts = ['images'=>'array'];
    
}
