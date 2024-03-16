<?php

/**
 * ### Class User
 * Describes a user in a system
 * @author Fabio Pacific
 * @license MIT
 * @copyright 2024 Fabio Pacific
 */
class User
{

  /*  
  Simplified syntax

  public $name;
  public $lastname;
  public $address;
  public $age;
 */

  /**
   * @param String $name The user name
   * @param String $lastname The user last name
   * @param Address $address The user address
   */
  public function __construct(public string $name, public string $lastname, public int $age, public Address $address)
  {
    $this->name = $name;
    $this->lastname = $lastname;
    $this->age = $age;
    $this->address = $address;
  }


  public function sayHi()
  {

    var_dump($this);
    return 'Hi';
  }


  public static function greetings()
  {
    // This does not exists in this context (not object context)
    //var_dump($this);
    // Uncaught Error: Undefined constant "self"
    //var_dump(self);
    return 'Hello';
  }
}
