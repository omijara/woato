<?php
//$ID = $_GET["id"];

require_once('../dbcon.php');

$query = "SELECT id, first_name, last_name, email, mobile, institute, paddress, message FROM volunteer_list";

$sql = mysqli_query($link, $query);


?>  
      <!--
          ====================================
          ——— HEADER Start
          ===================================== -->
           
      <?php $title = 'Volunteer List | Woato Foundation'; include("header.php"); ?>

      <div class="content-wrapper">
        <div class="content">         
          <div class="breadcrumb-wrapper">
      <h1>Tables</h1>
                
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb p-0">
            <li class="breadcrumb-item">
              <a href="index.html">
                <span class="mdi mdi-home"></span>                
              </a>
            </li>
            <li class="breadcrumb-item">
              data-tables
            </li>
            <li class="breadcrumb-item" aria-current="page">register-data-table</li>
          </ol>
        </nav>

              </div>

              <div class="row">
                <div class="col-12">
                  <div class="card card-default">
                    <div class="card-header card-header-border-bottom d-flex justify-content-between">
                      <h2>Volunteer Sign-Up List</h2>

                  <a>
                  <?php if (isset($_GET['msg1'])) { ?>

                    <div style="background: #f44336;color: white;"  id="toastmsg" class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?php echo $_GET['msg1'];?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>

                  <?php } ?>

                  <?php if (isset($_GET['msg2'])) { ?>

                    <div style="background: #23AC7F;color: white;"  id="toastmsg" class="alert alert-success alert-dismissible fade show" role="alert">
                    <?php echo $_GET['msg2'];?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>

                  <?php } ?>
                  </a>
                 
                  <form method="post" action="export.php" align="right">  
                  <input type="submit" name="export" value="Export CSV" class="btn btn-success" />
                  <style>input {
                       right: 100px;
                      }</style>  
                  </form>

                    </div>

                 


                    <div class="card-body">
                      <div class="responsive-data-table">
                        <table id="responsive-data-table" class="table dt-responsive nowrap" style="width:100%">
                          

                          <thead>
                            <tr>
                              <th>ID</th>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Mobile</th>
                              <th>Institute</th>
                              <th>Address</th>
                              <th>About</th>
                              <th>Action</th>
                            </tr>
                          </thead>

                          <tbody>
                  <?php 

                    while ($rows = mysqli_fetch_array($sql)) {

                  ?>
                  <tr>
                    <td>
                        <?php echo $rows["id"]. "</br>"; ?>
                    </td>
                    <td>
                        <?php 
                        echo $rows["first_name"]." ". $rows["last_name"];
                        ?>
                    </td>
                    <td>
                      <?php echo $rows["email"]. "</br>"; ?>
                    </td>
                    <td>
                    <?php echo $rows["mobile"]. "</br>"; ?>
                    </td>
                    <td>
                    <?php echo $rows["institute"]. "</br>"; ?>
                    </td>
                    <td>
                    <?php echo $rows["paddress"]. "</br>"; ?>
                    </td>
                    <td>
                    <?php echo $rows["message"]. "</br>"; ?>
                    </td>
                    <td>
                    <!-- Button trigger modal -->
                    <a href="volunteer_edit.php?id=<?php echo $rows["id"]?>"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="mdi mdi-square-edit-outline"></i>
                    </button>

                    <?php  echo "<a onClick=\"javascript: return confirm('Please confirm deletion');\" href='volunteer_list_delete.php?id=".$rows["id"]."'>"; ?><button type="button" class="btn btn-danger btn-xs"><i class="mdi mdi-trash-can-outline"></i></button></a>
   
                   </td>
                  </tr>
                <?php 
              }?>
                          </tbody>
                        </table>


                      </div>
                    </div>
                  </div>
                </div>


  

    </div>
  </div>

<?php include("footer.php"); ?>

