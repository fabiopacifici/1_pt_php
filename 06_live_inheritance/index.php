<?php
class User
{

  public function __construct(protected $name, private $lastname)
  {
    $this->name = $name;
    $this->lastname = $lastname;
  }


  /* Getters */
  public function getName()
  {
    return $this->name;
  }


  public function getLastname()
  {
    return $this->lastname;
  }

  /* Setters */
  public function setName($name)
  {
    $this->name = $name;
  }


  public function setLastname($lastname)
  {
    $this->lastname = $lastname;
  }
}



class Membership
{


  public function __construct(protected $name, protected $price, protected $data)
  {
    $this->name = $name;
    $this->price = $price;
    $this->data = $data;
  }
}



class PremiumUser extends User
{

  public $membership;

  public function __construct($name, $lastname, Membership $membership)
  {
    parent::__construct($name, $lastname);
    $this->membership = $membership;
  }
}


$user = new User('Luke', 'Skywalker');
// cannot read protected properties
//var_dump($user->lastname);

var_dump($user->getName());
var_dump($user->getLastname());

$user->setName('Anakin');




$premiumUser = new PremiumUser('Gugu', 'Mandalorian', new Membership('premium', 1234, date('d/m/Y')));
var_dump($premiumUser->getName());
var_dump($premiumUser->getLastname());


$premiumUser->setName('The child');
//$premiumUser->name = 'Baby-Yoda';



var_dump($user, $premiumUser);
