<?php

namespace App\Http\Controllers;

use App\Repositories\TeamRepository;
use Illuminate\Http\Request;
use App\Repositories\MediaRepository;

class TeamController extends Controller
{
    protected $teamRepository;
    protected $mediaRepository;

    public function __construct(TeamRepository $teamRepository, MediaRepository $mediaRepository)
    {
        $this->teamRepository = $teamRepository;
        $this->mediaRepository = $mediaRepository;
        $this->middleware('auth');
    }

    public function index()
    {

    }

    public function createTeamPage($sectionId)
    {
        return view('admin-portal.sections.teams.create-team', compact('sectionId'));
    }

    public function createTeamMember(Request $request, $sectionId)
    {
        $input = $request->all();
        if ($request->hasFile('image')) {
            $fileName = $this->mediaRepository->uploadImage($request->file('image'));
            $input['image'] = $fileName;
        }
        $this->teamRepository->validator($input)->validate();
        $this->teamRepository->addTeamMember($input);
        return redirect()->route('our-team', $sectionId);
    }

    public function getTeamMembersBySectionId($sectionId)
    {
        $teamMembers = $this->teamRepository->getTeamMembersBySectionId($sectionId);
        return view('admin-portal.sections.teams.our-team', compact('teamMembers','sectionId'));
    }

    public function getTeamMemberById($sectionId, $id)
    {
        $member = $this->teamRepository->getTeamMemberById($id);
        return view('admin-portal.sections.teams.update-team', compact('member'));
    }

    public function updateTeamMember(Request $request, $sectionId,  $id)
    {
        $this->teamRepository->updateTeamMember($request->all(), $id);
        return back();
    }

    public function updateProfileImage(Request $request, $sectionId,  $id)
    {
        $input = $request->all();
        if ($request->hasFile('image')) {
            $fileName = $this->mediaRepository->uploadImage($request->file('image'));
            $input['image'] = $fileName;
        }
        $this->teamRepository->updateProfileImage($input['image'], $id);
        return back();
    }

    public function deleteTeamMember($sectionId, $id){
        $this->teamRepository->deleteTeamMember($id);
        return redirect()->route('our-team', $sectionId);
    }
}
