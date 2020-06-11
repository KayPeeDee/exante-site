<?php

namespace App\Repositories;

use App\Models\Project;
use App\Models\ProjectCategory;
use App\Models\Section;

class PortifolioRepository{

    public function __construct()
    {
    }

    public function createProjectCategory(array $projectCategory)
    {
        return ProjectCategory::create([
            'name' => $projectCategory['name'],
            'description' => $projectCategory['description'],
            'section_id' => $projectCategory['section_id']
        ]);
    }

    public function getProjectCategoriesBySectionId($sectionId)
    {
        return Section::find($sectionId)->projectCategories;
    }

    public function getAllProjectCategories()
    {
        return ProjectCategory::latest()->get();
    }

    public function getProjectCategoryById($id)
    {
        return ProjectCategory::find($id);
    }

    public function getProjectsByCategoryName($name)
    {
        return ProjectCategory::where('name', $name)->first()->projects;
    }

    public function updateProjectCategory(array $projectCategory, $id)
    {
        return ProjectCategory::find($id)->update([
            'name' => $projectCategory['name'],
            'description' => $projectCategory['description'],
            'section_id' => $projectCategory['section_id']
        ]);
    }

    public function deleteProjectCategory($id)
    {
        ProjectCategory::destroy($id);
    }


    public function addProject(array $project)
    {
        return Project::create([
            'name' => $project['name'],
            'image' => $project['image'],
            'details' => $project['details'],
            'category_id' => $project['category_id']
        ]);
    }

    public function getProjectByCategoryId($projectCategoryId)
    {
        return ProjectCategory::find($projectCategoryId)->projects;
    }

    public function getAllProjects()
    {
        return Project::latest()->get();
    }

    public function getProjectById($id)
    {
        return Project::find($id);
    }

    public function updateProject(array $project, $id)
    {
        return Project::find($id)->update([
            'name' => $project['name'],
            'details' => $project['details'],
        ]);
    }

    public function updateProjectImage($filaName, $id)
    {
        return Project::find($id)->update([
            'image' => $filaName,
        ]);
    }

    public function deleteProject($id)
    {
        Project::destroy($id);
    }
}
