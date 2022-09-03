<?php
session_start();
// require("../../path.php");
require(ROOT_PATH . "/app/database/connect.php");

function dd($value)  //Only for testing
{
    echo '<pre>', print_r($value, true), '</pre>';
    die();
}

function loginUser($user)
{
    $_SESSION['id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['admin'] = $user['admin'];
    $_SESSION['message'] = 'Você logou no sistema!';
    $_SESSION['type'] = 'success';
    if($_SESSION['admin']) {
        header('location: ' . BASE_URL . '/admin/posts/index.php');
        
    } else {
        header('location: ' . BASE_URL . '/index.php');
    }
    exit();
}

function selectAllUsers()
{
    global $pdo;
    $sql = "SELECT * FROM users";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function selectOneUser($id)
{
    global $pdo;
    $sql = "SELECT * FROM users WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(1, $id, PDO::PARAM_INT);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}
function selectOneUserByEmail($email)
{
    global $pdo;
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(1, $email, PDO::PARAM_STR);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}
// $user = selectOneUserByEmail('alarcon.pqd74@gmail.com22');
// dd($user);

function verifyEmailExists($email)
{
    global $pdo;
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(1, $email, PDO::PARAM_STR);
    $stmt->execute();
    $result = $stmt->fetch();
    if($result == null) {
        $existe = false;
        return $existe;
    } else {
        $existe = true;
        return $existe;
    }
}

function createUser($admin, $username, $email, $password) 
{
    global $pdo;
    $sql = "INSERT INTO users (admin, username, email, password) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(1, $admin, PDO::PARAM_INT);
    $stmt->bindValue(2, $username, PDO::PARAM_STR);
    $stmt->bindValue(3, $email, PDO::PARAM_STR);
    $stmt->bindValue(4, $password, PDO::PARAM_STR);
    $stmt->execute();
    $id = $pdo->lastInsertId();
    return $id;
}

function updateUser($id, $admin, $username, $email, $password) 
{
    global $pdo;
    $sql = "UPDATE users SET admin=?, username=?, email=?, password=? WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(1, $admin, PDO::PARAM_INT);
    $stmt->bindValue(2, $username, PDO::PARAM_STR);
    $stmt->bindValue(3, $email, PDO::PARAM_STR);
    $stmt->bindValue(4, $password, PDO::PARAM_STR);
    $stmt->bindValue(5, $id, PDO::PARAM_INT);
    $stmt->execute();
    $stmt->rowCount();
    return $stmt;
}

function deleteUser($id) 
{
    global $pdo;
    $sql = "DELETE FROM users WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(1, $id, PDO::PARAM_INT);
    $stmt->execute();
    return $id;
}
