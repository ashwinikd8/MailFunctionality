<?php
include('democode.php');
session_start();
?>

<html>
<head>
<title>Main</title>

<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/demo.js"> </script>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" href="css/menustyles.css">

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
		<!-- <img src="/demo/images/jquery-ui-3E3E3E.gif"> -->
	
	
  <H1>Add here</h1>
  <!--  The form that will be parsed by jQuery before submit  -->
  <form action="" method="post" id="register1-form" novalidate="novalidate">
  
   <table>
 
   <tr>
   <th>First Name</th> 
   <td><input type="text" id="firstname" name="firstname" class="error"/> </td>
   </tr>

   <tr>
   <th> Middle Name</th>
   <td><input type="text" id="Middle" name="Middle" /></td>
   </tr>
      
   <tr>
   <th>Last Name</th>
   <td><input type="text" id="lastname" name="lastname" /> </td>
   </tr>

   <tr>
   <th>Email</th>
   <td><input type="text" id="email" name="email" /> </td>
   </tr>

   <tr>
   <th>Password</th>
   <td><input type="password" id="password" name="password" /> </td>
   </tr>

   <tr>
   <th>Re-Enter Password</th>
   <td><input type="password" id="password_confirm" name="password_confirm" /> </td>
   </tr>

 <tr>
<th colspan=2>    
	<textarea name="txtaddress" style="width:100%"></textarea>
 </th>
</tr>

   <tr>
   <td colspan=2> <input type="submit" name="btnsubmit" value="Submit" id="btnsubmit" /> 
    <input type="submit" name="btncancel" value="Cancel" id="btncancel"/> 
     </td>

   </table>
     </form>

    <br>
  <form action="" method="post" id="to-form">
<table>
<tr>
<th><input type="text" id="txtto" name="txtto[]" /> </th>
</tr>
<tr>
<th><input type="text" id="txtto" name="txtto[]" /> </th>
</tr>
<tr>
<th><input type="text" id="txtto" name="txtto[]" /> </th>
</tr>
<tr>
<th><input type="submit" id="btnto" name="btnto" value="Submit"/> </th>
</tr>
</table>    
     </form>

  
<!--
    <div id="divto" style="overflow-y:scroll;height:10%;">
    TO: <input type="text" name="txtto" id="txtto"/>
    </div>
-->
    
  
</body>
</html>
