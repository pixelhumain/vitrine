
<script src="http://code.jquery.com/jquery.js"></script>

<section id="sectionsvg" class="section">
	<div class="svgAndImg">
		<div id="svg"></div>
		<div id="patterns"></div>
		<div class="flexslider" id="banFlex">
			<ul class="slides">
			<li>
				<div class="imgSvg" id="slide1">
					<div class="imgZone">
						<img src="<?php echo $this->module->assetsUrl; ?>/images/slider/slide1.png" style="margin-left:'auto'; margin-right:'auto';"/>
					</div>
					<div class="textZone">
						<h1 class="slideTitle_pix title_fontHome">Découvrez <strong>Pixel Humain</strong></h1>
			            	<p><strong>Le premier réseau sociétal libre et innovant.</strong><br>
			Citoyens, associations, collectivités, entreprises,</br> 
			ce réseau de proximité est fait pour vous !</br>
			Pour un territoire connecté, intéractif et dynamique<br> <a class="btn btn-succes center pinkBtn">Communectez-vous !</a>
					</div>
				</div>
			</li>
			<li>
				<div class="imgSvg" id="slide1">
					<div class="imgZone">
						<img src="<?php echo $this->module->assetsUrl; ?>/images/slider/slide2.png" style="margin-left:'auto'; margin-right:'auto';"/>
					</div>
					<div class="textZone">
						<h1 class="slideTitle_pix title_fontHome">Participez au projet</h1>
			            	<p>Vous partagez nos valeurs ?<br>
			Vous souhaitez contribuer à un projet d’intérêt général, participatif et<br>
			évolutif ?<br>
			Alors,<strong> rejoignez-nous et devenez, vous aussi, Pixel Humain !</strong> </p>
					</div>
				</div>
			</li>
			<li>
				<div class="imgSvg" id="slide1">
					<div class="imgZone">
						<img src="<?php echo $this->module->assetsUrl; ?>/images/slider/slide4.png" style="margin-left:'auto'; margin-right:'auto';"/>
					</div>
					<div class="textZone">
						<h1 class="slideTitle_pix title_fontHome">Un réseau en mouvement</h1>
			            	<p>Les actions pour le bien commun de plusieurs communautés<br> 
			            	tranformées en intelligence collective<br>
				<strong>Découvrez qui se cache derrière le changement en marche</strong></p>
					</div>
		
				</div>
			</li>
			</ul>
		</div> 

	</div>

</section>

<script type="text/javascript">

var vertices = [];
var tabIdPop =[];
var tabIdPop2 =[];
var force;
var linkValue;
var dataFile;
var tickNum;
var tabTick = [];
var tabId = [];
var objectTarget = null;
var width;
var height;
var anime, anime2, timer;
var numTip = 0;
var tipCirclePack;
var tipCirclePack1;
var tipCirclePack2;
var tipCirclePack3;
var tipCirclePack4;
var datajson;
var tipOpen = false;
var svg, svg2;
var map;
var verticeL;
var tabType1 =[];
var tabType2 = [];
var dataPath = "<?php echo $this->module->assetsUrl; ?>/data/messagevitrine.json";


function initialise(){

	$("#svgGrap").remove();
 	$("svgPath").remove();
 	
 	tipCirclePack = d3.tip()
	  .attr('class', 'd3-tip')
	  .offset([-10, 0]);

	tipCirclePack1 = d3.tip()
	  .attr('class', 'd3-tip')
	  .offset([-10, 0]);

	tipCirclePack2 = d3.tip()
	  .attr('class', 'd3-tip')
	  .offset([-10, 0]);

	tipCirclePack3 = d3.tip()
	  .attr('class', 'd3-tip')
	  .offset([-10, 0]);

	tipCirclePack4 = d3.tip()
	  .attr('class', 'd3-tip')
	  .offset([-10, 0]);
	
	 svg = d3.select("#svg").append("svg").attr("id", "svgGrap")
      .call(tipCirclePack1)
      .call(tipCirclePack2)
      .call(tipCirclePack3)
      .call(tipCirclePack4)
      .call(tipCirclePack);
  	
    
	 width = $("#sectionsvg").width();

	 height = $("#sectionsvg").height();
	 //console.log("height", height);

	 svg.attr("height", height)
	    .attr("width", width);

	svg.append("rect")
	    .attr("width", "100%")
	    .attr("height", "100%")
	    .attr("fill", "#d5dde2");
	svg2 = d3.select("#patterns").append("svg").attr("id", "svgPath").append("defs");
}

function createSvgData(data){
	var t = [];
    var n = 0;
    var compt = 0;
    $.each(data, function (k, elem) {
      compt++;
    });
    $.each(data, function (k, elem) {
      if(elem.type=="comment"){
        elem.x = Math.floor(Math.random() * width/3.5);
        elem.y = Math.floor(Math.random()* (height -76) +76);
        tabType1.push(elem);
      }else{
        elem.x = Math.floor(Math.random()*(1/3)*width+ (2/3)*width);
        elem.y = Math.floor(Math.random()* (height -76) +76);
      }
      t[n]= elem;
      
      vertices[n] = [elem.x, elem.y];
      n++;

    })
    return t;
}
	function grapLinkBanner(dataPath){
 	
		initialise();
		d3.json(dataPath, function(error, newdata){
			if(error){
				//console.log(error);
			}
			map = newdata
			dataFile=map
			t =  createSvgData(map);
			var circleRadius = 5;
			force = d3.layout.force()
		  		.linkDistance(200)
		  		.charge(-2500)    	

		    var nodes = svg.selectAll("circle")
		      .data(t);
		    var nodes2 = svg2.selectAll("images")
		      .data(t);
		    //nodes.call(tipCirclePack);
		    var idCompt = 0;
		    

			
		    var vertices1 = [];
		    var vertices2 = [];

		    for (var i = 0; i<vertices.length; i ++){
		      if(i<tabType1.length){
		        vertices1[i] = vertices[i];
		        var c = i+1
		        //console.log("i1", i)
		      }
		      else{
		        vertices2[i-c] = vertices[i];
		        }
		    }
		    for(var i=0; i<4; i++){
		      vertices1[vertices1.length] = [0, Math.floor(Math.random()* height)];
		      vertices1[vertices1.length] = [Math.floor(Math.random()*width/4), 0];
		      vertices1[vertices1.length] = [Math.floor(Math.random()*width/4), height];
		      vertices2[vertices2.length] = [width, Math.floor(Math.random()*height)];
		      vertices2[vertices2.length] = [Math.floor(Math.random()*(1/4)*width+ (3/4)*width), 0];
		      vertices2[vertices2.length] = [Math.floor(Math.random()*(1/4)*width+ (3/4)*width), height];
		    }
		    var linkValuePart1 = d3.geom.delaunay(vertices1);
		    var linkValuePart2 = d3.geom.delaunay(vertices2);
		   
		    var linkValueR = [];
		    
		    for(var i= 0; i<(linkValuePart1.length+linkValuePart2.length); i++){
		      if(i<linkValuePart1.length){
		         linkValueR[i] = linkValuePart1[i];
		       }else{
		          linkValueR[i] = linkValuePart2[i-linkValuePart1.length];
		       }
		    }
		    tabType1 = [];
		    tabType2 = [];
		    linkValue = [];
		    var n = 0;
		    for(var i = 0; i<linkValueR.length; i++){
		      for(var j =0; j<linkValueR[i].length-1; j ++){
		        linkValue[n]=[];
		        linkValue[n][0] = linkValueR[i][j][0];
		        linkValue[n][1] = linkValueR[i][j][1];
		        linkValue[n][2] = linkValueR[i][j+1][0];
		        linkValue[n][3] = linkValueR[i][j+1][1];
		        n++;
		        if(j+2<linkValueR[i].length){
		          linkValue[n]=[];
		          linkValue[n][0] = linkValueR[i][j][0];
		          linkValue[n][1] = linkValueR[i][j][1];
		          linkValue[n][2] = linkValueR[i][j+2][0];
		          linkValue[n][3] = linkValueR[i][j+2][1];
		          n++;
		        }
		      }    
		    }
		    var link = svg.selectAll(".link")
		    			.data(linkValue);

		    link.data(linkValue).enter().insert("line", ".node")
                .attr("class", "bindLine")
                .attr("x1", function(d){return d[0];})
                .attr("y1", function(d){return d[1];})
                .attr("x2", function(d){return d[2];})
                .attr("y2", function(d){return d[3];});
            links = d3.layout.tree().links(nodes);
		   
		  	var attribute ="xlink:href";
		   
		   	nodes2.enter().append("pattern")
		      .attr("id", function(d, idCompt){idCompt++; return "img"+idCompt})
		      .attr("x", 0)
		      .attr("y", 0)
		      .attr("width", 40)
		      .attr("height", 40)
		      .append("image")
		      .attr("x", 0)
		      .attr("y", 0)
		      .attr("width", 40)
		      .attr("height", 40)
		      .attr(attribute, function(d, idCompt){return getPhoto(idCompt+1);});

		    idCompt = 0;
		    photoPath = "";
		    content = "";
		    nodes.enter().append("circle")
				.attr("class", function(d) {return d.type})
				.attr("id", function(d, idCompt){
												idCompt++;
												if(d.type=="tag")
													tabType2.push(idCompt);
												else
													tabType1.push(idCompt);
												return idCompt;})
				.attr("cy", function(d) {return d.y;})
				.attr("cx", function(d) {return d.x;})
				.on("mouseover", expandNode)
				.on("mouseout", contractNode)
				.attr("r", circleRadius)
		   	
		      	force.nodes(nodes)
					.links(links)
			 	force.start();						
				function onTimeTick(){
					force.nodes(nodes)
						.links(links)
					// Run the layout a fixed number of times.
					// The ideal number of times scales with graph complexity.
					force.start();
					for (var i = 25 * 25; i > 0; --i) force.tick();
					force.stop();
				}
				onTimeTick;
		   	//console.log(tabType2, tabType1);
			$('.comment').popover({
				'trigger':'hover',
				'container': '#svg',
				'placement': 'top',
				'white-space': 'nowrap',
				'html':'true',
				content  : function(){
					//console.log(this.id, t[this.id-1]);

					content = "<span class='tip-title'><img src='"+getPhoto(this.id-1)+"'></img><strong>"+t[this.id-1].name+": </strong></span><span>"+t[this.id-1].comment.comment+"</span>"
					return content;
				}
			});
			$('.tag').tooltip({
				'trigger':'hover',
				'container': '#svg',
				'placement': 'top',
				'white-space': 'nowrap',
				'html':'true',
				title  : function(){
					content = ""+t[this.id-1].comment.comment+"";
					return content;
				}
			});

		    animateTips1(tabType1);
		    animateTips2(tabType2);
		    
			function animateTips1(c){
			    var id = c[Math.floor(Math.random()*c.length)];
			    tabIdPop.push(id);
			    if(tabIdPop.length>3){
			    	$('#'+tabIdPop[0]).d3MouseOut();
			    	tabIdPop.shift();
			    }
			    $("#"+id).d3MouseOver();
			    anime = setTimeout(function(){
			    	//console.log("anime");
			      	animateTips1(c);
			    }, 4000); 
			}

			function animateTips2(c){
			    var id = c[Math.floor(Math.random()*c.length)];
			    tabIdPop2.push(id);
			    if(tabIdPop2.length>5){
			    	$('#'+tabIdPop2[0]).d3MouseOut();
			    	tabIdPop2.shift();
			    }
			    $("#"+id).d3MouseOver();
			    $(".tagPop").parents("popover").css("background-color", "transparent");
			    anime2 = setTimeout(function(){
			    	//console.log("anime");
			      	animateTips2(c);
			    }, 4000); 
			}

			//Tooltips and the radius cercle transition on over/out

			function openTips(object, id){
		        var n = 1;
		        var nameTips = "";
		        var commentTips = "";
		        var d = null;
		        var type;
		        var returnObj = null;
		        
		        $.each(dataFile, function(key,obj){
		            if(n == id){
		               d = obj;
		               comment = obj.comment.comment;
		               type = obj.type;
		                ////console.log(obj.comment, obj["comment"]);
		              }
		              n++
		          });
		        
		        tip = chooseTips(numTip);
		        if($.inArray(id, tabId) == -1){
			        if(tabId.length>=5){
			        	$("#"+tabId[0]).d3MouseOut();
			        	tabId.shift();
			        	tabTick.shift();
			        }
			        tabId.push(id);
			        tabTick.push(numTip);
			        numTip++;
			        if(numTip>4){
			        	numTip = 0;
			        };
			        //console.log("tips", numTip, "tabId", tabId);
			        
				    $("#"+id).css("fill", "url(#img"+id+")");
				    tip.attr("class", "d3-tip "+type);
				    if(d.name){
				    	tip.html("<div id ='tool-d3'> <span><span class='tip-title'><strong>"+ d.name+" "+d.firstname+": </strong> </span></br>"+comment+"</span></div>")
				    }else{
				    	tip.html("<div id ='tool-d3'> <span><span class='tip-title'><strong>"+comment+"</strong></span></span></div>")
				    }
			      	
			      	returnObj = tip.show($("#"+id));
			      }    
		        return returnObj; 
		      }

			function closeTips(obj, id){
		        //verification des tips ouvert
		        //console.log([$.inArray(id, tabId)])
		        if($.inArray(id, tabId) != -1){
			        tip = chooseTips(tabTick[$.inArray(id, tabId)]).hide();
			        $("#"+id).style("fill", "#ccc");
		        }
			}

			// Choose of the tooltip layout
			function chooseTips(n){
			  
			  var tips;
			  switch(n){
			    case(0):
			      tips= tipCirclePack;
			    break;
			    case(1):
			      tips= tipCirclePack1;
			    break;
			    case(2):
			      tips = tipCirclePack2;
			    case(3):
			      tips = tipCirclePack3;
			    break;
			    case(4):
			      tips = tipCirclePack4;
			    break;
			  }
			  return tips;
			}

			function getPhoto(id) {
			  var n = 1;
			  var url;
			  var path = "images/vitrine/photo/"
			   $.each(dataFile, function(key,obj){
			      ////console.log("n", n, "id", id);
			       if(n == id){
			        ////console.log("------------------------", obj);
			          d = obj;
			         ////console.log(d);
			          if(obj.image){
			           //console.log(obj.image.url)
			            url = path+obj.image.url;
			          }
			          if(!url || url == path+""){
			            url = path+"img3.png"
			          }
			        }
			        n++
			    });
			  //console.log(url);
			   return url;
			}

			/*------------------------------------------------------
			--- TRANSITIONS
			-------------------------------------------------------*/

			 // provides node animation for mouseover
			function expandNode() {
			    ////console.log("expandNode");
			    if(t[d3.select(this).attr("id")-1].type == "tag"){
			    	// openTips(d3.select(this), d3.select(this).attr("id"));
			    }
			   
			    //console.log(d3.select(this).attr("class"));
			    d3.select(this).transition()
			        .style("fill", "black")

			    /*if(d3.select(this).attr("class")=="comment"){
			    	d3.select(this).transition()
			        .duration(1000)   
			        .attr("r",20);
			    }*/    
			};


			// provides node animation for mouseout
			function contractNode(){
				if(t[d3.select(this).attr("id")-1].type == "tag"){
			    	//closeTips(d3.select(this), d3.select(this).attr("id"));
			    }
				//
				d3.select(this).transition()
					.style("fill", "#ccc")

			};

			/*----------------------------------------------------
			--- MOUSE EVENTS
			-----------------------------------------------------*/

			//launch mouseover event for the d3 graph
			jQuery.fn.d3MouseOver = function () {
			    this.each(function (i, e) {
			      //////console.log("over");
			      var evt = document.createEvent("MouseEvents");
			      evt.initMouseEvent("mouseover", true, true, window, 0, 0, 0, 0, 0, false, false, false, false, 0, null);

			      e.dispatchEvent(evt);
			    });
			  };

			//launch mouseout event for the d3 graph
			jQuery.fn.d3MouseOut = function () {
			    this.each(function (i, e) {
			      ////console.log("out");
			      var evt = document.createEvent("MouseEvents");
			      evt.initMouseEvent("mouseout", true, true, window, 0, 0, 0, 0, 0, false, false, false, false, 0, null);

			      e.dispatchEvent(evt);
			    });
			  };
		})
	}


	

	function getMessageVitrine(){
		var fields = "name,comment,image" ;
		var params = {"applications.<?php echo $this->module->id?>.usertype":"event","limit":30};
		params.fields = fields.split(",");
		$.ajax({
		        type: "GET",
		        url: baseUrl+'/<?php echo $this->module->id?>/api/getmessagevitby',
		        dataType : "json",
		        data: params
		    })
		    .done(function (data) 
		    {
		        if (data) {               
		        	//console.log("getmessagevitby1",datajson)
		        	datajson = data;
		        	grapLinkBanner(datajson);
		        	//console.log("getmessagevitby2",datajson)
		        } else {
		            console.error("bug get "+id);
		        }
		    });
		 animateTips(30);
	}


	function resizeGraph(){
		tabId =[];
		tabType1=[];
		tabType2=[];
		clearTimeout(timer);
		timer = setTimeout(function(){
			clearTimeout(anime);
			clearTimeout(anime2);
			$("#svgGrap").remove();
			$("#svgPath").remove();
			$(".d3-tip").remove();
			$("#svg").remove();

			$("#patterns").remove();

			if($(window).width()> 500){
				var graphSvg =d3.select(".svgAndImg").append("div").attr("id", "svg");
				var graphPatterns = d3.select(".svgAndImg").append("div").attr("id", "patterns");
				$("#patterns").insertBefore(".flexslider");
				$("#svg").insertBefore("#patterns");
				grapLinkBanner(dataPath);
				//getMessageVitrine();
			}
		} , 200);
	}

</script>