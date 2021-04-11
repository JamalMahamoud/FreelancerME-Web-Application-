<?php  include "Includes/head.php";?>

<?php // NOTE: this page display categories joobseker base on thier industry this is different from the jobpage.php ?>
<body>




      <section class="colored-section" id="title">


        <div class="container-fluid">


  <?php  include "Includes/nav.php";?>
          <!-- Title -->
    <?php
    // ++++++++++++++++this display the industry dynamic picture and data such as name and description++++++++++++++++++++++++//
          if (isset($_GET['category'])) {
          $linkID_VAr = $_GET['category'];
        }?>
<?php
        $query = "SELECT * FROM industry WHERE Role_ID = $linkID_VAr";

        $selectAllrolesQuery = mysqli_query($connection,$query);
  while($row = mysqli_fetch_assoc($selectAllrolesQuery)) {
           $role_title = $row['role_title'];
           $role_id = $row['role_id'];
           $role_image = $row['role_image'];
           $role_description = $row['role_description'];

         ?>
          <div class="row">
            <div class="col-lg-6">
              <h2><?php echo  $role_description  ?></h2>
          </div>
              <div class="col-lg-6">
                <img src="images\<?php echo  $role_image ; ?>" class="card-img-top" alt="...">
            </div>

            <h1><?php echo$role_title?></h1>
          </div>

        </div>
    <!-- // ++++++++++++++++this display the industry dynamic picture and data such as name and description++++++++++++++++++++++++// -->
      </section>




        <section class="white-section" id="pricing">


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



<div class="container-fluid">

  <div class="row">
    <?php } ?>
<?php
 // ***************************the role_id is use to relate  a joobser to a industry********************//
    $query = "SELECT * FROM Jobseeker WHERE Role_ID = $linkID_VAr";
            $select_all_posts_query = mysqli_query($connection,$query);

            while($row = mysqli_fetch_assoc($select_all_posts_query)) {
              $Role_ID = ['Role_ID'];
            $jobseeker_Id = $row['jobseeker_Id'];
            $jobseeker_name= $row['jobseeker_Name'];
            $jobseker_wage = $row['jobseker_wage'];
            $jobseeker_availability = $row['jobseeker_availability'];
            $jobseeker_image = $row['jobseeker_image'];
          $jobseeke_service = $row['jobseeke_service'];
          $jobseeker_description = $row['jobseeker_description'];
        $jobseker_wage = $row['jobseker_wage'];
 // ***************************the role_id is use to relate  a joobser to a industry********************//
?>


          <div class="card cad pricing-column" >
      <img src="images\<?php echo $jobseeker_image; ?>" class=" cardimage" width="100" alt="...">
      <div class="card-body">
        <h5>
<a class="card-title" href="job.php?linkID= <?php echo   $jobseeker_Id ?>"> <em><?php  echo $jobseeker_name ?></em></a>
        </h5>
        <p class="card-text">  <em><?php echo $jobseeker_description  ?></em></p>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item"> <li class="list-group-item" > <h5>Availabilty</h5> </li><em></em></li>
        <li class="list-group-item">  <li class="list-group-item"> <h5>Wages</h6></li><em><?php echo $jobseker_wage ?></em> </li>
        <li class="list-group-item"><li class="list-group-item" ><h5>Offers</h5></li> <em><?php echo $jobseeke_service ?></em></li>
      </ul>
      <div class="card-body">
        <a class="btn btn-primary download-buttonsignin" href="job.php?linkID=<?php echo   $jobseeker_Id ?>">Book <em><?php echo $jobseeker_name ?></em></a>
      </div>

      </div>
<?php
    }

     ?>


    </div>


    </section>


    <!-- Footer -->
    <?php  include "Includes/footer.php";?>
