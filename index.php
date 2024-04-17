
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Curilux Admin</title>

<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/feather/feather.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" type="text/css" href="assets/css/style.css">

<script type = "text/javascript">
   <!--
      // Form validation code will come here.
      function validate() {
		  var delay = 1500;
      var email=$("#email").val();
          var pass=$("#password").val();
		var email=$("#email").val();
          var pass=$("#password").val();
         if( document.myform.email.value == "" ) {
            alert( "Please provide your email!" );
            document.myform.email.focus() ;
            return false;
         }
         if( document.myform.password.value == "" ) {
            alert( "Please provide your PAssword!" );
            document.myform.password.focus() ;
            return false;
         }
     
        $("#loading_spinner").css({"display":"block"});
            $.ajax
           ({
           type:'post',
           url:'scripts/execute.php',
           data:{
            do_login:"do_login",
            email:email,
            password:pass
           },
           success:function(response) {
         
         	   setTimeout(function(){
         		  if(response=="success")
         		  {
					window.location.href="dashboard?success";
         		  }
         		  else
         		  if(response=="successrole")
         		  {
         			window.location.href="empdashboard?success";
         		  }
         		  else
         		  {
					alert("Invalid Email/Password");
         		  }
         		  
         		  
         		    $("#loading_spinner").css({"display":"none"});
         	}, delay);
           }
           });

       return false;
      
      
      
       
      }
   //-->
</script>
 
 


</head>
<body>

<div class="main-wrapper login-body">
<div class="container-fluid px-0">
<div class="row">

<div class="col-lg-6 login-wrap">
<div class="login-sec" style="margin-top: 30%;">
<div class="log-img">
<img class="img-fluid" src="assets/img/login-02.png" alt="Logo">
</div> 
</div>
</div>


<div class="col-lg-6 login-wrap-bg">
<div class="login-wrapper">
<div class="loginbox">
<div class="login-right">
<div class="login-right-wrap">
<div class="account-logo">

<a href="index"><img src="assets/img/stock.png" alt=""></a>

</div>
<h2>Login</h2>
<?php 
setcookie("ID", 'null', time()+31556926, "/","", 0);
?>
<form class="form" name="myform" method="post" onsubmit="return(validate());" action="#">
<div class="form-group">
<label>Email <span class="login-danger">*</span></label>
<input class="form-control" id="email" name="email"  type="text">
</div>
<div class="form-group">
<label>Password <span class="login-danger">*</span></label>
<input  id="password" name="password" class="form-control pass-input" type="password">
<span class="profile-views feather-eye-off toggle-password"></span>
</div>
<!--
<div class="forgotpass">
<div class="remember-me">
<label class="custom_check mr-2 mb-0 d-inline-flex remember-me"> Remember me
<input type="checkbox" name="radio">
<span class="checkmark"></span>
</label>
</div>

<a href="forgot-password.html">Forgot Password?</a>

</div>
-->
<div class="form-group login-btn">
<button onClick="return fn_pr_0();" class="btn btn-primary btn-block" type="submit">Login</button>
</div>
			<center id="loading_spinner" style="display:none;">
					<p><img style="width: 100px;" src="https://i.pinimg.com/originals/3f/2c/97/3f2c979b214d06e9caab8ba8326864f3.gif"></p>
					</center>
</form>

<div class="next-sign">
<!--
<p class="account-subtitle">Need an account? <a href="register.html">Sign Up</a></p>
-->

<!--
<div class="social-login">
<a href="javascript:;"><img src="assets/img/icons/login-icon-01.svg" alt=""></a>
<a href="javascript:;"><img src="assets/img/icons/login-icon-02.svg" alt=""></a>
<a href="javascript:;"><img src="assets/img/icons/login-icon-03.svg" alt=""></a>
</div>
-->

</div>
</div>
</div>
</div>
</div>
</div>

</div>
</div>
</div>


<script src="assets/js/jquery-3.6.1.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/feather.min.js"></script>

<script src="assets/js/app.js"></script>
</body>


</html>
