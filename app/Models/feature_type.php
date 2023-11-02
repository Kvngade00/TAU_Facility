<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDelete;

class feature_type extends Model
{
    use HasFactory, SoftDelete;

    protected $fillable = [
        'type',
    ];
}
