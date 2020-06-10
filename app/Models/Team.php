<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $guarded = [];

    public function section()
    {
        return $this->belongsTo(Section::class);
    }
}
