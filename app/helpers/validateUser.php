<?php 

function validateUser($user) {
    $errors = array();
    if(empty($user['email']) || empty($user['name']) || empty($user['password'])) {
        array_push($errors, 'Preencha todos os campos por favor!');
    }
    if($user['password'] != $user['passconfirmation']) {
        array_push($errors, 'As senhas precisam ser iguais!');
    }
    
    $emailExists = verifyEmailExists($user['email']);

    if($emailExists === true) {
        array_push($errors, 'Esse email já existe! Tente outro, por favor!');
    }

    return $errors;
}

function validateLogin($user) {
    $errors = array();
    if(empty($user['email'])) {
        array_push($errors, 'O campo E-mail é necessário!');
    }
    if(empty($user['password'])) {
        array_push($errors, 'O campo senha é necessário!');
    }

    return $errors;
}