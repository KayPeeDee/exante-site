<?php

namespace App\Repositories;

use App\Models\Section;
use App\Models\Service;

class ServiceRepository{

    public function __construct()
    {

    }

    public function createService(array $service)
    {
        return Service::create([
            'name' => $service['name'],
            'description' => $service['description'],
            'icon' => $service['icon'],
            'section_id' => $service['section_id']
        ]);
    }

    public function getServicesBySectionId($sectionId)
    {
        return Section::find($sectionId)->services;
    }

    public function getAllServices()
    {
        return Service::latest()->get();
    }

    public function getServiceById($id)
    {
        return Service::find($id);
    }

    public function updateService(array $service, $id)
    {
        return Service::find($id)->update([
            'name' => $service['name'],
            'description' => $service['description'],
            'icon' => $service['icon'],
            'section_id' => $service['section_id']
        ]);

    }

    public function deleteService($id)
    {
        Service::destroy($id);
    }


}
