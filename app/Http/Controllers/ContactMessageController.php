<?php

namespace App\Http\Controllers;

use App\Repositories\ContactMessageRepository;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{

    protected $contactMessageRepository;

    public function __construct(ContactMessageRepository $contactMessageRepository)
    {
        $this->contactMessageRepository = $contactMessageRepository;
        $this->middleware('auth');
    }

    public function getContactMessages()
    {
        $messages = $this->contactMessageRepository->getAllContactMessages();
        return view('');
    }

    public function getContactMessageById($id)
    {
        $message = $this->contactMessageRepository->getContactMessageById($id);
        return view('');
    }

    public function deleteContactMessage($id)
    {
        $this->contactMessageRepository->deleteContactMessage($id);
        return back();
    }
}
