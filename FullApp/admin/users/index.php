<?php 
    include("../../path.php"); 
    require(ROOT_PATH . "/app/controllers/users.php");
    usersOnly();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | View Users</title>

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
                <a href="<?= BASE_URL . '/admin/users/create-user.php'?>" class="btn">Add User</a>
                <a href="<?= BASE_URL . '/admin/users/index.php'?>" class="btn">View Users</a>
           </div>
            
            <div class="main-content">
                <h1 class="title">Manage Users</h1>
                <table>
                    <thead>
                        <th>SN</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Permissão</th>
                        <th colspan="2">Action</th>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $key => $user): ?>
                        <tr>
                            <td><?= $key + 1?></td>
                            <td><?= $user["username"]?></td>
                            <td><?= $user["email"]?></td>
                            <td><?= $user["admin"] == 1 ? "Admin" : "Usuário";?></td>
                            <td>
                                <a href="<?= BASE_URL . '/admin/users/edit-user.php?id='. $user["id"]?>" class="edit">Edit</a>
                                <a href="<?= BASE_URL . '/admin/users/index.php?del_id='. $user["id"]?>" class="delete">Delete</a>
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