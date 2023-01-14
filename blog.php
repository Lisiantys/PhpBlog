<?php
    require_once("Classes/Controllers/ArticleController.php");
    $allArticles = new \Controllers\ArticleController;
    $articles = $allArticles->index();
?>


<?php require_once("Components/navbar.php") ?>

<div class="main-container-blog">
    <h1>Blog</h1>

    <div class="articles-container-blog">

        <?php foreach ($articles as $article) { ?>
            <div class="article-blog">
                <h3><?php echo $article["title"]; ?></h3>

                <div class="content-blog">
                    <p><?php echo $article["created_at"]; ?></p>
                    <span> | </span>
                    <p><?php echo $article["slogan"]; ?></p>
                </div>
                <p><?php echo $article["content"] ?></p>
            </div>
            <hr>
        <?php } ?>
    </div>
</div>
<?php require_once("Components/footer.php") ?>