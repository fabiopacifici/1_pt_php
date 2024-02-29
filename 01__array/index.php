<?php

/* Array */
// Array (numeric index)
$movies = ['Matrix', 'Ritorno al futuro', 'Avengers'];
$film = [
  "name" => "Hypnosis",
  "length" => 120
];

echo "Hi there";
echo "<br>";
echo 123;
echo "123";

// echo does not work with arrays
echo $movies;

var_dump($movies);
var_dump($movie);


foreach ($movies as $movie) {
  var_dump($movie);
}


var_dump($movie);

foreach ($film as $key => $value) {
  # code...
  var_dump($key, $value);
}

/* Conditionals 

if(conditin) {

} elseif (condition) {
  # code...
} else {

}
*/


/* 
## Snack 1

Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema:

Olimpia Milano - Cantù | 55-60

*/



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <h1><?php echo $message; ?></h1>

</body>

</html>