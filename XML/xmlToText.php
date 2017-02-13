<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>XML - Transformation de documents XML</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/text-xml.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <?php
    $xmlToText = true;
    include_once 'templates/navbar.php';

	$xslDoc = new DOMDocument();
	$xslDoc->load("xml/jeux.xsl");

	$xmlDoc = new DOMDocument();
	$xmlDoc->load("xml/jeux-sans-css.xml");

	$proc = new XSLTProcessor();
	$proc->importStylesheet($xslDoc);?>

	<div class="container"> 
		<h3>Texte brut</h3>
		<?php echo $proc->transformToXml($xmlDoc);?>

		<h3>Texte brut avec CSS</h3>
		<div class="apply-css">
			<?php echo $proc->transformToXml($xmlDoc);?>
		</div>

		<h3>Texte avec balises</h3>
		<?php echo htmlentities($proc->transformToXml($xmlDoc));?>
	</div>
</body>
</html>