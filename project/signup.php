
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script defer src="checkPass.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

</head>
<body>

    <?php 

    include 'dbcon.php';
        if (isset($_POST['submit'])) {
            
            $firstname = mysqli_real_escape_string($con, $_POST['firstname']);
            $lastname = mysqli_real_escape_string($con, $_POST['lastname']);
            $phone = mysqli_real_escape_string($con, $_POST['phone']);
            $email = mysqli_real_escape_string($con, $_POST['email']);
            $password = mysqli_real_escape_string($con, $_POST['password']);
            $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
            $emailquery = " SELECT * from signup where email= '$email'" ;
            $query = mysqli_query($con, $emailquery);

            $emailcount = mysqli_num_rows($query);

             
                               if ($emailcount == true) {
                 $email1 = $_POST['email'];
                if (filter_var($email1, FILTER_VALIDATE_EMAIL) == false) {
                  ?>
                                <script> alert("Invalid email"); </script>
                            <?php
                }
            } 
            if($emailcount>0){
                ?>
                                <script> alert("Email already exists"); </script>
                            <?php
            }else{



                 if($password === $cpassword){

                   $insertquery= " INSERT INTO signup (firstname, lastname, phone, email, password, cpassword) VALUES ('$firstname','$lastname','$phone','$email','$password','$cpassword')";

                   $iquery= mysqli_query($con, $insertquery);




                       if($iquery){
                            ?>
                                <script> alert("registration Successfull"); </script>
                            <?php
                        }else{

                            ?>
                                <script> alert("Please enter correct data"); </script>
                            <?php
                    }

                                     }


                                     else{
                            ?>
                                <script> alert("password not matching"); </script>
                            <?php
                        }   
                                }
                                
                           }

                            ?> 







	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Rafiu Travel & Tour Agency</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="services.php">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="signup.php">signup</a>
      </li>

       
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div class="py-5">

				<h2 class="text-center text-muted">REGISTRATION</h2>
		</div>

<div class="row justify-content-center">
<div class="col-md-6">
<div class="card">
<header class="card-header">
	
	<h4 class="card-title mt-2">Sign up</h4>
</header>
<article class="card-body">
<form action="" method="POST" id="fileForm">
	<div class="form-row">
		<div class="col form-group"> 	 
                <label for="firstname">First name: </label>
                    <input class="form-control" type="text" name="firstname" id = "txt" autocomplete="off" required /> 
                        <span id="ef" class="text-danger"></span>    
            </div>
		 <div class="col form-group">
                                <label for="Lastname">Last Name: </label>
                    <input class="form-control" type="text" name="lastname" id = "txt" autocomplete="off" required  /> 
                        <span id="es" class="text-danger"></span> 
            </div>
	</div> <!-- form-row end.// -->
	 <div class="form-group">
                            <label for="Phone Number">Phone Number: </label>
                    <input class="form-control" type="Number" name="phone" id = "txt" autocomplete="off" required /> 
                        <span id="et" class="text-danger"></span> 
            </div>
	<div class="form-group">
                                <label for="emailadress">Email Address: </label>
                    <input class="form-control" type="text" name="email" id = "txt" autocomplete="off" required  /> 
                        <span id="efor" class="text-danger"></span> 
            </div>
	
	<div class="form-group">
		                <label for="password">Password: </label>
                    <input class="form-control" type="password" name="password" id = "txt" autocomplete="off" required  /> 
                        <span id="esix" class="text-danger"></span> 
	</div> 
	<div class="form-group">
		                <label for="confirmpassword">Confirm Password: </label>
                    <input class="form-control" type="password" name="cpassword" id = "txt" autocomplete="off" required  /> 
                        <span id="esev" class="text-danger"></span> 
	</div>  
    
    <div class="form-group">
                <button class="btn btn-success" type="submit" name="submit" >Register</button>
            </div>

    <small class="text-muted">By clicking the 'Sign Up' button, you confirm that you accept our <br> Terms of use and Privacy Policy.</small>                                          
</form>
</article> <!-- card-body end .// -->
<div class="border-top card-body text-center">Have an account? <a href="">Log In</a></div>
</div> <!-- card.// -->
</div> <!-- col.//-->

</div> <!-- row.//-->


</div> 
<!--container end.//-->
</form>







<footer>
            <p class="p-3 text-center text-white bg-dark">@RafiuAhmedproduction-PAK</p>
        </footer>
</body>
</html>