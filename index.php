<?php   require_once("Classes/Controllers/ArticleController.php");
        $allDataFetch = new \Controllers\ArticleController;
        $allArticles = $allDataFetch->index();
        echo $allArticles["4"]["title"];
        //var_dump($allArticles);
?>

<?php require_once("Components/navbar.php") ?>
<section class="section-1">
    <div class="left-child">
        <h1>Hi, I am John, <br>Creative Technologist</h1>
        <p>Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
        <button>Download Resume</button>
    </div>
    <div class="right-child">
        <img src="assets/profil.png" alt="john's picture">
    </div>
</section>
<section class="section-2">
    <h2>Recent posts</h2>
    <a href="/blog.php">View all</a>

    <div class="main-container">

        <?php foreach ($allArticles as $article) { ?>
            <h3><?php $article["slogan"]?></h3>
        <?php } ?>
    </div>

</section>
<?php require_once("Components/footer.php") ?>