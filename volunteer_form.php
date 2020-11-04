<?php $title = 'Volunteer | Woato Foundation'; include("header.php"); ?>
   <div class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mb-5">
            <h2 class="text-black section-title text-uppercase">Volunteer Sign Up</h2>
            <a>
                  <?php if (isset($_GET['msg'])) { ?>

                    <div style="background: #23AC7F;color: white;"  id="toastmsg" class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo $_GET['msg'];?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>

                  <?php } ?>

              </a>

          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-6 mb-5">
            <form action="volunteer_validation.php" method="post" data-parsley-validate>
              <div class="form-group row">
                <div class="col-md-6 mb-4 mb-lg-0">
                  <input type="text" class="form-control" placeholder="First name" name="fname" data-parsley-length="[2, 12]" required="">
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="Last name" name="lname" data-parsley-length="[2, 12]" required="">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <input type="email" class="form-control" placeholder="Email address" name="email" data-parsley-type="email" required="">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="Mobile Number" name="mobile" data-parsley-length="[11, 11]" data-parsley-pattern="\d+" required="">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="Institute Name" name="institute" data-parsley-length="[3, 35]" required="">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="Present address" name="paddress" data-parsley-length="[5, 20]" required="">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-12">
                  <textarea name="msg" id="" class="form-control" placeholder="Tell us about you." cols="30" rows="10" data-parsley-length="[200, 1000]" required=""></textarea>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6 ml-auto">
                  <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Sign Up">
                </div>
              </div>
            </form>
          </div>
          
        </div>
      </div>
    </div>

    <?php include 'footer.php';?>