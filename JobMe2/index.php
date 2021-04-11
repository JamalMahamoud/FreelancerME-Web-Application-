<!-- CREATING AND DELETING ANY DATA CAN BE DONE AT THE ADMIN PAGE IN ADMIN.PHP -->


<!--


Admin login

Username: jay
Password: bcu -->



<?php  include "Includes/head.php";?>
<body>

  <section class="colored-section" id="title">

    <div class="container-fluid">

<!-- ++++++++++++++++++++++++++++++all includes can be found in the include folder++++++++++++++++++++++++++++++++++++++ -->
      <!-- Nav Bar -->
<?php  include "Includes/nav.php";?>
  <?php  include "Includes/banner.php";?>
      <!-- Title -->



      <div class="row">

        <?php if (!isset($_SESSION ['username'])) {     // checked if user is not loging AND
                                                        //display  javascripe alert//
          ?>
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Dear Recruiter!</strong> To to book a staff please <a href="sign.php">login</a>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <?php

        }?>
    </div>

  </section>


  <!-- Features   -->
  <?php  include "Includes/features.php";?>
  <!-- Features -->


<!-- ROLES -->
<?php  include "Includes/industry.php";?>
<!-- ROLES -->

<!-- red seaction -->
  <section class="colored-section" id="cta">
<!-- red seaction -->


    <div class="container-fluid">

      <h3 class="big-heading">Hassle-Free Staffing, Find the right staff for the right job </h3>
<a href="sign.php" class="btn btn-primary download-button">Book your first staff</a>
    </div>
  </section>


  <!-- Footer -->
  <?php  include "Includes/footer.php";?>
