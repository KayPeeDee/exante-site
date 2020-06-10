<?php

namespace App\Repositories;

use App\Models\About;
use App\Models\Section;

class AboutRepository{

    public function __construct()
    {

    }

    public function createAboutUsDetails(array $data)
    {
        return About::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'image' => $data['image'],
            'section_id' => $data['section_id']
        ]);
    }


    public function getAboutUsDetailsBySectionId($sectionId)
    {
        return Section::find($sectionId)->aboutUs;
    }

    public function getAllAboutUsDetails()
    {
        return About::latest()->get();
    }

    public function getAboutUsDetailsById($id)
    {
        return About::find($id);
    }

    public function updateAboutUsDetails(array $data, $id)
    {
        return About::find($id)->update([
            'title' => $data['title'],
            'description' => $data['description'],
            'image' => $data['image'],
            'section_id' => $data['section_id']
        ]);

    }

    public function deleteAboutUsDetails($id)
    {
        About::destroy($id);
    }

}
