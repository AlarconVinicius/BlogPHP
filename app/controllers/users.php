<?php 
    require(ROOT_PATH . "/app/models/User.php");
    require(ROOT_PATH . "/app/helpers/validateUser.php");

    $email = '';
    $name = '';
    $password = '';
    $passconfirmation = '';
    $errors = array();

  if(isset($_POST['register-btn'])) {

    $errors = validateUser($_POST);



    if(count($errors) === 0) {
        unset($_POST['register-btn'], $_POST['passconfirmation']);
        $_POST['admin'] = 0;
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
    
        $user_id = createUser($_POST['admin'], $_POST['name'], $_POST['email'], $_POST['password']);
        $user = selectOneUser($user_id);

        loginUser($user);
    } else {
        $email = $_POST['email'];
        $name = $_POST['name'];
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

?>