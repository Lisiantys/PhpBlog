<?php   
    require_once("Classes/Controllers/ArticleController.php"); 
    require_once("Components/navbar.php");

    $allArticles = new \Controllers\ArticleController;
    $articles = $allArticles->index();
?>

<div class="container-manager">
    <div class="child-container-manager">
        <h1>CRUD</h1>
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
                <tr>
                    <form action="createArticle.php" method="post">
                    <td><input required minlength="8" maxlength="50" name="title" type="text" placeholder="Entrez un Titre"></td>
                    <td><?php $date = date('d-m-y h:i:s'); echo $date;  ?></td>
                    <td><input required minlength="4" maxlength="20" name="slogan" type="text" placeholder="Entrez un Slogan"></td>
                    <td><input required minlength="10" maxlength="255" name="content" type="text"placeholder="Entrez un Text"></td>
                    <td>
                        <button type="submit" class="green"><i class="fa-solid fa-plus fa-2xl"></i></button>
                    </td>
                    </form>
                </tr>
        </tbody>
    </table>
</div>

<?php require_once("Components/footer.php") ?>
