<?php

$hostname_conexion='localhost';
//$username_conexion='u673817218_user';
//$password_conexion='RrR6qKV3JtdD';
$username_conexion='root';
$password_conexion='';
$database_conexion='u673817218_parro';



$conexion = new mysqli($hostname_conexion, $username_conexion, $password_conexion, $database_conexion);
mysqli_set_charset($conexion,'utf8');

if ($conexion -> connect_errno){
  echo "Lo sentimos, este sitio web está experimentando problemas.";
  echo "Error: fallo al conectarse a mysql debido a \n";
  echo "Errno: ".$conexion -> connect_errno . "\n";
  echo "Error: ".$conexion -> connect_error . "\n";
  exit;
}

if (!function_exists("GetSQLValueString")) {
  function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = ""){
      if (PHP_VERSION < 6) {
      $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
      }

      $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

      switch ($theType) {
        case "text":
          $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
          break;    
        case "long":
        case "int":
          $theValue = ($theValue != "") ? intval($theValue) : "NULL";
          break;
        case "double":
          $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
          break;
        case "date":
          $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
          break;
        case "defined":
          $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
          break;
      }
      return $theValue;
    }
}


?>