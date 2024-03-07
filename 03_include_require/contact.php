<?php include __DIR__ . '/layouts/head.php'; ?>

<main class="min-vh-100">
  <div class="p-5 mb-4 bg-light rounded-3">
    <div class="container-fluid py-5">
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

      <form action="">
        <div class="mb-3">
          <label for="" class="form-label">Email</label>
          <input type="email" class="form-control" name="" id="" aria-describedby="emailHelpId" placeholder="abc@mail.com" />
          <small id="emailHelpId" class="form-text text-muted">Help text</small>
        </div>

        <div class="mb-3">
          <label for="" class="form-label">Name</label>
          <input type="email" class="form-control" name="" id="" aria-describedby="emailHelpId" placeholder="abc@mail.com" />
          <small id="emailHelpId" class="form-text text-muted">Help text</small>
        </div>


        <button type="submit" class="btn btn-primary">
          Submit
        </button>


      </form>
  </section>


</main>

<?php include __DIR__ . '/layouts/footer.php'; ?>