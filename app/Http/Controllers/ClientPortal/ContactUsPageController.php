<?php

namespace App\Http\Controllers\ClientPortal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\EmailAddressRepository;
use App\Repositories\PhoneNumberRepository;
use App\Repositories\SocialMediaRepository;

class ContactUsPageController extends Controller
{
    protected $socialMediaRepository;
    protected $phoneNumberRepository;
    protected $emailAddressRepository;

    public function __construct(SocialMediaRepository $socialMediaRepository, PhoneNumberRepository $phoneNumberRepository, EmailAddressRepository $emailAddressRepository)
    {
        $this->socialMediaRepository = $socialMediaRepository;
        $this->phoneNumberRepository = $phoneNumberRepository;
        $this->emailAddressRepository = $emailAddressRepository;
    }

    public function viewContactUsPage()
    {
        $socialMediaLinks = $this->socialMediaRepository->getAllSocialMediaLinks();
        $emailAddresses = $this->emailAddressRepository->getAllEmailAddresses();
        $phoneNumbers = $this->phoneNumberRepository->getAllPhoneNumbers();
        return view('client-portal.contact-us', compact('socialMediaLinks', 'emailAddresses', 'phoneNumbers'));
    }
}
