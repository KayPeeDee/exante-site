<?php

namespace App\Http\Controllers;

use App\Repositories\ContactMessageRepository;
use App\Repositories\ContactRepository;
use App\Repositories\PortifolioRepository;
use App\Repositories\SectionRepository;
use App\SectionConstants;
use Illuminate\Http\Request;

class SiteController extends Controller
{

    protected $sectionRepository;
    protected $contactRepository;
    protected $portifolioRepository;
    protected $contactMessageRepository;

    public function __construct(
        SectionRepository $sectionRepository,
        ContactRepository $contactRepository,
        PortifolioRepository $portifolioRepository,
        ContactMessageRepository $contactMessageRepository
    )
    {
        $this->sectionRepository = $sectionRepository;
        $this->contactRepository = $contactRepository;
        $this->portifolioRepository = $portifolioRepository;
        $this->contactMessageRepository = $contactMessageRepository;
    }

    public function index()
    {
        $sections = $this->sectionRepository->findAllSections();
        $whyChooseUs = $this->sectionRepository->findSectionByTag(SectionConstants::WHY_CHOOSE_US);
        $testimonials = $this->sectionRepository->findSectionByTag(SectionConstants::TESTIMONIALS);
        $team = $this->sectionRepository->findSectionByTag(SectionConstants::TEAM);
        $clients = $this->sectionRepository->findSectionByTag(SectionConstants::OUR_CLIENTS);
        $contact = $this->sectionRepository->findSectionByTag(SectionConstants::CONTACT_US);
        $service = $this->sectionRepository->findSectionByTag(SectionConstants::OUR_SERVICES);
        $aboutUs = $this->sectionRepository->findSectionByTag(SectionConstants::ABOUT_US);
        $home = $this->sectionRepository->findSectionByTag(SectionConstants::HOME);

        $projects = $this->portifolioRepository->getAllProjects();
        $appProjects = $this->getAppProjects();
        $webProjects = $this->getWebProjects();
        $enterpriseProjects = $this->getEnterpriseProjects();
        // dd($appProjects);
        return view(
            'welcome',
            compact(
                'sections',
                'contact',
                'clients',
                'team',
                'testimonials',
                'whyChooseUs',
                'service',
                'aboutUs',
                'home',
                'projects',
                'appProjects',
                'webProjects',
                'enterpriseProjects'
            )
        );
    }

    public function getAppProjects()
    {
        return $this->portifolioRepository->getProjectsByCategoryName('APP');
    }

    public function getWebProjects()
    {
        return $this->portifolioRepository->getProjectsByCategoryName('WEB');
    }

    public function getEnterpriseProjects()
    {
        return $this->portifolioRepository->getProjectsByCategoryName('ENTERPRISE');
    }

    public function createContactMessage(Request $request)
    {
        $input = $request->all();
        $this->contactMessageRepository->createMessage($input);
        return back();
    }



}
