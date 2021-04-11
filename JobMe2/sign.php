<?php  include "Includes/head.php";?>


<?php if(isset($_SESSION['user_role'])){
  if ($_SESSION['user_role'] == 'admin' ){
    header("Location: admin.php");
  } else {
header("Location: jobpage.php");
  }

}
 ?>

<body>

  <section class="colored-section" id="title">
    <div class="container-fluid">

      <!-- Nav Bar -->
<?php  include "Includes/nav.php";?>
      <section class="colored-section" id="cta">

        <div class="container-fluid">
<div class="row">

  <img class="mb-4 jobmelogo2" src="images\jobmelogo2.png" >
  <div class="col-lg-12">
    <div class="alert alert-danger" role="alert">
  username and password is case sensitive
    </div>
  <form action="Includes/login.php" method="post" class="form-signin mb-2">


<input type="text" name="username" class="form-control" placeholder="Enter Username" required autofocus>



<input type="password" name="password"  class="form-control" placeholder="Password" required>

<button class="btn btn-lg btn-primary btn-block download-button" name="login" type="submit">Sign in</button>

</form>

<a  class="btn btn-lg btn-primary btn-block" href="signup.php">Sing up here</a>
  </div>



  </div>
  </div>


</div>

</div>


      </section>


</body>
</div>
<div class="alert alert-danger" role="alert">
If you are ADMIN Please login here with your admin details
</div>
</html>
