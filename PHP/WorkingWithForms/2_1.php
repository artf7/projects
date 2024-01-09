<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignemnt 2.1</title>
</head>
<body>
<form action="" method="GET">
    Enter your grade: <input type="" name="grade"><br>
    <input type="submit" value="submit">
</form>

<?php
//checks if grade setted
 if(isset($_GET["grade"]))
 {

    //gets grade value
    $grade = $_GET["grade"];
    
    //checks if grade not empty (otherwise output an error) 
    if($grade != "")
    {
        //checks if grade is numberic and calculate using ranges and output the letter grade (otherwise output the range that is equal to a letter)
        if(is_numeric($grade))
        {    
            if($grade >= 0 && $grade < 60)
            {
                echo "<p> Your grade: F";
            }
            else if($grade >= 60 && $grade < 75)
            {
                echo "<p> Your grade: C";
            }
            else if($grade >= 75 && $grade < 85 )
            {
                echo "<p> Your grade: B";
            }
            else if($grade >= 85 && $grade <= 100)
            {
                echo "<p> Your grade: A";
            }
            else
            {
                echo "<p style='color:red'> The number is not in any ranges </p>";
            }
        }
        else
        {
           switch($grade)
           {
            case 'F':
                echo "<p> Your grade in the range from 0 to 59";
                break;
            case 'C' :
                echo "<p> Your grade in the range from 60 to 75";
                break;
            case 'B':
                echo "<p> Your grade in the range from 75 to 85";
                break;
            case 'A':
                echo "<p> Your grade in the range from 85 to 100";
                break;
            default:
                echo "<p style='color:red'> You've entered a non-existent grade </p>";
           }
        }
    }

    
    else
    {
        echo "<p style='color:red'> You've entered nothing </p>";
    }
 }
 
?>
</body>
</html>