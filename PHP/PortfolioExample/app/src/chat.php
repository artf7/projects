<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <style>
        <?php include "style.css" ?>
    </style>
    <title>Chat</title>
</head>
<body>
<?php
$currentPage = 'Projects'; 
include './sections/header.php';
include './sections/nav.php';
?>

<div class="content">
    <div id="page-wrap">
        <h2>jQuery/PHP Chat</h2>
        <p id="name-area"></p>
        <div id="chat-wrap"><div id="chat-area"></div></div>
        <form id="send-message-area">
            <p>Your message: </p>
            <textarea id="sendie" maxlength='100'></textarea>
        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.slim.min.js" integrity="sha256-a2yjHM4jnF9f54xUQakjZGaqYs/V1CYvWpoqZzC2/Bw=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="chat.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // ask user for name with popup prompt    
        var name = prompt("Enter your chat name:", "Guest");

        // default name is 'Guest'
        if (!name || name === ' ') {
            name = "Guest";
        }

        // strip tags
        name = name.replace(/(<([^>]+)>)/ig, "");

        // display name on page
        $("#name-area").html("You are: <span>" + name + "</span>");

        // kick off chat
        var chat = new Chat();
        chat.getState();

        // watch textarea for key presses
        $("#sendie").keydown(function(event) {
            var key = event.which;

            //all keys including return.  
            if (key >= 33) {
                var maxLength = $(this).attr("maxlength");
                var length = this.value.length;

                // don't allow new content if length is maxed out
                if (length >= maxLength) {
                    event.preventDefault();
                }
            }
        });

        // watch textarea for release of key press
        $('#sendie').keyup(function(e) {
            if (e.keyCode == 13) {
                var text = $(this).val();
                var maxLength = $(this).attr("maxlength");
                var length = text.length;

                // send 
                if (length <= maxLength + 1) {
                    chat.send(text, name);
                    $(this).val("");
                } else {
                    $(this).val(text.substring(0, maxLength));
                }
            }
        });

        // Periodically check for new messages
        setInterval(function() {
            chat.update();
        }, 1000);
    });
</script>

<?php include './sections/footer.php'?>
</body>
</html>
