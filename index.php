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

            //controllo su anno
            if(is_numeric($year)){
                $this->year = $year;
            } else{
                $this->year = "<em> ' anno sconosciuto ' </em>";
            }

            $this->genre = $genre;
        }

        //funzione per set lingua
        public function setLang($lang){
            return $this->lang = $lang;
        }

        // funzione per creazione array cast
        // operatore di rest
        public function setCast($cast,...$arr){
            //ritorna che il cast di questa istanza e' uguale ad un array in cui pushi ogni argomento passato
            return $this->cast = $cast[]=$arr;
        }

        //funzione per stampa cast
        public function printCast(){

            //array viene sottoposto a splice  se piu' lungo di 2 attori
            if(count($this->cast) > 2){
                array_splice($this->cast,2, count($this->cast), "...");
            }
            echo 'Il cast si compone di:';

            echo "<ul>";
            //cicli array cast e stampi per ognuno il li con il nome
            foreach ($this -> cast as $name){
                echo "<li> $name </li>";
            }

            echo "</ul>";
        }

    }

    // inizializzo movie con construct
    $amiciMiei = new Movie ('Amici Miei', 1975, 'Commedia');
    
    // uso funzione per settare il cast
    $amiciMiei-> setCast($cast,'Pietro Germi', 'Leonardo Benvenuti','Piero De Bernardi');

    //stampo le informazioni
    echo " <h2> Il film '" . $amiciMiei->title . "'</h2>";
    echo "<p> E' uscito nel " . $amiciMiei->year .  " di genere: '" . $amiciMiei->genre . "'</p>";
    // stampo il cast con funzione apposita
    echo $amiciMiei->printCast() ;
    // var_dump($amiciMiei->cast);

    //secondo film
    $scanners= new Movie ('Scanners', '', 'Horror, Sci-fi');

    // setcast e stampa informazioni cast
    $scanners-> setCast($cast,"Jennifer O'Neill", 'Stephen Lack','Patrick McGoohan');

    //stampo le informazioni
    echo " <h2> Il film '" . $scanners->title . "'</h2>";
    echo "<p> E' uscito nel " . $scanners->year .  " di genere: '" . $scanners->genre . "'</p>";

    // stampo il cast con funzione apposita
    echo $scanners->printCast() ;

    
    

?>