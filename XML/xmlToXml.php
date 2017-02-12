<?php
header("Content-type: text/xml");
$xslDoc = new DOMDocument();
$xslDoc->load("xml/jeux.xsl");

$xmlDoc = new DOMDocument();
$xmlDoc->load("xml/jeux-sans-css.xml");

$proc = new XSLTProcessor();
$proc->importStylesheet($xslDoc);
echo $proc->transformToXml($xmlDoc);