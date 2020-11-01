<!DOCTYPE html>
<html>
	<head>

	<!-- Site JavaScript Open-->

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
	<title>Video Gallery</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="robots" content="index,follow" />
	<link rel="shortcut icon" href="images/favicon.ico" />
	<link rel="stylesheet" href="css/stratosfera.css" type="text/css" />
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	<script src="../ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/jquery-ui-1.8.16.custom.min.js"></script>
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="js/slides.min.jquery.js"></script>
	<script type="text/javascript" src="js/jquery.fitvids.js"></script>
	<script type="text/javascript" src="js/slides.min.jquery.js"></script>
	<script type="text/javascript" src="js/jquery.animate-colors-min.js"></script>
	<script type="text/javascript" src="js/jquery.backgroundPosition.js"></script>
	<script type="text/javascript" src="js/respond.min.js"></script>
	<script type="text/javascript" src="js/jquery.touchwipe.min.js"></script>
	<script type="text/javascript" src="js/misc.js"></script>
	<script type="text/javascript" src="js/jquery.carouFredSel.js"></script>

	<!-- Site JavaScript Close-->

	<!-- Media Player JavaScript Open-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<script src="Media_Player/build/jquery.js"></script>
	<script src="Media_Player/src/js/me-namespace.js" type="text/javascript"></script>
	<script src="Media_Player/src/js/me-utility.js" type="text/javascript"></script>
	<script src="Media_Player/src/js/me-i18n.js" type="text/javascript"></script>
	<script src="Media_Player/src/js/me-plugindetector.js" type="text/javascript"></script>
	<script src="Media_Player/src/js/me-featuredetection.js" type="text/javascript"></script>
	<script src="Media_Player/src/js/me-mediaelements.js" type="text/javascript"></script>
	<script src="Media_Player/src/js/me-shim.js" type="text/javascript"></script>
	<script src="Media_Player/src/js/mep-library.js" type="text/javascript"></script>
	<script src="Media_Player/src/js/mep-player.js" type="text/javascript"></script>
	<script src="Media_Player/src/js/mep-feature-playpause.js" type="text/javascript"></script>
	<script src="Media_Player/src/js/mep-feature-progress.js" type="text/javascript"></script>
	<script src="Media_Player/src/js/mep-feature-time.js" type="text/javascript"></script>
	<script src="Media_Player/src/js/mep-feature-tracks.js" type="text/javascript"></script>
	<script src="Media_Player/src/js/mep-feature-volume.js" type="text/javascript"></script>
	<script src="Media_Player/src/js/mep-feature-stop.js" type="text/javascript"></script>
	<script src="Media_Player/src/js/mep-feature-fullscreen.js" type="text/javascript"></script>
	<link rel="stylesheet" href="Media_Player/src/css/mediaelementplayer.css" />
	<link rel="stylesheet" href="Media_Player/src/css/mejs-skins.css" />
	<style>
#container {
	width: 1000px;
	margin: 20px auto;
}
#video-container {
	display: none;
}
</style>

	<!-- Media Player JavaScript Close -->

	</head>
	<body>

<!--BEGIN HEADER-->
<?php include_once("include/header.php"); ?>
<!--EOF HEADER-->

<div id="container">

	<video width="640" height="360" id="player1" controls="controls" preload="none" poster="Media_Player/media/echo-hereweare.jpg">
	
		<source src="All_Punjab_1.webm"  type="video/webm" /> 	
			
		<track kind="subtitles" src="Media_Player/media/mediaelement.srt" srclang="en"  ></track>
		
	</video>



      <h1 id="vtitle">All Punjab Hizb-ur-Rahman Inter Madrassa Debate Competition</h1>
      <div style="float:left; margin: 0 20px 0px 0;">
    <iframe  name="hamza" id="hamza" width="600" height="400" src="All_Punjab_1.webm"> </iframe>
  </div>
  <div style="text-align:center !important; background-color: #F4F4F4; border:1px solid grey; padding:5px; height:400px; overflow:auto;" >
  
      <a onclick='$("#vtitle").html("Molana Ghulam Muhammad Saeedi Sahib Result Announcment");' href="All_Punjab_Debate_2.webm" target="hamza">
	  <img style="margin-top:15px" width="200px" height="auto" src="images/All_Punjab_Debate_Competition.png"  /></a> <br/>
      <h4>Molana Ghulam Muhammad Saeedi Sahib Result Announcment</h4>
	  
	  <br><br>
	  
	   <a onclick='$("#vtitle").html("Noor-e-KIbriya Conference G-8 Islamabad");' href="islamabad_g8_try.webm" target="hamza"><img style="margin-top:15px" width="200px" height="auto" src="images/kibriya islamabad.jpg"  /></a> <br/>
      <h3> Noor-e-KIbriya Conference G-8 Islamabad</h3>
	  <br><br>

	</div>
      <br/>
      <br/>
      <br/>
	  
    </div>
<!--BEGIN FOOTER-->
<?php include_once("include/footer.php"); ?>
<!--EOF FOOTER-->

</body>
</html>