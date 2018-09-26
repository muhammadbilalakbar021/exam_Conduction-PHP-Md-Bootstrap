<?php
    require_once 'connectionDatabase.php';

    if(isset($_POST['Signup']))
    {
        if($_POST['account_Type']=='admin')
        {
            $query="INSERT INTO adminaccount(name,email,password,status) VALUES('".$_POST['full_Name']."','".$_POST['email']."','".$_POST['password']."','".$_POST['status']."')";
            $result=$connect->query($query);
            echo "hello";

        }
        elseif ($_REQUEST['account_Type']=='student')
        {
            $query="INSERT INTO studentaccount(name,email,password) VALUES('".$_POST['full_Name']."','".$_POST['email']."','".$_POST['password']."')";
            $result=$connect->query($query);

        }

    }
    elseif (isset($_POST['login']))
    {
        session_start();
        $error="";
        if(empty($_POST['email']) || empty($_POST['password']))
        {
            $error="Password or username Is wrong";
            echo $error;
            echo error();
        }

        else
        {
            require_once 'connectionDatabase.php';
            $email=$_POST['email'];
            $password=$_POST['password'];


            $query="SELECT * FROM studentaccount where email='$email' AND password='$password'";
            $result=$connect->query($query);


            if(mysqli_num_rows($result)==1)
            {
                $_SESSION['login_user']=$email;
                header('location: ./Student.php');


            }
            else
            {
                $query="SELECT * FROM adminaccount where email='$email' AND password='$password'";
                $result=$connect->query($query);


                if(mysqli_num_rows($result)==1)
                {
                    $_SESSION['login_user']=$email;
                    header('location: ./adminPanel.php');


                }

            }
        }

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

    <style>
        .account_Type
        {
            width: 70%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-left: 150px;
            resize: vertical;
        }
    </style>
</head>

<body>
	<!--main Navigation for Index-->
	<header>
		<!--Nav Bar-->
		<nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
			<div class="container">
				<a class="navbar-brand" href="index.html">CUI</a>
			
			<!--Collapse Button-->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainPage" aria-controls="mainPage" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>	
			</button>
			
	   	    <!-- Collapsible content -->
	   	    <div class="collapse navbar-collapse" id="mainPage">
	   	    	 <!-- Links -->
	   	    	<!-- Links -->
			<ul class="navbar-nav mr-auto smooth-scroll ">
				<li class="nav-item">
					<a class="nav-link waves-effect waves-light" href="#intro">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link waves-effect waves-light" href="#best-features">Features</a>
				</li>
				<li class="nav-item">
					<a class="nav-link waves-effect waves-light" href="#examples">Examples</a>
				</li>
				<li class="nav-item">
					<a class="nav-link waves-effect waves-light" href="#gallery">Gallery</a>
				</li>
				<li class="nav-item">
					<a class="nav-link waves-effect waves-light" href="#contact">Contact</a>
				</li>
				<li class="nav-item">
					<a class="nav-link waves-effect waves-light" data-toggle="modal" data-target="#modalLoginForm">Log in</a>
				</li>
				<li class="nav-item">
					<a class="nav-link waves-effect waves-light" data-toggle="modal" data-target="#modalSignupForm">Sign Up</a>
				</li>
			</ul>
<!-- Links -->
	   	    	 <ul class="navbar-nav nav-flex-icons">
    <li class="nav-item">
        <a class="nav-link"><i class="fa fa-facebook"></i></a>
    </li>
    <li class="nav-item">
        <a class="nav-link"><i class="fa fa-twitter"></i></a>
    </li>
    <li class="nav-item">
        <a class="nav-link"><i class="fa fa-instagram"></i></a>
    </li>
</ul>
	   	    </div>
		
			</div>
		</nav>
		<!--mask-->
		<div id="pic" class="view">
			<div class="mask rgba-black-strong">
    			<div class="container-fluid d-flex align-items-center justify-content-center h-100">
    				<div class="row d-flex justify-content-center text-center">
    					<div class="col-md-12">
						<!-- Heading -->
						<h2 class="display-4 font-weight-bold white-text pt-5 mb-2">EXAM CONDUCTION</h2>

						<!-- Divider -->
						<hr class="hr-light">

						<!-- Description -->
						<h4 class="white-text my-4">The best Path for Student to konw about their Creativity.</h4>
						<button type="button" class="btn btn-outline-white">Read more<i class="fa fa-book ml-2"></i></button>
	    				</div>
		    		</div>
			    </div>
			</div>
		</div>
		
	</header>  
	<main class="mt-5">
		<div class="container">
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

		<!--Grid row-->
		<div class="row">

			<!--Grid column-->
			<div class="col-md-4 mb-1">
				<i class="fa fa-camera-retro fa-4x orange-text"></i>
				<h4 class="my-4">Experience</h4>
				<p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima
					assumenda deleniti hic.</p>
			</div>
			<!--Grid column-->

			<!--Grid column-->
			<div class="col-md-4 mb-1">
				<i class="fa fa-heart fa-4x orange-text"></i>
				<h4 class="my-4">Happiness</h4>
				<p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima
					assumenda deleniti hic.</p>
			</div>
			<!--Grid column-->

			<!--Grid column-->
			<div class="col-md-4 mb-1">
				<i class="fa fa-bicycle fa-4x orange-text"></i>
				<h4 class="my-4">Adventure</h4>
				<p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima
					assumenda deleniti hic.</p>
			</div>
			<!--Grid column-->
		</div>
		<!--Grid row--> 
	  </section>
	  <br>
	  <!--Section: Best Features-->
	  <hr class="my-5">
	  
	  <!--Section: Examples-->
		<section id="examples" class="text-center">
			    <h2 class="mb-5 font-weight-bold">Stunning Examples</h2>
			<!--Grid row-->
			<div class="row">

				<!--Grid column-->
				<div class="col-lg-4 col-md-12 mb-4">
					<div class="view overlay z-depth-1-half">
					  	<img src="https://mdbootstrap.com/img/Photos/Others/images/48.jpg" class="img-fluid" alt="">		
				 	    <div class="mask rgba-white-slight"></div>			
					</div>
					<h4 class="my-4 font-weight-bold">Heading</h4>
            		<p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiamminima assumenda deleniti hic.</p>
				</div>
				<!--Grid column-->

				<!--Grid column-->
				<div class="col-lg-4 col-md-12 mb-4">
					<div class="view overlay z-depth-1-half">
					  	<img src="https://mdbootstrap.com/img/Photos/Others/images/48.jpg" class="img-fluid" alt="">		
				 	    <div class="mask rgba-white-slight"></div>			
					</div>
					<h4 class="my-4 font-weight-bold">Heading</h4>
            		<p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiamminima assumenda deleniti hic.</p>
				</div>
				<!--Grid column-->

				<!--Grid column-->
				<div class="col-lg-4 col-md-12 mb-4">
					<div class="view overlay z-depth-1-half">
					  	<img src="https://mdbootstrap.com/img/Photos/Others/images/48.jpg" class="img-fluid" alt="">		
				 	    <div class="mask rgba-white-slight"></div>			
					</div>
					<h4 class="my-4 font-weight-bold">Heading</h4>
            		<p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiamminima assumenda deleniti hic.</p>
				</div>
				<!--Grid column-->
			</div>
			<!--Grid row-->
		</section>
		<!--Section: Examples-->
		<!--Section: Gallery-->
		<section id="gallery">

			<!-- Heading -->
			<h2 class="mb-5 font-weight-bold text-center">Gallery heading</h2>

			<!--Grid row-->
			<div class="row">
					<!--Grid column-->
					<div class="col-md-6 mb-4">

						<!--Carousel Wrapper-->
						<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
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
									<img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Others/images/84.jpg" alt="First slide">
								</div>
								<!--/First slide-->
								<!--Second slide-->
								<div class="carousel-item">
									<img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Others/images/85.jpg" alt="Second slide">
								</div>
								<!--/Second slide-->
								<!--Third slide-->
								<div class="carousel-item">
									<img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Others/images/86.jpg" alt="Third slide">
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
						<!--/.Carousel Wrapper-->

					</div>
					<!--Grid column-->
					<!--Grid column-->				
					<div class="col-md-6">

						<!--Excerpt-->
						<a href="" class="teal-text">
							<h6 class="pb-1"><i class="fa fa-heart"></i><strong> Lifestyle </strong></h6>
						</a>
						<h4 class="mb-3"><strong>This is title of the news</strong></h4>
						<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime
							placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus et aut officiis
							debitis aut rerum.</p>

						<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime
							placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus et aut officiis
							debitis aut rerum.</p>
						<p>by <a><strong>Jessica Clark</strong></a>, 26/08/2016</p>
						<a class="btn btn-primary btn-md">Read more</a>

					</div>
					<!--Grid column-->
				</div>
			<!--Grid row-->
		</section>
		<!--Section: Gallery-->
		<hr class="my-5">

            <!--Section: Contact-->
		<!--Grid column-->
			<section id="contact">

                <!-- Heading -->
                <h2 class="mb-5 font-weight-bold text-center">Contact us</h2>

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-lg-5 col-md-12">

                        <!-- Form contact -->
                        <form class="p-5">

                          <div class="md-form form-sm"> <i class="fa fa-user prefix grey-text"></i>
                            <input type="text" id="form3" class="form-control form-control-sm">
                            <label for="form3">Your name</label>
                          </div>

                          <div class="md-form form-sm"> <i class="fa fa-envelope prefix grey-text"></i>
                            <input type="text" id="form2" class="form-control form-control-sm">
                            <label for="form2">Your email</label>
                          </div>

                          <div class="md-form form-sm"> <i class="fa fa-tag prefix grey-text"></i>
                            <input type="text" id="form32" class="form-control form-control-sm">
                            <label for="form34">Subject</label>
                          </div>

                          <div class="md-form form-sm"> <i class="fa fa-pencil prefix grey-text"></i>
                            <textarea type="text" id="form8" class="md-textarea form-control form-control-sm" rows="4"></textarea>
                            <label for="form8">Your message</label>
                          </div>

                          <div class="text-center mt-4">
                            <button class="btn btn-primary">Send <i class="fa fa-paper-plane-o ml-1"></i></button>
                          </div>
                        </form>
                        <!-- Form contact -->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-7 col-md-12">

                        <!--Grid row-->
                        <div class="row text-center">

                            <!--Grid column-->
                            <div class="col-lg-4 col-md-12 mb-3">

                                <p>
                                    <i class="fa fa-map fa-1x mr-2 grey-text"></i>Comsats</p>

                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-lg-4 col-md-6 mb-3">

                                <p>
                                    <i class="fa fa-building fa-1x mr-2 grey-text"></i>Mon - Fri, 8:00-5:00pm</p>

                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-lg-4 col-md-6 mb-3">

                                <p>
                                    <i class="fa fa-phone fa-1x mr-2 grey-text"></i>+ 92 300 123456</p>

                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                        <!--Google map-->
                        <div id="map-container" class="z-depth-1-half map-container mb-5" style="height: 400px"></div>

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </section>
		</div>

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
	
	<!--modal Content-->
	<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header text-center">
					<h4 class="modal-title w-100 font-weight-bold">SignIn</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="index.php" method="post">
                    <input type="hidden" name="login" value="login">
                    <div class="modal-body mx-3">
                        <div class="md-form mb-3">
                            <i class="fa fa-envelope prefix grey-text"></i>
                            <input type="email" id="email" name="email"  class="form-control validate">
                            <label data-error="wrong" data-success="right" for="email">Email</label>
                        </div>
                        <div class="md-form mb-3">
                            <i class="fa fa-lock prefix grey-text"></i>
                            <input type="password" id="password" name="password" class="form-control validate">
                            <label data-error="wrong" data-success="right" for="password">Password</label>
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <input type="submit" value="submit" class="btn btn-default">
                    </div>
                </form>
			</div>
		</div>
	</div>
	<div class="modal fade" id="modalSignupForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header text-center">
					<h4 class="modal-title w-100 font-weight-bold">Sign Up</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="index.php" method="post">
                    <input type="hidden" name="Signup" value="Signup">
                    <input type="hidden" name="status" value="">
                    <div class="modal-body mx-3">
                        <div class="md-form mb-3">
                            <i class="fa fa-user prefix grey-text"></i>
                            <input type="text" id="name" name="full_Name" class="form-control validate">
                            <label data-error="wrong" data-success="right" for="name">Full Name</label>
                        </div>
                        <div class="md-form mb-3">
                            <i class="fa fa-envelope prefix grey-text"></i>
                            <input type="email" id="signupEmail" name="email" class="form-control validate">
                            <label data-error="wrong" data-success="right" for="signupEmail">Email</label>
                        </div>
                        <div class="md-form mb-3">
                            <div class="nav-item ">
                                <i class="fa fa-bank prefix grey-text"></i>
                                <label data-error="wrong" data-success="right" for="name">Account Type</label>
                                <select id="Category" class="account_Type" name="account_Type">
                                    <option value="admin">admin</option>
                                    <option value="student">student</option>
                                </select>


                            </div>
                        </div>
                        <div class="md-form mb-3">
                            <i class="fa fa-lock prefix grey-text"></i>
                            <input type="password" id="signupPassword" class="form-control validate">
                            <label data-error="wrong" data-success="right" for="signupPassword">Password</label>
                        </div>
                        <div class="md-form mb-3">
                            <i class="fa fa-lock prefix grey-text"></i>
                            <input type="password" id="resignupPassword" name="password" class="form-control validate">
                            <label data-error="wrong" data-success="right" for="resignupPassword">Re-Type Password</label>
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
<!--                        <button class="btn btn-default"><i class="fa fa-user-plus"></i>&ensp; Sign Up</button>-->
                        <input type="submit" class="btn btn-default" onclick="mailServce() value="Sign Up">
                    </div>
                </form>
			</div>
		</div>
	</div>

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
        interval: 200,
    })
</script>
<!--Google Maps-->
<script src="https://maps.google.com/maps/api/js"></script>
<script>
        // Regular map
        function regular_map() {
            var var_location = new google.maps.LatLng(31.4014273, 74.2110784);

            var var_mapoptions = {
                center: var_location,
                zoom: 14
            };

            var var_map = new google.maps.Map(document.getElementById("map-container"),
                var_mapoptions);

            var var_marker = new google.maps.Marker({
                position: var_location,
                map: var_map,
                title: "New York"
            });
        }

        // Initialize maps
        google.maps.event.addDomListener(window, 'load', regular_map);
    </script>
<script>
    function mailServce()
    {
        <?php
        require 'vendor/autoload.php';
        use Mailgun\Mailgun;
        $mg = new Mailgun("4ebcda85898c6180d39a46d9d8742cd8-6b60e603-e5d94881");
        $domain = "sandbox03ebab098f344a90b2a216496cfc23d5.mailgun.org";

        $from="postmaster@sandbox03ebab098f344a90b2a216496cfc23d5.mailgun.org";
        $subject="Hello this is Bilal";
        //$obj=require_once('D:\Xampp\htdocs\MySqlwithPHP\Core.html');
        $obj="bilal Html File test";
        $htmlContent = "Hello this is Bilal";


        $mg->sendMessage($domain, array(
            'from' => $from,
            'to' => 'muhammadbilalakbar021@gmail.com',
            'subject' => $subject,
            'text' => $obj,
            'html' => $htmlContent
        ));
        ?>
    }

    function bilal()
    {
        console.log("There is error")
    }
</script>
</html>

