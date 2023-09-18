<?php
session_start();

if (!isset($_SESSION['username'])) {
	header('location:login.php');

}
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Aleo" rel="stylesheet">
	
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
	<title>EduMe</title>
	<!----magnific popup css file for work section -->
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">

	<!----owlcarousel css file for our team section -->
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	

	<!----Linking google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

	<!----font-awsome start-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!----font-awsome ends-->

		<!----css file link-->
	<link rel="stylesheet" type="text/css" href="css/Styles.css">

	   <!----favicon setting-->
	<link rel="shortcut icon" type="text/css" href="img/mylogo.png">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!----magnific popup js file for work section -->
	<script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>

	<!----owlcarousel js file for our team section -->
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!----------email notification-------->

	<style type="text/css">
	
	.servicebody
	{
		

	}

	html
	{
		scroll-behavior: smooth;
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
</style>

</head>
<body onload="myfunction()">
		   <!---preloader starts	----->

		   <div id="loading"></div>

		   <!---preloader Ends	----->
			<!------------------------------------ Header Start -->
		   <?php 
			include_once('header.php');
		   ?>
			<!------------------------------------ Header Start -->

			<!---Slider Section starts	------->
			<section class="slider text-center" id="slider">
				<div class="slider-overlay">
					<div class="slider-content">
						<div class="icons">

							<i class="fa fa-apple"></i>
							<i class="fa fa-android"></i>
							<i class="fa fa-windows"></i>
						</div>
						<br>
						<div class="text">      <!-- jquery typed effect -->
							
						</div>
							<div class="cta-div">
								<a href="#wor" class="btn1">LEARN TODAY</a>
								<a href="#myservice_section" class="btn2">LEARN TOMORROW</a>
							</div>
							<br><br>
							 
					</div>
				</div>
			</section>

			<!---Slider Section ends------->

			<!---Login Start------->

			<div class="modal fade modal-dialog-centered" id="mymodal">
				<div class="modal-dialog ">
					<div class="modal-content">
						<h3 id="login-heading">Login</h3>
						
					<div class="modal-body" >
						<div class="left-box">
						<form method="POST" action="validation.php">
							<div class="form-group">
								<label><i class="fa fa-user fa-2x"></i>Username :</label>
								<input type="text" name="name" class="form-control">

								<label><i class="fa fa-lock fa-2x"></i>Password :</label>
								<input type="password" name="password" class="form-control">
								<button id="btn-login" type="submit">Login</button>
								
							</div>
							<div class="register">
								<h2>Don't have an account?&nbsp<span id="create-account"><a href="signup.html">Create</span></a> </h2>
							</div>
							
						</form>
					</div>
						
					</div>
					
						
				</div>
			</div>
		</div>

         <!---Login Ends------->


		<!-- Courses Section Start------->
		
		<div class="container-fluid servicebody wor" id="wor">
         <div class="service-are" id="service">
         	<div class="row">
         		<div class="col-xs-12">
         			<div class="section-title text-center">
         				<h2><b>COURSES</b></h2>
         				<p>
         					Gain Advantage of the course design to meet all your doubts
         				</p>
         			</div>
         		</div>
         	</div>
         	<div class="row">
         		<div class="col-md-4 col-sm-6 col-xs-12">
         			<div class="service-wrap text-center">
         				<div class="service-icon">
         					<i class="fa fa-leaf"></i>
         				</div>
         				<h3><a href="programmingdemo.php">PROGRAMMING</a></h3>
         				<p>
         					Here you will find all the lecture tutorials related to programming languages 
         					like JAVA,PYTHON,ANDROID etc
         				</p>
         			</div>
         		</div>

         		<div class="col-md-4 col-sm-6 col-xs-12">
         			<div class="service-wrap text-center">
         				<div class="service-icon">
         					<i class="fa fa-laptop"></i>
         				</div>
         				<h3><a href="video tutorials\java\display_video_courses.php">VIDEO TUTORIALS</a></h3>
         				<p>
         					Here you will find all the videos tutorials related to programming languages 
         					like JAVA,PYTHON,ANDROID etc
         				</p>
         			</div>
         		</div>

         		<div class="col-md-4 col-sm-6 col-xs-12">
         			<div class="service-wrap text-center">
         				<div class="service-icon">
         					<i class="fa fa-laptop"></i>
         				</div>
         				<h3><a href="online_quize/quizhome.php">EXERCISE</a></h3>   <!--  exercise/exercise.php -->
         				<p>
         					Here you will find problem programs for practice and their implementation also which will improve your coding skill
         				</p>
         			</div>
         		</div>


			<!---Course Section Start------->


		 <!---Our Paid Section Start------->


         <div class="container-fluid servicebody" id="myservice_section">
         <div class="service-are" id="service">
         	<div class="row">
         		<div class="col-xs-12">
         			<div class="section-title text-center">
         				<h2><b>Live Training</b></h2>
         				<p>
         					<b>Join our offline course led by experienced mentors from top tech companies.<br> Gain hands-on experience with classroom sessions. Register now!
         				</p>
         			</div>
         		</div>
         	</div>
         	<div class="row">
         		<div class="col-md-4 col-sm-6 col-xs-12">
         			<div class="service-wrap text-center">
         				<div class="service-icon">
         					<i class="fa fa-leaf"></i>
         				</div>
         				<h3><a href="#">PROGRAMMING</a></h3>
						 <a href="regis_form.html"><button type="button" class="btn btn-light">Registration</button></a>
         			</div>
         		</div>

         		<div class="col-md-4 col-sm-6 col-xs-12">
         			<div class="service-wrap text-center">
         				<div class="service-icon">
         					<i class="fa fa-laptop"></i>
         				</div>
         				<h3><a href="#">Web Development</a></h3>
						 <a href="regis_form.html"><button type="button" class="btn btn-light">Registration</button></a>
         			</div>
         		</div>

         		<div class="col-md-4 col-sm-6 col-xs-12">
         			<div class="service-wrap text-center">
         				<div class="service-icon">
         					<i class="fa fa-laptop"></i>
         				</div>
         				<h3><a href="#">Mern Full Stack Web</a></h3>   <!--  exercise/exercise.php -->
						 <a href="regis_form.html"><button type="button" class="btn btn-light">Registration</button></a>
         			</div>
         		</div>
         	</div>
         </div>
     </div>

			<!---Our Paid Course Section Ends------->

			<!---Our Team Section Start------->
		
			<div class="container text-center" id="our-members">
			<h2><b>MEMBERS</b></h2>
				<p>
					<b>These are our excellent member you can contact anyone anytime <br> and all are experts and well experience</b>
				</p><br>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div id="team-memebers" class="owl-carousel owl-theme">
							<div class="team-member text-center">
								<img src="img/Akash-T.jpg" class="img-responsive">
								<div class="team-member-info text-center">
									<h4 class="team-member-name">Akash Tiwari</h4>
									<h4 class="team-member-designation">Software Developer (TCS)</h4>
									<!-- <ul class="social-list">
										<li><a href="https://www.facebook.com/profile.php?id=100004910078558" class="social-icon icon-gray"><i class="fa fa-facebook"></i></a></li>
										<li><a href="https://twitter.com/SunilYa35862617" class="social-icon icon-gray"><i class="fa fa-twitter"></i></a></li>
										<li><a href="" class="social-icon icon-gray"><i class="fa fa-google-plus"></i></a></li>
									</ul> -->
								</div>
							</div>


							<div class="team-member text-center">
								<img src="img/Adit.jpg" class="img-responsive">
								<div class="team-member-info text-center">
									<h4 class="team-member-name">Aditya Singh</h4>
									<h4 class="team-member-designation">Software Developer (Nucleus Software)</h4>
									<!-- <ul class="social-list">
										<li><a href="" class="social-icon icon-gray"><i class="fa fa-facebook"></i></a></li>
										<li><a href="" class="social-icon icon-gray"><i class="fa fa-twitter"></i></a></li>
										<li><a href="" class="social-icon icon-gray"><i class="fa fa-google-plus"></i></a></li>
									</ul> -->
								</div>
							</div>


							<div class="team-member text-center">
								<img src="img/Ayush.jpg" class="img-responsive">
								<div class="team-member-info text-center">
									<h4 class="team-member-name">Ayushi Srivastava</h4>
									<h4 class="team-member-designation">Human resources (Pyramid)</h4>
									<!-- <ul class="social-list">
										<li><a href="" class="social-icon icon-gray"><i class="fa fa-facebook"></i></a></li>
										<li><a href="" class="social-icon icon-gray"><i class="fa fa-twitter"></i></a></li>
										<li><a href="" class="social-icon icon-gray"><i class="fa fa-google-plus"></i></a></li>
									</ul> -->
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>

			<!---Our Team Section Ends------->
<!-- =============================================================================================================================== -->




<!-- =============================================================================================================================== -->
			<!---FAQs Section Start------->
			<section class="faq" id="myfaq">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<h2><b>GENERAL FAQs</b></h2>
							<div class="sub-heading">
								<p>
									you can ask the regarding the issues.we will <br>solve that together for sure
								</p>
								
							</div>
						</div>	

					</div>
				</div> <br>
				<div class="container">
					<div class="row">
						<div class="col-md-7">
							<div class="panel-group" id="accordian">


								<?php 

								  $con=mysqli_connect('localhost','root');
									   if (!$con) {
									   	die('connection failed'.mysqli_connect_error());
									   }

									mysqli_select_db($con,'uniquedeveloper');

									$sql="select * from faq";
									$result=mysqli_query($con,$sql);
									while ($row=mysqli_fetch_array($result))
									{
					?>

								<div class="panel panel-default">
									<div class="panel-heading" id="headingOne">
										<h4 class="panel-title">
											<a href="#<?php echo $row['id']; ?>" data-toggle="collapse" class="collapse" data-parent="#accordian"><?php echo $row['faq_title']; ?></a>
										</h4>
									</div>
									<div id="<?php echo $row['id']; ?>" class="panel-collapse collapse " aria-labelledby="headingOne">
										<div class="panel-body">
											<p>
												<?php echo $row['faq_description']; ?>
											</p>
										</div>
									</div>
								</div>

							<?php } ?>



								<div class="panel panel-default">
									<div class="panel-heading" id="headingTwo">
										<h4 class="panel-title">
											<a href="#collapseTwo" class="collapsed" data-toggle="collapse" data-parent="#accordian">How does it works ?</a>
										</h4>
									</div>
									<div id="collapseTwo" class="panel-collapse collapse" aria-labelledby="headingTwo">
										<div class="panel-body">
											<p>
												EduMe is an online E-learning website <br>
												Here you can learn programming languages,Tech News and improve your coding skill	
											</p>
										</div>
									</div>
								</div>




								
							</div>
						</div>

						<div class="freeimage" id="meimg">
							<div class="col-md-2 col-md-offset">
								<img src="img/faq1.png">
							</div>
						</div>

					</div>
				</div>
				

			</section>


			<!---FAQs Section Ends------->


			<!---Contact us Section Start------->


<!------ Include the above in your HEAD tag ---------->

<!--------------------------------------------- Footer Start ------------------------------->

<?php 

include_once('footer.php');
?>
 <!--------------------------------------------- Footer end------------------------------->

  			<!---This is script section------->

<script type="text/javascript">
	
	var preloader=document.getElementById('loading');
	function myfunction()
	 {
		preloader.style.display='none';
	}


	function addButton() {
		var body=document.getElementsByTagName('body')[0];
		var myfaq1=document.getElementById('myfaq');
		var btn=document.createElement('button');
		btn.innerHTML='sunil';
		myfaq1.appendChild(btn);
		body.appendChild(myfaq);
	}



</script>

<script src="js/jquery.ripples-min.js" type="text/javascript"></script>
<script src="js/typed.min.js" type="text/javascript"></script>
<script src="js/main.js" type="text/javascript"></script>






<!--   <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/theme/js/script.js"></script> -->

</body>
</html>