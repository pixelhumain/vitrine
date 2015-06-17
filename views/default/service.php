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
		display: none;
		z-index: 10;
		width: 30%;
		margin-left: 35%;
		text-align: center;
	}

	#don{
		display : none;
	}

</style>

<div class="section-header">
	<h1 class="parnet title_fontHome">	<img class="icon_section img_cont" src="<?php echo $this->module->assetsUrl; ?>/images/hand.png"  ><br>PARTICIPER</h1>
	<p class="parnet servText">Le Pixel Humain est une plate-forme en construction.<br>
	 Pour nous aider à connecter virtuel et réel, le Pixel et l’Humain, nous avons besoin de vous.<br>
	  Vous partagez nos valeurs ! Vous souhaitez contribuer à un projet d’intérêt général, évolutif et participatif !<br>
	   Alors, rejoignez-nous !</p>	
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
			<div class="row">
	             <div id="don">  
					<h2>Je donne</h2>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat...</p>
					<button onclick="javascript:openform('don')" class="btn btnPart btn-success">Je fais un don à l'association</button>
				</div>
			</div>
		</div>
	</div>		
</div>


<!-- SECTION BUTTON -->
<div id="divAction">
	<div class="form-group">
		<h1>Je me communecte  <a href="javascript:closeform()"><img src="<?php echo $this->module->assetsUrl; ?>/images/close.png"/></a></h1></br>
		
		<input id="form-field-1" class="form-control" type="text" placeholder="login de connexion"></br>
		<input id="form-field-2" class="form-control" type="password" placeholder="Password"></br>
		<a href="">Mot de passe oublié?</a>
		<div class="checkbox">
		    <label>
		      <input type="checkbox"> Rester connecté</input>
		    </label>
		</div>
		<ul class="social-list">
			<li><a href="#" class="btn btn-facebook"><span class="icon icon-facebook"></span></a></li>
			<li><a href="#" class="btn btn-twitter"><span class="icon icon-twitter"></span></a></li>
			<li><a href="#" class="btn btn-google"><span class="icon icon-google-plus"></span> </a></li>
		</ul>
		 <button type="submit" class="btn btn-success">C'est parti !</button></br>
		 <span>Pas encore pixel actif? C'est facile !</span></br>
		 <a href="#">Inscrivez-vous maintenant</a>
	</div>
</div>
<div class="space20"></div>

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
		$(".services-slider").css("display", "none");
		$("#divAction").css("display", "block");
	}

	function closeform(){
		$(".services-slider").css("display", "block");
		$("#divAction").css("display", "none");
	}
</script>