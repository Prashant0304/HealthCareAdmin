<?php

// Include config file
require_once 'config.php';
$username = $password = "";
$username_err = $password_err = "";
if($_SERVER["REQUEST_METHOD"] == "POST")
{
 //~ echo "asd";

	$username = trim($_POST['email']);
    $password = trim($_POST['password']);


  // Prepare a select statement
        $sql = "SELECT au_email, au_password FROM adminusers WHERE au_email = ?";
        
        if($stmt = mysqli_prepare($connection, $sql))
        {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1)
                {             
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt))
                    {
                        if(password_verify($password, $hashed_password))
                        {
                            /* Password is correct, so start a new session and
                            save the username to the session */
                            
                            session_start();
                           
							$getdetails = mysqli_query($connection,"select * from adminusers where au_email = '$username'");
                            while($res = mysqli_fetch_assoc($getdetails))
                            {
								$id = $res['au_id'];
								$email = $res['au_email'];
								$name = $res['au_fname'];
								$role = $res['au_role'];
							}
                            $_SESSION['ID'] = $id;      
                            $_SESSION['username'] = $email;      
                            $_SESSION['name'] = $name;    
                            $_SESSION['role'] = $role;    
                            $_SESSION['master'] = 999;      
                            
                            
							setcookie("ID", $id, time()+31556926, "/","", 0);
							setcookie("username", $email, time()+31556926, "/","", 0);
							setcookie("name", $name, time()+31556926, "/","", 0);
							setcookie("role", $role, time()+31556926, "/","", 0);
							setcookie("master", $role, time()+31556926, "/","", 0);
                                 
                            echo "success";
                        } 
                        else
                        {
                            // Display an error message if password is not valid
                            echo "fail";
                        }
                    }
                } 
                else
                {
					////////////////////////////
						
							$sql = "SELECT email, password FROM employees WHERE email = ?";
        
							if($stmt = mysqli_prepare($connection, $sql))
							{
								// Bind variables to the prepared statement as parameters
								mysqli_stmt_bind_param($stmt, "s", $param_username);
								
								// Set parameters
								$param_username = $username;
								
								// Attempt to execute the prepared statement
								if(mysqli_stmt_execute($stmt)){
									// Store result
									
									mysqli_stmt_store_result($stmt);
									
									// Check if username exists, if yes then verify password
									if(mysqli_stmt_num_rows($stmt) == 1)
									{             
										// Bind result variables
										mysqli_stmt_bind_result($stmt, $username, $hashed_password);
										if(mysqli_stmt_fetch($stmt))
										{
											if(password_verify($password, $hashed_password))
											{
												/* Password is correct, so start a new session and
												save the username to the session */
												
												session_start();
											   
												$getdetails = mysqli_query($connection,"select * from employees where email = '$username'");
												while($res = mysqli_fetch_assoc($getdetails))
												{
													$id = $res['id'];
													$email = $res['email'];
													$name = $res['fname'];
													$role = 2;
												}
												$_SESSION['ID'] = $id;      
												$_SESSION['username'] = $email;      
												$_SESSION['name'] = $name;    
												$_SESSION['role'] = $role;    
												$_SESSION['master'] = 999;     
												
												
												setcookie("ID", $id, time()+31556926, "/","", 0);
												setcookie("username", $email, time()+31556926, "/","", 0);
												setcookie("name", $name, time()+31556926, "/","", 0);
												setcookie("role", $role, time()+31556926, "/","", 0);
												setcookie("master", $role, time()+31556926, "/","", 0); 
													 
												echo "successrole";
											} 
											else
											{
												// Display an error message if password is not valid
												echo "fasdl";
											}
										}
									} 
								} 
								else
								{
									echo "sad";
								}
							}
                ////////////////////////////
				}
            } 
            else
            {
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
    
    
    // Close connection
    mysqli_close($connection);


}

?>
