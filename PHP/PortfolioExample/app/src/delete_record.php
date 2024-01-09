<?php
include("conn.php");

if(isset($_GET['id']))
{
    $id = $_GET['id'];

    $conn = new mysqli($db_host, $db_user, $db_password, $db_name);

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    if($conn -> connect_error){
        die("Connection failde: " . $conn->connect_error);
    }

    $stmt = $conn-> prepare("DELETE FROM Program WHERE ProgramID=?");
    $stmt->bind_param("i",$id);

    $result = $stmt->execute();
    if($result)
    {
        echo "<h1> Success </h1>";
    }
    else
    {
        echo $result;
    }

    $conn->close();

    echo "Record with ID $id has been deleted.";
    echo "<p><a href='./addProgram.php><Back to Add Programs</a></p>";
}
else
{
    echo "No record ID specified for deletion";
    
}

?>