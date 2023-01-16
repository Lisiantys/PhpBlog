<?php 
    require_once("Classes/Controllers/ArticleController.php");
    $displayedArticle = new \Controllers\ArticleController;
    $article = $displayedArticle->show();

    //Récupère les paramètres ajoute à la BDD et redirige sur la meme page update $id
    if(isset($_POST)){
        if(isset($_POST['title']) && !empty($_POST['title'])
            && isset($_POST['slogan']) && !empty($_POST['slogan'])
            && isset($_POST['content']) && !empty($_POST['content'])
            && isset($_GET['id']) && !empty($_GET['id']))
        {
            $title = strip_tags($_POST['title']);
            $slogan = strip_tags($_POST['slogan']);
            $content = strip_tags($_POST['content']);
            $id = strip_tags($_GET['id']);

            $displayedArticle->update($title, $slogan, $content, $id);
            header('Location: updateArticle.php?id=' . $article["id"] . ' ');
        }
    }      
?>

<?php require_once("Components/navbar.php"); ?>

    <!-- Voir pour le create et le update une redirection a manager.php si aucun id selectionné -->
         
    <h1>Update</h1><br>
    <p>Titre : <?= $article['title'] ?></p>
    <p>Crée le : <?= $article['created_at'] ?></p>
    <p>Slogan : <?= $article['slogan'] ?></p>
    <p>Texte : <?= $article['content'] ?></p>
    <br>
         
    <form method="post">
    <p>Titre : <input required minlength="4" maxlength="50" value="<?= $article['title'] ?>" name="title" type="text"></p>
    <p>Crée le : <?= $article['created_at'] ?></p>
    <p>Slogan :  <input required minlength="4" maxlength="20" value="<?= $article['slogan'] ?>" name="slogan" type="text"> </p>
    <p>Texte : <input  class="long-field" required minlength="10" maxlength="255" value=" <?= $article['content'] ?>" name="content" type="text"></p>
    <button type="submit" class="green"><i class="fa-solid fa-check fa-2xl"></i></button> 
    </form>

    <p>
        <a href="manager.php">Retour au CRUD</a>  
        <a href="deleteArticle.php?id=<?= $article['id'] ?>">Supprimer</a>
    </p>

<?php require_once("Components/footer.php"); ?>