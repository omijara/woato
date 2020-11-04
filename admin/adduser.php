<?php $title = 'Dashboard | Woato Foundation'; include("header.php"); ?>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet" />
  <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />


  <!-- PLUGINS CSS STYLE -->
  <link href="assets/plugins/nprogress/nprogress.css" rel="stylesheet" />

  

  <!-- SLEEK CSS -->
  <link id="sleek-css" rel="stylesheet" href="assets/css/sleek.css" />

  <!-- FAVICON -->
  <link href="assets/img/favicon.png" rel="shortcut icon" />

  

  <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="assets/plugins/nprogress/nprogress.js"></script>
</head>

</head>
  <body class="" id="body">
          <div class="container d-flex flex-column justify-content-between vh-100">
          <div class="row justify-content-center mt-5">
            <div class="col-xl-5 col-lg-6 col-md-10">
              <div class="card">
                <div class="card-header bg-primary">
                  <div class="app-brand">
                    <a href="/index.html">
                      <svg class="brand-icon" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid" width="30"
                        height="33" viewBox="0 0 30 33">
                        <g fill="none" fill-rule="evenodd">
                          <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
                          <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                        </g>
                      </svg>
                      <span class="brand-name">New User Creation</span>
                    </a>
                  </div>
                </div>
                <div class="card-body p-5">
                  <h4 class="text-dark mb-5">Add User</h4>

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

                 <a>
                 <?php if (isset($_GET['message'])) { ?>

                    <div style="background: #f44336;color: white;"  id="toastmsg" class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?php echo $_GET['message'];?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>

                  <?php } ?>
                 </a>

                  <form action="check.php" method="post" enctype="multipart/form-data" data-parsley-validate>
                    <div class="row">
                      <div class="form-group col-md-12 mb-4">
                        <input type="text" class="form-control input-lg" name="first_name" aria-describedby="nameHelp" placeholder="First Name" required="">
                      </div>
                      <div class="form-group col-md-12 mb-4">
                        <input type="text" class="form-control input-lg" name="last_name" aria-describedby="nameHelp" placeholder="Last Name" required="">
                      </div>
                         <div class="form-group col-md-12 mb-4">
                        <input type="text" class="form-control input-lg" name="username" aria-describedby="nameHelp" placeholder="Userame" required="">
                      </div>
                      <div class="form-group col-md-12 mb-4">
                        <input type="email" class="form-control input-lg" name="email" data-parsley-type="email" aria-describedby="emailHelp" placeholder="E-mail" required="">
                      </div>
                      <div class="form-group col-md-12 mb-4 ">
                        <input type="password" class="form-control input-lg" name="pword" placeholder="Password" required="">
                      </div>
                      <div class="form-group col-md-12 mb-4">
                        <select name="user_role" class="form-control" aria-describedby="nameHelp" required="">
                          <option value="">Select Role</option>
                          <option value="admin">Admin</option>
                          <option value="user">User</option>
                          <option value="editor">Editor</option>
                        </select>

                      </div>
                        <div class="form-group col-md-12 mb-4 ">
                          <label>Choose an image</label>
                        <input type="file"  name="img" required="">
                      </div>
                        <button type="submit" class="btn btn-lg btn-primary btn-block mb-4">Create</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
      </body>


<?php include("footer.php"); ?>

<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/parsley.min.js"></script>