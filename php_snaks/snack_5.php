<?php

/* 
Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
Prendere il paragrafo e suddividerlo in tanti paragrafi. 
Ogni punto un nuovo paragrafo.

*/



$paragraph = "The sun is shining brightly today, making it a perfect day to go for a walk and soak up some vitamin D. Remember to stay hydrated and wear sunscreen to protect your skin from harmful UV rays. I hope you have a great day, filled with joy and positivity. As you go about your day, take a moment to appreciate the beauty of nature around you. May your day be as bright and cheerful as the sun outside.";


$explodedParagraphs = explode('.', $paragraph);

var_dump($explodedParagraphs);



?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 5</title>
</head>

<body>


  <?php foreach ($explodedParagraphs as $sentence) : ?>

    <!-- php echo forma contratta -->
    <p><?= $sentence ?></p>
    <!-- php echo forma estesa -->
    <p><?php echo $sentence ?></p>

  <?php endforeach; ?>

</body>

</html>