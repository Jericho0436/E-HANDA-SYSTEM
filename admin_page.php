<?php

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="asset/img/background/login-logo.png" width="200" height="121" rel="icon">  


   <link rel="stylesheet" href="asset/css/dash.css">
   <!-- Montserrat Font -->
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
   <!-- Material Icons -->
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
   <!--Data Tables-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
   <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" >
   <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" >
   <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  

  <title>Admin Page</title>
  <?php @include 'head/links.php'; ?>
</head>
<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">
      <div class="profile">
         <?php @include 'head/profile_admin.php'; ?>
        <h1 class="text-light">System Admin</h1>
        
        <div class="social-links mt-3 text-center">
          <a href="logs/admin_logs.php" class="twitter" title="Activity Logs" style="font-size: 20px"><i class='bx bx-history'></i></a>
        </div>
        
       

      <nav id="navbar" class="nav-menu navbar">
        <ul>
          <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#about" class="nav-link scrollto"><i class="bx bx-spreadsheet"></i> <span>Dashboard</span></a></li>
          <li><a href="#resume" class="nav-link scrollto"><i class="bx bxs-megaphone"></i> <span>Announcements</span></a></li>
          <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-bell-plus"></i> <span>Emergency Hotline</span></a></li>
          <li><a href="#services" class="nav-link scrollto"><i class="bx bxs-ambulance"></i> <span>Respond Teams</span></a></li>
          <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-phone-call"></i> <span>Information</span></a></li>
        </ul>
        <footer>
          <a href="login_form.php"><i class="bx bx-log-out"></i> <span>Logout</span></a>
        </footer>
      </nav>
      <!-- .nav-menu -->
    </div>
  </header>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>Calamba City</h1>
      <p>Barangay, <span class="typed" data-typed-items="Bañadero"></span></p>
    </div>
  </section><!-- End Hero -->

  <!-- Main -->
  <main id="main"><br>
  <main id="about" class="about">
  
      <div class="container">
        <div class="section-title">
          <p class="font-weight-bold"><h2 class="time" id="about">DASHBOARD</h2></p>
          <link rel="stylesheet" href="asset/css/date.css">
          <div class="time">
        <span class="hms"></span>
        <span class="ampm"></span> &nbsp;
        <span class="date"></span>
    </div>
    <script src="asset/js/date.js"></script>
        </div>
<?php require 'class/db_connection.php'; ?>
        <div class="main-cards">

          <div class="card">
            <div class="card-inner">
              <p class="text-primary" style="background-color: #bccfee;">RESIDENTS</p>
              <a href="#portfolio"><span class="material-icons-outlined text-blue" style="font-size: 300%;">group</a></span>
            </div><br>
            <?php
            $dash_tbl_admin_query = "SELECT * FROM tbl_admin";
            $dash_tbl_admin_query_run = mysqli_query($connection, $dash_tbl_admin_query);

            if($tbl_admin_total = mysqli_num_rows($dash_tbl_admin_query_run))
            {
              echo '<h3 data-purecounter-start="0" data-purecounter-end='.$tbl_admin_total.' data-purecounter-duration="1" class="purecounter">','</h3>';
            }
            else
            {
              echo '<h6 class="mb-0"> No Data </h6>';
            }

            ?> 
          </div>

          <div class="card">
            <div class="card-inner">
              <p class="text-primary" style="background-color: #f5b74f;">VEHICLES</p>
              <a href="#"><span class="material-icons-outlined text-orange" style="font-size: 300%;">support</a></span>
            </div><br>
            <?php
            $dash_tbl_admin_query = "SELECT * FROM tbl_vehicles";
            $dash_tbl_admin_query_run = mysqli_query($connection, $dash_tbl_admin_query);

            if($tbl_admin_total = mysqli_num_rows($dash_tbl_admin_query_run))
            {
              echo '<h3 data-purecounter-start="0" data-purecounter-end='.$tbl_admin_total.' data-purecounter-duration="1" class="purecounter">','</h3>';
            }
            else
            {
              echo '<h6 class="mb-0"> No Data </h6>';
            }

            ?> 
          </div>

          <div class="card">
            <div class="card-inner">
              <p class="text-primary" style="background-color: #91bda3;">OFFICIALS</p>
              <a href="#services"><span class="material-icons-outlined text-green" style="font-size: 300%;">person_3</a></span>
            </div><br>
            <?php
            $dash_tbl_admin_query = "SELECT * FROM tbl_teams";
            $dash_tbl_admin_query_run = mysqli_query($connection, $dash_tbl_admin_query);

            if($tbl_admin_total = mysqli_num_rows($dash_tbl_admin_query_run))
            {
              echo '<h3 data-purecounter-start="0" data-purecounter-end='.$tbl_admin_total.' data-purecounter-duration="1" class="purecounter">','</h3>';
            }
            else
            {
              echo '<h6 class="mb-0"> No Data </h6>';
            }

            ?> 
          </div>

          <div class="card">
            <div class="card-inner">
              <p class="text-primary" style="background-color: #ca888b;"> REPORTS</p>
              <a href="#resume"><span class="material-icons-outlined text-red" style="font-size: 300%;">list</a></span>
            </div><br>
            <?php
            $dash_tbl_admin_query = "SELECT * FROM tbl_message";
            $dash_tbl_admin_query_run = mysqli_query($connection, $dash_tbl_admin_query);

            if($tbl_admin_total = mysqli_num_rows($dash_tbl_admin_query_run))
            {
              echo '<h3 data-purecounter-start="0" data-purecounter-end='.$tbl_admin_total.' data-purecounter-duration="1" class="purecounter">','</h3>';
            }
            else
            {
              echo '<h6 class="mb-0"> No Data </h6>';
            }

            ?> 
          </div>

        </div>

      
          <div class="charts-card" >
            <div>
            <?php
require 'class/db_connection.php';
$conn = mysqli_connect('localhost','user','user','user_db');
$query = "SELECT * FROM tbl_data"; // get the records on which pie chart is to be drawn
$getData = $connection->query($query);
?>
<?php
 $test = array();
 
$link = mysqli_connect('localhost', 'root', '') ;
mysqli_select_db($link, 'user_db');

$test=array();

$count=0;
$res=mysqli_query($link, 'select * from tbl_data');
while ($row=mysqli_fetch_array($res))
{
$test[$count] ['label']=$row['month'];
$test[$count] ['y']=$row['value'];
$count = $count+1;
}

   
 ?>
 <!DOCTYPE HTML>
 <html>
 <head>  
 <script>
 window.onload = function () {
  
 var chart = new CanvasJS.Chart("chartContainer", {
   animationEnabled: true,
   exportEnabled: true,
   theme: "light1", // "light1", "light2", "dark1", "dark2"
   title:{
     text: "May-July 2023 Population"
   },
   axisY:{
     includeZero: true
   },
   data: [{
     type: "line", //change type to bar, line, area, pie, etc
     //indexLabel: "{y}", //Shows y value on all Data Points
     indexLabelFontColor: "#5A5757",
     indexLabelPlacement: "outside",  
     yValueFormatString: "#,##0.## Residence(based from statistics of brgy bañadero)", 
     dataPoints: <?php echo json_encode($test, JSON_NUMERIC_CHECK); ?>
   }]
 });
 chart.render();
  
 }
 </script>
 </head>
 <body>
 <div id="chartContainer" style="height: 370px; width: 100%;"></div>
 <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
 </body>
 </html>  
 <!--END OF BAR CHART-->                                
            </div>       
   </main>




    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">  
        <div class="container">
        <div class="section-title">
          <h2 class="time" >Announcements</h2>
          
          </center> <br>
          <table id="demo" class="table table-dark table-hover table-bordered table-stripped" width="100%">
                <thead>
                <tr>
                
                <th style="background-color: dodgerblue;">Author Fullname</th>
                <th style="background-color: dodgerblue;">Subject</th>
                <th style="background-color: dodgerblue;">Announcement Logs</th>
                <th style="background-color: dodgerblue;">Date Announced</th>
                
                </tr>
                </thead>
          <tbody>
              <?php
                require 'class/db_message.php';
                $model = new Mo();
                $rows = $model->fetch();
                $i = 1;
                if(!empty($rows)){
                  foreach($rows as $row){ 
              ?>
              <?php
              ?>
              <tr>
              
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['subject']; ?></td>
                <td><?php echo $row['message']; ?></td>
                <td><?php echo $row['date_created']; ?></td>
                </tr>
              <?php
                }
              }else{
                echo "NO DATA";
            }
              ?>
            </tbody>
          </table>
          
            <style>
html{
    padding:0;
    margin:0;

}
.sms-container{
    width:70vw;
    margin:40px auto;
    text-align: center;
    padding:0;
    
}
form{
    width:100%;
    margin:auto;
}
input, textarea{
    width:100%;
    border-radius: 10px;
    border:none;
    /* outline */
    outline-style: solid;
    outline-width: 2px;
    outline-color: black;
    outline-offset: -2px;
}
h1{
    color:#fff;
}
form label{
    min-width:100%;
    text-align: left;
    display: block;
}
input[type='submit']{
    font-weight: 700;
    color: white;
    background-color: dodgerblue;
    letter-spacing: 2px;
    font-size: large;
    line-height: 50px;
    cursor: pointer;
}
input[type='submit']:hover{
    background-color: darkblue;
    color: #fff;
}
.response-container{
    display:none;
    width:50%;
    margin:auto;
    text-align:left;
}
</style>
          <?php
              require 'sms_send.php';
              $model = new Mo();
              $insert = $model->insert();
          ?>
          <center>
            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" style="width: 99%;">
            
            <form action="" method="POST">
            
              <div class="row" >
                <div class="form-group col-md-6" class="php-email-form">
                  <label for="name">Author Fullname</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Enter Fullname" required>
                </div>
                <div class="form-group col-md-6" class="php-email-form">
                  <label for="name">Subject</label>
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Category - Type" required>
                </div>
              </div>
              <div class="form-group" class="php-email-form">
                <label for="name">Message</label>
                <textarea class="form-control" name="message" cols="30" rows="10" placeholder="Write your announcement here..." required></textarea>
              <div><br>
              <input type="submit" name="sent" value="SEND ANNOUNCEMENT">
            </form>
</div>
</section>
          <?php
// Load the database configuration file
include_once 'class/db_config.php';

// Get status message
if(!empty($_GET['status'])){
    switch($_GET['status']){
        case 'succ':
            $statusType = 'alert-success';
            $statusMsg = 'Members data has been imported successfully.';
            break;
        case 'err':
            $statusType = 'alert-danger';
            $statusMsg = 'Some problem occurred, please try again.';
            break;
        case 'invalid_file':
            $statusType = 'alert-danger';
            $statusMsg = 'Please upload a valid CSV file.';
            break;
        default:
            $statusType = '';
            $statusMsg = '';
    }
}
?>
<section id="portfolio" class="resume">
    <div class="container">
    <div class="section-title">
    <br><h2 class="time" >Residents Records</h2> 
<br>
<?php
 if(!empty($statusMsg)){ ?>
<div class="col-xs-12">
    <div class="alert <?php echo $statusType; ?>"><?php echo $statusMsg; ?></div>
</div>
<?php }
 ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

            <?php 
                require_once 'class/db_connection.php';
                $query = "select * from tbl_admin";
                $result = mysqli_query($conn,$query);
            ?>

<table id="example" class="table table-dark table-hover table-bordered" width="100%">
                <thead>
                <tr>
                <th style="background-color: dodgerblue;">ID</th>
                <th style="background-color: dodgerblue;">Firstname</th>
                <th style="background-color: dodgerblue;">Lastname</th>
                <th style="background-color: dodgerblue;">Age</th>
                <th style="background-color: dodgerblue;">Birthday</th>
                <th style="background-color: dodgerblue;">Email</th>
                <th style="background-color: dodgerblue;">Mobile No.</th>
                <th style="background-color: dodgerblue;">Address</th>
                <th style="background-color: dodgerblue;">Action</th>
                </tr>
                </thead>
          <tbody>
              <?php
                require 'class/db_admin.php';
                $model = new Model();
                $rows = $model->fetch();
                $i = 1;
                if(!empty($rows)){
                  foreach($rows as $row){ 
              ?>
              
                            <tr>
                            <td><?php echo $i++; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['lastname']; ?></td>
                            <td><?php echo $row['age']; ?></td>
                            <td><?php echo $row['bday']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['mobile']; ?></td>
                            <td><?php echo $row['address']; ?></td>
                            <td>
                            <button data-id='<?php echo $row['id']; ?>' class="userinfo btn btn-success">View</button>
                            <a href="admin/admin_edit.php?id=<?php echo $row['id']; ?>" title="Click to edit"  class="btn btn-primary">Edit</a>&nbsp;
                            <a href="admin/admin_delete.php?id=<?php echo $row['id']; ?>" title="Click to delete" class="btn btn-danger">Delete</a>
                            </td>
                            </tr>
              <?php
                }
              }else{
                echo "";
            }

              ?>
            </tbody>
          </table>

          <script type='text/javascript'>
            $(document).ready(function(){
                $('.userinfo').click(function(){
                    var userid = $(this).data('id');
                    $.ajax({
                        url: 'head/ajaxfile.php',
                        type: 'post',
                        data: {userid: userid},
                        success: function(response){ 
                            $('.modal-body').html(response); 
                            $('#empModal').modal('show'); 
                        }
                    });
                });
            });
            </script>
        </div>
        <div class="modal fade" id="empModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="card">
            <div class="card-header" style="background-color: #91bda3;">
                            <h4 class="modal-title">Record</h4>
                         
                        </div>
                        <div class="modal-body">
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Close</button>
                          
                        </div>
                    </div>
                </div>
        </div>  
        </div>  
          <br>
          
          &nbsp;<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#verticalycentered" style="width: 50%; padding: 13px; margin-left: 50%;" >
        <b> ADD A NEW RECORD </b>
              </button>
              <div class="modal fade" id="verticalycentered" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Add Record</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

              <?php
              $model = new Model();
              $insert = $model->insert();
             ?>

            <form action="" method="post" name="myForm" onsubmit="return validation()">
            <div class="form-group">
              <label for="">Firstname</label>
              <input type="text" name="name" class="form-control" required>
              <div id="error"></div>
            </div>
            <div class="form-group">
              <label for="">Lastname</label>
              <input type="text" name="lastname" class="form-control"required>
            </div>
            <div class="form-group">
              <label for="">Age</label>
              <input type="text" name="age" class="form-control"required>
            </div>
            <div class="form-group">
              <label for="">Birthday</label>
              <input type="date" name="bday" class="form-control"required>
            </div>
            <div class="form-group">
              <label for="">Email</label>
              <input type="email" name="email" class="form-control"required>
            </div>
            <div class="form-group">
              <label for="">Mobile No.</label>
              <input type="tel" name="mobile" placeholder="Only numbers are accepted" size="50" onkeypress="return restrictAlphabets(event)" class="form-control"required>
            </div>
            <div class="form-group">
              <label for="">Address</label>
              <select name="address" class="form-group" style="width: 100%; padding: 8px; border-radius: 10px;" required>
              <option value="0">Select Purok</option>
              <option value="Purok 1, Barangay Bañadero">Purok 1, Barangay Bañadero</option>
              <option value="Purok 2, Barangay Bañadero">Purok 2, Barangay Bañadero</option>
              <option value="Purok 3, Barangay Bañadero">Purok 3, Barangay Bañadero</option>
              <option value="Purok 4, Barangay Bañadero">Purok 4, Barangay Bañadero</option>
              </select>
              
              <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </div>
            </div>
            </form>
            <script type="text/javascript">
            function restrictAlphabets(e){
            var x = e.which || e.keycode;
            if((x >= 48 && x <= 57))
            return true;
            else
            return false;
        }
    </script>
    <script src="asset/js/validation.js"></script>
          </div>
        </div>
       </div>
      </div>

    <!-- Import link -->
    <div class="col-md-12 head">
        <div class="float-right">
            <a href="javascript:void(0);" class="btn btn-success" onclick="formToggle('importFrm');" 
            style="width: 50%; padding: 13px; margin-right: 50%; margin-bottom: 20%;  margin-top: -52px;"><i class="plus"></i> <b> IMPORT CSV FILE</b></a>
        </div> 
    </div>
   <!-- CSV file upload form -->
        <div id="importFrm" style="display: none;">
        <form action="admin/importData.php" method="post" enctype="multipart/form-data" style="margin-top : -18%;" >
            <input type="file" name="file"><br><br>
            <input type="submit" name="importSubmit" value="IMPORT" style="width: 10%; margin-right: 100%;">
        </form>
    </div>
    </div>
   
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
    
      <div class="container">

        <div class="section-title">
          <h2 class="time" >Hotlines</h2>
          
          <iframe src="maps/head_map.php"
                 frameborder="0" style="border:0; width: 100%; height: 500px;" allowfullscreen></iframe>
    </section><!-- End Portfolio Section -->


    <!-- ======= Testimonials Section ======= -->
<section id="services" class="testimonials section-bg">
<div class="container">
<div class="section-title">
<h2 class="time">Barangay Quick Response Team - List</h2>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

                <?php 
                $query = "select * from tbl_teams";
                $result = mysqli_query($conn,$query);
                ?>

<table id="demo1" class="table table-dark table-bordered table-hover" width="100%">
                <thead>
                <tr>
                <th style="background-color: dodgerblue;">ID</th>
                <th style="background-color: dodgerblue;">Fullname</th>
                <th style="background-color: dodgerblue;">Team Role</th>
                <th style="background-color: dodgerblue;">Team Name</th>
                <th style="background-color: dodgerblue;">Date Created</th>
                <th style="background-color: dodgerblue;">Action</th>
                </tr>
                </thead>
          <tbody>
              <?php
                require 'class/db_teams.php';
                $model = new Mode();
                $rows = $model->fetch();
                $i = 1;
                if(!empty($rows)){
                  foreach($rows as $row){ 
              ?>
              
              <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['roles']; ?></td>
                <td><?php echo $row['teamname']; ?></td>
                <td><?php echo $row['date_created']; ?></td>
                <td>
                <button data-id='<?php echo $row['id']; ?>' class="userinfo btn btn-success">View</button>
                <a href="teams/team_edit.php?id=<?php echo $row['id']; ?>" title="Click to edit"  class="btn btn-primary">Edit</a>&nbsp;
                <a href="teams/team_delete.php?id=<?php echo $row['id']; ?>" title="Click to delete" class="btn btn-danger">Delete</a>
                </td>
                </tr>
              <?php
                }
              }else{
                echo "";
            }

              ?>
            </tbody>
          </table>

          <script type='text/javascript'>
            $(document).ready(function(){
                $('.userinfo').click(function(){
                    var userid = $(this).data('id');
                    $.ajax({
                        url: 'head/ajax.php',
                        type: 'post',
                        data: {userid: userid},
                        success: function(response){ 
                            $('.modal-body').html(response); 
                            $('#empModal').modal('show'); 
                        }
                    });
                });
            });
            </script>
        </div>
        <div class="modal fade" id="empModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="card">
            <div class="card-header" style="background-color: #91bda3;">
                            <h4 class="modal-title">Record</h4> 
                        </div>
                        <div class="modal-body">
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Close</button>
                        </div>
                    </div>
                </div>
        </div>  
        </div>  




        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal" style="width: 100%; padding: 13px;">
                  <b>DEPLOY NEW ROLE</b>
                </button><br>
                <div class="modal fade" id="basicModal" tabindex="-1">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title">Add New Record</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">

                      <?php
              $model = new Mode();
              $insert = $model->insert();
                    ?>

            <form action="" method="post">
            <div class="form-group">
              <label for="">Name</label>
              <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
              <label for="">Role</label>
              <select name="roles" class="form-group" style="width: 100%; padding: 8px; border-radius: 10px;" required>
              <option value="0">Select Role</option>
              <option value="Barangay Captain">Barangay Captain</option>
              <option value="Committee Chairman on BDDRMC">Committee Chairman on BDDRMC</option>
              <option value="Team Leader">Team Leader</option>
              <option value="Team Co-Leader">Team Co-Leader</option>
              <option value="Team Member">Team Member</option>
          </select>
            </div>
          
            <div class="form-group">
              <label for="">Team Name</label>
              <select name="teamname" class="form-group" style="width: 100%; padding: 8px; border-radius: 10px;" required>
              <option value="0">Select Team</option>
              <option value="BQRT Bañadero">BQRT Bañadero</option>.
              <option value="BPSO Bañadero">BPSO Bañadero</option>
          </select>
            </div>
          
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="send">Submit</button>
                      </div>
                      </form>
                    </div>
                  </div>
                </div><br>
                  
             
     

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
    
      <div class="container">

        <div class="section-title">
        <h2 onclick="window.location.href='#';" class="time">About Us</h2>

        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Barangay, Bañadero Calamba City Laguna, 4027</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>banadero@email.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+6390-455-6587</p>
              </div>

              <iframe src="maps/head_maps.php"
                 frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
              <div class="form-group">
                <p><img src="asset/img/background/download.jpg" style="margin-left: 12%;"></p><br>
                <p class="text-center">
                  Banadero is a barangay in the city of Calamba, in the province of Laguna. 
                  Its population as determined by the 2020 Census was 12,647. This represented 2.34% of the total population of Calamba.
                </p><br>
                <table id="" class="table table-bordered table-hover">
                <thead>
                <tr>
                <th style="background-color: yellowgreen;">Chairman</th>
                <th style="background-color: yellowgreen;">Councilors</th>
                
                </tr>
                </thead>
          <tbody>
              
              <tr>
                <td>Corazon Pecho</td>
                <td>
                    Rodrigo M. Abesamis<br>
                    Eduardo DL. Pecho<br>
                    Elias A. Bautista<br>
                    Aries B. Hizon<br>
                    Susan M. Canicosa<br>
                    Joy Ann M. Natividad</td>
                </tr>
           
            </tbody>
          </table>
          <table id="" class="table table-bordered table-hover">
                <thead>
                <tr>
                <th style="background-color: dodgerblue;">Sk Chairman</th>
                <th style="background-color: dodgerblue;">Sk Councilors</th>
                
                </tr>
                </thead>
          <tbody>
              
              <tr>
                <td>Llyana Shiane O. Solis   </td>
                <td>
                Jarren O. Manzanero <br>
                Rochelle M. Rubio <br>
                Jeno G. Gratela <br>
                Karen A. Capaya <br>
                Celine Joy S. Sarabia <br>
                Leanne C. Evangelista <br>
                Aubrey Cheryll C. Malbataan
                  </td>
                </tr>
           
            </tbody>
          </table>
          </div>           
            </form>
          </div>
        </div>
      </div>
      <div class="container">
      <div class="copyright">
        <br>
    <center>    &copy;Copyright <strong><span>J.V.S</span></strong></center>
      </div>
    </section>
    <!-- End Contact Section -->

  </main>
  <!-- End #main -->

  
 
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="asset/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="asset/vendor/aos/aos.js"></script>
  <script src="asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="asset/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="asset/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="asset/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="asset/vendor/typed.js/typed.umd.js"></script>
  <script src="asset/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="asset/vendor/php-email-form/validate.js"></script>

  <script src="https://code.jquery.com/jquery-3.5.1.js"> </script>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"> </script>
  <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"> </script>

  <!-- Template Main JS File -->
  <script src="asset/js/main.js"></script>

  <script> 

$(document).ready(function () {
    $('#example').DataTable();
});

</script>
<script> 

$(document).ready(function () {
    $('#demo').DataTable();
});

</script>
<script> 

$(document).ready(function () {
    $('#demo1').DataTable();
});

</script>

<script>
function formToggle(ID){
    var element = document.getElementById(ID);
    if(element.style.display === "none"){
        element.style.display = "block";
    }else{
        element.style.display = "none";
    }
}
</script>
  
</body>
</html>


