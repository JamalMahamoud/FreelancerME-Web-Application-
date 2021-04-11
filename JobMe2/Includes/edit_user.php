
<!--+++++++++++ this include call data from the database and display it in the forms for edithing and resubmmsion ++++++++++++++-->
<?php


 if (isset($_GET['ueditisclick'])){
  $uedithisclick = $_GET['ueditisclick'];

$query = "SELECT * FROM users WHERE  user_id =   $uedithisclick ";
        $select_all_user_query = mysqli_query($connection,$query);

}
while($row = mysqli_fetch_assoc($select_all_user_query)) {
  $user_id = $row['user_id'];
  $user_username= $row['user_username'];
  $user_firstname = $row['user_firstname'];
  $user_lastname= $row['user_lastname'];
    $user_email  = $row['user_email'];
    $user_role = $row['user_role'];
}
?>
<?php if(isset($_POST['update_users'])) {
  $user_username= $_POST['user_username'];
  $user_firstname = $_POST['user_firstname'];
  $user_lastname= $_POST['user_lastname'];
    $user_email  = $_POST['user_email'];
    $user_role= $_POST['user_role'];

  $query = "UPDATE users SET user_username = '$user_username', user_firstname='$user_firstname',user_lastname ='$user_lastname', user_email='$user_email', user_role='$user_role' WHERE user_id ='$uedithisclick'";
  $uedit = mysqli_query($connection,$query);
  echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
    <strong>User Edited successfully!</strong>To view your new adding click here <a href='admin.php?source=view_user'>View users</a>
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>&times;</span>
    </button>
  </div>";

connectioncheck($uedit);


}?>
<div class="container">

<form action="" method="post">


<div class="form-group">
       <label for="title">Edit username</label>
        <input value="<?php echo   $user_username; ?>" type="text" class="form-control" name="user_username">
</div>

    <div class="form-group">
       <label for="post_tags"> Edit firstname</label>
        <input value="<?php echo $user_firstname; ?>"type="text" class="form-control" name="user_firstname">
    </div>

    <div class="form-group">
       <label for="post_tags">Edit lastname</label>
        <input value="  <?php echo $user_lastname; ?>"type="text" class="form-control" name="user_lastname">
    </div>
    <div class="form-group">
      <label for="title"> Role</label>
        <select class="form-control" name="user_role">
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
    <div class="form-group">
       <label for="post_tags">Edit Email</label>
        <input value="<?php echo  $user_email  ?>" type="text" class="form-control" name="user_email">
    </div>


     <div class="form-group">
        <input class="btn btn-primary" type="submit" name="update_users" value="update">
    </div>

</form>
</div>
