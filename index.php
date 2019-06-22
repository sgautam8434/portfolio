<?php
if(isset($_POST['submit'])){
    $fname= htmlentities($_POST['fname']);
    $email= htmlentities($_POST['email']);
    $subject= htmlentities($_POST['subject']);
    $message=htmlentities($_POST['message']);
    $link=mysqli_connect("localhost","root","","wp");
          
    $query = "INSERT INTO `web`(`fname`, `email`, `subject`, `message`) VALUES ('$fname','$email','$subject','$message')";
    
    mysqli_query($link,$query);
    mysqli_close($link);

}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Portfolio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
	  
	  
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Portfolio</a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav nav ml-auto">
	          <li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
	          <li class="nav-item"><a href="#about-section" class="nav-link"><span>About</span></a></li>
	          <li class="nav-item"><a href="#skills-section" class="nav-link"><span>Skills</span></a></li>
	          <li class="nav-item"><a href="#projects-section" class="nav-link"><span>Projects</span></a></li>
	          <li class="nav-item"><a href="#education" class="nav-link"><span>Education</span></a></li>
	          <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
	  <section id="home-section" class="hero">
		  <div class="home-slider  owl-carousel">
	      <div class="slider-item ">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
	          	<div class="one-third order-md-last img" style="background-image:url(images/pic.jpg);">
	          		<div class="overlay"></div>
	          	</div>
		          <div class="one-forth d-flex  align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
		          	
		          	<div class="text">
		          		
			            <h1 class="mb-4 mt-3"> <span>Siddhant Gautam</span></h1>
			            <h2 class="mb-4">A Freelance Web Developer and Graphic Designer</h2>
			            
		            </div>
		          </div>
	        	</div>
	        </div>
	      </div>

	      
	    </div>
    </section>

    <section class="ftco-about ftco-counter img ftco-section" id="about-section">
    	<div class="container">
    		<div class="row d-flex">
    			<div class="col-md-6 col-lg-5 d-flex">
    				<div class="img-about img d-flex align-items-stretch">
    					<div class="overlay"></div>
	    				<div class="img d-flex align-self-stretch align-items-center" style="background-image:url(images/pic.jpg);">
	    				</div>
    				</div>
    			</div>
    			<div class="col-md-6 col-lg-7 pl-lg-5 py-5">
    				<div class="row justify-content-start pb-3">
		          <div class="col-md-12 heading-section ftco-animate">
		          	<span class="subheading">Welcome</span>
		            <h2 class="mb-4" style="font-size: 34px; text-transform: capitalize;">About Me</h2>
		            <p>My name is Siddhant Gautam, currently studying in 6th sem Siddaganga Institute of Technology in Dept. of Information Science and Engineering. I am a Web Developer and Graphic Designer. I am interested in being UI/UX Developer.</p>
		          </div>
		        </div>
		        <div class="row">
		        	<div class="col-md-6">
		        		<div class="media block-6 services d-block ftco-animate">
		              <div class="icon"><span class="flaticon-analysis"></span></div>
		              <div class="media-body">
		                <h3 class="heading mb-3">Web Developer</h3>
		              
		              </div>
		            </div> 
		        	</div>
		        	<div class="col-md-6">
		        		<div class="media block-6 services d-block ftco-animate">
		              <div class="icon"><span class="flaticon-analysis"></span></div>
		              <div class="media-body">
		                <h3 class="heading mb-3">Graphic Designer</h3>
		               
		              </div>
		            </div> 
		        	</div>
		        </div>
	          
	        </div>
        </div>
    	</div>
    </section>
		
		<section class="ftco-section bg-light" id="skills-section">
			<div class="container">
				<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	
            <h2 class="mb-4">My Skills</h2>
            <p></p>
          </div>
        </div>
				<div class="row">
					<div class="col-md-6 animate-box">
						<div class="progress-wrap ftco-animate">
							<h3>Photoshop</h3>
							<div class="progress">
							 	<div class="progress-bar color-1" role="progressbar" aria-valuenow="75"
							  	aria-valuemin="0" aria-valuemax="100" style="width:75%">
							    <span>75%</span>
							  	</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 animate-box">
						<div class="progress-wrap ftco-animate">
							<h3>jQuery</h3>
							<div class="progress">
							 	<div class="progress-bar color-2" role="progressbar" aria-valuenow="70"
							  	aria-valuemin="0" aria-valuemax="100" style="width:60%">
							    <span>60%</span>
							  	</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 animate-box">
						<div class="progress-wrap ftco-animate">
							<h3>HTML</h3>
							<div class="progress">
							 	<div class="progress-bar color-3" role="progressbar" aria-valuenow="85"
							  	aria-valuemin="0" aria-valuemax="100" style="width:85%">
							    <span>85%</span>
							  	</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 animate-box">
						<div class="progress-wrap ftco-animate">
							<h3>CSS</h3>
							<div class="progress">
							 	<div class="progress-bar color-4" role="progressbar" aria-valuenow="80"
							  	aria-valuemin="0" aria-valuemax="100" style="width:90%">
							    <span>80%</span>
							  	</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 animate-box">
						<div class="progress-wrap ftco-animate">
							<h3>JavaScript</h3>
							<div class="progress">
							 	<div class="progress-bar color-5" role="progressbar" aria-valuenow="70"
							  	aria-valuemin="0" aria-valuemax="100" style="width:70%">
							    <span>70%</span>
							  	</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 animate-box">
						<div class="progress-wrap ftco-animate">
							<h3>Illustrator</h3>
							<div class="progress">
							 	<div class="progress-bar color-6" role="progressbar" aria-valuenow="70"
							  	aria-valuemin="0" aria-valuemax="100" style="width:80%">
							    <span>70%</span>
							  	</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 animate-box">
						<div class="progress-wrap ftco-animate">
							<h3>PHP</h3>
							<div class="progress">
							 	<div class="progress-bar color-5" role="progressbar" aria-valuenow="70"
							  	aria-valuemin="0" aria-valuemax="100" style="width:70%">
							    <span>70%</span>
							  	</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 animate-box">
						<div class="progress-wrap ftco-animate">
							<h3>MySQL</h3>
							<div class="progress">
							 	<div class="progress-bar color-6" role="progressbar" aria-valuenow="70"
							  	aria-valuemin="0" aria-valuemax="100" style="width:80%">
							    <span>70%</span>
							  	</div>
							</div>
						</div>
				</div>
			</div>
			<section class="education_area pad" id="education color-2">
                    <div class="row justify-content-center pb-5 color-2">
          <div class="col-md-12 heading-section text-center ftco-animate color-2">
          	
            <h2 class="mb-4">Education</h2>
            <p></p>
          </div>
        </div>
                    <div class="education_inner_area color-2">
                        <div class="education_item wow fadeInUp animated color-2" >
                            <h6>2016-2020</h6>
                            <h4>Bachelor of Engineering</h4>
                            <h5>Siddaganga Institute of Technology, Tumkur</h5>
                            
                        </div>
                        <div class="education_item wow fadeInUp animated color-2" >
                            <h6>2015</h6>
                            <h4>12th</h4>
                            <h5>Dav Public School, Patna, Bihar</h5>
                            <p>87.8%</p>
                        </div>
                        <div class="education_item wow fadeInUp animated color-2" >
                            <h6>2013</h6>
                            <h4>10th</h4>
                            <h5>Baldwin Academy, Patna, Bihar</h5>
                            <p>10 CGPA</p>
                        </div>
                        
                       
                    </div>
                </section>
				<div class="row justify-content-center py-5 mt-5">
          <div class="col-md-12 heading-section text-center ftco-animate" id="projects-section">
          	
            <h2 class="mb-4">Projects</h2>
           
          </div>
        </div>

        <div class="row">
					<div class="col-md-3 text-center d-flex ftco-animate">
						<div class="services-1">
							<span class="icon">
								<i class="flaticon-analysis"></i>
							</span>
							<div class="desc">
								<h3 class="mb-5"><a href="https://mini2019.000webhostapp.com">Zigbee Based Tree Monitoring System</a></h3>
								<h4>ZigBee Module, Pi Zero</h4>
								<h4>Front-end : HTML, CSS, JS</h4>
								<h4>Back-end : PHP, MySQL</h4>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center d-flex ftco-animate">
						<div class="services-1">
							<span class="icon">
								<i class="flaticon-analysis"></i>
							</span>
							<div class="desc">
								<h3 class="mb-5"><a href="#">Hostel Room Allocation</a></h3>
								<h4>Priority sorting algorithm</h4>
								<h4>Front-end : HTML, CSS, JS</h4>
								<h4>Back-end : PHP, MySQL</h4>
								
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center d-flex ftco-animate">
						<div class="services-1">
							<span class="icon">
								<i class="flaticon-analysis"></i>
							</span>
							<div class="desc">
								<h3 class="mb-5"><a href="#">Event Notifier</a></h3>
								<h4>Python Based Web Crawler</h4>
								<h4>Front-end : HTML, CSS, JS</h4>
								<h4>Back-end : PHP, MySQL</h4>
							</div>
						</div>
					</div>
					<div class="col-md-3 text-center d-flex ftco-animate">
						<div class="services-1">
							<span class="icon">
								<i class="flaticon-analysis"></i>
							</span>
							<div class="desc">
								<h3 class="mb-5"><a href="#">Shopping Website</a></h3>
								
								<h4>Front-end : HTML, CSS, JS</h4>
								<h4>Back-end : PHP, MySQL</h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
      <div class="container">
      	<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            
            <h2 class="mb-4">Contact Me</h2>
            <p></p>
          </div>
        </div>

        <div class="row no-gutters block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form method="POST" class="bg-light p-4 p-md-5 contact-form">
              <div class="form-group">
                <input type="text" class="form-control" name="fname" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="email"placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea  cols="30" rows="7" name="message" class="form-control" placeholder="Message"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" name="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

          <div class="col-md-6 d-flex">
          	<div class="img" style="background-image: url(images/pic.jpg);"></div>
          </div>
        </div>
      </div>
    </section>

		

    



   
		

    <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row mb-5">
          
         
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">216, M G Block, SIT,Tumkur</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+31 7677034242</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">sgautam8434@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
       
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  
  <script src="js/main.js"></script>
    
  </body>
</html>