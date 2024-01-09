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
    <title>Projects</title>
</head>
<body>
<?php
$currentPage = 'Projects'; 
include './sections/header.php'
?>
<br> 

<?php include './sections/nav.php'?>
<div class="content">
<div class="project"> 
    <h2 class = "project-label"> Tic-Tac-Toe </h2>
    <ahref="https://github.com/artf7/tictactoe"><img src="https://gh-card.dev/repos/artf7/tictactoe.svg"></a><br>
    
    
    <button type="button" class="btn btn-outline-secondary">Show Code</button>
<script>
   var button = document.getElementsByClassName('btn-outline-secondary')[0];

button.onclick = function () {
    var div = document.querySelector(".graphic-content");
    if (div.style.display !== 'none') {
        div.style.display = 'none';
        button.innerHTML = "Show Code";
       
    } else {
        div.style.display = 'block';
        button.innerHTML = "Hide Code";
    }
};
</script>


    </script>
    <div class="description">
    <h3>Description</h3>
    <p>
        The TicTacToe project serves as a representation of the classic game implemented in the C language.<br>
        This project holds a special place as one of my earliest independent endeavors.<br>
        <i>It showcases the input/output features of the C language and demonstrates the use of multiple functions to create a fully functional game.</i>
    </p>
</div>

    
    <div class="notes">
    <h3>Reflection</h3>
    <p>
        TicTacToe was one of my first significant projects using the C language. As a result, I encountered various mistakes and inefficiencies in my code, including:

        <ul>
            <li>Using global variables</li>
            <li>Implementing complex functions (possible solution: break down functions into smaller, more manageable units)</li>
            <li>Lack of comments for code documentation</li>
            <li>Utilizing header files to maintain cleanliness in the main file</li>
        </ul>
    </p>
</div>


    <div class="graphic-content" style="display:none;">
    <h2>Code</h2>
    <script src="https://emgithub.com/embed-v2.js?target=https%3A%2F%2Fgithub.com%2Fartf7%2Ftictactoe%2Fblob%2Fmain%2Ftictactoe%2Fmain.c&style=atom-one-dark&type=code&showBorder=on&showLineNumbers=on&showFileMeta=on&showFullPath=on&showCopy=on&fetchFromJsDelivr=on"></script>
    </div> 


</div>
        </div>
<?php include './sections/footer.php'?>
</body>
</html>