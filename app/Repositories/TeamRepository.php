<?php

namespace App\Repositories;

use App\Models\Section;
use App\Models\Team;
use Illuminate\Support\Facades\Validator;

class TeamRepository{

    public function __construct()
    {
    }

    public function validator(array $data)
    {
        return Validator::make($data, [
            'full_name' => ['required', 'string', 'max:255'],
            'position' => ['required', 'string', 'max:255'],
        ]);
    }

    public function addTeamMember(array $member)
    {
        return Team::create([
            'full_name' => $member['full_name'],
            'position' => $member['position'],
            'image' => $member['image'],
            'facebook_link' => $member['facebook_link'],
            'twitter_handler' => $member['twitter_handler'],
            'linked_in' => $member['linked_in'],
            'google_plus' => $member['google_plus'],
            'section_id' => $member['section_id']
        ]);
    }

    public function getTeamMembersBySectionId($sectionId)
    {
        return Section::find($sectionId)->teamMembers;
    }

    public function getAllTeamMembers()
    {
        return Team::latest()->get();
    }

    public function getTeamMemberById($id)
    {
        return Team::find($id);
    }

    public function updateTeamMember(array $member, $id)
    {
        return Team::find($id)->update([
            'full_name' => $member['full_name'],
            'position' => $member['position'],
            'facebook_link' => $member['facebook_link'],
            'twitter_handler' => $member['twitter_handler'],
            'linked_in' => $member['linked_in'],
            'google_plus' => $member['google_plus'],
        ]);
    }

    public function updateProfileImage($fileName, $id)
    {
        return Team::find($id)->update([
            'image' => $fileName
        ]);
    }

    public function deleteTeamMember($id)
    {
        Team::destroy($id);
    }
}
