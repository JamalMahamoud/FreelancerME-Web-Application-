<nav class="navbar navbar-expand-lg navbar-dark adminmnav">

  <a class="navbar-brand allnavband" href="admin.php">Admin</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">


    <ul class="navbar-nav ml-auto">

      <li class="nav-item">
        <a class="nav-link standout" href="Includes/logout.php">Homepage</a>
      </li>
      <li class="nav-item">
        <a class="nav-link standout" href="jobpage.php">View All Jobs </a>
        <li class="nav-item">
          <a href="admin.php"class="nav-link standout" href="sign.php">Admin Homepage</a>
        </li>
      </li>
      <div class="btn-group">
        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="icon fas fa-user"></i><?php echo $_SESSION ['firstname'];?>
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="Includes/logout.php">Log Out</a>

      </div>

      </div>


  </ul>



  </div>



</nav>
