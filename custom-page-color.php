<?php /* Template Name: Color Project Page */ ?>
<html>
<head>
<title>Color Project</title>
<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.0.8/semantic.min.css"></link>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.0.8/semantic.min.js"></script>
<style type="text/css">
.row{
	min-height: 25%;
}
#a1,#a2,#a3,
#a4,#a5,#a6,
#a7,#a8,#a9{
	margin-top: -1rem;
	margin-bottom: -1rem;
	padding-top: 1rem;
	padding-bottom: 1rem;
	color: white;
}
input[type="submit"]{
	display: block;
	margin: 0px auto;
	color: black !important;
}
</style>
<script>
$(document).ready(function(){
	$('#custom-container').css({ height: $(window).innerHeight() });

	function getRandomColor() {
	    var letters = '0123456789ABCDEF'.split('');
	    var color = '#';
	    for (var i = 0; i < 6; i++ ) {
	        color += letters[Math.floor(Math.random() * 16)];
	    }
	    return color;
	}
	function HexToR(h) {return parseInt((cutHex(h)).substring(0,2),16)}
	function HexToG(h) {return parseInt((cutHex(h)).substring(2,4),16)}
	function HexToB(h) {return parseInt((cutHex(h)).substring(4,6),16)}
	function cutHex(h) {return (h.charAt(0)=="#") ? h.substring(1,7):h}
	function changeColors(){
		r = HexToR(hex);
		g = HexToG(hex);
		b = HexToB(hex);
		for( var i = 0; i <= numOfBox; i++ ){

			r += 8;
			b += 8;
			g += 8;

			$('#a'+i).css('background-color','rgb('+r+','+g+','+b+')');
			$('#a'+i+' span.text').empty();
			$('#a'+i+' span').append( 'rgb('+r+','+g+','+b+')' );
		}
	}

	var numOfBox = 9;
	var r,g,b = 0;
	var hex = getRandomColor();
	changeColors();

	
	$('input[type="submit"]').click(function(){
		hex = getRandomColor();
		changeColors();
	});
});


</script>
</head>

<body>
<div id="custom-container" class="ui equal width center aligned padded grid">
	
	<div class="row">

		<div id="a1"class="column">
			<span class="text"></span>
		</div>

		<div id="a2"class="column">
			<span class="text"></span>
		</div>

		<div id="a3"class="column">
			<span class="text"></span>
		</div>

	</div>
	<div class="row">

		<div id="a4"class="column">
			<span class="text"></span>
		</div>

		<div id="a5"class="column">
			<input type="submit" value="Suprise Me"></input>
			<span class="text"></span>
		</div>

		<div id="a6"class="column">
			<span class="text"></span>
		</div>

	</div>

	<div class="row">

		<div id="a7"class="column">
			<span class="text"></span>
		</div>

		<div id="a8"class="column">
			<span class="text"></span>
		</div>

		<div id="a9"class="column">
			<span class="text"></span>
		</div>

	</div>
</div>
</body>
</html>