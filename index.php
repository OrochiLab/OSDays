<?php require_once('Metier/Guest.class.php');
	
	if (isset($_POST['name']) && isset($_POST['type']) && isset($_POST['email'])) {
		
		$name = mysql_real_escape_string($_POST['name']);
		$email = mysql_real_escape_string($_POST['email']);
		$type = mysql_real_escape_string($_POST['type']);
		
		Guest::InsertGuest($name, $email, $type);
		var_dump($_POST);
	} else {
		//echo "string";
	}
	
?>
<!DOCTYPE html>
<html>
	
<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- FAVICON -->
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		
		<!-- TITLE -->
		<title>Open Source Days - ENSAK</title>
		
		<!-- DESCRIPTION -->
		<meta name="author" content=" " />
		<meta name="description" content="" />
		<meta name="keywords"  content="" />
		
		<!-- GOOGLE FONTS -->
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,700,600,500,300,200,100,800,900' rel='stylesheet' type='text/css'> 

		<!-- STYLESHEETS -->

    	<link rel="stylesheet" href="assets/css/jquery.remodal.css">
		<link href="assets/css/bootstrap.css" rel="stylesheet">
		<link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/flexslider.css" rel="stylesheet" >
		<link href="assets/css/animate.css" rel="stylesheet">
		<link href="assets/css/schedule.css" rel="stylesheet">
		<link href="assets/css/gridgallery.css" rel="stylesheet" type="text/css"  />
		<link href="assets/css/staff.css" rel="stylesheet" type="text/css"  />
		<link href="assets/css/venobox.css" rel="stylesheet" type="text/css"/>
		<link href="assets/css/panel.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/styles.css" rel="stylesheet"/>
		
		<link href="assets/css/queries.css" rel="stylesheet"/>
		
		<link href="assets/css/jquery.countdown.css" rel="stylesheet" type="text/css" >
		
		<link rel="stylesheet" href="assets/css/custom-schedule.css" />
		
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	
	</head>
	   
    <body id="top"  style="background-color:#C7C7C7;">
	  
		<!--PRELOADER-->
		<div class="preloader">
		<div class="status"></div>
		</div>
		<!--/PRELOADER-->
		
		<!--HEADER-->
	  	<div class="header header-hide">
			<div class="container">
				<nav class="navbar navbar-default" role="navigation">
				   <div class="navbar-header">
					  <button type="button" class="navbar-toggle" data-toggle="collapse" 
						 data-target="#example-navbar-collapse">
						 <span class="sr-only">Toggle navigation</span>
						 <span class="icon-bar"></span>
						 <span class="icon-bar"></span>
						 <span class="icon-bar"></span>
					  </button>
					   <a class="navbar-brand" data-scroll href="#sec_1"><img src="assets/img/logo2.png" alt="logo"/></a>
				   </div>
				   <div class="collapse navbar-collapse" id="example-navbar-collapse">
					  <ul class="nav navbar-nav">
						<li><a data-scroll href="#apropos">A Propos</a></li>
						<li><a data-scroll href="#intervenants">Intervenants</a></li>
						<li><a data-scroll href="#programme">Programme</a></li>
						<li><a data-scroll href="#staff">Staffs</a></li>
						<li><a data-scroll href="#sponsers">Sponsors</a></li>
						<li><a data-scroll href="#swag">Participer</a></li>
						<li><a data-scroll href="#partenaire">Partenaires</a></li>
						<li><a data-scroll href="#contact">Contact</a></li>
					  </ul>
				   </div>
				</nav>
			</div>
		</div>
		<!--/HEADER-->
		
		<!--HOME-->		
		<section id="sec_1" class="autoheight">
			
			<!--LANDING VIDEO-->
				<video id="video"  autoplay="autoplay" loop width="500" height="400">
					<source src="video3.mp4" type="video/mp4"/>
					your browser does not support HTML5 
				</video>
			<!--/LANDING VIDEO-->
			
			<div class="home-bg"></div>
			<div class="col-lg-12 landing-text-pos align-center">
				<!--<h1 class="wow animated fadeInDown" data-wow-duration="1s" data-wow-delay="1s">The Annual Conference</h1>
				<hr id="title_hr"/>
				<p class="wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="1s">Grand Space, Portland. 21-26 Sept 2015</p>-->
				<!--<a  class="learn-more-btn btn-effect wow animated fadeIn" data-wow-duration="2s" data-wow-delay="1s" data-scroll href="#swag">Voir l'intro</a>-->
				<!-- COUNTDOWN	-->
				
				<!-- /COUNTDOWN	-->
				<div class="heading">
						<div id="defaultCountdown"></div>
						<div class="clearfix"></div>
				</div>
				<a class="learn-more-btn btn-effect wow animated fadeIn venoboxvid" data-type="youtube" data-wow-duration="2s" data-wow-delay="1s" href="http://www.youtube.com/embed/GHqmEbWmB84" target="_self">Voir l'intro</a>
			</div>
		</section>
		<!--/HOME-->
		
		<!--ABOUT-->	
        <section class="intro text-center section-padding" id="apropos">
			<div class="container wow animated fadeInLeft animated" data-wow-duration="1s" data-wow-delay="0.5s">
				<div class="row">
					<div class="col-lg-8 align-center about">
						<h1 class="arrow">Open source days 4.0</h1>
						<hr>
					<p>
					Destinées au grand public, les Journées Open Source ont pour mission la promotion du logiciel libre, la défense de ses principes, et l’encouragement à son utilisation prioritaire dans les établissements publics, les organisations politiques et communautaires au Maroc.<br/>
Cet edition et tenant compte des chantiers mis en place et développés par le gouvernement du Maroc relatifs à la bonne gouvernance, à l’administration de proximité, à la démocratisation et au droit d’accès à l’information par les citoyens; les élèves ingénieurs de l’Ecole Nationale des Sciences Appliquées de Khouribga organise avec ses fervents partenaires les journées Open Source sous le thème : <br/><br/>
<strong>«Big et Open Data : De la valorisation à l’exploitation de la donnée ouverte»</strong><br/><br/>
Cette rencontre prévue les 24 et 25 février 20155, à Khouribga fournira une plateforme de discussion entre les chercheurs, les experts, les responsables gouvernementaux, les professionnels et le public, autour de deux journées.
					</p>
					</div>
				</div>
			</div>
        </section>
		<!--/ABOUT-->

       
        <!--FEATURES-->	
        <section class="features text-center" id="features">
			<div class="row">
				<div id="grid-gallery" class="grid-gallery">
					<section class="grid-wrap">
						<div class="grid-gal">						
							<figure class="block-hover 3d-gallery col-lg-3 col-sm-12">
								<a href="#"><img src="assets/img/gallery/gal-icn.png" alt="img1">
									<span>GALLERIE</span>
								</a>                            
							</figure>
						</div> 
					</section>
					<!--grid wrap-->

					<!-- slideshow -->
					<section class="slideshow">
						<ul>
							<li>
								<figure>											
									<img src="assets/img/gallery/1.jpg" alt="img01"/>
									<figcaption>
										<hr/>
										<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>											
									<img src="assets/img/gallery/2.jpg" alt="img02"/>
									<figcaption>
										<hr/>
										<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<img src="assets/img/gallery/3.jpg" alt="img03"/>
									<figcaption>
										<hr/>
										<p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.</p>
									</figcaption>
								</figure>
							</li>

						</ul>
						<nav>
							<span class="nav-prev fa-chevron-left fa fa-2x "></span>
							<span class="nav-next fa-chevron-right fa fa-2x"></span>
							<span class="close nav-close"><i class="fa fa-times"></i></span>
						</nav>
					</section>
					<!-- /slideshow -->
				</div>
				<!-- /grid-gallery -->

				<div class="container col-lg-6 col-md-12 features-md">          
					<div class="row">
						<div class="col-md-12">
							<div class="features-wrapper">
								<div class="col-md-4 wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
									<div class="icon">
									  72+
									</div>
									<h2>hours</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis interdum.</p>
								</div>
							  
								<div class="col-md-4 wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
									<div class="icon">
									 16+
									</div>
									<h2>speakers</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis interdum.</p>
								</div>
							  
								<div class="col-md-4 wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.9s">
									<div class="icon">
									  25+
									</div>
									<h2>technologies</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis interdum.</p>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>

				<!-- Vimoe Video-->	
				<div class="grid-gal">
				  <figure class="block-hover vimeo-video col-lg-3 col-sm-12">
					<a class="venoboxvid" data-type="youtube"  href="http://www.youtube.com/embed/GHqmEbWmB84" target="_self">
						<img src="assets/img/vdo-icn.png" alt="video_hover">
						<span>VIDEO</span>
					</a>
					<!--<iframe width="560" height="315" src="//www.youtube.com/embed/GHqmEbWmB84" frameborder="0" allowfullscreen></iframe>-->
				  
				</figure>
				</div>

			</div><!--row ends here-->
        </section>
        <!--/FEATURES-->	
		
		
        <!--SPEAKERS-->
        <section class="team text-center section-padding" id="intervenants">
			<div class="container">
				<div class="row">
				  <div class="col-lg-8 wow animated fadeInUp align-center" data-wow-duration="1s" data-wow-delay="1s">
					<h1 class="arrow">Intervenants</h1><hr>
					<p>Lorem ipsum dolor sit amet, alia honestatis an qui, ne soluta nemore eripuit sed. Falli exerci aperiam ut his, prompta feugiat usu minimum delicata.</p>
				  </div>
				</div>
				<div class="row">
					<div class="speakers-wrap">
						<div id="portfolioSlider">
							<ul class="slides">
								<li>
									<div class="col-md-4 col-sm-4 wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
										<div class="overlay-effect effects clearfix">
											<div class="img">
											  <img style="width:220px;height:210px;margin:auto;" src="assets/img/intervenants/mouhsine_lakhdisi.png" alt="Portfolio Item">
											  <div class="overlay" style="width:220px;height:210px;margin:auto;">
												<button class="md-trigger expand" data-modal="modal-9"><i class="fa fa-search"></i><br>Voir plus</button>
											  </div>
											</div>
										</div>
										<h2>Mouhcine Lakhdissi</h2>
										<p>Co-fondateur et Directeur général de Neoxia Maroc</p>
									</div>

									<div class="col-md-4 col-sm-4 wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.7s">
										<div class="overlay-effect effects clearfix">
											<div class="img">
												<img style="width:220px;height:210px;margin:auto;" src="assets/img/intervenants/mokhtar_tazi.png" alt="Portfolio Item">
												<div class="overlay" style="width:220px;height:210px;margin:auto;">
													<button class="md-trigger expand" data-modal="modal-9"><i class="fa fa-search"></i><br>Voir plus</button>
												</div>
											</div>
										</div>
										<h2>Mokhtar Tazi</h2>
										<p>Directeur Général de Maroc Numeric Cluster</p>
									</div>

									<div class="col-md-4 col-sm-4 wow animated fadeInUp" data-wow-duration="1s" data-wow-delay="0.9s">
										<div class="overlay-effect effects clearfix">
											<div class="img">
												<img style="width:220px;height:210px;margin:auto;" src="assets/img/intervenants/badr_elhouari.png" alt="Portfolio Item">
												<div class="overlay" style="width:220px;height:210px;margin:auto;">
													<button class="md-trigger expand" data-modal="modal-9"><i class="fa fa-search"></i><br>Voir plus</button>
												</div>
											</div>
										</div>
										<h2>Badr Elhouari</h2>
										<p>President de Moroco Java Users Group et Co-fondateur de JMaghreb</p>
									</div>
								</li>
								<!-- <li> Second Set of Speakers -->
								<li>
									<div class="col-md-4 col-sm-4 wow animated fadeInUp">
										<div class="overlay-effect effects clearfix">
										<div class="img">
										  <img style="width:220px;height:210px;margin:auto;" src="assets/img/intervenants/omar_zemrag.png" alt="Portfolio Item">
										  <div class="overlay" style="width:220px;height:210px;margin:auto;">
											<button class="md-trigger expand" data-modal="modal-9"><i class="fa fa-search"></i><br>Voir plus</button>
										  </div>
										</div>
										</div>
										<h2>Omar Zemrag</h2>
										<p>Consultant Mysql à Oracle</p>
									</div>
									<div class="col-md-4 col-sm-4 wow animated fadeInUp">
										<div class="overlay-effect effects clearfix">
											<div class="img">
											  <img style="width:220px;height:210px;margin:auto;" src="assets/img/intervenants/imad_hafidi.png" alt="Portfolio Item">
											  <div class="overlay" style="width:220px;height:210px;margin:auto;">
												<button class="md-trigger expand" data-modal="modal-9"><i class="fa fa-search"></i><br>Voir plus</button>
											  </div>
											</div>
										</div>
										<h2>Imad Hafidi</h2>
										<p>Enseignant Chercheur à L’école nationale des Sciences Appliquées</p>
									</div>
									<!--<div class="col-md-4 col-sm-4 wow animated fadeInUp">
										<div class="overlay-effect effects clearfix">
											<div class="img">
											  <img src="assets/img/team3.jpg" alt="Portfolio Item">
											  <div class="overlay">
												<button class="md-trigger expand" data-modal="modal-9"><i class="fa fa-search"></i><br>View More</button>
											  </div>
											</div>
										</div>
									  <h2>John Thomson</h2>
									  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ultricies nulla non metus pulvinar imperdiet.</p>
									</div>-->
								</li>
							</ul>
						</div>
					</div>
				</div> <!--Row Ends Here-->
			</div>
			<!-- Example Speaker -->
			<div class="md-modal md-effect-9" id="modal-9">
				<div class="md-content">
					<div class="folio">
						<div class="avatar"></div>
						<div class="sp-name"><strong>Mark Anderson</strong><br/>Director, ABC</div>
						<div class="sp-dsc">
						This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.
							<blockquote>
							<p>Here is a long quotation here is a long quotation proin gravida nibh vel velit auctor aliquet aenean sollicitudin.</p>
							</blockquote>
						This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
						</div>
						<div class="sp-social">
							<ul>
								<li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" class="social-btn"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
							</ul>
						</div>
						<button class="md-close"><i class="fa fa-times"></i></button>
					</div>
				</div>
			</div> 
			<div class="md-overlay"></div>
			<!-- /Example Speaker -->
        </section>
		<!--/SPEAKER-->
		
		
		<!--SCHEDULE-->        
        <section class="text-center section-padding" id="programme">
			<div class="container wow animated fadeInLeft bottom-spacing">
				<div class="row">
					<div class="col-md-8 align-center wow animated fadeInLeft">
						<h1 class="arrow">Programme</h1><hr>
						<p>Calendrier de l'événement :</p>
					</div>
				</div>
			</div>
			
			<div class="container-schedule container wow animated fadeInDown animated" data-wow-duration="1s" data-wow-delay="1s">
				<div id="tabs-ui" class="tabs">
					<nav>
						<ul>
							<li><a href="#section-1"><span>Journée du Mardi 24 Février</span></a></li>
							<li><a href="#section-2"><span>Journée du Mercredi 25 Février</span></a></li>

						</ul>
					</nav>
					<div class="content">
						<section id="section-1">
							<div class="container">
								<div class="accordion">
									<div class="day">Mardi 24 Février, 2015	</div>
									<div class="item clearfix">
										<div class="heading clearfix">
											<div class="time col-md-3 col-sm-12 col-xs-12">8h30 - 9h00</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12">
												Accueil des invités
											</div>
										</div>
										<div class="col-md-12 col-sm-12 col-xs-12">
											<div class="content venue col-md-3 col-sm-12 col-xs-12">
												
											</div>
											<div class="content details col-md-9 col-sm-12 col-xs-12">
											Accueil et Réception des invités et participants aux compétitions.
											</div>
										</div>
									</div>
								  
									<div class="item clearfix">
										<div class="heading">
											<div class="time col-md-3 col-sm-12 col-xs-12">9h00 - 9h45</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12">Les mots d'ouverture<br/></div>
										</div>
										<div class="col-md-12 col-sm-12 col-xs-12">
											<div class="content venue col-md-3 col-sm-12 col-xs-12">
												
											</div>
											<div class="content details col-md-9 col-sm-12 col-xs-12">
											9h 00 :Mot du Président de l’Université 1er M. Ahmed NAJMEDDINE.<br/>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mot du Directeur de l’Ecole Nationale des Sciences Appliquées de Khouribga.<br/>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mot du Conseiller Pédagogique Générale M. Imad HAFIDI.<br/>
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mot du Président du comité organisateur M. Hamza ABQAR.</br>
											9h 30 : Présentation d’ouverture « Explaining The Open Source culture » par M. Anas Rchi et Mlle. Jihane Hadraoui<br>
											9h 45 : Keynote d’Ouverture du partenaire official JUG Morocco par M.Badr Elhouari « Presentation of JUG and The philosophy of Open Data »
											</div>
										</div>
									</div>
								  
									<div class="item clearfix">
										<div class="heading">
											<div class="time col-md-3 col-sm-12 col-xs-12">10h:15 - 12h:30</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12">10h 15: La conférence 1 de M. Mouhcine LAKHDISSI<br/><span class="name">Directeur General de NEOXIA Maroc et Expert Big Data</span></div>
										</div>
										<div class="col-md-12 col-sm-12 col-xs-12">
											<div class="content venue col-md-3 col-sm-12 col-xs-12">
												
											</div>
											<div class="content details col-md-9 col-sm-12 col-xs-12">
												10h 15 : La conférence 1 de M. Mouhcine LAKHDISSI Directeur General de NEOXIA Maroc et Expert Big Data<br>
												11h 00 : Pause-Café<br>
												11h 20 : Table Ronde à l’Amphithéâtre officiel<br>
												11h 45 : Lancement Officiel du Hackaton Open Data par Monsieur LAKHDISSI Mouhcine<br>
												12h 10 : Fin des conférences.<br>
												12h 30 : Déjeuner.<br>
											</div>
										</div>
									</div>
								  
									<div class="item clearfix">
										<div class="heading">
											<div class="time col-md-3 col-sm-12 col-xs-12">14h:00 - 17h:00</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12"><br/>Visite des ateliers & Evaluation des projets<span class="name"> JUG Morocco.</span><span class="speaker-designaition"></span></div>
										</div>
										<div class="col-md-12 col-sm-12 col-xs-12">
											<div class="content venue col-md-3 col-sm-12 col-xs-12">
												
											</div>
											<div class="content details col-md-9 col-sm-12 col-xs-12">
												14h 00 : Visite des ateliers & Evaluation des projets<br>
												14h 15 : Lancement des ateliers de formations sous l’encadrement de JUG Morocco.<br>
												15h 45 : Break et Pause-Café<br>
												16h 00 : Suite des Ateliers de formations<br>
												17h 00 : Clôture des ateliers et Visite du Hackaton.<br>
											</div>
										</div>
									</div>
								</div>        
							</div><!--CONTAINER ENDS-->
						</section>
						<section id="section-2">
							<div class="container">
								<div class="accordion">
									<div class="day">Mercredi 25 Février , 2015</div>
									<div class="item clearfix">
										<div class="heading clearfix">
											<div class="time col-md-3 col-sm-12 col-xs-12">8h:30 - 10h:45</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12">Keynote - Moroccan Game Developers<br/><span class="name">« Story of Open Source Days 4.0 »</span><span class="speaker-designaition"></span></div>
										</div>
										<div class="col-md-12 col-sm-12 col-xs-12">
											<div class="content venue col-md-3 col-sm-12 col-xs-12">
												
											</div>
											<div class="content details col-md-9 col-sm-12 col-xs-12">
												8h30	: Accueil des invités.<br>
												9h 00	: Keynote d’ouverture par Moroccan Game Developers<br>
												9h 30	: Lancement de la Vidéo présentative de l’événement « Story of Open Source Days 4.0 »<br>
												9h 15 	: Conférence 1 : Projet de la ville intelligente.<br>
												10h 00 	: Conférence 2 : ?<br>
												10h 45	: Pause-Café<br>
											</div>
										</div>
									</div>
								  
									<div class="item clearfix">
										<div class="heading">
											<div class="time col-md-3 col-sm-12 col-xs-12">11h:15 - 12h:30</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12">Conférence GPEE<br/><span class="name">Déjeuner</span><span class="speaker-designaition"></span></div>
										</div>
										<div class="col-md-12 col-sm-12 col-xs-12">
											<div class="content venue col-md-3 col-sm-12 col-xs-12">
												
											</div>
											<div class="content details col-md-9 col-sm-12 col-xs-12">
												11h 15 : Conférence 3 dédié pour GPEE : ?<br>
												12h 00 : Fin des Conférences.<br>
												12h 30 : Le Déjeuner.<br>
											</div>
										</div>
									</div>
								  
									<div class="item clearfix">
										<div class="heading">
											<div class="time col-md-3 col-sm-12 col-xs-12">1:00pm - 2:00pm</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12">Final Hackathon<br/><span class="name"> - Atelier Maroccan Game Developers</span></div>
										</div>
										<div class="col-md-12 col-sm-12 col-xs-12">
											<div class="content venue col-md-3 col-sm-12 col-xs-12">
												
											</div>
											<div class="content details col-md-9 col-sm-12 col-xs-12">
												3h 30  : Lancement des ateliers de formations sous l’encadrement de Moroccan Game Developers.<br>
												15h 00 : Break (Pause).<br>
												15h 10 : Suite des ateliers.<br>
												16h 15 : Finale de la compétition Hackaton dans l’amphithéâtre principal et Pitchs des projets.<br>
											</div>
										</div>
									</div>
								  
									<div class="item clearfix">
										<div class="heading">
											<div class="time col-md-3 col-sm-12 col-xs-12">3:00pm - 4:30pm</div>
											<div class="e-title col-md-9 col-sm-12 col-xs-12">Cérémonie & Clôture<br/><span class="name"> - Remise des trophées</span><span class="speaker-designaition">Lead Designer, Microsoft</span></div>
										</div>
										<div class="col-md-12 col-sm-12 col-xs-12">
											<div class="content venue col-md-3 col-sm-12 col-xs-12">
												
											</div>
											<div class="content details col-md-9 col-sm-12 col-xs-12">
												17h 15 : Annonces des résultats.<br>
												17h 30 : Cérémonie de remise des trophées du Hackaton.<br>
												17h 45 : Remise des trophées aux meilleurs projets.<br>
												18h 00 : Remise des trophées aux formateurs.<br>
												18h 10 : Buffet de la clôture.
											</div>
										</div>
									</div>
								</div>        
							</div>
						</section>
					</div><!-- /content -->
				</div><!-- /tabs -->
			</div>
        </section>
		
		
		<!-- Event social links and download-->
		<section class="event-download-social-link section-padding">
			<div class="col-lg-6 col-md-12 align-center">
				<a class="d-sch text-right" href="#" target="_blank">download schedule</a>
				<a class="fb " href="#" target="_blank">connect via facebook</a>
			</div>
		</section>
		
		<!--/SCHEDULE-->
        
		
		 <!--STAFF-->        
		<section id="staff" class="portfolio text-center section-padding">
			<div class="container">
				<div class="row">
				  <div class="col-md-12">
					<h1 class="arrow">STAFF</h1><hr><p>See what you get during the event. Lorem ipsum dolor sit amet, ne soluta nemore eripuit sed.</p>
				  </div>
				</div>
				<div class="row">
					<!-- ## TESTIMONIALS ## -->
					<div class="testimonial qcEventlayout clearfix">
						<div class="col-md-6">
							<!-- ## TESTIMONIAL LIST ## -->
							<ul id="qcTestimonialList" class="clearfix">
												<li>
													<a href="#" data-content="Lorem ipsum dolor sit amet, consectetur adipisicing elit." data-cite="John Doe via Twitter">
														<img src="assets/img/staff/MohammedAmineOUASMINE.jpg" alt="">
													</a>
												</li>
												<li>
													<a href="#" data-content="!" data-cite="Samantha via Twitter">
														<img src="assets/img/staff/MohammedAmineOUASMINE.jpg" alt="">
													</a>
											  </li>
												<li>
													<a class="active" href="#" data-content="Lorem ipsum dolor sit amet, consectetur adipisicing elit." data-cite="John Doen via Twitter">
														<img src="assets/img/staff/MohammedAmineOUASMINE.jpg" alt="">
													</a>
												</li>
												<li>
													<a href="#" data-content="quibusdam est porro illum adipisci minima cupiditate sequi velit eaque enim sed nihil excepturi repellendus eum error vero!" data-cite="Samantha via Twitter">
														<img src="assets/img/staff/MohammedAmineOUASMINE.jpg" alt="">
													</a>
												</li>
												<li>
													<a href="#" data-content="Lorem ipsum dolor sit amet, consectetur adipisicing elit." data-cite="John Doe via Twitter">
														<img src="assets/img/staff/MohammedAmineOUASMINE.jpg" alt="">
													</a>
												</li>
												<li>
													<a href="#" data-content="quibusdam est porro illum adipisci minima cupiditate sequi velit eaque enim sed nihil excepturi repellendus eum error vero!" data-cite="Samantha via Twitter">
														<img src="assets/img/staff/MohammedAmineOUASMINE.jpg" alt="">
													</a>
												</li>
												<li>
													<a href="#" data-content="Lorem ipsum dolor sit amet, consectetur adipisicing elit." data-cite="John Doe via Twitter">
														<img src="assets/img/staff/MohammedAmineOUASMINE.jpg" alt="">
													</a>
												</li>
												<li>
													<a href="#" data-content="quibusdam est porro illum adipisci minima cupiditate sequi velit eaque enim sed nihil excepturi repellendus eum error vero!" data-cite="Samantha via Twitter">
														<img src="assets/img/staff/MohammedAmineOUASMINE.jpg" alt="">
													</a>
												</li>
												<li>
													<a href="#" data-content="Lorem ipsum dolor sit amet, consectetur adipisicing elit." data-cite="John Doe via Twitter">
														<img src="assets/img/staff/MohammedAmineOUASMINE.jpg" alt="">
													</a>
											  </li>
												<li>
													<a href="#" data-content="quibusdam est porro illum adipisci minima cupiditate sequi velit eaque enim sed nihil excepturi repellendus eum error vero!" data-cite="Samantha via Twitter">
														<img src="assets/img/staff/MohammedAmineOUASMINE.jpg" alt="">
													</a>
												</li>
											</ul>
											<!-- ## TESTIMONIAL LIST END ## -->
										</div>
										<div class="col-md-6">
											<div id="qcTestimonial">
												<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
												<cite>- John Doen via Twitter</cite>
											</div>
										</div>
					</div>
					<!-- ## TESTIMONIALS END ## -->
				</div>
			</div>
        </section>
		<!--/STAFF-->
        
        <!--REGISTER FORM-->	
        <section id="swag" class="swag text-center">
			<div class="container">
				<div class="row">
					<div class="col-lg-9 align-center">
						<form id="nl-form" method="POST" class="nl-form ">
							Hi! Je m'apelle 
							<input id="name" type="text" name="name" placeholder="Enter nom & prenom" data-subline="Entre votre nom & prenom"/>
							.
							je veux m'enregistre pour  
							<select name="type" id="field_1">
								<option value="Formations"selected>Pack Gold</option>
								<option value="Conferences">Pack Silver</option>
							</select>
							
							.
							Contacter moi sur
							<input id="email1" type="text" name="email1" placeholder="Mon E-mail address" data-subline="Enter votre address mail"/>									
							<div class="nl-submit-wrap">
								<button class="nl-submit btn-effect" type="submit" id="submit_btn">Submit</button>
							</div>				
							<div id="result"></div>
							<div class="nl-overlay"></div>
						</form>

						<div class="col-lg-12 md-modal md-effect-12" id="modal-10">
							<div class="md-content padding-none">
								<div class="folio">
									
									<div class="sp-name disclaimer"><strong>Terms and Conditions</strong></div>
									<div class="sp-dsc disclaim-border">
									<ul>
										<li>rules 1</li>
										<li>rules 2</li>
										<li>rules 3</li>
									</ul>
									</div>
									
									<button class="md-close"><i class="fa fa-times"></i></button>
								</div>
							</div>
						</div>
						<div class="col-lg-12 md-modal md-effect-12" id="modal-101">
							<div class="md-content padding-none">
								<div class="folio">
									
									<div class="sp-name disclaimer"><strong>Pack Gold</strong></div>
									<div class="sp-dsc disclaim-border">
									Le pack gold contient .........
									<ul>
										<li>Conférences</li>
										<li>Atelier Ruby & Rails</li>
										<li>Atelier Java 8</li>
										<li>Atelier Gaming (Unity)</li>
										<li>Atelier Gaming (studio)</li>
										<li>Hackathon Open Data : Big Data</li>
										<li>Buffers & autres ...</li>
									</ul>
									</div>
									
									<button class="md-close"><i class="fa fa-times"></i></button>
								</div>
							</div>
						</div>
						<div class="col-lg-12 md-modal md-effect-12" id="modal-102">
							<div class="md-content padding-none">
								<div class="folio">
									
									<div class="sp-name disclaimer"><strong>Pack Silver</strong></div>
									<div class="sp-dsc disclaim-border">
									Le pack silver contient .........
									<ul>
										<li>Conférences</li>
										<li>Hackathon Open Data : Big Data</li>
										<li>Buffers & autres ...</li>
									</ul>
									</div>
									
									<button class="md-close"><i class="fa fa-times"></i></button>
								</div>
							</div>
						</div>
						<div class="col-md-12 tc">
							<button class="md-trigger" data-modal="modal-101">Pack Gold*</button>
							<button class="md-trigger" data-modal="modal-102">Pack Silver**</button>
						</div>
						<div class="col-md-12 tc">Please read the<button class="md-trigger" data-modal="modal-10">Terms & Conditions</button>carefully.</div>
						<!-- the overlay element -->
						<div class="md-overlay"></div>
					</div>

				</div>
			</div>
        </section>
		<!-- /REGISTER FORM -->

       <!--SPONSORS-->	
        <div id="sponsers" class="ignite-cta text-center section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-8 align-center wow animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
						<h1 class="arrow">Nos Sponsors</h1><hr>
						<p>Lorem ipsum dolor sit amet, alia honestatis an qui, ne soluta nemore eripuit sed. Falli exerci aperiam ut his, prompta feugiat usu minimum delicata.</p>
					</div>
					<!-- Jssor Slider Begin -->
					<div id="slider1_container" style=" ">
						<div class="inner_carousal" data-u="slides" style="">
							<div><img alt="sp1" src="assets/img/sponsor/sp1.png" /></div>
							<div><img alt="sp2" src="assets/img/sponsor/sp2.png" /></div>
							<div><img alt="sp3" src="assets/img/sponsor/sp3.png" /></div>
							<div><img alt="sp4" src="assets/img/sponsor/sp4.png" /></div>
						</div>
					</div>
					<!-- Jssor Slider End -->
				</div>
			</div>
		</div>
		<!-- SPONSORS -->	
		
		<!--SUBSCRIBE-->	
        <section id ="newletters" class="subscribe text-center">
			<div class="subscribe-overlay"></div>
			<div class="container wow animated fadeInDown" data-wow-duration="1s" data-wow-delay="0.3s">
				<h1>Subscribe for newsletter</h1>
				<form action="" id="notifyMe" method="POST" class="center-block align-center col-lg-5 col-md-5 col-sm-10 col-xs-10">
					<div class="input-group col-lg-12 align-center">
					  <input type="text" class="form-control email-add" name="email" placeholder="Enter Email Address">
					  <button class="btn btn-default notify-button"><i class="fa fa-paper-plane"></i><span>Send</span></button>
					</div>
				</form>
			</div>
        </section>
		<!-- /SUBSCRIBE -->
		<!--PARTENAIRES-->	
        <div id="partenaire" class="ignite-cta text-center section-padding">
			<div class="container">
				<div class="row">
					<div class="col-md-8 align-center wow animated fadeInLeft" data-wow-duration="1s" data-wow-delay="0.5s">
						<h1 class="arrow">Nos Partenanires</h1><hr>
						<p>Lorem ipsum dolor sit amet, alia honestatis an qui, ne soluta nemore eripuit sed. Falli exerci aperiam ut his, prompta feugiat usu minimum delicata.</p>
					</div>
					<!-- Jssor Slider Begin -->
					<div id="slider1_container" style=" ">
						<div class="inner_carousal" data-u="slides" style="">
							<div><img alt="sp1" src="assets/img/Parteners/sp1.jpg" /></div>
							<div><img alt="sp2" src="assets/img/Parteners/sp2.jpg" /></div>
							<div><img alt="sp3" src="assets/img/Parteners/sp3.jpg" /></div>
						</div>
					</div>
					<!-- Jssor Slider End -->
				</div>
			</div>
		</div>
		<!-- PARTENAIRES -->
		<!--CONTACT-->	
        <section class="text-center section-padding contact-wrap" id="contact">
			<div class="container">
				<div class="row">
					<div class="col-md-8 wow animated fadeInLeft align-center" data-wow-duration="1s" data-wow-delay="0.3s">
						<h1 class="arrow">Contact</h1><hr>
						<p>Nous Contacter !</p>
					</div>
				</div>
				<div class="row contact-details">
					<div class="col-md-4 wow animated fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
						<div class="light-box box-hover">
							<h2><span>Address</span></h2>
							<p>École Nationale des Sciences Appliquées, <br> Bd Béni Amir, BP 77, <br>Khouribga - Maroc,</p>
						</div>
					</div>
					<div class="col-md-4 wow animated fadeInDown" data-wow-duration="1s" data-wow-delay="0.7s">
						<div class="light-box box-hover">
							<h2><span>Phone</span></h2>
							<p>+212 5 0000 0000<br>+212 6 0000 0000</p>
						</div>
					</div>
					<div class="col-md-4 wow animated fadeInDown" data-wow-duration="1s" data-wow-delay="0.9s">
						<div class="light-box box-hover">
							<h2><span>Email</span></h2>
							<p><a href="#">opensourcedays4.0@gmail.com</a><br><a href="#">www.ensa.uh1.ac.ma</a><br><a href="#">opensourcedays4.0@gmail.com</a></p>
						</div>
					</div>
				</div>
				<div class="row">
					<a id="get_directions" class="learn-more-btn btn-effect" href="#"><i class="fa fa-map-marker"></i><span>Get Directions</span></a>
				</div>
				<div class="row">
					<div class="col-md-12">
						<ul class="social-buttons">
							<li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>
							<li><a href="#" class="social-btn"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="social-btn"><i class="fa fa-envelope"></i></a></li>
							<li><a href="#" class="social-btn"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="social-btn"><i class="fa fa-skype"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
        </section>
		<!-- /CONTACT -->	

		<!--FOOTER-->	
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-6 align-center">
						<ul class="legals">
							<li><button class="md-trigger " data-modal="modal-11">Mohammed Amine OUASMINE</button></li>
							<li><button class="md-trigger " data-modal="modal-11">Mouad MORABIT</button></li>
						</ul>
					</div>
					<div class="md-modal md-effect-9" id="modal-11">
						<div class="md-content padding-none">
							<div class="folio">
								<div class="avatar" style="background-image: url('assets/img/staff/MohammedAmineOUASMINEAvatar.jpg');">
								</div>
								<div class="sp-name"><strong>Mohammed Amine Ouasmine</strong><br/>Elève-Ingenieur</div>
								<div class="sp-dsc">
								
									<blockquote>
									<p>Neuf femmes ne peuvent pas faire un bébé en un mois <strong><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Fred Brooks</strong>.</p>
									</blockquote>
								</div>
								<div class="sp-social">
									<ul>
										<li><a href="https://twitter.com/OsmAmine" class="social-btn"><i class="fa fa-twitter"></i></a></li>
										<li><a href="https://www.facebook.com/med.amiine.wasmiine" class="social-btn"><i class="fa fa-facebook"></i></a></li>
										<li><a href="https://plus.google.com/u/0/+MedAmyneOuasmine/posts" class="social-btn"><i class="fa fa-envelope"></i></a></li>
										<li><a href="https://ma.linkedin.com/pub/med-amine-ouasmine/4a/883/a70" class="social-btn"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="https://github.com/medamineosm" class="social-btn"><i class="fa fa-github"></i></a></li>
									</ul>
								</div>
								<button class="md-close"><i class="fa fa-times"></i></button>
							</div>
						</div>
					</div> 
					<div class="md-overlay"></div>
				</div>
			</div>
        </footer>
		<!-- /FOOTER -->
 		<!--SCRIPTS-->	
		
		<script type="text/javascript" src="assets/js/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery-ui-1.10.4.min.js"></script>
		
		<!--VIMEO VIDEO-->     
        <script type="text/javascript" src="assets/js/venobox.js"></script>

        <!--3D GALLERY-->
        <script type="text/javascript" src="assets/js/classie.grid.gallery.js"></script>
		<script type="text/javascript" src="assets/js/modernizr.gridgallery.js"></script>		
		<script type="text/javascript" src="assets/js/cbpGridGallery.js"></script>
 
		<script type="text/javascript" src="assets/js/classie.js" ></script>
		<script type="text/javascript" src="assets/js/modalEffects.js" ></script>
       
	    <script type="text/javascript" src="assets/js/nlform.js" ></script>
		<script>var nlform = new NLForm( document.getElementById( 'nl-form' ) );</script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js" ></script>
        
		<!-- TEAM SLIDER  -->
		<script type="text/javascript" src="assets/js/jquery.flexslider.js" ></script>
		
		<!-- SCHEDULE TABS  -->
        <script type="text/javascript" src="assets/js/modernizr.js" ></script>
		<script type="text/javascript" src="assets/js/cbpFWTabs.js" ></script>		
		
		<!--SPONSOR SLIDER-->
		<script type="text/javascript" src="assets/js/jssor.core.js"></script>
		<script type="text/javascript" src="assets/js/jssor.utils.js"></script>
		<script type="text/javascript" src="assets/js/jssor.slider.js"></script>
		<script type="text/javascript" src="assets/js/sponsor_init.js"></script>
		
		<!-- SMOOTH SCROLL  -->
		<script type="text/javascript" src="assets/js/smooth-scroll.js"></script>
		
		<!-- NICE SCROLL  -->
		<script type="text/javascript" src="assets/js/jquery.nicescroll.js"></script>
		
		<!-- SUBSCRIPTION FORM  -->
		<script type="text/javascript" src="assets/js/notifyMe.js"></script>
		
		<script type="text/javascript" src="assets/js/jquery.placeholder.js"></script>
		
		<!-- ANIMATION  -->
		<script type="text/javascript" src="assets/js/wow.min.js"></script>
		
		<!-- INITIALIZATION  -->
		<script type="text/javascript" src="assets/js/init.js"></script>
		
		<script type="text/javascript" src="assets/js/jquery.plugin.js"></script> 
		<script type="text/javascript" src="assets/js/jquery.countdown.js"></script>

		<!-- MODAL -->
		script src="assets/js/jquery.remodal.js"></script>
		<script>
		    $(document).on('open', '.remodal', function () {
		        console.log('open');
		    });

		//    You can open or close it like this:
		//    $(function () {
		//        var inst = $.remodal.lookup[$('[data-remodal-id=modal]').data('remodal')];
		//        inst.open();
		//        inst.close();
		//    });

		    //  Or init in this way:
		    var inst = $('[data-remodal-id=modal2]').remodal();
		    //  inst.open();
		</script>
    </body>
</html>