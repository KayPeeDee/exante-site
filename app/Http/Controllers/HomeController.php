<?php

namespace App\Http\Controllers;

use App\Repositories\HomeRepository;
use App\Repositories\MediaRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $homeRepository;
    protected $mediaRepository;

    public function __construct(HomeRepository $homeRepository, MediaRepository $mediaRepository)
    {
        $this->homeRepository = $homeRepository;
        $this->mediaRepository = $mediaRepository;
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


    public function createHomeDetails(Request $request)
    {
        $input = $request->all();
        if ($request->hasFile('main_image')) {
            // $fileName = $this->mediaRepository->uploadImage($request->file('image'));
            $fileName = $this->mediaRepository->uploadFile($request->file('main_image'));
            $input['main_image'] = $fileName;
        }

        if ($request->hasFile('background_image')) {
            // $fileName = $this->mediaRepository->uploadImage($request->file('image'));
            $fileName = $this->mediaRepository->uploadFile($request->file('background_image'));
            $input['background_image'] = $fileName;
        }

        $this->homeRepository->createHomeDetails($input);
        return back();

    }

    public function getHomeDetails($sectionId)
    {
        $home = $this->homeRepository->getHomeDetails($sectionId);
        return view('admin-portal.sections.home.home-section', compact('sectionId','home'));

    }

    public function updateHomeDetails(Request $request, $id)
    {
        $input = $request->all();
        $this->homeRepository->updateHomeDetails($input, $id);
        return back();
    }

    public function updateBackgroungImage(Request $request, $id)
    {
        $input = $request->all();
        if ($request->hasFile('background_image')) {
            $fileName = $this->mediaRepository->uploadFile($request->file('background_image'));
            $input['background_image'] = $fileName;
        }
        $this->homeRepository->updateBackgroundImage($input['background_image'], $id);
        return back();
    }

    public function updateForegroundImage(Request $request, $id)
    {
        $input = $request->all();
        if ($request->hasFile('main_image')) {
            $fileName = $this->mediaRepository->uploadFile($request->file('main_image'));
            $input['main_image'] = $fileName;
        }
        $this->homeRepository->updateForegroundImage($input['main_image'], $id);
        return back();
    }
 
    public function deleteHomeDetails($id)
    {
        $this->homeRepository->deleteHomeDetails($id);
        return back();
    }
}
