<?php
//These are the defined authentication environment in the db service
include ("conn.php");

// database name
$mydatabase = 'courses';
// check the mysql connection status

$conn = new mysqli($db_host, $db_user, $db_password, $mydatabase);

// select query
$sql = 'SELECT * FROM users';

if ($result = $conn->query($sql)) {
    while ($data = $result->fetch_object()) {
        $users[] = $data;
    }
}

foreach ($users as $user) {
    echo "<br>";
    echo $user->username . " " . $user->password;
    echo "<br>";
}
?>