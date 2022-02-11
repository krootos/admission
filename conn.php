<?php
$servername = "localhost";
$dbname = "admission_web";
$username = "admission_web";
$password = "MldwSCiq";


/*$servername = "127.0.0.1:3306";
$username = "kittisak";
$password = "076200207";
$dbname  = "student";*/

// Create connection
$connected = mysql_connect($servername, $username, $password);
$select_db = mysql_select_db($dbname);
mysql_query("SET character_set_results=utf8");
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");
