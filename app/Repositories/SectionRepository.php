<?php

namespace App\Repositories;

use App\Models\Section;
use Illuminate\Support\Facades\Validator;

class SectionRepository{

    public function __construct()
    {
    }

    public function validator(array $data)
    {
        return Validator::make($data, [
            'title' => ['required', 'string', 'max:255'],
            'tag' => ['required', 'string', 'max:255']
        ]);
    }

    public function createSection(array $data){
        return Section::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'tag' => $data['tag']
        ]);
    }

    public function findAllSections()
    {
        return Section::all();
    }

    public function findSectionByTag($tagName)
    {
        return Section::where('tag', $tagName)->first();
    }

    public function findSectionById($id)
    {
        return Section::find($id);
    }

    public function findByTitle($title)
    {
        return Section::where('title', $title)->first();
    }

    public function updateSection(array $data, $id)
    {
        return Section::find($id)->update([
            'title' => $data['title'],
            'description' => $data['description'],
            'tag' => $data['tag']
        ]);
    }

    public function deleteSection($id)
    {
        $this->findSectionById($id)->delete();
    }


}
