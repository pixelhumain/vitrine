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

#description{
	background-image:url("<?php echo $this->module->assetsUrl; ?>/images/bg.jpg");
}
.imageSection {
	-webkit-box-shadow: -1px 3px 13px 3px rgba(0,0,0,0.22);
	-moz-box-shadow: -1px 3px 13px 3px rgba(0,0,0,0.22);
	box-shadow: -1px 3px 13px 3px rgba(0,0,0,0.22);
	border-radius: 20px;
	height: 50%;
	margin: auto;
	border: 20px solid white;
	position: relative;
	width: 50%;
	background-color: white;
	color:black;
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
	color:white;
}

#description .flexslider .slides div{
	color: white;
}
.imgDescription{
	text-align: left;
	font-size: 0.8em;
}
.icoDescription h3{
	font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
	text-align: left;
}
.icoDescription img{
	display: block;
}
.img-thumbnail {
	border :0px;
}

#projectFlex{
	padding: 25px;
	margin-bottom: 0px;
}

#description .title_fontHome{

}

.linkProjet{
	position: relative;
	margin-left: auto;
  	margin-right: auto;
	padding-bottom: 20px;
	width: 50%;
	text-align: center;
}
.linkProjet ul{
	text-align: center;
	list-style-type:none;
}

.linkProjet li{
	 padding-left:50px;
	 float:left; /*pour IE*/
}

.linkProjet a{
	color:#f6e200;
}
.linkProjet a:active,.linkProjet a:target,.linkProjet a:hover, .linkProjet a:focus, .linkProject-nav .flex-active {
	color:#e3443b;
}

.linkProject-nav{
	margin-left: auto;
  	margin-right: auto;
  	width: 80%;
}

#icoCitoyen h3{
	color : #e3443b;
}

#icoAssociation h3{
	color: #92be1f;
}

#icoCollectivite h3{
	color:#2a3945;
}

#icoEntreprise h3{
	color : #0db4e9
}

#titleView h3{
	font-size: 24px;
	line-height: 1em;
}

.icoDescription:hover{
	cursor: pointer;
}
.menu h3{
	color:black;
	text-align: left;
}
</style>
<section id="description" class="center section with-arrow">
	<!-- SECTION TITLE -->
	<div class="section-header sub-hero">
		<img class='icon_section' src="<?php echo $this->module->assetsUrl; ?>/images/icon.png">
		<h1 class="title_fontHome">Le Projet</h1>
		<div class="linkProjet title_fontHome">
			<ul class="linkProject-nav">
				 <li><a href="#">VIDEO 1</a></li>
				 <li><a href="#">COMMENT</a></li>
				 <li><a href="#">POUR QUI</a></li>
				 <li><a href="#">VIDEO 2</a></li>
				 <li><a href="#">MOTS CLES</a></li>
			</ul>
		</div>
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
						<img class="img-responsive img-thumbnail" src="<?php echo $this->module->assetsUrl; ?>/images/equipeSlider2.png" />
					</div>
				</div>
			</li>

			<li>
				<div class="section-content section-no-top-padding section-video">
					<div class="textProjectSlider">
						<p><strong>Un réseau pour qui ?</strong><br>
						Le Pixel Humain réunit et fédère les principaux acteurs de la vie locale<br>
						pour valoriser le territoire et le bien commun.
						</p>
					</div>
					<div class="imageSection">
						<div class="titleView">
							<div class="row">
								<div class="col-md-6">
									<div class="icoDescription" id="icoCitoyen" data-desc="citizenDesc">
										<img class=" imgIco img-responsive img-thumbnail" src="<?php echo $this->module->assetsUrl; ?>/images/01_PROJET_03_CITOYENS.jpg" data-desc="citizenDesc" />
										<h3 class="title_fontHome">Pour les citoyens</h3>
									</div>
								</div>
								<div class="col-md-6">
									<div class="icoDescription" id="icoCollectivite" data-desc="collectiviteDesc">
										<img class="imgIco img-responsive img-thumbnail" src="<?php echo $this->module->assetsUrl; ?>/images/01_PROJET_03_COLLECTIVITE.jpg " data-desc="collectiviteDesc" />
										<h3 class="title_fontHome">Pour les collectivités</h3>
									</div>
									
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="icoDescription" id="icoEntreprise" data-desc="organizationDesc">
										<img class="imgIco img-responsive img-thumbnail" src="<?php echo $this->module->assetsUrl; ?>/images/01_PROJET_03_ENTREPRISE.jpg" data-desc="organizationDesc"/>
										<h3 class="title_fontHome">Pour les entreprises</h3>
									</div>
								</div>
								
								<div class="col-md-6">
									<div class="icoDescription" id="icoAssociation" data-desc="associationnDesc">
										<img class="imgIco img-responsive img-thumbnail" src="<?php echo $this->module->assetsUrl; ?>/images/01_PROJET_03_ASSO.jpg" data-desc="associationnDesc" />
										<h3 class="title_fontHome">Pour les associations</h3>
									</div>

								</div>
							</div>
						</div>
						<div class="menuView hide">
							<div class="row">
								<div class="col-md-5 menu">
									<img class="imgIco img-responsive img-thumbnail" id="menuIco" src="" />
									<ul>
										<li>
											<a href=""><h3 class="title_fontHome">Pour les citoyens</h3></a>
											<a href=""><h3 class="title_fontHome">Pour les collectivités</h3></a>
											<a href=""><h3 class="title_fontHome">Pour les entreprises</h3></a>
											<a href=""><h3 class="title_fontHome">Pour les associations</h3></a>
										</li>
									</ul>
								</div>
								<div class="col-md-2">
								</div>
								<div class="col-md-5">
									<div class="imgDescription hide" id="citizenDesc">
										Exister<br>
										S'informer<br>
										S'impliquer<br>
										Se regrouper<br>
										Echanger / Débattre<br>
										Interagir / Collaborer<br>
										Consommer localement
									</div>
									<div class="imgDescription hide" id="associationnDesc">
										Se présenter<br>
										Valoriser ses actions<br>
										Proposer ses services<br>
										Communiquer<br>
										Etendre son réseau<br>
										Collaborer
									</div>
									<div class="imgDescription hide" id="organizationDesc">
										Se présenter<br>
										Proposer ses services<br>
										Mettre en avant ses produits<br>
										Cartographier son réseau<br>
										S'investir<br>
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
							</div>
							
						</div>
					</div>
				</div>
			</li>
		</ul>
	</div>
</section>


<script>

var imgSrc;

jQuery(document).ready(function()
{

	//$(".imgDescription").css("display", "none");
	//$(".imgDescription").removeClass("hide");
	$(".icoDescription .imgIco").on("mouseover", function(){
		$("#"+$(this).data("desc")).removeClass('hide').addClass("animated bounceIn");
	})

	$(".icoDescription").on("click", function(){
		imgSrc = $(this).find('img').attr('src');
		openMenu($(this).data("desc"), imgSrc);
	})

	$("#projectFlex").flexslider({
		 animation: "slide",
		 manualControls: ".linkProject-nav li",
		 useCSS: false /* Chrome fix*/
	});
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

function openMenu(id, imgSrc){
	$("#menuIco").attr("src", imgSrc);
	$(".titleView").addClass("hide").removeClass("animated bounceIn");
	$(".menuView").removeClass("hide").addClass("animated bounceIn");
}
</script>