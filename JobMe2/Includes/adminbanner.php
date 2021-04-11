<!-- MOST OF THE FUNCTION DEMONSTRATING CRUD IS IN THE FUNCTION.PHP FILE IN THE Includes FOLDER TO  -->
    <div class="row">
      <div class="col-lg-12">
       <h1 class="big-heading">Welcome to Admin,</h1>

       <h2> Hi <em><?php echo $_SESSION ['Frirst'];?>    <?php echo $_SESSION ['Lastname'];?> </em> </h2>
       <a  href="admin.php?source=Post_jobseeker" class="btn btn-danger download-button">Add New Jobseeker</a>
       <a href="admin.php?source=viewjobseekers" class="btn btn-danger download-button">View Jobseeker</a>
       <a href="admin.php?source=add_new_user" class="btn btn-danger  download-button">Add Users</a>
       <a href="admin.php?source=view_user" class="btn btn-danger  download-button">View Users</a>
       <a href="admin.php?source=review" class="btn btn-danger  download-button">View Reviews</a>
       <a href="admin.php?source=booking" class="btn btn-danger  download-button">View Booking</a>
       <a href="admin.php?source=industry" class="btn btn-danger  download-button">View industry</a>
     </div>


    </div>
<!-- this is adeamin banner is display in all addmin page  -->
