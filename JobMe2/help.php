
<?php  include "Includes/head.php";?>

<body>

      <section class="colored-section" id="cta">

        <div class="container-fluid">

<?php  include "Includes/nav.php";?>



<!-- +++++++++++++++++++++++Contact us froms+++++++++++++++++++++++++++++++++++++++++++  -->

<h1>Contact Us</h1>

      <form action=""  method="">
        <img class="mb-4 jobmelogo2" src="images\jobmelogo2.png" >
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">firstname</label>
      <input type="text" name="firstname"class="form-control" placeholder="Enter your Firstname" required >
    </div>

    <div class="form-group col-md-6">
      <label for="inputPassword4">lastname</label>
      <input type="text" name="lastname" class="form-control" placeholder="Enter your Lastname" required>
    </div>
  </div>
    <div class="form-group">
      <label for="title">How may we help you</label>
      <textarea class="form-control "name="Description" class="form-control" rows="3">
      </textarea>
   </div>
  <div class="form-group">
    <label for="inputAddress">Email</label>
    <input type="email" name="email" class="form-control" placeholder="Enter your Email" required>
  </div>

  <button type="submit" name="submit" class="btn btn-primary download-button">Send</button>
</form>

<!-- +++++++++++++++++++++++Contact us froms+++++++++++++++++++++++++++++++++++++++++++  -->

  </div>
      </section>

  <footer class="white-section" id="footer">
    <div class="container-fluid">
      <i class="social-icon fab fa-facebook-f"></i>
      <i class="social-icon fab fa-twitter"></i>
      <i class="social-icon fab fa-instagram"></i>
      <i class="social-icon fas fa-envelope"></i>
      <p>© Copyright 2020 Jamal Mahamoud </p>
    </div>
  </footer>

</body>

</html>
