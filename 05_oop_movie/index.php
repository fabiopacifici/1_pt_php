<?php

require_once __DIR__ . '/app/Models/Movie.php';
require_once __DIR__ . '/database/db.php';
// create an instance of a class (an object) with the `new` keyword

/* $padrino = new Movie('Il padrino', 'Il padrino lorem ipsum dolor', 120, []);
 */
// Write values to each property of the object (or update exising values)
/* $padrino->title = 'Il padrino';
$padrino->overview = ' Il padrino lorem ipsum dolor';
$padrino->duration = 120; */

/* $padrino->setCast([
  "Marlon Brando",
  "Al Pacino",
  "James Caan",
  "Robert Duvall",
  "Diane Keaton",
  "Richard S. Castellano",
  "Abe Vigoda",
  "Sterling Hayden",
  "John Marley",
  "Richard Conte",
  "Al Lettieri",
  "Gianni Russo",
  "Talia Shire",
]); */

//var_dump($padrino);

// Create a second instance of movie
// Write values to each property of the object (or if they exists already updates exising values)

/* $matrix = new Movie('Matrix', ' Il matrix lorem ipsum dolor', 120, [
  "Keanu Reeves",
  "Laurence Fishburne",
  "Carrie-Anne Moss",
  "Hugo Weaving",
  "Joe Pantoliano",
  "Gloria Foster",
  "Marcus Chong",
  "Julian Arahanga",
  "Matt Doran",
  "Belinda McClory",
  "Anthony Ray Parker",
  "Paul Goddard",
]); */
/* $matrix->title = 'Matrix';
$matrix->overview = ' Il matrix lorem ipsum dolor';
$matrix->duration = 120; */
//var_dump($matrix);

//var_dump($padrino->getCast());
//var_dump($matrix->getCast());

/* $matrix->setCast(['Fabio', 'Cristina', 'Giuseppe', 'Davide2', ' Riccardo', 'Simone', 'Gianluca', 'Paki', 'Andrea']); */

//var_dump($matrix->getCast());



//var_dump($movies);

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movies EX</title>
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>

</head>

<body>



  <header class="bg-dark text-white">
    <nav class="nav justify-content-center  ">
      <a class="nav-link active" href="#" aria-current="page">Active link</a>
      <a class="nav-link" href="#">Link</a>
      <a class="nav-link disabled" href="#">Disabled link</a>
    </nav>

  </header>

  <main class="mt-5">

    <section>
      <div class="container">
        <div class="row row-cols-1 row-cols-sm-3 g-3">

          <?php
          // keep it at the top of the file for better redeability
          /*           $movies = [
            $matrix,
            $padrino
          ];
 */

          foreach ($movies as $movie) : ?>

            <div class="col">
              <div class="card">

                <div class="card-body">
                  <!-- Alternative syntax to php echo -->
                  <h3><?= $movie->title ?></h3>
                  <p><?= $movie->overview ?></p>
                </div>
                <div class="card-footer">

                  <ul class="d-flex gap-1 list-unstyled">
                    <?php foreach ($movie->genres as $genre) : ?>

                      <li><?= $genre->name ?></li>

                    <?php endforeach; ?>
                  </ul>
                </div>


              </div>
            </div>

          <?php endforeach; ?>

        </div>
      </div>
    </section>

  </main>






  <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p' crossorigin='anonymous'></script>
</body>

</html>