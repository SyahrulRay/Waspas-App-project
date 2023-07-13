<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Criterias extends Model
{
    use HasFactory;

    protected $table = 'criterias';

    protected $fillable = [
        'namecriteria', 'weight', 'categories', 'alter_id'
    ];
}
