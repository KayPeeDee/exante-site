<?php

namespace App\Repositories;

use App\Models\Section;
use App\Models\Statistic;

class StatisticRepository{

    public function __construct()
    {

    }

    public function createStatistic(array $data)
    {
        return Statistic::create([
            'title' => $data['title'],
            'statistic' => $data['statistic'],
            'section_id' => $data['section_id']
        ]);
    }


    public function getStatisticsBySectionId($sectionId)
    {
        return Section::find($sectionId)->statistics;
    }

    public function getAllStatistics()
    {
        return Statistic::latest()->get();
    }

    public function getStatisticById($id)
    {
        return Statistic::find($id);
    }

    public function updateStatistic(array $data, $id)
    {
        return Statistic::find($id)->update([
            'title' => $data['title'],
            'statistic' => $data['statistic'],
        ]);

    }

    public function deleteStatistic($id)
    {
        Statistic::destroy($id);
    }
}
