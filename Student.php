<?php
session_start();
if(!isset($_SESSION["login_user"]))
{
    header("location:mainPage.php");
} else
{
    require("connectionDatabase.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
	<!--Main Navigation-->
	<header>
		<!--Navbar-->
		<nav class="navbar navbar-expand-sm  navbar-dark indigo" >

		  <!-- Navbar brand -->
<!--		  <a class="navbar-brand" href="#"></a>-->

		  <!-- Collapse button -->
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
			  aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
		  </button>

		  <!-- Collapsible content -->
		  <div class="collapse navbar-collapse" id="basicExampleNav">

			  <!-- Links -->
			  <ul class="navbar-nav mr-auto">
				  <li class="nav-item active">
					  <a class="nav-link" href="#">Home
						  <span class="sr-only">(current)</span>
					  </a>
				  </li>
				  <li class="nav-item">
					  <a class="nav-link" href="#exam">Start Examination</a>
				  </li>

				  <!-- Dropdown -->
				  <li class="nav-item dropdown">
					  <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>
					  <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
						  <a class="dropdown-item" href="#">Computer Science</a>
						  <a class="dropdown-item" href="#">Software Engineering</a>
						  <a class="dropdown-item" href="#">Computer Engineering</a>
						  <a class="dropdown-item" href="#">Information Technology</a>
						  <a class="dropdown-item" href="#">Artificial Intelligence</a>
						  <a class="dropdown-item" href="#">Machine Learning</a>
						  <a class="dropdown-item" href="#">Deep Learning</a>
					  </div>
				  </li>
				  <li class="nav-item">
				  	<a class="nav-link" href="studentAccount.php"><i class="fa fa-user"></i>&nbsp;Account</a>
				  </li>
				  <li class="nav-item">
				  	<a class="nav-link" href="SessionEnd.php"><i class="fa fa-sign-out"></i>&nbsp;Logout</a>
				  </li>

			  </ul>
			  <!-- Links -->

			  <form class="form-inline">
				  <div class="md-form mt-0">
					  <input class="form-control mr-sm-4" type="text" placeholder="Search" aria-label="Search">					  
				  </div>
			  </form>
		  </div>
		  <!-- Collapsible content -->

		</nav>
<!--/.Navbar-->
	</header>
	<!--Main Navigation-->
		
	<!--Main layout-->
	<main>
		<section style="margin-top: -583px;">
			<div class="mb-4">
			<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel" style="height: 500px !important;">
							<!--Indicators-->
							<ol class="carousel-indicators">
								<li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
								<li data-target="#carousel-example-1z" data-slide-to="1"></li>
								<li data-target="#carousel-example-1z" data-slide-to="2"></li>
							</ol>
							<!--/.Indicators-->
							<!--Slides-->
							<div class="carousel-inner z-depth-1-half" role="listbox">
								<!--First slide-->
								<div class="carousel-item active">
									<img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Others/images/84.jpg" alt="First slide" style="height: 500px !important;">
								</div>
								<!--/First slide-->
								<!--Second slide-->
								<div class="carousel-item">
									<img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Others/images/85.jpg" alt="Second slide" style="height: 500px !important;">
								</div>
								<!--/Second slide-->
								<!--Third slide-->
								<div class="carousel-item">
									<img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Others/images/86.jpg" alt="Third slide" style="height: 500px !important;">
								</div>
								<!--/Third slide-->
							</div>
							<!--/.Slides-->
							<!--Controls-->
							<a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
							<!--/.Controls-->
						</div>
		</div>

		</section>
		<section class="mt-5">
			<div class="container">
				<div class="row">
					<div class="col-md-7 mb-4">
						<!--Featured image -->
                    	<div class="view overlay z-depth-1-half">
	                        <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(70).jpg" class="img-fluid" alt="">
    	                    <div class="mask rgba-white-light"></div>
        	            </div>
					</div>
					<div class="col-md-5 mb-4">
						<h2>Some awesome heading</h2>
                    	<hr>
                    	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis pariatur quod ipsum atque quam dolorem
                        	voluptate officia sunt placeat consectetur alias fugit cum praesentium ratione sint mollitia, perferendis
                        	natus quaerat!</p>
                    	<a href="https://mdbootstrap.com/" class="btn btn-indigo">Get it now!</a>
					</div>
				</div>
			 <!--Section: Best Features-->
				<section id="best-features" class="text-center">
				<!-- Heading -->
    				<h2 class="mb-5">Best Features</h2>
    				<!--Grid row-->
    				<div class="row d-flex justify-content-center mb-4">
					<!--Grid column-->
						<div class="col-md-8">

							<!-- Description -->
							<p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi voluptate hic provident nulla repellat
								facere esse molestiae ipsa labore porro minima quam quaerat rem, natus repudiandae debitis est
								sit pariatur.</p>

						</div>
					<!--Grid column-->
					</div>
    				<!--Grid row-->
			</section>
				<div class="row" id="exam">
					<div class="col-lg-4 col-md-12 mb-4">
						<div class="card">
							<div class="view overlay">
								<img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(72).jpg" class="card-img-top" alt="">
    			                <a href="#">
	            		           <div class="mask rgba-white-slight"></div>
                    			</a>
							</div>
							<!--Card content-->
							  <div class="card-body">
								<!--Title-->
								<h4 class="card-title">Card title</h4>
								<!--Text-->
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								<a href="examConduction.php" class="btn btn-indigo">Button</a>
							  </div>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 mb-4">
						<div class="card">
							<div class="view overlay">
								<img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(72).jpg" class="card-img-top" alt="">
    			                <a href="#">
	            		           <div class="mask rgba-white-slight"></div>
                    			</a>
							</div>
							<!--Card content-->
							  <div class="card-body">
								<!--Title-->
								<h4 class="card-title">Card title</h4>
								<!--Text-->
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <form action="examConduction.php" method="post">
                                      <input type="hidden" name="Category">
                                      <input type="hidden" name="examCategory" value="Computer Science">
                                      <input class="btn btn-indigo" type="submit" value="submit">
                                  </form>
							  </div>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 mb-4">
						<div class="card">
							<div class="view overlay">
								<img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(72).jpg" class="card-img-top" alt="">
    			                <a href="#">
	            		           <div class="mask rgba-white-slight"></div>
                    			</a>
							</div>
							<!--Card content-->
							  <div class="card-body">
								<!--Title-->
								<h4 class="card-title">Card title</h4>
								<!--Text-->
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								<a href="#!" class="btn btn-indigo">Button</a>
							  </div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-12 mb-4">
						<div class="card">
							<div class="view overlay">
								<img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(72).jpg" class="card-img-top" alt="">
    			                <a href="#">
	            		           <div class="mask rgba-white-slight"></div>
                    			</a>
							</div>
							<!--Card content-->
							  <div class="card-body">
								<!--Title-->
								<h4 class="card-title">Card title</h4>
								<!--Text-->
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								<a href="#!" class="btn btn-indigo">Button</a>
							  </div>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 mb-4">
						<div class="card">
							<div class="view overlay">
								<img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(72).jpg" class="card-img-top" alt="">
    			                <a href="#">
	            		           <div class="mask rgba-white-slight"></div>
                    			</a>
							</div>
							<!--Card content-->
							  <div class="card-body">
								<!--Title-->
								<h4 class="card-title">Card title</h4>
								<!--Text-->
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								<a href="#!" class="btn btn-indigo">Button</a>
							  </div>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 mb-4">
						<div class="card">
							<div class="view overlay">
								<img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(72).jpg" class="card-img-top" alt="">
    			                <a href="#">
	            		           <div class="mask rgba-white-slight"></div>
                    			</a>
							</div>
							<!--Card content-->
							  <div class="card-body">
								<!--Title-->
								<h4 class="card-title">Card title</h4>
								<!--Text-->
								<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								<a href="#!" class="btn btn-indigo">Button</a>
							  </div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
	<!--Main layout-->

	<!--Footer-->
	<footer class="page-footer unique-color-dark pt-0">
	 <!-- Social buttons -->
    <div class="primary-color">
        <div class="container">
            <!--Grid row-->
            <div class="row py-4 d-flex align-items-center">

                <!--Grid column-->
                <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                    <h6 class="mb-0 white-text">Get connected with us on social networks!</h6>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6 col-lg-7 text-center text-md-right">
                    <!--Facebook-->
                    <a class="fb-ic ml-0">
                        <i class="fa fa-facebook white-text mr-4"> </i>
                    </a>
                    <!--Twitter-->
                    <a class="tw-ic">
                        <i class="fa fa-twitter white-text mr-4"> </i>
                    </a>
                    <!--Google +-->
                    <a class="gplus-ic">
                        <i class="fa fa-google-plus white-text mr-4"> </i>
                    </a>
                    <!--Linkedin-->
                    <a class="li-ic">
                        <i class="fa fa-linkedin white-text mr-4"> </i>
                    </a>
                    <!--Instagram-->
                    <a class="ins-ic">
                        <i class="fa fa-instagram white-text mr-lg-4"> </i>
                    </a>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->
        </div>
    </div>
    <!-- Social buttons -->
		<!--footer linkd-->
		<div class="container mt-5 mb-4 text-center text-md-left">
    <div class="row mt-3">

        <!--First column-->
        <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
            <h6 class="text-uppercase font-weight-bold">
                <strong>Comsats University</strong>
            </h6>
            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
            <p>Here you can use chechk your abilities about your mind.Here you can use chechk your abilities about your mindHere you can use chechk your abilities about your mind</p>
        </div>
        <!--/.First column-->

        <!--Second column-->
<!--
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <h6 class="text-uppercase font-weight-bold">
                <strong>Products</strong>
            </h6>
            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
            <p>
                <a href="#!"></a>
            </p>
            <p>
                <a href="#!"></a>
            </p>
            <p>
                <a href="#!"></a>
            </p>
            <p>
                <a href="#!"> </a>
            </p>
        </div>
-->
        <!--/.Second column-->

        <!--Third column-->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <h6 class="text-uppercase font-weight-bold">
                <strong>Useful links</strong>
            </h6>
            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
            <p>
                <a href="#!">Your Account</a>
            </p>
            <p>
                <a href="#!">Become an Affiliate</a>
            </p>
            <p>
                <a href="#!">EXAM CONDUCTION</a>
            </p>
            <p>
                <a href="#!">Help</a>
            </p>
        </div>
        <!--/.Third column-->

        <!--Fourth column-->
        <div class="col-md-4 col-lg-3 col-xl-3">
            <h6 class="text-uppercase font-weight-bold">
                <strong>Contact</strong>
            </h6>
            <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
            <p>
                <i class="fa fa-home mr-3"></i> COMSATS University,LHR</p>

            <p>
                <i class="fa fa-envelope mr-3"></i> muhammadbilalakbar021</p>
            <p>
                <i class="fa fa-phone mr-3"></i> 0321 2345678</p>
            <p>
                <i class="fa fa-print mr-3"></i> 042-3-5111122</p>
        </div>
        <!--/.Fourth column-->

    </div>
</div>
<!--/.Footer Links-->


    <!--Copyright-->
    <div class="footer-copyright py-3 text-center">
        © 2018 Copyright:
        <a href=""> Bilal Akbar </a>
    </div>
    <!--/.Copyright-->
	</footer>
	<!--Footer-->
</body>
	    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Carousel options -->
<script>
    $('.carousel').carousel({
        interval: 2000,
    })
</script>
</html>

