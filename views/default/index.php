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
$cs->registerScriptFile($this->module->assetsUrl.'/js/leaflet.draw-src.js' , CClientScript::POS_END);
$cs->registerScriptFile($this->module->assetsUrl.'/js/leaflet.draw.js' , CClientScript::POS_END);
$cs->registerScriptFile($this->module->assetsUrl.'/js/leaflet.markercluster-src.js' , CClientScript::POS_END);
//$cs->registerScriptFile($this->module->assetsUrl.'/js/leaflet.awesome-markers.min.js' , CClientScript::POS_END);

$this->pageTitle=$this::moduleTitle;


?>

<style type="text/css">
 .mapCanvasSlider{
 	width:100%;
 	height:730px;
 	background-color:#456074;
 	color:black;
 }
 #carto{
 	width: 100%;
	height: 730px !important;
	margin: 0px auto;
	color: #FFF;
 }

 /* legende / panel */
 
 .panel_map{
 	position:relative;
 	max-width:280px;
 	left:0px;
 	top:-620px;
 	background-color:rgba(82, 103, 119, 0.78);
 	padding:15px 0px;
 	color:white;
 }
 .item_panel_map{
	text-align:left !important;
	padding-left:15px;
	padding-bottom:3px;
	padding-top:3px;
 } 
 .item_panel_map:hover{
  background-color:rgba(194, 203, 222, 0.4);
 }
 .item_panel_map.selected{
 	background-color:rgba(194, 203, 222, 0.6);
 }
.item_panel_map.selected a{
 	text-decoration:none !important;
 	color:white !important;
 }
 .item_panel_map img{
 	padding:8px;
 	margin-top:-4px;
 }
 p.item_panel_map {
 	margin-bottom:3px;
 }
.chk_panel_map{
	margin-top:10px !important;
	float:left;
}
.btn-group-map{
	float:right;
 	top:-1100px;
 	margin-right:2%;
 	margin-bottom:10px;
}
.btn-map{
	background-color:#E6D414;
	color:#213042 !important;
	font-size:22px !important;
}
.btn-map.playing{
	background-color:#92BE1F;
}
.btn-map:hover{
	background-color:#5896AB;
}
#ico_reload{
	display:inline;
	color:#E6D414;
	margin-top:10px;
}
#spin_loading_map{
	margin-bottom:0px;
	text-align:center !important;
	padding:0px;
	font-size:24px;
	width:100%;
	display:none;
}
  i.fa { padding:8px; }
  i.fa.fa-user{ color:yellow; }
  i.fa.fa-circle.red{ color:red; }
  i.fa.fa-circle.yellow{ color:yellow; }
  i.fa.fa-caret-up{ color:green; font-size:30px; }
/*   i.fa.fa-stop{ color:blue; } */
  i.fa.fa-lightbulb-o{ color:yellow; }
  i.fa.fa-rocket{ color:yellow; }

#lbl_msg_animation{
	position:relative;
	width:25%;
 	max-height:500px;
 	top:-1080px;
 	float:left;
 	text-align:center;
 	background-color:rgba(82, 103, 119, 0.8);
 	padding:10px;
/*  	color:#E6D414; */
 	overflow:hidden;
 	margin-left:75%;
}
#lbl_msg_animation h3{
	font-size:16px;
}
#lbl_msg_animation h1{
	color:white;
	font-size:22px;
	margin-top:5px;
}

</style>
	<script src="http://code.jquery.com/jquery.js"></script>
	<!-- START MAIN CONTAINER -->
	<div id="main-container">		

	<!-- START PROJECT SECTION -->

		<section id="sectionsvg" class="section">
			<div class="sgvAndImg">
				<div id="svg"></div>
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
			<!-- SECTION TITLE -->		
			<!-- SECTION CONTENT -->
			<div class="section-header new"><!--  id="lbl_msg_animation" -->
				<h1><img src="images/heart.png" ><br>L'Equipe</h1>
				<h3>Le projet Pixel Humain a vu le jour grâce à la rencontre de quatre personnes qui partagent les mêmes centres<br> d'intérêt, le même sentiment de nécessité et urgence d'agir et de se regrouper,<br>
			 de se sentir utile pour la société. <span>Aujourd'hui, le Pixel Humain, c'est aussi vous !...</span></h3>
				<br> <br>
			</div>
			<!-- START PROJECT SECTION -->
			<div id="carto" class="section mapProject" >

			        	<div class="mapCanvasSlider" id="mapCanvasSlide1">
			            </div>
			        	
			        	<div class="panel_map">
			        		
			        		<a href="javascript:playMapAnimation('projectLeader')">
			        			<p class="item_panel_map" id="item_panel_map_projectLeader">
			        			<img src="<?php echo $this->module->assetsUrl; ?>/images/markers/02_ICON_PORTEUR_PROJET.png"><span class="filter_name"> Porteurs du projet</span>
			        			</p>
			        		</a>
			        		<a href="javascript:playMapAnimation('pixelActif')">
			        			<p class="item_panel_map" id="item_panel_map_pixelActif">
			        			<img src="<?php echo $this->module->assetsUrl; ?>/images/markers/02_ICON_PIXEL_ACTIF.png"><span class="filter_name"> Pixels actifs</span>
			        			</p>
			        		</a>
			        		<a href="javascript:playMapAnimation('commune')">
			        			<p class="item_panel_map" id="item_panel_map_commune">
			        			<img src="<?php echo $this->module->assetsUrl; ?>/images/markers/02_ICON_COMMUNES.png"><span class="filter_name"> Communes inscrites</span>
			        			</p>
			        		</a>
			        		<a href="javascript:playMapAnimation('association')">
			        			<p class="item_panel_map" id="item_panel_map_association">
			        			<img src="<?php echo $this->module->assetsUrl; ?>/images/markers/02_ICON_ASSOCIATIONS.png"><span class="filter_name"> Associations</span>
			        			</p>
			        		</a>
			        		<a href="javascript:playMapAnimation('entreprise')">
			        			<p class="item_panel_map" id="item_panel_map_entreprise">
			        			<img src="<?php echo $this->module->assetsUrl; ?>/images/markers/02_ICON_ENTREPRISES.png"><span class="filter_name"> Entreprises inscrites</span>
			        			</p>
			        		</a>
			        		<a href="javascript:playMapAnimation('citoyen')">
			        			<p class="item_panel_map" id="item_panel_map_citoyen">
			        			<img src="<?php echo $this->module->assetsUrl; ?>/images/markers/02_ICON_CITOYENS.png"><span class="filter_name"> Citoyens communectés</span>
			        			</p>
			        		</a>
			        		<a href="javascript:playMapAnimation('partnerPH')">
			        			<p class="item_panel_map" id="item_panel_map_parnerPH">
			        			<img src="<?php echo $this->module->assetsUrl; ?>/images/markers/02_ICON_PARTENAIRES.png"><span class="filter_name"> Partenaires & soutiens</span>
			        			</p>
			        		</a>
			        		<a href="javascript:playMapAnimation('artiste')">
			        			<p class="item_panel_map" id="item_panel_map_artiste">
			        			<img src="<?php echo $this->module->assetsUrl; ?>/images/markers/02_ICON_ARTISTES.png"><span class="filter_name"> Artistes actifs</span>
			        			</p>
			        		</a>
			        		<a href="javascript:playMapAnimation('all')">
			        			<p class="item_panel_map" id="item_panel_map_all">
			        			<i class="fa fa-asterisk"></i><span class="filter_name"> Tous</span>
			        			</p>
			        		</a>
			        		
			        	</div>
			        		
			        	<div class="btn-group btn-group-lg btn-group-map">
			        		<button type="button" class="btn btn-map" id="btn-zoom-out"><i class="fa fa-search-minus"></i></button>
			        		<button type="button" class="btn btn-map" id="btn-zoom-in"><i class="fa fa-search-plus"></i></button>
			        	</div>
			        	<div class="btn-group btn-group-lg btn-group-map">
			        		<button type="button" class="btn btn-map" id="btn-play"><i class="fa fa-play"></i></button>
			        		<button type="button" class="btn btn-map" id="btn-stop"><i class="fa fa-stop"></i></button>
			        	</div>
			        	<div class="btn-group btn-group-lg btn-group-map">
			        		<i class="fa fa-refresh fa-2x" id="ico_reload"></i>
			        	</div>
			        	<div id="lbl_msg_animation">test</div>
			        	
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
	$( "#btn-play" ).tooltip({ content: "lancer l'animation" });
	$( "#btn-stop" ).tooltip({ content: "arrêter l'animation" });
	
	$( "#btn-play" ).click(function (){ startPlaying(); });
	$( "#btn-stop" ).click(function (){ stopMapAnimation(); });
	$( "#btn-zoom-in" ).click(function (){ zoomIn(); });
	$( "#btn-zoom-out" ).click(function (){ zoomOut(); });
	

	var sliderSvg = $('.flexslider').flexslider();

	/*-----------------------------------------------
	--- Map
	------------------------------------------------*/

	//charge la première carte (pixel actif)

	//charge la carte
	map1 = loadMap("mapCanvasSlide1");
	map1.setView([-21.13318, 55.5314], 10);//[30.29702, -21.97266], 3);
	listId["getPixelActif"] = new Array("init");
	
	map1.on('dragend', function(e) {
    		//showCitoyensClusters(map1, "getPixelActif", listId);
		});
		
	map1.on('zoomend', function(e) {
    		//showCitoyensClusters(map1, "getPixelActif", listId);
		}); showCitoyensClusters(map1, "getPixelActif", listId);
		
	map1.on('click', function(e) {
    		alert(map1.getCenter() + " - " + map1.getZoom());
		}); 
		
	initAnimation();
	resizeMap();
	//timerMapPlay = setTimeout('playMapAnimation()', 5000); 
});

$( window ).resize(function() { resizeMap(); });
	
	
	//##
	//##	MAP	##
	//##
	
	
	var assetPath = "<?php echo $this->module->assetsUrl; ?>";
	
	//mémorise les identifiants des éléments de chaque carte
	var listId = new Array(	"getPixelActif" );//, "getCommunected" );
	
	//liste de tous les filtres du panel
	var allTagFilter = new Array("projectLeader", "pixelActif", "commune", "association", "entreprise", "citoyen", "parnerPH", "artiste");		
	
	//gère la liste des tags à ne pas clusteriser
	var notClusteredTag = new Array("commune", "association", "projectLeader");
		
	var map1;
	function zoomIn(){ map1.zoomIn(); }
	function zoomOut(){ map1.zoomOut(); }
	function reloadMap(){ showCitoyensClusters(map1, "getPixelActif", listId);  }
	
	function loadMap(canvasId){
		//initialisation des variables de départ de la carte
		var map = L.map(canvasId, { "zoomControl" : false, "scrollWheelZoom":false, "worldCopyJump" : true }).setView([51.505, -0.09], 4);

		L.tileLayer('http://{s}.tile.stamen.com/toner/{z}/{x}/{y}.png', {
			attribution: 'Map tiles by <a href="http://stamen.com">Stamen Design</a>, <a href="http://creativecommons.org/licenses/by/3.0">CC BY 3.0</a> &mdash; Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>',
			subdomains: 'abcd',
			minZoom: 0,
			maxZoom: 20
		}).setOpacity(0.4).addTo(map);
	
		map.on('click', function(e) {
    		//alert(e.latlng);
		});
	
		return map;
	}								
															
	
	//##
	//affiche les citoyens qui possèdent des attributs geo.latitude, geo.longitude, depuis la BD
	var markersLayer = "";
	var geoJsonCollection = "";
	var currentFilter = "none";
	function showCitoyensClusters(mapClusters, origine, listId){ 
			
		if(markersLayer != "")
			clearMap(mapClusters);
		//	mapClusters.removeLayer(markersLayer);
			
		markersLayer = new L.MarkerClusterGroup({"maxClusterRadius" : 40});
		mapClusters.addLayer(markersLayer);

		geoJsonCollection = { type: 'FeatureCollection', features: new Array() };
				
		var bounds = mapClusters.getBounds();
		var params = {
			"latMinScope" :  bounds.getSouthWest().lat,
			"lngMinScope" :  bounds.getSouthWest().lng,
			"latMaxScope" :  bounds.getNorthEast().lat,
			"lngMaxScope" :  bounds.getNorthEast().lng,
			"types"		  :  new Array()			
		};
		
		//params["types"] = new Array();
		/*$('input[type=checkbox][name="chk_panel_map"]').each(function () {
           if (this.checked) {
               params["types"].push($(this).val()); 
           }
		});
		*/
		
		if(currentFilter != "all")  params["types"].push(currentFilter); 
		else 						params["types"] = allTagFilter;
		//alert(JSON.stringify(params)); //return;
		
		$('#ico_reload').addClass("fa-spin");
		$('#ico_reload').css({"display":"inline-block"});
		testitpost("showCitoyensResult", '/ph/<?php echo $this::$moduleKey?>/api/' + origine, params,
			function (data){ 		//alert(JSON.stringify(data));
				$.each(data, function() { 			
					if(this._id != null){
				
						var origineName = data["origine"]; //alert(origineName);
						var objectId = this._id.$id.toString();
					
						//verifie si l'element a déjà été affiché sur la carte
						//if($.inArray(objectId, listId[origineName]) == -1){							 	
							if(this['geo'] != null || this['geoPosition'] != null){
										
								//préparation du contenu de la bulle
						
								//THUMB PHOTO PROFIL
								var content = "";
								if(this['thumb_path'] != null)   
								content += 	"<div class='popup-info-profil-thumb-lbl'><img src='" + this['thumb_path'] + "' height=190 class='popup-info-profil-thumb'></div>";
								else
								content += 	"<div class='popup-info-profil-thumb-lbl'><img src='<?php echo $this->module->assetsUrl; ?>/images/thumb/default.png' width=190 class='popup-info-profil-thumb'></div>";
						
								
								//NOM DE L'UTILISATEUR
								if(this['name'] != null)   
								content += 	"<div class='popup-info-profil-username'>" + this['name'] + "</div>";
						
								//TYPE D'UTILISATEUR (CITOYEN, ASSO, PARTENAIRE, ETC)
								var typeName = this['tag'];
								if(typeName == null)  typeName = "Citoyen";
								if(this['name'] == null)  typeName += " Anonyme";
						
								content += 	"<div class='popup-info-profil-usertype'>" + typeName + "</div>";
						
								//WORK - PROFESSION
								if(this['work'] != null)     
								content += 	"<div class='popup-info-profil-work'>" + this['work'] + "</div>";
								else
								content += 	"<div class='popup-info-profil-work'>Fleuriste</div>";
								
								//URL
								if(this['url'] != null)     
								content += 	"<div class='popup-info-profil-url'>" + this['url'] + "</div>";
								else
								content += 	"<a href='http://www.google.com' class='popup-info-profil-url'>http://www.google.com</a>";
								
								//CODE POSTAL
								//if(this['cp'] != null)     
								//content += 	"<div class='popup-info-profil'>" + this['cp'] + "</div>";
								//else
								//content += 	"<div class='popup-info-profil'>98800</div>";
								
								//VILLE ET PAYS
								var place = this['city'];
								if(this['city'] != null && this['country'] != null) place += ", ";
								place += this['country'];
						
								if(this['city'] != null)     
								content += 	"<div class='popup-info-profil'>" + place + "</div>";
								else
								content += 	"<div class='popup-info-profil'>St-Denis, La Réunion</div>";
								
								//NUMÉRO DE TEL
								if(this['phoneNumber'] != null)     
								content += 	"<div class='popup-info-profil'>" + this['phoneNumber'] + "<div/>";
								else
								content += 	"<div class='popup-info-profil'>0123456789<div/>";
								
						
								//création de l'icon sur la carte
								var tag;
								if(this['type'] != null) tag = this['type'];
								else tag = "citoyen";
							
								var theIcon = getIcoMarker(tag);
								var properties = { 	//name : this['name'], 
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
								//si le tag de l'élément est dans la liste des éléments à ne pas mettre dans les clusters
								//on créé un marker simple
								if($.inArray(tag, notClusteredTag) > -1){ 
									coordinates = new Array (this['geo']['latitude'], this['geo']['longitude']);
									getMarkerSingle(mapClusters, properties, coordinates);
							
									listId[origineName].push(objectId);									
								} 
								//sinon on crée un nouveau marker pour cluster
								else{
									coordinates = new Array (this['geo']['longitude'], this['geo']['latitude']);
									marker = getGeoJsonMarker(properties, coordinates);
									geoJsonCollection['features'].push(marker);	
							
									listId[origineName].push(objectId);
									
								} 
								
							}
					}
					
				});
				
				var points = L.geoJson(geoJsonCollection, {					   //Pour les clusters seulement :
					onEachFeature: function (feature, layer) {				   //sur chaque marker
							layer.bindPopup(feature["properties"]["content"]); //ajoute la bulle d'info avec les données
							layer.setIcon(feature["properties"]["icon"]);	   //affiche l'icon demandé
							layer.on('mouseover', function(e) {	if(!layer.getPopup()._isOpen) layer.openPopup(); });
							//layer.on('mouseout',  function(e) { layer.closePopup(); });
						}
					});
					
				markersLayer.addLayer(points); 			// add it to the cluster group
				mapClusters.addLayer(markersLayer);		// add it to the map
				
				//mapClusters.fitBounds(markersLayer.getBounds());					
				//mapClusters.panTo(markersLayer.getBounds().getCenter());					
				
				//$('#spin_loading_map').css({"display":"none"});
				$('#ico_reload').removeClass("fa-spin");
				$('#ico_reload').css({"display":"none"});
		
			});


			/*-------------------------------------------------------
			---- Graph
			---------------------------------------------------------*/
			
			grapLinkBanner("data/data.json");
								
	}
	
	//##
	//créé une donnée geoJson
	function getGeoJsonMarker(properties/*json*/, coordinates/*array[lat, lng]*/) {
		properties.visible = false;
		return { "type": 'Feature',
				 "properties": properties,
				 "geometry": { type: 'Point',
							 coordinates: coordinates } };
	}

	//##
	//créer un marker sur la carte, en fonction de sa position géographique
	var markerSingleList = new Array();
	var popupOpen = false;
	function getMarkerSingle(thisMap, options, coordinates){ //ex : lat = -34.397; lng = 150.644;

		var contentString = options.content;
		if(options.content == null) contentString = "info window"; 

		var markerOptions = { icon : options.icon };

		var marker = L.marker(coordinates, markerOptions).addTo(thisMap)
		.bindPopup(contentString);
		
		markerSingleList.push(marker);
		//markersLayer.addLayer(marker);
		
		marker.on('mouseover', function(e) { 
			//if(!popupOpen) 
				marker.openPopup(); 
			//popupOpen = true;
		});
		marker.on('mouseout',  function(e) { 
			//marker.closePopup(); 
			//popupOpen = false;
		});
		
		return marker;
	}
	
	//##
	//supprime tous les marker de la carte
	function clearMap(theMap){
		if(markersLayer != "")
			markersLayer.clearLayers();
		
		$.each(markerSingleList, function(){
			theMap.removeLayer(this);
		});
	}
	
	//##
	//récupère le nom de l'icon en fonction du type de marker souhaité
	function getIcoMarker(tag){
			
  		if(tag == "citoyen") 	return L.icon({ iconUrl: "<?php echo $this->module->assetsUrl.'/images/markers/02_ICON_CITOYENS.png'; ?>",
												iconSize: 		[14, 14],
												iconAnchor: 	[7, 7],
												popupAnchor: 	[0, -14] });
													
		if(tag == "pixelActif") return L.icon({ iconUrl: "<?php echo $this->module->assetsUrl.'/images/markers/02_ICON_PIXEL_ACTIF.png'; ?>",
												iconSize: 		[14, 14],
												iconAnchor: 	[7,  14],
												popupAnchor: 	[0, -14] });	
																								
		if(tag == "partnerPH") 	return L.icon({ iconUrl: "<?php echo $this->module->assetsUrl.'/images/markers/02_ICON_PARTENAIRES.png'; ?>",
												iconSize: 		[14, 16],
												iconAnchor: 	[7,  16],
												popupAnchor: 	[0, -14] });		
													
		if(tag == "commune") 	return L.icon({ iconUrl: "<?php echo $this->module->assetsUrl.'/images/markers/02_ICON_COMMUNES.png'; ?>",
												iconSize: 		[14, 14],
												iconAnchor: 	[7,  14],
												popupAnchor: 	[0, -14] });		
		
		if(tag == "association") 	return L.icon({ iconUrl: "<?php echo $this->module->assetsUrl.'/images/markers/02_ICON_ASSOCIATIONS.png'; ?>",
												iconSize: 		[15, 13],
												iconAnchor: 	[7,  13],
												popupAnchor: 	[0, -13] });		
		
		if(tag == "entreprise") 	return L.icon({ iconUrl: "<?php echo $this->module->assetsUrl.'/images/markers/02_ICON_ENTREPRISES.png'; ?>",
												iconSize: 		[15, 16],
												iconAnchor: 	[7,  16],
												popupAnchor: 	[0, -16] });		
		
		if(tag == "projectLeader") 	return L.icon({ iconUrl: "<?php echo $this->module->assetsUrl.'/images/markers/02_ICON_PORTEUR_PROJET.png'; ?>",
												iconSize: 		[15, 16],
												iconAnchor: 	[7,  16],
												popupAnchor: 	[0, -16] });		
		
		if(tag == "artiste") 	return L.icon({ iconUrl: "<?php echo $this->module->assetsUrl.'/images/markers/02_ICON_ARTISTES.png'; ?>",
												iconSize: 		[17, 19],
												iconAnchor: 	[8,  19],
												popupAnchor: 	[0, -19] });		
		
		return L.icon({ iconUrl: "<?php echo $this->module->assetsUrl.'/images/markers/02_ICON_CITOYENS.png'; ?>",
												iconSize: 		[14, 14],
												iconAnchor: 	[7,  14],
												popupAnchor: 	[0, -14] });			  						
	}

	
	
	//##
	//##	PANEL FILTER	##
	//##
	
	function changeFilter(val){ 	
		if(currentFilter != "")
			$('#item_panel_map_' + currentFilter).removeClass("selected");		
		$('#item_panel_map_' + val).addClass("selected");
		currentFilter = val;	
		showCitoyensClusters(map1, "getPixelActif", listId);	
	}		
	
	//##
	//réduit la taille du panel d'option de la carte
	//si la largeur de l'écran est inférieur à 700px
	function resizeMap(){
		if($( "body" ).width() < 700){
			$(".filter_name").css({"display":"none"});
			$(".panel_map").css({"max-width":"60px"});
			$("#lbl_msg_animation").css({"width":"45%", "margin-left":"55%"});
		}
		else{
			$(".filter_name").css({"display":"inline"});
			$(".panel_map").css({"max-width":"280px"});
			$("#lbl_msg_animation").css({"width":"25%", "margin-left":"75%"});
		
		}
	}
	
	
	
	//##
	//##	MAP PLAYER	##
	//##
	
	
	var timerMapPlay;// = setTimeout('playMapAnimation()', 5000); 
	var allowToPlay = true;
	//##
	//liste de lieux à utiliser pendant l'animation
	var animationPlaces = { 
			"france" : 			{ "latlng" : [47.72454, -0.57129], 		"zoom" : 5 }, 
			"reunion" : 		{ "latlng" : [-21.20874, 55.49057], 	"zoom" : 10 },  
			"caledonie" : 		{ "latlng" : [-20.94092, 165.75623], 	"zoom" : 7 },  
			"new_zeland" : 		{ "latlng" : [-42.1634, 171.67236], 	"zoom" : 5 },   
			"australia" : 		{ "latlng" : [-30.90222, 133.5498], 	"zoom" : 6 },   
			"north_america" : 	{ "latlng" : [40.9799, -87.80273], 		"zoom" : 4 },   
			"south_america" : 	{ "latlng" : [-22.1874, -56.7334], 		"zoom" : 4 },   
			"world" : 			{ "latlng" : [33.72434, 18.10547], 		"zoom" : 2 },  
	};
	
	//##
	//liste des étapes de l'animation
	var animationPlan = {
		"projectLeader" : 	{ 	"places" : [ { "place" : animationPlaces.reunion,  
							  					"msg" : "Message pour les associations de la Réunion" }	
											],
								"title" : "Les porteurs du projet",
								"icon" : { "color" : "#E6D414",
										   "name" : "user" }
							},
		"pixelActif" : 		{ 	"places" : [ { "place" : animationPlaces.reunion, 
											   "msg" : "Message pour les associations de la réunion..." },
											 { "place" : animationPlaces.france, 
											   "msg" : "Message pour les associations de France" } ,
											 { "place" : animationPlaces.caledonie, 
											   "msg" : "Message pour les associations de Nouvelle-Calédonie" } 
											], 
								"title" : "Les Pixels actifs",
								"icon" : { "color" : "#E6D414",
										   "name" : "circle" }
							},	
		"commune" : 		{ 	"places" : [  { "place" : animationPlaces.france,
												"msg" : "Message pour les associations de France" },
											  { "place" :  animationPlaces.reunion ,
											    "msg" : "Message pour les associations de la Réunion" }
											],
								"title" : "Les communes",
								"icon" : { "color" : "#BD3232",
										   "name" : "circle" }
							},
		"association" : 	{ 	"places" : [ { "place" : animationPlaces.france, 
												"msg" : "Message pour les associations de France" },
											 {  "place" : animationPlaces.reunion, 
											    "msg" : "Message pour les associations de la Réunion" },
											{  "place" : animationPlaces.new_zeland, 
											   "msg" : "Message pour les associations de Nouvelle-Zélande" }
											],
								"title" : "Les associations",
								"icon" : { "color" : "#92BE1F",
										   "name" : "play fa-rotate-270" }
							},	
		"entreprise" : 	{ 		"places" : [ { 	"place" : animationPlaces.france, 
												"msg" : "Message pour les entrerprises de France" },
										 	{ 	"place" : animationPlaces.australia, 
												"msg" : "Message pour les entrerprises d'Australie" }
										],
								"title" : "Les entreprises",
								"icon" : { "color" : "#04B8EC",
										   "name" : "stop" }
							},	
		"citoyen" : 	{ 	"places" : [ { 	"place" : animationPlaces.south_america, 
											"msg" : "Message pour les citoyens communectés en Amérique du Sud" },
										 { 	"place" : animationPlaces.north_america, 
											"msg" : "Message pour les citoyens communectés en Amérique du Nord" }
										],
							"title" : "Les citoyens communectés",
							"icon" : {  "color" : "#E6D414",
										"name" : "circle" }
							},	
		"partnerPH" : 	{ 	"places" : [ { 	"place" : animationPlaces.france, 
											"msg" : "Message pour les partenaires de France" },
										 { 	"place" : animationPlaces.world, 
											"msg" : "Message pour les partenaires du monde entier" }
										],
							"title" : "Nos partenaires et soutiens",
							"icon" : {  "color" : "#E6D414",
										"name" : "lightbulb-o" }
							},	
		"artiste" : 	{ 	"places" : [ { 	"place" : animationPlaces.france, 
											"msg" : "Message pour les artistes de France" },
										 { 	"place" : animationPlaces.world, 
											"msg" : "Message pour les artistes du monde entier" }
										],
								"title" : "Les artistes",
								"icon" : { "color" : "#E6D414",
										   "name" : "rocket" }
							},	
		"all" : 	{ 	"places" : [ { 	"place" : animationPlaces.world, 
										"msg" : "Message final pour le monde entier" }
									],
									"title" : "Tous",
									"icon" : { "color" : "white",
										   "name" : "asterisk" }
							},	
	
	}
	
	//##
	//initialisation de l'animation
	var allTagAnimation = new Array();
	function initAnimation(){
		$.each(animationPlan, function (key){
			allTagAnimation.push(key);
		});
		//timerMapPlay = setTimeout('playMapAnimation()', 10000); 
	}
	
	function startPlaying(){
		allowToPlay = true;	
		playMapAnimation();
	}
	
	//##
	//fonction appelé par timeout pour faire avancer l'animation d'une étape à chaque fois
	var cntTag = 0;
	var cntPlaces = 0;
	var tagLimit = "";
	function playMapAnimation(newTag)
	{
		$("#btn-play").addClass("playing");
		var currentTag = allTagAnimation[cntTag];
		
		if(newTag != null) { 
			currentTag = newTag;
			cntPlaces = 0; 
			var i=0;
			$.each(allTagAnimation, function(){
				if(this == newTag) cntTag = i;
				i++;
			});
		} //alert(cntTag + " - " + currentTag + " - " + cntPlaces);
		
		var currentPlace = animationPlan[currentTag].places[cntPlaces].place;
		tagLimit = currentTag; 
			
		var zoom = currentPlace.zoom
		if($( "body" ).width() < 700) zoom = zoom-1;
		
		changeFilter(currentTag);
		
		if(allowToPlay){
			
			$("#lbl_msg_animation").css({"display":"inline"});
			map1.setZoom(zoom, { "animate" : false });
			map1.panTo(currentPlace.latlng);
		
			var txtMsg = //"<h1><img src='" + assetPath + "/images/iconAnimation/" + animationPlan[currentTag].icon.name + ".png' height=50><br>" + animationPlan[currentTag].title + "</h1>" +
						 "<h1><i class='fa fa-" + animationPlan[currentTag].icon.name + " fa-3x' style='color:"+animationPlan[currentTag].icon.color+"'></i></br>" + 
							animationPlan[currentTag].title + 
						 "</h1>";
					 
			if($( "body" ).width() > 700)
				txtMsg += "<h3>"+
							animationPlan[currentTag].places[cntPlaces].msg +
						  "</h3>" + 
						  "<br> <br>";
					 
					 
			$("#lbl_msg_animation").html(txtMsg);
		
			cntPlaces++;
			if(cntPlaces >= animationPlan[currentTag].places.length){
				cntPlaces = 0;
				cntTag++;
			}
			// if(tagLimit != allTagAnimation[cntTag]) {
	// 			cntTag = 0;
	// 			stopMapAnimation();
	// 			return;
	// 		}
			if(cntTag >= allTagAnimation.length){
				cntPlaces = 0;
				cntTag = 0;
				stopMapAnimation();
				return;
			}
		
			clearTimeout(timerMapPlay);
			timerMapPlay = setTimeout('playMapAnimation()', 10000); 
		}
		else{
			$("#btn-play").removeClass("playing");
			$("#lbl_msg_animation").css({"display":"none"});
		}
	}
	
	function stopMapAnimation(){ 
		allowToPlay = false;
		clearTimeout(timerMapPlay); 
		$("#btn-play").removeClass("playing");
		$("#lbl_msg_animation").css({"display":"none"});
		
	}
</script>
