
<?php session_start(); ?>
<?php include 'db_connection.php'; ?>

<?php

  $_SESSION['username'] = null;
  $_SESSION['firstname'] = null;
  $_SESSION['Lastname'] = null;
  $_SESSION['user_role'] = null;
  header("Location: ../index.php")
?>
