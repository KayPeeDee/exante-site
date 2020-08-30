<?php

namespace App\Repositories;

use App\Models\CompanyDetail;

class CompanyDetailRepository{

    public function __construct()
    {}

    public function createCompanyDetails(array $data)
    {
        return CompanyDetail::create([
            'company_overview' => $data['company_overview'],
            'vision' => $data['vision'],
            'mission' => $data['mission']
        ]);
    }

    public function getCompanyDetails()
    {
        return CompanyDetail::all()->first();
    }

    public function updateCompanyDetails(array $data, $id)
    {
        return CompanyDetail::find($id)->update([
            'company_overview' => $data['company_overview'],
            'vision' => $data['vision'],
            'mission' => $data['mission']
        ]);
    }

    public function deleteCompanyDetails($id)
    {
        CompanyDetail::destroy($id);
    }
}