<?php 
    include("path.php"); 
    include(ROOT_PATH . "/app/models/User.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Blog Website Design Tutorial</title>

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

        <div class="post">
            <img src="<?php echo BASE_URL . '/assets/img/teste.jpg' ?>" alt="" class="image">
            <div class="date">
                <i class="far fa-clock"></i>
                <span>1st may, 2021</span>
            </div>
            <h3 class="title">Cookie caseiro</h3>
            <p class="text">Je vous propose ce soir une toute nouvelle recette : de délicieux petits cookies tout chocolat sans œuf !

Pour 25 petits cookies :
Faire fondre 70g de chocolat noir et 50g de beurre demi-sel.
Mélanger 80g de sucre cassonade et 60g de compote.
Mélanger les deux préparations.
Ajouter 180g de farine, 7g de levure chimique et mélanger encore.
Ajouter enfin 30g de pépites de chocolat au lait et 30g de pépites de chocolat noir.
Former 25 petites boules de 20g environ et les déposer sur une plaque recouverte de papier sulfurisé.
Pour finir disposer quelques pépites de chocolat noir sur chaque boule et les aplatir très légèrement.
Enfourner pour 9mn à 190 degrés.

Le tour est joué !</p>
            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, reiciendis fugiat quas nemo quia omnis repellat obcaecati quaerat voluptates fuga error dicta cupiditate pariatur soluta dolorum quis eum quibusdam quam?</p>
            <div class="links">
                <a href="#" class="user">
                    <i class="far fa-user"></i>
                    <span>Autor: Vinícius Alarcon</span>
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

        <div class="post">
            <img src="<?php echo BASE_URL . '/assets/img/teste.jpg' ?>" alt="" class="image">
            <div class="date">
                <i class="far fa-clock"></i>
                <span>1st may, 2021</span>
            </div>
            <h3 class="title">COOKIES TOUT CHOCO SANS ŒUF 🤍</h3>
            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum molestias rerum numquam, quos aut est culpa quisquam excepturi sed a inventore dicta tempore consequuntur possimus magnam corporis cum doloremque quasi fugiat exercitationem aliquid cupiditate pariatur. Dolor laboriosam voluptatem ex praesentium magni error debitis maxime alias autem distinctio. Fuga, esse velit!</p>
            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, reiciendis fugiat quas nemo quia omnis repellat obcaecati quaerat voluptates fuga error dicta cupiditate pariatur soluta dolorum quis eumi sed a inventore dicta tempore consequuntur possimus magnam corporis cum doloremque quasi fugiat exercitationem aliquid cupiditate pariatur. Dolor laboriosam voluptatem ex praesentium magni error debitis maxime alias autem distinctio. Fuga, esse velit!</p>
            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, reiciendis fugiat quas nemo quia omnis repellat obcaecati quaerat voluptates fuga error dicta cupiditate pariatur soluta dolorum quis eumi sed a inventore dicta tempore consequuntur possimus magnam corporis cum doloremque quasi fugiat exercitationem aliquid cupiditate pariatur. Dolor laboriosam voluptatem ex praesentium magni error debitis maxime alias autem distinctio. Fuga, esse velit!</p>
            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, reiciendis fugiat quas nemo quia omnis repellat obcaecati quaerat voluptates fuga error dicta cupiditate pariatur soluta dolorum quis eum quibusdam quam?</p>
            <div class="links">
                <a href="#" class="user">
                    <i class="far fa-user"></i>
                    <span>Autor: Camila Vianna</span>
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

        <div class="post">
            <img src="<?php echo BASE_URL . '/assets/img/blog-2.jpg' ?>" alt="" class="image">
            <div class="date">
                <i class="far fa-clock"></i>
                <span>1st may, 2021</span>
            </div>
            <h3 class="title">blog title goes here</h3>
            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum molestias rerum numquam, quos aut est culpa quisquam excepturi sed a inventore dicta tempore consequuntur possimus magnam corporis cum doloremque quasi fugiat exercitationem aliquid cupiditate pariatur. Dolor laboriosam voluptatem ex praesentium magni error debitis maxime alias autem distinctio. Fuga, esse velit!</p>
            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, reiciendis fugiat quas nemo quia omnis repellat obcaecati quaerat voluptates fuga error dicta cupiditate pariatur soluta dolorum quis eum quibusdam quam?</p>
            <div class="links">
                <a href="#" class="user">
                    <i class="far fa-user"></i>
                    <span>by admin</span>
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

        <div class="post">
            <img src="assets/img/blog-3.jpg" alt="" class="image">
            <div class="date">
                <i class="far fa-clock"></i>
                <span>1st may, 2021</span>
            </div>
            <h3 class="title">blog title goes here</h3>
            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum molestias rerum numquam, quos aut est culpa quisquam excepturi sed a inventore dicta tempore consequuntur possimus magnam corporis cum doloremque quasi fugiat exercitationem aliquid cupiditate pariatur. Dolor laboriosam voluptatem ex praesentium magni error debitis maxime alias autem distinctio. Fuga, esse velit!</p>
            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto, reiciendis fugiat quas nemo quia omnis repellat obcaecati quaerat voluptates fuga error dicta cupiditate pariatur soluta dolorum quis eum quibusdam quam?</p>
            <div class="links">
                <a href="#" class="user">
                    <i class="far fa-user"></i>
                    <span>by admin</span>
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