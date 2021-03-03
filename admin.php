<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
<body>

<form action="" method="get">
<label for="option">Choose a Department:</label>

<select name="option" id="option">
<option value="all">ALL</option>

  <option value="agriculture">agriculture</option>
  <option value="horticulture">horticulture</option>
  <option value="fisheries">fisheries</option>
  <option value="shop">shop</option>
  

</select>
    <input type="submit" name="submit" value="submit"/>
</form>
<?php
// session_start();
   // $sql ="";
    $servername = "localhost";
    $username = "root";
    $password = "";
    
    $dbname = "ipsel_chamoli";
    //$conn= mysqli_connect($servername,$username,$password,$dbname);
    $mysqli = new mysqli($servername, $username, $password, $dbname);
    if ($mysqli->connect_errno) echo "Error - Failed to connect to MySQL: " . $mysqli->connect_error;
    else {
      
       if(isset($_GET['submit'])){
      $selected_val = $_GET['option'];


      if ($selected_val=="all"){
        $sql= "select * from users";
      }
      else{
        $sql = "select * from users where options='$selected_val'";
      }
      echo "You have selected:" .$selected_val;
      echo ("<br> "); 
      
      
    //   $result = mysqli_query($mysqli, $sql);
    //   $_SESSION['result'] = $result;

          
     // mysqli_close($mysqli);
      
     
      }
    }
   $sql= "select * from users";
    $result = mysqli_query($mysqli, $sql);
    ?>

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Aadhar No</th>
      <th scope="col">contact No</th>
      <th scope="col">Name</th>
      <th scope="col">fathers name</th>
      <th scope="col">Address</th>
      <th scope="col">department</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>

  <?php
//   session_start();

//   $result = $_SESSION['result'];
  if (mysqli_num_rows($result) > 0) {
      
    
// output data of each row

while($row = mysqli_fetch_assoc($result)) {
?>  
 <tr > 
 <th scope="row"><?php  echo $row ['aadhar_no']; ?> </th>
      
		   <td><?php echo $row ['contact_no']; ?></td>
		   <td><?php echo $row ['name']; ?></td>
		   <td><?php echo $row ['fathers_name']; ?></td>
		   <td><?php echo $row ['address']; ?></td>  
       <td><?php echo $row ['options']; ?></td>  
       <td><?php echo $row ['status'];  ?> 
              <button type="button" type="submit" value="accept" onclick="myFunction1()" class="btn btn-success"><i class="fas fa-edit"></i>Accept</button>
            <button type="button" type="submit" value="reject" onclick="myFunction2()" class="btn btn-danger"><i class="far fa-trash-alt"></i>Reject</button> </td>  
            

		   </tr>
		<?php }

       
        
        ?>
    <?php

} else {
echo "0 results";
}
  
?>
   
  </tbody>
</table>
  


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>