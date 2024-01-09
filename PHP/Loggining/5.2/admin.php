<?php
session_start();

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

        echo "Welcome, User ID: " . $user_id;
    } else {

        header("Location: login.php");
    }

    $stmt->close();
    $conn->close();
} 
?>
