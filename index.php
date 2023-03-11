<?php 
   include "db/loads.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Le Monde de KiKi">
	<meta name="keywords" content="kiki, gros kiki, monde, conspiration, machination, Jesus, Europa, Europe, dernière, bataille">
	<meta name="author" content="pancarte">
	
	<title>Le Monde de KiKi</title>
	
	<link rel="stylesheet" type="text/css" href="/css/aphrodite.css">
	
	<script src="/js/chronos.js"></script>
	<script src="/lib/jquery.min_2.1.3.js"></script>
</head>

<body style="background-color: white"> 

	<h1 style="text-align: center">Le Monde de KiKi</h1>
	
	<div class="main_container" id="id_main_container">
		<div class="container_inner" id="display_div_id">
		</div>
		<div class="kk_vues"> &nbsp; kiki-vues! </div>
	</div>
	<script>
		window.onload = function () {
			<?php
			    $page = "01-KiKi-dans-le-desert";
    			if (isset($_GET['p'])) {
    			    $page = $_GET['p'];
    			}
			    echo "set_counters(" . doLoads($page). ");"; 
			?>
		};
	</script>
	 
	<div id="chapitre">
	</div>
		
	<?php
		if (isset($_GET['p'])) {
			$page = $_GET['p'];
			echo "<script> \$('#chapitre').load('/paj/$page.html')</script>";
		} else {
		    echo "<script> \$('#chapitre').load('/paj/01-KiKi-dans-le-desert.html')</script>";
		}
    ?>
    <br><br>
	<div style="text-align: center">
    	<a href="index.php?p=01-KiKi-dans-le-desert">I</a> --
    	<a href="index.php?p=02-KiKi-sacrifia-Jesus">II</a> --
    	<a href="index.php?p=03-KiKi-dans-le-Monde">III</a> --
    	<a href="index.php?p=04-KiKi-rouge">IV</a> --
    	<a href="index.php?p=05-KiKi-plan-demasque">V</a> --
    	<a href="index.php?p=06-KiKi-a-Francfort">VI</a> --
    	<a href="index.php?p=07-KiKi-nombre-magique">VII</a> --
    	<a href="index.php?p=08-KiKi-pan-pan">VIII</a> --
    	<a href="index.php?p=09-KiKi-a-Nuremberg">IX</a> --
    	<a href="index.php?p=10-KiKi-fait-son-show">X</a> --
    	<a href="index.php?p=11-KiKi-et-Internet">XI</a> --
    	<a href="index.php?p=12-KiKi-et-le-virus">XII</a>    	
	</div>
	<br><br>
	
	<div id="footer">
		<h2 style="text-align: center; color: #9933FF"> WiKi-Ki-pedia :</h2>
		
		<div style="text-align: center">
			
			<h4 style="text-align: center"> "Europa, la dernière battaille" - Introduction</h4>
			
			<!-- video -->
			<div id='container'>
				<video width='380' height='214' controls>
    				<source src='/resources/Europa-intro_fr-sub_q20.mp4' type='video/mp4' />
    				Votre navigateur ne supporte pas le tag video html5
    			</video>
			</div>
			<p>
				<a href="https://odysee.com/EUROPA-LA-DERNIERE-BATAILLE--Partie-1-Attention-eame-sensible-sabstenir:2" >
					Europa, la dernière bataille - Partie I</a>
				<!-- <br><br><br> -->
			</p>
			<p>
				<a href="/resources/Victor-E.-Marsden_The-Protocols-of-the-Learned-Elders-of-Zion_.pdf">
					Le plan-KiKi: Les protocoles des sages de Sion</a>
			</p>
			
			<h3 style="text-align: center; color: #9933FF""> Projet KiKi-code!</h3>				
			<a href="https://github.com/eternalViol3t/monde-de-kiki"> Code source du "Monde de KiKi".</a>
			<p> 	Faites "pousser", contre la KiKi censure! </p>
			<p>
				<img alt="image Qui ? mais Qui ?!" src="resources/mais-qui-qui.jpg">
			</p>
		</div>	
	</div>
	
</body>
</html>