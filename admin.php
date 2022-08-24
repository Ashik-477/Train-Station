
<?php include_once "session.php";?>

<?php
include "include/header.php";
include "include/connect.php";
include_once "include/adminnav.php";
?>


<?php

// php code to Update data from mysql database Table

if(isset($_POST['update']))
{


   // get values form input text and number


 $Name = $_POST['Name'];
 $doj = $_POST['doj'];
 
 $book = $_POST['book'];
 $email = "Free";

 



     $query = "INSERT INTO avail(Name,doj,email,book) VALUES ('".$_POST['Name']."','".$_POST['doj']."','$email','".$_POST['book']."')";

     $query_run = mysqli_query ($con, $query) ;

 
 
 mysqli_close($con);
}

?>


<div align="center"> 

<br>

<h1 style="text-align: center; ">Add</h1>

<br>

      <form action="admin.php" method="post">

        Name:
        <select name="Name">
           <option value="Burhan">Burhan  </option>
          <option value="Redwan">Redwan </option>
          <option value="Ashik">Ashik   </option>
          <option value="Istiak ">Istiak   </option>
          
        </select>


        <br>
        <br>
        Date:
        <input type="text" name="doj" required><br><br>
        

        <br>
        <br>
        
        <br>
		Email:
        <input type="text" name="email" required><br><br>
		
	
		Status:
        <select name="book">
          <option value="Reserved">Reserved </option>
          <option value="Free"> Free </option>
          
          
          <br>
          <br>
        </select>
        <br>
        <input type="submit" name="update" value="Confirm" class="btn btn-primary">

      

      </form>

</div>


<?php include_once "include/footer.php"; ?>