<?php
/*PROGRAMMAZIONE AD OGGETTI*/

// DEFINIRE UNA CLASSE
    class Movie {
// DEFINIRE DELLE VARIABILI
        public $title;
        public $duration;
        public $year;
    
// DEFINIRE IL COSTRUTTORE
        function __construct($_title, $_duration, $_year) {
            $this->title = $_title;
            $this->duration = $_duration;
            $this->year = $_year;
        }

// DEFINIRE I METODI
        function getTitle() {
            return $this->title;
        }
        function setTitle() {
            $this->title = $_title;
        }
        function getDuration(){
            return $this->duration;
        }
        function setDuration() {
            $this->duration = $_duration;
        }
        function getYear() {
            return $this->year;
        }
        function setYear() {
            $this->year = $_year;
        }
    }

// 4) Vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
    $harryPotter = new Movie('Harry Potter', 130, 2005);
    echo 'Title :' . ' ' . $harryPotter->getTitle() . '<br/>' ;
    echo 'Duration: ' . ' ' . $harryPotter->getDuration() . '<br/>';
    echo 'Anno :' . ' ' . $harryPotter->getYear() . '<br/>' ;

    echo '<br/>';

    $rocky = new Movie('Rocky', 300, 2001);
    echo 'Title :' . ' ' . $rocky->getTitle() . '<br/>' ;
    echo 'Duration: ' . ' ' . $rocky->getDuration() . '<br/>';
    echo 'Anno :' . ' ' . $rocky->getYear() . '<br/>' ;

    echo '<br/>';
    

 
?>