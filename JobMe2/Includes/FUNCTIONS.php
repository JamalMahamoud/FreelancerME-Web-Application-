<?php

function ReadingindustryInTable() {
//this function call data from teh database in display it in the table//
global $connection;
$query = "SELECT * FROM industry";
$select_categories = mysqli_query($connection,$query);
while($row = mysqli_fetch_assoc($select_categories)) {
$role_id = $row['role_id'];
$role_title = $row['role_title'];
$role_description = $row['role_description'];
$role_image = $row['role_image'];

//the table heading can be found in the includs file VIEWindustryADMIN.php//

    echo "<tr>";
    echo "<td>{$role_id}</td>";
    echo "<td>{$role_title}</td>";
    echo "<td>$role_description</td>";
    echo "<td>$role_image</td>";
    echo "</tr>";
 }

}





function connectioncheck($isconnected){
  // this function is use to to check if a connection to database
  global $connection;
  if(!$isconnected) {
    die("connection to database failed    " .mysqli_error($connection));
  }

}




function ReadingAllJobseekers(){
// this function select a joobseker from database and loop through them to display data in the database table
    global $connection;
  $query = "SELECT * FROM Jobseeker";
          $select_all_posts_query = mysqli_query($connection,$query);
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
            echo "<tr>";
            echo"<th scope='row'>$jobseeker_Id</th>";
            echo" <td>$jobseeker_name</td>";
            echo" <td>$jobseeker_description</td>";
            echo"<td>$jobseker_wage</td>";
            echo"<td>$jobseeke_service </td>";



            $query = "SELECT * FROM industry WHERE Role_ID = '$Jobseeker_RoleID' ";
            $selectAllrolesQuery = mysqli_query($connection,$query);

            while($row = mysqli_fetch_assoc($selectAllrolesQuery)) {
               $role_title = $row['role_title'];
               $role_id = $row['role_id'];
}
            echo"<td> $role_title</td>";
            echo"<td> <img width='100'src='images/$jobseeker_image'alt='see jobpage'></td>";
            echo"<td>$jobseeker_availability</td>";
            echo"<td>  $jobseeker_tag </td>";

              // java scripe to alert before DELETING //
          echo "<td><a onClick=\"javascript: return confirm('Are You Sure you want to delete,This action can not be undo');\" href='admin.php?source=viewjobseekers&jdeleteisclick={$jobseeker_Id}'>Delete</a></td>";
            echo "<td><a href='admin.php?source=edit_Jobseekers&editisclick={$jobseeker_Id}'>Edit</a></td>";
            }
}



function readinguser(){

global $connection;
$query = "SELECT * FROM users";
      $select_all_users_query = mysqli_query($connection,$query);
      while($row = mysqli_fetch_assoc($select_all_users_query)) {
      $user_id = $row['user_id'];
      $user_username= $row['user_username'];
      $user_firstname = $row['user_firstname'];
      $user_lastname= $row['user_lastname'];
        $user_email  = $row['user_email'];
        $user_role = $row['user_role'];

        echo "<tr>";
        echo"<th scope='row'>$user_id</th>";
        echo" <td>$user_username</td>";
        echo" <td>$user_firstname</td>";
        echo"<td>$user_lastname</td>";
        echo"<td>$user_email </td>";
        echo"<td> $user_role</td>";
        echo "<td><a onClick=\"javascript: return confirm('Are You Sure you want to delete,This action can not be undo');\" href='admin.php?source=view_user&udelete={$user_id}'>Delete</a></td>";
        echo "<td><a  href='admin.php?source=edit_user&ueditisclick={$user_id}'>Edit</a></td>";

      }

}


function fetch_users(){
  global $connection;


 $query = "SELECT * FROM users WHERE  user_id =$uedithisclick ";
         $select_all_user_query = mysqli_query($connection,$query);


 while($row = mysqli_fetch_assoc($select_all_user_query)) {
   $user_id = $row['user_id'];
   $user_username= $row['user_username'];
   $user_firstname = $row['user_firstname'];
   $user_lastname= $row['user_lastname'];
     $user_email  = $row['user_email'];
     $user_role = $row['user_role'];
 }

  }




function ReadingAllreviews(){

    global $connection;
  $query = "SELECT * FROM reviews";
          $select_all_posts_query = mysqli_query($connection,$query);
          while($row = mysqli_fetch_assoc($select_all_posts_query)) {
          $review_id = $row['review_id'];
          $review_jobseeker_id= $row['review_jobseeker_id'];
          $review_customer = $row['review_customer'];
          $review_email = $row['review_email'];
            $review_comment= $row['review_comment'];
            $review_status = $row['review_status'];
            $review_date= $row['review_date'];

            echo "<tr>";
            echo"<th scope='row'>$review_id</th>";
            $query = "SELECT * FROM jobseeker WHERE jobseeker_Id = '$review_jobseeker_id' ";
            $selectAllrolesQuery = mysqli_query($connection,$query);

            while($row = mysqli_fetch_assoc($selectAllrolesQuery)) {
               $jobseeker_name = $row['jobseeker_Name'];
             $jobseeker_Id = $row['jobseeker_Id'];
}
            echo" <td>$review_jobseeker_id</td>";
            echo" <td>$review_customer</td>";
            echo" <td>$review_email</td>";
            echo"<td>$review_comment</td>";
            echo"<td>$review_status</td>";
             echo"<td>$review_date</td>";
             echo "<td><a onClick=\"javascript: return confirm('Are You Sure you want to delete,This action can not be undo');\" href=admin.php?rdeleteisclick={$review_id}'>Delete</a></td>";
             echo "<td><a  href='admin.php?source=review&ueditisclick={$review_id}'>Approve</a></td>";
}}


function ReadingAllbooking(){


  //call BOkking dartbase and dsiplay it in a tabke in the admin //

    global $connection;
  $query = "SELECT * FROM Booking";
          $select_all_posts_query = mysqli_query($connection,$query);
          while($row = mysqli_fetch_assoc($select_all_posts_query)) {
          $Bookind_id = $row['Bookind_id'];
          $Booking_jobseeker_id= $row['Booking_jobseeker_id'];
          $Booking_customer = $row['Booking_customer'];
          $Booking_email = $row['Booking_email'];
            $Booking_desc = $row['Booking_desc'];
            $Booking_status = $row['Booking_status'];
            $Booking_date = $row['Booking_date'];

            echo "<tr>";
            echo"<th scope='row'>$Bookind_id</th>";
            $query = "SELECT * FROM jobseeker WHERE jobseeker_Id = '$Booking_jobseeker_id' ";
            $selectAllrolesQuery = mysqli_query($connection,$query);

            while($row = mysqli_fetch_assoc($selectAllrolesQuery)) {
               $jobseeker_name = $row['jobseeker_Name'];
             $jobseeker_Id = $row['jobseeker_Id'];
}

            echo" <td>$Booking_jobseeker_id</td>";
            echo" <td>$Booking_jobseeker_id</td>";
            echo"<td>$Booking_customer</td>";
            echo"<td>$Booking_desc</td>";
            echo"<td>$Booking_status</td>";
            echo"<td>$Booking_date  </td>";
            // java scripe to alert before DELETING //

            echo "<td><a onClick=\"javascript: return confirm('Are You Sure you want to delete,This action can not be undo');\" href='admin.php?bdeleteisclick={$Bookind_id}'>Delete</a></td>";
            echo "<td><a  href='admin.php?source=booking&ueditisclick={$Bookind_id}'>Approve</a></td>";




}

}







?>
