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
    <title>Contact Me</title>
</head>
<body>
<?php
$currentPage = 'Contact Me';
 include './sections/header.php'
?>
<?php include './sections/nav.php'?>
<div class="content">
<h2>Contact info</h2>
<h3><a href="https://www.linkedin.com/in/artem--fedorov/">LinkedIn</a></h3>
<h3><a href="https://github.com/artf7">GitHub</a></h3>
<br>
<h2>Email Me</h2>
<form method="POST" action="form.php" id="contact-form">
<p><label>First Name:</label><br> <input name="name" type="text" /></p>
<p><label>Email Address:</label><br> <input style="cursor: pointer;" name="email" type="text" /></p>
<p><label>Message:</label><br> <textarea name="message"></textarea> </p>

<p><input type="submit" value="Send" /></p>
</form>
</div>
<?php include './sections/footer.php'?>
</body>
</html>