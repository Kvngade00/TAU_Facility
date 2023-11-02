<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDelete;

class Feature extends Model
{
    use HasFactory, SoftDelete;

    protected $fillable = [
        'title',
        'image_1',
        'image_2',
        'botton_link',
        'description',
    ];
}
