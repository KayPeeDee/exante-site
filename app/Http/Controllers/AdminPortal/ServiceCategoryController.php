<?php

namespace App\Http\Controllers\AdminPortal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\MediaRepository;
use App\Repositories\ServiceCategoryRepository;

class ServiceCategoryController extends Controller
{
    protected $serviceCategoryRepository;
    protected $mediaRepository;

    public function __construct(ServiceCategoryRepository $serviceCategoryRepository, MediaRepository $mediaRepository)
    {
        $this->mediaRepository = $mediaRepository;
        $this->serviceCategoryRepository = $serviceCategoryRepository;
    }

    public function newServiceCategoryPage()
    {
        return view('admin-portal.pages.service-categories.create-service-category');
    }

    public function createServiceCategory(Request $request)
    {
        $inputData = $request->all();
        if ($request->hasFile('image')) {
            $fileName = $this->mediaRepository->uploadFile($request->file('image'));
            $inputData['image'] = $fileName;
        }
        $this->serviceCategoryRepository->createServiceCategory($inputData);
        return redirect()->route('list-service-categories');
    }

    public function getAllServiceCategories()
    {
        $serviceCategories = $this->serviceCategoryRepository->getAllServiceCategories();
        // dd($serviceCategories);
        return view('admin-portal.pages.service-categories.service-categories-list', compact('serviceCategories'));
    }
    
    public function getServiceCategoryById($id)
    {
        $serviceCategory = $this->serviceCategoryRepository->getServiceCategoryById($id);
        return view('admin-portal.pages.service-categories.service-category-detail', compact('serviceCategory'));
    }

    public function updateServiceCategoryDetails(Request $request, $id)
    {
        $inputData = $request->all();
        $this->serviceCategoryRepository->updateServiceCategoryDetails($inputData, $id);
        return back();
    }

    public function updateServiceCategoryImage(Request $request, $id)
    {
        $input = $request->all();
        if ($request->hasFile('image')) {
            $fileName = $this->mediaRepository->uploadFile($request->file('image'));
            $input['image'] = $fileName;
        }

        $this->serviceCategoryRepository->updateServiceCategoryImage($input['image'], $id);
        return back();
    }

    public function deleteServiceCategory($id)
    {
        $this->serviceCategoryRepository->deleteServiceCategory($id);
        return back();
    }
}
