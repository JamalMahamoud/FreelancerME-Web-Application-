<nav class="navbar navbar-expand-lg navbar-dark">

  <a class="navbar-brand" href="index.php">JobeMe</a>


  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

    <ul class="navbar-nav ml-auto">

      <li class="nav-item">
        <a class="nav-link standout" href="help.php">Help</a>
      </li>
      <li class="nav-item">
        <a class="nav-link standout" href="Jobpage.php">Jobpage</a>
      </li>

      <!-- Example split danger button -->
      <div class="btn-group">
        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-user"></i><?php echo $_SESSION ['username'];?>
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="Includes/logout.php">Log Out</a>
          <a class="dropdown-item" href="#">Profile</a>

      </div>

      </div>

    </ul>

  </div>
</nav>
