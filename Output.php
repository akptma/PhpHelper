<?php

require_once "ClassHelper/Helper.php";
$GetHelperClass = new AnyHelper();

$StringEncode = "Andika@Local";
$ResultStringEncode = $GetHelperClass->Encode($StringEncode);

$StringDecode = "UVc1a2FXdGhRRXh2WTJGcw==";
$ResultStringDecode = $GetHelperClass->Decode($StringDecode);

$NumberFormat = "120.000";
$ResultNumberFormat = $GetHelperClass->NumberFormat($NumberFormat);


$ConvDate = (new \DateTime())->format('Y-m-d H:i:s') ;
$ResultConvDate = $GetHelperClass->ConvDateIndonesia($ConvDate);

$split = explode(' ', $ConvDate);
var_dump($ResultConvDate);




