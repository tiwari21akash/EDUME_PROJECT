<?php 

session_start();


$con=mysqli_connect('localhost','root');

if ($con) 
  {
		echo "connection successful";
  }
else
	{
		echo "no connection";
	}

 mysqli_select_db($con,'uniquedeveloper');
 $old_pass=$_POST['old_pass'];
 $new_pass=$_POST['new_pass'];
$username=$_SESSION['username'];
$email=$_SESSION['email'];
$q="select * from login where username='$username' and email='$email'";

 $result=mysqli_query($con,$q);
 $res=mysqli_fetch_assoc($result);

 if ($res['password']==$old_pass)
  {

    $qe = "UPDATE login SET password='$new_pass' WHERE username='$username' and email='$email' ";
	if(mysqli_query($con,$qe)){
		header('location:profile.php');
		header('location:logout.php');
	}
	 
}
else{
		header('location:wronginfo.html');
	}
 
 
 




 ?>