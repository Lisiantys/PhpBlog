<?php

require_once("Classes/Controllers/ArticleController.php"); 

$allArticles = new \Controllers\ArticleController;

//Refuse l'accès au dossier et redirige manager.php
if (!isset($_POST['title']) ||  empty($_POST['title'])
            || isset($_POST['slogan']) ||  empty($_POST['slogan'])
            ||  isset($_POST['content']) ||  empty($_POST['content']))
        {
            header('Location: manager.php');
        }   

//Récupère les paramètres et redirige manager.php
if(isset($_POST)){
    if(isset($_POST['title']) && !empty($_POST['title'])
        && isset($_POST['slogan']) && !empty($_POST['slogan'])
        && isset($_POST['content']) && !empty($_POST['content'])){
            $produit = strip_tags($_POST['title']);
            $prix = strip_tags($_POST['slogan']);
            $nombre = strip_tags($_POST['content']);

            $allArticles->create($_POST['title'], $_POST['slogan'], $_POST['content']);
            header('Location: manager.php');
        }
}      