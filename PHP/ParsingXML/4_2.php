<?php
$db_host = "db";
$db_user = "root";
$db_password = "super_secret123?";
$db_name = "assignment3";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4.2</title>
</head>
<body>
    <?php
    $user_array= array();
    $conn = new mysqli($db_host, $db_user, $db_password, $db_name);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = 'SELECT user_id, FirstName, LastName FROM registered_users';
    $result = $conn->query($sql);

    if (!$result) {
        die("Error in SQL query: " . $conn->error);
    }

    while ($row = $result->fetch_assoc()) {
        $user_array = array(
            'user_id' => $row['user_id'],
            'FirstName' => $row['FirstName'],
            'LastName' => $row['LastName']
        );
        $all_users[] = $user_array;
    }

    $conn->close();

    foreach ($all_users as $user) {
        echo "<p>User ID: " . $user['user_id'] . "</p>";
        echo "<p>First Name: " . $user['FirstName'] . "</p>";
        echo "<p>Last Name: " . $user['LastName'] . "</p>";
        echo "<br>";
    }
    ?>
</body>
</html>
