<?php

namespace App\Http\Controllers\AdminPortal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\PhoneNumberRepository;

class PhoneNumberController extends Controller
{
    protected $phoneNumberRepository;

    public function __construct(PhoneNumberRepository $phoneNumberRepository)
    {
        $this->phoneNumberRepository = $phoneNumberRepository;
    }

    public function createPhoneNumber(Request $request)
    {
        $input = $request->all();
        // dd($input);
        $this->phoneNumberRepository->addPhoneNumber($input);
        return back();
    }

    public function getAllPhoneNumbers()
    {
        $phoneNumbers = $this->phoneNumberRepository->getAllPhoneNumbers();
        return view('admin-portal.pages.contact-us.phone-numbers.phone-numbers-list', compact('phoneNumbers'));
    }

    public function getPhoneNumberById($id)
    {
        $phoneNumber = $this->phoneNumberRepository->getPhoneNumberById($id);
        return view('admin-portal.pages.contact-us.phone-numbers.phone-number-detail', compact('phoneNumber'));
    }

    public function updatePhoneNumber(Request $request, $id)
    {
        $input = $request->all();
        // dd($input);
        $this->phoneNumberRepository->updatePhoneNumber($input, $id);
        return back();
    }

    public function deletePhoneNumber($id)
    {
        $this->phoneNumberRepository->deletePhoneNumber($id);
    }


}
