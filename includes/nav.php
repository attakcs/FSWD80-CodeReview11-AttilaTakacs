<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <span class="navbar-brand" href="#">Travel Blog
  </span>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Show All<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="event.php">Events</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="restaurant.php">Restaurants & Cafes</a>
      </li>

      <!-- if you want to show certain things (here: extra links for admin/user) this is a way to do it -->

      <?php if((isset($_SESSION['admin']))) {

            echo  '<li class="nav-item text-warning">
                    <a class="nav-link text-danger" href="crud.php">CRUD</a>
                    </li>'; } ?>

    </ul>
  </div>
</nav>