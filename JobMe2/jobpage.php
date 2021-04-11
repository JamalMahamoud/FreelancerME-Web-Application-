
<?php  include "Includes/head.php";?>


<body>
      <!-- Nav Bar -->
      <section class="colored-section" id="title">

        <div class="container-fluid">

          <!-- Nav Bar -->
    <?php  include "Includes/nav.php";?>

          <!-- Title -->
            <h1 class="big-heading">Welcome To JobMe,

            </h4>
          <div class="row">

          <div class="col-lg-6">
              <h1  color="blue" class="user" >Hi <?php echo $_SESSION ['firstname'];?>    <?php echo $_SESSION ['Lastname'];?></h1>
              <div class="row">
                <?php if (!isset($_SESSION ['username'])) {     // checked if user is not loging AND
                                                                //display  javascripe alert//
                  ?>
                  <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Dear Recruiter!</strong> To to book a staff please <a href="sign.php">login</a>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                <?php

                }?>
            </div>
            </div>
                <?php  include "Includes/search.php";?>
          </div>

        </div>

      </section>




        <section class="white-section" id="pricing">
          <?php  include "Includes/category_for_jobpage.php";?>

<div class="container-fluid">



  <div class="row">
    <?php


    $query = "SELECT * FROM Jobseeker ";
            $select_all_posts_query = mysqli_query($connection,$query);

            while($row = mysqli_fetch_assoc($select_all_posts_query)) {
            $jobseeker_Id = $row['jobseeker_Id'];
            $jobseeker_name= $row['jobseeker_Name'];
            $jobseker_wage = $row['jobseker_wage'];
            $jobseeker_availability = $row['jobseeker_availability'];
            $jobseeker_image = $row['jobseeker_image'];
          $jobseeke_service = $row['jobseeke_service'];
          $jobseeker_description = substr ($row['jobseeker_description'],0,50);
        $jobseker_wage = $row['jobseker_wage'];

?>
          <div class="card cad pricing-column" >

      <a  href="job.php?linkID=<?php echo   $jobseeker_Id ?>"><img src="images\<?php echo $jobseeker_image; ?>" class="card-img-top cardimage" alt="..."></a>
      <div class="card-body">
        <h5>
<a class="card-title" href="job.php?linkID=<?php echo   $jobseeker_Id ?>"><?php echo $jobseeker_name ?></a>
        </h5>
        <p class="card-text"><?php echo $jobseeker_description  ?> </p>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item"> <li class="list-group-item" > <h5>Availabilty</h5> </li> <?php  echo $jobseeker_availability ?></li>
        <li class="list-group-item">  <li class="list-group-item"> <h5>Wages</h6></li> <?php echo $jobseker_wage ?></li>
        <li class="list-group-item"><li class="list-group-item" ><h5>Offers</h5></li> <?php echo $jobseeke_service ?></li>
      </ul>
      <div class="card-body">
        <a  href="job.php?linkID=<?php echo   $jobseeker_Id ?>" class="btn btn-primary download-buttonsignin">Book <?php echo $jobseeker_name ?></a>
      </div>
      </div>
<?php
    }

     ?>


    </div>


    </section>


    <!-- Footer -->
    <?php  include "Includes/footer.php";?>
