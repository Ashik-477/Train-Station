<?php include_once "session.php";?>
<?php
include "include/header.php";
include "include/connect.php";
include_once "include/nav.php";

?>


<?php

// php code to Update data from mysql database Table

if(isset($_POST['update']))
{


   // get values form input text and number

 $id = $_POST['id'];
 $Name = $_POST['Name'];
 $doj = $_POST['doj'];
 
 //$amount = $_POST['amount'];
 $book = $_POST['book'];
 $email = $_POST['email'];

 




 $query = "SELECT * FROM avail WHERE Name = '$Name' AND book = ('$book') AND doj = ('$doj')";

 $query_run = mysqli_query($con,$query);

 if (mysqli_num_rows ($query_run) > 0) {




  echo '<script type="text/javascript"> alert("Booked")</script>';

}
else {









  
   // mysql query to Update data
 $query = "UPDATE `avail` SET `Name`='".$Name."',`doj`='".$doj."',`email`='".$email."',`book`='".$book."' WHERE `id` = $id";

 $result = mysqli_query($con, $query);

 if($result)
 {
   echo ' Booked';
 }else{
   echo 'Error booking  ! Please try again';
 }
 mysqli_close($con);
}
}
?>


<div align="center"> 

<br>

<h1 style="text-align: center; ">Reserve</h1>

<br>

      <form action="Book.php" method="post">

        Name:
        <select name="Name">
          <option value="Burhan">Burhan  </option>
          <option value="Redwan">Redwan </option>
          <option value="Ashik">Ashik   </option>
          <option value="Istiak ">Istiak   </option>
          
        </select>
        
        <br>
        <br>

Id:
        <input type="integer" name="id" required><br><br>
        
        
        
        <br>
        <br>
        Date:
        <input type="text" name="doj" required><br><br>
        
        
        <br>
        
        
    Email:
        <input type="text" name="email" required><br><br>
    
  
    Status:
        <select name="book">
          <option value="Reserved">Reserved  </option>
          <option value="Free"> Free</option>
          
          
          <br>
          <br>
        </select>
        <br>
        <br>
        <input type="submit" name="update" value="Book Confirm" class="btn btn-primary">

      

      </form>

</div>


<?php include_once "include/footer.php"; ?>