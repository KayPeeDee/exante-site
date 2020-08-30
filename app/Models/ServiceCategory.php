<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    protected $guarded = [];

    public function services()
    {
        return $this->hasMany(Service::class, 'category_id');
    }
}
