<!-- START TEAM SECTION -->
<style>
#video_pixel{

	background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 4px;
    display: none;
    line-height: 1.42857;
    max-width: 100%;
    padding: 4px;
    transition: all 0.2s ease-in-out 0s;
   

}
.imageSection{
	position: relative;
	
}
.videoSection{
	 position: absolute;
	
}
#img_pixel{
	display: inline-block;
}
</style>
<section id="description" class="center section with-arrow">
	<!-- SECTION TITLE -->
	<div class="section-header sub-hero">
		<h1 class="title_fontHome"><img src="<?php echo $this->module->assetsUrl; ?>/images/icon.png" width="80" height="79"><br>Le Projet</h1><br/>
	</div>
	<!-- SECTION CONTENT -->
	<div class="section-content section-no-top-padding" id ="section-video">
		<div class="container">
			<p>Pixel Humain est le premier réseau social citoyen libre de droit, <br>
d'accès, d'opinion, d'utilisation, d'évolution ...<br>
Pixel humain est une plateforme en construction et recherche de financements.
			</p>
			
			<!--<div class="videoSection">
				<object id="video_pixel" width="940" height="540" data="http://vimeo.com/moogaloop.swf?clip_id=74212373" type="application/x-shockwave-flash">
					<param value="http://vimeo.com/moogaloop.swf?clip_id=74212373"></param>
					<param name="allowFullScreen" value="true"></param>
					<param value="always"></param>
				</object>
			</div>-->
			<div class="imageSection">
				<img id="img_pixel" class="img-responsive img-thumbnail" src="<?php echo $this->module->assetsUrl; ?>/images/video.jpg" onclick="openVideo()"/>
			</div>
		</div>
	</div>
</section>
<script>

function openVideo(){
	var width = $(".imageSection").width();
	var height = $(".imageSection").height();
	console.log(width, height);
	$(".imageSection").empty();
	$(".imageSection").html('<iframe  class="img-responsive img-thumbnail" src="http://player.vimeo.com/video/74212373?api=1&title=0&amp;byline=0&amp;portrait=0&amp;color=57c0d4" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen class="video" aria-hidden="true" tabindex="-1"></iframe>')
	$("iframe").css("width", width);
	$("iframe").css("height", height);
}
</script>
<!-- END TEAM SECTION 
<!-- Modal -->
<!--<div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
</div>-->