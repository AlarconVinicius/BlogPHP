<?php 
    require(ROOT_PATH . "/app/models/Post.php");
    require(ROOT_PATH . "/app/models/Topic.php");
    require(ROOT_PATH . "/app/middleware/middleware.php");
    require(ROOT_PATH . "/app/helpers/validatePost.php");

    $id = "";
    $title = "";
    $body = "";
    $image = "";
    $topic_id = "";
    $published = "";
    $errors = array();

    $topics = selectAllTopics();
    $posts = selectAllPosts();

    if(isset($_POST["post-btn"])) {
        usersOnly();
        $errors = validatePost($_POST);

        if(!empty($_FILES['image']['name'])) {
            $image_name = time() . "_" . $_FILES['image']['name'];
            $destination = ROOT_PATH . "/assets/imgUpload/" . $image_name;
            
            $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

            if($result) {
                $_POST["image"] = $image_name;
            } else {
                array_push($errors, "Falha ao fazer o upload da imagem. Tente novamente!");
            }
        } else {
            array_push($errors, "É necessário fazer o upload da imagem.");
        }

        if(count($errors) === 0) {
            unset($_POST["post-btn"]);
            $_POST["user_id"] = $_SESSION['id'];
            $_POST["published"] = isset($_POST["published"]) ? 1 : 0;
            $_POST["body"] = htmlentities($_POST["body"]);

            $post_id = createPost($_POST["user_id"], $_POST["topic_id"], $_POST["title"], $_POST["body"], $_POST["image"], $_POST["published"]);
            $_SESSION["message"] = "Post criado com sucesso!";
            $_SESSION["type"] = "success";
            header("Location: " .BASE_URL . "/admin/posts/index.php");
            exit();
        } else {
            $title = $_POST["title"];
            $body = $_POST["body"];
            $published = isset($_POST["published"]) ? 1 : 0;
            $topic_id = $_POST["topic_id"];
        }
        //dd($post_id);

    }

    if(isset($_POST["post-btn-upd"])) {
        usersOnly();
        $errors = validatePost($_POST);

        if(!empty($_FILES['image']['name'])) {
            $image_name = time() . "_" . $_FILES['image']['name'];
            $destination = ROOT_PATH . "/assets/imgUpload/" . $image_name;
            
            $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

            if($result) {
                $_POST["image"] = $image_name;
            } else {
                array_push($errors, "Falha ao fazer o upload da imagem. Tente novamente!");
            }
        } else {
            array_push($errors, "É necessário fazer o upload da imagem.");
        }

        if(count($errors) === 0) {
            $id = $_POST["id"];
            unset($_POST["post-btn-upd"], $_POST["id"]);
            $_POST["user_id"] = $_SESSION['id'];
            $_POST["published"] = isset($_POST["published"]) ? 1 : 0;
            $_POST["body"] = htmlentities($_POST["body"]);

            updatePost($id, $_POST["topic_id"], $_POST["title"], $_POST["body"], $_POST["image"], $_POST["published"]);
            header("Location: " .BASE_URL . "/admin/posts/index.php");
            $_SESSION["message"] = "Post atualizado com sucesso!";
            $_SESSION["type"] = "success";
            header("Location: " .BASE_URL . "/admin/posts/index.php");
            exit();
        } else {
            $title = $_POST["title"];
            $body = $_POST["body"];
            $published = isset($_POST["published"]) ? 1 : 0;
            $topic_id = $_POST["topic_id"];
        }
        //dd($post_id);

    }

    if(isset($_GET["published"]) && isset($_GET["p_id"])) {
        usersOnly();
        $id = $_GET["p_id"];
        $published = $_GET["published"];
        $post = selectOnePost($id);
        $_POST["topic_id"] = $post["topic_id"];
        $_POST["title"] = $post["title"];
        $_POST["body"] = $post["body"];
        $_POST["image"] = $post["image"];

        updatePost($id, $_POST["topic_id"], $_POST["title"], $_POST["body"], $_POST["image"], $published);
        header("Location: " .BASE_URL . "/admin/posts/index.php");
        $_SESSION["message"] = "Status do post atualizado com sucesso!";
        $_SESSION["type"] = "success";
        header("Location: " .BASE_URL . "/admin/posts/index.php");
        exit();

    }

    if(isset($_GET["id"])) {
        $id = $_GET["id"];
        $post = selectOnePost($id);
        $id = $post["id"];
        $title = $post["title"];
        $body = $post["body"];
        $image = $post["image"];
        $topic_id = $post["topic_id"];
        $published = $post["published"];
    }
    if(isset($_GET["del_id"])) {
        usersOnly();
        $id = $_GET["del_id"];
        $topic = deletePost($id);
        $_SESSION["message"] = "Post deletado com sucesso!";
        $_SESSION["type"] = "success";
        header("Location: " .BASE_URL . "/admin/posts/index.php");
        exit();
    }