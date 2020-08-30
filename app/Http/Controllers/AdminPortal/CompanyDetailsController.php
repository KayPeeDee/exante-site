<?php

namespace App\Http\Controllers\AdminPortal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\CompanyDetailRepository;

class CompanyDetailsController extends Controller
{
    protected $companyDetailRepository;

    public function __construct(CompanyDetailRepository $companyDetailRepository)
    {
        $this->companyDetailRepository = $companyDetailRepository;
    }

    public function getCompanyDetails()
    {
        $companyDetails = $this->companyDetailRepository->getCompanyDetails();
        return view('admin-portal.pages.about-us.company-details', compact('companyDetails'));
    }


    public function createCompanyDetails(Request $request)
    {
        $inputData = $request->all();
        $this->companyDetailRepository->createCompanyDetails($inputData);
        return back();
    }

    
    public function updateCompanyDetails(Request $request,$id)
    {
        $inputData = $request->all();
        $this->companyDetailRepository->updateCompanyDetails($inputData, $id);
        return back();
    }

    public function deleteCompanyDetails($id)
    {
        $this->companyDetailRepository->deleteCompanyDetails($id);
        return back();
    }


}
