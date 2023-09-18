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
 $name=$_POST['fullName'];
 $traction_id=$_POST['traction_id'];
 $username=$_POST['username'];
 $email=$_POST['email'];
 $phoneNumber=$_POST['phoneNumber'];
 $upi_id=$_POST['upi_id'];
 $course=$_POST['course'];

 $q="select * from paid_course where tranction_id='$traction_id'";

 $result=mysqli_query($con,$q);
 $num=mysqli_num_rows($result);
 if ($num>0)
  {
	
	header('location:dublicate.html');
 }
 else
 {
    $qy="insert into paid_course(tranction_id,name,username,email,phonenumber,upi,course) values('$traction_id','$name','$username','$email','$phoneNumber','$upi_id','$course')";
    mysqli_query($con,$qy);
    echo "inserted";
    header('location:index.php');
 }
 
 




 ?>