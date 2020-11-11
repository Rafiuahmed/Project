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

	 	session_start();

    include 'dbcon.php';
        if (isset($_POST['login'])) {
            
            
            $email = mysqli_real_escape_string($con, $_POST['email']);
            $password = mysqli_real_escape_string($con, $_POST['password']);
            

            $r = " SELECT * from signup where email= '$email' && password='$password'" ;
            $result = mysqli_query($con, $r);

            $num = mysqli_num_rows($result);

            if($num==1){

            	header('location:home.php');
              
            }else{
?>
                                <script> alert("Invalid email/password"); </script>
                            <?php
            	 
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

				<h2 class="text-center text-muted">SIGN IN </h2>
		</div>

<div class="row justify-content-center">
<div class="col-md-6">
<div class="card">
<header class="card-header">
	
	<h4 class="card-title mt-2">Login</h4>
</header>
<article class="card-body">
<form action="" method="POST" id="fileForm">
	<div class="form-row">
		
		
	</div> <!-- form-row end.// -->
	 
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
                <button class="btn btn-success" type="login" name="login" >LOGIN</button>
            </div>

    <small class="text-muted">By clicking the 'login' button, you confirm that you accept our <br> Terms of use and Privacy Policy.</small>                                          
</form>
</article> <!-- card-body end .// -->

</div> <!-- card.// -->
</div> <!-- col.//-->

</div> <!-- row.//-->


</div> 
<!--container end.//-->
</form>


<br>
<br>
<br>
<br>

<footer>
            <p class="p-3 text-center text-white bg-dark">@RafiuAhmedproduction-PAK</p>
        </footer>
</body>
</html>