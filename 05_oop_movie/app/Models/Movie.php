<?php

/**
 * Class Movie
 */
class Movie
{

  public static $staticProperty = "I don't need an object";

  public function __construct(public $title, public $overview, public $duration, public array $genres, public $cast = [])
  {
    // select an object property inside a class using the $this variable
    // The $this always refer to the object in which it was used

    $this->title = $title;
    $this->overview = $overview;
    $this->duration = $duration;
    $this->cast = $cast;
    $this->genres = $genres;
  }

  // setter for $cast
  public function setCast($cast)
  {
    $this->cast = $cast;
  }

  // getter for $cast
  public function getCast()
  {
    return $this->cast;
  }
}


// non static propery
$avat = new Movie(); // this is an istance of the Movie class (object)

// static property
// not in an object context
Movie::$staticProperty;
