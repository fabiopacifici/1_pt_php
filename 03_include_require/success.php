<?php

session_start();

if (isset($_SESSION['email'])) {
  $email_address = $_SESSION['email'];
}



include __DIR__ . '/layouts/head.php'; ?>


<main class="min-vh-100">

  <div class="bg-light">
    <div class="container">

      <h2 class="display-3">Congratulation!</h2>
      <p>Your email was received, thanks for joining our newsletter with your email address:
        <?= $email_address ?>
      </p>


    </div>
  </div>

</main>


<?php include __DIR__ . '/layouts/footer.php'; ?>