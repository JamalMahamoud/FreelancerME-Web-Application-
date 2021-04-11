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

 $password = crypt($password, $salt);

$query = "INSERT INTO users (user_firstname,user_lastname,user_username,user_paswword,user_email) VALUES ('$firstname','$lastname','$username','$password','$email')";
$add_new_user= mysqli_query($connection, $query);

echo "<div class='alert alert-dark alert-dismissible fade show' role='alert'>
  <strong>User Created successfully!</strong>To view your new adding click here <a href='admin.php?source=view_user'>View users</a>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";



if (!$add_new_user) {

die("Query failed to creat user". ' '. mysqli_error($connection));
}
}


 ?>
 <div class="container">

 <h5 class="big-heading"> Add new users</h5>

      <form action=""  method="post">

         <h5>To add a new admin select ADMIN in the role selection</h5>
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
  <div class="form-group">
    <label for="title"> Role</label>
      <select class="form-control" name="Role_ID">
  <?php


  $query = "SELECT * FROM users";

  $selectAll = mysqli_query($connection,$query);

    connectioncheck($selectAll);

  while($row = mysqli_fetch_assoc($selectAll)) {
     $user_role = $row['user_role'];

    echo "<option value='    $user_role '>   $user_role</option>";
}
   ?>
 </select>
</div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">username</label>
      <input type="text" name="username" class="form-control" placeholder="Enter your username" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword">password</label>
      <input type="password" name="password" class="form-control" placeholder="Enter your Password"required >
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Email</label>
    <input type="email" name="email" class="form-control" placeholder="Enter your Email" required>
  </div>

  <button type="submit" name="submit" class="btn btn-primary download-button">Sign up</button>
</form>

 </div>
