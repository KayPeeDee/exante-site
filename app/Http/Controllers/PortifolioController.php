<?php

namespace App\Http\Controllers;

use App\Repositories\MediaRepository;
use App\Repositories\PortifolioRepository;
use Illuminate\Http\Request;

class PortifolioController extends Controller
{
    protected $portifolioRepository;
    protected $mediaRepository;

    public function __construct(PortifolioRepository $portifolioRepository, MediaRepository $mediaRepository)
    {
        $this->portifolioRepository = $portifolioRepository;
        $this->mediaRepository = $mediaRepository;
        $this->middleware('auth');
    }

    public function getProjectCategoriesBySectionId($sectionId)
    {
        $categories = $this->portifolioRepository->getProjectCategoriesBySectionId($sectionId);
        // dd($categories);
        return view('admin-portal.sections.portifolio.project-categories', compact('categories','sectionId'));
    }

    public function createProjectCategoryPage($sectionId)
    {
        return view('admin-portal.sections.portifolio.create-category', compact('sectionId'));
    }

    public function createProjectCategory(Request $request, $sectionId)
    {
        // dd($request->all());
        $this->portifolioRepository->createProjectCategory($request->all());
        return redirect()->route('project-categories', $sectionId);
    }

    public function getProjectCategoryById($id)
    {
        $category = $this->portifolioRepository->getProjectCategoryById($id);
        // dd($category->projects);
        return view('admin-portal.sections.portifolio.get-category', compact('category'));
    }

    public function updateProjectCategory(Request $request, $id)
    {
        $this->portifolioRepository->updateProjectCategory($request->all(), $id);
        return back();
    }

    public function deleteProjectCategory($sectionId, $id)
    {
        $this->portifolioRepository->deleteProjectCategory($id);
        return redirect()->route('project-categories', $sectionId);
    }


    public function createProjectPage($categoryId)
    {
        return view('admin-portal.sections.portifolio.create-project', compact('categoryId'));
    }

    public function createProject(Request $request, $categoryId)
    {
        $input = $request->all();
        if ($request->hasFile('image')) {
            $fileName = $this->mediaRepository->uploadImage($request->file('image'));
            $input['image'] = $fileName;
        }
        $this->portifolioRepository->addProject($input);
        return redirect()->route('get-category', $categoryId);

    }

    public function getProjectById($categoryId, $id)
    {
        $project = $this->portifolioRepository->getProjectById($id);
        return view('admin-portal.sections.portifolio.update-project', compact('project'));
    }

    public function updateProject(Request $request, $id)
    {

    }

    public function deleteProject($categoryId, $id)
    {
        $this->portifolioRepository->deleteProject($id);
        return redirect()->route('get-category', $categoryId);
    }



}
