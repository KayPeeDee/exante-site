<?php

namespace App\Http\Controllers;

use App\Repositories\TestimonialRepository;
use Illuminate\Http\Request;
use App\Repositories\MediaRepository;


class TestimonialsController extends Controller
{
    protected $testimonialRepository;
    protected $mediaRepository;

    public function __construct(TestimonialRepository $testimonialRepository, MediaRepository $mediaRepository)
    {
        $this->testimonialRepository = $testimonialRepository;
        $this->mediaRepository = $mediaRepository;
        $this->middleware('auth');
    }

    public function getTestimonialsBySectionId($sectionId)
    {
        $testimonials = $this->testimonialRepository->getTestimonialsBySectionId($sectionId);
        return view('admin-portal.sections.testimonials.testimonials', compact('testimonials','sectionId'));
    }

    public function createTestimonialPage($sectionId)
    {
        return view('admin-portal.sections.testimonials.create-testimonial', compact('sectionId'));
    }

    public function createTestimonial(Request $request, $sectionId)
    {
        $input = $request->all();
        if ($request->hasFile('image')) {
            $fileName = $this->mediaRepository->uploadImage($request->file('image'));
            $input['image'] = $fileName;
        }
        $this->testimonialRepository->addTestimonial($input);
        return redirect()->route('testimonials', $sectionId);
    }

    public function getTestimonialById($sectionId, $id)
    {
        $testimonial = $this->testimonialRepository->getTestimonialById($id);
        return view('admin-portal.sections.testimonials.update-testimonial', compact('testimonial'));
    }

    public function updateTestimonial(Request $request, $sectionId, $id)
    {
        $this->testimonialRepository->updateTestimonial($request->all(), $id);
        return back();
    }

    public function updateUserProfilePic(Request $request, $sectionId, $id)
    {
        $input = $request->all();
        if ($request->hasFile('image')) {
            $fileName = $this->mediaRepository->uploadImage($request->file('image'));
            $input['image'] = $fileName;
        }
        $this->testimonialRepository->updateUserProfilePic($input['image'], $id);
        return back();
    }

    public function deleteTestimonial($sectionId, $id)
    {
        $this->testimonialRepository->deleteTestimonial($id);
        return redirect()->route('testimonials', $sectionId);
    }
}
