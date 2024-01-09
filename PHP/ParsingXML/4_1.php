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
    <title>4.1</title>
</head>
<body>
    <?php
    $last_name_array = array();
    $conn = new mysqli($db_host, $db_user, $db_password, $db_name);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = 'SELECT LastName FROM registered_users';
    $result = $conn->query($sql);

    if (!$result) {
        die("Error in SQL query: " . $conn->error);
    }

    while ($row = $result->fetch_assoc()) {
        $last_name_array[] =  $row['LastName'];
    }

    $conn->close();

    sort($last_name_array);

    foreach ($last_name_array as $lna) {
        echo "<p>" . $lna . "</p>";
    }
    ?>
</body>
</html>
