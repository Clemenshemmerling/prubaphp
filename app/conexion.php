<?php
$dbHost = 'mysql';
$dbUser = 'trackenv_track';
$dbPass = '3On+S[RA,DNb';
$dbName = 'trackenv_tracking';

$dbConn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

function statusConn () {
  if($dbConn->connect_errno) {
    return "No conectado";
  }else{
    return "Conectado";
  }
}
 ?>
