<?php
$page= isset($_GET["page"]) ? $_GET["page"] : 1;
?>
<html>
<head>
<link rel="stylesheet" href="css/style.css?<?php echo $time ?>">


</head>
<body class=fond >


<div id="menu">

<ul>
	<li>
	<a <?php if($page==1){ ?>class="active"<?php } ?> href="index.php?page=1">home</a>
	</li>
	<li class="dropdown"><a>Quizz</a>
	<div class="dropdown-content">
		<p><a <?php if($page==21){ ?>class="active"<?php }?>href="index.php?page=21">Maths</a></p>
		<p><a <?php if($page==22){ ?>class="active"<?php } ?>href="index.php?page=22">Anglais</a></p>
		<p><a <?php if($page==23){ ?>class="active"<?php } ?>href="index.php?page=23">Physique</a></p>
		<p><a <?php if($page==24){ ?>class="active"<?php } ?>href="index.php?page=24">...</a></p>

		
	</div>
	</li>
	<li class="dropdown"><a>Niveaux</a>
	<div class="dropdown-content">
		<p><a <?php if($page==31){ ?>class="active"<?php } ?>href="index.php?page=31">graph</a></p>
		<p><a <?php if($page==32){ ?>class="active"<?php } ?>href="index.php?page=32">score</a></p>
		<p><a <?php if($page==33){ ?>class="active"<?php } ?>href="index.php?page=33">graph</a></p>


	</div>
	</li>
</ul>

<div class=ecrie>

</div>
<div class=connexion>
	<ul>
	<li><a <?php if($page==4){ ?>class="active"<?php } ?> href="index.php?page=4">Connexion</a></li>
	<li><a <?php if($page==5){ ?>class="active"<?php } ?> href="index.php?page=5">Inscription</a></li>
	</ul>
	
</div>
</div>
<?php 
switch ($page) {
		case 1:
			include("Home.php");
			break;
		case 21 :
			include("Maths.php");
			break;
		case 22 :
			include("Anglais.php");
			break;
		case 23 :
			include("Physique.php");
			break;
		case 31 :
			include("Graph.php");
			break;
		case 32 :
			include("Score.php");
			break;
		case 33 :
			include("Graph.php");
			break;
		case 4 :
			include("Connexion.php");
			break;
		case 5 :
			include("Inscription.php");
			break;

}

?>



</body>
</html>
