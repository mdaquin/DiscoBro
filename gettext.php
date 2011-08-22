<?php 

$document = file_get_contents($_GET['url']);


$document = preg_replace("/<script.*?script>/smi", "", $document);
$document = preg_replace("/<style.*?style>/smi", "", $document);
$document = preg_replace("/<[^<\n]*?>/smi", "", $document);

$document = str_replace("\n"," ", $document);
$document = str_replace("&nbsp;"," ", $document);
$document = str_replace("."," ", $document);
$document = str_replace("/"," ", $document);
$document = str_replace(",","", $document);
$document = str_replace("|","", $document);
$document = str_replace(":","", $document);
$document = str_replace("!","", $document);
$document = str_replace("?","", $document);
$document = str_replace("<","", $document);
$document = str_replace(">","", $document);
$document = str_replace("--","", $document);
$document = str_replace("\t"," ", $document);
$document = str_replace("\r"," ", $document);
$document = str_replace('"'," ", $document);
$document = str_replace('('," ", $document);
$document = str_replace(')'," ", $document);

$document = preg_replace("/ +/"," ", $document);

$document=strtolower($document);

echo $document;

?>