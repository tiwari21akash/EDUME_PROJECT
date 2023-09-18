<?php 
	session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>EduMe</title>
	<!----css file link-->
	<link rel="stylesheet" type="text/css" href="../..//css/java_programming.css">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	<!----Linking google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Assistant" rel="stylesheet"> 

	<!----font-awsome start-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<script src="https://apis.google.com/js/platform.js"></script>


	<style type="text/css">
		#yt
		{
			margin-top: 50px;
		}

		#sidebarleftmenu
		{
				
		}

		body
		{
			

		}
		.nav-list li {
    padding-top: 5px;
    padding-bottom: 5px;
}
.dropdown {
  position: relative;
  display: inline-block;
  margin-top:20px;
  
}

.dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none; border-radius: 25px;
}

.dropdown {
  position: relative;
  display: inline-block;
  margin-top:20px;
  
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}



		#mainpagecontent
		{
			background-color: white;
			margin-top: 80px;
			height: auto;
			box-shadow: 5px 5px 5px 5px #ccc; 
			border-color: #ccc;
			padding-bottom:32px !important;


		}
		.content
		{
			color: black !important;
		}
		.active{
			background-color: orangered !important;
		}

	</style>
</head>
<body>
		<!------Navigation bar ends ---->
	<nav class="navbar navbar-inverse navbar-fixed-top" style="height: 80px;">
		<div class="container">
			<div class="navbar-header">
				<!------Responsive Button---->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navi">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>


				</button>

				<img src="edume.png" alt="hello" width="170" height="60">
			</div>
			<div class="collapse navbar-collapse" id="navi">
            <!------Navigation menus starts---->
				<ul class="nav navbar-nav navbar-right">
				<li> <a href="../../Programmingdemo.php">Home</a></li>
				<div class="dropdown">
					<li > <a href="" class="btn-success dropbtn" ><?php echo $_SESSION['username'];?></a></li>
					<div class="dropdown-content">
						<a href="profile.php">Profile</a>
						 
						<li> <a href="logout.php" id="our-location" class="btn-success" >Logout</a></li>
					</div>
					</div>
				</ul>
	                 <!------Navigation menus ends---->
			</div>
		</div>
	</nav>

		<!------Navigation bar ends ---->


		 <!------Side bar start---->


	<div class="sidemenu" id="sidebarleftmenu">
		<ul class="sidemenulist">
			<!-- <li><a href="" class="crossbutton" onclick="closesidemenu()">&times;</a></li> -->
			<!-- <li class ="<? //php if($_GET['id']=="") echo "active"; ?>"><a href="" >Home</a></li> -->


<?php 
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'uniquedeveloper');
$course_name=$_GET['course_name'];

//$_GET['course_name'];
// unset($_GET['course_name']);
$q="select * from courses where course_name='$course_name'";
$result=mysqli_query($con,$q);
while ($res=mysqli_fetch_array($result)) {
  ?>
		
  			<form action="fetch_main_content.php" method="POST">
             
  			<input type="hidden" name="txt1" value="<?php echo $res['id'] ?>">
			
			<button name="btn" class = "<?php echo ($_GET['id']==$res['id'])?"active":"" ?>" style="background-color: transparent;border: none;text-align:left;color: white;"><li style="width: 300px;"><?php echo $res['topic_name']; ?></li></button>

			</form>
			

<?php } ?>

		</ul>
	</div>

		 <!------Side bar ends---->

 		<!------java main content starts ---->

	<div id="mainpagecontent" class="shadow">
		
		<div class="content">
			<p>

			<?php

			if (isset($_SESSION['message'])) {
				echo $_SESSION['message'];
			}

			  ?>
			</p>
		
		</div>
			
		<div id="next-prev"> 
			<button id="btn_prev" onclick="prev()">Previous</button>
	   	  <button id="btn_next" onclick="next()">Next</button>
		</div>
		
	
	</div>


	
		<!------java main content Ends ---->



		<!------youtube subscribe button starts---->

<div id="yt"  class="g-ytsubscribe" data-channelid="UCxwf74gbHaiHHJ7XxZ51JyA" data-layout="full" data-count="default"></div>

		
		<!------youtube subscribe button Ends---->


		<!-- 	<script type="text/javascript">
		
		function opensidemenu()
		{
			document.getElementById('sidebarleftmenu').style.width='250px';
			document.getElementById('mainpagecontent').style.marginLeft='250px';
		}

		function closesidemenu()
		{
			document.getElementById('sidebarleftmenu').style.width='0';
			document.getElementById('mainpagecontent').style.marginLeft='0px';			
		}

	</script>
 -->

 <script type="text/javascript">
 	
 	var li=document.getElementsByTagName('li')[0].style="color:red";
 </script>


<!--- next and previous -->



<script>

// active using url 
const url = new URL(window.location.href);
if(url.searchParams.get('id') == null){
	document.querySelector('.sidemenulist').querySelector('button').classList.add("active");
}

function prev(){
	const active = document.querySelector('.active');
    active.parentElement.previousElementSibling.btn.click();
}

  function next(){
	const active = document.querySelector('.active');
    active.parentElement.nextElementSibling.btn.click();
  }
</script>

</body>
</html>