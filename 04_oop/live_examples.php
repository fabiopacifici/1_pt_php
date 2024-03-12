<?php


/* class User
{
  public $name;
  public $lastname;
  // This is shared between instances (objects) 
  // every object that uses this class will share the age value of 40.
  public $age = 40;
  public $email;
}

//An object
$gotti_0 = new User();

// read only
var_dump($gotti_0->name);

// write a value to the name property defined inside the class User
$gotti_0->name = 'Marco Gotti';
var_dump($gotti_0);


//Another object
$gotti_1 = new User();
$gotti_1->name = 'Luigi Gotti';

var_dump($gotti_1);


$gotti_2 = new User();
var_dump($gotti_2);



$gotti_3 = new User();
var_dump($gotti_3);


$gotti_4 = new User();
var_dump($gotti_4);
 */


class User
{
  public $nome;
  public $sconto = 0;


  public function setSconto($eta)
  {
    if ($eta > 65) {
      $this->sconto = 40;
    }
  }

  public function getSconto()
  {

    //var_dump($this);
    //var_dump($this->sconto);
    return $this->sconto;
  }
}

$user_one = new User();
// set a new value using a setter
$user_one->setSconto(70);


// read the value using a getter
//var_dump($user_one->sconto);
$sconto_user_one = $user_one->getSconto(); //0
var_dump($sconto_user_one);


/* Constructor */


class Movie
{

  public $title;
  public $duration;
  public $cover_image;

  public function __construct($title, $duration, $cover_image)
  {
    $this->title = $title;
    $this->duration = $duration;
    $this->cover_image = $cover_image;
  }
}


$matrix = new Movie('The matrix', 90, 'https://picsum.photos/400/200');
$imitationGame = new Movie('The imitation game', 120, 'https://picsum.photos/400/200');
$avatar = new Movie('Avatar', 120, 'https://picsum.photos/400/200');

var_dump($matrix);
var_dump($imitationGame);
var_dump($avatar);
