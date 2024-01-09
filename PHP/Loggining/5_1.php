<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5.1</title>
</head>
<body>
<?php

$movieData = array();

class movieC
{
    private $title; 
    private $director;
    private $mainActor;

    function getTitle()
    {
        return $this->title;
    }

    function getDirector()
    {
        return $this->director;
    }

    function getMainActor()
    {
        return $this->mainActor;
    }

    function setTitle($title)
    {
        $this->title = $title; // Fixed the typo
    }

    function setDirector($director)
    {
        $this->director = $director;
    }

    function setMainActor($mainActor)
    {
        $this->mainActor = $mainActor;
    }

    function __construct($title, $director, $mainActor)
    {
        $this->title = $title;
        $this->director = $director;
        $this->mainActor = $mainActor;
    }

    function Display()
    {
        echo "Title: $this->title<br>";
        echo "Director: $this->director<br>";
        echo "Main actor: $this->mainActor<br>"; 
    }
}

if (file_exists("../A04/fav_movies.xml"))
{
    $xml = simplexml_load_file("../A04/fav_movies.xml");
    foreach ($xml->movie as $movie)
    {
        $movieC = new movieC((string) $movie->Title, (string) $movie->Director, (string) $movie->MainActor);
        array_push($movieData, $movieC);
    }
    echo "<table><tr><th>Title</th><th>Director</th><th>Main Actor</th><tr>";
    for ($i = 0; $i < count($movieData); $i++) {
        echo "<tr>";
        echo "<td>" . $movieData[$i]->getTitle() . "</td>";
        echo "<td>" . $movieData[$i]->getDirector() . "</td>";
        echo "<td>" . $movieData[$i]->getMainActor() . "</td>";
        echo "</tr>";
    }
    
    echo "</table>";
}
else
{
    echo "File doesn't exist<br>";
}
?>

<style>
table,th,tr,td{
    border:solid;
}
</style>
</body>
</html>

