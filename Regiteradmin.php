<?php

$name = $_POST['name'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$dob =$_POST['dob'];
if (!empty($name) || !empty($password) || !empty($gender) || !empty($email) || !empty($address) || !empty($phone) || !empty($dob)) {
 $host = "localhost";
    $username = "root";
    $dbPassword = "";
    $dbname = "ocrs";
    $conn = mysqli_connect($host, $username, $dbPassword, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}    
     // $SELECT = "SELECT email From registeration Where email = ? Limit 1";
     $sql = "INSERT Into registeradmin (name, password, gender, email, address, phone,dob) values('$name','$password', '$gender', '$email', '$address', '$phone', '$dob')";
     if (mysqli_query($conn, $sql)) {
       echo "Registration succesfull Return to homepage:";
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