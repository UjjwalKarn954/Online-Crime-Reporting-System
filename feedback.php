<?php

$name = $_POST['name'];
$email = $_POST['email'];
$experience = $_POST['experience'];
$feedback =$_POST['feedback'];
if (!empty($name) || !empty($email) || !empty($experience) || !empty($feedback)) {
 $host = "localhost";
    $username = "root";
    $dbPassword = "";
    $dbname = "ocrs";
    $conn = mysqli_connect($host, $username, $dbPassword, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}    
     // $SELECT = "SELECT email From registeration Where email = ? Limit 1";
     $sql = "INSERT Into feedback (name , email,experience ,feedback) values('$name','$email', '$experience', '$feedback')";
     if (mysqli_query($conn, $sql)) {
       echo'<script>alert("Thank You for your feedback")</script>';
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