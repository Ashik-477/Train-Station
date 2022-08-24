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
   $email = $_POST['email'];
    $book = "Free";
   $Name = $_POST['Name'];
   $doj = $_POST['doj'];
   
   
   
 
    



        
			
			
			
      // mysql query to Update data
      $query="UPDATE avail SET book='Free',email='Free' 
      WHERE id= $id and email = '$email' and Name='$Name';";
        
   
        $result = mysqli_query($con, $query);
   
   if($result)
   {
       echo 'Successfully Canceled';
   }
   else{
       echo 'Data Not Updated';
   }
   
			
			
            
           
         
         
	   
        


      



	
   
   
   
		 
}
?>

<!DOCTYPE html>

<html>

<head>
  <br>
  <h1 style="text-align: center; ">Cancel </h1>

  <title> Reserve  </title>

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

    <body>
   <br>
        <form action="clear.php" method="post" align='center'>

            

            

            

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
        Id:
        <input type="integer" name="id" required><br><br>
		
		Email:
        <input type="text" name="email" required><br><br>
		
	
		
          
          
          <br>
          <br>
        </select>
        <br>
			
			
			

            <input type="submit" name="update" value="Cancel" class="btn btn-primary">

        </form>

<?php include_once "include/footer.php"; ?>