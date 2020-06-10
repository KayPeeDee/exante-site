<?php

namespace App\Repositories;

use App\Models\Client;
use App\Models\Section;
use Illuminate\Support\Facades\Validator;

class ClientRepository{

    public function __construct()
    {
    }

    public function validator(array $client)
    {
        return Validator::make($client, [
            'name' => ['required', 'string'],
            'logo' => ['required', 'string']
        ]);
    }

    public function createClient(array $client)
    {
        return Client::create([
            'name' => $client['name'],
            'website_link' => $client['website_link'],
            'logo' => $client['logo'],
            'section_id' => $client['section_id']
        ]);
    }

    public function getAllClients()
    {
        return Client::latest()->get();
    }

    public function getClientsBySectionId($sectionId)
    {
        return Section::find($sectionId)->clients;
    }

    public function getClientById($id)
    {
        return Client::find($id);
    }

    public function updateClient(array $client, $id)
    {
        return Client::find($id)->update([
            'name' => $client['name'],
            'website_link' => $client['website_link'],
            'logo' => $client['logo'],
            'section_id' => $client['section_id']
        ]);
    }

    public function deleteClient($id)
    {
        Client::destroy($id);
    }

}
