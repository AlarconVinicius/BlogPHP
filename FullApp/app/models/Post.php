<?php
@session_start();
//require("../../path.php");
require(ROOT_PATH . "/app/database/connect.php");

function dd($value)  //Only for testing
{
    echo '<pre>', print_r($value, true), '</pre>';
    die();
}

function selectAllPosts()
{
    global $pdo;
    $sql = "SELECT p.*, u.username FROM posts AS p JOIN users AS u ON p.user_id = u.id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function selectAllPostsPublished()
{
    global $pdo;
    $sql = "SELECT p.*, u.username FROM posts AS p JOIN users AS u ON p.user_id = u.id  WHERE p.published = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(1, 1, PDO::PARAM_INT);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function selectAllPostsTopic($id)
{
    global $pdo;
    $sql = "SELECT p.*, u.username FROM posts AS p JOIN users AS u ON p.user_id = u.id  WHERE p.published = ? AND topic_id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(1, 1, PDO::PARAM_INT);
    $stmt->bindValue(2, $id, PDO::PARAM_INT);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function selectOnePost($id)
{
    global $pdo;
    $sql = "SELECT * FROM posts WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(1, $id, PDO::PARAM_INT);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function selectOnePostAuthor($id)
{
    global $pdo;
    $sql = "SELECT p.*, u.username FROM posts AS p JOIN users AS u ON p.user_id = u.id  WHERE p.published = ? AND p.id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(1, 1, PDO::PARAM_INT);
    $stmt->bindValue(2, $id, PDO::PARAM_INT);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function searchPosts($term)
{
    global $pdo;
    //$published = 1;
    $sql = "SELECT p.*, u.username FROM posts AS p JOIN users AS u ON p.user_id = u.id  WHERE p.published = 1 AND p.title LIKE '%?%'";
    // $sql = "SELECT p.*, u.username FROM posts AS p JOIN users AS u ON p.user_id = u.id  WHERE p.published = ? AND p.title LIKE '%?%' OR p.body LIKE '%?%'";
    $stmt = $pdo->prepare($sql);
    // $stmt->bindValue(1, $published, PDO::PARAM_INT);
    $stmt->bindValue(1, $term, PDO::PARAM_STR);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function verifyPostExists($title)
{
    global $pdo;
    $sql = "SELECT * FROM posts WHERE title = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(1, $title, PDO::PARAM_STR);
    $stmt->execute();
    $result = $stmt->fetch();
    return $result;
    // if($result == null) {
    //     $existe = false;
    //     return $existe;
    // } else {
    //     $existe = true;
    //     return $existe;
    // }
}

function createPost($user_id, $topic_id, $title, $body, $image, $published) 
{
    global $pdo;
    $sql = "INSERT INTO posts (user_id, topic_id, title, body, image, published) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(1, $user_id, PDO::PARAM_INT);
    $stmt->bindValue(2, $topic_id, PDO::PARAM_INT);
    $stmt->bindValue(3, $title, PDO::PARAM_STR);
    $stmt->bindValue(4, $body, PDO::PARAM_STR);
    $stmt->bindValue(5, $image, PDO::PARAM_STR);
    $stmt->bindValue(6, $published, PDO::PARAM_STR);
    $stmt->execute();
    $id = $pdo->lastInsertId();
    return $id;
}

function updatePost($id, $topic_id, $title, $body, $image, $published) 
{
    global $pdo;
    $sql = "UPDATE posts SET topic_id=?, title=?, body=?, image=?, published=? WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(1, $topic_id, PDO::PARAM_INT);
    $stmt->bindValue(2, $title, PDO::PARAM_STR);
    $stmt->bindValue(3, $body, PDO::PARAM_STR);
    $stmt->bindValue(4, $image, PDO::PARAM_STR);
    $stmt->bindValue(5, $published, PDO::PARAM_INT);
    $stmt->bindValue(6, $id, PDO::PARAM_INT);
    $stmt->execute();
    $stmt->rowCount();
    return $stmt;
}

function deletePost($id) 
{
    global $pdo;
    $sql = "DELETE FROM posts WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(1, $id, PDO::PARAM_INT);
    $stmt->execute();
    return $id;
}