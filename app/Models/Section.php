<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $guarded = [];

    public function contactUs()
    {
        return $this->hasOne(Contact::class);
    }

    public function clients()
    {
        return $this->hasMany(Client::class);
    }

    public function teamMembers()
    {
        return $this->hasMany(Team::class);
    }

    public function testimonials()
    {
        return $this->hasMany(Testimonial::class);
    }

    public function projectCategories()
    {
        return $this->hasMany(ProjectCategory::class);
    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }

    public function benefits()
    {
        return $this->hasMany(Benefit::class);
    }

    public function statistics()
    {
        return $this->hasMany(Statistic::class);
    }

    public function aboutUs()
    {
        return $this->hasMany(About::class);
    }

    public function home()
    {
        return $this->hasOne(Home::class);
    }

}
