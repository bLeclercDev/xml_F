<?php
   $xslDoc = new DOMDocument();
   $xslDoc->load("le_nom_de_votre_choix.xsl");

   $xmlDoc = new DOMDocument();
   $xmlDoc->load("le_nom_que_vous_voulez.xml");

   $proc = new XSLTProcessor();
   $proc->importStylesheet($xslDoc);
   echo $proc->transformToXML($xmlDoc);
?>