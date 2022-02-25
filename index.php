<?php

class Movie {
    public $title;
    public $pubblicationDate;
    public $duration;
    public $genre;
    public $publisher;

    function __construct(array $_movieData)
    {
        $requiredKeys = ["title", "pubblicationDate", "duration", "genre", "publisher"];
    
        foreach ($requiredKeys as $key) {
            if (!key_exists($key, $_movieData)){
                var_dump("Inserire dato mancante! $key");
            }
        }

        $this->title = $_movieData["title"];
        $this->pubblicationDate = $_movieData["pubblicationDate"];
        $this->duration = $_movieData["duration"];
        $this->genre = $_movieData["genre"];
        $this->publisher = $_movieData["publisher"];
    }

    public function getTitle(){
        return $this -> title;
    }

    public function getPubl(){
        return $this -> pubblicationDate;
    }

    public function getDur(){
        return $this -> duration;
    }

    public function getGenre(){
        return $this -> genre;
    }

    public function getPublisher(){
        return $this -> publisher;
    }
}

$spiderman = new Movie([
    "title" => "Spider-man: No Way Home",
    "pubblicationDate" => "2022",
    "duration" => "2.35",
    "genre" => "Action",
    "publisher" => "Marvel",
]);

$uncharted = new Movie([
    "title" => "Uncharted",
    "pubblicationDate" => "2022",
    "duration" => "2.15",
    "genre" => "Adventure",
    "publisher" => "Sony",
]);

$lotr = new Movie([
    "title" => "Il signore degli anelli: La compagnia degli anelli",
    "pubblicationDate" => "2001",
    "duration" => "2.58",
    "genre" => "Fantasy",
    "publisher" => "New Line Cinema",
]);

$movieArray=[$spiderman, $uncharted, $lotr]


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <div class="row">
        <?php foreach ($movieArray as $key) {
            echo "
            <div class=\"card\">
                <h3>Titolo: <span>" . $key -> getTitle() . "</span></h2>
                <h3>Anno di pubblicazione: <span>" . $key -> getPubl() . "</span></h2>
                <h3>Durata: <span>" . $key -> getDur() . "</span></h2>
                <h3>Generi: <span>" . $key -> getGenre() . "</span></h2>
                <h3>Editore: <span>" . $key -> getPublisher() . "</span></h2>
            </div>
            ";
        }
        ?>
    </div>
</div>
</div>
</body>
</html>