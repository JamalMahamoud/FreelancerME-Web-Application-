
<?php  include "Includes/head.php";?>
 <!-- database connection is include in the head.php the remove repeating to add it to everypage -->


<body>



      <!-- Nav Bar -->
      <section class="colored-section" id="title">

        <div class="container-fluid">

          <!-- Nav Bar -->
  <?php  include "Includes/nav.php";?>
    <!-- Nav Bar -->

    <?php
    if (isset($_GET['linkID'])) {
    $linkID_VAr = $_GET['linkID']; //Linkid is assign to a button on the jobpage//

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
        $jobseker_wage = $row['jobseker_wage'];

?>
<div class="row">

  <div class="col-lg-6">
    <h1> You are viewing  <?php echo   "<h1></h1>$jobseeker_name "?> a  <?php echo $jobseeke_service ?> </h1>
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
<a class="btn btn-danger download-button" href="jobbooking.php?linkID=<?php echo
 $jobseeker_Id ?>">Book <?php echo $jobseeker_name ?></a>

</div>

</div>
</div>
</section>

<section class="white-section">

<div class="container" >
<h1 class="big-heading"><?php echo $jobseeker_name?> </h1>
<div class="row">

  <div class="col-lg-6">
    <img src="images\<?php echo $jobseeker_image; ?>" class="card-img-top" alt="...">

  </div>
  <div class="col-lg-6">
    <h4 class="media-heading">About me</h4>
    <em> <p><?php echo $jobseeker_description  ?> </p></em>
    <hr>
    <h4 class="media-heading">Wages
    </h4>
    <h6> <em><?php  echo $jobseeker_availability ?></em> </h6>
    <hr>
    <h4 class="media-heading">Wages
    </h4>
    <h6> <em><?php  echo $jobseker_wage ?></em> </h6>
    <hr>
    <h4 class="media-heading">Offers
    </h4>
    <h6> <em><?php  echo $jobseeke_service ?></em> </h6>
    <hr>



</div>

</div>
  </div>


<?php
    }

     ?>


    <a class="btn btn-primary download-buttonsignin" href="jobbooking.php?linkID=<?php echo
     $jobseeker_Id ?>">Book <?php echo $jobseeker_name ?></a>
    </section>

<div class="container">
  <div class="row">
  <div class="col-lg-6">
<?php include "Includes/reviewing.php" ?>

  </div>

  <div class="col-lg-6">
      <!-- display review made from databse  -->
<?php include "Includes/review_showing.php" ?>
  <!-- display review made from databse  -->
  </div>
  </div>

</div>

    <!-- Footer -->
    <?php  include "Includes/footer.php";?>
