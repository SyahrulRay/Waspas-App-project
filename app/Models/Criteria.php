<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Criteria extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    function alternative()
    {
        return $this->belongsTo(Alternative::class);
    }

    function type()
    {
        return $this->belongsTo(Type::class);
    }

    function scopeOnProject(Builder $query, int $projectId)
    {
        return $query->whereHas('alternative', function ($query) use ($projectId) {
            return $query->where('project_id', $projectId);
        });
    }
}