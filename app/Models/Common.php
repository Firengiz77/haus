<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Common extends Model
{
    use HasFactory,HasTranslations;

    public $translatable = ['service_desc','project_desc','contact_desc'];



}
