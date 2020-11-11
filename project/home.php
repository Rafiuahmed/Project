<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Rafiu Travel & Tour Agency</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
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
        <a class="nav-link" href="signup.php">Signup</a>
      </li>
		<li class="nav-item">
	        <a class="nav-link" href="logout.php">Logout</a>
	   </li>		
        
    
        

    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>



<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="picx1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Faisal Mosque, Islamabad, Pakistan</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="picx2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Kumrat Valley, Pakistan</h5>
        </div>
    </div>
    <div class="carousel-item">
      <img src="picx3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Khujerab Pass PakChina Border</h5>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<section class="my-5">
		<div class="py-5">
				<h2 class="text-center text-warning">ABOUT US</h2>
		</div>	

	<div class="container-fluid">
		<div class="row">
				<div class="col-lg-6 col-md-6 col-12">
						<img src="pic4.jpg" class="img-fluid aboutimg">
				</div>
				<div class="col-lg-6 col-md-6 col-12">
						<h2 class="display-5">Exploring tourism pakistan!</h2>
						<p class="py-4">Pakistan is a land of many splendors. The scenery changes northwards from coastal beaches to sandy deserts, desolate plateaus, fertile plains, dissected uplands and high mountains with beautiful vales, snow covered peaks and eternal glaciers. The fascination North areas of Pakistan comprises of the area where world’s three greatest mountain ranges meet Karakorum, Himalaya and Hindukush. Pakistan’s 4000 years history is richly illustrated by archaeological sites and imposing monuments scattered the length and breadth of the country. Brick cities from the Indus civilization, which flourished around 2000 B.C, stand with Buddhist ruins. Magnificent Muslims tombs from 12th century vie with the palaces, mosques and forts of the Mughals emperors of the 16th and 17th centuries. The country’s main cities reflect the many influences, both historical and modern, that have made Pakistan what it is.</p>
				</div>
 		</div>
    </div>

</section>

<section class="my-5">
		<div class="py-5">
				<h2 class="text-center text-warning">OUR SERVICES</h2>
		</div>	
		<div class="container-fluid" >
				<div class="row" >
					<div class="col-lg-4 col-md-4 col-12" style="width: 100%; height: 100%">
					<div class="card" style="width: 100%; height: 100%">
  <img src="pic11.jpg" style="width: 100%; height: 100%" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Hotel Reservation</h5>
    <p class="card-text">Whoever you are, whatever you seek, we’ve got the perfect place for you. Our 29,237,877 listings include 6,725,823 listings of homes, apartments and other unique places to stay, and are located in more than 2000 destinations in whole country and territories.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
					</div>
					<div class="col-lg-4 col-md-4 col-12">
					<div class="card">
  <img src="pic4.jpg" style="width: 100%; height: 100%" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Transportation</h5>
    <p class="card-text"> The transport services are provided to the clients with car, van, hiace, buses, trucks, or other vehicles. Whether you move yourself for the trip, visit, or shifting of the luggage, you can contact with us for the provision of the transport services according to your requirements.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
					</div>
					<div class="col-lg-4 col-md-4 col-12 ">
					<div class="card" >
  <img src="pic12.jpg" style="width: 100%; height: 100%" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Guide Services (Interpreter)</h5>
    <p class="card-text">you are accompanied by extremely knowledgeable and friendly guides whose desire is to share their local understanding of the region with you. Our Step-on Guides are hand – picked, skilled professionals with wide ranging travel expertise and definitely a sense of humor. </p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
					</div>
				</div>
		</div>
</section>
<section class="my-5">
		<div class="py-5">
				<h2 class="text-center text-warning">GALLERY</h2>
		</div>	
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12">
						<img src="pic7.jpg" style= "width: 100%; height: 100%" class="img-fluid pb-4">
				</div>	
				<div class="col-lg-4 col-md-4 col-12">
						<img src="pic8.jpg" style= "width: 100%; height: 100%" class="img-fluid pb-4">
				</div>	
				<div class="col-lg-4 col-md-4 col-12">
						<img src="pic16.jpg" style= "width: 100%; height: 100%" class="img-fluid pb-4">
				</div>	
				<div class="col-lg-4 col-md-4 col-12">
						<img src="pic10.jpg" style= "width: 100%; height: 100%" class="img-fluid pb-4">
				</div>	
				<div class="col-lg-4 col-md-4 col-12">
						<img src="pic11.jpg" style= "width: 100%; height: 100%" class="img-fluid pb-4">
				</div>	
				<div class="col-lg-4 col-md-4 col-12">
						<img src="pic12.jpg" style= "width: 100%; height: 100%" class="img-fluid pb-4">
				</div>	
				<div class="col-lg-4 col-md-4 col-12">
						<img src="pic13.jpg" style= "width: 100%; height: 100%" class="img-fluid pb-4">
				</div>	
				<div class="col-lg-4 col-md-4 col-12">
						<img src="pic14.jpg" style= "width: 100%; height: 100%" class="img-fluid pb-4">
				</div>	
				<div class="col-lg-4 col-md-4 col-12">
						<img src="pic15.jpg" style= "width: 100%; height: 100%" class="img-fluid pb-4">
				</div>	

			</div>
		</div>
		</section>

		<section class="my-5">
		<div class="py-5">

				<h2 class="text-center text-warning">CONTACT US</h2>
		</div>

			<div class="w-50 m-auto">
					<form action="userinfo.php" method="post">
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="user" autocomplete="off" class="form-control">
							
						</div>
						<div class="form-group">
							<label>Email Id</label>
							<input type="text" name="email" autocomplete="off" class="form-control">
							
						</div>
							<div class="form-group">
							<label>Mobile No: </label>
							<input type="text" name="mobile" autocomplete="off" class="form-control">
							
						</div>
						<div class="form-group">
							<label>Comments</label>
							<textarea class="form-control" name="comments"></textarea>
						</div>
						 <button type="submit" class="btn btn-outline-success">Submit</button>
					</form>
			</div>
		</section>
		<footer>
			<p class="p-3 text-center text-white bg-dark">@RafiuAhmedproduction-PAK</p>
		</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>