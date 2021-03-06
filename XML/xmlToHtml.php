<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>XML - Transformation de documents XML</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <?php
    $xmlToHtml = true;
    include_once 'templates/navbar.php';

	$xslDoc = new DOMDocument();
	$xslDoc->load("xml/jeux-html.xsl");

	$xmlDoc = new DOMDocument();
	$xmlDoc->load("xml/jeux-sans-css.xml");

	$proc = new XSLTProcessor();
	$proc->importStylesheet($xslDoc);?>

	<div class="container">
		<?php echo $proc->transformToXML($xmlDoc);?>
	</div>
</body>
</html>