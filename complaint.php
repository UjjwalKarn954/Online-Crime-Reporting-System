<?php

$name = $_POST['name'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$date =$_POST['date'];
$firtype=$_POST['firtype'];
$desc=$_POST['desc'];
 if( !empty($name) || !empty($firtype) || !empty($gender)  || !empty($address)  || !empty($date) || !empty($desc)) {
    $host = "localhost";
    $username = "root";
    $dbPassword = "";
    $dbname = "ocrs";
    $conn = mysqli_connect($host, $username, $dbPassword, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}    
     $chk="";  
    foreach($firtype as $chk1)  
   {  
      $chk .= $chk1.",";  
   }  
     $fir = "INSERT Into registeredfir (name, gender, address, date,firtype,description) values('$name', '$gender','$address', '$date', '$chk','$desc')";
     
     if (mysqli_query($conn, $fir)) {
       echo'<script>alert("fir registered successfully:")</script>'; 
     } 
else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
    mysqli_close($conn);
}
else{
  echo "All fields are required:";
}
?>