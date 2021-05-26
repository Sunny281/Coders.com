<?php

$file= 'uploadpdf/ProjectX.pdf';
$filename='ProjectX.pdf';
header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="'.$filename.'"');
@readfile($file);


?>
