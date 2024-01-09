<?php

session_start();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $db_host = "db";
    $db_user = "root";
    $db_password = "super_secret123?";
    $db_name = "unit_7";
    
    $conn = new mysqli($db_host, $db_user, $db_password, $db_name);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
   
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT user_id FROM users WHERE username =? AND password =?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows() == 1) {
        $stmt->bind_result($user_id);
        $stmt->fetch();
    
        $session_id = session_id();
    
        $current_timestamp = time();
    
        $_SESSION['user_id'] = $user_id;
        $_SESSION['session_id'] = $session_id;
    
        $insert_query = "INSERT INTO login_sessions (user_id, session_id, last_access_time) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($insert_query);
    
        $stmt->bind_param("ssd", $user_id, $session_id, $current_timestamp);
    
        $stmt->execute();
        header("Location: admin.php");
    } else {
        header("Location: login.php");
    }

    $stmt->close();
    $conn->close();
} else {
    header("Location: login.php");
}
