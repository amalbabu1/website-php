<html>
<body>
<?php
   //$eno=$_GET['txt'];
    $eno=$_POST["enumber"];
 
//$eno=10;
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
$sql="SELECT eno,attendance from employee";
if ($result=mysqli_query($conn,$sql))
  {
  $a=0;// Fetch one and one row
  while ($row=mysqli_fetch_row($result))
    {
      while($eno==$row[0]){
             $q=$row[1];
echo "<p> <font color=blue size='20pt'>attendance is</font> <font color=red size='30pt'>$q$</font></p>";       
          $a=1;
          break;}
      }if($a==0){printf("\r\n<br>sorry invalid detail");} 
  mysqli_free_result($result);
}
    

mysqli_close($conn);

    ?>
    <a href="index.html">go back</a>
    