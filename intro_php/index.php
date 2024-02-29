<?php
// This is a comment
//phpinfo();

$message = 'Welcome to PHP';

# This is a comment

/* 
This is 
a 
comment

*/


// Sort of console.log for php
var_dump(123);


/* Strings */

// Cannot have variables inside
'This is a string';

// Can have variables inside
"This is a string";
"This is a string $message";

/* No var_dump() no game*/
var_dump("this is a string");
var_dump("This is a string $message");

var_dump(str_contains("This is a  string!", "PHP"));

/* Numbers */
var_dump(10 + 10);
var_dump(10 - 2);
var_dump(10 * 10);
var_dump(10 / 2);


/* Array */


/* Conditionals */


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