<?php 

require("../database/connect.php");


function dd($value)  //Only for testing
{
    echo '<pre>', print_r($value, true), '</pre>';
    die();
}

function selectAlll($table, $conditions = [])
{
    global $pdo;
    $sql = "SELECT * FROM $table";
    if (!empty($conditions)) {
        $i = 0;
        foreach ($conditions as $key => $value) {
            if ($i === 0) {
                $sql = $sql . " WHERE $key='$value'";
            } else {
                $sql = $sql . " AND $key='$value'";
            }
            $i++;
        }
        // dd($sql);
    }
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $records;
}

$conditions = [ 
    'username' => 'Vinícius Alarcon',
    'admin' => '0'
];
$users = selectAlll("users", $conditions);
dd($users);


function executeQuery($sql, $data = [])
{
    global $pdo;
    $stmt = $pdo->prepare($sql);

    if (empty($data)) {
        $result = $stmt->execute();
    } else {
        $result = $stmt->execute($data);
    }

    if (!$result) {
        die("Failed to query database: " . $stmt->error);
    }
    return $stmt;
}

function selectAll($table, $conditions = [], $order_by = [])
{
    global $pdo;
    $sql = "SELECT * FROM $table";
    if (!empty($conditions)) {
        $i = 0;
        foreach ($conditions as $key => $value) {
            if ($i === 0) {
                $sql = $sql . " WHERE $key=:$key";
            } else {
                $sql = $sql . " AND $key=:$key";
            }
            $i++;
        }
    }

    if (!empty($order_by)) {
        $sql .= " ORDER BY " . $order_by[0] . " $order_by[1]";
    }

    $stmt = executeQuery($sql, $conditions);
    $records = $stmt->fetchAll();
    return $records;
}