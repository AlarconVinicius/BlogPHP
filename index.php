<?php 
    include("path.php"); 
    include(ROOT_PATH . "/app/models/User.php");
    include(ROOT_PATH . "/app/models/Post.php");
    require(ROOT_PATH . "/app/controllers/topics.php");

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
    <title>Receitinhas | Home</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>

<!-- header section starts  -->

<?php include(ROOT_PATH . "/app/includes/header.php"); ?>

<!-- header section ends -->




<!-- banner section starts  -->

<section class="banner" id="banner">

    <div class="content">
        <h3>Venha conferir</h3>
        <p>Nós postamos nossas melhores receitas aqui, clique para conferir!</p>
        <a href="#" class="btn">Receitas</a>
    </div>

</section>

<!-- banner section ends -->

<!-- posts section starts  -->

<section class="container" id="posts">

    <div class="posts-container">

        <?php foreach($postsPublished as $key => $post): ?>
            <div class="post">
                <a href="<?= BASE_URL . '/single-post.php?id='. $post["id"] ?>"><img src="<?php echo BASE_URL . '/assets/imgUpload/' . $post["image"]; ?>" alt="" class="image hover-img"></a>
                <div class="date">
                    <i class="far fa-clock"></i>
                    <span><?= date('F j, Y', strtotime($post["created_at"])); ?></span>
                </div>
                <a href="#"><h3 class="title"><?= $post["title"] ?></h3></a>
                <!-- <p class="text"><?= html_entity_decode(substr($post["body"], 0, 150) . "..."); ?></p> -->
                <div class="links">
                    <a href="#" class="user">
                        <i class="far fa-user"></i>
                        <span>Autor: <?= $post["username"]; ?></span>
                    </a>
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
        <?php endforeach; ?>

    </div>

    <!-- Sidebar starts  -->

    <?php include(ROOT_PATH . "/app/includes/sidebar.php"); ?>

    <!-- Sidebar ends -->
    

</section>

<!-- posts section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

    <form action="">
        <h3>contact me</h3>
        <div class="inputBox">
            <input type="text" placeholder="name">
            <input type="email" placeholder="email">
        </div>
        <div class="inputBox">
            <input type="number" placeholder="number">
            <input type="text" placeholder="subject">
        </div>
        <textarea name="" placeholder="message" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="send message" class="btn">
    </form>

</section>

<!-- contact section ends -->

<!-- footer section starts  -->

<?php include(ROOT_PATH . "/app/includes/footer.php"); ?>

<!-- footer section ends -->

<!-- custom js file link  -->
<script src="assets/js/scripts.js"></script>
    
</body>
</html>