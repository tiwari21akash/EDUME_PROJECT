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
 $name=$_POST['name'];
 $pass=$_POST['password'];
 $email=$_POST['email'];

 $q="select * from login where username='$name' or email='$email'";

 $result=mysqli_query($con,$q);
 $num=mysqli_num_rows($result);
 if ($num>0)
  {
	header('location:dublicate.html');
 }
 else
 {
 	$qy="insert into login(username,password,email) values('$name','$pass','$email')";
 	mysqli_query($con,$qy);
 	echo "inserted";
	$_SESSION['username']=$name;
	$_SESSION['email']=$email;
 	header('location:index.php');
 }





 ?>