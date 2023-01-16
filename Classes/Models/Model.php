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
    public function createArticle(string $title, string $slogan, string $content)
    {
        $sql = "INSERT INTO {$this->table}(title, slogan, content)
        VALUES (?,?,?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$title, $slogan, $content]);
    }

    public function showArticle(int $id): mixed
    {
        $sql = "SELECT * FROM {$this->table} WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
        $article = $stmt->fetch();
        return $article;
    }


    // Voir pour la mise à jour e la date quand une update est faite.
    public function updateArticle(string $title, string $slogan, string $content, int $id)
    {
        $sql = "UPDATE {$this->table} SET title = ?, slogan = ?, content = ? WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$title, $slogan, $content, $id]);
    }

    public function deleteArticle(int $id)
    {
        $sql = "DELETE FROM {$this->table} WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt = $stmt->execute([$id]);
    }

}