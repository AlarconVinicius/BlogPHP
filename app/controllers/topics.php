<?php 
    require(ROOT_PATH . "/app/models/Topic.php");
    require(ROOT_PATH . "/app/middleware/middleware.php");
    require(ROOT_PATH . "/app/helpers/validateTopic.php");

    $id = "";
    $name = "";
    $description = "";
    $errors = array();

    $topics = selectAllTopics();

    if(isset($_POST["topic-btn"])) {
        usersOnly();
         
        $errors = validateTopic($_POST);

        if(count($errors) === 0) {
            unset($_POST["topic-btn"]);
            $_POST["description"] = htmlentities($_POST["description"]);
            $topic_id = createTopic($_POST["name"], $_POST["description"]);
            $_SESSION["message"] = "Tópico criado com sucesso!";
            $_SESSION["type"] = "success";
            header("Location: " .BASE_URL . "/admin/topics/index.php");
            exit();
        } else {
            $name = $_POST["name"];
            $description = $_POST["description"];
        }
    }

    if(isset($_GET["del_id"])) {
        usersOnly();
        $id = $_GET["del_id"];
        $topic = deleteTopic($id);
        $_SESSION["message"] = "Tópico deletado com sucesso!";
        $_SESSION["type"] = "success";
        header("Location: " .BASE_URL . "/admin/topics/index.php");
        exit();
    }

    if(isset($_GET["id"])) {
        $id = $_GET["id"];
        $topic = selectOneTopic($id);
        $id = $topic["id"];
        $name = $topic["name"];
        $description = $topic["description"];
    }
    

    if(isset($_POST["topic-btn-upd"])) {
        usersOnly();
         
        $errors = validateTopic($_POST);

        if(count($errors) === 0) {  
            $id = $_POST["id"];
            unset($_POST["topic-btn-upd"], $_POST["id"]);
            updateTopic($id, $_POST["name"], $_POST["description"]);
            $_SESSION["message"] = "Tópico atualizado com sucesso!";
            $_SESSION["type"] = "success";
            header("Location: " .BASE_URL . "/admin/topics/index.php");
            exit();
        } else {
            $name = $_POST["name"];
            $description = $_POST["description"];
        }
    }
