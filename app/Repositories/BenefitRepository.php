<?php

namespace App\Repositories;

use App\Models\Benefit;
use App\Models\Section;

class BenefitRepository{

    public function __construct()
    {

    }

    public function createBenefit(array $data)
    {
        return Benefit::create([
            'title' => $data['title'],
            'slug' => $data['slug'],
            'description' => $data['description'],
            'icon' => $data['icon'],
            'section_id' => $data['section_id']
        ]);
    }


    public function getBenefitsBySectionId($sectionId)
    {
        return Section::find($sectionId)->benefits;
    }

    public function getAllBenefits()
    {
        return Benefit::latest()->get();
    }

    public function getBenefitById($id)
    {
        return Benefit::find($id);
    }

    public function updateBenefit(array $data, $id)
    {
        return Benefit::find($id)->update([
            'title' => $data['title'],
            'slug' => $data['slug'],
            'description' => $data['description'],
            'icon' => $data['icon'],
        ]);

    }

    public function deleteBenefit($id)
    {
        Benefit::destroy($id);
    }

}
