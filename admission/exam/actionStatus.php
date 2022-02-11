<?php

$naid = $_POST['itemname'];

include "conn.php";
$sql = "SELECT  NID, TYPE, OPTIONS, SNAME, FNAME, LNAME,TEL, PLAN1, PLAN2, PLAN3
  
  FROM sas_studentdata
  
  where NID = '{$_POST['itemname']}'";


$query = mysql_query($sql);






$sql_ex = "SELECT ExamStuNo, ExamNID, ExamID, b.id, b.ExamBuilding, b.ExamRoomNO, c.TYPE, c.OPTIONS, c.SNAME, c.FNAME, c.LNAME, c.TEL, c.PLAN1, c.PLAN2, c.PLAN3
                FROM sas_examno as a
                INNER JOIN sas_exam as b
                ON a.ExamID = b.id
                LEFT JOIN sas_studentdata as c
                ON a.ExamNID = c.NID
                WHERE a.ExamNID = '" . $_POST['itemname'] . "'";

$resultaz = mysql_query($sql_ex);



$exStuNo = array(0,0);
$exID = array(0,0);
$exBuilding = array(0,0);
$exRoomNo = array(0,0);

$j=0;
while ($record = mysql_fetch_assoc($resultaz)) {
//echo $record["ExamStuNo"];
$exStuNo[$j] = $record["ExamStuNo"];
$exID[$j] = $record["ExamID"];
$exBuilding[$j] = $record["ExamBuilding"];
$exRoomNo[$j] = $record["ExamRoomNO"];
$countStuNo = count($exStuNo);
$j++;
}

//echo $countStuNo;

//echo "<br>".$ex1[0];



if (mysql_num_rows($resultaz) < 1) {

  echo ' <div class="col-md-8">
          
            <div class="row"> <br/>
              <div class="col-sm-2"></div>
              <div class="col-sm-8">
                <h4>
                  <p class="text-lg-center text-danger">ไม่พบข้อมูล โปรดตรวจสอบเลขประจำตัวประชาชนอีกครั้ง !!!</p>
                </h4>
              </div>
            </div>
        
            
            
          </div>';
}








//echo mysql_num_rows($resultaz);
$ex = mysql_fetch_assoc($resultaz);
$_SESSION["EX"][1] = $ex["ExamStuNo"];
$_SESSION["EX"][2] = $ex["ExamID"];
$_SESSION["EX"][3] = $ex["ExamBuilding"];
$_SESSION["EX"][4] = $ex["ExamRoomNO"];



?>
<div class="col-md-12 round">


  <?php
  $i = 1;
  while ($result = mysql_fetch_assoc($query)) { ?>


    <h5>&nbsp;&nbsp;&nbsp;&nbsp;</h5>






    <table class="w-100">
      
      


        <!-- รายละเอียดการสอบ -->
        <tr>


          <td>
            <?php
            if ($result['OPTIONS'] != "โควตาโรงเรียนเดิม") {
            ?>
             <a href="http://bit.ly/tnw_admission64" target="_blank" > <h3 class="text-danger"><u>โปรดให้ข้อมูลเพิ่มเติม โดยคลิกที่นี่!!! <br>เพื่อการแจ้งข่าวสารของทางโรงเรียนเกี่ยวกับการสอบต่อท่านโดยตรง <br>(หากท่านไม่ให้ความร่วมมือ และทางโรงเรียนไม่สามารถติดต่อได้ในทุกกรณี จะถือว่าท่านสละสิทธิ์)</u> </h3></a><br>
             <div class=""><img src="qrcode.png" alt=""></div><br><br>
              <h4 class="text-success">ข้อมูลผู้มีสิทธิ์สอบประเภทสมัครสอบรอบทั่วไป </h4>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col" colspan="4" class="text-center font-weight-bold">
                      <h4>ระดับชั้นมัธยมศึกษาปีที่ <?php echo "  " . $result['TYPE']; ?> </h4>
                    </th>

                  </tr>
                </thead>
                <tbody class="text-left">

                  <tr>
                    <th class="text-left font-weight-bold">เลขประจำตัวประชาชน </th>
                    <td colspan="3"><?php echo " " . $result['NID']; ?></td>
                  </tr>

                  <tr>
                    <th scope="row" class="text-left font-weight-bold">ชื่อ - นามสกุล </th>
                    <td colspan="3"><?php echo " " . $result['SNAME'] . $result['FNAME'] . " " . $result['LNAME']; ?></td>


                  </tr>
                  <?php
                  if ($result['TYPE'] == 1) { ?>
                    <tr>
                      <th scope="row" class="text-left font-weight-bold">ประเภท </th>
                      <td colspan="3"><?php echo " " . $result['OPTIONS']; ?></td>
                    </tr>

                  <?php

                  }
                  if (($result['TYPE'] == "4") && ($result['OPTIONS'] == "โควตาโรงเรียนเดิม")) { ?>
                    <tr>
                      <th scope="row" class="text-left font-weight-bold">ประเภท </th>
                      <td colspan="3"><?php echo " " . $result['OPTIONS']; ?></td>
                    </tr>


                  <?php
                  } else { ?>

                    <tr>
                      <th scope="row" class="text-left font-weight-bold">ประเภท </th>
                      <td colspan="3">นักเรียนทั่วไป</td>
                    </tr>


                  <?php
                  }


                  ?>

                  <?php
                  if (($result['TYPE'] == "4") && ($result['OPTIONS'] != "โควตาโรงเรียนเดิม")) { ?>
                    <tr>
                      <th scope="row" class="text-left font-weight-bold">แผนการเรียน </th>
                      <td colspan="3">
                        <?php echo "อันดับ 1 " . $result['PLAN1']; ?> <br />
                        <?php echo "อันดับ 2 " . $result['PLAN2']; ?> <br />
                        <?php echo "อันดับ 3 " . $result['PLAN3']; ?> <br />

                      </td>
                    </tr>

                  <?php

                  }
                  


                  ?>

                  <tr>
                    <th scope="row" class="text-left font-weight-bold">เลขประจำตัวผู้สมัครสอบ </th>
                    <td colspan="3"><?php echo " " . $result["ExamStuNo"];



                                   

                                    echo "" . $exStuNo[0];


                                    














                                    ?></td>
                  </tr>

                  <tr>
                    <th scope="row" class="text-left font-weight-bold">สถานที่ </th>
                    <td colspan="3">
                      <?php echo " " . $exBuilding[0]; ?> <br />
                      <?php echo "ห้องสอบที่ " . $exID[0]; ?> <br />
                      <?php echo "ห้อง " . $exRoomNo[0]; ?> <br />

                      <?php
                      $numExam = substr($exStuNo[0], 2, 3);
                      echo "ลำดับที่ " . $numExam;


                      ?> <br />

                      <?php
                      $dayExam = $result["TYPE"];
                      if ($dayExam == 1) {
                        echo "สอบวันเสาร์ ที่ 22 พฤษภาคม 2564 <br/> เวลา 09.00 น. - 12.00 น.";
                      } else {
                        echo "สอบวันอาทิตย์ ที่ 23 พฤษภาคม 2564 <br/> เวลา 09.00 น. - 12.00 น.";
                      }


                      ?> <br />


                    </td>

                  </tr>

                  <tr>

                    <td colspan="8" class="text-left font-weight-bold"><b><u class="text-danger">***หมายเหตุ&nbsp;</u></b>
                      ในวันสอบให้นำบัตรประจำตัวประชาชน หรือบัตรอื่นที่มีภาพถ่ายหน้าตรง
                      และมีเลขประจำตัวประชาชน <br />ที่ทางราชการออกให้ ใช้แทนบัตรเข้าห้องสอบ

                  </tr>
                </tbody>
              </table>

            <?
            } if ($result['OPTIONS'] == "โควตาโรงเรียนเดิม"){
            ?>

              <h4 class="text-success">ข้อมูลผู้มีสิทธิ์สอบประเภทโควตาโรงเรียนเดิม </h4>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col" colspan="4" class="text-center font-weight-bold">
                      <h4>ระดับชั้นมัธยมศึกษาปีที่ <?php echo "  " . $result['TYPE']; ?> </h4>
                    </th>

                  </tr>
                </thead>
                <tbody class="text-left">

                  <tr>
                    <th class="text-left font-weight-bold">เลขประจำตัวประชาชน </th>
                    <td colspan="3"><?php echo " " . $result['NID']; ?></td>
                  </tr>

                  <tr>
                    <th scope="row" class="text-left font-weight-bold">ชื่อ - นามสกุล </th>
                    <td colspan="3"><?php echo " " . $result['SNAME'] . $result['FNAME'] . " " . $result['LNAME']; ?></td>


                  </tr>
                  <?php
                  if ($result['TYPE'] == 1) { ?>
                    <tr>
                      <th scope="row" class="text-left font-weight-bold">ประเภท </th>
                      <td colspan="3"><?php echo " " . $result['OPTIONS']; ?></td>
                    </tr>

                  <?php

                  }
                  if (($result['TYPE'] == "4") && ($result['OPTIONS'] == "โควตาโรงเรียนเดิม")) { ?>
                    <tr>
                      <th scope="row" class="text-left font-weight-bold">ประเภท </th>
                      <td colspan="3"><?php echo " " . $result['OPTIONS']; ?></td>
                    </tr>


                  <?php
                  } else { ?>

                    <tr>
                      <th scope="row" class="text-left font-weight-bold">ประเภท </th>
                      <td colspan="3">นักเรียนทั่วไป</td>
                    </tr>


                  <?php
                  }


                  ?>

                 

                  <?php

                  
                  if (($result['TYPE'] == "4") && ($result['OPTIONS'] == "โควตาโรงเรียนเดิม")) { ?>

                    <tr>
                      <th scope="row" class="text-left font-weight-bold">แผนการเรียน </th>
                      <td colspan="3">
                        <?php echo "" . $result['PLAN1']; ?> <br />


                      </td>
                    </tr>
                  <?php
                  }


                  ?>

                  <tr>
                    <th scope="row" class="text-left font-weight-bold">เลขประจำตัวผู้สมัครสอบ </th>
                    <td colspan="3"><?php echo " " . $result["ExamStuNo"];


                                  if($countStuNo==2){
                                    echo "" . $exStuNo[0];
                                  }else{
                                    

                                    echo "" . $exStuNo[1];

                                  }















                                    ?></td>
                  </tr>

                  <tr>
                    <th scope="row" class="text-left font-weight-bold">สถานที่ </th>
                    <td colspan="3">
                      <?php 
                            if($countStuNo==2){
                              echo " " . $exBuilding[0]; 
                            }else{
                              echo " " . $exBuilding[1]; 
                            }
                      ?> <br />
                      <?php 
                            if($countStuNo==2){
                              echo "ห้องสอบที่ " . $exID[0]; 

                            }else{
                              echo "ห้องสอบที่ " . $exID[1]; 
                            }
                      
                      
                      ?> <br />
                      <?php 
                      
                            if($countStuNo==2){
                              echo "ห้อง " . $exRoomNo[0]; 
                            }else{
                              echo "ห้อง " . $exRoomNo[1]; 

                            }
                      
                      
                      ?> <br />

                      <?php

                            if($countStuNo==2){
                              $numExam = substr($exStuNo[0], 2, 3);
                            }else{
                              $numExam = substr($exStuNo[1], 2, 3);
                            }

                          
                          echo "ลำดับที่ " . $numExam;


                      ?> <br />

                      <?php
                      $dayExam = $result["TYPE"];
                      if ($dayExam == 1) {
                        echo "สอบวันเสาร์ ที่ 22 พฤษภาคม 2564 <br/> เวลา 09.00 น. - 12.00 น.";
                      } else {
                        echo "สอบวันอาทิตย์ ที่ 23 พฤษภาคม 2564 <br/> เวลา 09.00 น. - 12.00 น.";
                      }


                      ?> <br />


                    </td>

                  </tr>

                  <tr>

                    <td colspan="8" class="text-left font-weight-bold"><b><u class="text-danger">***หมายเหตุ&nbsp;</u></b>
                      ในวันสอบให้นำบัตรประจำตัวประชาชน หรือบัตรอื่นที่มีภาพถ่ายหน้าตรง
                      และมีเลขประจำตัวประชาชน <br />ที่ทางราชการออกให้ ใช้แทนบัตรเข้าห้องสอบ

                  </tr>
                </tbody>
              </table>
              <br>
            <?php
            }
            ?>


          </td>

        </tr>
        <tr>









          <!-- <a href="fpdf/MyPDF/<?php echo "Thatnaraiwittaya-" . $_POST['itemname'] . ".pdf"; ?>" target="_blank">
                            <span class="glyphicon glyphicon-print" aria-hidden="true"></span> พิมพ์ใบสมัคร
                            <?php echo "เลขประจำตัว " . $ex["ExamStuNo"]; ?></a> -->







        </tr>

      
      

     
    </table>



    <p>&nbsp;</p>

</div>

<?php
    $i++;
  }

?>