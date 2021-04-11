
<?php  include "Includes/head.php";?>

<body>


      <!-- Nav Bar -->
      <section class="colored-section" id="title">

        <div class="container-fluid">

          <!-- Nav Bar -->
    <?php  include "Includes/nav.php";?>



    <?php
    //bookedID is how booking is related to a jobseeker //

    if (isset($_GET['bookID'])) {
    $booked = $_GET['bookID'];

    }
    // every time a data base need to be realte to a jobseeker we use the booked varibale

    $query = "SELECT * FROM Jobseeker WHERE  jobseeker_Id = $booked";
            $select_all_posts_query = mysqli_query($connection,$query);

            while($row = mysqli_fetch_assoc($select_all_posts_query)) {
            $jobseeker_Id = $row['jobseeker_Id'];
            $jobseeker_name= $row['jobseeker_Name'];
            $jobseker_wage = $row['jobseker_wage'];
            $jobseeker_availability = $row['jobseeker_availability'];
            $jobseeker_image = $row['jobseeker_image'];
          $jobseeke_service = $row['jobseeke_service'];
          $jobseeker_description = $row['jobseeker_description'];
        $jobseker_wage = $row['jobseker_wage'];

?>

<div class="container">

<div class="row">

<div class="col-lg-6">

  <h1 class="big-heading"> Thanks for Booking <em><?php echo "$jobseeker_name "?></em>   </h1>

</div>


<div class="pricing-column col-lg-6">

<h4>You will Receive a confirmation email soon</h4>
<h6>If you need help , cantact us using the contact us page </h6>
  <i class=" fas fa-thumbs-up fa-4x"></i>
  </div>
</div>
</div>

</section>

<?php
    }

     ?>

     <?php


       $query = "SELECT * FROM Booking WHERE Booking_jobseeker_id = $booked";
               $select_all_posts_query = mysqli_query($connection,$query);
               while($row = mysqli_fetch_assoc($select_all_posts_query)) {
               $Bookind_id = $row['Bookind_id'];
               $Booking_jobseeker_id= $row['Booking_jobseeker_id'];
               $Booking_customer = $row['Booking_customer'];
               $Booking_email = $row['Booking_email'];
                 $Booking_desc = $row['Booking_desc'];
                 $Booking_status = $row['Booking_status'];
                 $Booking_date = $row['Booking_date'];

               }

     ?>

<section class="white-section">

  <div class="container" >
  <h1>Booking details</h1>
  <div class="row">

    <div class="col-lg-6">
      <img src="images\<?php echo $jobseeker_image; ?>" width="300" height="371"alt="...">
    </div>

    <div class="col-lg-6">
        <h5>Booking Summary</h5>
      <div class="container">
        <div class="row">
        <div class="col-lg-8">
          <h6>Booking Number</h6>
          <h6>payment details</h6>
          <h6>service</h6>
        </div>

        <div class="col-lg-4">
           <em><?php echo $Bookind_id ?> </em> <br>
            <em><?php echo $jobseker_wage ?> </em> <br>
             <em><?php  echo $jobseeke_service ?></em> <br>
        </div>

        </div>
        <hr>
        <div class="row">
        <div class="col-lg-8">
          <h6>Booking status</h6>
        <h6>Staff Booked name</h6>
            <h6>Starting date</h6>
        </div>

        <div class="col-lg-4">
            <em><?php echo $Booking_status ?> </em> <br>
          <em><?php echo $jobseeker_name ?> </em> <br>
          <em><?php  echo $Booking_date ?></em> <br>
        </div>



        </div>
      </div>



  </div>

  </div>
<hr>
  <div class="row">
    <div class="col-lg-12">

  <h1>Your details</h1>
  <div class="container">
    <div class="row">
      <div class="col-lg-6">

        <h6>Name </h6>
      <h6>Email</h6>

      </div>
      <div class="col-lg-6">

        <em><?php echo $Booking_customer?> </em> <br>
        <em><?php  echo  $Booking_email ?></em> <br>
      </div>

    </div>

  </div>
    </div>

    </div>

    </section>


    <!-- Footer -->
    <?php  include "Includes/footer.php";?>
