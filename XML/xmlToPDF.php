<?php
    $content = file_get_contents('t3.html');

    require_once('html2pdf/vendor/autoload.php');
    $html2pdf = new HTML2PDF('P','A4','fr');
    $html2pdf->WriteHTML($content);
    $html2pdf->Output('exemple.pdf');
?>
