<?php

$xml = simplexml_load_file('fav_movies.xml');

echo '<html><head></head><body>';
echo '<table>';

$i = 1;

// Loop through the XML data
foreach ($xml->movie as $movie) {
    if ($i % 2 === 1) {
        echo '<tr>'; 
    }

    echo '<td>';
    echo '<h1>' . $movie->Title . ' (' . $movie->Year . ')</h1>';
    echo '<img src="' . $movie->Picture . '" alt="' . $movie->Title . '" style="max-width: 150px;">';
    echo '<p>Director: ' . $movie->Director . '</p>';
    echo '<p>Main Actor/Actress: ' . $movie->MainActor . '</p>';
    echo '<p>Genre: ' . $movie->Genre . '</p>';
    echo '</td>';

    if ($i % 2 === 0) {
        echo '</tr>'; 
    }

    $i++;
}

echo '</table>';
echo '</body></html>';
?>
