<?php

/* 
## Snack 2

Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

Validation:
- name sia più lungo di 3 caratteri
- mail contenga un punto e una chiocciola (@.)
- age sia un numero

*/


//checks: name sia settato e sia più lungo di 3 caratteri
var_dump(isset($_GET['name']) && strlen($_GET['name']) > 3);

// mail sia settasta e contenga un punto e una chiocciola (@.)
var_dump(isset($_GET['mail']), $_GET['mail'], str_contains($_GET['mail'], '@'), str_contains($_GET['mail'], '.'));

//checks if age is set and is a numeric value
var_dump(isset($_GET['age']), $_GET['age'], is_numeric($_GET['age']));


$canAccess;

if (empty($_GET['name']) || empty($_GET['mail']) || empty($_GET['age'])) {
  // process the inputs
  echo 'error';
} elseif (strlen($_GET['name']) <= 3) {
  echo 'Cannot Access';
} elseif (!str_contains($_GET['mail'], '@') || !str_contains($_GET['mail'], '.')) {
  echo 'Cannot Access';
} elseif (!is_numeric($_GET['age'])) {
  echo 'Cannot Access';
} else {
  echo 'Welcome you can access';
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
</head>

<body>
  <div class="container">


    <form action="" method="get">
      <div class="mb-3">
        <label for="name">Name</label>
        <input placeholder="type your name" class="form-control" type="text" name="name">
      </div>

      <div class="mb-3">
        <label for="mail">Mail</label>
        <input placeholder="type your mail" class="form-control" type="text" name="mail">
      </div>

      <div class="mb-3">
        <label for="age">Age</label>
        <input placeholder="type your age" class="form-control" type="text" name="age">

      </div>

      <button type="submit" class="btn btn-primary">Submit</button>


    </form>

  </div>

</body>

</html>