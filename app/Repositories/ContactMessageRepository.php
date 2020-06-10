<?php

namespace App\Repositories;

use App\Models\ContactMessage;
use Illuminate\Support\Facades\Validator;

class ContactMessageRepository{

    public function __construct()
    {
    }

    public function validator(array $message)
    {
        return Validator::make($message, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'],
            'subject' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string', 'max:255']
        ]);
    }

    public function createMessage(array $message)
    {
        return ContactMessage::create([
            'name' => $message['name'],
            'email' => $message['email'],
            'subject' => $message['subject'],
            'message' => $message['message']
        ]);
    }

    public function getAllContactMessages()
    {
        return ContactMessage::latest()->get();
    }

    public function getContactMessageById($id)
    {
        return ContactMessage::find($id);
    }

    public function deleteContactMessage($id)
    {
        ContactMessage::destroy($id);
    }

}
