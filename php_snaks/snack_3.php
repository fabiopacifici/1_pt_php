<?php
/* 

Snack 3
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z

*/

$posts = [

  '10/01/2019' => [
    [
      'title' => 'Post 1',
      'author' => 'Michele Papagni',
      'text' => 'Testo post 1'
    ],
    [
      'title' => 'Post 2',
      'author' => 'Michele Papagni',
      'text' => 'Testo post 2'
    ],
  ],
  '10/02/2019' => [
    [
      'title' => 'Post 3',
      'author' => 'Michele Papagni',
      'text' => 'Testo post 3'
    ]
  ],
  '15/05/2019' => [
    [
      'title' => 'Post 4',
      'author' => 'Michele Papagni',
      'text' => 'Testo post 4'
    ],
    [
      'title' => 'Post 5',
      'author' => 'Michele Papagni',
      'text' => 'Testo post 5'
    ],
    [
      'title' => 'Post 6',
      'author' => 'Michele Papagni',
      'text' => 'Testo post 6'
    ]
  ],
];


/* 
foreach ($posts as $date => $post_list) {
  # code...
  echo $date;

  //var_dump($date, $post_list);
  foreach ($post_list as $post) {
    var_dump($post);
  }
} */


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 3</title>

  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>

</head>

<body>

  <div class="p-5 mb-4 bg-light rounded-3">
    <div class="container-fluid py-5">
      <h1 class="display-5 fw-bold">Blog</h1>
      <p class="col-md-8 fs-4">
        Using a series of utilities, you can create this jumbotron, just
        like the one in previous versions of Bootstrap. Check out the
        examples below for how you can remix and restyle it to your liking.
      </p>
      <button class="btn btn-primary btn-lg" type="button">
        Example button
      </button>
    </div>

  </div>



  <section>
    <div class="container">
      <!-- Posts here  -->


      <?php foreach ($posts as $date => $post_list) : ?>

        <h2><?php echo $date; ?></h2>

        <?php foreach ($post_list as $post) : ?>
          <div class="card mb-3">
            <div class="card-body">
              <h3><?php echo $post['title'] ?></h3>
              <p><?php echo $post['text'] ?></p>
            </div>
            <div class="card-footer">
              <?php echo $post['author'] ?>
            </div>
          </div>

        <?php endforeach ?>

      <?php endforeach; ?>



    </div>
  </section>




</body>

</html>