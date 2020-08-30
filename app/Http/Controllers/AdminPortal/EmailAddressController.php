<?php

namespace App\Http\Controllers\AdminPortal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\EmailAddressRepository;

class EmailAddressController extends Controller
{
    protected $emailAddressRepository;

    public function __construct(EmailAddressRepository $emailAddressRepository)
    {
        $this->emailAddressRepository = $emailAddressRepository;
    }

    public function createEmailAddress(Request $request)
    {
        $input = $request->all();
        $this->emailAddressRepository->addEmailAddress($input);
        return back();
    }

    public function getAllEmailAddresses()
    {
        $emailAddresses = $this->emailAddressRepository->getAllEmailAddresses();
        return view('admin-portal.pages.contact-us.email-addresses.list-email-addresses', compact('emailAddresses'));
    }

    public function getEmailAddressById($id)
    {
        $emailAddress = $this->emailAddressRepository->getEmailAddressById($id);
        return view('admin-portal.pages.contact-us.email-addresses.email-address-detail', compact('emailAddress'));
    }

    public function updateEmailAddress(Request $request, $id)
    {
        $input = $request->all();
        $this->emailAddressRepository->updateEmailAddress($input, $id);
        return back();
    }

    public function deleteEmailAddress($id)
    {
        $this->emailAddressRepository->deleteEmailAddress($id);
        return back();
    }
}
