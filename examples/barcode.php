<?php

require_once("../BarcodeBase.php");
require_once("../Code39.php");



$width = isset($_GET['width'])?$_GET['width']:200;
$height = isset($_GET['height'])?$_GET['height']:40;
$barcode = isset($_GET['barcode'])?$_GET['barcode']:"No Barcode";


$barcodeObj = new emberlabs\Barcode\Code39();
$barcodeObj->setData($barcode);
$barcodeObj->setDimensions($width, $height);
$barcodeObj->setFontSize(5);
$barcodeObj->enableHumanText(true);
$barcodeObj->display();


