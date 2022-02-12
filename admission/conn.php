<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "admission_web";



// Create connection
$connected = mysqli_connect($servername, $username, $password);
$select_db = mysqli_select_db($connected, $dbname);
mysqli_query($connected, "SET character_set_results=utf8");
mysqli_query($connected, "SET character_set_client=utf8");
mysqli_query($connected, "SET character_set_connection=utf8");

if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    //you need to exit the script, if there is an error
    exit();
}