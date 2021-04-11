
<!-- THIS inluce is innclude in admin page ig admin click of view joobseekers  -->

<div class="container">
<div class="row">
<div class="col-lg-12">
  <?php if (isset($_GET['deleteisclick'])) {
    $deletestaff = $_GET['deleteisclick'];
     $query = "DELETE FROM reviews WHERE review_id = $deletereview";
      $request = mysqli_query($connection,$query);
      echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
        <strong>Review DELETE successfully!</strong>To view your new adding click here <a href='admin.php?source=review'>View users</a>
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>";
  } ?>
  <!-- +++++++++++++++++table start here /+++++++++++++++++++++++++++++++++++++++ -->
          <table class="table table-striped table-dark">
          <thead >
            <h1 class="big-heading"> List of a all reviews</h1>
            <tr>
              <th scope="col">review Id</th>
              <th scope="col">review jobseeker </th>
              <th scope="col">review customer</th>
              <th scope="col">reviewer email</th>
              <th scope="col">review content</th>
                <th scope="col">review statud</th>
                <th scope="col">review date</th>
<!-- the rest of the table can be find inside the FUNCTION ReadingAllJobseekers() -->
            </tr>
          </thead>
          <tbody>

            <?php
             ReadingAllreviews();   //this function call a method that display all data from
                                // the database in a table in the admin page it can be found is the FUNCTION.php
          ?>
</tr>
          </tbody>
          </table>
          <h6>You are login as  <?php echo $_SESSION ['firstname'];?></h5>
          <a href="admin.php" class="btn btn-danger  download-button">Admin Homepage</a>
          <a href="Includes/logout.php" class="btn btn-danger  download-button">logout</a>
</div>
<!-- +++++++++++++++++table ends  here /+++++++++++++++++++++++++++++++++++++++ -->
        </div>

      </div>


</div>

<!-- deletimg user from the table  -->
