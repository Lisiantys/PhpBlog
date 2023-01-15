<?php

require_once("Classes/Controllers/ArticleController.php");

$deleteArticle = new \Controllers\ArticleController;

$article_id = null;

        if(!empty($_GET['id']) && ctype_digit($_GET['id'])){
            $article_id = $_GET['id'];
        }

        if (!$article_id) {
            die("Vous devez préciser un paramètre `id` dans l'URL !");
        }

        $deleteArticle->delete($article_id);
        header('Location: manager.php');