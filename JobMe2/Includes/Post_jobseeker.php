
<?php if (isset($_POST['create_jobseeker'])) {
  $Jobseeker_Name = $_POST['Name'];
  $Jobseeker_Description = $_POST['Description'];
  $Jobseeker_RoleID = $_POST['Role_ID'];
  $Wages = $_POST['wages'];
  $Service = $_POST['service'];
   $Tags = $_POST['tags'];
   $Availability = $_POST['Availability'];
  $Jobseeker_Wages = $_POST['wages'];
  $Jobseeker_service = $_POST['service'];


 $query = "INSERT INTO Jobseeker(Role_ID, jobseeker_Name, jobseeker_description,jobseker_wage,jobseeke_service,jobseeker_tag,jobseeker_availability) ";
$query .= "VALUES({$Jobseeker_RoleID},'{$Jobseeker_Name}','{$Jobseeker_Description}','{$Wages}','{$Service}','{$Tags}','{$Availability}' ) ";

if (!mysqli_query($connection, $query)) {
  die("connection failed". mysqli_error($connection));

}

echo "<div class='alert alert-dark alert-dismissible fade show' role='alert'>
  <strong>Joobseeker Created successfully!</strong>To view your new adding click here <a href='admin.php?source=viewjobseekers'>View users</a>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";

} ?>

<div class="row">
  <div class="col-lg-12">
   <h1 class="big-heading">Post a New Jobseeker </h1>




 </div>



</div>
<div class="container">



<form action="" method="post">
<div class="form-group">
       <label for="title">Enter Jobseeker Name</label>
        <input  type="text" class="form-control" name="Name">

     <div class="form-group">
       <label for="title">Enter Jobseeker Description</label>
       <textarea class="form-control "name="Description" class="form-control" rows="3">
       </textarea>
    </div>

    <div class="form-group">
      <label for="title"> Role</label>
        <select class="form-control" name="Role_ID">
        <?php


        $query = "SELECT * FROM industry";

        $selectAll = mysqli_query($connection,$query);

          connectioncheck($selectAll);

        while($row = mysqli_fetch_assoc($selectAll)) {
           $role_title = $row['role_title'];
           $role_id = $row['role_id'];

          echo "<option value=' $role_id '>$role_title</option>";
    }
         ?>

        </select>
      </div>
    <div class="form-group">
       <label for="post_tags">Joobseeker wages</label>
        <input type="text" class="form-control" name="wages">
    </div>

    <div class="form-group">
       <label for="post_tags">Joobseeker service</label>
        <input type="text" class="form-control" name="service" placeholder="what service do they offer">
    </div>

    <div class="form-group">
       <label for="post_tags">Joobseeker Tags</label>
        <input type="text" class="form-control" name="tags" placeholder="this is for serching">
    </div>
    <div class="form-group">
       <label for="post_tags">Joobseeker Availability</label>
        <input type="text" class="form-control" name="Availability" placeholder="Active or non Active">
        </div>

     <div class="form-group">
        <input class="btn btn-primary" type="submit" name="create_jobseeker" value="Post">
    </div>
</form>
</div>

<h2>Your new listing will be added to the button of the table above</h2>
<a class="btn btn-primary download-button" href="adminview.php">Click here to view Your new post</a>
