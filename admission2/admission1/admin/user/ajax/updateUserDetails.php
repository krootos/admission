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
    /*$query = "UPDATE sas_register SET RegisNO = '$regisno', RegisPWD = '$regispwd', RegisNaID = '$regisnaid' WHERE  RegisID = '$id'";
    
    if (!$result = mysql_query($query)) {
        exit(mysql_error());
    }

    $query2 = "UPDATE sas_studentdata SET NID =  '$regisnaid' WHERE  NID = '$regisno'";
    
    if (!$result2 = mysql_query($query2)) {
        exit(mysql_error());
    }*/


    $query =    "UPDATE sas_register, sas_studentdata 
                SET sas_register.RegisNO = '$regisno', sas_register.RegisPWD = '$regispwd', 
                    sas_register.RegisNaID = '$regisnaid',sas_studentdata.NID = '$regisnaid' 
                WHERE  sas_register.RegisID = '$id'
                        AND sas_student.NID = '$regisno' ";
    
    if (!$result = mysql_query($query)) {
        exit(mysql_error());
    }
    
}