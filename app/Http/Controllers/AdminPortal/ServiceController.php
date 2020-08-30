<?php

namespace App\Http\Controllers\AdminPortal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\MediaRepository;
use App\Repositories\ServiceCategoryRepository;
use App\Repositories\ServiceRepository;

class ServiceController extends Controller
{
    protected $serviceRepository;
    protected $mediaRepository;
    protected $serviceCategoryRepository;

    public function __construct(ServiceRepository $serviceRepository, MediaRepository $mediaRepository, ServiceCategoryRepository $serviceCategoryRepository)
    {
        $this->serviceRepository = $serviceRepository;
        $this->mediaRepository = $mediaRepository;
        $this->serviceCategoryRepository = $serviceCategoryRepository;
    }

    public function getAllServices()
    {
        $services = $this->serviceRepository->getAllServices();
        return view('admin-portal.pages.services.services-list', compact('services'));
    }

    public function createServicePage()
    {
        $serviceCategories = $this->serviceCategoryRepository->getAllServiceCategories();
        return view('admin-portal.pages.services.create-service', compact('serviceCategories'));
    }

    public function createService(Request $request)
    {
        $input = $request->all();
        if ($request->hasFile('image')) {
            $fileName = $this->mediaRepository->uploadFile($request->file('image'));
            $input['image'] = $fileName;
        }
        $this->serviceRepository->createService($input);
        return redirect()->route('list-services');
    }

    // public function getServicesBySectionId($sectionId)
    // {

    //     $services = $this->serviceRepository->getServicesBySectionId($sectionId);
    //     return view('admin-portal.sections.services.services', compact('services','sectionId'));
    // }

    public function getServiceById($id)
    {
        $service = $this->serviceRepository->getServiceById($id);
        return view('admin-portal.pages.services.service-detail', compact('service'));
    }

    public function updateServiceDetails(Request $request, $id)
    {
        $input = $request->all();
        $this->serviceRepository->updateService($input, $id);
        return back();
    }

    public function uploadServiceImage(Request $request, $id)
    {
        $input = $request->all();
        if ($request->hasFile('image')) {
            $fileName = $this->mediaRepository->uploadFile($request->file('image'));
            $input['image'] = $fileName;
        }
        $this->serviceRepository->updateServiceImage($input['image'], $id);
        return back();
    }

    public function deleteService($id)
    {
        $this->serviceRepository->deleteService($id);
        return back();
    }
}
