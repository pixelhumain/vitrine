<?php 
$cs = Yii::app()->getClientScript();

$cs->registerCssFile(Yii::app()->request->baseUrl. '/css/vis.css');
$cs->registerScriptFile(Yii::app()->request->baseUrl.'/js/api.js' , CClientScript::POS_END);
$cs->registerScriptFile(Yii::app()->request->baseUrl.'/js/vis.min.js' , CClientScript::POS_END);
//$cs->registerScriptFile(Yii::app()->request->baseUrl.'/js/leaflet.awesome-markers.min.js' , CClientScript::POS_END);

//$cs->registerCssFile("//cdn.leafletjs.com/leaflet-0.7.3/leaflet.css");
$cs->registerCssFile("//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css");
$cs->registerCssFile($this->module->assetsUrl. '/css/leaflet.css');
$cs->registerCssFile($this->module->assetsUrl. '/css/leaflet.draw.css');
$cs->registerCssFile($this->module->assetsUrl. '/css/leaflet.draw.ie.css');
$cs->registerCssFile($this->module->assetsUrl. '/css/MarkerCluster.css');
$cs->registerCssFile($this->module->assetsUrl. '/css/MarkerCluster.Default.css');
$cs->registerCssFile($this->module->assetsUrl. '/css/sig.css');
//$cs->registerCssFile($this->module->assetsUrl. '/css/leaflet.awesome-markers.css');


$this->pageTitle=$this::moduleTitle;


		
	
?>

	<!-- START MAIN CONTAINER -->
	<div id="main-container">		

	<!-- START PROJECT SECTION -->

		
			<?php 
				$this->renderPartial('banniere');
				$this -> renderPartial('projet');
			?>

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
				<?php 
					$this->renderPartial('service');
				?>
			</section>
			<!-- END SERVICES SECTION -->
			<!-- START DONATION SECTION -->
			
			<!-- END DONATION SECTION -->
			
			<!-- START CONTACT SECTION -->
			<section id="contact" class="section contact-map">
				<!-- SECTION TITLE -->
				<div class="section-header with-arrow">
					<h1 class="parnet title_fontHome"><img class="icon_section img_cont" src="<?php echo $this->module->assetsUrl; ?>/images/mapping.png"><br/>CONTACT</h1><div class="section-content"><br/>
					<div class="container">
						<div class="row">	
							<!-- CONTACT TEXT -->
                            <div class="col-md-3"></div>
							<div class="col-md-6">
								<p><br><br>+ 262 692 38 32 58<br><a href="#">contact@pixelhumain.com</a></p>
								<!-- SOCIAL BUTTTONS -->
							<ul class="social-list">
									<li><a href="https://www.facebook.com/groups/pixelhumain/" class="btn btn-facebook"><span class="icon icon-facebook"></span></a></li>
									<li><a href="https://twitter.com/pixelhumain" class="btn btn-twitter"><span class="icon icon-twitter"></span></a></li>
									<li><a href="https://plus.google.com/communities/111483652487023091469" class="btn btn-google"><span class="icon icon-google-plus"></span> </a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- SECTION CONTENT -->			
			</section>
			<?php 
				//$this->renderPartial('philo');
			?>
			<!-- END CONTACT SECTION -->
			<!-- START FOOTER SECTION -->
			<section id="footer" class="section">
				<div class="section-content">
					<p >Pixel Humain 2015 </p> <span >Fait main, AVEC AMOUR<br> par l'association Open Atlas</span></span>
				</div>
			</section>
			<!-- END FOOTER SECTION -->
		</div>
		<!-- END MAIN CONTAINER -->


<script type="text/javascript">
var color;
jQuery(document).ready(function()
{
	//Load the map on Ajax
	getAjax("#team",baseUrl+"/"+moduleId+"/default/team",null,"html");

	/*$(".nav_label").on('mouseover', function(){
		color = $(this).css("color");
		$(this).css("color", "#e4334b");
	})

	$(".nav_label").on('mouseout', function(){
		$(this).css("color", color);
	})*/
	var sliderSvg = $('#banFlex').flexslider();
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
    $(window).scroll( function(){
    	
        
    });
});


$( window ).resize(function() { resizeMap(); /*resizeGraph();*/ });

/* ----- Scroll section ------ */	
$("a").on("click", function(){
	if( $(this).data("href").indexOf("#")> -1){
		var href = $(this).data("href");
		var aTag = $(href);
		console.log(aTag.offset().top);
    	$('html,body').animate({scrollTop: aTag.offset().top-50},'slow');
	}
})
								
</script>
