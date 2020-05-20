<?php namespace Choubebe\Choubebe;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            "Choubebe\Choubebe\Components\Home" => "Home",
            "Choubebe\Choubebe\Components\DetailArticle" => "DetailArticle",
            "Choubebe\Choubebe\Components\Cart" => "Cart",
        ];
    }

    public function registerSettings()
    {
    }
}
