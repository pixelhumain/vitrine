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

		
			<?php 
				$this->renderPartial('banniere');
			?>
		

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
	jQuery.fn.d3MouseOver = function () {
	    this.each(function (i, e) {
	      ////console.log("over");
	      var evt = document.createEvent("MouseEvents");
	      evt.initMouseEvent("mouseover", true, true, window, 0, 0, 0, 0, 0, false, false, false, false, 0, null);

	      e.dispatchEvent(evt);
	    });
	  };

	//launch mouseout event for the d3 graph
	jQuery.fn.d3MouseOut = function () {
	    this.each(function (i, e) {
	      //console.log("out");
	      var evt = document.createEvent("MouseEvents");
	      evt.initMouseEvent("mouseout", true, true, window, 0, 0, 0, 0, 0, false, false, false, false, 0, null);

	      e.dispatchEvent(evt);
	    });
	  };

	/*-------------------------------------------------------
	---- Graph
	---------------------------------------------------------*/
	
	grapLinkBanner("data/data.json");
			
	

});


$( window ).resize(function() { resizeMap(); resizeGraph("data/data.json"); });
	

	
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
}

			/*-------------------------------------------------------
			---- Graph
			---------------------------------------------------------*/
			
			//grapLinkBanner("data/data.json");

								
</script>
