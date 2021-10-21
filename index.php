<?php


// DEFINIRE UNA CLASSE
    class Movie {
// DEFINIRE DELLE VARIABILI
        public $title;
        public $subTitle;
        public $year;
        public $genre;
    
// DEFINIRE IL COSTRUTTORE
        function __construct($_title, $_subTitle, $_year) {
            $this->title = $_title;
            $this->subTitle = $_subTitle;
            $this->year = $_year;
        }

// DEFINIRE I METODI
        function addGenre($_genre) {
            return $this->genre = $_genre;
        }
    }

// 4) Vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
    $harryPotter = new Movie('Harry Potter', 'Il calice di fuoco', 2005);
    echo 'Title :' . ' ' . $harryPotter->title . '<br/>' ;
    echo 'SubTitle :' . ' ' . $harryPotter->subTitle . '<br/>' ;
    echo 'Anno :' . ' ' . $harryPotter->year . '<br/>' ;
    echo 'Genre :' . ' ' . $harryPotter->addGenre('Narrativa fantasy') . '<br/>';
    echo '<br/>';


    $rocky = new Movie('Rocky1', 'x', 2001);
    echo 'Title :' . ' ' . $rocky->title . '<br/>' ;
    echo 'SubTitle :' . ' ' . $rocky->subTitle . '<br/>' ;
    echo 'Anno :' . ' ' . $rocky->year . '<br/>' ;
    echo 'Genre :' . ' ' . $harryPotter->addGenre('Narrativa fantasy') . '<br/>';
    echo '<br/>';

    $ilSignoreDegliAnelli = new Movie('Signore Degli Anelli', 'x', 1990);
    echo 'Title :' . ' ' . $ilSignoreDegliAnelli->title . '<br/>' ;
    echo 'SubTitle :' . ' ' . $ilSignoreDegliAnelli->subTitle . '<br/>' ;
    echo 'Anno :' . ' ' . $ilSignoreDegliAnelli->year . '<br/>' ;
    echo 'Genre :' . ' ' . $harryPotter->addGenre('Narrativa fantasy') . '<br/>';
 
?>


