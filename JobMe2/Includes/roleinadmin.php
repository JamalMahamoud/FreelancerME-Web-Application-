<!-- MOST OF THE FUNCTION DEMONSTRATING CRUD IS IN THE FUNCTION.PHP FILE IN THE Includes FOLDER TO  -->




        <section class="colored-section">
          <div class="container">


<div class="row">

<div class="col-lg-12">
   <h5> You have full control of the website</h5>
  <table class="table table-striped table-dark">
<h1 class="big-heading"> List of a all Role categories </h1>
  <thead>
  <tr>
  <th scope="col">Id</th>
  <th scope="col">Roles</th>
  <th scope="col">Description</th>
  <th>Jobseeker images</th>
  </tr>
  </thead>
  <tbody>
  <?php
    ReadingindustryInTable(); //this is a function for reading from database to the website
                            // it can be found in the FUNCTION.php files in the Includes folder
   ?>
</div>

</div>

     </div>

        </section>
