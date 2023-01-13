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

    public function createArticle()
    {
    
    }

    public function showArticle()
    {
    
    }

    public function updateArticle()
    {
    
    }

    public function deleteArticle()
    {

    }

}