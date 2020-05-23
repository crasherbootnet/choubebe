<?php

namespace Choubebe\Choubebe\Components;

use Flash;
use Redirect;
use Validator;
use ValidationException;
use Auth;
use RainLab\User\Components\Account;
use BackendAuth;
use Choubebe\Choubebe\Models\Article as ArticleModel;
use Choubebe\Choubebe\Models\Banniere as BanniereModel;
use Choubebe\Parametre\Models\Marque as MarqueModel;
use Choubebe\Parametre\Models\Age as AgeModel;

class Home extends Account {

    public function componentDetails() {
        return [
            'name' => 'Home',
            'description' => 'Home'
        ];
    }

    public function onRun() {
        $this->page['marques'] = MarqueModel::all();
        $this->page['ages'] = AgeModel::all();
        $this->page['articles'] = ArticleModel::paginate(8);
        $this->page['bannieres'] = BanniereModel::all();
    }
}
