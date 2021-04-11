
<!-- THIS inluce is innclude in admin page ig admin click of view joobseekers  -->

<div class="container">
<div class="row">
<div class="col-lg-12">
  <!-- +++++++++++++++++table start here /+++++++++++++++++++++++++++++++++++++++ -->
          <table class="table table-striped table-dark">
          <thead >
            <h1 class="big-heading"> List of a all  Bookings Orders Made</h1>
            <tr>
              <th scope="col">Booking Id</th>
              <th scope="col">Jobseeker Booked </th>
              <th scope="col">Customer Name</th>
              <th scope="col">r email</th>
              <th scope="col">Request Made</th>
                <th scope="col">Booking </th>
                <th scope="col">booking date</th>
<!-- the rest of the table can be find inside the FUNCTION ReadingAllJobseekers() -->
            </tr>
          </thead>
          <tbody>

            <?php
             ReadingAllbooking();   //this function call a method that display all data from
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

<?php if (isset($_GET['bdeleteisclick'])) {
  $deleteb = $_GET['bdeleteisclick'];
   $query = "DELETE FROM Booking WHERE Bookind_id = $deleteb";
    $request = mysqli_query($connection,$query);
    header("Location: admin.php");
} ?>
