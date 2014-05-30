<?php
/*
    *============================================================================================*
    * Framework : Bsolidaire
    * Author : Bsolidaire
    * Date : 24/05/2010
    * Version : 1.0
    *============================================================================================*
*/
require_once 'include/classes/base/Autoload.classe.php';
$init = new Autoload();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Bsolidaire</title>
		<meta name="description" content="Bsolidaire project" />
		<meta name="author" content="Bsolidaire" />
		<link rel="stylesheet" href="styles/bibliotheque.css" />
		<link rel="stylesheet" href="styles/style.css" />
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,900" type="text/css" rel="stylesheet">
		<!--[if lte IE 7]>
			<link rel="stylesheet" href="styleie.css" type="text/css" media="screen" />
		<![endif]-->
		<!-- Bibliothéque modernizr + htmlshiv -->
                <script src="javascript/modernizr.js"></script>
	</head>
	<body role="document" itemscope="itemscope" itemtype="http://schema.org/WebPage">
		<!-- Header -->
		<?php require("include/header/header.php"); ?>
		
		<!-- Menu principal -->
		<?php require("include/menu/menu.php"); ?>
		
		<!-- Contenu principal -->
		<section role="main" itemprop="mainContentOfPage">
		
		<?php
		if(isset($_GET['page'])) {
			if($_GET['page']=='livres') {
				require("include/pages/book.php");
			}
			else if($_GET['page']=='films') {
				require("include/pages/movie.php");
			}
			else if($_GET['page']=='jeuxVideos') {
				require("include/pages/gaming.php");
			}
			else if($_GET['page']=='jeuxSociete') {
				require("include/pages/party.php");
			}
			else if($_GET['page']=='scolaire') {
				require("include/pages/school.php");
			}
		}
		?>
		</section>
		
		<!-- Pied de page -->
		<?php require("include/footer/footer.php"); ?>
		
		<script src="javascript/bsolidaire.js"></script>	
	</body>
</html>