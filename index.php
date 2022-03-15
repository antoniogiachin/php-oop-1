<!-- /* Oggi pomeriggio ripassate i primi concetti di classe e di variabili e metodi d’istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
    => all’interno della classe sono dichiarate delle variabili d’istanza
    => all’interno della classe è definito un costruttore
    => all’interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
*/ -->

<?php

    class Movie {

        // variabili di istanza
        public $title;
        public $year;
        public $genre;
        public $Lang;
        public $cast;

        // funzione di construct
        public function __construct($title, $year, $genre)
        {
            $this->title = $title;
            $this->year = $year;
            $this->genre = $genre;
        }

        //funzione per set lingua
        public function setLang($lang){
            return $this->lang = $lang;
        }

        // funzione per creazione array cast
        // operatore di rest
        public function setCast(...$arr){
            //ritorna che il cast di questa istanza e' uguale ad un array in cui pushi ogni argomento passato
            return $this->cast = $cast[]=$arr;
        }

        //funzione per stampa cast
        public function printCast(){
            echo ' <br>' .'Il cast si compone di:';

            echo "<ul>";
            //cicli array cast e stampi per ognuno il li con il nome
            foreach ($this -> cast as $name){
                echo "<li> $name </li>";
            }

            echo "</ul>";
        }

    }

    $amici = new Movie ('amici', 1997, 'comico');
    // $amici->cast =['tony', 'mario','ovidio'];
    $amici-> setCast('gigi', 'paolo','perix');
    echo $amici->printCast() ;
    

?>