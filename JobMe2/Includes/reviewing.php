

<?php if(isset($_POST['create_review'])){
  $linkID_VAr = $_GET['linkID'];


  $review_customer = $_POST['review_customer'];
  $review_email = $_POST['review_email'];
    $review_comment= $_POST['review_comment'];

$query = "INSERT INTO reviews ( review_jobseeker_id, review_customer, review_email, review_comment, review_status, review_date) VALUES ('$linkID_VAr',
  '$review_customer','$review_customer''$review_email' ,'$review_comment','approve',now())";

 $sending_review_query = mysqli_query($connection,$query);
if (!$sending_review_query) {
  die("connection failed".mysqli_error($connection));
}
echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
  <strong>Review Created successfully!</strong>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button>
</div>";
} ?>




<form action="" method="post">
  <h1>Leave a review</h1>
<div class="form-group">
       <label for="title">Enter Your name</label>
        <input  type="text" class="form-control" name="review_customer">

      </div>
    <div class="form-group">
       <label for="post_tags">Enter Your Email</label>
        <input type="text" class="form-control" name="review_email">
    </div>
    <div class="form-group">
      <label for="title">Enter review here</label>

      <textarea name="review_comment"  class="form-control" rows="3" placeholder="Tell us how Did, what you liked and didn't like"></textarea>
   </div>

     <div class="form-group">
        <input class="btn btn-danger download-button" type="submit" name="create_review" value="Post review">
    </div>
</form>
