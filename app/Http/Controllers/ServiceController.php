<?php

namespace App\Http\Controllers;

use App\Repositories\ServiceRepository;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    // protected $serviceRepository;

    // public function __construct(ServiceRepository $serviceRepository)
    // {
    //     $this->serviceRepository = $serviceRepository;
    // }

    // public function createServicePage($sectionId)
    // {
    //     return view('admin-portal.sections.services.create-service', compact('sectionId'));
    // }

    // public function createService(Request $request, $sectionId)
    // {
    //     // dd($request->all());
    //     $this->serviceRepository->createService($request->all());
    //     return redirect()->route('services', $sectionId);
    // }

    // public function getServicesBySectionId($sectionId)
    // {

    //     $services = $this->serviceRepository->getServicesBySectionId($sectionId);
    //     return view('admin-portal.sections.services.services', compact('services','sectionId'));
    // }

    // public function getServiceById($sectionId, $id)
    // {
    //     $service = $this->serviceRepository->getServiceById($id);
    //     return view('admin-portal.sections.services.update-service', compact('service'));
    // }

    // public function updateService(Request $request, $id)
    // {
    //     $this->serviceRepository->updateService($request->all(), $id);
    //     return back();
    // }

    // public function deleteService($sectionId, $id)
    // {
    //     $this->serviceRepository->deleteService($id);
    //     return redirect()->route('services', $sectionId);
    // }
}
