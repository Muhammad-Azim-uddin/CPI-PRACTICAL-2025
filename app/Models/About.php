<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'title',
        'short_description',
        'long_description',
        'image',
        'status',
        'meta_title',
        'meta_description',
    ]; 
}
