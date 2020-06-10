<?php

namespace App\Repositories;

use App\Models\Section;
use App\Models\Testimonial;

class TestimonialRepository{

    public function __construct(){}

    public function addTestimonial(array $testimony)
    {
        return Testimonial::create([
            'full_name' => $testimony['full_name'],
            'position' => $testimony['position'],
            'testimony' => $testimony['testimony'],
            'image' =>  $testimony['image'],
            'section_id' => $testimony['section_id']
        ]);
    }

    public function getTestimonialsBySectionId($sectionId)
    {
        return Section::find($sectionId)->testimonials;
    }

    public function getAllTestimonials()
    {
        return Testimonial::lastest()->get();
    }

    public function getTestimonialById($id)
    {
        return Testimonial::find($id);
    }

    public function updateTestimonial(array $testimony, $id)
    {
        return Testimonial::find($id)->update([
            'full_name' => $testimony['full_name'],
            'position' => $testimony['position'],
            'testimony' => $testimony['testimony'],
            'image' =>  $testimony['image'],
            'section_id' => $testimony['section_id']
        ]);
    }

    public function deleteTestimonial($id)
    {
        Testimonial::destroy($id);
    }

}
