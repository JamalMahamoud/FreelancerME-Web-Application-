<?php  include "Includes/head.php";?>

<body>



      <!-- Nav Bar -->
      <section class="colored-section" id="title">

        <div class="container-fluid">

          <!-- Nav Bar -->
    <?php  include "Includes/nav.php";?>

          <!-- Title -->
          <div class="row">

            <div class="col-lg-6">
              <h1 class="big-heading">Hire on-demand staff based on their location, availability and experience </h1>
            </div>
                <?php  include "Includes/search.php";?>



          </div>


          <?php if (isset($_SESSION ['username'])) {
            ?>
            <div class="alert alert-danger" role="alert">
    Thanks for loging in <a href="jobpage.php" class="alert-link">Click here to view all joobseekers</a>
    </div>
          <?php
          }
          else {
            ?>
            <div class="alert alert-danger" role="alert">
    You are not login <a href="sign.php" class="alert-link"> Click here to login</a>
    </div>
    <?php
          }?>
        </div>

      </section>




        <section class="white-section" id="pricing">

<div class="container-fluid">

  <div class="row">
    <?php

    if (isset($_POST['submit'])) {
    $search = $_POST['search'];


    $query = "SELECT * FROM Jobseeker WHERE jobseeker_tag LIKE '%$search%'";

    $sq = mysqli_query($connection, $query);
    if (!$sq) {
    die("Conection to data case faile".mysql_error($connection));
    }



    $resultFromsearch = mysqli_num_rows($sq);

    if ($resultFromsearch  == 0) {
      echo '  <h3 class="big-heading">No Match Found</h3>';
      echo '  <h3 class="big-heading">Please try again using Job role titles such as
        cleanner, plumber, beauty and electrican </h3>';;

    } else {



              while($row = mysqli_fetch_assoc(  $sq)) {
              $jobseeker_Id = $row['jobseeker_Id'];
              $jobseeker_name= $row['jobseeker_Name'];
              $jobseker_wage = $row['jobseker_wage'];
              $jobseeker_availability = $row['jobseeker_availability'];
              $jobseeker_image = $row['jobseeker_image'];
            $jobseeke_service = $row['jobseeke_service'];
            $jobseeker_description = $row['jobseeker_description'];
          $jobseker_wage = $row['jobseker_wage'];

    ?>
            <div class="card cad pricing-column" >
        <img src="images\<?php echo $jobseeker_image; ?>" class="card-img-top cardimage" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?php echo $jobseeker_name ?></h5>
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






    }

    }

?>





    </div>


    </section>


    <!-- Footer -->
    <?php  include "Includes/footer.php";?>
