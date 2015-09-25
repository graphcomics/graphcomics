<?php
error_reporting(0);
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="styles.css">
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
</head>
<title>Graph Comics</title>
<body>
	<div id="main">
		<div id="top">
			<h1>Graph Comics</h1>
		</div>
		<div class="center" id="menu">

			<div id="svgExamples1">				
			</div>
			
			<p class="authors">Author list withheld for blind review</p>

<!--             <img height="30px" src="figures/paper.png"/>
            <a href="multipiles.m4v">Read</a>
            <img height="30px" src="figures/cite.png"/>
            <a href="bibtex.tex">Cite</a>
 -->
<!--              <img height="30px" src="figures/mail.png"/>
            <a href="mailto:dummy@me.org">Mail</a>
 -->
             <img height="30px" src="figures/eye65.png"/>
            <a href="#examples">Examples</a>
	        <img height="30px" src="figures/notebook88.png"/>
            <a href="#guidelines">Design Considerations</a>
	        <img height="30px" src="figures/notebook88.png"/>
            <a href="#symbols">Symbolic Representations of Change</a>
	        <img height="30px" src="figures/notebook88.png"/>
            <a href="#sketches">Design Space Exploration</a>
	        <img height="30px" src="figures/notebook88.png"/>
            <a href="#whiteboard">Sketches</a>
		</div>

		<div>
		<div id="left" class="col">
			<h2>What are graph comics?<a href="#menu"><img height="20px" style="margin-left:10px;" src="figures/uparrow32.png"/></a></h2>
			Graph comics are a visual way to communicate changes and findings found in dynamic networks. Graph comics are inspired by traditional comics. 
	This site provides graph comic examples
			and eight design considerations to structure the process of creating such comics. Our design considerations are the following (more details are in the paper): 

			<ol>
				<li><a href="#guideline-1">Representation of Graph Elements</a></li>
				<li><a href="#guideline-2">Representation of Change</a></li>
				<li><a href="#guideline-3">Temporality of Change</a></li>
				<li><a href="#guideline-4">Element Identity</a></li>
				<li><a href="#guideline-5">Cast of Character</a></li>
				<li><a href="#guideline-6">Level of Detail</a></li>
				<li><a href="#guideline-7">Overview and Detail</a></li>
				<li><a href="#guideline-8">Representation of Multvariate Networks</a></li>
			</ol>
		</div>


		<div id="right" class="col">

		</div>

		<div id="moreexamples" class="center">
			<h2>Examples<a href="#menu"><img height="20px" style="margin-left:10px;" src="figures/uparrow32.png"/></a></h2>
			<div id="svgExamples2"></div>
		</div>
		<div id="moreexamples" class="center">
			<h2>Design Guidelines<a href="#menu"><img height="20px" style="margin-left:10px;" src="figures/uparrow32.png"/></a></h2>
			<div id="guidelines"></div>

			<h3 id="guideline-1">1. Visual Representation Of Graph Elements</h3>
			<img src="guidelines\guidelines-1.png" class="guideline"/> 
<!-- 			<p class="guidelinetext">To show characters and objects, most traditional comics use depictions of the real world. The elements we consider in graph comics are more abstract and limited to three classes: nodes, links and groups (or cluster). Since node-link diagrams are familiar to a wide audience, we propose to represent nodes by circles or points, links by lines, and groups by contours or enclosing shapes (Figure 5).  These marks can be further differentiated by using unique shapes, colors, or other visual encodings (Figure 5) as well as textual labels. Throughout a comic, the visual encoding of elements may vary according to their importance with respect to the story (C5) or its level of detail (C6). </p>
 -->			<h3 id="guideline-2" >2. Visual Representation Of Change</h3>
			<img src="guidelines\guidelines-2.png" class="guideline"/> 
			<h3 id="guideline-3" >3. Temporality of Change</h3>
			<img src="guidelines\guidelines-3.png" class="guideline"/> 
			<h3 id="guideline-4" >4. Element Identity</h3>
			<img src="guidelines\guidelines-4.png" class="guideline"/> 
			<h3 id="guideline-5" >5. Cast of Character</h3>
			<img src="guidelines\guidelines-5.png" class="guideline"/> 
			<h3 id="guideline-6" >6. Level of Detail</h3>
			<img src="guidelines\guidelines-6.png" class="guideline"/> 
			<h3 id="guideline-7" >7. Overview and Detail</h3>
			<img src="guidelines\guidelines-7.png" class="guideline"/> 
			<h3 id="guideline-8" >8. Representation of Multivariate Networks</h3>
			<img src="guidelines\guidelines-8.png" class="guideline"/> 
			
		</div>
		
		<div id="symbols" class="center">
			<h2>Symbolic Representations of Change<a href="#menu"><img height="20px" style="margin-left:10px;" src="figures/uparrow32.png"/></a></h2>
			<a href="symboltables/symboltable-nodes.png"><img src="symboltables/symboltable-nodes.png" class="table"/></a>
			<a href="symboltables/symboltable-clusters.png"><img src="symboltables/symboltable-clusters.png" class="table"/></a>
		</div>


		<div id="sketches" class="center">
			<h2>Sketches<a href="#sketches"><img height="20px" style="margin-left:10px;" src="figures/uparrow32.png"/></a></h2>
		</div>

		<div id="whiteboard" class="center">
			<h2>Design Space Exploration<a href="#whiteboard"><img height="20px" style="margin-left:10px;" src="figures/uparrow32.png"/></a></h2>
		</div>
		
		
	</div>
	<script src="lib/d3.min.js"></script>
    <script src="lib/jquery.js"></script>
	<script type="text/javascript">

	// teaser examples
	var getCount = 0
	$.get('teaser_pngs', function(data){
		var list = data.split('href="')
        var file;
        var svgString;
        for(var i=0 ; i<list.length; i++){
            if(list[i].indexOf('.png') == -1)
                continue
            file = 'teaser_pngs/' + list[i].split('"')[0]
            var a = d3.select('#svgExamples1').append('a')
            	.attr('href', file)
	
          a.append('img')
            	.attr('class', 'galleryPNG')
            	.attr('src', file)
        }
	})

	// load examples
	var getCount = 0
	$.get('gallery_pngs', function(data){
		var list = data.split('href="')
        var file;
        var svgString;
        for(var i=0 ; i<list.length; i++){
            if(list[i].indexOf('.png') == -1)
                continue
            file = 'gallery_pngs/' + list[i].split('"')[0]
            var a = d3.select('#svgExamples2').append('a')
            	.attr('href', file)
	
          a.append('img')
            	.attr('class', 'galleryPNG')
            	.attr('src', file)
        }
	})

	// load sketches
	var getCount = 0
	$.get('sketches', function(data){
		var list = data.split('href="')
        var file;
        var svgString;
        for(var i=0 ; i<list.length; i++){
            if(list[i].indexOf('.png') == -1)
                continue
            file = 'sketches/' + list[i].split('"')[0]
            var a = d3.select('#sketches').append('a')
            	.attr('href', file)
	
          a.append('img')
            	.attr('class', 'sketch')
            	.attr('src', file)
        }
	})

	// load sketches
	var getCount = 0
	$.get('whiteboard', function(data){
		var list = data.split('href="')
        var file;
        var svgString;
        for(var i=0 ; i<list.length; i++){
            if(list[i].indexOf('.JPG') == -1)
                continue
            file = 'whiteboard/' + list[i].split('"')[0]
            var a = d3.select('#whiteboard').append('a')
            	.attr('href', file)
	
          a.append('img')
            	.attr('class', 'whiteboard')
            	.attr('src', file)
        }
	})

	// load guidelines
	// getCount = 0
	// $.get('design_considerations', function(data){
	// 	var list = data.split('href="')
 //        var file;
 //        var svgString;
 //        for(var i=0 ; i<list.length; i++){
 //            if(list[i].indexOf('.png') == -1)
 //                continue
 //            file = 'design_considerations/' + list[i].split('"')[0]
 //            d3.select('#designguidelines').append('img')
 //            	.attr('class', 'guideline')
 //            	.attr('src', file)
 //        }
	// })

	var gallaryPiles = []
	var SIZE = 250
	var MARGIN = 10
	var LINE_WIDTH_FACTOR=3
	var RADIUS=2
	function loadCurve(file, elementId){
		console.log('elementId', elementId)
		var p = new CurvePile(file, gallaryPiles.length, true, elementId)
		p.load()
		gallaryPiles.push(p)
	}

	// function loadSvg(file, elementId){
	// 	console.log('elementId', elementId)

	// }
	</script>
</body>
</html>
