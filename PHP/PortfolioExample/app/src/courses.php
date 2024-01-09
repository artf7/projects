<?php
include("conn.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageName; ?></title>
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
</head>

<body>
<?php
$currentPage = 'Courses'; 
include './sections/header.php';
include './sections/nav_lg.php';
?>

<div class="content">
<?php
    $conn = new mysqli($db_host, $db_user, $db_password, $db_name);
    $sql = 'SELECT * FROM NSCCSchedule.Course';
    $result = $conn->query($sql);

    if (!$result) {
    die("Error in SQL query: " . $conn->error);
    } //TODO make better Query then run and display output
    if ($result = $conn->query($sql)) {
        while ($data = $result->fetch_object()) {
            $courses[] = $data;
        }
    }
    $conn->close();
    
    foreach ($courses as $c) {
        echo "<h1 class='course-title'>".$c->Title."</h1>";
        echo "<h3>".$c->CourseCode."</h3>";
        echo $c->Description."<br>";
        echo "<p class='course-teacher'>".$c->Instructor."</p>";
        echo "<br>";
    }

    ?>
</div>
</body>
<?php
include './sections/footer.php'
?>
</html>
