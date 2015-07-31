<style type="text/css">
	#communecte{
		max-width: 60%;
		margin-left: auto;
		margin-right: auto;
		text-align: center;
		color:#2a3945;
		font-family: "Homestead",arial,sans-serif;
	}
	#adhesion{
		max-width: 80%;
		text-align: center;
		vertical-align: middle;
		min-height: 20%;
		color:#2a3945;
		font-family: "Homestead",arial,sans-serif;
		
	}
	#participe{
		max-width: 80%;
		text-align: center;
		vertical-align: middle;
		min-height: 20%;
		color:#2a3945;
		font-family: "Homestead",arial,sans-serif;
	}


	h1{
	    font-family: "Homestead",arial,sans-serif;
	}

	.btn-success {
	    background-color: yellow;
	    border-color: yellow;
	    color: #000;
	    text-align: center;
	    font-family: "Varela Round",arial,sans-serif;
	    font-size: 1em;
	}
	#divAction{
		width: 25%;
		margin-right: auto;
		margin-left: auto;
		vertical-align: middle;
	}

	#services{
		min-height: 500px;
	}

	.titleForm{
		padding-top: 60px;
		padding-bottom: 30px;
		color: yellow;
	}
</style>

<div id="serviceIndex">
	<div class="section-header">
		<h1 class="parnet title_fontHome">	<img class="icon_section img_cont" src="<?php echo $this->module->assetsUrl; ?>/images/hand.png"  ><br>PARTICIPER</h1>
		<p class="parnet servText">Le Pixel Humain est une plate-forme en construction.<br>
		 	<strong>Pour nous aider à connecter virtuel et réel, le Pixel et l’Humain, nous avons besoin de vous.</strong><br>
		  Vous partagez nos valeurs ! Vous souhaitez contribuer à un projet d’intérêt général, évolutif et participatif !<br>
		   Alors, rejoignez-nous !
		</p>
	</div>
	<div class="section-content" id ="section-serv">
		<div class="services-slider ">
			<div class="row" id="communecte">   
				<h2>Je me communecte</h2>
				<p><strong>Pour devenir un futur utilisateur de la plate forme</strong></br> et être tenu au courant du développement du projet. </strong></p>
				<button onclick="javascript:;" class="btn btnPart btnCommunecte btn-success">Je me communecte à la plateforme</button>
			</div>
			<div class="row middleServ">
				<div class="col-sm-5">
					<div class="pull-right" id="adhesion">   
						<h2>J'adhère</h2>
						<p><strong>Pour devenir membre d’OPEN-ATLAS,</strong><br> l’association porteuse du projet Pixel Humain.</p>
						<button onclick="javascript:openform('adhesion')" class="btn btnPart btn-success">J'adhère à l'association</button>
					</div>
				</div>

				<div class="col-sm-2">
				</div>

				<div class="col-sm-5">
					<div class="pull-left" id="participe" >   
	                	<h2>Je participe</h2>
						<p>Vous êtes artiste, un particulier, une association,<br> une entreprise, une collectivité, <br><strong>venez mettre votre grain de sel dans</strong> <br>l’élaboration du Pixel Humain, devenez Pixel actif !!!</p>
						<button type="button" onclick="javascript:openform('participe')" class="btn btnPart btn-success">Je participe au projet</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div id ="serviceCommunecte" class="hide">
	<div class="section-header">
		<h2 class='parnet titleForm'>Je me communecte  <a href="javascript:closeform()" class="cross"><img src="<?php echo $this->module->assetsUrl; ?>/images/03_CLOSE.png"/></a></h2>
	</div>
	<div class="section-content" id ="section-servForm">
		<!-- SECTION BUTTON -->
		<div id="divAction" class="section-content">
			<div class="form-group col-md-12">
			
				<input id="form-field-1" class="form-control" type="text" placeholder="Identifiant"/></br>
				
				
				<input id="form-field-2" class="form-control" type="password" placeholder="Mot de passe"/></br>
				
				<div class="row">
					<div class="text-left pull-left no-padding col-md-6">
						<a href="">Mot de passe oublié?</a>
					</div>
					<div class="text-right col-md-6">
						<div class="checkbox">
						    <label>
						      <input type="checkbox" class="no-float"> Rester connecté</input>
						    </label>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="text-left float-left no-padding col-md-6">
						<ul class="social-list">
							<li><a href="#" class="btn btn-facebook"><span class="icon icon-facebook"></span></a></li>
							<li><a href="#" class="btn btn-twitter"><span class="icon icon-twitter"></span></a></li>
							<li><a href="#" class="btn btn-google"><span class="icon icon-google-plus"></span> </a></li>
						</ul>
					</div>
					<div class="text-right pull-right no-padding col-md-6">
					 	<button type="submit" class="btn btn-success">C'est parti !</button>
					</div>
				</div>
				<div class = "row">
					<div class="col-md-12 registerServ">
						 <span>Pas encore pixel actif ? C'est facile !</span></br>
						 <a href="#">Inscrivez-vous maintenant</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>

	jQuery(document).ready(function()
	{
		$(".btnPart").on("mouseover", function(){
			$(this).css("background-color", "#e4334b")
			$(this).css("border-color", "#e4334b")
		})

		$(".btnPart").on("mouseout", function(){
			$(this).css("background-color", "yellow")
			$(this).css("border-color", "yellow")
		})

		$(".btnCommunecte").off().on("click", function(){
			window.location.href = baseUrl+"/communecter/person/login";
		})
	})

	function openform(id){	
		$("#serviceIndex").removeClass("animated fadeIn").addClass("hide");
		//$("#headerContent").removeClass("animated fadeIn").addClass("hide");
		$("#serviceCommunecte").removeClass("hide").addClass("animated fadeIn");
		
		
	}

	function closeform(){
		$("#serviceCommunecte").removeClass("animated fadeIn").addClass("hide");
		$("#serviceIndex").removeClass("hide").addClass("animated fadeIn");
		//$("#headerContent").removeClass("hide").addClass("animated fadeIn");
		
	}
</script>