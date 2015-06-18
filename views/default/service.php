<style>
	.services-slider{
		width: 50%;
		margin: auto;
	}
	#communecte, #adhesion, #don, #participe{
		color: #2a3945;
	    /*margin-left: 43%;
	    margin-right: 43%;
	    width: 75%;*/
	    font-family: "Homestead",arial,sans-serif;
	}

	#communecte, #don{
		text-align: center;
		margin-left: auto;
	    margin-right: auto;
	    width: 45%;
	}


	.no-float{
		float: none;
	}

	#adhesion{
		float: right;
		text-align: center;	
	}

	.servText{
		margin-top: 0px;
	}
	#participe{
		float: left; 
		text-align: center;
	}

	#services .form-group{
	  margin-bottom: 15px;
	  margin-left: 25%;
	  width: 50%;
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

	#container{
		z-index: 1;
	}

	#divAction{
		z-index: 10;
		width: 40%;
		margin-left: 30%;
		margin-top: 60px;
		min-height:450px;
		text-align: center;
	}

	#don{
		display : none;
	}



</style>

<div class="section-header">
	<div id="headerContent">
		<h1 class="parnet title_fontHome">	<img class="icon_section img_cont" src="<?php echo $this->module->assetsUrl; ?>/images/hand.png"  ><br>PARTICIPER</h1>
		<p class="parnet servText">Le Pixel Humain est une plate-forme en construction.<br>
		 Pour nous aider à connecter virtuel et réel, le Pixel et l’Humain, nous avons besoin de vous.<br>
		  Vous partagez nos valeurs ! Vous souhaitez contribuer à un projet d’intérêt général, évolutif et participatif !<br>
		   Alors, rejoignez-nous !</p>
	</div>	
</div>
	<!-- SECTION CONTENT -->
<div class="section-content" id ="section-serv">
	<div class="container-fluid" id="container">
		<div class="services-slider ">
				
				<!-- START SERVICE -->
            <div class="row" >
            	<div id="communecte">   
					<h2>Je me communecte</h2>
					<p>Pour devenir un futur utilisateur de la plate forme et être tenu au courant du développement du projet. </p>
					<button onclick="javascript:openform('communecte')" class="btn btnPart btn-success">Je me communecte à la plateforme</button>
				</div>
			</div>  
				<!-- END SERVICE -->
			<div class="row">
				<div class="col-md-5">
		            <div align="right" id="adhesion">   
						<h2>J'adhère</h2>
						<p>Pour devenir membre d’OPEN-ATLAS, l’association porteuse du projet Pixel Humain.<br></p>
						<button onclick="javascript:openform('adhesion')" class="btn btnPart btn-success">J'adhere à l'association</button>
					</div>
				</div>
				<div class="col-md-2"></div>
				<div class="col-md-5">
		           <div id="participe" >   
                    	<h2>Je participe</h2>
						<p>Vous êtes artiste, un particulier, une association, une entreprise, une collectivité, venez mettre votre grain de Xel dans l’élaboration du Pixel Humain, devenez Pixel actif !!!</p>
						<button type="button" onclick="javascript:openform('participe')" class="btn btnPart btn-success">Je participe au projet</button>
					</div>
				</div>
			</div>
			<div class="row hide">
	             <div id="don">  
					<h2>Je donne</h2>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat...</p>
					<button onclick="javascript:openform('don')" class="btn btnPart btn-success">Je fais un don à l'association</button>
				</div>
			</div>
		</div>	
		<div class="space20"></div>
	</div>		
</div>


<!-- SECTION BUTTON -->
<div id="divAction" class="hide section-content parnet row">
	<div class="form-group col-md-12">
		<h2>Je me communecte  <a href="javascript:closeform()" class="cross"><span class="cross__icon"></span></a></h2>
		
			<input id="form-field-1" class="form-control" type="text" placeholder="Identifiant de connection"/></br>
	
		
			<input id="form-field-2" class="form-control" type="password" placeholder="Mot de passe"/></br>
		
			<div class="row">
				<div class="text-left float-left col-md-6">
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
				<div class="text-left float-left col-md-6">
					<ul class="social-list">
						<li><a href="#" class="btn btn-facebook"><span class="icon icon-facebook"></span></a></li>
						<li><a href="#" class="btn btn-twitter"><span class="icon icon-twitter"></span></a></li>
						<li><a href="#" class="btn btn-google"><span class="icon icon-google-plus"></span> </a></li>
					</ul>
				</div>
				<div class="text-right float-right col-md-6">
				 	<button type="submit" class="btn btn-success">C'est parti !</button>
				</div>
			</div>
		<div class="col-md-12 registerServ">
			 <span>Pas encore pixel actif ? C'est facile !</span></br>
			 <a href="#">Inscrivez-vous maintenant</a>
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

	})
	function openform(id){
		$("#divAction").css("height", ""+$(".services-slider").height());	
		$("#section-serv").removeClass("animated fadeIn").addClass("hide");
		//$("#headerContent").removeClass("animated fadeIn").addClass("hide");
		$("#divAction").removeClass("hide").addClass("animated fadeIn");
		
		
	}

	function closeform(){
		$("#divAction").removeClass("animated fadeIn").addClass("hide");
		$("#section-serv").removeClass("hide").addClass("animated fadeIn");
		//$("#headerContent").removeClass("hide").addClass("animated fadeIn");
		
	}
</script>