<?php

/* 
Descrizione:
Creare un form PHP che permetta di inviare due campi: un paragrafo ed una parola da censurare.

Gestire il tutto con due file diversi.
Il primo file dovrà permettere all’utente di inserire i dati e inviare la richiesta al server.

Il secondo file riceverà la richiesta ed eseguirà queste operazioni:
- stampare a schermo il paragrafo e la sua lunghezza
- stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare

*/

$sentence = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam tempora et illo magni corrupti aliquid maiores officia sequi quibusdam asperiores. Saepe autem soluta minus ad tenetur et non magni quas Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam tempora et illo magni corrupti aliquid maiores officia sequi quibusdam asperiores. Saepe autem soluta minus ad tenetur et non magni quas.'

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
    <h2 class="mt-5 mb-3">Censorator</h2>
    <form action="./server.php" method="post">

      <div class="mb-3">
        <label for="sentence" class="form-label">Sentence</label>
        <textarea class="form-control" name="sentence" id="sentence" cols="30" rows="10"><?= $sentence ?></textarea>
        <small id="sentenceHelper" class="form-text text-muted">Add a paragraph to censor</small>
      </div>

      <div class="mb-3">
        <label for="word" class="form-label">Word</label>
        <input type="text" class="form-control" name="word" id="word" aria-describedby="wordHelper " placeholder="Type a paragraph" />
        <small id="wordHelper" class="form-text text-muted">Add a paragraph to censor</small>
      </div>


      <button type="submit" class="btn btn-primary">
        Censor
      </button>


    </form>
  </div>


</body>

</html>