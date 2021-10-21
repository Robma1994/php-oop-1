<?php

    //è definita una classe ‘Movie’
   /*all'interno della classe: 
    1) Sono dichiarate delle variabili d'istanza
    2) è definito un costruttore
    3) è definito almeno un metodo
    4) Vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
   */
    class Movie {
        public $title;
        public $subTitle;
        public $year;
        
        function __construct($_title, $_subTitle, $_year) {
            $this->title = $_title;
            $this->subTitle = $_subTitle;
            $this->year = $_year;
        }
    }

    $harryPotter = new Movie('Harry Potter', 'Il calice di fuoco', 2005);
    echo 'Title :' . ' ' . $harryPotter->title . '<br/>' ;
    echo 'SubTitle :' . ' ' . $harryPotter->subTitle . '<br/>' ;
    echo 'Anno :' . ' ' . $harryPotter->year . '<br/>' ;
    
?>


