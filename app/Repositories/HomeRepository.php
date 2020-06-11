<?php

namespace App\Repositories;

use App\Models\Home;

class HomeRepository{

    public function __construct()
    {
    }


    public function createHomeDetails(array $data)
    {
        return Home::create([
            'section_id' => $data['section_id'],
            'title' => $data['title'],
            'background_image' => $data['background_image'],
            'main_image' => $data['main_image']
        ]);

    }

    public function getHomeDetails($sectionId)
    {
        return Home::where('section_id', $sectionId)->first();
    }

    public function updateHomeDetails(array $data, $id)
    {
        return Home::find($id)->update([
            'title' => $data['title']
        ]);
    }

    public function updateBackgroundImage($fileName, $id)
    {
        return Home::find($id)->update([
            'background_image' => $fileName
        ]);
    }

    public function updateForegroundImage($fileName, $id)
    {
        return Home::find($id)->update([
            'main_image' => $fileName
        ]);
    }

    public function deleteHomeDetails($id)
    {
        Home::destroy($id);
    }
}
