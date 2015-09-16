<?php
include('democode.php');
?>

<html>
<head>
<title>Main</title>

<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/demo.js"> </script>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" href="css/menustyles.css">
<style>
#tblviewdata tr:hover {
background-color: gray;
background-color: gray;
}


</style>
<script type="text/javascript" src="tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea",
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
});
</script>

</head>
<body>
<div id='cssmenu'>
<ul>
   <li><a href='demo.php'><span>Add</span></a></li>
   <li><a href='view.php'><span>View</span></a></li>
</ul>
</div>
<?php
include('connection.php');
$id1 = $_GET['id'];
$query="SELECT * FROM `info` where id=$id1";
$result=mysqli_query($con,$query) ;	
$details=mysqli_fetch_array($result); 
?>

  <form action="" method="post" id="update-form" novalidate="novalidate">
	  
	  
	  <h1>View here</h1>
  <table id="tblviewdata">
	  <tr>
	  <th colspan=5>
		  <input type="submit" name="btndeleteall" id="btndeleteall" value="Delete All">
	  </th>
	  </tr>
	   <tr>
	   <th><input type='checkbox' id='chkmarkall' name='chkmarkall'/> </th>
	   <th>Id</th>
	   <th>Name</th>
	   <th>Email Id</th>
	   <th>Password</th>
	   </tr>
	   </tr>
	 <?php
	 include('connection.php');
	 $query="SELECT * FROM `info`";
 $result=mysqli_query($con,$query) ;
		while ($row = mysqli_fetch_array($result))
		{
			$id1=$row['id'];
			echo "<tr>";
			echo "<td><input type='checkbox' id='chkmark' name='chkmark[]' value=$id1 /> </td>";
			echo "<td>" . $id1 . "</td>";
			echo "<td>" . $row['first'] . " ". $row['middle'] . " " . $row['last'] . "</td>";
			echo "<td style='cursor:pointer;'> <a href='view.php?id=$id1'>" . $row['email'] . "</a></td>";
			echo "<td>" . $row['password'] . "</td>";
			echo "</tr>";
		}
		?>
   </table>
   <br>
<table id="tblview" cellpadding=4>
<tr>
<th colspan=5>
	Enter ID :
   <input type="text" id="txtid" name="txtid" value="<?php echo $details['id'] ?>"/> 
   <input type="submit" id="btnviewdata" name="btnviewdata" value="View"/> 
   <?php if( !$details && $id!="" ) { echo "<p class='error'>Invalid ID $id</p>"; } ?>
</th>
</tr>
  
   <tr>
   <th>First Name</th> 
   <th> Middle Name</th>
   <th>Last Name</th>
   <th>Email</th>
   <th>Password</th>
   </tr>

   <tr>
   <td><input type="text" id="firstname" name="firstname" value="<?php echo $details['first'] ?>"/> </td>
   <td><input type="text" id="Middle" name="Middle" value="<?php echo $details['middle'] ?>"/></td>
   <td><input type="text" id="lastname" name="lastname" value="<?php echo $details['last'] ?>"/> </td>
   <td><input type="text" id="email" name="email" value="<?php echo $details['email'] ?>"/> </td>
   <td><input type="text" id="password" name="password" value="<?php echo md5($details['password']) ?>"/> </td>
   </tr>
   <tr>
   <td colspan=5> 
	   <textarea name="txtaddress" style="width:100%"><?php echo $details['message'] ?></textarea>
</td>
   </tr>
    
   <tr>
   <td colspan=2> 
    <input type="submit" name="btnupdate" value="Update" id="btnupdate"/> 
    <input type="submit" name="btndelete" value="Delete" id="btndelete"/> 
   	<input type="submit" name="btncancel" value="Cancel" id="btncancel"/> 
     </td>
   </table>
  </form>
</body>
</html>
