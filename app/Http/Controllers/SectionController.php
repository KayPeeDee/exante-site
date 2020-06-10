<?php

namespace App\Http\Controllers;

use App\Repositories\SectionRepository;
use App\SectionConstants;
use Illuminate\Http\Request;

class SectionController extends Controller
{

    protected $sectionRepository;

    public function __construct(SectionRepository $sectionRepository)
    {
        $this->sectionRepository = $sectionRepository;
        $this->middleware('auth');
    }

    public function index()
    {
        $sections = $this->sectionRepository->findAllSections();
        // dd($sections);
        return view('admin-portal.sections', compact('sections'));
    }

    public function addNewSectionPage()
    {
        return view('admin-portal.add-section');
    }

    public function createSection(Request $request)
    {
        $input = $request->all();
        // dd($input);
        $input['tag'] = str_ireplace(" ", "-", strtolower($request->title));
        $this->sectionRepository->validator($input)->validate();
        $section = $this->sectionRepository->createSection($input);
        return redirect()->route('get-sections');
    }

    public function getSectionById($id)
    {
        $section = $this->sectionRepository->findSectionById($id);
        // dd($section);
        return view('admin-portal.update-section', compact('section'));

    }

    public function getSectionByTag($tagName)
    {
        $section = $this->sectionRepository->findSectionByTag($tagName);
        switch ($section->tag) {

            case SectionConstants::ABOUT_US:
                return redirect()->route('about-us', ['sectionId' => $section->id]);
                break;

            case SectionConstants::CONTACT_US:
                return redirect()->route('contact-us-details', ['sectionId' => $section->id]);
                break;

            case SectionConstants::OUR_CLIENTS:
                return redirect()->route('our-clients', ['sectionId' => $section->id]);
                break;

            case SectionConstants::TEAM:
                return redirect()->route('our-team', ['sectionId' => $section->id]);
                break;

            case SectionConstants::TESTIMONIALS:
                return redirect()->route('testimonials', ['sectionId' => $section->id]);
                break;

            case SectionConstants::OUR_PORTIFOLIO:
                return redirect()->route('project-categories', ['sectionId' => $section->id]);
                break;

            case SectionConstants::OUR_SERVICES:
                return redirect()->route('services', ['sectionId' => $section->id]);
                break;

            case SectionConstants::WHY_CHOOSE_US:
                return redirect()->route('benefits', ['sectionId' => $section->id]);
                break;

            case SectionConstants::HOME:
                return redirect()->route('home-details', ['sectionId' => $section->id]);
                break;


            default:
                # code...
                break;
        }
    }

    public function updateSection(Request $request, $id)
    {
        $this->sectionRepository->updateSection($request->all(), $id);
        return back();
    }

    public function deleteSection($id)
    {
        $this->sectionRepository->deleteSection($id);
        return redirect()->route('get-sections');
    }
}
