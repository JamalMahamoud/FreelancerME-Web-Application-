
 <!--+++++++++++ this include call data from the database and display it in the forms for edithing and resubmmsion ++++++++++++++-->
<?php

 if (isset($_GET['editisclick'])){
  $edithisclick = $_GET['editisclick'];

$query = "SELECT * FROM Jobseeker WHERE  jobseeker_Id =   $edithisclick ";
        $select_all_posts_query = mysqli_query($connection,$query);

}
while($row = mysqli_fetch_assoc($select_all_posts_query)) {
$jobseeker_Id = $row['jobseeker_Id'];
$jobseeker_name= $row['jobseeker_Name'];
$jobseeker_description = $row['jobseeker_description'];
$jobseker_wage = $row['jobseker_wage'];
  $jobseeke_service = $row['jobseeke_service'];
  $jobseeker_availability = $row['jobseeker_availability'];
  $jobseeker_image = $row['jobseeker_image'];
  $jobseeker_tag = $row['jobseeker_tag'];
  $Jobseeker_RoleID = $row['Role_ID'];
}
?>

<?php if(isset($_POST['update_jobseeker'])) {

  $Jobseeker_Name = $_POST['Name'];
  $Jobseeker_Description = $_POST['Description'];
  $Jobseeker_RoleID = $_POST['Role_ID'];
  $Wages = $_POST['wages'];
  $Service = $_POST['service'];
  $Tags = $_POST['tags'];
  $Availability = $_POST['Availability'];

  $query = "UPDATE jobseeker SET jobseeker_Name = '$Jobseeker_Name', jobseeker_description = '$Jobseeker_Description', Role_ID ='$Jobseeker_RoleID',jobseker_wage ='$Wages', jobseeke_service='$Service', jobseeker_tag='$Tags', jobseeker_availability='$Availability' WHERE 	jobseeker_Id='$edithisclick'";
  $edit = mysqli_query($connection,$query);

connectioncheck($edit);  // this function check if connect to database//
echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
  <strong>User Edited successfully! </strong> To view your new adding click here <a href='admin.php?source=viewjobseekers'>View Jobseekers</a>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";
}?>




<form action="" method="post" enctype="multipart/form-data">


<div class="form-group">
       <label for="title">Edit Jobseeker Name</label>
        <input value="<?php echo $jobseeker_name; ?>" type="text" class="form-control" name="Name">
</div>

    <div class="form-group">
      <label for="title">Enter Jobseeker Description</label>
      <textarea class="form-contro"name="Description" class="form-control" rows="6" cols="120"> <?php echo $jobseeker_description; ?></textarea>
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
       <label for="post_tags"> Edit Joobseeker wages</label>
        <input value="<?php echo $jobseker_wage; ?>"type="text" class="form-control" name="wages">
    </div>

    <div class="form-group">
       <label for="post_tags">Edit Joobseeker service</label>
        <input value="  <?php echo $jobseeke_service; ?>"type="text" class="form-control" name="service">
    </div>

    <div class="form-group">
       <label for="post_tags">Edit Joobseeker Tags</label>
        <input value="<?php echo $jobseeker_tag; ?>" type="text" class="form-control" name="tags">
    </div>
    <div class="form-group">
       <label for="post_tags">Edit Joobseeker Availability</label>
        <input value="<?php echo $jobseeker_availability;  ?>" type="text" class="form-control" name="Availability">
        </div>

     <div class="form-group">
        <input class="btn btn-primary" type="submit" name="update_jobseeker" value="update">
    </div>

</form>
