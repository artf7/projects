<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <!-- JavaScript Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.6.4.slim.min.js" integrity="sha256-a2yjHM4jnF9f54xUQakjZGaqYs/V1CYvWpoqZzC2/Bw=" crossorigin="anonymous" async></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous" defer></script>
    <style>
        <?php include "style.css" ?>
    </style>
    <title> Logged </title>
</head>
<body>
<?php
$currentPage = 'Login';
 include './sections/header.php'
?>
<?php


if (isset($_SESSION['user_id']) && isset($_SESSION['session_id'])) {
    $user_id = $_SESSION['user_id'];
    $session_id = $_SESSION['session_id'];
    
    $db_host = "db";
    $db_user = "root";
    $db_password = "super_secret123?";
    $db_name = "unit_7";
    
    $conn = new mysqli($db_host, $db_user, $db_password, $db_name);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $query = "SELECT last_access_time FROM login_sessions WHERE user_id = ? AND session_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("is", $user_id, $session_id);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows() != 0) {
        $update_query = "UPDATE login_sessions SET last_access_time = NOW() WHERE user_id = ? AND session_id = ?";
        $update_stmt = $conn->prepare($update_query);
        $update_stmt->bind_param("is", $user_id, $session_id);
        $update_stmt->execute();
        $update_stmt->close();
        include './sections/nav_lg.php';
        echo "<div class='content'><h2><a href='courses.php'>Courses</a></h2>";
        echo "<h2><a href='schedule.php'>Schedule</a></h2> ";
        echo "<h2><a href='about.php'>About me</a></h2>";
        echo "</div>";
        ?>
        

        
        <?php
    } else {

        header("Location: login.php");
    }

    $stmt->close();
    $conn->close();
} 
?>
