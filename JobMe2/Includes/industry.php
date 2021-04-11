
  <section class="white-section" id="pricing">

    <h2 class="section-heading">A Staff for every Recruiter </h2>
    <p>Are you a Small buiness owener Looking for a temporary staff </p>
    <p>Are you and individual looking for someone to fix you're brooken door</p>
<div class="container-fluid">
    <div class="row">
      <?php

         $query = "SELECT * FROM industry";
         $selectAllrolesQuery = mysqli_query($connection,$query);

         while($row = mysqli_fetch_assoc($selectAllrolesQuery)) {
            $role_title = $row['role_title'];
            $role_id = $row['role_id'];
            $role_image = $row['role_image'];
            $role_description = $row['role_description'];
          ?>



          <div class="pricing-column col-lg-4 col-md-6">
            <div class="card" "cad">
              <img src="images\<?php echo $role_image; ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"> On-Demind <?php echo   $role_title ?> Staff</h5>
                <p class="card-text"><?php echo $role_description ?></p>
                <?php   echo "<a class='btn btn-primary download-buttonsignin' href='jobpaget4.php?category=$role_id'>$role_title</a>" ?>

              </div>
            </div>
          </div>
          <?php
           }
           ?>
</div>

<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Dear Recruiter!</strong> To to book a staff please <a href="sign.php">login</a>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
    </div>

  </section>
