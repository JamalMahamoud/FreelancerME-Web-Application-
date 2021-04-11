<?php ob_start();?>
<?php session_start(); ?>
<?php include 'db_connection.php'; ?>


<?php
if (isset($_POST['login'])) {
 $username =  $_POST['username'];
 $password = $_POST['password'];

$username = mysqli_real_escape_String($connection, $username); // security o password//
$password =  mysqli_real_escape_string($connection, $password);

$query = "SELECT * FROM users WHERE user_username = '$username'";
$select_all_user = mysqli_query($connection, $query);
if (!$select_all_user) {
 die("connection failed".mysql_error($connection));
}

while ($row = mysqli_fetch_array($select_all_user)) {

  $user_id = $row['user_id'];
  $user_username= $row['user_username'];
  $user_firstname = $row['user_firstname'];
  $user_password = $row['user_paswword'];
  $user_lastname= $row['user_lastname'];
  $user_email  = $row['user_email'];
  $user_role = $row['user_role'];

}

}

$password = crypt($password, $user_password);

if ($username === $user_username && $password === $user_password  ) {

  $_SESSION['username'] = $user_username;
  $_SESSION['firstname'] = $user_firstname;
  $_SESSION['Lastname'] = $user_lastname;
  $_SESSION['user_role'] = $user_role;
    header("Location: ../admin.php");



}else{

  header("Location: ../signfailed.php");}

?>
