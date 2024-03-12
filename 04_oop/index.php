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

  public $name;
  public $lastname;
  public $address;


  /**
   * @param String $name The user name
   * @param String $lastname The user last name
   * @param Address $address The user address
   */
  public function __construct($name, $lastname, $address)
  {
    $this->name = $name;
    $this->lastname = $lastname;
    $this->address = $address;
  }
}

class Address
{
  public $street_name;
  public $house_number;
  public $post_code;
  public $country;
  public $city;


  public function __construct($street_name, $house_number, $post_code, $city, $country)
  {
    $this->street_name = $street_name;
    $this->house_number = $house_number;
    $this->post_code = $post_code;
    $this->city = $city;
    $this->country = $country;
  }


  public function getFullAddress()
  {
    return $this->street_name . ' ' . $this->house_number . ' ' . $this->post_code;
  }
}


$address = new Address('Villa esmeralda', 12, 'AB123', 'Esmeralda', 'Canarie');
var_dump($address);

$fist_user = new User('Fabio', 'Pacific', $address);

var_dump($fist_user->address->getFullAddress());
