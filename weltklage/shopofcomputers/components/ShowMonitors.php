<?php namespace Weltklage\Shopofcomputers\Components;

use Cms\Classes\ComponentBase;
use Db;
use weltklage\shopofcomputers\Models\MonitorsModel;
use Input;

class ShowMonitors extends ComponentBase
{
    public $monitorBases;

    public function componentDetails()
    {
        return [
            'name'        => 'ShowMonitors Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->monitorBases = MonitorsModel::orderBy('id', 'asc')->get();
    }

    public function onSaveData()
    {
        $monitor_type = Input::get('monitor_type');
        $resolution = Input::get('resolution');
        $number_of_colors = Input::get('number_of_colors');

        if(empty($monitor_type)
            or empty($resolution)
            or empty($number_of_colors)) 
        {
            return false;
        }

        MonitorsModel::insert(
            [
                'monitor_type' => $monitor_type,
                'resolution' => $resolution,
                'colors_number' => $number_of_colors
            ]
        );

        return true;
    }
}
