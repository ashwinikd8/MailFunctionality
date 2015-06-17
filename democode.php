<?php
    include('connection.php');

    $id=$_POST['txtid'];
    $firstname = $_POST['firstname'];
    $Middle = $_POST['Middle'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
$msg=$_POST['txtaddress'];

    if(isset($_POST['btnsubmit']))
      {
	$query="INSERT INTO `info`(`id`, `first`, `middle`, `last`, `email`, `password`,`message`) VALUES ('','$firstname','$Middle','$lastname','$email',md5('$password'),'$msg')";
	echo $query;
	$result=mysqli_query($con,$query) ;
	if($result)
	  {
	    $details=mysqli_fetch_array($result); 
	    echo "<h1>Data Inserted Successfully</h1>";
	  } else { 
	  echo "Insert Error"; 
	}
	//~ showdata();
	//~ header("Location: success.php");
	header("Location: $self?alldone=1");
      }

    if(isset($_POST['btnupdate']))
      {
	$query="UPDATE `info` SET `first`='$firstname',`middle`='$Middle',`last`='$lastname',`email`='$email',`password`=md5('$password'),`message`='$msg' Where `id`='$id'";
	$result=mysqli_query($con,$query) ;
	if($result)
	  {
	    $details=mysqli_fetch_array($result); 
	    echo "<h1>Data Updated Successfully</h1>";
	  } else { echo "Update Error"; }
	//~ showdata();
	header("Location: $self?alldone=1");
      }

    if(isset($_POST['btndelete']))
      {
	$query="DELETE FROM `info` WHERE `id`= '$id'";
	$result=mysqli_query($con,$query) ;
	if($result)
	  {
	    $details=mysqli_fetch_array($result); 
	    echo "<h1>Data Deleted Successfully</h1>";
	  } else { 
	  echo "Delete Error"; 
	}
	header("Location: $self?alldone=1");
      }

    if(isset($_POST['btnviewdata']))
      {
	$query="SELECT * FROM `info` Where `id`='$id'";
	$result=mysqli_query($con,$query) ;
	$details=mysqli_fetch_array($result); 
      }

    if(isset($_POST['btndeleteall']))
      {
	foreach($_POST['chkmark'] as $check)
	  {
	    print_r($check);
	    $query="SELECT * FROM `info` Where `id`='$check'";
	    print_r($query);

	  }
      }

    if(isset($_POST['btnto']))
      {
	foreach($_POST['txtto'] as $to)
	  {
	    if($to !=null){
	      echo "<br>";
	      print_r($to);
	    }
	  }
      }

function showdata() {
  $query="SELECT * FROM `info`order by id desc limit 1";
  $result=mysqli_query($GLOBALS['con'],$query) ;
  if($result){
    $details=mysqli_fetch_array($result,MYSQLI_ASSOC); 
    echo "<h1>display</h1>";
  } else { echo "Display Error"; }
}
?>
