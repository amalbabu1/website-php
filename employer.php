<html>
<body>
<?php
 
// Create connection
$conn = new mysqli('localhost','root','','amal');
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "DB Connected successfully";
 
// this will select the Database sample_db
mysqli_select_db($conn,"amal");
 
echo "\n DB is seleted as Test  successfully";
$query="SELECT * FROM employee";
$result = mysqli_query($conn,$query);
echo "<br><table border='1'>
<tr>
<th>eno</th>
<th>fname</th>
<th>attendance</th>
<th>salary</th>
</tr>";


while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['eno'] . "</td>";
echo "<td>" . $row['fname'] . "</td>";
echo "<td>" . $row['attendance'] . "</td>";
echo "<td>" . $row['salary'] . "</td>";
echo "</tr>";
}
echo "</table>";
mysqli_close($conn);
?>
