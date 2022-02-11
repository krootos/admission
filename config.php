<?php
/*$host = "localhost"; // ส่วนมากมักเป็น localhost
$user = "root"; // Username
$pass = "1234"; // Password
$dbname = "student"; // ชื่อฐานข้อมูล*/

$host = "localhost"; // ส่วนมากมักเป็น localhost
$dbname = "admission_web"; // ชื่อฐานข้อมูล
$user = "admission_web"; // Username
$pass = "MldwSCiq"; // Password


/*$host = "127.0.0.1:3306"; // ส่วนมากมักเป็น localhost
$user = "kittisak"; // Username
$pass = "076200207"; // Password
$dbname = "student";  // ชื่อฐานข้อมูล */

function conndb()
{
    global $conn;
    global $host;
    global $user;
    global $pass;
    global $dbname;
    $conn = mysql_connect($host, $user, $pass);

    mysql_query("SET NAMES 'utf8'");
    mysql_select_db($dbname);
    if (!$conn) {
        die("ไม่สามารถติดต่อกับฐานข้อมูลได้");
    }

    mysql_select_db($dbname, $conn)
    or die("ไม่สามารถเลือกใช้งานฐานข้อมูลได้");
}

function closedb()
{
    global $conn;
    mysql_close($conn);
}
