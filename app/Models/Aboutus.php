<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDelete;

class Aboutus extends Model
{
    use HasFactory, SoftDelete;

    protected $fillable = [
        'title',
        'information',
        'description',
    ];
}
