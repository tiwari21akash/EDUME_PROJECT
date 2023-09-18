<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="css/login.css" />
    <title>Edu me</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
 
</style> 

</head>
  <body  >

    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form method="POST" action="validation.php" onsubmit="return validation()" class="sign-in-form">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="name" id="username" autocomplete="off">
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password" id="password" autocomplete="off">
            </div>
            <span id="perror"></span>
            
            <input type="submit" value="Login" class="btn solid" />
            
          </form>




          <form method="POST" onsubmit="return verify()" action="registration.php" class="sign-up-form">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="name" id="uname" autocomplete="off">
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="email" id="mail" autocomplete="off">
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password" id="pwd" autocomplete="off">
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Confirm Password" name="confirm_password" id="cpwd" autocomplete="off">
            </div>
            <span id="error"></span>
			      
            <input type="submit" class="btn" value="Sign up" />
                       </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h1>New here ?</h1>
            <p>
              Come Join us in Jorney of Better Learning 
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h1>One of us ?</h1>
            <p>
              Let's get back to Learning
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

	<!-- Funtion for sign up -->


  
    <script type="text/javascript">
      function verify(){
        var username=document.getElementById('uname').value;
        var password=document.getElementById('pwd').value;
        var confirm_password=document.getElementById('cpwd').value;
        var email=document.getElementById('mail').value;
        console.log(username,password,confirm_password,email)
        if ((username=="") || ( password=="") || (confirm_password=="") || (email==""))
         {
           document.getElementById('error').innerHTML="Please fill all the details";
           return false;
         }
         else{
          return true;
         }
      }
      $(document).ready(function(){
      
      $('#cpwd').keyup(function(){
        var pwd=$('#pwd').val();
        var cpwd=$('#cpwd').val();
        if (cpwd!=pwd) 
        {
          $('#errorlabel').html('**password are not matched');
          $('#errorlabel').css('color','red');
          return false;
        }
        else
        {
          $('#errorlabel').html('');
          return true;
        }
      });
      
      });
      
      </script>
    <script type="text/javascript">
	
      function validation() {
        var username=document.getElementById('username').value;
        var password=document.getElementById('password').value;
      
        if ((username=="") ||( password==""))
         {
           document.getElementById('perror').innerHTML="please fill the details";
           return false;
         }
      }
      
      
      function clear() {
        document.getElementById('perror').innerHTML="ksdfisdhfg";
      }
      
      </script>
               <!---confirm password validation end------->
      
             
      
 
      
    <script src="js/login.js"></script>
  </body>
</html>
