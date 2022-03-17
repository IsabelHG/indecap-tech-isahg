<?php

$mi_pdf = '../assets/pdf/terminos-condiciones.pdf';
header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="Términos y Condiciones y Políticas de Privacidad de Datos INDECAP TECH"');
readfile($mi_pdf);

?>