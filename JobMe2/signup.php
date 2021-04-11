<?php  include "Includes/head.php";?>

<body>

      <section class="colored-section" id="cta">

        <div class="container-fluid">

<?php  include "Includes/nav.php";?>
<?php
if (isset($_POST['submit'])) {

$firstname =  $_POST['firstname'];
$lastname  =  $_POST['lastname'];
$username  =  $_POST['username'];
$password  =  $_POST['password'];
$email     =   $_POST['email'];

$firstname = mysqli_real_escape_string($connection, $firstname);
$lastname = mysqli_real_escape_string($connection, $lastname );
$username = mysqli_real_escape_string($connection, $username);
$password = mysqli_real_escape_string($connection, $password);
$email   = mysqli_real_escape_string($connection, $email);

$query = "SELECT randsalt FROM users";
$select_randsalt = mysqli_query($connection, $query);

if (!$select_randsalt) {
  die("Query failed".mysql_error($connection));
}

  $row = mysqli_fetch_array($select_randsalt);

 $salt = $row['randsalt'];
 //+++++++++++++++++++++password encryption using the sansalt/ method +++++++++++++++++++++++++++++=//
 $password = crypt($password, $salt);

$query = "INSERT INTO users (user_firstname,user_lastname,user_username,user_paswword,user_email) VALUES ('$firstname','$lastname','$username','$password','$email')";
$add_new_user= mysqli_query($connection, $query);
echo "<div class='alert alert-dark alert-dismissible fade show' role='alert'>
  <strong>Account Created successfully!</strong>View list <a href='sign.php'>loging</a>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";


if (!$add_new_user) {

die("Query failed to creat user". ' '. mysqli_error($connection));
}
}






 ?>

      <form action="signup.php"  method="post">
        <img class="mb-4 jobmelogo2" src="images\jobmelogo2.png" >
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">firstname</label>
      <input type="text" name="firstname"class="form-control" placeholder="Enter your Firstname" required >
    </div>

    <div class="form-group col-md-6">
      <label for="inputPassword4">lastname</label>
      <input type="text" name="lastname" class="form-control" placeholder="Enter your Lastname" required>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">username</label>
      <input type="text" name="username" class="form-control" placeholder="Enter your username" required >
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword">password</label>
      <input type="password" name="password" class="form-control" placeholder="Enter your Password"required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"
      title="Must contain at least one number and one uppercase and lowercase letter, and at least 6 ">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Email</label>
    <input type="email" name="email" class="form-control" placeholder="Enter your Email" required>
  </div>

  <button type="submit" name="submit" class="btn btn-primary download-button">Sign up</button>
</form>


  </div>
      </section>

  <footer class="white-section" id="footer">
    <div class="container-fluid">
      <i class="social-icon fab fa-facebook-f"></i>
      <i class="social-icon fab fa-twitter"></i>
      <i class="social-icon fab fa-instagram"></i>
      <i class="social-icon fas fa-envelope"></i>
      <p>© Copyright 2020 Jamal Mahamoud </p>
    </div>
  </footer>

</body>

</html>
