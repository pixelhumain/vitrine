<style>

#modalComment{
	height: 30%;
	width: 500px;
}

.slideTitle_pix{
	color: #2a3945;
}
</style>

<script src="http://code.jquery.com/jquery.js"></script>

<section id="sectionsvg" class="section">
	<div class="svgAndImg">
		<div id="svg"></div>
		<div id="patterns"></div>
		<div class="flexslider">
			<ul class="slides">
			<li>
				<div class="imgSvg" id="slide1">
					<img src="images/slider/slide1.png" style="margin-left:'auto'; margin-right:'auto';"/>
					<h1 class="slideTitle_pix title_fontHome">Découvrez <strong>Pixel Humain</strong></h1>
		            	<h3>Le premier réseau social citoyen libre<br>
		Citoyens, Associations, Entreprises, Collectivités : <br>
		Découvrez ce qui se passe en ce moment dans votre commune<br>
		Participez aux discussions et actions citoyennes qui vous tiennent à cœur.</h3>
				</div>
			</li>
			<li>
				<div class="imgSvg" id="slide1">
					<img src="images/slider/slide3.png" style="margin-left:'auto'; margin-right:'auto';"/>
					<h1 class="slideTitle_pix title_fontHome">Découvrez <strong>Pixel Humain</strong></h1>
		            	<h3>Le premier réseau social citoyen libre<br>
		Citoyens, Associations, Entreprises, Collectivités : <br>
		Découvrez ce qui se passe en ce moment dans votre commune<br>
		Participez aux discussions et actions citoyennes qui vous tiennent à cœur.</h3>
				</div>
			</li>
			<li>
				<div class="imgSvg" id="slide1">
					<img src="images/slider/slide4.png" style="margin-left:'auto'; margin-right:'auto';"/>
					<h1 class="slideTitle_pix title_fontHome">Découvrez <strong>Pixel Humain</strong></h1>
		            	<h3>Le premier réseau social citoyen libre<br>
		Citoyens, Associations, Entreprises, Collectivités : <br>
		Découvrez ce qui se passe en ce moment dans votre commune<br>
		Participez aux discussions et actions citoyennes qui vous tiennent à cœur.</h3>
				</div>
			</li>
			</ul>
		</div> 

	</div>

	<div class="modal fade" id="smallModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-xs" id = "modalComment">
	    <div class="modal-content">
	      <div class ="modal-header">
	      	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	      </div>
	      	<div class="modal-body">
	      		
				<span class="input-icon">
					<label for="senCommentemail"><i class="fa fa-user"></i> Email </label>
					<input id="sendCommentemail" class="form-control" type="mail" placeholder="Email">
					
				</span>
				
				<div class="form-group">
					<label for="senCommentmsg"> Commentaire </label>
					<textarea id="sendCommentmsg" class="form-control" placeholder="Commdentaire" style="height: 120px;"></textarea>
				</div>
				
				<span class="input-icon">
					<label for="cpComment"> <i class="fa fa-hand-o-right"></i>Code Postal </label>
					<input id="cpComment" class="form-control" type="text" placeholder="Code Postal">
					
				</span>
				
	      		<!--Commentaire  : <textarea name="sendCommentmsg" id="sendCommentmsg"></textarea> <br/>
				email(s) : <textarea type="text" name="sendCommentemail" id="sendCommentemail"><?php echo $this->module->id?>@<?php echo $this->module->id?>.com</textarea><br/>
				code postal : <textarea type="number" name="cpComment" id="cpComment"></textarea><br/> -->
				<a class="btn" href="javascript:sendCommentVitrine()">Send it</a><br/>
				<div id="sendCommentResult" class="result fss"></div>
				<script>
					function sendCommentVitrine(){
						params = { 
				    	   "email" : $("#sendCommentemail").val() , 
				    	   "msg" : $("#sendCommentmsg").val(),
				    	   "cp" : $("#cpComment").val(),
				    	   };
						testitpost("sendCommentResult",baseUrl+'/<?php echo $this->module->id?>/api/sendmessagevitrine',params);
						$(".modal").css("display", "none");
						resizeGraph();
					}
				</script>
	      	</div>
	    </div>
	  </div>
	</div>
</section>

<script type="text/javascript">

var vertices = [];
var linkValue;
var dataFile;
var tickNum;
var tabTick = [];
var tabId = [];
var objectTarget = null;
var width;
var height;
var anime;
var numTip = 0;
var tipCirclePack;
var tipCirclePack1;
var tipCirclePack2;
var tipCirclePack3;
var tipCirclePack4;
var datajson;
var tipOpen = false;
var svg;
function grapLinkBanner(data){
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

	 var height = $("#sectionsvg").height();

	 svg.attr("height", height)
	      .attr("width", width);
	var svg2 = d3.select("#patterns").append("svg").attr("id", "svgPath").append("defs");
	dataFile=data;
	var circleRadius = 5;
	    
    var link = svg.selectAll("line");

    var t = [];
    var n = 0;
    var compt = 0;
    $.each(data, function (k, elem) {
      compt++;
    });
    $.each(data, function (k, elem) {
      if(n<compt/2){
        elem.x = _.random(0, width/4);
        elem.y = _.random(0, height);
      }else{
        elem.x = _.random((3/4)*width, width);
        elem.y = _.random(0, height);
      }
      t[n]= elem;
      vertices[n] = [elem.x, elem.y];
      n++;

    })
    
    var nodes = svg.selectAll("circle")
      .data(t);
    var nodes2 = svg2.selectAll("images")
      .data(t);
    //nodes.call(tipCirclePack);
    var idCompt = 0;
    
    var vertices1 = [];
    var vertices2 = [];

    for (var i = 0; i<vertices.length; i ++){
      if(i<compt/2){
        vertices1[i] = vertices[i];
        var c = i+1
        console.log("i1", i)
      }
      else{
        vertices2[i-c] = vertices[i];
        }
    }
    for(var i=0; i<4; i++){
      vertices1[vertices1.length] = [0, _.random(0, height)];
      vertices1[vertices1.length] = [_.random(0, width/4), 0];
      vertices1[vertices1.length] = [_.random(0, width/4), height];
      vertices2[vertices2.length] = [width, _.random(0, height)];
      vertices2[vertices2.length] = [_.random(3/4*width, width), 0];
      vertices2[vertices2.length] = [_.random(3/4*width, width), height];
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
    link.data(linkValue).enter().append("line")
                .attr("class", "bindLine")
                .attr("x1", function(d){return d[0];})
                .attr("y1", function(d){return d[1];})
                .attr("x2", function(d){return d[2];})
                .attr("y2", function(d){return d[3];});

   
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
    nodes.enter().append("circle")
      .attr("class", "node")
      .attr("id", function(d, idCompt){idCompt++; return idCompt;})
      .attr("cy", function(d) {return d.y;})
      .attr("cx", function(d) {return d.x;})
      .attr("r", circleRadius)
      .on("mouseover", expandNode)
      .on("mouseout", contractNode);

     $("#1").d3MouseOver();
    //getTipsOpen(20);
    //animateTips(20);          

}


	

	function animateTips(c){
	    var id = _.random(1, c+1);
	    $("#"+id).d3MouseOver();
	    anime = setTimeout(function(){
	      	animateTips(c);
	    }, 10000); 
	}


	//Tooltips and the radius cercle transition on over/out

	function openTips(object, id){
        var n = 1;
        var nameTips = "";
        var commentTips = "";
        var d = null;
        var returnObj = null;
        
        $.each(dataFile, function(key,obj){
            if(n == id){
               d = obj;
               comment = obj.comment.comment;
                //console.log(obj.comment, obj["comment"]);
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
	        console.log("tips", numTip, "tabId", tabId);
	        
		    $("#"+id).css("fill", "url(#img"+id+")");
		    
	      	tip.html("<div id ='tool-d3'> <span><strong>"+ d.name+": </strong> </br>"+comment+"</span></div>")
	      	returnObj = tip.show($("#"+id));
	      }    
        return returnObj; 
      }

	function closeTips(obj, id){
        //verification des tips ouvert
        tip = chooseTips(tabTick[$.inArray(id, tabId)]).hide();
        $("#"+id).css("fill", "#ccc");

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
	    break;
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
	      //console.log("n", n, "id", id);
	       if(n == id){
	        //console.log("------------------------", obj);
	          d = obj;
	         //console.log(d);
	          if(obj.image){
	           console.log(obj.image.url)
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
	    //console.log("expandNode");
	    openTips(d3.select(this), d3.select(this).attr("id"));
	    d3.select(this).transition()
	        .duration(1000)
	        .attr("r",20)
	};


	// provides node animation for mouseout
	 function contractNode(){
	          closeTips(d3.select(this), d3.select(this).attr("id"));
	          d3.select(this).transition()
	              .duration(100)
	              .attr("r",5)

	      };



	/*----------------------------------------------------
	--- MOUSE EVENTS
	-----------------------------------------------------*/

	//launch mouseover event for the d3 graph
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

	function resizeGraph(){
		
		tabId =[];
		clearTimeout(anime);
		$("#svgGrap").remove();
		$("#svgPath").remove();
		$(".d3-tip").remove();
		$("#svg").remove();
		$("#patterns").remove();
		var graphSvg =d3.select(".svgAndImg").append("div").attr("id", "svg");
		var graphPatterns = d3.select(".svgAndImg").append("div").attr("id", "patterns");
		$("#patterns").insertBefore(".flexslider");
		$("#svg").insertBefore("#patterns");
		getMessageVitrine();
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
		        	console.log("getmessagevitby1",datajson)
		        	datajson = data;
		        	grapLinkBanner(datajson);
		        	console.log("getmessagevitby2",datajson)
		        } else {
		            console.error("bug get "+id);
		        }
		    });
		 animateTips(30);
	}


</script>