<?php

namespace Models;
use Database;

require_once("Classes/Database/Database.php");

abstract class Model extends Database
{
    protected $table;

    public function allArticles()
    {
        $sql = "SELECT * FROM {$this->table}";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll();
        return $results;
    }

    //La date de création d'un tuple est automatiquement crée par la BDD lors de la création
    public function createArticle(string $title, string $slogan, string $text)
    {
        $sql = "INSERT INTO {$this->table}(title, slogan, content)
        VALUES (?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$title, $slogan, $text]);
    }

    public function showArticle(int $id): mixed
    {
        $sql = "SELECT * FROM {$this->table} WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
        $article = $stmt->fetch();
        return $article;
    }

    public function updateArticle()
    {
    
    }

    public function deleteArticle()
    {

    }

}