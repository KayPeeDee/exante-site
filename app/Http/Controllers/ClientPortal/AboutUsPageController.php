<?php

namespace App\Http\Controllers\ClientPortal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\CompanyDetailRepository;
use App\Repositories\TeamRepository;

class AboutUsPageController extends Controller
{
    protected $teamRepository;
    protected $companyDetailRepository;

    public function __construct(CompanyDetailRepository $companyDetailRepository, TeamRepository $teamRepository)
    {
        $this->teamRepository = $teamRepository;
        $this->companyDetailRepository = $companyDetailRepository;
    }

    public function viewPage()
    {
        $companyDetails = $this->companyDetailRepository->getCompanyDetails();
        $teamMembers = $this->teamRepository->getAllTeamMembers();
        return view('client-portal.about-us', compact('companyDetails', 'teamMembers'));
    }
}
