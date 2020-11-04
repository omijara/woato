   <?php $title = 'Contact | Woato Foundation'; include("header.php"); ?>

   <div class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mb-5">
            <h2 class="text-black section-title text-uppercase">Contact Us</h2>
            <a>
                  <?php if (isset($_GET['msg0'])) { ?>

                    <div style="background: #23AC7F;color: white;"  id="toastmsg" class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo $_GET['msg0'];?>
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
            <form action="contac_check.php" method="post" data-parsley-validate>
              <div class="form-group row">
                <div class="col-md-6 mb-4 mb-lg-0">
                  <label for="">Full Name:</label>
                  <input type="text" class="form-control" name="name" data-parsley-length="[3, 16]" required="">
                </div>
                <div class="col-md-6">
                  <label for="">Email:</label>
                  <input type="email" class="form-control" name="email" data-parsley-type="email" required="">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <label for="">Mobile Number:</label>
                  <input data-parsley-type="digits" class="form-control" name="mobile" data-parsley-length="[11, 11]" data-parsley-pattern="\d+" required="">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <textarea name="msg" class="form-control" placeholder="Write your message." cols="30" rows="10" required=""></textarea>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-6 ml-auto">
                  <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Send Message" name="submit">
                </div>
              </div>
            </form>
          </div>
          
        </div>
      </div>
    </div>

    <?php include 'footer.php';?>