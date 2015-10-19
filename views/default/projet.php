<!-- START TEAM SECTION -->
<style>
#description{
  background-image:url("<?php echo $this->module->assetsUrl; ?>/images/bg.jpg");
}

.menuView ul{
	padding-left: 0px;
}

.imageSectionVideo{
	width: 70%;
}

.flexslider .slides .menuTagsDiv{
	display: none;
}
.bubleImage{
	width: 60%;
}

#whoUse li{
	list-style-type: disc;
	font-size: 12px;
}
#whoUse h3{
	font-size: 14px;
	margin-top: 0px;
}
#whoUse h2{
	text-align: left;
	font-size: 18px;
	margin-top: 0px;
	color: black;
}
#whoUse h2:hover{
	color: #e4334b;
}
</style>
<section id="description" class="center section with-arrow">
	<!-- SECTION TITLE -->
	<div class="section-header sub-hero">
		<img class='icon_section' src="<?php echo $this->module->assetsUrl; ?>/images/icon.png">
		<h1 class="title_fontHome">Projets</h1>
		<div class="linkProjet title_fontHome">
			<ul class="linkProject-nav">
				 <li><a href="#">COMMUNECTER</a></li>
				 <li><a href="#">PHILOSOPHIE</a></li>
				 <li><a href="#">COMMENT</a></li>
				 <li><a href="#">POUR QUI</a></li>
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
					</div>
					<div class="imageSection imageSectionVideo">
						<img id="img_pixel" class="img-responsive img-thumbnail" src="<?php echo $this->module->assetsUrl; ?>/images/video2.jpg" onclick="openVideo2()"/>
					</div>
				</div>
			</li>
			<li>
				<div class="section-content section-no-top-padding section-video">
					<div class="textProjectSlider">
					</div>
					<div class="imageSection imageSectionVideo">
						<img id="img_pixel" class="img-responsive img-thumbnail" src="<?php echo $this->module->assetsUrl; ?>/images/video.jpg" onclick="openVideo()"/>
					</div>
				</div>
			</li>

			<li>
				<div class="section-content section-no-top-padding section-image">
					<div class="textProjectSlider">
						<h3><strong>Une boite à idée citoyenne & évolutive</strong><br>
		Un <strong>espace de décision</strong> ouvert, participatif et démocratique<br>
		<strong>Une boîte à outils :</strong> covoiturage, petites annonces, agenda, évènements locaux, etc.<br>
		<strong>Un annuaire intéractif libre,</strong> répertoire dynamique des compétences locales par et pour le citoyen</h3>
					</div>
				
					<div class="imageSection bubleImage">
						<img class="" src="<?php echo $this->module->assetsUrl; ?>/images/equipeSlider2.png" />
					</div>
				</div>
			</li>

			<li>
				<div class="section-content section-no-top-padding section-image">
					<div class="textProjectSlider">
						<h3>
						Le Pixel Humain réunit et fédère les principaux acteurs de la vie locale<br>
						pour valoriser le territoire et le bien commun.
						</h3>
					</div>
					<div class="imageSection" id="whoUse">
						<div class="titleView">
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<div class="icoDescription" id="icoCitoyen" data-desc="citizenDesc">
										<img class=" imgIco img-responsive img-thumbnail" src="<?php echo $this->module->assetsUrl; ?>/images/01_PROJET_03_CITOYENS.jpg" data-desc="citizenDesc" />
										<h3 class="title_fontHome">Pour les citoyens</h3>
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="icoDescription" id="icoCollectivite" data-desc="collectiviteDesc">
										<img class="imgIco img-responsive img-thumbnail" src="<?php echo $this->module->assetsUrl; ?>/images/01_PROJET_03_COLLECTIVITE.jpg " data-desc="collectiviteDesc" />
										<h3 class="title_fontHome">Pour les collectivités</h3>
									</div>
									
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<div class="icoDescription" id="icoEntreprise" data-desc="organizationDesc">
										<img class="imgIco img-responsive img-thumbnail" src="<?php echo $this->module->assetsUrl; ?>/images/01_PROJET_03_ENTREPRISE.jpg" data-desc="organizationDesc"/>
										<h3 class="title_fontHome">Pour les entreprises</h3>
									</div>
								</div>
								
								<div class="col-md-6 col-sm-6">
									<div class="icoDescription" id="icoAssociation" data-desc="associationnDesc">
										<img class="imgIco img-responsive img-thumbnail" src="<?php echo $this->module->assetsUrl; ?>/images/01_PROJET_03_ASSO.jpg" data-desc="associationnDesc" />
										<h3 class="title_fontHome">Pour les associations</h3>
									</div>

								</div>
							</div>
						</div>
						<div class="menuView hide">
							<div class="row row-same-height">
								<div class="col-md-6 col-sm-6 menu">
									<img class="imgIco img-responsive menuIco" src="" />
								</div>
								<div class='col-md-6 pull-left backArrow'>
									<a class='backMenu'><i class="fa fa-arrow-left fa-2x"></i><a>
								</div>
							</div>
							<div class="row row-same-height">
								<div class="col-md-6 col-sm-6 menu">
									<ul>
										<li>
											<a class="titleMenu" data-desc="citizenDesc"><h2>Pour les citoyens</h2></a>
											<a class="titleMenu" data-desc="collectiviteDesc"><h2>Pour les collectivités</h2></a>
											<a class="titleMenu" data-desc="organizationDesc"><h2>Pour les entreprises</h2></a>
											<a class="titleMenu" data-desc="associationnDesc"><h2>Pour les associations</h2></a>
										</li>
									</ul>
								</div>

								<div class="col-md-5 pull-right">
									
									<div class="imgDescription hide citizenDesc">
										<h3>Vous êtes citoyen, <br>le Pixel Humain vous permet : </h3>
										<ul>
											<li>D'exister</li>
											<li>De vous informer</li>
											<li>De vous impliquer</li>
											<li>De vous regrouper</li>
											<li>D'échanger</li>
											<li>De débattre</li>
											<li>D'interagir</li>
											<li>De collaborer</li>
											<li>Consommer localement</li>
										</ul>
									</div>
									<div class="imgDescription hide associationnDesc">
										<h3>Vous êtes une association, <br>le Pixel Humain vous permet : </h3>
										<ul>
											<li>De vous présenter</li>
											<li>De valoriser vos actions</li>
											<li>De proposer vos services</li>
											<li>De communiquer</li>
											<li>D'étendre votre réseau</li>
											<li>De collaborer</li>
										</ul>
									</div>
									<div class="imgDescription hide organizationDesc">
										<h3>Vous êtes une organisation, <br>le Pixel Humain vous permet : </h3>
										<ul>
											<li>De vous présenter</li>
											<li>De proposer vos services</li>
											<li>De mettre en avant vos produits</li>
											<li>De cartographier votre réseau</li>
											<li>De vous investir</li>
										</ul>
									</div>
									<div class="imgDescription hide collectiviteDesc">
										<h3>Vous êtes une organisation, <br>le Pixel Humain vous permet : </h3>
										<ul>
											<li>Mettre en oeuvre le contrat de ville</li>
											<li>Favoriser la participation citoyenne</li>
											<li>Créer du lien social</li>
											<li>Ouvrir la collectivité au public</li>
											<li>Maîtriser QQCH</li>
											<li>Publier des actualités</li>
											<li>Recueillir idées et avis</li>
											<li>Cartographier le territoire</li>
										</ul>
									</div>
								</div>
							</div>						
						</div>
					</div>
				</div>
			</li>
			<li>
				<div class="section-content section-no-top-padding section-image">
					<div class="textProjectSlider">
					</div>
					<div class="tagsProjectDiv">
						<div class="keyWordsArea">
							<div class="row menuTagsDiv title_fontHome ">
								<ul class='menuTags pull-right'>
									<li>
										<a class='btnTags' data-id='all'>
											<img src="<?php echo $this->module->assetsUrl; ?>/images/03_CLOSE.png"/></a>
										</a>
									</li>
								</ul>
							</div>
							<div class="buttonArea">
							</div>
						</div>
						<div class="textTagsDiv">
						</div>
					</div>
				</div>
			</li>
			
		</ul>
	</div>
</section>


<script>

var imgSrc;
var mapImg = {"citizenDesc" :"<?php echo $this->module->assetsUrl; ?>/images/01_PROJET_03_CITOYENS.jpg",
				"collectiviteDesc" : "<?php echo $this->module->assetsUrl; ?>/images/01_PROJET_03_COLLECTIVITE.jpg ",
				"organizationDesc" : "<?php echo $this->module->assetsUrl; ?>/images/01_PROJET_03_ENTREPRISE.jpg",
				"associationnDesc" : "<?php echo $this->module->assetsUrl; ?>/images/01_PROJET_03_ASSO.jpg"
 			};
var mapColor = {"citizenDesc" :"#e3443b",
				"collectiviteDesc" : "#2a3945",
				"organizationDesc" : "#0db4e9",
				"associationnDesc" : "#92be1f"
			}

var dataProject = "<?php echo $this->module->assetsUrl; ?>/data/keyWordsProject.json";
var id = "";
jQuery(document).ready(function()
{

	createSlideKey(dataProject);
	//$(".imgDescription").css("display", "none");
	//$(".imgDescription").removeClass("hide");
	$(".icoDescription .imgIco").on("mouseover", function(){
		$("#"+$(this).data("desc")).removeClass('hide').addClass("animated bounceIn");
	})

	$(".icoDescription").on("click", function(){
		openMenu($(this).data("desc"), imgSrc);
	})

	$("#projectFlex").flexslider({
		 animation: "slide",
		 manualControls: ".linkProject-nav li a",
		 useCSS: false /* Chrome fix*/
	});

	$(".backMenu").on('click', function(){
		$('.imgDescription').removeClass("animated bounceIn").addClass("hide");
		$(".titleMenu h2").css("color", "black");
		$('.menuView').removeClass("animated bounceIn").addClass("hide");
		$('.titleView').removeClass("hide").addClass("animated bounceIn");

	})

	$(".titleMenu").on('click', function(){
		$(".titleMenu h2").css("color", "black");
		$(this).find("h2").css("color","#e4334b");
		switchMenu($(this).data("desc"));

	})
})
function openVideo(){
	var width = $(".imageSectionVideo").width();
	var height = $(".imageSectionVideo").height();
	console.log(width, height);
	$(".imageSectionVideo").empty();
	$(".imageSectionVideo").html('<iframe  class="img-responsive img-thumbnail" src="http://player.vimeo.com/video/74212373?api=1&title=0&amp;byline=0&amp;portrait=0&amp;color=57c0d4" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen class="video" aria-hidden="true" tabindex="-1"></iframe>')
	$("iframe").css("width", width);
	$("iframe").css("height", height);
}
 
function openVideo2(){
	var width = $(".imageSectionVideo").width();
	var height = $(".imageSectionVideo").height();
	console.log(width, height);
	$(".imageSectionVideo").empty();
	$(".imageSectionVideo").html('<iframe  class="img-responsive img-thumbnail" src="http://player.vimeo.com/video/133636468?api=1&title=0&amp;byline=0&amp;portrait=0&amp;color=57c0d4" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen class="video" aria-hidden="true" tabindex="-1"></iframe>')
	$("iframe").css("width", width);
	$("iframe").css("height", height);
}

function openMenu(id){
	this.id = id
	$(".menuIco").attr("src", mapImg[id]);
	$(".titleView").addClass("hide").removeClass("animated bounceIn");
	$(".menuView").removeClass("hide").addClass("animated bounceIn");
	$(".titleMenu h3").css("color", "black");
	$("ul").find("[data-desc='" + id + "']").find("h2").css("color", "#e4334b");
	setTimeout(function(){
		$('.'+id).removeClass("hide").addClass("animated bounceIn");
	}, 200);
	
}

function switchMenu(id){
	$('.imgDescription').removeClass("animated bounceIn").addClass("hide");
	$(".menuIco").attr("src", mapImg[id]);
	setTimeout(function(){
		$('.'+id).removeClass("hide").addClass("animated bounceIn");
	}, 200);
}

function createSlideKey(dataPath){
	d3.json(dataPath, function(error, data){
		console.log(error);
		$.each(data, function(k, v){
			console.log(k, v);
			/*$(".menuTags").append(
				"<li>"+
					"<a class='btnTags' data-id='"+k+"'>"+
						"<h3 class='title_fontHome'>"+k+"</h3>"+
					"</a>"+
				"</li>"
			)*/
			$.each(v, function(key, val){
				if(key=="keywords"){
					for(var i=0; i<val.length; i++){
						$.each(val[i], function(label, description){
							$(".keyWordsArea .buttonArea").append(
								"<button class='btn btn-lg "+k+" btnSliderProject' data-id='"+label+"' data-parent='"+k+"'>"+
									label+
								"</button>"
							)
						})
					}	
				}
			})
		})
		bindEventProject();
	})

	
}


function bindEventProject(){
	$(".btnTags").on("click", function(){
		$(".textTagsDiv").empty();
		$(".buttonArea").css("text-align", "left");
		if($(this).data("id") != "all"){

			$(".btnSliderProject").removeClass("animated fadeIn").addClass("hide");
			$("."+$(this).data("id")).removeClass("hide").addClass("animated fadeIn");
			showText($(this).data("id"), dataProject);

		}else{
			$(".btnSliderProject").removeClass("hide").addClass("animated fadeIn");
			$(".menuTagsDiv").css("display", "none");
		}	
	})


	$(".btnSliderProject").off().on("click", function(){

		$(".textTagsDiv").empty();
		$(".btnSliderProject").css("background-color", "#0db4e9")
		$(this).css("background-color", "white");
		var btnId = $(this).data("id");
		var parent = $(this).data("parent");
		//$(".btnSliderProject").removeClass("animated fadeIn").addClass("hide");
		//$(this).removeClass("hide").addClass("animated fadeIn");
		showTagText(btnId, parent, dataProject);
	})
}

function showText(id, dataPath){
	d3.json(dataPath, function(error, data){
		//console.log(error);
		$.each(data, function(k, v){
			if(k == id && "undefined" != typeof(v["description"])){
				$(".textTagsDiv").empty();
				$('.textTagsDiv').append(v["description"]);
			}
		})
	})
}

function showTagText(id, parent, dataPath){
	//$(".menuTagsDiv").css("display", "block");
	//$(".buttonArea").css("text-align", "center");
	d3.json(dataPath, function(error, data){
		//console.log(error);
		$.each(data, function(k, v){
			if(k == parent && "undefined" != typeof(v["keywords"])){
				for(var i=0; i<v["keywords"].length; i++){
					$.each(v["keywords"][i], function(label, description){
						console.log("id", id, "label", label, "description", description);
						if(label == id){
							$(".textTagsDiv").empty();
							$('.textTagsDiv').append(description);
						}
					})
				}
			}
		})
	})
}
</script>