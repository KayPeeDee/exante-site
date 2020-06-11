<?php

namespace App\Http\Controllers;

use App\Repositories\BenefitRepository;
use App\Repositories\StatisticRepository;
use Illuminate\Http\Request;

class BenefitsController extends Controller
{
    protected $benefitRepository;
    protected $statisticRepository;

    public function __construct(BenefitRepository $benefitRepository, StatisticRepository $statisticRepository)
    {
        $this->benefitRepository = $benefitRepository;
        $this->statisticRepository = $statisticRepository;
        $this->middleware('auth');
    }

    public function createBenefitPage($sectionId)
    {
        return view('admin-portal.sections.why-choose-us.create-benefit', compact('sectionId'));
    }

    public function createBenefit(Request $request, $sectionId)
    {
        $this->benefitRepository->createBenefit($request->all());
        return redirect()->route('benefits', $sectionId);
    }

    public function getBenefitsBySectionId($sectionId)
    {

        $benefits = $this->benefitRepository->getBenefitsBySectionId($sectionId);
        $statistics = $this->statisticRepository->getStatisticsBySectionId($sectionId);
        // dd($statistics);
        return view('admin-portal.sections.why-choose-us.why-choose-us', compact('benefits','statistics','sectionId'));
    }

    public function getBenefitById($sectionId, $id)
    {
        $benefit = $this->benefitRepository->getBenefitById($id);
        return view('admin-portal.sections.why-choose-us.update-benefit', compact('benefit'));
    }

    public function updateBenefit(Request $request, $sectionId, $id)
    {
        $this->benefitRepository->updateBenefit($request->all(), $id);
        return back();
    }

    public function deleteBenefit($sectionId, $id)
    {
        $this->benefitRepository->deleteBenefit($id);
        return redirect()->route('benefits', $sectionId);
    }

    public function createStatisticPage($sectionId)
    {
        return view('admin-portal.sections.why-choose-us.create-statistic', compact('sectionId'));
    }

    public function createStatistic(Request $request, $sectionId)
    {
        $this->statisticRepository->createStatistic($request->all());
        return redirect()->route('benefits', $sectionId);
    }

    public function getStatisticById($sectionId, $id)
    {
        $statistic = $this->statisticRepository->getStatisticById($id);
        return view('admin-portal.sections.why-choose-us.update-statistic', compact('statistic'));
    }

    public function updateStatistic(Request $request, $sectionId, $id)
    {
        $this->statisticRepository->updateStatistic($request->all(), $id);
        return back();
    }

    public function deleteStatistic($sectionId, $id)
    {
        $this->statisticRepository->deleteStatistic($id);
        return redirect()->route('benefits', $sectionId);
    }


}
