<?php

namespace App\Repositories;

use App\Models\PhoneNumber;

class PhoneNumberRepository{

    public function __construct()
    {}

    public function addPhoneNumber(array $data)
    {
        return PhoneNumber::create([
            'phone_number' => $data['phone_number'],
            'type' => $data['type']
        ]);
    }

    public function getAllPhoneNumbers()
    {
        return PhoneNumber::latest()->get();
    }

    public function getPhoneNumberById($id)
    {
        return PhoneNumber::find($id);
    }

    public function updatePhoneNumber(array $data, $id)
    {
        return PhoneNumber::find($id)->update([
            'phone_number' => $data['phone_number'],
            'type' => $data['type']
        ]);
    }

    public function deletePhoneNumber($id)
    {
        PhoneNumber::destroy($id);
    }

}