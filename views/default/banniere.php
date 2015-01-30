<script src="http://code.jquery.com/jquery.js"></script>
<section id="sectionsvg" class="section">
	<div class="svgAndImg">
		<div id="svg"></div>
		<div id="patterns"></div>
		<div class="flexslider">
			<ul class="slides">
			<li>
				<div class="imgSvg" id="slide1">
					<img src="images/slider/slide3.png" style="margin-left:'auto'; margin-right:'auto';"/>
					<h1>Découvrez <strong>Pixel Humain</strong></h1>
		            	<h3>Le premier réseau social citoyen libre<br>
		Citoyens, Associations, Entreprises, Collectivités : <br>
		Découvrez ce qui se passe en ce moment dans votre commune<br>
		Participez aux discussions et actions citoyennes qui vous tiennent à cœur.</h3>
				</div>
			</li>
			<li>
				<div class="imgSvg" id="slide1">
					<img src="images/slider/slide4.png" style="margin-left:'auto'; margin-right:'auto';"/>
					<h1>Découvrez <strong>Pixel Humain</strong></h1>
		            	<h3>Le premier réseau social citoyen libre<br>
		Citoyens, Associations, Entreprises, Collectivités : <br>
		Découvrez ce qui se passe en ce moment dans votre commune<br>
		Participez aux discussions et actions citoyennes qui vous tiennent à cœur.</h3>
				</div>
			</li>
			</ul>
		</div> 

	</div>
</section>

<script type="text/javascript">


var link;
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
var tipCirclePack0;
var tipCirclePack1;
var tipCirclePack2;
var tipCirclePack3;
var tipCirclePack4;



function grapLinkBanner(datafile){
 
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

  	var svg = d3.select("#svg").append("svg")
      .call(tipCirclePack1)
      .call(tipCirclePack2)
      .call(tipCirclePack3)
      .call(tipCirclePack4)
      .call(tipCirclePack);

	  width = $("#sectionsvg").width();

	  var height = $("#sectionsvg").height();

	  svg.attr("height", height)
	      .attr("width", width);
	var svg2 = d3.select("#patterns").append("svg").append("defs");
	  d3.json(datafile, function(error, data) {
	    dataFile=data;
	    var circleRadius = 10;
	    
	    link = svg.selectAll("line");

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

	    nodes.append("image")
	      .attr("xlink:href", "images/img3.png")



	    for (var i = 0; i<vertices.length; i ++){
	      if(i<compt/2){
	        vertices1[i] = vertices[i];
	      }
	      else{
	        vertices2[i-compt/2] = vertices[i];
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

	    getTipsOpen(20);
	    animateTips(20, true);          
	})
	}


	function getTipsOpen(c){
	  var id = [];
	  for(var i=0; i<5; i++){
	    var n = _.random(1, c)
	    while($.inArray(n, id) != -1){
	      n=_.random(1, c);
	    }
	    id[i] = n;
	  }
	  //console.log(id);
	}

	function animateTips(c, b){
	  
	  if(b == true){
	    var id = _.random(1, c);
	    $("#"+id).d3MouseOver();
	      anime = setTimeout(function(){
	      animateTips(c, true);
	    }, 5000); 
	  }else{
	    clearTimeout(anime);
	  }
	}


	//Tooltips and the radius cercle transition on over/out

	function openTips(object, id){
        var n = 1;
        var nameTips = "";
        var commentTips = "";
        var d = null;
        var returnObj = null;
        console.log("tab", tabTick,"tabId", tabId);
        $.each(dataFile, function(key,obj){
            //console.log("n", n, "id", id);
             if(n == id){
              //console.log("------------------------", obj);
                d = obj;
                comment = obj.comment.comment;
                //console.log(obj.comment, obj["comment"]);
              }
              n++
          });
        var n = _.random(1, 5);
        tip = chooseTips(n);
        
        //verification des tips ouvert
        var index = $.inArray(n, tabTick);
        if(index !=-1){
          tabTick = $.grep(tabTick, function(value) {
            return value != n;
          });
          
          //console.log(tabId[index]);
          var indexTab = tabId[index];
          if($.inArray(indexTab, tabId)==-1){
            $("#"+indexTab).d3MouseOut();
          }
  
          $("#"+indexTab).css("fill", "#ccc");
          tabId = $.grep(tabId, function(value) {
            return value != indexTab;
          });
          if($.inArray(indexTab, tabId)==-1){
            $("#"+indexTab).d3MouseOut();
          }
        }
        if($.inArray(id, tabId) ==-1){
          tabTick.push(n);
          tabId.push(id);
          $("#"+id).css("fill", "url(#img"+id+")");
        //console.log("tab", tabTick,"tabId", tabId);
          tip.html("<div id ='tool-d3'> <span><strong>"+ d.name+": </strong> </br>"+comment+"</span></div>")
          returnObj = tip.show(object); 
        }
        return returnObj;  
      }

	function closeTips(obj, id){
        var n = 1;
        var n = _.random(1, 5);
        tip = chooseTips(n);
        
        //verification des tips ouvert
        var index = $.inArray(id, tabId);

        if(index !=-1){
          var indexTab = tabId[index];
          console.log(index, "indextab", indexTab);
          tabId = $.grep(tabId, function(value) {
            return value != indexTab;
          });
          var indexTick = tabTick[index];
          $("#"+indexTab).css("fill", "#ccc");

          tabTick = $.grep(tabTick, function(value) {
            return value != indexTick;
          });
          console.log("indexTick", indexTick);
          tip = chooseTips(indexTick);
          tip.hide(obj);
          console.log(tabId, "tabTick", tabTick);
      }
	    }

	// Choose of the tooltip layout
	function chooseTips(n){
	  
	  var tips;
	  switch(n){
	    case(1):
	      tips= tipCirclePack;
	    break;
	    case(2):
	      tips= tipCirclePack1;
	    break;
	    case(3):
	      tips = tipCirclePack2;
	    break;
	    case(4):
	      tips = tipCirclePack3;
	    break;
	    case(5):
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
	           //console.log(obj.image)
	            url = path+obj.image.url;
	          }
	          if(!url){
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
	              .attr("r",10)

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

	function resizeGraph(datafile){
	  $("#svg").remove();
	  $("#patterns").remove();
	  var graphSvg =d3.select(".svgAndImg").append("div").attr("id", "svg");
	  var graphPatterns = d3.select(".svgAndImg").append("div").attr("id", "patterns");
	  $("#patterns").insertBefore(".flexslider");
	  $("#svg").insertBefore("#patterns");
	  animateTips(null, false);
	  grapLinkBanner(datafile);
	}
</script>