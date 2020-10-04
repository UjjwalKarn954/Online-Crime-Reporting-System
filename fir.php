<?php
    $host = "localhost";
    $username = "root";
    $dbPassword = "";
    $dbname = "ocrs";
    $conn = mysqli_connect($host, $username, $dbPassword, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }    
$sql = "SELECT name, address, gender,date,firtype,description  FROM registeredfir";
$result = $conn->query($sql);
?>
 <html>
<head>
<title>Fir Table with database</title>
<style>
table {
border-collapse: collapse;
width: 80%;
color: #588c7e;
font-family: monospace;
font-size: 20px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body style="background: green">
	<h2 style="font-family: courier new;color: blue;">List of fir Registered: </h2>


<?php

if ($result->num_rows > 0) {
// output data of each row
while($rows = mysqli_fetch_assoc($result)) {
	?>

	<table>

<tr>
<th>name</th>
<th>address</th>
<th>gender</th>
<th>date</th>
<th>firtype</th>
<th>description</th></tr>
	</ol>
	<tr> 
		<td><?php echo $rows['name']; ?></td>
		<td><?php echo $rows["address"] ;?></td>
		<td><?php echo $rows["gender"]; ?></td>
		<td><?php echo $rows["date"] ;?></td>
		<td><?php echo $rows["firtype"] ;?></td>
		<td><?php echo $rows["description"] ;?></td>
</tr>
</table>
<?php
}
}
$conn->close();
?>
</body>
</html>