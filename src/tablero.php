<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<style>
#div1 {width:100px;height:100px;padding:10px;border:0px solid #aaaaaa;}
table {
    border-collapse: collapse;
    border-spacing: 2px;
}
#mapa {
    background-image: url(img_flwr.gif), url(paper.gif);
    background-position: right bottom, left top;
    background-repeat: no-repeat, repeat;
    padding: 15px;
}
#page{
    width: 1280px;
    display: inline;
}

.custom-menu {
    z-index:1000;
    position: absolute;
    background:#fff; 
	color:#333;
    border: 1px solid black;
    padding: 2px;
	-moz-border-radius:5px; 
	-webkit-border-radius:5px; 
	border-radius:5px;
	-moz-box-shadow:0 0 5px #999;
	-webkit-box-shadow:0 0 5px #999; 
	box-shadow:0 0 5px #999
	
}

.lista{
	list-style:none;
	margin:0; padding:10px;
	
}
#chatBar {
  -webkit-user-select: text;
  position: absolute;
  right: 0;
  width: 260px;
  background-color: white;
  overflow: hidden;
  border-left: 1px solid black;
  height: 100%;
  top: 0;
  padding: 0;
  margin: 0;
  z-index: 100;
}
#chatContainer {
  padding: 0;
  overflow-y: auto;
  overflow-x: hidden;
  height: 100%;
  max-width: 100%;
  position: relative;
  top: 40px;
}
#chatInput {
  position: absolute;
  width: 250px;
  right: 0;
  bottom: 0;
  background-color: white;
  padding-top: 5px;
  padding-bottom: 5px;
  padding-left: 5px;
  border-top: 5px solid #F1F1F1;
  text-align: left;
  z-index: 101;
}
</style>
<script>
function allowDrop(ev) {
    ev.preventDefault();
}

function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));
}
$(document).bind("contextmenu", function(event) { 
	$("div.custom-menu").hide();
    event.preventDefault();
    $("<div class='custom-menu'><ul class='lista'><li>Tirar por...</li><li>Dibujar... </li><li>Niebla de guerra... </li></ul></div>")
        .appendTo("body")
        .css({top: event.pageY + "px", left: event.pageX + "px"});
}).bind("click", function(event) {
    $("div.custom-menu").hide();
});

</script>
</head>
<body>
	<nav class="navbar navbar-default">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="indexpostlogin1.html">USERNAME</a>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">

						<li class="dropdown">
							<a id="first-dropdown" href="indexpostlogin2.html" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" role="button" aria-expanded="false">My Adventures<span class="caret"></span></a>
						</li>
					</ul>

					<ul class="nav navbar-nav">

						<li class="dropdown">
							<a id="first-dropdown" href="indexpostlogin3.html" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" role="button" aria-expanded="false">Join an Adventure<span class="caret"></span></a>
						</li>
					</ul>
					
					<ul class="nav navbar-nav">

						<li class="dropdown">
							<a id="first-dropdown" href="fichas.html" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" role="button" aria-expanded="false">My Character Sheets<span class="caret"></span></a>
						</li>
					</ul>

					<ul class="nav navbar-nav">

						<li class="dropdown">
							<a id="first-dropdown" href="indexpostlogin4.html" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" role="button" aria-expanded="false">Forum<span class="caret"></span></a>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">

						<li class="dropdown">
							<button class="btn btn-lg btn-danger" type="button" id="doLogOut" ng-click="logOut()">
								Exit
							</button>
						</li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>


<div id = "mesa" style="width: 85%; height:100vh; overflow-y: scroll; overflow-x: scroll;">


<table border = 1 style="border-color: #aaaaaa;">


<br>

<?php

for ($x = 0; $x <= 20; $x++) { 
	echo "<tr>";
	for($y=0; $y<20; $y++){
		echo "<td>";
		if($x == 0 and $y == 5):
			echo "<div id='div1' ondrop='drop(event)' ondragover='allowDrop(event)'><img id='drag1' src='img/Clown.gif' draggable='true' ondragstart='drag(event)' width='60' height='100' style='display: block; margin-left: auto; margin-right: auto; margin-top: auto;'></div>";
		elseif($x == 0 and $y == 0):
			echo "<div id='div1' ondrop='drop(event)' ondragover='allowDrop(event)'><img id='drag2' src='img/Poring.gif' draggable='true' ondragstart='drag(event)' width='100' height='100' style='display: block; margin-left: auto; margin-right: auto; margin-top: auto;'></div>";
		elseif($x == 0 and $y == 1):
			echo "<div id='div1' ondrop='drop(event)' ondragover='allowDrop(event)'><img id='drag3' src='img/RO_Lunatic.gif' draggable='true' ondragstart='drag(event)' width='60' height='60' style='display: block; margin-left: auto; margin-right: auto; margin-top: auto;'></div>";
		elseif($x == 1 and $y == 5):
			echo "<div id='div1' ondrop='drop(event)' ondragover='allowDrop(event)'><img id='drag4' src='img/crusader.gif' draggable='true' ondragstart='drag(event)' width='100' height='100' style='display: block; margin-left: auto; margin-right: auto; margin-top: auto;'></div>";
		elseif($x == 2 and $y == 5):
			echo "<div id='div1' ondrop='drop(event)' ondragover='allowDrop(event)'><img id='drag5' src='img/sniper.gif' draggable='true' ondragstart='drag(event)' width='100' height='100' style='display: block; margin-left: auto; margin-right: auto; margin-top: auto;'></div>";
		
		else:
			echo "<div id='div1' ondrop='drop(event)' ondragover='allowDrop(event)'></div>";
			echo "</td>";
		endif;
	}
	echo"</tr>";
}
?>

</table>
</div>

<div id = "chatBar" style = "-webkit-user-select: text;
  position: absolute;
  right: 0;
  width: 15%;
  background-color: white;
  overflow: hidden;
  border-left: 1px solid black;
  height: 100%;
  top: 0;
  padding: 0;
  margin: 0;
  z-index: 100;">
<div id = "chatContainer">
<div id = "mensaje" style = "
  padding-left: 45px;
  padding-right: 5px;
  padding-bottom: 7px;
  background-color: #F1F1F1;
  position: relative;">Bardo: Hola </br>Paladin: Vamos a pelear! </div>
</div>
<div id = "mensaje2" style = "
  padding-left: 45px;
  padding-right: 5px;
  padding-bottom: 7px;
  background-color: #F1F1F1;
  position: relative;">Paladin: Vamos a luchar!</div>
</div>

<div id = "chatInput">
<textArea style = "width: 92%; height: 50px"></textArea>
</div>
</div>
</body>
</html>
