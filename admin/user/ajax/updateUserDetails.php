<?php
// include Database connection file
include("db_connection.php");

// check request
if(isset($_POST['id']))
{
    // get values
    $id = $_POST['id'];
    $regisno = $_POST['regisno'];
    $regispwd = $_POST['regispwd'];
    $regisnaid = $_POST['regisnaid'];


    // Updaste User details
    $query = "UPDATE sas_register SET RegisNO = '$regisno', RegisPWD = '$regispwd', RegisNaID = '$regisnaid' WHERE  RegisID = '$id'";
    if (!$result = mysql_query($query)) {
        exit(mysql_error());
    }
}