<!-- ++++++++++++++++++++++++++++++all includes can be found in the include folder++++++++++++++++++++++++++++++++++++++ -->

<?php  include "includes/adminhead.php";?>

<body>

  <section class="colored-section">

<div class="container">

  <?php  include "Includes/adminnav.php";?>    <!-- admin have a different nav to to the index -->
  <?php include "Includes/adminbanner.php"?>

</body>
  <?php

  if (isset($_GET['source'])) {
    $source = $_GET['source']; // this source is a pass in the url when include a page //


  }
  else {
  $source = "";
  }

  switch ($source) {
  case'Post_jobseeker':      // this case are pass to the buttons on the admingpage
 include "Includes/Post_jobseeker.php";

      break;

    case  'viewjobseekers':
 include "Includes/Jobseeker_table.php" ;
        break;

    case  'edit_Jobseekers':
include "Includes/edit_Jobseekers.php" ;
        break;
  case 'add_new_user':
 include "Includes/post_new_users.php" ;
      break;

    case 'view_user' :
include "Includes/view_users.php";
      break;

      case  'edit_user':
  include "Includes/edit_user.php";
        break;

        case  'booking':
    include "Includes/booking.php";
          break;
        case  'review':
    include "Includes/review.php";
          break;

          case  'industry':
   include "Includes/roleinadmin.php" ;
            break;
 // booking data base is display in the admin default//
    default:
    include "Includes/booking.php" ;  
      break;
  }
   ?>
   <h4>If you requre any assistans please email jamal.mahamoud@mail.bcu.ac.uk</h4>
