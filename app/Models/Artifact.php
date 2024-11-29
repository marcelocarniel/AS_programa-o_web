<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artifact extends Model
{
    protected $fillable = [
        'name',
        'value',
        'age'
    ];
}
