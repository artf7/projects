<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4.3</title>
</head>
<body>
    <?php
    $movies = array(
        array(
            'Title' => 'Scarface',
            'Picture' => 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSwAImHuuD8C99t7JrHqiHQ36eyfmfPhCrNovS7dxWv0rJg9zHv',
            'Director' => 'Brian De Palma',
            'MainActor' => 'Al Pacino',
            'IMDB' => 'https://www.imdb.com/title/tt0086250/?ref_=nv_sr_srsg_0_tt_6_nm_2_q_scarface',
            'Year' => '1983',
            'Genre' => 'Drama/Crime'
        ),
        array(
            'Title' => 'The Godfather',
            'Picture' => 'https://www.movienewsletters.net/photos/004397R1.jpg',
            'Director' => 'Francis Ford Coppola',
            'MainActor' => 'Robert De Niro',
            'IMDB' => 'https://www.imdb.com/title/tt0068646/?ref_=nv_sr_srsg_0_tt_8_nm_0_q_the%2520go',
            'Year' => '1972',
            'Genre' => 'Crime/Drama'
        ),
        
        array(
            'Title' => 'Back to the Future',
            'Picture' => 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcT9d_lBBx0xxB7_d4RP82MlRcK82lzT2W1ZavxhV39SSTZOofDX',
            'Director' => 'Robert Zemeckis',
            'MainActor' => 'Michael J. Fox',
            'IMDB' => 'https://www.imdb.com/title/tt0088763/',
            'Year' => '1985',
            'Genre' => 'Sci-fi/Comedy '
        ),
        
        array(
            'Title' => 'Top Gun',
            'Picture' => 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSVCaXEcuVO3eMn2X0c0_TGdISkfQMfyy1lRkTZ88sfIIj-g-5d',
            'Director' => 'Tony Scott',
            'MainActor' => 'Tom Cruise',
            'IMDB' => 'https://www.imdb.com/title/tt0092099/',
            'Year' => '1986',
            'Genre' => 'Drama/Action'
        ),
        
        array(
            'Title' => 'Rocky',
            'Picture' => 'https://upload.wikimedia.org/wikipedia/en/1/18/Rocky_poster.jpg',
            'Director' => 'John G. Avildsen',
            'MainActor' => 'Sylvester Stallone',
            'IMDB' => 'https://www.imdb.com/title/tt0075148/',
            'Year' => '1976',
            'Genre' => 'Drama/Sport'
        ),
        
        array(
            'Title' => 'Das Boot',
            'Picture' => 'https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQft88_IC6CGkxP4ZTPHR8rdYlRNF7k_XUzb3wB8oqxFBuvGMPp',
            'Director' => 'Wolfgang Petersen',
            'MainActor' => 'Jürgen Prochnow',
            'IMDB' => 'https://www.imdb.com/title/tt0082096/',
            'Year' => '1981',
            'Genre' =>'Drama/War'
        ),
        
        array(
            'Title' => 'Fast & Furious',
            'Picture' => 'https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcT18dHcbyb6cKFIjPsy6g8vgd-E6XfBcJr5NIBYAcmaP9T1wlfn',
            'Director' => 'Rob Cohen',
            'MainActor' => 'Vin Diesel',
            'IMDB' => 'https://www.imdb.com/title/tt0232500/',
            'Year' => '2001',
            'Genre' => 'Action/Crime/Thriller'
        ),
        
        array(
            'Title' => 'The Truman Show',
            'Picture' => 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTaPe2hUlc02X9r5pxnsC0-o5Vqp_m6kYtphrOW22gjXnLkQfuY',
            'Director' => 'Peter Weir',
            'MainActor' => 'Jim Carrey',
            'IMDB' => 'https://www.imdb.com/title/tt0120382/',
            'Year' => '1998',
            'Genre' => 'Comedy/Drama'
        ),
        
        array(
            'Title' => 'Pulp Fiction',
            'Picture' => 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRz_2nKTNlxhVtzbh29kgL3m2ebLv3TlYyzrbyqBtEUxt6mBuZ-',
            'Director' => 'Quentin Tarantino',
            'MainActor' => 'John Travolta',
            'IMDB' => 'https://www.imdb.com/title/tt0110912/',
            'Year' => '1994',
            'Genre' => 'Crime/Drama'
        ),

        array(
            'Title' => 'Terminator 2: Judgment Day',
            'Picture' => 'https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcS5J6Ay6y1UT7WAI4U7Zm2KDYITrvfOI3vmaCNdGhx_0jmWiI1d',
            'Director' => 'James Cameron',
            'MainActor' => 'Arnold Schwarzenegger',
            'IMDB' => 'https://www.imdb.com/title/tt0103064/',
            'Year' => '1991',
            'Genre' => 'Action/Sci-Fi'
        ),
        
        
    );
    

    $xml = new SimpleXMLElement('<movies></movies>');
    
    foreach ($movies as $movie) {
        $movieNode = $xml->addChild('movie');
        foreach ($movie as $key => $value) {
            $movieNode->addChild($key, htmlspecialchars($value));
        }
    }
    

    $xml->asXML('fav_movies.xml');
    
    echo 'XML file saved as fav_movies.xml';
    ?>
     
    
    ?>
</body>
</html>