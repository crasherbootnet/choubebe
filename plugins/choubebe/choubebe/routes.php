<?php

Route::get('register-commande/{articleid}', function ($article_id){
    $name = "ArticleId".$article_id;
    if(isset($_COOKIE[$name])){
        $nbre = (int)$_COOKIE[$name]+1;
        setcookie($name, $nbre, time()+1*24*60*60, "/");
    }else{
        setcookie($name, 1, time()+1*24*60*60, "/");
    }
    return response(['Message' => 'success'], 200)->header('Content-Type', 'application/json');
});