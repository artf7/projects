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
    <title> Home </title>
</head>
<body>
<?php
    $currentPage = 'Home'; 
    include './sections/header.php';
    include './sections/nav.php'?>
    <div class='content'>
    <div class="h-content">
      
    <section>
        <article class="personal-info">
        <p>Hello</p>
        <p>My name is Artem Fedorov, and I am currently a second-year IT programming student at NSCC. I am on track to graduate in the spring of 2024. My primary focus in programming includes C++ and Java. I am planning to incorporate C# into my skill set soon. </p> 
            
        </article>
    </section>
    <img src="./files/a-placeholder.png"/>
</div>
</div>
    <?php include './sections/footer.php'?>

</body>
</html>