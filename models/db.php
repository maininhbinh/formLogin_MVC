<?php
function getConnect()
{
    try {
        $connect = new PDO("mysql:host=" . HOST_NAME . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET, DB_USER, DB_PASSWORD);
        // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    return $connect;
}

function getAll($query, $getAll = false)
{
    $conn = getConnect();
    $stmt = $conn->prepare($query);
    $stmt->execute();

    if ($getAll = true) {
        return $stmt->fetchAll();
    }

    return $stmt->fetch();
}

function excute($query)
{
    $conn = getConnect();
    $stmt = $conn->prepare($query);
    $stmt->execute();
}
