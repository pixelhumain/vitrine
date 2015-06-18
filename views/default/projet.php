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
	margin: auto;
	width: 50%;
	height: 50%;	
}
.videoSection{
	 position: absolute;	
}

#img_pixel{
	display: inline-block;
}

#description p{
	font-size: 0.8em;
}

.textProjectSlider{
	padding: 0 0 30px;
}

.imgDescription{
	text-align: left;
	padding-left: 10px;
	font-size: 0.8em;
}
.imgDescription h3{
	text-align: left;
	font-weight: bold;
}

.img-thumbnail {
	border :0px;
}

#projectFlex{
	padding: 25px;
}
</style>
<section id="description" class="center section with-arrow">
	<!-- SECTION TITLE -->
	<div class="section-header sub-hero">
		<img class='icon_section' src="<?php echo $this->module->assetsUrl; ?>/images/icon.png">
		<h1 class="title_fontHome">Le Projet</h1>
	</div>
	<!-- SECTION CONTENT -->
	<div class="flexslider" id="projectFlex">
		<ul class="slides">
			<li>
				<div class="section-content section-no-top-padding section-video">
					<div class="textProjectSlider">
						<p>Se “communecter” c’est se connecter à sa commune : un email,<br> un code postal et c’est parti…
						</p>
					</div>
					<div class="imageSection" id="imageSectionVideo">
						<img id="img_pixel" class="img-responsive img-thumbnail" src="<?php echo $this->module->assetsUrl; ?>/images/video.jpg" onclick="openVideo()"/>
					</div>
				</div>
			</li>
			<li>
				<div class="section-content section-no-top-padding section-video">
					<div class="textProjectSlider">
						<p><strong>Une boite à idée citoyenne & évolutive</strong><br>
		Un <strong>espace de décision</strong> ouvert, participatif et démocratique<br>
		<strong>Une boîte à outils:</strong> covoiturage, petites annonces, agenda, évènements locaux, etc.<br>
		<strong>Un annuaire intéractif libre,</strong> répertoire dynamique des compétences locales par et pour le citoyen</p>
					</div>
				
					<div class="imageSection">
						<img class="img-responsive img-thumbnail" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/equipeSlider2.png" />
					</div>
				</div>
			</li>

			<li>
				<div class="section-content section-no-top-padding section-video">
					<div class="textProjectSlider">
						<p><strong>Un réseau pour qui?</strong><br>
						Le Pixel Humain réunit et fédère les principaux acteurs de la vie locale<br>
						pour valoriser le territoire et le bien commun.
						</p>
					</div>
					<div class="imageSection">
						<div class="row">
							<div class="col-md-3">
								<div class="icoDescription">
									<img class=" imgIco img-responsive img-thumbnail" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/01_PROJET_03_CITOYENS.jpg" data-desc="citizenDesc" />
									<h3 class="title_fontHome">Citoyens</h3>
								</div>
								<div class="imgDescription hide" id="citizenDesc">
									Exister<br>
									S'informer<br>
									S'impliquer<br>
									Se regrouper<br>
									Echanger / Débattre<br>
									Interagir / Collaborer<br>
									Consommer localement
								</div>
							</div>
							<div class="col-md-3">
								<div class="icoDescription">
									<img class="imgIco img-responsive img-thumbnail" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/01_PROJET_03_ENTREPRISE.jpg" data-desc="organizationDesc"/>
									<h3 class="title_fontHome">Entreprises</h3>
								</div>
								<div class="imgDescription hide" id="organizationDesc">
									Se présenter<br>
									Proposer ses services<br>
									Mettre en avant ses produits<br>
									Cartographier son réseau<br>
									S'investir<br>
								</div>
							</div>
							<div class="col-md-3">
								<div class="icoDescription">
									<img class="imgIco img-responsive img-thumbnail" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/01_PROJET_03_COLLECTIVITE.jpg " data-desc="collectiviteDesc" />
									<h3 class="title_fontHome">Collectivités</h3>
								</div>
								<div class="imgDescription hide" id="collectiviteDesc">
									Mettre en oeuvre le contrat de ville<br>
									Favoriser la participation citoyenne<br>
									Créer du lien social<br>
									Ouvrir la collectivité au public<br>
									Maîtriser QQCH<br>
									Publier des actualités<br>
									Recueillir idées et avis<br>
									Cartographier le territoire
								</div>
							</div>
							<div class="col-md-3">
								<div class="icoDescription">
									<img class="imgIco img-responsive img-thumbnail" src="<?php echo Yii::app()->theme->baseUrl; ?>/images/01_PROJET_03_ASSO.jpg" data-desc="associationnDesc" />
									<h3 class="title_fontHome">Associations</h3>
								</div>
								<div class="imgDescription hide" id="associationnDesc">
									Se présenter<br>
									Valoriser ses actions<br>
									Proposer ses services<br>
									Communiquer<br>
									Etendre son réseau<br>
									Collaborer
								</div>
							</div>
						</div>
					</div>
				</div>
			</li>
		</ul>
	</div>
</section>


<script>



jQuery(document).ready(function()
{

	$(".imgDescription").removeClass("hide")
	$(".icoDescription .imgIco").on("mouseover", function(){
		$("#"+$(this).data("desc")).removeClass('hide').addClass("animated bounceIn");
	})

	$(".icoDescription .imgIco").on("mouseout", function(){
		$("#"+$(this).data("desc")).removeClass('animated bounceIn');
	})
})
function openVideo(){
	var width = $("#imageSectionVideo").width();
	var height = $("#imageSectionVideo").height();
	console.log(width, height);
	$("#imageSectionVideo").empty();
	$("#imageSectionVideo").html('<iframe  class="img-responsive img-thumbnail" src="http://player.vimeo.com/video/74212373?api=1&title=0&amp;byline=0&amp;portrait=0&amp;color=57c0d4" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen class="video" aria-hidden="true" tabindex="-1"></iframe>')
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