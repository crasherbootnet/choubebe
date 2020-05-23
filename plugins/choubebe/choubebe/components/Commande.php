<?php

namespace Choubebe\Choubebe\Components;

use Flash;
use Redirect;
use Validator;
use ValidationException;
use RainLab\User\Components\Account;
use Choubebe\Choubebe\Models\Commande as CommandeModel;
use Choubebe\Choubebe\Models\CommandeProduit;

class Commande extends Account {

    public function componentDetails() {
        return [
            'name' => 'Commande',
            'description' => 'Commande'
        ];
    }

    public function onRun() {
    }

    public function onCommande(){
        // Passer la commande 
        $commande = new CommandeModel;
        $commande->name = post('name');
        $commande->tel = post('tel');
        $commande->commune = post('commune');
        $commande->save();

        $cookies = $_COOKIE;
        foreach($cookies as $key => $cookie){
            if($this->isArticleCookie($key) !== false){
                $strlenKey = strlen($key);
                $index = -$strlenKey+9;
                $idArticle = substr($key, $index);
                $commandeProduit = new CommandeProduit;
                $commandeProduit->commande_id = $commande->id;
                $commandeProduit->produit_id = $idArticle;
                $commandeProduit->nbre = $cookie;
                $commandeProduit->save();
            }
        }

        // Clean cookie article
        $articles = [];
        // Recuperation des commandes dans le panier
        $cookies = $_COOKIE;
        foreach($cookies as $key => $cookie){
            if($this->isArticleCookie($key) !== false){
                setcookie($key, '', time() - 3600, "/");
            }
        }
        return Redirect::to("/commande-success");
    }

    // Permet de savoir si le cookie a un name article
    public function isArticleCookie($name){
        return strpos($name, "Article");
    }
}
