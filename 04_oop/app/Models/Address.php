<?php

/**
 * Address Class
 *
 * This class represents a physical address with properties and methods
 * to manipulate and retrieve address information.
 *
 * @author Fabio Pacifici
 * {@source }
 */
class Address
{
  /**
   * The country where all addresses belong to, by default 'Italy'.
   *
   * @var string
   */
  public static $country = 'Italy';

  /**
   * Constructor for the Address class.
   *
   * @param string $street_name The name of the street.
   * @param int $house_number The number of the house.
   * @param string $post_code The postal code of the address.
   * @param string $city The city of the address.
   */
  public function __construct(
    public string $street_name,
    public int $house_number,
    public string $post_code,
    public string $city,
  ) {
    $this->street_name = $street_name;
    $this->house_number = $house_number;
    $this->post_code = $post_code;
    $this->city = $city;
  }

  /**
   * Retrieves the full address as a string.
   *
   * {@source }
   * @return string The full address combining street name, house number and postal code and city.
   */
  public function getFullAddress()
  {
    return $this->street_name . ' ' . $this->house_number . ' ' . $this->post_code . ', ' . $this->city;
  }

  /**
   * Retrieves the static country property.
   *
   * This method allows instance access to the static country property.
   *
   * @return string The static country property value.
   */
  public function getStaticCountry()
  {
    return self::$country;
  }
}
