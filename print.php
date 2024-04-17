<?php
require 'scripts/config.php';
require 'scripts/session.php';
require 'scripts/adminaccess.php';
require 'scripts/idtoname.php';



?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
    <title>Curilux - Print</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="assets/plugins/feather/feather.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  </head>
  <body class="mini-sidebar">
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
                    <a href="#">Print </a>
                  </li>
                  <li class="breadcrumb-item">
                    <i class="feather-chevron-right"></i>
                  </li>
                  <li class="breadcrumb-item active"><?php if(isset($_GET['view'])) { echo "Update";} else { echo "Add";} ?> Print</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-body">
                  <form action="view" method="post" target="_blank">
                    <div class="row">
                      <div class="col-12">
                        <div class="form-heading">
                          <h4>Certificate Print</h4>
                        </div>
                      </div>
                      <?php
                      if($status == 2)
                      {
                      ?>
                      <div class="col-12">
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
						<strong>Success!</strong> Employee Added Successfully
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
						<strong>Error!</strong> Email Already Exists
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
                          <label>First Name <span class="login-danger">*</span>
                          </label>
                          <input name="fname" id="fname" class="form-control" type="text" value="" required>
                        </div>
                      </div>
                      <div class="col-12 col-md-6 col-xl-6">
                        <div class="form-group local-forms">
                          <label>Last Name <span class="login-danger">*</span>
                          </label>
                          <input name="lname" id="lname" class="form-control" type="text"  value=""  required>
                        </div>
                      </div>
                      <div class="col-12 col-md-6 col-xl-6">
                        <div class="form-group local-forms">
                          <label>From <span class="login-danger">*</span>
                          </label>
                          <input name="fdate" class="form-control" type="date"  value=""  required>
                        </div>
                      </div>
                      <div class="col-12 col-md-6 col-xl-6">
                        <div class="form-group local-forms">
                          <label>To <span class="login-danger">*</span>
                          </label>
                          <input name="tdate" class="form-control" type="date"  value=""  required>
                        </div>
                      </div>
                      <div class="col-12 col-md-6 col-xl-6">
                        <div class="form-group local-forms">
                          <label>Mobile <span class="login-danger">*</span>
                          </label>
                          <input name="mobile" id="email" class="form-control" type="number"  value=""  required>
                        </div>
                      </div>
                      <div class="col-12 col-md-6 col-xl-6">
                        <div class="form-group local-forms">
                          <label>City <span class="login-danger">*</span>
                          </label>
                          <input name="city" id="email" class="form-control" type="text"  value=""  required>
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
      <div id="delete_patient" class="modal fade delete-modal" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-body text-center">
              <img src="assets/img/sent.png" alt="" width="50" height="46">
              <h3>Are you sure want to delete this ?</h3>
              <div class="m-t-20">
                <a href="#" class="btn btn-white" data-bs-dismiss="modal">Close</a>
                <button type="submit" class="btn btn-danger">Delete</button>
              </div>
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
    <script src="assets/plugins/moment/moment.min.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script type="text/javascript">
$('#mobile').keyup(function(event){
			if(isNaN(String.fromCharCode(event.which))){
				var value = $(this).val();

				 this.value = this.value.replace(/[^0-9\.]/g,'');
			}
		});
		
        setTimeout(function () {
            $('.alert').alert('close');
        }, 1000);
    </script>
  </body>
</html>
