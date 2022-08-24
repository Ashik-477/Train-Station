<?php include_once "session.php";?>


<?php
include "include/header.php";
include "include/connect.php";
include_once "include/nav.php";
?>


  
  <br>

  <!-- Form -->
  <h1 style="text-align: center; ">Available</h1>

  <form action="avail.php" method="post" align='center'>
    <div class="container">
    
    <hr>
    <label for="Name"><b> Name</b></label>
    <select name="Name">
          <option value="Burhan">Burhan  </option>
          <option value="Redwan">Redwan </option>
          <option value="Ashik">Ashik   </option>
          <option value="Istiak ">Istiak   </option>

        </select>

        <label for="doj"><b>Date</b></label>
        <input type="text" name="doj" required>


  
  

    
    
  
    <input name="register" type="submit" class="btn btn-primary" value="Find">
  </div>
  
  </form>


<div align="center"> 

<?php

   if(isset($_POST['register']))
   {

    
    $Name=$_POST['Name'];
    $doj=$_POST['doj'];
    $book="Free";
    $sql = "SELECT * FROM avail WHERE Name =('$Name')  AND doj = ('$doj')  AND book = ('$book')";

      if($result = mysqli_query($con, $sql)){
       if(mysqli_num_rows($result) > 0){
         echo "<table>";

         echo "<tr>";
         echo "<th>Name</th>";
         echo "<th>Date</th>";
         
         
         echo "</tr>";

         while($row = mysqli_fetch_array($result)){
           echo "<tr>";
           echo "<td>" . $row['Name'] . "</td>";
           echo "<td>" . $row['doj'] . "</td>";
           
           echo "</tr>";
         }
         echo "</table>";
       // Free result set
         mysqli_free_result($result);
       } else{
         echo "No records matching your query were found.";
       }
     } else{
       echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
     }
      // Close connection
     mysqli_close($con);
   }
        
     
     
     
?>
</div>






<?php include_once "include/footer.php"; ?>
