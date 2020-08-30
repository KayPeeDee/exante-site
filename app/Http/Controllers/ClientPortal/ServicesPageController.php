<?php

namespace App\Http\Controllers\ClientPortal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\ServiceCategoryRepository;
use App\Repositories\ServiceRepository;

class ServicesPageController extends Controller
{
    protected $serviceCategoryRepository;
    protected $serviceRepository;

    public function __construct(ServiceCategoryRepository $serviceCategoryRepository, ServiceRepository $serviceRepository)
    {
        $this->serviceCategoryRepository = $serviceCategoryRepository;
        $this->serviceRepository = $serviceRepository;
    }

    public function viewServicesPage()
    {
        $categories = $this->serviceCategoryRepository->getAllServiceCategories();
        return view('client-portal.services-list', compact('categories'));
    }

    public function viewServiceCategory($name)
    {
        $category = str_ireplace("-", " ", ucwords($name));
        $serviceCategory = $this->serviceCategoryRepository->getServiceCategoryByName($category);
        return view('client-portal.service-category', compact('serviceCategory'));
    }

    public function viewServiceDetails($categoryName, $serviceName)
    {
        $name = str_ireplace("-", " ", ucwords($serviceName));
        $category = $this->serviceCategoryRepository->getServiceCategoryByName(str_ireplace("-", " ", ucwords($categoryName)));
        $service = $this->serviceRepository->getServiceByName($name);
        // dd($service);
        return view('client-portal.service-detail', compact('service', 'category'));
    }
}
