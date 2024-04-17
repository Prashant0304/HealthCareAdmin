<?php
require 'scripts/config.php';
require 'scripts/session.php';
require 'scripts/adminaccess.php';
require 'scripts/idtoname.php';
if(isset($_POST['submit'])){
  $Name=$_POST['Name'];
  $Age=$_POST['Age'];
  $Weight=$_POST['Weight'];
  $Height=$_POST['Height'];
  $Gender=$_POST['Gender'];
  $Blood_Group=$_POST['Blood_Group'];
  $Genetic_diseases=$_POST['Genetic_diseases'];
  $Address=$_POST['Address'];
  $Contact=$_POST['Contact'];


  if($Name=="" || empty($Name)){
   header('location:index.php?message=You need to fill in the Name!');
  }
  elseif($Age=="" || empty($Age)){
     header('location:index.php?message=You need to fill age!');
  }
  elseif($Weight=="" || empty($Weight)){
   header('location:index.php?message=You need to fill in the weight!');
   }
   elseif($Height=="" || empty($Height)){
       header('location:index.php?message=You need to fill in the height!');
   }
   elseif($Gender=="" || empty($Gender)){
       header('location:index.php?message=You need to fill in the gender!');
   }
   elseif($Blood_Group=="" || empty($Blood_Group)){
       header('location:index.php?message=You need to fill in the blood group!');
   }
   elseif($Genetic_diseases=="" || empty($Genetic_diseases)){
       header('location:index.php?message=You need to fill in the genetic_diseases!');
   }
   elseif($Address=="" || empty($Address)){
       header('location:index.php?message=You need to fill in the address!');
   }
   elseif($Contact=="" || empty($Contact)){
       header('location:index.php?message=You need to fill in the contact!');
   }
  else{
    $query = "INSERT INTO patient_info (Name,Age,Weight,Height,Gender,Blood_Group,Genetic_diseases, Address,Contact) VALUES ('$Name','$Age','$Weight','$Height','$Gender','$Blood_Group','$Genetic_diseases','$Address','$Contact')";

$result = mysqli_query($connection, $query);
if (!$result) {
   die("Query failed: " . mysqli_error($connection));
}
     else{
      ?>
      <script>alert("Patient added successfully");document.location="add_patient.php";</script>
      <?php 

     }

  }

}


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Curilux - Add Patient</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">
    <link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">
    <link rel="stylesheet" href="assets/plugins/feather/feather.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    
    <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.3.2/css/rowReorder.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.dataTables.min.css">
    <style>
    .dataTables_info  {
		display:block !important;
	}
    .pagination  {
		display:flex !important;
	}
    </style>
  </head>
  <body>
    <div class="main-wrapper">
	  <?php
	  include('scripts/header.php');
	  include('scripts/nav.php');
	  
	  
	  ?>
	         <div class="page-wrapper">
        <div class="content">
          <div class="page-header">
            <div class="row">
              <div class="col-sm-12">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="#">Patient </a>
                  </li>
                  <li class="breadcrumb-item">
                    <i class="feather-chevron-right"></i>
                  </li>
                  <li class="breadcrumb-item active"><?php if(isset($_GET['view'])) { echo "Update";} else { echo "Add";} ?> Patient</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-body">
                  <form action="" method="post">
                    <div class="row">
                      <div class="col-12">
                        <div class="form-heading">
                          <h4>Patient Details</h4>
                        </div>
                      </div>
                      <?php
                      if($status == 2)
                      {
                      ?>
                      <div class="col-12">
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
						<strong>Success!</strong> Patient Added Successfully
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
						<span aria-hidden="true"> </span>
						</button>
						</div>
						</div>
                      <?php
					  }
					  else 
					  if($status == 1)
					  {
						
                      ?>
                      <div class="col-12">
                      <div class="alert alert-danger alert-dismissible fade show" data-mdb-delay="3000" role="alert">
						<strong>Error!</strong> Patient Phone Exists
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
						<span aria-hidden="true"> </span>
						</button>
						</div>
						</div>
					
                      <?php
					  }
					  else
					  {
                      ?>

                      <?php
					  }
					  ?>
                      <div class="col-12 col-md-6 col-xl-6">
                        <div class="form-group local-forms">
                          <label>Name <span class="login-danger">*</span>
                          </label>
                          <input name="Name" id="Name" class="form-control" type="text" value="<?php echo $Name;?>" required>
                        </div>
                      </div>
                      <div class="col-12 col-md-6 col-xl-6">
                        <div class="form-group local-forms">
                          <label>Age <span class="login-danger">*</span>
                          </label>
                          <input name="Age" id="Age" class="form-control" type="text" value="<?php echo $Age;?>" required>
                        </div>
                      </div>
                      <div class="col-12 col-md-6 col-xl-6">
                        <div class="form-group local-forms">
                          <label>Weight <span class="login-danger">*</span>
                          </label>
                          <input name="Weight" id="Weight" class="form-control" type="text" value="<?php echo $Weight;?>" required>
                        </div>
                      </div>
                      <div class="col-12 col-md-6 col-xl-6">
                        <div class="form-group local-forms">
                          <label>Height<span class="login-danger">*</span>
                          </label>
                          <input name="Height" id="Height" class="form-control" type="text" value="<?php echo $Height;?>" required>
                        </div>
                      </div>
                      <div class="col-12 col-md-6 col-xl-6">
                        <div class="form-group local-forms">
                          <label>Gender <span class="login-danger">*</span>
                          </label>
                          <select name="Gender" class="form-control">
                          <option value=" ">--select--</option>
                          <option value="Male" <?php echo $Gender=="male"?"selected":""; ?>>Male</option>
                          <option value="Female"  <?php echo $Gender=="female"?"selected":""; ?>>Female</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-12 col-md-6 col-xl-6">
                        <div class="form-group local-forms">
                          <label>Blood_Group <span class="login-danger"></span>
                          </label>
                          <input name="Blood_Group" maxlength="10" id="Blood_Group" class="form-control" type="text"  value="<?php echo $Blood_Group;?>"  required>
                        </div>
                      </div>
                      <div class="col-12 col-md-6 col-xl-6">
                        <div class="form-group local-forms">
                          <label>Genetic_diseases<span class="login-danger"></span>
                          </label>
                          <input name="Genetic_diseases" id="Genetic_diseases" class="form-control" type="text"  value="<?php echo $Genetic_diseases;?>"  required>
                        </div>
                      </div>
                      <div class="col-12 col-md-6 col-xl-6">
                        <div class="form-group local-forms">
                          <label>Contact<span class="login-danger">*</span>
                          </label>
                          <input name="Contact" id="Contact" class="form-control" type="text"  value="<?php echo $Contact;?>"  required>
                        </div>
                      </div>
                      <div class="col-12 col-md-6 col-xl-6">
                        <div class="form-group local-forms">
                          <label>Address <span class="login-danger">*</span>
                          </label>
                          <textarea name="Address" id="Address" class="form-control"><?php echo $Address;?></textarea>
                        </div>
                        
                      </div>
                      
                      
                     
                      <div class="col-12">
                        <div class="doctor-submit text-end">
						  <?php 
						  if(isset($_GET['view'])) 
						  { 
							  ?>
							    <input type="hidden" value="<?php echo $_GET['view'];?>" name="updateid">
								<button name="update" type="submit" class="btn btn-primary submit-form me-2">Update</button>
							  <?php
						  } 
						  else
						  {
							  ?>
								<button name="submit" type="submit" class="btn btn-primary submit-form me-2">Submit</button>
							  <?php							  
						  }
						  ?>
                          <button type="submit" class="btn btn-primary cancel-form">Cancel</button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="notification-box">
          <div class="msg-sidebar notifications msg-noti">
            <div class="topnav-dropdown-header">
              <span>Messages</span>
            </div>
            <div class="drop-scroll msg-list-scroll" id="msg_list">
              <ul class="list-box">
                <li>
                  <a href="chat.html">
                    <div class="list-item">
                      <div class="list-left">
                        <span class="avatar">R</span>
                      </div>
                      <div class="list-body">
                        <span class="message-author">Richard Miles </span>
                        <span class="message-time">12:28 AM</span>
                        <div class="clearfix"></div>
                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="chat.html">
                    <div class="list-item new-message">
                      <div class="list-left">
                        <span class="avatar">J</span>
                      </div>
                      <div class="list-body">
                        <span class="message-author">John Doe</span>
                        <span class="message-time">1 Aug</span>
                        <div class="clearfix"></div>
                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="chat.html">
                    <div class="list-item">
                      <div class="list-left">
                        <span class="avatar">T</span>
                      </div>
                      <div class="list-body">
                        <span class="message-author"> Tarah Shropshire </span>
                        <span class="message-time">12:28 AM</span>
                        <div class="clearfix"></div>
                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="chat.html">
                    <div class="list-item">
                      <div class="list-left">
                        <span class="avatar">M</span>
                      </div>
                      <div class="list-body">
                        <span class="message-author">Mike Litorus</span>
                        <span class="message-time">12:28 AM</span>
                        <div class="clearfix"></div>
                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="chat.html">
                    <div class="list-item">
                      <div class="list-left">
                        <span class="avatar">C</span>
                      </div>
                      <div class="list-body">
                        <span class="message-author"> Catherine Manseau </span>
                        <span class="message-time">12:28 AM</span>
                        <div class="clearfix"></div>
                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="chat.html">
                    <div class="list-item">
                      <div class="list-left">
                        <span class="avatar">D</span>
                      </div>
                      <div class="list-body">
                        <span class="message-author"> Domenic Houston </span>
                        <span class="message-time">12:28 AM</span>
                        <div class="clearfix"></div>
                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="chat.html">
                    <div class="list-item">
                      <div class="list-left">
                        <span class="avatar">B</span>
                      </div>
                      <div class="list-body">
                        <span class="message-author"> Buster Wigton </span>
                        <span class="message-time">12:28 AM</span>
                        <div class="clearfix"></div>
                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="chat.html">
                    <div class="list-item">
                      <div class="list-left">
                        <span class="avatar">R</span>
                      </div>
                      <div class="list-body">
                        <span class="message-author"> Rolland Webber </span>
                        <span class="message-time">12:28 AM</span>
                        <div class="clearfix"></div>
                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="chat.html">
                    <div class="list-item">
                      <div class="list-left">
                        <span class="avatar">C</span>
                      </div>
                      <div class="list-body">
                        <span class="message-author"> Claire Mapes </span>
                        <span class="message-time">12:28 AM</span>
                        <div class="clearfix"></div>
                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="chat.html">
                    <div class="list-item">
                      <div class="list-left">
                        <span class="avatar">M</span>
                      </div>
                      <div class="list-body">
                        <span class="message-author">Melita Faucher</span>
                        <span class="message-time">12:28 AM</span>
                        <div class="clearfix"></div>
                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="chat.html">
                    <div class="list-item">
                      <div class="list-left">
                        <span class="avatar">J</span>
                      </div>
                      <div class="list-body">
                        <span class="message-author">Jeffery Lalor</span>
                        <span class="message-time">12:28 AM</span>
                        <div class="clearfix"></div>
                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="chat.html">
                    <div class="list-item">
                      <div class="list-left">
                        <span class="avatar">L</span>
                      </div>
                      <div class="list-body">
                        <span class="message-author">Loren Gatlin</span>
                        <span class="message-time">12:28 AM</span>
                        <div class="clearfix"></div>
                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="chat.html">
                    <div class="list-item">
                      <div class="list-left">
                        <span class="avatar">T</span>
                      </div>
                      <div class="list-body">
                        <span class="message-author">Tarah Shropshire</span>
                        <span class="message-time">12:28 AM</span>
                        <div class="clearfix"></div>
                        <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                      </div>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
            <div class="topnav-dropdown-footer">
              <a href="chat.html">See all messages</a>
            </div>
          </div>
        </div>
      </div>
 
	  
	  
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.6.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/feather.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/jquery.waypoints.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/plugins/apexchart/apexcharts.min.js"></script>
    <script src="assets/plugins/apexchart/chart-data.js"></script>
	<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="assets/plugins/datatables/datatables.min.js"></script>
	<script src="https://cdn.datatables.net/rowreorder/1.3.2/js/dataTables.rowReorder.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>

    <script src="assets/js/app.js"></script>
    
  </body>
 
</html>
