<?php
  $password = $_POST['password'];
  $email = $_POST['email'];

  $password =stripcslashes($password);
  $email = stripcslashes($email);
  // $password = mysql_real_escape_string($password);
  // $email = mysql_real_escape_string($email);

    
   
    $host = "localhost";
    $username = "root";
    $dbPassword = "";
    $dbname = "ocrs";
    $conn = mysqli_connect($host, $username, $dbPassword, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}    
      
      $result = mysqli_query($conn," SELECT * FROM registeration WHERE email = '$email' and password = '$password'")
    ;
      $row = mysqli_fetch_array($result);
		
      if($row['password']==$password && $row['email'] == $email){
         
         header("location: Userhomepage.html");
      }else {
         $error = "Your Login Name or Password is invalid";}
    
    mysqli_close($conn);
?>