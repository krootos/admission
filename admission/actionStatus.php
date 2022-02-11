<?php

$naid = $_POST['itemname'];

include "conn.php";
$sql = "SELECT NID, TYPE, OPTIONS, SNAME, FNAME, LNAME,TEL, RegisNo, RegisNaID, RegisLLog, RegisStatus  
  
  FROM sas_studentdata as sd
  INNER JOIN sas_register as sr
  ON sd.NID = sr.RegisNaID
  
  where sr.RegisNo = '{$_POST['itemname']}'";


$query = mysql_query($sql);


$sql_ex = "SELECT ExamStuNo, ExamNID, ExamID, b.id, b.ExamBuilding, b.ExamRoomNO
                FROM sas_examno as a
                INNER JOIN sas_exam as b
                ON a.ExamID = b.id
                WHERE a.ExamNID = '" . $_POST['itemname'] . "'";

$resultaz = mysql_query($sql_ex);

if (mysql_num_rows($resultaz) > 0) {
  $ex = mysql_fetch_assoc($resultaz);
  $_SESSION["EX"][1] = $ex["ExamStuNo"];
  $_SESSION["EX"][2] = $ex["ExamID"];
  $_SESSION["EX"][3] = $ex["ExamBuilding"];
  $_SESSION["EX"][4] = $ex["ExamRoomNO"];
}

?>

<div class="table-responsive">
  <!-- <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ลำดับ</th>
                    <th>เลขประจำตัวประชาชน</th>
                    <th>ชื่อ - สกุล</th>
                    <th>วันเวลาที่สมัคร</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                while ($result = mysql_fetch_assoc($query)) { ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td style="width: 20px"><?php echo $result['RegisNaID']; ?></td>
                    <td><?php echo $result['SNAME'] . $result['FNAME'] . " " . $result['LNAME']; ?></td>
                    <td><?php echo $result['RegisLLog']; ?></td>

                </tr>
                <?php $i++; ?>
            </tbody>
        </table> -->
  <h5>
    <div class="">
      <div class="col-sm-3">
      </div>

      <div class="col-sm-9">
        <table class="text-left">
          <tr>
            <td>
              &nbsp;
            </td>
            <td>
              <?php echo "เลขประจำตัวประชน : " . $result['RegisNaID']; ?>
              <?php echo "<br/>ชื่อ - สกุล : " . $result['SNAME'] . $result['FNAME'] . " " . $result['LNAME']; ?>
              <?php echo "<br/>เบอร์โทรศัพท์ : " . $result['TEL']; ?>
              <?php echo "<br/>วัน เวลา ที่ลงทะเบียน : " . $result['RegisLLog']; ?>

            </td>
          </tr>
        </table>


        <h5>&nbsp;&nbsp;&nbsp;&nbsp;</h5>
        <table class="text-left col-md-12">
          <?php
                  if (($result['RegisStatus'] == 0) && ($ex["ExamStuNo"] == "")) { ?>
            <tr>

              <td></td>
              <td>
                <img src="img/regisState1.png" />
              <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
              </td>
              <td>
                <h3 class="text-success">
                  การกรอกข้อมูลเสร็จสมบูรณ์
                </h3>
                รอการการตรวจสอบหลักฐานการสมัคร / <br>ตรวจสอบคุณสมบัติ
                <?php
                    $sql_alert = "SELECT * FROM tbl_images WHERE NID = '$naid' ";
                    $query_alert = mysql_query($sql_alert);


                    $docP1 = "<span class='text-danger'>ขาดหลักฐาน</span>";
                    $docP2 = "<span class='text-danger'>ขาดหลักฐาน</span>";
                    $docHome = "<span class='text-danger'>ขาดหลักฐาน</span>";



                    if ($query_alert) {

                      while ($rs_alert = mysql_fetch_array($query_alert)) {


                        $docCheck = $rs_alert['doc'];



                        if ($docCheck == "ปพ.1 ด้านหน้า") {

                          $docP1 = "<span class='text-success'>สมบูรณ์</span>";
                        }

                        if ($docCheck == "ปพ.1 ด้านหลัง") {

                          $docP2 = "<span class='text-success'>สมบูรณ์</span>";
                        }

                        if ($docCheck == "ทะเบียนบ้าน") {

                          $docHome = "<span class='text-success'>สมบูรณ์</span>";
                        }
                      }
                    }

                ?>

                <br> <?php echo "ปพ.1 ด้านหน้า : " . $docP1; ?>
                <br> <?php echo "ปพ.1 ด้านหลัง : " . $docP2; ?>
                <br> <?php echo "สำเนาทะเบียนบ้าน : " . $docHome; ?>
              </td>
            </tr>


            <tr>
              <td></td>
              <td><br />
                <img src="img/line_bw.png" />
              <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
              </td>
              <td>
                &nbsp;
              </td>
            </tr>

            <tr>
              <td></td>
              <td><br />
                <img src="img/regisState2_bw.png" />
              <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>


              </td>
              <td>
                รอการตรวจสอบคุณสมบัติ
              </td>
            </tr>

            <!-- <tr>
              <td></td>
              <td>
                <img src="img/line_bw.png" />
              <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
              </td>
              <td>
                &nbsp;
              </td>
            </tr> -->

            <!-- <tr>
              <td></td>
              <td><br>
                <img src="img/regisState3_bw.png" />
              <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
              </td>
              <td>
                การสมัครเสร็จสมบูรณ์ ผู้สมัครสามารถพิมพ์ใบสมัครได้



                <br />

              </td>
            </tr>

            <tr>
              <td></td>
              <td>
              <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
              </td>
              <td>
                <span class="text-danger">


                  <b><u>***หมายเหตุ</u></b>
                  เพื่อตรวจสอบความสมบูรณ์ของข้อมูล <br> 
                  ไม่ต้องนำใบสมัครส่งที่โรงเรียนในวันสอบ <br>
                  ใช้บัตรประจำตัวประชาชน หรือบัตรอื่นที่มีภาพถ่ายหน้าตรง <br>
                  และเลขประจำตัวประชาชน ที่ทางราชการออกให้ <br>
                  ใช้แทนบัตรเข้าห้องสอบ

                </span>
              </td>
            </tr> -->

          <?php
                  } elseif (($result['RegisStatus'] == 1) && ($ex["ExamStuNo"] == "")) { ?>
            <tr>

              <td></td>
              <td>
                <img src="img/regisState1.png" />
              <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
              </td>
              <td>
                <h3 class="text-success">
                  การกรอกข้อมูลเสร็จสมบูรณ์
                </h3>
                รอการการตรวจสอบหลักฐานการสมัคร / <br>ตรวจสอบคุณสมบัติ

                <?php
                    $sql_alert = "SELECT * FROM tbl_images WHERE NID = '$naid' ";
                    $query_alert = mysql_query($sql_alert);


                    $docP1 = "<span class='text-danger'>ขาดหลักฐาน</span>";
                    $docP2 = "<span class='text-danger'>ขาดหลักฐาน</span>";
                    $docHome = "<span class='text-danger'>ขาดหลักฐาน</span>";



                    if ($query_alert) {

                      while ($rs_alert = mysql_fetch_array($query_alert)) {


                        $docCheck = $rs_alert['doc'];



                        if ($docCheck == "ปพ.1 ด้านหน้า") {

                          $docP1 = "<span class='text-success'>สมบูรณ์</span>";
                        }

                        if ($docCheck == "ปพ.1 ด้านหลัง") {

                          $docP2 = "<span class='text-success'>สมบูรณ์</span>";
                        }

                        if ($docCheck == "ทะเบียนบ้าน") {

                          $docHome = "<span class='text-success'>สมบูรณ์</span>";
                        }
                      }
                    }

                ?>

                <br> <?php echo "ปพ.1 ด้านหน้า : " . $docP1; ?>
                <br> <?php echo "ปพ.1 ด้านหลัง : " . $docP2; ?>
                <br> <?php echo "สำเนาทะเบียนบ้าน : " . $docHome; ?>

              </td>
            </tr>

            <tr>
              <td></td>
              <td><br />
                <img src="img/line_bw.png" />
              <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
              </td>
              <td>
                &nbsp;
              </td>
            </tr>

            <tr>
              <td></td>
              <td><br />
                <img src="img/regisState2.png" />
              <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
              </td>
              <td>
                <h3 class="text-success">
                  ผ่านการตรวจสอบคุณสมบัติ
                </h3>
                <br>ประกาศผลผู้มีสิทธิ์สอบ วันที่ 3 พฤษภาคม 2564 ผ่านทางเว็บไซต์ <br>
                <a href="https://admission.tnw.ac.th/" target="_blank">https://admission.tnw.ac.th/</a> หรือ <br>
                <a href="https://www.tnw.ac.th/" target="_blank">https://www.tnw.ac.th/</a> <br>
              </td>
            </tr>

            <!-- <tr>
              <td></td>
              <td><br />
                <img src="img/line_bw.png" />
              <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
              </td>
              <td>
                &nbsp;
              </td>
            </tr> -->

            <!-- <tr>
              <td></td>
              <td><br>
                <img src="img/regisState3_bw.png" />
              <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
              </td>
              <td>
                การสมัครเสร็จสมบูรณ์ ผู้สมัครสามารถพิมพ์ใบสมัครได้ <br />

              </td>
            </tr>

            <tr>
              <td></td>
              <td>
              <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
              </td>
              <td>
                <span class="text-danger">
                  <b><u>***หมายเหตุ</u></b>
                  เพื่อตรวจสอบความสมบูรณ์ของข้อมูล <br> 
                  ไม่ต้องนำใบสมัครส่งที่โรงเรียนในวันสอบ <br>
                  ใช้บัตรประจำตัวประชาชน หรือบัตรอื่นที่มีภาพถ่ายหน้าตรง <br>
                  และเลขประจำตัวประชาชน ที่ทางราชการออกให้ <br>
                  ใช้แทนบัตรเข้าห้องสอบ
                </span>

              </td>
            </tr> -->

          <?php
                  } elseif (($result['RegisStatus'] == 1) && ($ex["ExamStuNo"] != "")) { ?>
            <tr>

              <td></td>
              <td>
                <img src="img/regisState1.png" />
              <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
              </td>
              <td>
                <h3 class="text-success">
                  การกรอกข้อมูลเสร็จสมบูรณ์
                </h3>
                รอการการตรวจสอบหลักฐานการสมัคร / <br>ตรวจสอบคุณสมบัติ

                <?php
                    $sql_alert = "SELECT * FROM tbl_images WHERE NID = '$naid' ";
                    $query_alert = mysql_query($sql_alert);


                    $docP1 = "<span class='text-danger'>ขาดหลักฐาน</span>";
                    $docP2 = "<span class='text-danger'>ขาดหลักฐาน</span>";
                    $docHome = "<span class='text-danger'>ขาดหลักฐาน</span>";



                    if ($query_alert) {

                      while ($rs_alert = mysql_fetch_array($query_alert)) {


                        $docCheck = $rs_alert['doc'];



                        if ($docCheck == "ปพ.1 ด้านหน้า") {

                          $docP1 = "<span class='text-success'>สมบูรณ์</span>";
                        }

                        if ($docCheck == "ปพ.1 ด้านหลัง") {

                          $docP2 = "<span class='text-success'>สมบูรณ์</span>";
                        }

                        if ($docCheck == "ทะเบียนบ้าน") {

                          $docHome = "<span class='text-success'>สมบูรณ์</span>";
                        }
                      }
                    }

                ?>

                <br> <?php echo "ปพ.1 ด้านหน้า : " . $docP1; ?>
                <br> <?php echo "ปพ.1 ด้านหลัง : " . $docP2; ?>
                <br> <?php echo "สำเนาทะเบียนบ้าน : " . $docHome; ?>
              </td>
            </tr>

            <tr>
              <td></td>
              <td><br />
                <img src="img/line_bw.png" />
              <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
              </td>
              <td>
                &nbsp;
              </td>
            </tr>

            <tr>
              <td></td>
              <td><br />
                <img src="img/regisState2.png" />
              <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
              </td>
              <td>
                <h3 class="text-success">
                  ผ่านการตรวจสอบคุณสมบัติ
                </h3>
                <br>ประกาศผลผู้มีสิทธิ์สอบ วันที่ 3 พฤษภาคม 2564 ผ่านทางเว็บไซต์ <br>
                <a href="https://admission.tnw.ac.th/" target="_blank">https://admission.tnw.ac.th/</a> หรือ <br>
                <a href="https://www.tnw.ac.th/" target="_blank">https://www.tnw.ac.th/</a> <br>

              </td>
            </tr>

            <!-- <tr>
              <td></td>
              <td><br />
                <img src="img/line_bw.png" />
              <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
              </td>
              <td>
                &nbsp;
              </td>
            </tr> -->

            <!-- <tr>
              <td></td>
              <td><br>
                <img src="img/regisState3.png" />
              <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
              </td>
              <td>
                การสมัครเสร็จสมบูรณ์ ผู้สมัครสามารถพิมพ์ใบสมัครได้ที่นี่ >>> <a href="fpdf/MyPDF/<?php echo "Thatnaraiwittaya-" . $_POST['itemname'] . ".pdf"; ?>" target="_blank">
                  <span class="glyphicon glyphicon-print" aria-hidden="true"></span> พิมพ์ใบสมัคร
                  <?php echo "เลขประจำตัว " . $ex["ExamStuNo"]; ?></a><br />

              </td>
            </tr>

            <tr>
              <td></td>
              <td>
              <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
              </td>
              <td>
                <span class="text-danger">
                  <b><u>***หมายเหตุ</u></b>
                  เพื่อตรวจสอบความสมบูรณ์ของข้อมูล <br> 
                  ไม่ต้องนำใบสมัครส่งที่โรงเรียนในวันสอบ <br>
                  ใช้บัตรประจำตัวประชาชน หรือบัตรอื่นที่มีภาพถ่ายหน้าตรง <br>
                  และเลขประจำตัวประชาชน ที่ทางราชการออกให้ <br>
                  ใช้แทนบัตรเข้าห้องสอบ
                </span>

              </td>
            </tr> -->

          <?php
                  }

          ?>
        </table>

      </div>


    </div>


  </h5>



</div>



<?php
                } ?>