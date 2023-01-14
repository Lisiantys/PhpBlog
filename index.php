<?php   
    require_once("Classes/Controllers/ArticleController.php");
    $allDataFetch = new \Controllers\ArticleController;
    $allArticles = $allDataFetch->index();
    $twoArticles = array_slice($allArticles, 0, 2);
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
    
    <div class="child-container-section-2">
        <h2>Recent posts</h2>
        <a href="/blog.php">View all</a>
    </div>

    <div class="articles-container-section-2">

        <?php foreach ($twoArticles as $article) { ?>
            <div class="article-setion-2">
                <h3><?php echo $article["title"]; ?></h3>

                <div class="content-article-section-2">
                    <p><?php echo $article["created_at"]; ?></p>
                    <span> | </span>
                    <p><?php echo $article["slogan"]; ?></p>
                </div>
                <p><?php echo $article["content"] ?></p>
            </div>
        <?php } ?>
    </div>
</section>

<section class="section-3">
    <h2>Featured works</h2>
    <div class="features-container-section-3">
        <img src="assets/picture1.png" alt="image1">
        <div class="child-container-section-3">
            <h3>Designing Dashboards</h3>
            <div class="subcontent-container"> 
                <h4>2020</h4>
                <span>Dashboard</span>
            </div>
            <p>  
                Amet minim mollit non deserunt 
                ullamco est sit aliqua dolor do amet sint.
                Velit officia consequat duis enim velit mollit.
                Exercitation veniam consequat sunt nostrud amet.
            </p>
        </div>
    </div>
    <hr>
    <div class="features-container-section-3">
        <img src="assets/picture2.png" alt="image2">
        <div class="child-container-section-3">
            <h3>Vibrant Portraits of 2020</h3>
            <div class="subcontent-container"> 
                <h4>2018</h4>
                <span>Illustration</span>
            </div>
            <p>  
                Amet minim mollit non deserunt 
                ullamco est sit aliqua dolor do amet sint.
                Velit officia consequat duis enim velit mollit.
                Exercitation veniam consequat sunt nostrud amet.
            </p>
        </div>
    </div>
    <hr>
    <div class="features-container-section-3">
        <img src="assets/picture3.png" alt="image3">
        <div class="child-container-section-3">
            <h3>36 Days of Malayalam type</h3>
            <div class="subcontent-container"> 
                <h4>2018</h4>
                <span>Typography</span>
            </div>
            <p>  
                Amet minim mollit non deserunt 
                ullamco est sit aliqua dolor do amet sint.
                Velit officia consequat duis enim velit mollit.
                Exercitation veniam consequat sunt nostrud amet.
            </p>
        </div>
    </div>
    <hr>
</section>
<?php require_once("Components/footer.php") ?>