
<?php  include "Includes/head.php";?>


<body>

      <!-- Nav Bar -->
      <section class="colored-section" id="title">

        <div class="container-fluid">

          <!-- Nav Bar -->
  <?php  include "Includes/allnav.php";?>
    <!-- Nav Bar -->

    <?php
    if (isset($_GET['linkID'])) { //Linkid is assign to a button on the jobpage//
    $linkID_VAr = $_GET['linkID'];

    }

$query = "SELECT * FROM Jobseeker WHERE  jobseeker_Id = $linkID_VAr";
$select_all_posts_query = mysqli_query($connection,$query);

while($row = mysqli_fetch_assoc($select_all_posts_query)) {
$jobseeker_Id = $row['jobseeker_Id'];
$jobseeker_name= $row['jobseeker_Name'];
$jobseker_wage = $row['jobseker_wage'];
$jobseeker_availability = $row['jobseeker_availability'];
$jobseeker_image = $row['jobseeker_image'];
$jobseeke_service = $row['jobseeke_service'];
$jobseeker_description = $row['jobseeker_description'];
$jobseker_wage = $row['jobseker_wage'];}

?>
<h1 class="big-heading"> You are booking  <?php echo   "<h1></h1>$jobseeker_name "?> a  <?php echo $jobseeke_service ?> </h1>
<div class="row">

  <div class="col-lg-6">
<img src="images\<?php echo $jobseeker_image; ?>" class="cardimage" alt="...">
</div>

<div class="col-lg-6">
  <table class="table table-dark">
  <thead>
    <tr>

      <th scope="col"> Current Availabilty</th>
      <th scope="col">How much they charge </th>
      <th scope="col">service</th>
    </tr>
  </thead>
  <tbody>
    <tr>

      <td><?php  echo $jobseeker_availability ?></td>
      <td> <?php echo $jobseker_wage ?></td>
      <td> <?php echo $jobseeke_service ?></td>

    </tr>


  </tbody>
</table>

</div>


</div>

</section>


<?php if(isset($_POST['make_booking'])){
$linkID_VAr = $_GET['linkID'];
$Booking_customer = $_POST['Booking_customer'];
$Booking_email = $_POST['Booking_email'];
$Booking_desc= $_POST['Booking_desc'];
$Booking_date = $_POST['Booking_date'];

$query = "INSERT INTO Booking ( Booking_jobseeker_id, Booking_customer, Booking_email,Booking_desc, Booking_status, Booking_date) VALUES ('$linkID_VAr',
'$Booking_customer','$Booking_customer''$Booking_email' ,'$Booking_desc','approve','$Booking_date')";

 $sending_review_query = mysqli_query($connection,$query);
if (!$sending_review_query) {
  die("connection failed".mysqli_error($connection));
}
header("Location: Booked.php?bookID=$jobseeker_Id");

} ?>

<section class="white-section" id="pricing">

<div class="container" >

<div class="row">
  <div class="col-lg-12">


  <!-- +++++++++++++ Booking forms  ++++++++++++++++++++++++++++++++++++++++++++++++++-->
    <form action="" method="post">
      <h1>Make a Booking</h1>
    <div class="form-group">
           <label for="title">Enter Your name</label>
            <input  type="text" class="form-control" name="Booking_customer">

          </div>
        <div class="form-group">
           <label for="post_tags">Enter Your Email</label>
            <input type="text" class="form-control" name="Booking_email" required>

       <div class="form-group">
         <label for="">Any special request</label>
         <textarea class="form-control" name="Booking_desc" rows="3" placeholder="Tell us what you want staff to do example uniform"></textarea>

       </div>
       <div class="form-group">
          <label for="post_tags">Enter Start date </label>
           <input type="date" class="form-control" name="Booking_date" placeholder="this the date your want your staff to start" required>

       </div>


         <div class="form-group">
  <input class="btn btn-primary download-button" type="submit"  name="make_booking" value="Book" >
        </div>
    </form>
  <!-- +++++++++++++ Booking forms ends ++++++++++++++++++++++++++++++++++++++++++++++++++-->


    <a  href='Booked.php?bookID=<?php echo
     $jobseeker_Id ?>'>Book <?php echo $jobseeker_name ?></a>
    </section>



    <!-- Footer -->
    <?php  include "Includes/footer.php";?>
