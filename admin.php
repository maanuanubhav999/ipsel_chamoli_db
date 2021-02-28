<!DOCTYPE html>
<html lang="en">
<head>
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
<label for="option">Choose a topic:</label>

<select name="option" id="option">
  <option value="agriculture">agriculture</option>
  <option value="horticulture">horticulture</option>
  <option value="fisheries">fisheries</option>
  <option value="shop">shop</option>

</select>
    <input type="submit" name="submit" value="submit"/>
</form>

<?php
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
      echo "You have selected:" .$selected_val;
      echo ("<br> ");
     
     
        
      $sql = "select * from users where options='$selected_val'";
      
      $result = mysqli_query($mysqli, $sql);
      
      //  while($row = mysqli_fetch_row($result))
      // {
      //     echo ($row); 
          
      // }
      if (mysqli_num_rows($result) > 0) {
        echo "<table><tr><th>aadhar</th><th>contact</th><th>name</th><th>father name</th><th>address</th><th>options</th></tr>";

        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
        //  echo " aadhar " . $row["aadhar_no"]. " contact No " . $row["contact_no"]. " name " . $row["name"].  " father's Name " . $row["fathers_name"].  " address " . $row["address"].  " options " . $row["options"]."<br>";
        echo "<tr><td>".$row["aadhar_no"]."</td><td>".$row["contact_no"]."</td><td> ".$row["name"]."</td><td>".$row["fathers_name"]."</td><td>".$row["address"]."</td><td>". $row["options"]."</td></tr>";

        echo "/table";
        }
      } else {
        echo "0 results";
      }
      
            //while($row = mysqli_fetch_assoc($result))
      mysqli_close($mysqli);
     
      
      
     
      }
    }
    


   
  
?>

</body>
</html>