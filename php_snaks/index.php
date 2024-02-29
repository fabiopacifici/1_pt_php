<?php

/*
## Snack 1

Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà: 
- una squadra di casa 
- una squadra ospite, 
- punti fatti dalla squadra di casa 
- punti fatti dalla squadra ospite. 

Stampiamo a schermo tutte le partite con questo schema:

Olimpia Milano - Cantù | 55-60

*/


$teams = [
  [
    "home_team" => "Home team 1",
    "guest_team" => "Guest team 1",
    "home_team_score" => rand(1, 20),
    "guest_team_score" => rand(1, 20),

  ],
  [
    "home_team" => "Home team 2",
    "guest_team" => "Guest team 2",
    "home_team_score" => rand(1, 20),
    "guest_team_score" => rand(1, 20),

  ],
  [
    "home_team" => "Home team 3",
    "guest_team" => "Guest team 3",
    "home_team_score" => rand(1, 20),
    "guest_team_score" => rand(1, 20),

  ],
  [
    "home_team" => "Home team 4",
    "guest_team" => "Guest team 4",
    "home_team_score" => rand(1, 20),
    "guest_team_score" => rand(1, 20),

  ],
  [
    "home_team" => "Home team 5",
    "guest_team" => "Guest team 5",
    "home_team_score" => rand(1, 20),
    "guest_team_score" => rand(1, 20),

  ]
];


/* foreach ($teams as $team) {
  var_dump($team);
  echo $team['home_team'] . " - " . $team['guest_team'] . " | " . $team['home_team_score'] . " - " . $team['guest_team_score'];
}
 */

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP teams</title>
</head>

<body>



  <?php foreach ($teams as $team) { ?>

    <p>
      <span><?php echo $team['home_team'] ?></span>-
      <span><?php echo $team['guest_team'] ?></span> |

      <span><?php echo $team['home_team_score'] ?></span>-
      <span><?php echo $team['guest_team_score'] ?></span>

    </p>
  <?php  }  ?>


  <?php foreach ($teams as $team) : ?>

    <p>
      <span><?php echo $team['home_team'] ?></span>-
      <span><?php echo $team['guest_team'] ?></span> |

      <span><?php echo $team['home_team_score'] ?></span>-
      <span><?php echo $team['guest_team_score'] ?></span>

    </p>
  <?php endforeach;  ?>



  <?php if (4 > 2) { ?>
    <!-- HTML here -->
  <?php } ?>


  <?php if (4 > 2) : ?>
    <!-- HTML here -->
  <?php endif; ?>



  <?php if (4 > 2) : ?>

    <!-- HTML here -->
  <?php elseif (condition) : ?>
    <!-- # code... -->
  <?php endif; ?>



</body>

</html>