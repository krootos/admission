


<?php
//if(isset($_POST["excel"],$_POST["download"])){
if (isset($_POST["lbexcel"], $_POST["btexcel"])) {
/**
 * PHPExcel
 *
 * Copyright (C) 2006 - 2011 PHPExcel
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301  USA
 *
 * @category   PHPExcel
 * @package    PHPExcel
 * @copyright  Copyright (c) 2006 - 2011 PHPExcel (http://www.codeplex.com/PHPExcel)
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt    LGPL
 * @version    1.7.6, 2011-02-27
 */

/** Error reporting */
    error_reporting(E_ALL);

    date_default_timezone_set('Asia/Bangkok');

/** PHPExcel */
//require_once '../Classes/PHPExcel.php';
    require_once './excel/Classes/PHPExcel.php';

// Create new PHPExcel object
    //echo date('H:i:s') . " Create new PHPExcel object\n";
    $objPHPExcel = new PHPExcel();

// Set properties
    //echo date('H:i:s') . " Set properties\n";
    $objPHPExcel->getProperties()->setCreator("Kittisak Sangtong")
        ->setLastModifiedBy("Kittisak Sangtong")
        ->setTitle("Office 2007 XLSX Test Document")
        ->setSubject("Office 2007 XLSX Test Document")
        ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
        ->setKeywords("office 2007 openxml php")
        ->setCategory("Test result file");

    $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension('H')->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension('I')->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension('J')->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension('K')->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension('L')->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension('M')->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension('N')->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension('O')->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension('P')->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension('Q')->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension('R')->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension('S')->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension('T')->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension('U')->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension('V')->setAutoSize(true);
    $objPHPExcel->getActiveSheet()->getColumnDimension('W')->setAutoSize(true);

// Add some data
    //echo date('H:i:s') . " Add some data\n";

    $objPHPExcel->setActiveSheetIndex(0)
        ->setCellValue('A1', 'เลขที่')
        ->setCellValue('B1', 'รหัสผู้ใช้งาน')
        ->setCellValue('C1', 'เลขบัตรประชาชน')
        ->setCellValue('D1', 'ระดับชั้น')
        ->setCellValue('E1', 'คำนำหน้า')
        ->setCellValue('F1', 'ชื่อ')
        ->setCellValue('G1', 'สกุล')
        ->setCellValue('H1', 'ประเภทนักเรียน')
        ->setCellValue('I1', 'ความสามารถพิเศษ')
        ->setCellValue('J1', 'ความสามารถพิเศษเฉพาะ')
        ->setCellValue('K1', 'แผนการเรียน 1')
        ->setCellValue('L1', 'แผนการเรียน 2')
        ->setCellValue('M1', 'แผนการเรียน 3')
        ->setCellValue('N1', 'แผนการเรียน 4')
        ->setCellValue('O1', 'แผนการเรียน 5')
        ->setCellValue('P1', 'โรงเรียนเดิม')
        ->setCellValue('Q1', 'เกรดเฉลี่ย')
        ->setCellValue('R1', 'โทรศัพท์')
        ->setCellValue('S1', 'วันที่สมัคร')
        ->setCellValue('T1', 'เลขที่นั่งสอบ')
        ->setCellValue('U1', 'ห้องสอบที่')
        ->setCellValue('V1', 'อาคารสอบ')
        ->setCellValue('W1', 'เลขที่ห้องสอบ');

// Write data from MySQL result

    $servername = "127.0.0.1:3306";
    $username = "root";
    $password = "12345678";
    $dbname = "student";

    /* $servername = "127.0.0.1:3306";
    $username = "kittisak";
    $password = "076200207";
    $dbname = "student";*/

// Create connection
    $objConnect = @mysql_connect($servername, $username, $password);
    $objDB = mysql_select_db($dbname);
    mysql_query("SET character_set_results=utf8"); //??????????????????????????????? utf8
    mysql_query("SET character_set_client=utf8"); //?????????????????????????????????????????? utf8
    mysql_query("SET character_set_connection=utf8"); //???????????????????????????????? utf8
    if (isset($_POST["lbexcel"])) {
        $ad = 0;
        if ($_POST["lbexcel"] == "1") {

            echo $strSQL = "SELECT NID, TYPE, SNAME, FNAME, LNAME, OPTIONS, OPTIONSPECIAL, MORE, PLAN1, PLAN2, PLAN3, PLAN4, PLAN5, LSCHOOL, GPA, TEL, DAYCOME, sr.RegisNO, sr.RegisStatus, exno.ExamStuNo, exno.ExamID
                FROM sas_studentdata as sd
                INNER JOIN sas_register as sr
                ON sd.NID = sr.RegisNaID
				LEFT JOIN  sas_examno as exno
                ON sd.NID = exno.ExamNID
				WHERE sd.TYPE = '1' AND sr.RegisStatus='1'   ORDER BY sd.SID ASC";
            $objPHPExcel->getActiveSheet()->setTitle('ม.1 ทั้งหมด');
            $ad = 1;
        } elseif ($_POST["lbexcel"] == "2") {
            $strSQL = "SELECT NID, TYPE, SNAME, FNAME, LNAME,  OPTIONS, OPTIONSPECIAL, MORE, PLAN1, PLAN2, PLAN3, PLAN4, PLAN5, LSCHOOL, GPA, TEL, DAYCOME, sr.RegisNO, sr.RegisStatus, exno.ExamStuNo, exno.ExamID
                FROM sas_studentdata as sd
                INNER JOIN sas_register as sr
                ON sd.NID = sr.RegisNaID
				LEFT JOIN  sas_examno as exno
                ON sd.NID = exno.ExamNID
                WHERE  sd.TYPE = '4' AND sr.RegisStatus='1' ORDER BY sd.SID ASC";
            $objPHPExcel->getActiveSheet()->setTitle('ม.4 ทั้งหมด');
            $ad = 2;
        } elseif ($_POST["lbexcel"] == "3") {
            $strSQL = "SELECT NID, TYPE, SNAME, FNAME, LNAME, OPTIONS, OPTIONSPECIAL, MORE, PLAN1, PLAN2, PLAN3, PLAN4, PLAN5, LSCHOOL, GPA, TEL, DAYCOME, sr.RegisNO, sr.RegisStatus, exno.ExamStuNo, exno.ExamID
                FROM sas_studentdata as sd
                INNER JOIN sas_register as sr
                ON sd.NID = sr.RegisNaID
				LEFT JOIN  sas_examno as exno
                ON sd.NID = exno.ExamNID
				WHERE sd.TYPE = '1' AND sd.OPTIONS='นักเรียนทั่วไป' AND sr.RegisStatus='1'  ORDER BY sd.SID ASC";
            $objPHPExcel->getActiveSheet()->setTitle('ม.1 นักเรียนทั่วไป');
            $ad = 3;
        } elseif ($_POST["lbexcel"] == "4") {
            $strSQL = "SELECT NID, TYPE, SNAME, FNAME, LNAME, OPTIONS, OPTIONSPECIAL, MORE, PLAN1, PLAN2, PLAN3, PLAN4, PLAN5, LSCHOOL, GPA, TEL, DAYCOME, sr.RegisNO, sr.RegisStatus, exno.ExamStuNo, exno.ExamID
                FROM sas_studentdata as sd
                INNER JOIN sas_register as sr
                ON sd.NID = sr.RegisNaID
				LEFT JOIN  sas_examno as exno
                ON sd.NID = exno.ExamNID
                WHERE sd.TYPE = '1' AND sd.OPTIONS='นักเรียนในเขตพื้นที่บริการ' AND sr.RegisStatus='1'  ORDER BY sd.SID ASC";
            $objPHPExcel->getActiveSheet()->setTitle('ม.1 นักเรียนในเขตพื้นที่บริการ');
            $ad = 4;
        } elseif ($_POST["lbexcel"] == "5") {
            $strSQL = "SELECT NID, TYPE, SNAME, FNAME, LNAME, OPTIONS, OPTIONSPECIAL, MORE, PLAN1, PLAN2, PLAN3, PLAN4, PLAN5, LSCHOOL, GPA, TEL, DAYCOME, sr.RegisNO, sr.RegisStatus, exno.ExamStuNo, exno.ExamID
					 FROM sas_studentdata as sd
					 INNER JOIN sas_register as sr
					 ON sd.NID = sr.RegisNaID
					 LEFT JOIN  sas_examno as exno
					 ON sd.NID = exno.ExamNID
					 WHERE sd.TYPE = '1' AND sd.OPTIONS='นักเรียนที่มีเงื่อนไขพิเศษ' AND sr.RegisStatus='1'  ORDER BY sd.SID ASC";
            $objPHPExcel->getActiveSheet()->setTitle('ม.1 นักเรียนที่มีเงื่อนไขพิเศษ');
            $ad = 5;
        } elseif ($_POST["lbexcel"] == "6") {
            $strSQL = "SELECT NID, TYPE, SNAME, FNAME, LNAME, OPTIONS, OPTIONSPECIAL, MORE, PLAN1, PLAN2, PLAN3, PLAN4, PLAN5, LSCHOOL, GPA, TEL, DAYCOME, sr.RegisNO, sr.RegisStatus, exno.ExamStuNo, exno.ExamID
						 FROM sas_studentdata as sd
						 INNER JOIN sas_register as sr
						 ON sd.NID = sr.RegisNaID
						 LEFT JOIN  sas_examno as exno
						 ON sd.NID = exno.ExamNID
						 WHERE sd.TYPE = '1' AND sd.OPTIONS='นักเรียนที่มีความสามารถพิเศษ' AND sr.RegisStatus='1'  ORDER BY sd.SID ASC";
            $objPHPExcel->getActiveSheet()->setTitle('ม.1 ความสามารถพิเศษ');
            $ad = 6;
        } elseif ($_POST["lbexcel"] == "7") {
            $strSQL = "SELECT NID, TYPE, SNAME, FNAME, LNAME, OPTIONS, OPTIONSPECIAL, MORE, PLAN1, PLAN2, PLAN3, PLAN4, PLAN5, LSCHOOL, GPA, TEL, DAYCOME, sr.RegisNO, sr.RegisStatus, exno.ExamStuNo, exno.ExamID
							 FROM sas_studentdata as sd
							 INNER JOIN sas_register as sr
							 ON sd.NID = sr.RegisNaID
							 LEFT JOIN  sas_examno as exno
							 ON sd.NID = exno.ExamNID
							 WHERE sd.TYPE = '4' AND sd.OPTIONS='นักเรียนทั่วไป' AND sr.RegisStatus='1'  ORDER BY sd.SID ASC";
            $objPHPExcel->getActiveSheet()->setTitle('ม.4 นักเรียนทั่วไป');
            $ad = 7;
        } elseif ($_POST["lbexcel"] == "8") {
            $strSQL = "SELECT NID, TYPE, SNAME, FNAME, LNAME, OPTIONS, OPTIONSPECIAL, MORE, PLAN1, PLAN2, PLAN3, PLAN4, PLAN5, LSCHOOL, GPA, TEL, DAYCOME, sr.RegisNO, sr.RegisStatus, exno.ExamStuNo, exno.ExamID
								 FROM sas_studentdata as sd
								 INNER JOIN sas_register as sr
								 ON sd.NID = sr.RegisNaID
								 LEFT JOIN  sas_examno as exno
								 ON sd.NID = exno.ExamNID
								 WHERE sd.TYPE = '4' AND sd.OPTIONS='นักเรียนที่มีเงื่อนไขพิเศษ' AND sr.RegisStatus='1'  ORDER BY sd.SID ASC";
            $objPHPExcel->getActiveSheet()->setTitle('ม.4 นักเรียนที่มีเงื่อนไขพิเศษ');
            $ad = 8;
        } elseif ($_POST["lbexcel"] == "9") {
            $strSQL = "SELECT NID, TYPE, SNAME, FNAME, LNAME, OPTIONS, OPTIONSPECIAL, MORE, PLAN1, PLAN2, PLAN3, PLAN4, PLAN5, LSCHOOL, GPA, TEL, DAYCOME, sr.RegisNO, sr.RegisStatus, exno.ExamStuNo, exno.ExamID
									 FROM sas_studentdata as sd
									 INNER JOIN sas_register as sr
									 ON sd.NID = sr.RegisNaID
									 LEFT JOIN  sas_examno as exno
									 ON sd.NID = exno.ExamNID
									 WHERE sd.TYPE = '4' AND sd.OPTIONS='นักเรียนที่มีความสามารถพิเศษ' AND sr.RegisStatus='1'  ORDER BY sd.SID ASC";
            $objPHPExcel->getActiveSheet()->setTitle('ม.4 ความสามารถพิเศษ');
            $ad = 9;
        } else {

        }
    }

    $objQuery = mysql_query($strSQL);
    $i = 2;
    $num = 1;
    while ($objResult = mysql_fetch_array($objQuery)) {
        if ($objResult['ExamID'] != "") {
            $querycel = "SELECT * FROM sas_exam
		 				 WHERE id='" . $objResult['ExamID'] . "'";

            if (!$result2 = mysql_query($querycel)) {
                exit(mysql_error());
            }
            $aresult = mysql_fetch_assoc($result2);

            $a1 = $aresult["id"];
            $a2 = $aresult["ExamBuilding"];
            $a3 = $aresult["ExamRoomNO"];
        } else {
            $a1 = "";
            $a2 = "";
            $a3 = "";

        }

        $objPHPExcel->getActiveSheet()->setCellValue('A' . $i, $num);
        $objPHPExcel->getActiveSheet()->setCellValueExplicit('B' . $i, $objResult["RegisNO"], PHPExcel_Cell_DataType::TYPE_STRING);
        $objPHPExcel->getActiveSheet()->setCellValueExplicit('C' . $i, $objResult["NID"], PHPExcel_Cell_DataType::TYPE_STRING);

        /*$objPHPExcel->getActiveSheet()->setCellValue('A' . $i, $objResult["sid"]);
        $objPHPExcel->getActiveSheet()->setCellValue('B' . $i, $objResult["nid"]); */
        $type = "ม." . $objResult["TYPE"];
        $objPHPExcel->getActiveSheet()->setCellValue('D' . $i, $type);
        $objPHPExcel->getActiveSheet()->setCellValue('E' . $i, $objResult["SNAME"]);
        $objPHPExcel->getActiveSheet()->setCellValue('F' . $i, $objResult["FNAME"]);
        $objPHPExcel->getActiveSheet()->setCellValue('G' . $i, $objResult["LNAME"]);
        $objPHPExcel->getActiveSheet()->setCellValue('H' . $i, $objResult["OPTIONS"]);
        $objPHPExcel->getActiveSheet()->setCellValue('I' . $i, $objResult["OPTIONSPECIAL"]);
        $objPHPExcel->getActiveSheet()->setCellValue('J' . $i, $objResult["MORE"]);

        $objPHPExcel->getActiveSheet()->setCellValue('K' . $i, $objResult["PLAN1"]);
        $objPHPExcel->getActiveSheet()->setCellValue('L' . $i, $objResult["PLAN2"]);
        $objPHPExcel->getActiveSheet()->setCellValue('M' . $i, $objResult["PLAN3"]);
        $objPHPExcel->getActiveSheet()->setCellValue('N' . $i, $objResult["PLAN4"]);
        $objPHPExcel->getActiveSheet()->setCellValue('O' . $i, $objResult["PLAN5"]);
        $objPHPExcel->getActiveSheet()->setCellValue('P' . $i, $objResult["LSCHOOL"]);
        $objPHPExcel->getActiveSheet()->setCellValue('Q' . $i, $objResult["GPA"]);
        $objPHPExcel->getActiveSheet()->setCellValueExplicit('R' . $i, $objResult["TEL"], PHPExcel_Cell_DataType::TYPE_STRING);
        $daycome = $objResult["DAYCOME"] . " มีนาคม 2563";
        $objPHPExcel->getActiveSheet()->setCellValue('S' . $i, $daycome);
        $objPHPExcel->getActiveSheet()->setCellValue('T' . $i, $objResult["ExamStuNo"]);
        $objPHPExcel->getActiveSheet()->setCellValue('U' . $i, $a1);
        $objPHPExcel->getActiveSheet()->setCellValue('V' . $i, $a2);
        $objPHPExcel->getActiveSheet()->setCellValue('W' . $i, $a3);

        $i++;
        $num++;
    }
    mysql_close($objConnect);

// Rename sheet
    //echo date('H:i:s') . " Rename sheet\n";

// Set active sheet index to the first sheet, so Excel opens this as the first sheet
    $objPHPExcel->setActiveSheetIndex(0);

// Save Excel 2007 file
    //echo date('H:i:s') . " Write to Excel2007 format\n";
    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
    $strFileName = "myData.xlsx";
    $objWriter->save($strFileName);

// Echo memory peak usage
    //echo date('H:i:s') . " Peak memory usage: " . (memory_get_peak_usage(true) / 1024 / 1024) . " MB\r\n";

// Echo done
    //echo date('H:i:s') . " Done writing file.\r\n";

    echo '<script>window.open("' . $strFileName . '","_top")</script>';

}

?>

