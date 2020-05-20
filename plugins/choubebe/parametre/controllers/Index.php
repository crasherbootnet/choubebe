<?php namespace Choubebe\Parametre\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Index extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController'    ];
    
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Choubebe.Parametre', 'parametre');
    }
}
