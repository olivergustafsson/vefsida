<?php 
$config['dbuser'] = "0712982139"; //database user
$config['dbpass'] = "banana555"; //database password
$config['dbname'] = "0712982139_lokaverkefni"; //database we're connecting to
$config['dbhost'] = "tsuts.tskoli.is";

$db = new mysqli($config['dbhost'], $config['dbuser'], $config['dbpass'], $config['dbname']); //do not edit
if($db->connect_errno > 0){
    die("Gagnagrunns villa: ".$db->connect_error);
}

// Breytur
$all['titill'] = "Lokaverkefni";

 ?>