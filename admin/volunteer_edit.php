<?php $title = 'Volunteer Update| Woato Foundation'; include("header.php"); ?>
  <link rel="stylesheet" href="../css/parsley.css">

<?php
$ID = $_GET["id"];

$link = mysqli_connect("sql103.epizy.com", "epiz_25525172", "Up0MATupvPhvg", "epiz_25525172_woato");

$query = "SELECT * FROM volunteer_list where id = $ID";

$sql = mysqli_query($link, $query);

while ($rows = mysqli_fetch_array($sql)) {

?>

	<div class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mb-5">
          	<br>
            <h2 class="text-black section-title text-uppercase">Volunteer Info Update</h2>

          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-6 mb-5">
            <form action="volunteer_update.php" method="get" data-parsley-validate>
              <div class="form-group row">
                  <input type="hidden" class="form-control" name="id" value="<?php echo $rows["id"]?>">
                <div class="col-md-6 mb-4 mb-lg-0">
                  <input type="text" class="form-control" placeholder="First name" value="<?php echo $rows["first_name"]?>" name="fname" data-parsley-length="[2, 12]" required="">
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="Last name" value="<?php echo $rows["last_name"]?>" name="lname" data-parsley-length="[2, 12]" required="">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="email" class="form-control" placeholder="E-mail" value="<?php echo $rows["email"]?>" name="email" data-parsley-type="email" required="">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="Mobile Number" value="<?php echo $rows["mobile"]?>" name="mobile" data-parsley-length="[11, 11]" data-parsley-pattern="\d+" required="">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="Institute" value="<?php echo $rows["institute"]?>" name="institute" data-parsley-length="[3, 35]" required="">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="Present Address" value="<?php echo $rows["paddress"]?>" name="paddress" data-parsley-length="[5, 20]" required="">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6 ml-auto">
                  <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Update">
                </div>
              </div>
            </form>
          </div>
          
        </div>
      </div>
    </div>

<?php

}

?>

<?php include("footer.php"); ?>

<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/parsley.min.js"></script>