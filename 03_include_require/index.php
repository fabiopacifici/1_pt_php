<?php

/* include/require | include_once/require_once  */
session_start();
include  __DIR__ .  '/layouts/head.php';
require_once __DIR__ . '/db/db.php';


if (isset($_SESSION['username'])) {
  $name =  $_SESSION['username'];
}




?>

<main class="min-vh-100">
  <div class="p-5 mb-4 bg-light rounded-3">
    <div class="container py-5">
      <h1 class="display-5 fw-bold">
        Welcome
        <?php echo $name; ?>
      </h1>
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
      <h2>This is a home section</h2>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum dicta eveniet iste minus, voluptatibus placeat, nostrum doloremque quae laboriosam, veritatis quia nulla? Perspiciatis animi asperiores accusamus quam laboriosam, quidem accusantium.</p>

      <div class="row row-cols-3 g-3">
        <?php foreach ($posts as $post) : ?>
          <div class="col">
            <div class="card">
              <img class="card-img-top" src="<?= $post['img'] ?>" alt="">
              <div class="card-body">
                <h3><?= $post['title'] ?></h3>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>


    </div>
  </section>

</main>

<?php
include __DIR__ . '/layouts/footer.php';
