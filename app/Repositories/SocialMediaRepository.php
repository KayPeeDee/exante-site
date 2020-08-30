<?php

namespace App\Repositories;

use App\Models\SocialMedia;

class SocialMediaRepository{

    public function __construct()
    {}

    public function createSocialMediaLink(array $data)
    {
        return SocialMedia::create([
            'name' => $data['name'],
            'link' => $data['link'],
            'image' => $data['image']
        ]);
    }

    public function getAllSocialMediaLinks()
    {
        return SocialMedia::latest()->get();
    }

    public function getSocialMediaLinkById($id)
    {
        return SocialMedia::find($id);
    }

    public function updateSocialMediaLinkDetails(array $data, $id)
    {
        return SocialMedia::find($id)->update([
            'name' => $data['name'],
            'link' => $data['link']
        ]);
    }

    public function updateSocialMediaLinkImage($fileName, $id)
    {
        return SocialMedia::find($id)->update([
            'image' => $fileName
        ]);
    }

    public function deleteSocialMediaLink($id)
    {
        SocialMedia::destroy($id);
    }

}