
<!-- THIS inluce is innclude in admin page ig admin click of view joobseekers  -->

<div class="container">
<div class="row">
<div class="col-lg-12">
  <!-- +++++++++++++++++table start here /+++++++++++++++++++++++++++++++++++++++ -->

  <!-- deletimg user from the table  -->
  <?php if (isset($_GET['jdeleteisclick'])) {
    $deletej = $_GET['jdeleteisclick'];
     $query = "DELETE FROM jobseeker WHERE jobseeker_Id = $deletej";
    mysqli_query($connection,$query);
    echo "<div class='alert alert-dark alert-dismissible fade show' role='alert'>
      <strong>Joobseeker DELETED successfully!</strong>To view Upadated List click here <a href='admin.php?source=viewjobseekers'>View Jobseeker</a>
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
      </button>
    </div>";
  } ?>



          <table class="table table-striped table-dark">
          <thead >
            <h1 class="big-heading"> List of a all Jobseekers </h1>
            <tr>
              <th scope="col">user_id</th>
              <th scope="col">uusername</th>
              <th scope="col">firstname</th>
              <th scope="col">lastname</th>
              <th scope="col">email</th>
                <th scope="col">Role</th>
<!-- the rest of the table can be find inside the FUNCTION ReadingAllJobseekers() -->
            </tr>
          </thead>
          <tbody>

            <?php
             ReadingAllJobseekers();   //this function call a method that display all data from
                                // the database in a table in the admin page it can be found is the FUNCTION.php
          ?>
</tr>
          </tbody>
          </table>
<!-- +++++++++++++++++table ends  here /+++++++++++++++++++++++++++++++++++++++ -->
        </div>

        </div>


</div>
