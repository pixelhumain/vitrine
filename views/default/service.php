<style>

 #communecte, #adhesion, #don, #participe{
	color: #2a3945;
    margin-left: 43%;
    margin-right: 43%;
    position: relative;
    width: 14%;
    font-family: "Varela Round",arial,sans-serif;
}


#adhesion{
	float: right;
    margin-right: 55%;	
}

#don{
	float: left;
    margin-left: 55%;
    position: absolute;   
}


.btn-success {
    background-color: yellow;
    border-color: yellow;
    color: #000;
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

</style>
<div class="section-header">

<h1 class="parnet title_fontHome">	<img src="<?php echo $this->module->assetsUrl; ?>/images/hand.png"  ><br>PARTICIPER</h1>
	
</div>
<!-- SECTION CONTENT -->
<div class="section-content">
	<div id="container">
		
		<div class="services-slider ">
			<p class="parnet">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet <br>dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam<br> nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
            <ul class="slides">
				<!-- START SERVICE -->
	            <div id="communecte">   
	            	<li>
	                    <div class="slide">
							
							<h3>Je me communecte</h3>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat...</p>
							<button onclick="javascript:openform('communecte')" class="btn btn-success">Je me communecte à la plateforme</button>
						</div>
					</li>
				</div>  
					<!-- END SERVICE -->
	             <div id="adhesion" >   
	             	<li>
	                    <div class="slide">
							
							<h3>J'adhère</h3>
							<p>Vous adhérez à la philosophie du projet Pixel Humain ? Ce projet est porté par  l'association Open Atlas. En adhérant, vous soutenez le projet Pixel Humain....</p>
							<button onclick="javascript:openform('adhesion')" class="btn btn-success">J'adhere à l'association</button>
						</div>
					</li>
				</div>
	            <div id="don">  
	              	<li>
	                    <div class="slide">
						
							<h3>Je donne</h3>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat...</p>
							<button onclick="javascript:openform('don')" class="btn btn-success">Je fais un don à l'association</button>
						</div>
					</li>
				</div>
	            <div id="participe" >   
	             	<li>
	                    <div class="slide">
							
							<h3>Je participe</h3>
							<p>Here it's just an example of the activities that you can do with your charity to get funds. Or something else...</p>
							<button type="button" onclick="javascript:openform('participe')" class="btn btn-success">Je participe au projet</button>
						</div>
					</li>
				</div>
			</ul>
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
	</div>


<script>
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