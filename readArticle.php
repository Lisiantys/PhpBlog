<?php 
    require_once("Classes/Controllers/ArticleController.php");
    $queryArticle = new \Controllers\ArticleController;
    $article = $queryArticle->show();
?>

<?php require_once("Components/navbar.php"); ?>

    <p>Titre : <?= $article['title'] ?></p>
    <p>Crée le : <?= $article['created_at'] ?></p>
    <p>Slogan : <?= $article['slogan'] ?></p>
    <p>Texte : <?= $article['content'] ?></p>
    <p>
        <a href="updateArticle.php?id=<?= $article['id'] ?>">Modifier</a>  
        <a href="deleteArticle.php?id=<?= $article['id'] ?>">Supprimer</a>
    </p>

<?php require_once("Components/footer.php"); ?>