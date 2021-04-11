
<nav class="navbar navbar-expand-lg navbar-dark">

  <a class="navbar-brand" href="index.php">JobMe</a>


  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

    <ul class="navbar-nav ml-auto">

      <li class="nav-item">
        <a class="nav-link standout" href="sign.php"> <i class=" fas fa-thumbs-up"></i>Hire Staff </a>
      </li>


        <li class="nav-item">
           <a class="nav-link standout" href="help.php"><i class="fas fa-info"></i> Help </a>
         </li>


          <div class="btn-group">
            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user"></i><?php if (isset($_SESSION ['firstname'])) {
             echo $_SESSION ['username'];
          }
          else {
            echo "login";
          }
          ?>
            </button>
            <div class="dropdown-menu">
              <?php if (isset($_SESSION ['firstname'])) {
              echo  "<a class='dropdown-item'href='Includes/logout.php'>Log Out</a>";
              }
              else {
                echo "<a class='dropdown-item' href='sign.php'>login</a>";
                  echo "<a class='dropdown-item' href='signup.php'>sign up</a>";

              }?>

          </div>

          </div>
    </ul>

  </div>
</nav>
