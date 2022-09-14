<?php 

function usersOnly($redirect = '/index.php') {
    if(empty($_SESSION['id'])) {
        $_SESSION['message'] = "Você precisa fazer login primeiro.";
        $_SESSION['type'] = "error";
        header("Location: " . BASE_URL . $redirect);
        exit(0); 
    }
}

function adminsOnly($redirect = '/index.php') {
    
    if(empty($_SESSION['id']) || empty($_SESSION['admin'])) {
        $_SESSION['message'] = "Você não é autorizado.";
        $_SESSION['type'] = "error";
        header("Location: " . BASE_URL . $redirect);
        exit(0); 
    } 
}

function guestsOnly($redirect = '/index.php') {
    if(isset($_SESSION['id'])) {
        header("Location: " . BASE_URL . $redirect);
        exit(0); 
    }
}