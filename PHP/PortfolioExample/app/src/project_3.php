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
    <title>Random</title>
</head>
<body>
<body>
<?php
    $currentPage = 'Projects';
    
    include './sections/header.php';
    include './sections/nav.php';
    ?>
  
    <div class="content">
    <h1>Random name selection</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div>
            <label for="tarStrings">Enter comma separated values here:</label><br>
            <textarea name="tarStrings" id="tarStrings" name="stringsTextarea" cols="30" rows="10">Scooby-Doo,
Shaggy Rogers,
Fred Jones,
Daphne Blake,
Velma Dinkley,
Scrappy-Doo</textarea>
        </div>
        <input type="submit" value="Go">
    </form>
</div>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $listStrings = trim($_POST["tarStrings"]);
        
        $arrStrings = explode(",",$listStrings);
        shuffle($arrStrings);
         
        echo "<h1>The Winner is...<span id='winner'>".$arrStrings[0]."</span>!</h1>";
        echo "<ol>";
        foreach ($arrStrings as $str ){
            echo "<li>".$str."</li>";
        }
        echo "</ol>";
    }
    ?>

    <?php include './sections/footer.php'?>
    
</body>
    </html>