<?php
require_once '../vendor/autoload.php';

$foto_original = 'mifoto.jpg';
$guardar_en = 'fotomod.jpg';


$thumb = new PHPThumb\GD($foto_original);
//redimencionar
$thumb->resize(250,250);
//recortar
$thumb->crop(50, 50, 120, 120);
$thumb->show();
$thumb->save($guardar_en);
