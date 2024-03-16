<?php
require_once __DIR__ . '/../app/Models/Movie.php';
require_once __DIR__ . '/../app/Models/Genre.php';

$movies = [
  new Movie(
    'Il padrino',
    'Il padrino lorem ipsum dolor',
    120,
    [
      new Genre('Molto Drammatico', 'molto-drammatico'),
      new Genre('Molto Mafioso', 'molto-mafioso')
    ],
    [
      "Marlon Brando",
      "Al Pacino",
      "James Caan",
      "Robert Duvall",
      "Diane Keaton",
      "Richard S. Castellano",
      "Abe Vigoda",
      "Sterling Hayden",
      "John Marley",
      "Richard Conte",
      "Al Lettieri",
      "Gianni Russo",
      "Talia Shire",
    ]
  ),
  new Movie(
    'Matrix',
    'Il matrix lorem ipsum dolor',
    120,
    [new Genre('Molto Azione', 'molto-azione'), new Genre('Molto Fantasy', 'molto-fantasy')],
    [
      "Keanu Reeves",
      "Laurence Fishburne",
      "Carrie-Anne Moss",
      "Hugo Weaving",
      "Joe Pantoliano",
      "Gloria Foster",
      "Marcus Chong",
      "Julian Arahanga",
      "Matt Doran",
      "Belinda McClory",
      "Anthony Ray Parker",
      "Paul Goddard",
    ]
  )

];
