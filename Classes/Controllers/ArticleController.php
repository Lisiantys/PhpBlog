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

    public function create(string $title, string $slogan, string $content)
    {
        $this->model->createArticle($title, $slogan, $content);
    }

    public function show()
    {
        $article_id = null;

        if(!empty($_GET['id']) && ctype_digit($_GET['id'])){
            $article_id = $_GET['id'];
        }

        if (!$article_id) {
            die("Vous devez préciser un paramètre `id` dans l'URL !");
        }

        $article = $this->model->showArticle($article_id);
        return $article;

    }

    public function update(string $title, string $slogan, string $content, int $id)
    {
        $this->model->updateArticle($title, $slogan, $content, $id);
    }

    public function delete()
    {
        $article_id = null;

        if(!empty($_GET['id']) && ctype_digit($_GET['id'])){
            $article_id = $_GET['id'];
        }

        if (!$article_id) {
            die("Vous devez préciser un paramètre `id` dans l'URL !");
        }

        $this->model->deleteArticle($article_id);
    }
}