<?php
$page= isset($_GET["page"]) ? $_GET["page"] : 1;
?>
<html>
<head>
<link rel="stylesheet" href="css/style.css?<?php echo $time ?>">

</head>
<body>


<div id="menu">
<ul>
	<li>
	<a <?php if($page==1){ ?>class="active"<?php } ?> href="index.php?page=1">home</a>

	
	
	</li>

	<li class="dropdown"><a <?php if($page==2){ ?>class="active"<?php } ?> href="index.php?page=2">Quizz</a>
	<div class="dropdown-content">
		<p><a href="index.php?page=1">Maths</a></p>
		<p><a href="index.php?page=1">Anglais</a></p>
		<p><a href="index.php?page=1">Physique</a></p>
		<p><a href="index.php?page=1">...</a></p>

		
	</div>
	</li>
	<li class="dropdown"><a <?php if($page==3){ ?>class="active"<?php } ?> href="index.php?page=3">Niveaux</a>
	<div class="dropdown-content">
		<p><a href="index.php?page=1">graph</a></p>
		<p><a href="index.php?page=1">score</a></p>
		<p><a href="index.php?page=1">graph</a></p>


	</div>
	</li>
</ul>
<?php 
switch ($page) {
		case 1 :
			include("page1.php");
			break;
		case 2 :
			include("page2.php");
			break;
		case 3 :
			include("page3.php");
			break;
}

?>


</div>
</body>
</html>
