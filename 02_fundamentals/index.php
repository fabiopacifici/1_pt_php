<?php


/* Tag di apertura e chiusura di php 

- la chiusura opzionale in un file plain php
- la chiusura é obbligatoria quando mixate php/html

<?php 
// your code here in a plain php

*/


/* 


<?php 
// needs the closing tag

?>
<ul></ul>



*/


# Variables are defined using the $ sign
# camelCase
$myVariable = 'This is a variable';
# underscore_case
$my_other_variable = 'This is a variable';


/* Comments 

single line comment with //
single line comment with #
*/

#multiline comment with /**/



/* HTML/PHP 

  <!-- Long form -->
  <p><?php echo $my_other_variable ?></p>
  <!-- short form -->
  <p><?= $myVariable ?></p>

*/

/* With echo you can print:

- numbers
- strings

*/

# to print anything else use var_dump
//var_dump([1, 2, 30])

var_dump($_GET);
// check if something is empty
var_dump(empty($_GET));


var_dump($_POST);


/* Data types
- strings (https://www.php.net/manual/en/ref.strings.php)
- numbers
- array


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
  <!-- Long form -->
  <p><?php echo $my_other_variable ?></p>
  <!-- short form -->
  <p><?= $myVariable ?></p>


  <!-- Forms -->


  <?php if (!empty($_GET)) : ?>
    <p>
      Ciao
      <?php echo $_GET['name'] . ' ' . $_GET['lastname'] ?>

    </p>
  <?php endif; ?>

  <form action="" method="get">
    <label for="name">Your name</label>
    <input type="text" name="test" id="name" required>
    <label for="lastname">Last name</label>
    <input type="text" name="lastname" id="lastname" required>
    <label for="password">Last password</label>
    <input type="text" name="password" id="password" required>

    <button type="submit">Send</button>
  </form>


</body>

</html>