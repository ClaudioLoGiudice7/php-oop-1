<!-- Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d'istanza che abbiamo visto stamattina e create
un file index.php in cui:
- è definita una classe 'Movie'
=> all'interno della classe sono dichiarate delle variabili d'istanza
=> all'interno della classe è definito un costruttore
=> all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti 'Movie' e stampati a schermo i valori delle relative proprietà -->

<!-- Definire classe Movie -->
<?php
class Movie
{
    // all'interno della classe sono dichiarate delle variabili d'istanza
    public $title;
    public $director;
    public $rating;
    public $year;
    public $language;

    // all'interno della classe è definito un costruttore
    function __construct($title, $director, $rating, $year, $language,)
    {
        $this->title = $title;
        $this->director = $director;
        $this->rating = $rating;
        $this->year = $year;
        $this->language = $language;
    }

    // all'interno della classe è definito almeno un metodo
    function getMovieInfo()
    {
        return
            "Titolo: " . $this->title . "<br>" .
            "Regista: " . $this->director . "<br>" .
            "Voto: " . $this->rating . "<br>" .
            "Anno: " . $this->year . "<br>" .
            "Lingua: " . $this->language . "<br>";
    }
}

// vengono istanziati almeno due oggetti 'Movie' e stampati a schermo i valori delle relative proprietà
$movie1 = new Movie("Quasi Amici", "Olivier Nakache e Éric Toledano", 4.6, 2012, "francese");
$movie2 = new Movie("Il Miglio Verde", "Frank Darabont", 4, 2000, "inglese");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- META TAGS -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- TITLE -->
    <title>PHP Primo Esercizio OOP</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- AXIOS -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <!-- VUE JS -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- JAVASCRIPT -->
    <script type="text/javascript" src="./js/app.js" defer></script>
</head>

<body>
    <div>
        <p class="display-6">
            <?= $movie1->getMovieInfo(); ?>
        </p>
        <br>
        <p class="display-6">
            <?= $movie2->getMovieInfo(); ?>
        </p>
    </div>

    <!-- BOOTSTRAP JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>