<?php

require_once("Classes/Controllers/ArticleController.php"); 

$createArticle = new \Controllers\ArticleController;

//Refuse l'accès au dossier si champ inexistant ou null et redirige manager.php
if (!isset($_POST['title']) ||  empty($_POST['title'])
            || isset($_POST['slogan']) ||  empty($_POST['slogan'])
            ||  isset($_POST['content']) ||  empty($_POST['content']))
        {
            header('Location: manager.php');
        }   

//Récupère les paramètres ajoute à la BDD et redirige manager.php
if(isset($_POST)){
    if(isset($_POST['title']) && !empty($_POST['title'])
        && isset($_POST['slogan']) && !empty($_POST['slogan'])
        && isset($_POST['content']) && !empty($_POST['content'])){
            $title = strip_tags($_POST['title']);
            $slogan = strip_tags($_POST['slogan']);
            $content = strip_tags($_POST['content']);

            $createArticle->create($title, $slogan , $content);
            header('Location: manager.php');
        }
}      