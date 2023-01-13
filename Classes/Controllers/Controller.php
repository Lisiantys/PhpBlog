<?php

namespace Controllers;

require_once("Classes/Models/ArticleModel.php");

abstract class Controller
{
    protected $model;

    public function __construct()
    {
        $this->model = new \Models\ArticleModel();
    }
}

//Modèle Statique car ArticleModel uniquement.