



<div class="container">

  <?php   if (isset($_GET['udelete'])) {
      $deletesuser = $_GET['udelete'];
       $query = "DELETE FROM users WHERE user_Id = $deletesuser";
        $request = mysqli_query($connection,$query);
        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
          <strong>User DELETE successfully! </strong> To view Upadated User List click here <a href='admin.php?source=view_user'>View users</a>
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span>
          </button>
        </div>";
    } ?>

          <table class="table table-striped table-dark">


          <thead>
            <h1 class="big-heading"> List of a all Jobseekers </h1>
            <tr>
              <th scope="col">user_id</th>
              <th scope="col">uusername</th>
              <th scope="col">firstname</th>
              <th scope="col">lastname</th>
              <th scope="col">email</th>
                <th scope="col">Role</th>

            </tr>
          </thead>
          <tbody>
            <?php
          readinguser();   //this function call a method that display all data from
                                      // the database in a table in the admin page it can be found is the FUNCTION.php
          ?>
</tr>
          </tbody>
          </table>

          <h5>You are login as  <?php echo $_SESSION ['firstname'];?></h5>
          <a href="admin.php" class="btn btn-danger  download-button">Admin Homepage</a>
          <a href="Includes/logout.php" class="btn btn-danger  download-button">logout</a>
</div>
