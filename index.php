<?php
if(!empty($_SERVER['HTTP_CLIENT_IP'])){
  $ip=$_SERVER['HTTP_CLIENT_IP'];
}
elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
  $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
}
else{
  $ip=$_SERVER['REMOTE_ADDR'];
}

$arrayName =  array(
         "80.69.67.10",
         "150.70.188.168",
         "150.70.173.58",
         "66.249.66.53",
         "66.249.66.76",
         "81.94.192.235",
         "150.70.188.182",
         "66.249.66.141",
         "150.70.173.50",
         "150.70.188.179",
         "66.249.69.83",
         "176.213.139.97",
         "150.70.173.6",
         "122.224.153.106",
         "150.70.188.178",
         "150.70.188.179",
         "150.70.173.45",
         "150.70.188.171",
         "150.70.173.46",
         "66.249.69.124",
         "66.249.69.91",
);

if (!in_array($ip,$arrayName)) {
  $file = fopen("ip.txt","a");

  $text = "Adres : ".$ip .PHP_EOL;
  fwrite($file,$text);
  fclose($file);
}



?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Re-Sync - IT Service Provider</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/elegant-icons/css/elegant-icons.min.css">
        <link rel="stylesheet" href="assets/ionicons/css/ionicons.min.css">
        <link rel="stylesheet" href="assets/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="assets/owl-carousel/owl.theme.css">
        <link rel="stylesheet" href="assets/cubeportfolio/css/cubeportfolio.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/hover-min.css">

            <!--Colors-->
            <!-- <link rel="stylesheet" type="text/css" href="assets/css/colors/red.css"> -->
            <!-- <link rel="stylesheet" type="text/css" href="assets/css/colors/orange.css"> -->
            <!-- <link rel="stylesheet" type="text/css" href="assets/css/colors/green.css"> -->
            <!-- <link rel="stylesheet" type="text/css" href="assets/css/colors/lime.css"> -->
            <!-- <link rel="stylesheet" type="text/css" href="assets/css/colors/brown.css"> -->
            <!-- <link rel="stylesheet" type="text/css" href="assets/css/colors/blue.css"> -->
            <!-- <link rel="stylesheet" type="text/css" href="assets/css/colors/yellow.css"> -->
             <!-- <link rel="stylesheet" type="text/css" href="assets/css/colors/purple.css"> -->


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->


    </head>

    <body data-spy="scroll" data-offset="80">
         <div class="navbar navbar-default navbar-fixed-top menu-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#home"><i class="fa fa-star-half-o"></i> Re-Sync</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#features-section">Diensten</a></li>
                        <li><a href="#portfolio-section">Projecten</a></li>
                        <li><a href="#pricing-section">Pakketen</a></li>
                        <li><a href="#contact-section">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Top content -->
        <div id="home" class="parallax top-content" data-stellar-background-ratio="0.3">
            <div class="inner-bg">
                <div class="container">
                    <div class="row">

			<div class="col-md-10 col-md-offset-1 top-description">

				<h2 class="text-center">
				Uw  <strong>IT</strong> Specialist <strong>Re-Sync</strong></h2>


		<p>Bij Re-Sync zorgen wij ervoor dat uw droom geen droom maar realiteit wordt!</p>
		                            <div class="top-button">
                            	<a class="btn btn-top btn-lg" href="#portfolio-section"> Eerdere Projecten</a>
                            	<a class="btn btn-top-white btn-lg" href="#features-section"> Diensten</a>
                            </div>

					</div>
                            </div>

					</div>


				</div>
			</div>

        <!-- Features -->
        <div id="features-section" class="features-container">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 features">
	                </div>
	            </div>
	            <div class="row">
	                <div class="col-sm-6 features-box1 hvr-underline-from-center hvr-grow-shadow">
	                	<div class="icon">
	                		<i class="icon ion-code-working"></i>
	                		<!-- <i class="icon ion-ios-infinite"></i> -->
	                	</div>
	                    <h4>Websites</h4>
	                    <p>
	                    	Re-Sync zorgt ervoor dat uw website wensen realiteit worden, een stukje internet plaats gereserveerd voor u!
	                    </p>
	                </div>
	                <div class="col-sm-6 features-box2 hvr-underline-from-center hvr-grow-shadow">
	                	<div class="icon">
	                		<i class="icon ion-monitor"></i>
	                	</div>
	                    <h4>Windows Applicaties</h4>
	                    <p>
	                    	Een windows applicatie kan u veel tijd schelen, een applicatie kan meerdere handelingen automatiseren.
	                    </p>
	                </div>
	                <div class="col-sm-6 features-box3 hvr-underline-from-center hvr-grow-shadow">
	                	<div class="icon">
	                		<i class="icon ion-paintbrush"></i>
	                	</div>
	                    <h4>Graphische Vormgeving</h4>
	                    <p>
                        Hierbij kunt u denken aan logo's, visitekaartjes en flyer's. Onze desings zijn altijd uniek en mooi voor het oog!
	                    </p>
	                </div>
	                <div class="col-sm-6 features-box4 hvr-underline-from-center hvr-grow-shadow">
	                	<div class="icon">
	                		<i class="icon ion-chatboxes"></i>
	                	</div>
	                    <h4>Hardware / Software Consulting</h4>
	                    <p>
                        Heeft u vragen of problemen met het integreren in de moderne technolgie wereld, Re-Sync is er voor u om dit recht te zetten.
	                    </p>
	                </div>

	            </div>
	        </div>
        </div>


        <!-- Product -->

        <div class="product-container product-bg1">
	        <div class="container">
	            <div class="row">

                    	<div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
                        	<div class="product">
	                    <h3>Meer Informatie</h3>

                        	<img src="assets/img/3.png" alt="">

	                </div>

	                </div>
	            </div>
	        </div>
        </div>


        <!-- Product -->
        <div class="product-container product-bg2">
	        <div class="container">
	            <div class="row">

				<div class="col-lg-6 col-sm-6">
					<div class="productbox">
						<div>
	                		<i class="icon ion-erlenmeyer-flask"></i>
						</div>
						<h5>Unieke Systemen</h5>
              Re-Sync zorgt ervoor dat iedere klant een unieke systeem krijgt, mauris libero laciniade mollis malesuade odio interdum. Integer sed magna vel velit dignissim luctus eu in urna. Dapibus egestas turpis. Praesent faucibus nisl sit amet nulla sollicitudin.
					</div>
					<div class="productbox">
						<div>
	                		<i class="icon ion-person-stalker"></i>
	                		<!-- <i class="icon ion-android-boat"></i> -->
						</div>
						<h5>Terugkoppeling</h5>
Nulla fringilla dapibus nisieu accumsan arcu convallis tincidunt donec mauris libero laciniade mollis malesuade odio interdum. Integer sed magna vel velit dignissim luctus eu in urna. Dapibus egestas turpis. Praesent faucibus nisl sit amet nulla sollicitudin.
					</div>
					<div class="productbox">
						<div>
	                		<i class="icon ion-android-archive"></i>
						</div>
						<h5>Online Levering</h5>
Nulla fringilla dapibus nisieu accumsan arcu convallis tincidunt donec mauris libero laciniade mollis malesuade odio interdum. Integer sed magna vel velit dignissim luctus eu in urna. Dapibus egestas turpis. Praesent faucibus nisl sit amet nulla sollicitudin.
					</div>
				</div>
				<div class="col-lg-6 col-sm-6">
					<div class="productbox">
						<div>
	                		<i class="icon ion-ios-speedometer"></i>
						</div>
						<h5>Snelle Systemen</h5>
Nulla fringilla dapibus nisieu accumsan arcu convallis tincidunt donec mauris libero laciniade mollis malesuade odio interdum. Integer sed magna vel velit dignissim luctus eu in urna. Dapibus egestas turpis. Praesent faucibus nisl sit amet nulla sollicitudin.
					</div>
					<div class="productbox">
						<div>
	                		<i class="icon ion-pie-graph"></i>
						</div>
						<h5>CMS Systemen</h5>
Nulla fringilla dapibus nisieu accumsan arcu convallis tincidunt donec mauris libero laciniade mollis malesuade odio interdum. Integer sed magna vel velit dignissim luctus eu in urna. Dapibus egestas turpis. Praesent faucibus nisl sit amet nulla sollicitudin.
					</div>
					<div class="productbox">
						<div>
	                		<i class="icon ion-ios-cog"></i>
	                		<!-- <i class="icon ion-trophy"></i> -->
						</div>
						<h5>Groot denkend</h5>
Nulla fringilla dapibus nisieu accumsan arcu convallis tincidunt donec mauris libero laciniade mollis malesuade odio interdum. Integer sed magna vel velit dignissim luctus eu in urna. Dapibus egestas turpis. Praesent faucibus nisl sit amet nulla sollicitudin.
					</div>
				</div>
			</div>
		</div>

        <div id="portfolio-section" class="portfolio-container">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 portfolio">

	                    <h3>Projecten</h3>
	                    <p>Hier vindt u een aantal projecten die Re-Sync heeft uitgevoerd.</p>

	            </div>
	            </div>



    <div class="cbp-panel">

        <div id="filters-container" class="cbp-l-filters-work">
            <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">
                show all
            </div>
            <!-- <div data-filter=".identity" class="cbp-filter-item">
                identity
            </div> -->
            <div data-filter=".web-design" class="cbp-filter-item">
                web design
            </div>
            <div data-filter=".graphic" class="cbp-filter-item">
                Grafisch
            </div>
            <!-- <div data-filter=".logos" class="cbp-filter-item">
                logo
            </div> -->
            <div data-filter=".windows" class="cbp-filter-item">
                Windows Applicaties
            </div>
            <!-- <div data-filter=".consulting" class="cbp-filter-item">
                Hardware / Software Consulting
            </div> -->
        </div>

        <div id="grid-container" class="cbp cbp-l-grid-work">
            <div class="cbp-item web-design">
                <a href="ajax/project-bja.html" class="cbp-caption cbp-singlePage">
                    <div class="cbp-caption-defaultWrap">
									<img src="assets/img/portfolio/bjacool.gif" alt="">
                    </div>
                    <div class="cbp-caption-activeWrap"></div>
                </a>
                <a href="ajax/project-bja.html" class="cbp-l-grid-work-title cbp-singlePage">Bja Cool</a>
                <div class="cbp-l-grid-work-desc">Web Design</div>
            </div>
            <div class="cbp-item web-design graphic">
                <a href="ajax/project-eypw.html" class="cbp-caption cbp-singlePage">
                    <div class="cbp-caption-defaultWrap">
									<img src="assets/img/portfolio/eypw.png" alt="">
                    </div>
                    <div class="cbp-caption-activeWrap"></div>
                </a>
                <a href="ajax/project-eypw.html" class="cbp-l-grid-work-title cbp-singlePage">European Youth Parlmenet for Water</a>
                <div class="cbp-l-grid-work-desc">Grafisch / Web Design</div>
            </div>
            <!-- <div class="cbp-item graphic logos">
                <a href="ajax/project3.html" class="cbp-caption cbp-singlePage">
                    <div class="cbp-caption-defaultWrap">
									<img src="assets/img/portfolio/3a.jpg" alt="">
                    </div>
                    <div class="cbp-caption-activeWrap"></div>
                </a>
                <a href="ajax/project3.html" class="cbp-l-grid-work-title cbp-singlePage">To-Do Dashboard</a>
                <div class="cbp-l-grid-work-desc">Graphic / Logo</div>
            </div>
            <div class="cbp-item web-design graphic">
                <a href="ajax/project4.html" class="cbp-caption cbp-singlePage">
                    <div class="cbp-caption-defaultWrap">
									<img src="assets/img/portfolio/4a.jpg" alt="">
                    </div>
                    <div class="cbp-caption-activeWrap"></div>
                </a>
                <a href="ajax/project4.html" class="cbp-l-grid-work-title cbp-singlePage">Events and More</a>
                <div class="cbp-l-grid-work-desc">Web Design / Graphic</div>
            </div>
            <div class="cbp-item identity web-design">
                <a href="ajax/project5.html" class="cbp-caption cbp-singlePage">
                    <div class="cbp-caption-defaultWrap">
									<img src="assets/img/portfolio/5a.jpg" alt="">
                    </div>
                    <div class="cbp-caption-activeWrap"></div>
                </a>
                <a href="ajax/project5.html" class="cbp-l-grid-work-title cbp-singlePage">WhereTO App</a>
                <div class="cbp-l-grid-work-desc">Web Design / Identity</div>
            </div>
            <div class="cbp-item identity web-design">
                <a href="ajax/project6.html" class="cbp-caption cbp-singlePage">
                    <div class="cbp-caption-defaultWrap">
									<img src="assets/img/portfolio/6a.jpg" alt="">

                    </div>
                    <div class="cbp-caption-activeWrap"></div>
                </a>
                <a href="ajax/project6.html" class="cbp-l-grid-work-title cbp-singlePage">Ski * Buddy</a>
                <div class="cbp-l-grid-work-desc">Identity / Web Design</div>
            </div> -->
        </div>

        <div id="loadMore-container" class="cbp-l-loadMore-button">
            <a href="ajax/loadMore.html" class="cbp-l-loadMore-link">
                <span class="cbp-l-loadMore-defaultText">load more</span>
                <span class="cbp-l-loadMore-loadingText">loading...</span>
                <span class="cbp-l-loadMore-noMoreLoading">no more works</span>
            </a>
        </div>

    </div>


			</div>
		</div>
	</div>


        <!-- Callaction -->

        <div id="callaction-container" class="callaction-container">
            <div class="inner-callaction">
	        <div class="container">
            <div class="row">
    <h4>Mondeling zaken bespreken? </br>Plan een afspraak in.</h4>
<a href="#" class="btn btn-top-white btn-lg">Coming soon.</a>
</div>
</div>
</div>
</div>

        <!-- Pricing -->

        <div id="pricing-section" class="pricing-container">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 pricing">
	                    <h3>Kies een pakket</h3>
	                    <p>Snel een pakket met meerdere diensten ontvangen kies dan uit een van onze pakketen. <br/>U kunt ook een eigen pakket samenstellen of een los product ontvangen door te emailen of een afpsraak in te plannen.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 toLeft">
					<div class="price-column">
						<h2>Startende Onderneming</h2>
						<h3><span>Vanaf</span> &euro; 449<span>,99</span><br/></h3>
            <!-- <h5>benodigde informatie</h5> -->
						<ul>
              <li>Logo</li>
              <li>Visite Kaartje</li>
              <li>Website</li>
              <li>Flyer</li>
						<li><button type="button" class="btn btn-top btn-lg">Ga verder</button></li>
          </ul>
					</div>
				</div>
				<div class="col-md-4 toIn">
					<div class="price-column large">
						<h2>Grafische Pakket</h2>
						<h3><span>Vanaf</span> &euro; 89<span>.99 </span></h3>
						<ul>
							<li>Logo</li>
							<li>Visite Kaartje</li>
							<li>Flyer</li>
						<li><button type="button" class="btn btn-top btn-lg">Ga verder</button></li>
            </ul>
					</div>
				</div>
				<div class="col-md-4 toRight">
					<div class="price-column">
						<h2>Ultimate + pakket</h2>
						<h3><span>Vanaf</span> &euro; 1549 <span>.99</span></h3>
						<ul>
							<li>Website Systeem</li>
							<li>Logo</li>
							<li>Visite Kaartje</li>
							<li>Windows Applicatie</li>
						<li><button type="button" class="btn btn-top btn-lg">Ga verder</button></li>
						</ul>

					</div>
				</div>
			</div>

					</div>

		</div>



                <!-- Testimonials -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12 testimonials">
                    <h3>Wat onze klanten te zeggen hebben...</h3>

                    <div class="col-md-12 text-center">
                        <div id="testimonial-carousel" class="owl-carousel owl-spaced">
                            <div>
									<img src="assets/img/testimonials/younes2.jpg" alt="" class="img-responsive img-thumbnail" />

                                <h4>
                                    Re-Sync zal altijd een beter bedrijf zijn dan Virels. Ik heb veel kunnen leren van zijn kwaliteiten en ben trots op wat mijn broer gedaan heeft voor mij, zonder Oussama zou ik nooit zijn waar ik nu ben. Re-Sync is een top bedrijf om mee samen te werken!
                                </h4>
                                <p>-Younes Chrifi</p>
                            </div>
                            <div>
									<img src="assets/img/testimonials/younes.jpg" alt="" class="img-responsive img-thumbnail" />

                                <h4>
                                    Re-Sync zal altijd een beter bedrijf zijn dan Virels. Ik heb veel kunnen leren van zijn kwaliteiten en ben trots op wat mijn broer gedaan heeft voor mij, zonder Oussama zou ik nooit zijn waar ik nu ben. Re-Sync is een top bedrijf om mee samen te werken!
                                </h4>
                                <p>-Younes Chrifi</p>
                            </div>
                            <div>
									<img src="assets/img/testimonials/younes3.jpg" alt="" class="img-responsive img-thumbnail" />

                                <h4>
                                    Re-Sync zal altijd een beter bedrijf zijn dan Virels. Ik heb veel kunnen leren van zijn kwaliteiten en ben trots op wat mijn broer gedaan heeft voor mij, zonder Oussama zou ik nooit zijn waar ik nu ben. Re-Sync is een top bedrijf om mee samen te werken!
                                </h4>
                                <p>-Younes Chrifi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>


        <!-- Contact us -->
        <div id="contact-section" class="contact-container">

            <div class="inner-contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 contact">
                    <h3>Contacteer Ons</h3>
                    <p>
                      als u nog vragen heeft of losse diensten en/of uw eigen pakket wil samen samen stellen stuur ons dan hieronder een berichtje.<br/>
                      We zullen binnen 24 uur reageren.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-7 form-group contact-form">
                    <h4>Stuur bericht</h4>
                    <form method="post" action="assets/contact.php">
                        <input type="text" name="email" placeholder="Email" class="form-control contact-email">
                        <input type="text" name="subject" placeholder="Subject" class="form-control contact-subject">
                        <textarea name="message" class="form-control" placeholder="Message"></textarea>
                        <button type="submit" class="btn btn-contact">Submit</button>
                    </form>
                </div>
                <div class="col-sm-5 contact-address contact-about">
                    <h4>Over Ons</h4>
                    <p>Re-Sync is een klein bedrijf dat zorgt voor stimulatie bij bedrijven en organisaties. Wij streven ernaar dat onze klanten altijd een snelle doorgroei hebben nadat ze met ons in contact zijn geraakt, tevens zien wij in onze geschiedenis dat iedere klant tot nu toe een groei heeft gemaakt in hun financien.</p>
                    <!-- <p>Fusce at leo eros. Morbi mauris arcu, eleifend sit amet turpis ac, porta luctus neque. Etiam ultricies ac augue a venenatis. Quisque aliquam odio eu magna sodales, vel interdum erat suscipit. Mauris ut porttitor tellus. Integer ac bibendum lectus. Quisque interdum aliquam felis vel volutpat. Vivamus commodo felis quis dui pharetra, ac venenatis magna lacinia. Vestibulum quis dignissim nibh. Duis vitae felis orci. Aliquam porta interdum feugiat. Ut ac varius nibh. Nullam est nisl, sagittis sed risus vel, facilisis commodo tortor. Suspendisse suscipit tellus vitae tellus porta rutrum. Proin ac orci auctor, consequat dolor nec, scelerisque nisl.</p> -->
                    <h4>Gegevens</h4>
                    <p><i class="fa fa-map-marker"></i>Eindhoven</p>
                    <p><i class="fa fa-phone"></i>Phone: 0628717794</p>
                    <p><i class="fa fa-envelope"></i>Mail: admin@re-sync.nl</p>

                </div>
            </div>
          </div>
        </div>
        </div>


	<!-- footer -->
	<div id="footer">
	<h3>Volg Ons!</h3>
	<p>Wij zitten ook op social media! volg ons op de volgende platformen.</p>
	<div class="follow-us">
                        <a href="#" class="social-icon"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="social-icon"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fa fa-linkedin"></i></a>
                        <!-- <a href="#" class="social-icon"><i class="fa fa-pinterest"></i></a>
                        <a href="#" class="social-icon"><i class="fa fa-google-plus"></i></a> -->
		</div>
	</div>
	<!-- footer 2 -->
	<div id="footer2">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
				<div class="copyright">&copy;Resync
							<script type="text/javascript">
							//<![CDATA[
								var d = new Date()
								document.write(d.getFullYear())
								//]]>
								</script>
							  - <a href="http://re-sync.nl/">Re-Sync.nl</a>
						</div>
						</div>
					</div>
				</div>
					</div>

        <!-- Javascript -->
        <script src="assets/js/jquery-1.10.2.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/jquery.easing.1.3.min.js"></script>
        <script src="assets/js/jquery.stellar.min.js" type="text/javascript"></script>
        <script src="assets/owl-carousel/owl.carousel.min.js"></script>
        <script src="assets/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
        <script src="assets/js/cube.js"></script>
        <script src="assets/js/script.js"></script>
        <script src="assets/js/main.js"></script>


    </body>

</html>
