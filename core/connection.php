<?php
const HOST = "localhost";
const DB_PORT ="5432";
//const DATABASE = "prueba";
const DATABASE = "androidinge";
const DB_USER = "postgres";
const DB_PASSWORD = "oscar1979";

function getConnection($host = HOST, $dbport = DB_PORT, $database = DATABASE, $dbuser = DB_USER, $dbpassword = DB_PASSWORD){
	$dbconn = null;
	try {
	    $conn_string = "pgsql:host=".$host." port=". $dbport." dbname=".$database." user=". $dbuser." password=".$dbpassword;
		$dbconn = new PDO($conn_string);
        $dbconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);        
	} catch (Exception $e) {
        die('No se ha podido conectar: ' . $e->getMessage());
	}
    date_default_timezone_set('America/Asuncion');
    return $dbconn;
}

?>