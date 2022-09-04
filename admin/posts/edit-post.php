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
    <title>Admin | Edit Post</title>

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
                <a href="<?= BASE_URL . '/admin/posts/create-post.php'?>" class="btn">Add Post</a>
                <a href="<?= BASE_URL . '/admin/posts/index.php'?>" class="btn">View Post</a>
           </div>
            
            <div class="main-content">
                <h1 class="title">Edit Post</h1>
                <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>
                
                <form action="edit-post.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $id; ?>">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" value="<?= $title; ?>" class="input-text">
                    </div>
                    <div class="form-group">
                        <label for="body">Body</label>
                        <textarea name="body" id="body" class="input-text"><?= $body; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" name="image" value="<?= $image; ?>" class="input-text">
                    </div>
                    <div class="form-group">
                        <label for="topic_id">Topic</label>
                        <select name="topic_id" class="input-text">
                            <option value=""></option>
                            <?php foreach($topics as $key => $topic): ?>
                                <?php if(!empty($topic_id) && $topic_id == $topic['id']): ?>
                                    <option selected value="<?= $topic['id']; ?>"><?= $topic['name']; ?></option>
                                <?php else: ?>
                                    <option value="<?= $topic['id']; ?>"><?= $topic['name']; ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">

                        <?php if(empty($published)): ?>
                            <label>
                                <input type="checkbox" name="published">
                                Publish
                            </label>
                        <?php else: ?>
                            <label>
                                <input checked type="checkbox" name="published">
                                Publish
                            </label>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="post-btn-upd" class="btn">Update Post</button>
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
        // toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
        // heading: {
        //     options: [
        //         { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
        //         { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
        //         { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
        //     ]
        // }
    } )
    .catch( error => {
        console.log( error );
    } );
</script>
<script src="../../assets/js/scripts.js"></script>
    
</body>
</html>