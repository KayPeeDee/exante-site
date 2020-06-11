<?php

namespace App\Http\Controllers;

use App\Repositories\AboutRepository;
use App\Repositories\MediaRepository;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    protected $aboutRepository;
    protected $mediaRepository;

    public function __construct(AboutRepository $aboutRepository, MediaRepository $mediaRepository)
    {
        $this->aboutRepository = $aboutRepository;
        $this->mediaRepository = $mediaRepository;
        $this->middleware('auth');
    }

    public function createAboutusDetailsPage($sectionId)
    {
        return view('admin-portal.sections.about-us.create-about-details', compact('sectionId'));
    }

    public function createAboutusDetails(Request $request, $sectionId)
    {
        $input = $request->all();
        if ($request->hasFile('image')) {
            // $fileName = $this->mediaRepository->uploadImage($request->file('image'));
            $fileName = $this->mediaRepository->uploadFile($request->file('image'));
            $input['image'] = $fileName;
        }
        $this->aboutRepository->createAboutUsDetails($input);
        return redirect()->route('about-us', $sectionId);
    }

    public function getAboutUsDetailsBySectionId($sectionId)
    {
        $aboutUsDetails = $this->aboutRepository->getAboutUsDetailsBySectionId($sectionId);
        return view('admin-portal.sections.about-us.about-us', compact('sectionId','aboutUsDetails'));
    }

    public function getAboutUsDetailsById($sectionId, $id)
    {
        $aboutUs = $this->aboutRepository->getAboutUsDetailsById($id);
        return view('admin-portal.sections.about-us.update-about-details', compact('aboutUs'));
    }

    public function updateAboutUsDetails(Request $request, $sectionId, $id)
    {
        $this->aboutRepository->updateAboutUsDetails($request->all(), $id);
        return back();
    }

    public function updateAboutUsImage(Request $request, $sectionId, $id)
    {
        $input = $request->all();
        if ($request->hasFile('image')) {
            $fileName = $this->mediaRepository->uploadFile($request->file('image'));
            $input['image'] = $fileName;
        }
        $this->aboutRepository->uploadImageUpdate($input['image'], $id);
        return back();
    }

    public function deleteAboutUsDetails($sectionId, $id)
    {
        $this->aboutRepository->deleteAboutUsDetails($id);
        return  redirect()->route('about-us', $sectionId);
    }

}
