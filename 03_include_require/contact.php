<?php
session_start();
include __DIR__ . '/layouts/head.php';

?>

<main class="min-vh-100">
  <div class="p-5 mb-4 bg-light rounded-3">
    <div class="container py-5">
      <h1 class="display-5 fw-bold">Contact me</h1>
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

      <?php if (isset($_SESSION['error'])) : ?>
        <div class="alert alert-danger" role="alert">
          <strong>Error:</strong> <?= $_SESSION['error'] ?>
        </div>

      <?php endif; ?>

      <form action="server.php" method="post" class="py-5">


        <div class="mb-3">
          <label for="full-name" class="form-label">Full Name</label>
          <input type="text" class="form-control" name="full-name" id="full-name" aria-describedby="emailHelpId" placeholder="Luke Skywalker" />
          <small id="emailHelpId" class="form-text text-muted">Help text</small>
        </div>


        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="abc@mail.com" />
          <small id="emailHelpId" class="form-text text-muted">Help text</small>
        </div>



        <div class="mb-3">
          <label for="message" class="form-label">Message</label>
          <textarea class="form-control" name="message" id="message" rows="10"></textarea>
        </div>



        <button type="submit" class="btn btn-primary">
          Submit
        </button>


      </form>
  </section>


</main>

<?php include __DIR__ . '/layouts/footer.php'; ?>