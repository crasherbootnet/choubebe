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
// use October\Rain\Parse\Twig;
use Twig;

class Cart extends Account {

    public function componentDetails() {
        return [
            'name' => 'DetailArticle',
            'description' => 'DetailArticle'
        ];
    }

    public function onRun() {
        $articles = [];
        // Recuperation des commandes dans le panier
        $cookies = $_COOKIE;
        foreach($cookies as $key => $cookie){
            if($this->isArticleCookie($key) !== false){
                $strlenKey = strlen($key);
                $index = -$strlenKey+9;
                $idArticle = substr($key, $index);
                //Recuperation de l'article
                $article = ArticleModel::find($idArticle);
                $articles[] = ["article" => $article, "nbre" => $cookie];
            }
        }
        $idArticle = $this->param('article_id');
        $collection = new \October\Rain\Support\Collection($articles);
        $this->page['articles'] = $collection;
        // $this->page['articlesrecommandes'] = ArticleModel::take(4)->get();
    }

    // Permet de savoir si le cookie a un name article
    public function isArticleCookie($name){
        return strpos($name, "Article");
    }
}
