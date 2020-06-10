<?php

namespace App\Http\Controllers;

use App\Repositories\ContactRepository;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    protected $contactRepository;

    public function __construct(ContactRepository $contactRepository)
    {
        $this->contactRepository = $contactRepository;
        $this->middleware('auth');
    }

    public function createContactUsPage()
    {
        return null;
    }

    public function createContactUsDetails(Request $request)
    {
        $this->contactRepository->validator($request->all())->validate();
        $contact = $this->contactRepository->createContactUsDetails($request->all());
        return back();
    }

    public function getContactUsDetails($id)
    {
        $sectionId = $id;
        $contactUs = $this->contactRepository->getContactUsDetails($sectionId);
        return view('admin-portal.sections.contact-us.contact-us', compact('sectionId','contactUs'));

    }

    public function updateContactUsDetails(Request $request, $id)
    {
        $this->contactRepository->updateContactUsDetails($request->all(), $id);
        return back();
    }

    public function deleteContactUsDetails($id)
    {
        $this->contactRepository->deleteContactUsDetails($id);
        return back();
    }
}
