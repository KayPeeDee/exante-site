<?php

namespace App\Repositories;

use App\Models\ServiceCategory;

class ServiceCategoryRepository{

    public function __construct(){}

    public function createServiceCategory(array $data)
    {
        return ServiceCategory::create([
            'name' => $data['name'],
            'description' => $data['description'],
            'image' => $data['image']
        ]);
    }

    public function getAllServiceCategories()
    {
        return ServiceCategory::latest()->get();
    }

    public function getServiceCategoryById($id)
    {
        return ServiceCategory::find($id);
    }

    public function getServiceCategoryByName($name)
    {
        return ServiceCategory::where('name', $name)->first();
    }

    public function updateServiceCategoryDetails(array $data, $id)
    {
        return ServiceCategory::find($id)->update([
            'name' => $data['name'],
            'description' => $data['description']
        ]);
    }

    public function updateServiceCategoryImage($fileName, $id)
    {
        return ServiceCategory::find($id)->update([
            'image' => $fileName
        ]);
    }

    public function deleteServiceCategory($id)
    {
        ServiceCategory::destroy($id);
    }
}