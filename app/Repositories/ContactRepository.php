<?php

namespace App\Repositories;

use App\Models\Contact;
use Illuminate\Support\Facades\Validator;

class ContactRepository{

    public function __construct()
    {
    }

    public function validator(array $contact)
    {
        return Validator::make($contact, [
            'section_id' => ['required', 'integer'],
            'address' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string']
        ]);
    }

    public function createContactUsDetails(array $data)
    {
        return Contact::create([
            'section_id' => $data['section_id'],
            'longitude' => $data['longitude'],
            'latitude' => $data['latitude'],
            'address' => $data['address'],
            'email' => $data['email'],
            'phone' => $data['phone']
        ]);

    }

    public function getContactUsDetails($sectionId)
    {
        return Contact::where('section_id', $sectionId)->first();
    }

    public function updateContactUsDetails(array $data, $id)
    {
        return Contact::find($id)->update([
            'section_id' => $data['section_id'],
            'longitude' => $data['longitude'],
            'latitude' => $data['latitude'],
            'address' => $data['address'],
            'email' => $data['email'],
            'phone' => $data['phone']
        ]);
    }

    public function deleteContactUsDetails($id)
    {
        Contact::destroy($id);
    }
}
