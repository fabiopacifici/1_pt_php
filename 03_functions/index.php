<?php 
var_dump('it works');

/* Functions witout parameters */

function calcAge(){
  var_dump('123');
}

// invoke your function
calcAge();

/* Functions with parameters */

function calcUserAge($yearOfBirth){
  echo $yearOfBirth;
}

calcUserAge(1980);


/* Variables scope */
$hello = 'Hello';

function sayHello($message) {
  $say = 'Say';

  var_dump($say);
  var_dump($message);

  //PHP Warning:  Undefined variable $hello
  //var_dump($hello);

}

sayHello($hello);


/* Functions example */

$email = 'dsjlfpsdolkf@sdcfsdf.sadf';

var_dump(str_contains($email, '@'));
var_dump(str_contains($email, '.'));


if(str_contains($email, '@') && str_contains($email, '.')) {
  var_dump('Correct Email');
} else {
  var_dump('Email format incorrect');
}


/**
 * Check if a given email address includes
 * a '@' and '.'
 * @param  String $emailAddress The email to check
 * @return Bool
 */
function checkEmailAddress($emailAddress){
  if(str_contains($emailAddress, '@') && str_contains($emailAddress, '.')) {
    return true;
  } 
  return false;
}



if(checkEmailAddress($email)){
  echo '👍 You can access';
} else {
  echo '🤚 You cannot access';
}


