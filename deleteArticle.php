<?php

require_once("Classes/Controllers/ArticleController.php");

$deleteArticle = new \Controllers\ArticleController;

        $deleteArticle->delete();
        header('Location: manager.php');