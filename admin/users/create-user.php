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
    <title>Admin | Add User</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
    <!-- CKEditor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/classic/ckeditor.js"></script>

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
                <a href="<?= BASE_URL . '/admin/users/create-user.php'?>" class="btn">Add User</a>
                <a href="<?= BASE_URL . '/admin/users/index.php'?>" class="btn">View Users</a>
           </div>
            
            <div class="main-content">
                <h1 class="title">Add User</h1>
                
                <form action="create-post.php" method="post">
                    <div class="form-group">
                        <label for="username">Nome</label>
                        <input type="text" name="username" class="input-text">
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="text" name="email" class="input-text">
                    </div>
                    <div class="form-group">
                        <label for="password">Senha</label>
                        <input type="password" name="password" class="input-text">
                    </div>
                    <div class="form-group">
                        <label for="passconfirmation">Confirmar Senha</label>
                        <input type="password" name="passconfirmation" class="input-text">
                    </div>
                    <div class="form-group">
                        <label for="admin">Permissão</label>
                        <select name="admin" class="input-text">
                            <option value="0">Usuário</option>
                            <option value="1">Admin</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn">Add User</button>
                    </div>
                </form>
            </div>
            
        </div>

    </div>

</section>

<!-- container section ends -->

<!-- footer section starts  -->
<?php include(ROOT_PATH . "/app/includes/footer.php"); ?>
<!-- footer section ends -->

<!-- custom js file link  -->
<script>
    /* CK Editor */
ClassicEditor
    .create( document.querySelector( '#body' ), {
        toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
        heading: {
            options: [
                { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
            ]
        }
    } )
    .catch( error => {
        console.log( error );
    } );
</script>
<script src="../../assets/js/scripts.js"></script>
    
</body>
</html>