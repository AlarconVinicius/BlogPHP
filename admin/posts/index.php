<?php 
    include("../../path.php"); 
    require(ROOT_PATH . "/app/controllers/posts.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | View Posts</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../../assets/css/admin.css">

</head>
<body>

<!-- header section starts  -->

<?php include(ROOT_PATH . "/app/includes/header-admin.php"); ?>

<!-- header section ends -->

<!-- container section starts  -->

<section class="container" id="posts">

    <!-- Sidebar starts  -->
    <?php include(ROOT_PATH . "/app/includes/sidebar-admin.php"); ?>
    <!-- Sidebar ends -->
    <div class="content-container">

        <div class="content">
           <div class="buttons">
                <a href="<?= BASE_URL . '/admin/posts/create-post.php'?>" class="btn">Add Post</a>
                <a href="<?= BASE_URL . '/admin/posts/index.php'?>" class="btn">View Post</a>
           </div>
            
            <div class="main-content">
                <h1 class="title">Manage Post</h1>
                <table>
                    <thead>
                        <th>SN</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th colspan="3">Action</th>
                    </thead>
                    <tbody>
                        <?php foreach ($posts as $key => $post): ?>
                            <tr>
                                <td><?= $key + 1?></td>
                                <td><?= $post["title"]?></td>
                                <td><?= $post["user_id"]["username"]?></td>
                                <td>
                                    <a href="<?= BASE_URL . '/admin/posts/edit-post.php?id='. $post["id"]?>" class="edit">Edit</a>
                                    <a href="<?= BASE_URL . '/admin/posts/index.php?del_id='. $post["id"]?>" class="delete">Delete</a>
                                    <?php if($post["published"]): ?>
                                        <a href="<?= BASE_URL . '/admin/posts/edit-post.php?published=0&p_id=' . $post["id"]?>" class="unpublish">Unpublish</a>
                                    <?php else: ?>
                                        <a href="<?= BASE_URL . '/admin/posts/edit-post.php?published=1&p_id=' . $post["id"]?>" class="publish">Publish</a>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            
        </div>

    </div>


    

</section>

<!-- container section ends -->

<!-- footer section starts  -->
<?php include(ROOT_PATH . "/app/includes/footer.php"); ?>
<!-- footer section ends -->

<!-- custom js file link  -->
<script src="../../assets/js/scripts.js"></script>
    
</body>
</html>