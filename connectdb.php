<?php

// Database connection parameters
$serverName = "AQUEENA-IMUT\AQUEENA";
$connectionInfo = array("Database" => "prestasi_mahasiswa");

// Connect to the database
$conn = sqlsrv_connect($serverName, $connectionInfo);

// Check if the connection is successful
if ($conn) {
  echo "Connection established.";
} else {
  echo "Connection failed: " . sqlsrv_errors();
}

?>