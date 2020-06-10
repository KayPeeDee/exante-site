<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = [];

    public function projectCategory()
    {
        return $this->belongsTo(ProjectCategory::class, 'category_id');
    }
}
