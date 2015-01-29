<?php 
$cs = Yii::app()->getClientScript();

$cs->registerCssFile(Yii::app()->request->baseUrl. '/css/vis.css');
$cs->registerScriptFile(Yii::app()->request->baseUrl.'/js/api.js' , CClientScript::POS_END);
$cs->registerScriptFile(Yii::app()->request->baseUrl.'/js/vis.min.js' , CClientScript::POS_END);

$cs->registerCssFile("http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css");
$cs->registerCssFile("//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css");
$cs->registerCssFile($this->module->assetsUrl. '/css/leaflet.draw.css');
$cs->registerCssFile($this->module->assetsUrl. '/css/leaflet.draw.ie.css');
$cs->registerCssFile($this->module->assetsUrl. '/css/MarkerCluster.css');
$cs->registerCssFile($this->module->assetsUrl. '/css/MarkerCluster.Default.css');
$cs->registerCssFile($this->module->assetsUrl. '/css/sig.css');
//$cs->registerCssFile($this->module->assetsUrl. '/css/leaflet.awesome-markers.css');

$cs->registerScriptFile('http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js' , CClientScript::POS_END);
$cs->registerScriptFile($this->module->assetsUrl.'/js/sig/leaflet.draw-src.js' , CClientScript::POS_END);
$cs->registerScriptFile($this->module->assetsUrl.'/js/sig/leaflet.draw.js' , CClientScript::POS_END);
$cs->registerScriptFile($this->module->assetsUrl.'/js/sig/leaflet.markercluster-src.js' , CClientScript::POS_END);
$cs->registerScriptFile($this->module->assetsUrl.'/js/sig/leaflet.awesome-markers.min.js' , CClientScript::POS_END);

$this->pageTitle=$this::moduleTitle;


		
	
?>

	<script src="http://code.jquery.com/jquery.js"></script>
	<!-- START MAIN CONTAINER -->
	<div id="main-container">		

	<!-- START PROJECT SECTION -->

		<section id="sectionsvg" class="section">
			<div class="sgvAndImg">
				<div id="svg"></div>
				<div id="patterns"></div>
				<div class="flexslider">
					<ul class="slides">
					<li>
						<div class="imgSvg" id="slide1">
							<img src="images/slider/slide3.png" style="margin-left:'auto'; margin-right:'auto';"/>
							<h1>Découvrez <strong>Pixel Humain</strong></h1>
				            	<h3>Le premier réseau social citoyen libre<br>
				Citoyens, Associations, Entreprises, Collectivités : <br>
				Découvrez ce qui se passe en ce moment dans votre commune<br>
				Participez aux discussions et actions citoyennes qui vous tiennent à cœur.</h3>
						</div>
					</li>
					<li>
						<div class="imgSvg" id="slide1">
							<img src="images/slider/slide4.png" style="margin-left:'auto'; margin-right:'auto';"/>
							<h1>Découvrez <strong>Pixel Humain</strong></h1>
				            	<h3>Le premier réseau social citoyen libre<br>
				Citoyens, Associations, Entreprises, Collectivités : <br>
				Découvrez ce qui se passe en ce moment dans votre commune<br>
				Participez aux discussions et actions citoyennes qui vous tiennent à cœur.</h3>
						</div>
					</li>
					</ul>
				</div> 
			
			</div>
		</section>

		<!-- START TEAM SECTION -->
		<section id="description" class="center section with-arrow">
			<!-- SECTION TITLE -->
			<div class="section-header sub-hero">
				<h1><img src="images/icon.png" width="80" height="79"><br>Le Projet</h1><hr>
			</div>
			<!-- SECTION CONTENT -->
			<div class="section-content section-no-top-padding" id ="section-video">
				<div class="container">
					<h3>Pixel Humain est le premier réseau social citoyen libre de droit, <br>
		d'accès, d'opinion, d'utilisation, d'évolution ...<br>
		Pixel humain est une plateforme en construction et recherche de financements.
					</h3>
					<img class="img-responsive img-thumbnail" src="images/video.jpg" data-toggle="modal" data-target="#largeModal"/>
				</div>
			</div>
		</section>
		<!-- END TEAM SECTION -->

		<!-- Modal -->
		<div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
		    <div class="modal-content">
		      <div class ="modal-header">
		      	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		      </div>
		      	<div class="modal-body">
		      		<iframe src="http://player.vimeo.com/video/74212373?api=1&title=0&amp;byline=0&amp;portrait=0&amp;color=57c0d4" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen class="video" aria-hidden="true" tabindex="-1"></iframe>
		      	</div>
		    </div>
		  </div>
		</div>
	


		<!-- START BLOG SECTION -->
			<section id="team" class="section section-content-colored">
			<?php 
				$this->renderPartial('equipe');
			?>
	 		</section>
		<!-- END BLOG SECTION -->
		
		
		
		<!-- START SERVICES SECTION -->
			<section id="services" class="section section-full-colored">
				<!-- SECTION TITLE -->
				<div class="section-header">
				
					<h1 class="parnet">	<img src="images/hand.png"  ><br>PARTICIPER</h1>
					<p class="parnet">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet <br>dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam<br> nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
				</div>
				<!-- SECTION CONTENT -->
				<div class="section-content">
					<div class="container">
						<div class="services-slider ">
		                    <ul class="slides">
								<!-- START SERVICE -->
		                    <div class="col-md-3">   <li>
		                            <div class="slide">
										
										<h3>Je me communecte</h3>
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat...</p>
									</div>
								</li></div>  
								<!-- END SERVICE -->
		                     <div class="col-md-3">   <li>
		                            <div class="slide">
										
										<h3>J'adhère</h3>
										<p>Vous adhérez à la philosophie du projet Pixel Humain ? Ce projet est porté par  l'association Open Atlas. En adhérant, vous soutenez le projet Pixel Humain....</p>
									</div>
								</li></div>
		                      <div class="col-md-3">  <li>
		                            <div class="slide">
									
										<h3>Je donne</h3>
										<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat...</p>
									</div>
								</li></div>
		                     <div class="col-md-3">   <li>
		                            <div class="slide">
										
										<h3>Je participe</h3>
										<p>Here it's just an example of the activities that you can do with your charity to get funds. Or something else...</p>
									</div>
								</li></div>
							</ul>
						</div>
						<!-- SECTION BUTTON -->
						
					</div>
				</div>
			</section>
			<!-- END SERVICES SECTION -->
			<!-- START DONATION SECTION -->
			
			<!-- END DONATION SECTION -->
			
			<!-- START CONTACT SECTION -->
			<section id="contact" class="section contact-map">
				<!-- SECTION TITLE -->
				<div class="section-header with-arrow">
					<h1 class="parnet"><img src="images/mapping.png" width="53" height="80"><br>Contact</h1><div class="section-content">
					<div class="container">
						<div class="row">	
							<!-- CONTACT TEXT -->
                            <div class="col-md-3"></div>
							<div class="col-md-6">
								<p><br><br>+ 262 692 38 32 58<br><a href="#">contact@pixelhumain.com</a></p>
								<!-- SOCIAL BUTTTONS -->
							<ul class="social-list">
									<li><a href="#" class="btn btn-facebook"><span class="icon icon-facebook"></span></a></li>
									<li><a href="#" class="btn btn-twitter"><span class="icon icon-twitter"></span></a></li>
									<li><a href="#" class="btn btn-google"><span class="icon icon-google-plus"></span> </a></li>
								</ul>
							</div>
                              	<div class="col-md-3"></div>					
								</div>
						</div>
					</div>
				</div>
				<!-- SECTION CONTENT -->			
			</section>
			<!-- END CONTACT SECTION -->
			<!-- START FOOTER SECTION -->
			<section id="footer" class="section section-full-colored">
				<div class="section-content">
					<p >Pixel Humain 2014</p> <span >Fait main, AVEC AMOUR<br> par l'association Open Atlas</span></span>
				</div>
			</section>
			<!-- END FOOTER SECTION -->
		</div>
		<!-- END MAIN CONTAINER -->


<script type="text/javascript">

jQuery(document).ready(function()
{ 	
	var sliderSvg = $('.flexslider').flexslider();

});


			/*-------------------------------------------------------
			---- Graph
			---------------------------------------------------------*/
			
			//grapLinkBanner("data/data.json");
								
</script>
