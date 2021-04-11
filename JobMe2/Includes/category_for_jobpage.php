



  <section class="white-section" id="pricing">

<div class="container">
<h1 class="big-heading"> Select one to Search through staff base on their industries,</h1>


      <?php
         $query = "SELECT * FROM industry";
         $selectAllrolesQuery = mysqli_query($connection,$query);

         while($row = mysqli_fetch_assoc($selectAllrolesQuery)) {
            $role_title = $row['role_title'];
            $role_id = $row['role_id'];
            $role_image = $row['role_image'];
            $role_description = $row['role_description'];

          ?>

          <?php   echo "<a class='btn btn-primary download-buttonsignin' href='jobpaget4.php?category=$role_id'>$role_title</a>" ?>

          <?php
           }
           ?>



    </div>

  </section>
