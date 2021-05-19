<?php namespace Weltklage\Shopofcomputers;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            "Weltklage\Shopofcomputers\Components\ShowMonitors" => 'show_monitors'
        ];
    }

    public function registerSettings()
    {
    }
}
