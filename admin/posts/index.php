<?php 
    include("../../path.php"); 
    include(ROOT_PATH . "/app/models/User.php");
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
                        <tr>
                            <td>1</td>
                            <td>First post</td>
                            <td>Vinicius Alarcon</td>
                            <td>
                                <a href="#" class="edit">Edit</a>
                                <a href="#" class="delete">Delete</a>
                                <a href="#" class="publish">Publish</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Second post</td>
                            <td>Vinicius Alarcon</td>
                            <td>
                                <a href="#" class="edit">Edit</a>
                                <a href="#" class="delete">Delete</a>
                                <a href="#" class="publish">Publish</a>
                            </td>
                        </tr>
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