<?php 
    include("path.php"); 
    include(ROOT_PATH . "/app/models/User.php");
    include(ROOT_PATH . "/app/models/Post.php");
    require(ROOT_PATH . "/app/controllers/topics.php");

    if(isset($_GET["post_id"])) {
        $id = $_GET["post_id"];
        $post = selectOnePostAuthor($id);
    }
    $postsPublished= array();
    $postsTitle = "Posts Recentes";
    if(isset($_POST["search-term"])) {
        $postsTitle = "Sua busca: '" . $_POST["search-term"] . "'";
        $postsPublished = searchPosts($_POST["search-term"]);
        //dd($postsPublished);
    } else {
        $postsPublished = selectAllPostsPublished();
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $post["title"] ?> | Receitinhas</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>

<!-- header section starts  -->

<?php include(ROOT_PATH . "/app/includes/header.php"); ?>

<!-- header section ends -->

<!-- posts section starts  -->

<section class="container single-container" id="posts">

    <div class="posts-container">

        <div class="post single-post">
            <img src="<?php echo BASE_URL . '/assets/imgUpload/' . $post["image"]; ?>" alt="" class="image">
            <div class="date">
                <i class="far fa-clock"></i>
                <span><?= date('F j, Y', strtotime($post["created_at"])); ?></span>
            </div>
            <div class="links">
                <a href="#" class="user">
                    <i class="far fa-user"></i>
                    <span>Autor: <?= $post["username"]; ?></span>
                </a>
            </div>
            <h3 class="title single-post-title"><?= $post["title"] ?></h3>
            <p class="text single-post-text"><?= html_entity_decode($post["body"]); ?></p>
            <div class="links">
                <a href="#" class="icon">
                    <i class="far fa-comment"></i>
                    <span>(45)</span>
                </a>
                <a href="#" class="icon">
                    <i class="far fa-share-square"></i>
                    <span>(29)</span>
                </a>
            </div>
        </div>

    </div>

    <!-- Sidebar starts  -->

    <?php include(ROOT_PATH . "/app/includes/sidebar.php"); ?>

    <!-- Sidebar ends -->
    

</section>

<!-- posts section ends -->

<!-- footer section starts  -->

<?php include(ROOT_PATH . "/app/includes/footer.php"); ?>

<!-- footer section ends -->

<!-- custom js file link  -->
<script src="assets/js/scripts.js"></script>
    
</body>
</html>