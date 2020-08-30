<?php

namespace App\Http\Controllers\AdminPortal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Repositories\TeamRepository;
use App\Repositories\MediaRepository;

class TeamController extends Controller
{
    protected $teamRepository;
    protected $mediaRepository;

    public function __construct(TeamRepository $teamRepository, MediaRepository $mediaRepository)
    {
        $this->teamRepository = $teamRepository;
        $this->mediaRepository = $mediaRepository;
        // $this->middleware('auth');
    }


    public function createTeamMemberPage()
    {
        return view('admin-portal.pages.about-us.add-team-member');
    }

    public function createTeamMember(Request $request)
    {
        $input = $request->all();
        if ($request->hasFile('image')) {
            $fileName = $this->mediaRepository->uploadImage($request->file('image'));
            $input['image'] = $fileName;
        }
        $this->teamRepository->validator($input)->validate();
        $this->teamRepository->addTeamMember($input);
        return redirect()->route('list-team-members');
    }

    public function getTeamMembers()
    {
        $teamMembers = $this->teamRepository->getAllTeamMembers();
        return view('admin-portal.pages.about-us.team-members', compact('teamMembers'));
    }

    public function getTeamMemberById($id)
    {
        $member = $this->teamRepository->getTeamMemberById($id);
        return view('admin-portal.pages.about-us.team-member', compact('member'));
    }

    public function updateTeamMember(Request $request, $id)
    {
        $this->teamRepository->updateTeamMember($request->all(), $id);
        return back();
    }

    public function updateProfileImage(Request $request, $id)
    {
        $input = $request->all();
        if ($request->hasFile('image')) {
            $fileName = $this->mediaRepository->uploadImage($request->file('image'));
            $input['image'] = $fileName;
        }
        $this->teamRepository->updateProfileImage($input['image'], $id);
        return back();
    }

    public function deleteTeamMember($id){
        $this->teamRepository->deleteTeamMember($id);
        return redirect()->route('list-team-members');
    }

}
