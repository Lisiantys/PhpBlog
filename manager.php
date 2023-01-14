<?php   
    require_once("Classes/Controllers/ArticleController.php"); 
    require_once("Components/navbar.php");

    $allArticles = new \Controllers\ArticleController;
    $articles = $allArticles->index();
?>

<div class="container-manager">
    <div class="child-container-manager">
        <h1>CRUD</h1>
        <a class="green" href="creteArticle.php">Crée</a>
    </div>
    <table>
        <thead>
            <th>Titre</th>
            <th>Date</th>
            <th>Slogan</th>
            <th>Texte</th>
            <th class="action">Actions</th>
        </thead>
        <tbody>
            <?php
            foreach($articles as $article){
                ?>
                <tr>
                    <td><?= $article['title'] ?></td>
                    <td><?= $article['created_at'] ?></td>
                    <td><?= $article['slogan'] ?></td>
                    <td><?= $article['content'] ?></td>
                    <td>
                        <a class="grey" href="readArticle.php?id=<?= $article['id'] ?>">Voir</a>  
                        <a class="orangered" href="updateArticle.php?id=<?= $article['id'] ?>">Modifier</a>  
                        <a class="red" href="deleteArticle.php?id=<?= $article['id'] ?>">Supprimer</a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
</div>

<?php require_once("Components/footer.php") ?>
