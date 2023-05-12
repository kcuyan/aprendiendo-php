<?php
require '../vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new Html2Pdf();

//recoger la vista a imprimir archivo PHP
ob_start();
require 'pdf_para_generar.php';
$html = ob_get_clean();
$html2pdf->writeHTML($html);
$html2pdf->output('pdf_generado.pdf');