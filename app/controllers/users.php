<?php 
    require(ROOT_PATH . "/app/models/User.php");
    require(ROOT_PATH . "/app/helpers/validateUser.php");

    $users = selectAllUsers();
    $id = '';
    $email = '';
    $username = '';
    $admin = '';
    $password = '';
    $passconfirmation = '';
    $errors = array();

    if(isset($_POST['register-btn']) || isset($_POST['user-btn'])) {

        $errors = validateUser($_POST);
        
        if(count($errors) === 0) {
            unset($_POST['register-btn'], $_POST['passconfirmation'],$_POST['user-btn']);
            $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

            if(isset($_POST['admin'])) { //Atualizar depois para conseguir adicionar Usuário sem sair do Dashboard
                $_POST['admin'] = 1;
                createUser($_POST['admin'], $_POST['username'], $_POST['email'], $_POST['password']);
                $_SESSION["message"] = "Usuário criado com sucesso!";
                $_SESSION["type"] = "success";
                header("Location: " .BASE_URL . "/admin/users/index.php");
                exit();
            } else {
                $_POST['admin'] = 0;
                $user_id = createUser($_POST['admin'], $_POST['username'], $_POST['email'], $_POST['password']);
                $user = selectOneUser($user_id);
                loginUser($user);
            }
        } else {
            $email = $_POST['email'];
            $username = $_POST['username'];
            $admin = isset($_POST['admin']) ? 1 : 0;
            $password = '';
            $passconfirmation = '';
        }
    }

    if(isset($_POST['login-btn'])) {

        $errors = validateLogin($_POST);

        if(count($errors) === 0) {
            unset($_POST['login-btn']);
            
            $user = selectOneUserByEmail($_POST['email']);

            if($user && password_verify($_POST['password'], $user['password'])) {
                loginUser($user);
            } else {
                array_push($errors, 'E-mail ou senha incorretos!');
            }
        } else {
            $email = $_POST['email'];
        }
    }

    if(isset($_POST["user-btn-upd"])) {
        
        $errors = validateUser($_POST);
        
        if(count($errors) === 0) {
            $id = $_POST['id'];
            unset($_POST['passconfirmation'], $_POST['user-btn-upd'], $_POST['id']);
            $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

            $_POST['admin'] = isset($_POST["admin"]) ? 1 : 0;
            updateUser($id, $_POST['admin'], $_POST['username'], $_POST['email'], $_POST['password']);
            $_SESSION["message"] = "Usuário atualizado com sucesso!";
            $_SESSION["type"] = "success";
            header("Location: " .BASE_URL . "/admin/users/index.php");
            exit();
        } else {
            $email = $_POST['email'];
            $username = $_POST['username'];
            $admin = isset($_POST['admin']) ? 1 : 0;
            $password = '';
            $passconfirmation = '';
        }
    }

    if(isset($_GET["id"])) {
        $id = $_GET["id"];

        $user = selectOneUser($id);

        $id = $user["id"];
        $username = $user["username"];
        $email = $user["email"];
        $password = $user["password"];
        $admin = $user["admin"];
    }

    if(isset($_GET["del_id"])) {
        $id = $_GET["del_id"];
        $topic = deleteUser($id);
        $_SESSION["message"] = "Usuário deletado com sucesso!";
        $_SESSION["type"] = "success";
        header("Location: " .BASE_URL . "/admin/users/index.php");
        exit();
    }

?>