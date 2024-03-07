<?php

/* var_dump($_GET);
var_dump($_GET['sentence']);
var_dump($_GET['word']); */

$sentenceToCensor = trim($_POST['sentence']);
$wordToFind = trim($_POST['word']);

var_dump($sentenceToCensor, $wordToFind);
/* echo 'Original Sentence:' . $sentenceToCensor; 
echo '<br>';
echo 'Original sentence lenght: ' .  strlen($sentenceToCensor);
echo '<br>'; */



//var_dump(str_replace($wordToFind, '***', $sentenceToCensor));
$censordSentence = str_replace($wordToFind, '***', $sentenceToCensor);

/* echo 'Censord Sentence:' . $censordSentence;
echo '<br>';
echo 'Consord sentence lenght: ' .  strlen($censordSentence); */

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Censorator Results</title>
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
</head>

<body>


  <div class="container">
    <h2>Original Sentence
      <span class="badge bg-primary"><?= strlen($sentenceToCensor) ?> characters </span>
    </h2>
    <p><?= $sentenceToCensor; ?></p>

    <hr>

    <h2>
      Censord Sentence
      <span class="badge bg-primary"><?= strlen($censordSentence) ?> characters </span>
    </h2>
    <p><?= $censordSentence; ?></p>

  </div>




</body>

</html>