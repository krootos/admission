<?php


$host = "localhost"; // ส่วนมากมักเป็น localhost
$dbname = "admission_web"; // ชื่อฐานข้อมูล
$user = "admission_web"; // Username
$pass = "MldwSCiq"; // Password



function conndb()
{
    global $conn;
    global $host;
    global $username;
    global $password;
    global $dbname;
    $conn = mysqli_connect($host, $username, $password);

    mysqli_query($conn,"SET NAMES 'utf8'");
    mysqli_select_db($conn,$dbname);
    if (!$conn) {
        die("ไม่สามารถติดต่อกับฐานข้อมูลได้");
    }

    mysqli_select_db($conn, $dbname)
    or die("ไม่สามารถเลือกใช้งานฐานข้อมูลได้");
}

function closedb()
{
    global $conn;
    mysqli_close($conn);
}
