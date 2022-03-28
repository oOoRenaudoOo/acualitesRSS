<?php

$hostName = "localhost";
$userName = "root";
$passWord = "";
$dataBase = "rss";

$dir_fs = $_SERVER['DOCUMENT_ROOT']."/";
$dir_ws="/";

$mysqli = @new mysqli($hostName, $userName, $passWord, $dataBase);


?>