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
            'image' => $service['image'],
            'category_id' => $service['category_id']
        ]);
    }

    public function getServicesByCategoryId($categoryId)
    {
        return Service::find($categoryId)->services;
    }

    public function getAllServices()
    {
        return Service::latest()->get();
    }

    public function getServiceById($id)
    {
        return Service::find($id);
    }

    public function getServiceByName($name)
    {
        return Service::where('name', $name)->first();
    }

    public function updateService(array $service, $id)
    {
        return Service::find($id)->update([
            'name' => $service['name'],
            'description' => $service['description'],
        ]);

    }


    public function updateServiceImage($fileName, $id)
    {
        return Service::find($id)->update([
            'image' => $fileName
        ]);
    }

    public function deleteService($id)
    {
        Service::destroy($id);
    }


}
