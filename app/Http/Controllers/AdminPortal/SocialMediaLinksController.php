<?php

namespace App\Http\Controllers\AdminPortal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\MediaRepository;
use App\Repositories\SocialMediaRepository;

class SocialMediaLinksController extends Controller
{
    protected $socialMediaRepository;
    protected $mediaRepository;

    public function __construct(SocialMediaRepository $socialMediaRepository, MediaRepository $mediaRepository)
    {
        $this->socialMediaRepository = $socialMediaRepository;
        $this->mediaRepository = $mediaRepository;
    }

    public function createSocialMediaLinkPage()
    {
        return view('admin-portal.pages.contact-us.social-media.create-social-media-link');
    }

    public function createSocialMediaLink(Request $request)
    {
        $inputData = $request->all();
        if ($request->hasFile('image')) {
            $fileName = $this->mediaRepository->uploadFile($request->file('image'));
            $inputData['image'] = $fileName;
        }
        $this->socialMediaRepository->createSocialMediaLink($inputData);
        return redirect()->route('list-social-media-links');
    }

    public function getAllSocialMediaLinks()
    {
        $socialMediaLinks = $this->socialMediaRepository->getAllSocialMediaLinks();
        return view('admin-portal.pages.contact-us.social-media.list-social-media-links', compact('socialMediaLinks'));
    }

    public function getSocialMediaLinkById($id)
    {
        $socialMediaLink = $this->socialMediaRepository->getSocialMediaLinkById($id);
        return view('admin-portal.pages.contact-us.social-media.social-media-link-detail', compact('socialMediaLink'));
    }

    public function updateSocialMediaLinkDetails(Request $request, $id)
    {
        $input = $request->all();
        $this->socialMediaRepository->updateSocialMediaLinkDetails($input, $id);
        return back();
    }

    public function updateSocialMediaLinkImage(Request $request, $id)
    {
        $input = $request->all();
        if ($request->hasFile('image')) {
            $fileName = $this->mediaRepository->uploadFile($request->file('image'));
            $input['image'] = $fileName;
        }
        $this->socialMediaRepository->updateSocialMediaLinkImage($input['image'], $id);
        return back();
    }

    public function deleteSocialMediaLink($id)
    {
        $this->socialMediaRepository->deleteSocialMediaLink($id);
        return back();
    }
}
