<?php

namespace Controllers;
require_once("Controller.php");

class ArticleController extends Controller
{

    public function index()
    {
        $results = $this->model->allArticles();
        return $results;
    }

    public function create()
    {

    }

    public function show()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }
}