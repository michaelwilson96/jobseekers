<?php

function calc_postcode_seperation($postcode_one, $post){
// PCODE A
$result=mysql_query("SELECT * FROM postcodes WHERE Pcode='$postcode_one' LIMIT 1");
$row=mysql_fetch_array($result);
$gridn[0]=$row['Grid_N'];
$gride[0]=$row['Grid_E'];
// PCODE B
$result=mysql_query("SELECT * FROM postcodes WHERE Pcode='$post' LIMIT 1");
$row=mysql_fetch_array($result);
$gridn[1]=$row['Grid_N'];
$gride[1]=$row['Grid_E'];
// TAKE GRID REFS FROM EACH OTHER.
$distance_n=$gridn[0]-$gridn[1];
$distance_e=$gride[0]-$gride[1];
// CALCULATE THE DISTANCE BETWEEN THE TWO POINTS
$hypot=sqrt(($distance_n*$distance_n)+($distance_e*$distance_e));
$kms = round($hypot/1000,1) + 3;
$miles = $kms / 1.6;
$text ='Distance in the miles: '. $miles .' miles';
settype($miles, int);
return $miles;
}

function sanitize($data){
return mysql_real_escape_string($data);
}
?>