<?php
include("conn.php");
// TODO
// - Determine parameters for get in URL or could use POST?
// - Validate the data server side
// - Run the add query
// - Display the results or return back to addPrograms.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $conn = new mysqli($db_host, $db_user, $db_password, $db_name);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // set parameters and execute
        $code = $_POST["programCode"];
        $program = $_POST["programTitle"];
        $programId = $_POST["programId"];

        // prepare and bind
        $stmt = $conn->prepare("UPDATE Program SET Code = ?, Title=? WHERE ProgramId=?");
        $stmt->bind_param("ssi", $code, $program,$programId);

        $stmt->execute();
        $conn->close();
        echo "<p><a href='./addPrograms.php'>Back to Add Programs</a></p>";
    } else {
        echo "No record ID provided for update.";
        echo "<p><a href='./addPrograms.php'>Back to Add Programs</a></p>";
    }
