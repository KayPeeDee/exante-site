<?php

namespace App\Repositories;

use App\Models\EmailAddress;

class EmailAddressRepository{

    public function __construct()
    {}

    public function addEmailAddress(array $data)
    {
        return EmailAddress::create([
            'email' => $data['email']
        ]);
    }

    public function getAllEmailAddresses()
    {
        return EmailAddress::latest()->get();
    }

    public function getEmailAddressById($id)
    {
        return EmailAddress::find($id);
    }

    public function updateEmailAddress(array $data, $id)
    {
        return EmailAddress::find($id)->update([
            'email' => $data['email']
        ]);
    }

    public function deleteEmailAddress($id)
    {
        EmailAddress::destroy($id);
    }

}