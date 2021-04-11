
<h1>Posted reviews </h1>
            <?php
            $query = "SELECT * FROM reviews WHERE review_jobseeker_id =   $linkID_VAr";
                    $select_all_posts_query = mysqli_query($connection,$query);
                    while($row = mysqli_fetch_assoc($select_all_posts_query)) {
                    $review_id = $row['review_id'];
                    $review_jobseeker_id= $row['review_jobseeker_id'];
                    $review_customer = $row['review_customer'];
                    $review_email = $row['review_email'];
                      $review_comment= $row['review_comment'];
                      $review_status = $row['review_status'];
                      $review_date= $row['review_date'];

          ?>


                  <div>


    <i class="fas fa-users fa-4x"></i>
                      <div class="media-body">
                          <h4 class="media-heading"><?php echo $review_customer ?>
                              <small><?php echo $review_date ?></small>
                          </h4>
                          <?php echo $review_comment ?>
                      </div>
                  </div>
                  <hr>
<?php } ?>
