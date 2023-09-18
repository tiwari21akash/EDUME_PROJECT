<!---Navigation Starts	----->

<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<!------Responsive Button---->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navi">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>


				</button>
				<img src="img/edume.png" alt="hello" width="170" height="60">
				
				 
			</div>
			<div class="collapse navbar-collapse" id="navi">
                 <!------Navigation menus starts---->
				<ul class="nav navbar-nav navbar-right">
					<li> <a href="">Home</a></li>
					<li> <a href="#wor">Course</a></li>
					<li> <a href="#myservice_section">Training</a></li>
					
					<li> <a href="#our-members">Team</a></li>
					<li> <a href="#myfaq">FAQs</a></li>
					<div class="dropdown">
					<li > <a href="" class="btn-success dropbtn" ><?php echo $_SESSION['username'];?></a></li>
					<div class="dropdown-content">
						<?php
						if($_SESSION['username']!='admin')
							echo "<a href='profile.php'>Profile</a>";
						else
						 	echo "<a href='admin/admin_main.php'>Profile</a>";
						?>
						<li> <a href="logout.php" id="logout-button" class="btn-success" >Logout</a></li>
					</div>
					</div>
	
				</ul>
	                 <!------Navigation menus ends---->
			</div>
		</div>
	</nav>
			<!---Navigation Ends	----->