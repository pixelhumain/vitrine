<?php 
$cs = Yii::app()->getClientScript();

$cs->registerCssFile(Yii::app()->request->baseUrl. '/css/vis.css');
$cs->registerScriptFile(Yii::app()->request->baseUrl.'/js/api.js' , CClientScript::POS_END);
$cs->registerScriptFile(Yii::app()->request->baseUrl.'/js/vis.min.js' , CClientScript::POS_END);

$cs->registerCssFile("http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css");
$cs->registerCssFile($this->module->assetsUrl. '/css/leaflet.draw.css');
$cs->registerCssFile($this->module->assetsUrl. '/css/leaflet.draw.ie.css');
$cs->registerCssFile($this->module->assetsUrl. '/css/MarkerCluster.css');
$cs->registerCssFile($this->module->assetsUrl. '/css/MarkerCluster.Default.css');
$cs->registerCssFile($this->module->assetsUrl. '/css/sig.css');
//$cs->registerCssFile($this->module->assetsUrl. '/css/leaflet.awesome-markers.css');

$cs->registerScriptFile('http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js' , CClientScript::POS_END);
$cs->registerScriptFile($this->module->assetsUrl.'/js/leaflet.draw-src.js' , CClientScript::POS_END);
$cs->registerScriptFile($this->module->assetsUrl.'/js/leaflet.draw.js' , CClientScript::POS_END);
$cs->registerScriptFile($this->module->assetsUrl.'/js/leaflet.markercluster-src.js' , CClientScript::POS_END);
//$cs->registerScriptFile($this->module->assetsUrl.'/js/leaflet.awesome-markers.min.js' , CClientScript::POS_END);

$this->pageTitle=$this::moduleTitle;


?>

<style type="text/css">
 .mapCanvasSlider{
 	min-width:100%;
 	min-height:100%;
 	background-color:#425766;
 }
 #carto{
 	position: relative;
	width: 100%;
	height: 750px !important;
	margin: 0px auto;
	color: #FFF;
 }
 .project .slide-content .mapCanvasSlider img{
 	border-radius:0px;
 	box-shadow: 0px 0px 0px 0px;
 }
 .project2 .slide-content .mapCanvasSlider img{
 	border-radius:0px;
 	box-shadow: 0px 0px 0px 0px;
 }
 
 .project{
 	color:black;
 }
 
 .project2{
 	color:black;
 }
 .leaflet-popup-content-wrapper{
 	background-color:rgba(53, 61, 68, 0.7);
 	border-radius:10px;
 	color:white;
 	font-family: "Open Sans";
 }
 
 .leaflet-popup-tip{
 	background-color:rgba(53, 61, 68, 0.7);
 }
 
 .popup-img-profil{
 
 }

 #menu a.btn-success{
	border-color: #82b440;
}

 .popup-info-profil{
 	width:100%;
 	text-align:center;
 	font-size:14px;
 }
 .popup-info-profil-username{
 	width:100%;
 	text-transform:capitalize;
 	text-align:center;
 	font-size:30px;
 	color:yellow;
 }
 .popup-info-profil-usertype{
 	width:100%;
 	text-transform:capitalize;
 	text-align:center;
 	font-size:18px;
 }
 .popup-info-profil-work{
 	width:100%;
 	text-align:center;
 	font-size:18px;
 	text-transform:capitalize;
 	
 }
 .popup-info-profil-url{
 	width:100%;
 	text-align:center;
 	font-size:13px;
 	color:#2aa0bd;
 }
 .modal-lg {
    width: 90%;
  }
 .modal-dialog {
 	height: 90%;
 }
  .modal-content{
 	height: 100%;
 }
 .modal-body{
 	height: 95%;
 }
 
</style>
	<script src="http://code.jquery.com/jquery.js"></script>
<!-- START MAIN CONTAINER -->
	<div id="main-container">		
<!-- START PROJECT SECTION -->
		<section id="project" class="section project" >
			<span class="sequence-prev" ></span>
			<span class="sequence-next" ></span>
		    <ul class="sequence-canvas">
		    	<li class="animate-in" style="background-image: url('images/slider/1.jpg');">

		        <div class="slide-content">
		        <img src="images/slider/slide1.png"/>
		            	<h1>Découvrez <strong>Pixel Humain</strong></h1>
		            	<h3>Le premier réseau social citoyen libre<br>
		Citoyens, Associations, Entreprises, Collectivités : <br>
		Découvrez ce qui se passe en ce moment dans votre commune<br>
		Participez aux discussions et actions citoyennes qui vous tiennent à cœur.</h3>
		        	</div>
		    	</li>
		        <li class="animate-in" style="background-image: url('images/slider/1.jpg');">

		        <div class="slide-content">
		        <img src="images/slider/slide2.png"/>
		            	<h1>Découvrez <strong>Pixel Humain</strong></h1>
		            	<h3>Le premier réseau social citoyen libre<br>
		Citoyens, Associations, Entreprises, Collectivités : <br>
		Découvrez ce qui se passe en ce moment dans votre commune<br>
		Participez aux discussions et actions citoyennes qui vous tiennent à cœur.</h3>
		        	</div>
		    	</li>
		        <li class="animate-in" style="background-image: url('images/slider/1.jpg');">

		        <div class="slide-content">
		        <img src="images/slider/slide3.png"/>
		            	<h1>Découvrez <strong>Pixel Humain</strong></h1>
		            	<h3>Le premier réseau social citoyen libre<br>
		Citoyens, Associations, Entreprises, Collectivités : <br>
		Découvrez ce qui se passe en ce moment dans votre commune<br>
		Participez aux discussions et actions citoyennes qui vous tiennent à cœur.</h3>
		        	</div>
		    	</li>
		        <li class="animate-in" style="background-image: url('images/slider/1.jpg');">

		        <div class="slide-content">
		        <img src="images/slider/slide4.png"/>
		            	<h1>Découvrez <strong>Pixel Humain</strong></h1>
		            	<h3>Le premier réseau social citoyen libre<br>
		Citoyens, Associations, Entreprises, Collectivités : <br>
		Découvrez ce qui se passe en ce moment dans votre commune<br>
		Participez aux discussions et actions citoyennes qui vous tiennent à cœur.</h3>
		        	</div>
		    	</li>
		    	
		    </ul>
			
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
		<section id="team" class="section with-arrow section-content-colored">
			<!-- SECTION TITLE -->		
			<!-- SECTION CONTENT -->
			<div class="section-header new">
				<h1><img src="images/heart.png" ><br>L'Equipe</h1>
				<h3>Le projet Pixel Humain a vu le jour grâce à la rencontre de quatre personnes qui partagent les mêmes centres<br> d'intérêt, le même sentiment de nécessité et urgence d'agir et de se regrouper,<br>
			 de se sentir utile pour la société. <span>Aujourd'hui, le Pixel Humain, c'est aussi vous !...</span></h3>
				<br> <br>
			</div>
			<!-- START PROJECT SECTION -->
			<div id="carto" class="section" >
<!-- 				<span class="sequence-prev" ></span> -->
<!-- 				<span class="sequence-next" ></span> -->
<!-- 			    <ul class="sequence-canvas"> -->
<!-- 			    	<li style="background-color: #3b4a52; height:70%;"> -->
			        	<div class="slide-content" style="width:100%; left:0px; height:100%;">
			            	<div class="mapCanvasSlider" id="mapCanvasSlide1">
			            	</div>
			        	</div>
			    	<!-- 
</li>
			    	<li style="background-color: #3b4a52; height:70%;">
			        	<div class="slide-content" style="width:100%; left:0px; height:100%;">
			        		<div class="mapCanvasSlider" id="mapCanvasSlide2">
			            	</div>
			        	</div>
			    	</li>
			    </ul>
				<ul class="sequence-pagination">
					<li>Pixels actifs</li>
					<li>Communectés</li>
				</ul>
 -->
			</div>
			<!-- END PROJECT SECTION -->
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
						<div class="services-slider flexslider">
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
			<section id="contact" class="section with-arrow contact-map">
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
	//mémorise les identifiants des éléments de chaque carte
	var listId = new Array(	"getPixelActif", "getCommunected" );
	
	function loadMap(canvasId){
		//initialisation des variables de départ de la carte
		var map = L.map(canvasId).setView([51.505, -0.09], 4);

		L.tileLayer('http://{s}.tile.stamen.com/toner/{z}/{x}/{y}.png', {
			attribution: 'Map tiles by <a href="http://stamen.com">Stamen Design</a>, <a href="http://creativecommons.org/licenses/by/3.0">CC BY 3.0</a> &mdash; Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>',
			subdomains: 'abcd',
			minZoom: 0,
			maxZoom: 20
		}).setOpacity(0.4).addTo(map);
	
		map.on('click', function(e) {
    		alert(e.latlng);
		});
	
		return map;
	}								
															
				
	//##
	//affiche les citoyens qui possèdent des attributs geo.latitude, geo.longitude, depuis la BD
	function showCitoyensClusters(mapClusters, origine, listId){ 
		
		//gère la liste des tags à ne pas clusteriser
		var notClusteredTag = new Array("commune", "association", "projectLeader");
		
		var markersLayer = new L.MarkerClusterGroup({"maxClusterRadius" : 40});
		mapClusters.addLayer(markersLayer);

		var geoJsonCollection = { type: 'FeatureCollection', features: new Array() };
				
		var bounds = mapClusters.getBounds();
		var params = {};
		params["latMinScope"] = bounds.getSouthWest().lat;
		params["lngMinScope"] = bounds.getSouthWest().lng;
		params["latMaxScope"] = bounds.getNorthEast().lat;
		params["lngMaxScope"] = bounds.getNorthEast().lng;
		
		testitpost("showCitoyensResult", '/ph/<?php echo $this::$moduleKey?>/api/' + origine, params,
			function (data){ 		//alert(JSON.stringify(data));
				$.each(data, function() { 			
					if(this._id != null){
				
						var origineName = data["origine"]; //alert(origineName);
						var objectId = this._id.$id.toString();
				
						if($.inArray(objectId, listId[origineName]) == -1){							 	
							if(this['geo'] != null || this['geoPosition'] != null){
										
								//préparation du contenu de la bulle
						
								//THUMB PHOTO PROFIL
								var content = "";
								if(this['thumb_path'] != null)   
								content += 	"<img src='" + this['thumb_path'] + "' height=70 class='popup-info-profil-thumb'>";
						
								//NOM DE L'UTILISATEUR
								if(this['name'] != null)   
								content += 	"<div class='popup-info-profil-username'>" + this['name'] + "</div>";
						
								//TYPE D'UTILISATEUR (CITOYEN, ASSO, PARTENAIRE, ETC)
								var typeName = this['type'];
								if(this['type'] == null)  typeName = "Citoyen";
								if(this['name'] == null)  typeName += " anonyme";
						
								content += 	"<div class='popup-info-profil-usertype'>" + typeName + "</div>";
						
								//WORK - PROFESSION
								if(this['work'] != null)     
								content += 	"<div class='popup-info-profil-work'>" + this['work'] + "</div>";
						
								//URL
								if(this['url'] != null)     
								content += 	"<div class='popup-info-profil-url'>" + this['url'] + "</div>";
						
								//CODE POSTAL
								if(this['cp'] != null)     
								content += 	"<div class='popup-info-profil'>" + this['cp'] + "</div>";
						
								//VILLE ET PAYS
								var place = this['city'];
								if(this['city'] != null && this['country'] != null) place += ", ";
								place += this['country'];
						
								if(this['city'] != null)     
								content += 	"<div class='popup-info-profil'>" + place + "</div>";
						
								//NUMÉRO DE TEL
								if(this['phoneNumber'] != null)     
								content += 	"<div class='popup-info-profil'>" + this['phoneNumber'] + "<div/>";
						
						
								//création de l'icon sur la carte
								var tag;
								if(this['tag'] != null) tag = this['tag'];
								else tag = "citoyen";
						
								var theIcon = getIcoMarker(tag);
								var properties = { 	//title : this['name'], 
													icon : theIcon,
													content: content };
						
								var coordinates;
								if( this['geo']['longitude'] != null ){
									coordinates = new Array (this['geo']['longitude'], this['geo']['latitude']);
								}
								else{
									coordinates = this['geoPosition']['coordinates'];
								}
						
								var marker;
								if($.inArray(tag, notClusteredTag) > -1){ //si le tag de l'élément est dans la liste des éléments à ne pas mettre dans les clusters
									getMarkerSingle(mapClusters, properties, coordinates);
							
									listId[origineName].push(objectId);
							
									//alert(" single - tag : " + tag);
									//alert(notClusteredTag);
								} 
								else{
									marker = getGeoJsonMarker(properties, coordinates);
									geoJsonCollection['features'].push(marker);	
							
									listId[origineName].push(objectId);
								} 
						
							}
						}
					}
				});
				
				var points = L.geoJson(geoJsonCollection, {					   //Pour les clusters seulement :
					onEachFeature: function (feature, layer) {				   //sur chaque marker
							layer.bindPopup(feature["properties"]["content"]); //ajoute la bulle d'info avec les données
							layer.setIcon(feature["properties"]["icon"]);	   //affiche l'icon demandé
							layer.on('mouseover', function(e) {	if(!layer.getPopup()._isOpen) layer.openPopup(); });
							layer.on('mouseout',  function(e) { layer.closePopup(); });
						}
					});
									
				markersLayer.addLayer(points); 			// add it to the cluster group
				mapClusters.addLayer(markersLayer);		// add it to the map
			});
						
	}

	//##
	//créé une donnée geoJson
	function getGeoJsonMarker(properties/*json*/, coordinates/*array[lat, lng]*/) {
		return { "type": 'Feature',
				 "properties": properties,
				 "geometry": { type: 'Point',
							 coordinates: coordinates } };
	}

	//##
	//créer un marker sur la carte, en fonction de sa position géographique
	function getMarkerSingle(thisMap, options, coordinates){ //ex : lat = -34.397; lng = 150.644;

		var contentString = options.content;
		if(options.content == null) contentString = "info window"; 

		var markerOptions = { icon : options.icon };

		var marker = L.marker(coordinates, markerOptions).addTo(thisMap)
		.bindPopup(contentString);
		
		marker.on('mouseover', function(e) { marker.openPopup(); });
		marker.on('mouseout',  function(e) { marker.closePopup(); });
		
		return marker;
	}
		
	//##
	//récupère le nom de l'icon en fonction du type de marker souhaité
	function getIcoMarker(tag){
			
  		if(tag == "citoyen") 	return L.icon({ iconUrl: "<?php echo $this->module->assetsUrl.'/image/markers/02_ICON_CITOYENS.png'; ?>",
												iconSize: 		[14, 14],
												iconAnchor: 	[7, 7],
												popupAnchor: 	[0, -14] });
													
		if(tag == "pixelActif") 		return L.icon({ iconUrl: "<?php echo $this->module->assetsUrl.'/image/markers/02_ICON_PIXEL_ACTIF.png'; ?>",
												iconSize: 		[14, 14],
												iconAnchor: 	[7,  14],
												popupAnchor: 	[0, -14] });	
																								
		if(tag == "partnerPH") 	return L.icon({ iconUrl: "<?php echo $this->module->assetsUrl.'/image/markers/02_ICON_PARTENAIRES.png'; ?>",
												iconSize: 		[14, 16],
												iconAnchor: 	[7,  16],
												popupAnchor: 	[0, -14] });		
													
		if(tag == "commune") 	return L.icon({ iconUrl: "<?php echo $this->module->assetsUrl.'/image/markers/02_ICON_COMMUNES.png'; ?>",
												iconSize: 		[14, 14],
												iconAnchor: 	[7,  14],
												popupAnchor: 	[0, -14] });		
		
		if(tag == "association") 	return L.icon({ iconUrl: "<?php echo $this->module->assetsUrl.'/image/markers/02_ICON_ASSOCIATIONS.png'; ?>",
												iconSize: 		[15, 13],
												iconAnchor: 	[7,  13],
												popupAnchor: 	[0, -13] });		
		
		if(tag == "projectLeader") 	return L.icon({ iconUrl: "<?php echo $this->module->assetsUrl.'/image/markers/02_ICON_PORTEUR_PROJET.png'; ?>",
												iconSize: 		[15, 16],
												iconAnchor: 	[7,  16],
												popupAnchor: 	[0, -16] });		
		
		if(tag == "artiste") 	return L.icon({ iconUrl: "<?php echo $this->module->assetsUrl.'/image/markers/02_ICON_ARTISTES.png'; ?>",
												iconSize: 		[17, 19],
												iconAnchor: 	[8,  19],
												popupAnchor: 	[0, -19] });		
		
		return L.icon({ iconUrl: "<?php echo $this->module->assetsUrl.'/image/markers/02_ICON_CITOYENS.png'; ?>",
												iconSize: 		[14, 14],
												iconAnchor: 	[7,  14],
												popupAnchor: 	[0, -14] });			  						
	}
	
		
	//charge la première carte (pixel actif)
	var map1 = loadMap("mapCanvasSlide1");
	map1.setView([30.29702, -21.97266], 3);
	listId["getPixelActif"] = new Array("init");
	map1.on('dragend', function(e) {
    		showCitoyensClusters(map1, "getPixelActif", listId);
		}); showCitoyensClusters(map1, "getPixelActif", listId);
		
			
	//charge la deuxième carte (communected)
	var map2 = loadMap("mapCanvasSlide2");
	map2.setView([-21.13318, 55.5314], 10);
	listId["getCommunected"] = new Array("init");
 	map2.on('dragend', function(e) {
     		showCitoyensClusters(map2, "getCommunected", listId);
 		}); showCitoyensClusters(map2,  "getCommunected", listId);


 	
});
</script>
