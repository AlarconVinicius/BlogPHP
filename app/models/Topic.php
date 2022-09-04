<?php
@session_start();
//require("../../path.php");
require(ROOT_PATH . "/app/database/connect.php");

// function dd($value)  //Only for testing
// {
//     echo '<pre>', print_r($value, true), '</pre>';
//     die();
// }

function selectAllTopics()
{
    global $pdo;
    $sql = "SELECT * FROM topics";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}

function selectOneTopic($id)
{
    global $pdo;
    $sql = "SELECT * FROM topics WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(1, $id, PDO::PARAM_INT);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function verifyTopicExists($name)
{
    global $pdo;
    $sql = "SELECT * FROM topics WHERE name = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(1, $name, PDO::PARAM_STR);
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

function createTopic($name, $description) 
{
    global $pdo;
    $sql = "INSERT INTO topics (name, description) VALUES (?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(1, $name, PDO::PARAM_STR);
    $stmt->bindValue(2, $description, PDO::PARAM_STR);
    $stmt->execute();
    $id = $pdo->lastInsertId();
    return $id;
}

function updateTopic($id, $name, $description) 
{
    global $pdo;
    $sql = "UPDATE topics SET name=?, description=? WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(1, $name, PDO::PARAM_STR);
    $stmt->bindValue(2, $description, PDO::PARAM_STR);
    $stmt->bindValue(3, $id, PDO::PARAM_INT);
    $stmt->execute();
    $stmt->rowCount();
    return $stmt;
}

function deleteTopic($id) 
{
    global $pdo;
    $sql = "DELETE FROM topics WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(1, $id, PDO::PARAM_INT);
    $stmt->execute();
    return $id;
}