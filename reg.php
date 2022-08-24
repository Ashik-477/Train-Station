<?php
include "include/header.php";
include "include/connect.php";

?>


	<!-- Form -->
    <hr>
	

	<form action="reg.php" method="post" align='center'>
  	<div >
    
    <h3><p style="color:red ; font-weight: bold;" >Sign Up Here</p></h3>
    <hr>
    <label for="f_name"><b>First Name :</b></label>
    <input type="text" placeholder="First Name" name="f_name" required>
	<br>
    <hr>
	<label for="l_name"><b>Last Name :</b></label>
    <input type="text" placeholder="Last Name" name="l_name" required>
    <br>
    <hr>
    <label for="email"><b>Email :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
    <input type="email" placeholder="Enter Email" name="email" required>
	<br>
    <hr>
    <label for="password"><b>Password :</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
	<br>
    <hr>
	<label for="gender"><b>Gender&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</b></label>
    <select name="gender">
      <option value="Male">Male </option>
      <option value="Female">Female </option>
    </select>
    <br>
    <hr>
	<label for="mobile"><b>Mobile No :</b></label>
    <input type="integer" placeholder="Enter Phone Number" name="mobile" required>
    <hr>
    
	<p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <input name="register" type="submit" class="btn btn-primary" value="Register">
	</div>
  <div class="container login">
    <p>Already have an account? <a href="login.php">Log In</a></p>
  </div>
  </form>

<?php

   if(isset($_POST['register'])){
         //echo '<script type="text/javascript"> alert("Logged in xD !!")</script>';
         $email=$_POST['email'];
         $password=$_POST['password'];

         $query = "SELECT * FROM user WHERE email = '$email'  AND password = ('$password')";

         $query_run = mysqli_query($con,$query);

         if (mysqli_num_rows ($query_run) > 0) {
            //vaild
			
			
			//Invaild
            echo '<script type="text/javascript"> alert("Already Regestered")</script>';
           
         }
         else {
            //echo '<script type="text/javascript"> alert("review button click")</script>';

         $query = "INSERT INTO user(f_name,l_name,email,password,gender,mobile) VALUES ('".$_POST['f_name']."','".$_POST['l_name']."','".$_POST['email']."','".$_POST['password']."','".$_POST['gender']."','".$_POST['mobile']."')";

          $query_run = mysqli_query ($con, $query) ;
          

         }


      }

mysqli_close($con);

    ?>


<?php include_once "include/footer.php"; ?>

