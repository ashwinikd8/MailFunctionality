<?php
$con=mysqli_connect("localhost","root","root","dummy"); 
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
} else {
  //~ echo "<h1 style='color:black;'>Connect</h1>";
}
?>
