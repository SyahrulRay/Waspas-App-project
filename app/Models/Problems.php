<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Problems extends Model
{
    use HasFactory;

    protected $table = 'problems';

    protected $fillable = [
        'nameproblems', 'user_id'
    ];
}
