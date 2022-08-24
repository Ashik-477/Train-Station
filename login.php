<?php
include "include/header.php";
include "include/connect.php";
include "include/navlogout.php";
?>





<!-- Log In -->
<div>
        <br>
            <form action="login.php" method="post" align='center'>
                <hr>
                <div>
                    <h1 style="text-align: center;font-weight: bold;color: green;">Login</h1>
                    <br>
                    <label for="email">Email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
                    <input name="email" type="email">
               </div>
               <hr>
               <div>
                    <label for="password">Password&nbsp;:</label>
                    <input name="password" type="password">
              </div>
               <hr>
              <button name="login" type="submit" class="btn btn-primary">Submit</button>
              
              <div class="container register">
                <p>Don't have an account? <a href="reg.php">Register</a>.</p>
            

              </div>
           </form>
      <hr>



<?php

      if(isset($_POST['login'])){
         
         $email=$_POST['email'];
         $password=$_POST['password'];
         

         $query = "SELECT * FROM user WHERE email = '$email' AND password = ('$password')";

         $query_run = mysqli_query($con,$query);

         if (mysqli_num_rows ($query_run) > 0) {
            //vaild
            session_start();
            $_SESSION['email']=$email;
            header('location:Home.php');
         }
         else {
            //Invaild
            //echo '<script type="text/javascript"> alert("Invaild User")</script>';
           echo $query_run;
         }


      }

mysqli_close($con);

    ?>
  </div>