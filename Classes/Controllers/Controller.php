<?php

namespace Controllers;

abstract class Controller
{
    protected $model;

    public function __construct()
    {
        $this->model = \Models\ArticleModel::class;
    }
}

//Modèle Statique car ArticleModel uniquement.