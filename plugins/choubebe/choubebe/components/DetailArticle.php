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

class DetailArticle extends Account {

    public function componentDetails() {
        return [
            'name' => 'DetailArticle',
            'description' => 'DetailArticle'
        ];
    }

    public function onRun() {
        $idArticle = $this->param('article_id');
        $this->page['article'] = ArticleModel::find($idArticle);
    }
}
