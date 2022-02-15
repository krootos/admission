<?php include "../admission/conn.php" ?>
<div class="caption-full">

    <!--h4 class="pull-right">$24.99</h4-->
    <h3 class="text-center">
        <p>
            <span class="glyphicon glyphicon-share"></span>
            6. ข้อมูลวุฒิการศึกษาที่สมัคร
        </p>
    </h3>
    <br>


    <?php if (!isset($_GET["edite"])) { ?>
        <form class="needs-validation" name="form1" method="post" action="index.php">
        <?php } else { ?>
            <form class="needs-validation" name="form1" method="post" action="index.php?edite=true">
            <?php } ?>


            <div class="row">
                <div class="col-md-6 mb3">
                    <label class=" col-sm-3 control-label" for="formGroupInputLarge"> สมัครโดยใช้วุฒิ </label>

                    <?php if (isset($_GET["edite"])) { ?>

                        <select class="form-control input-lg" name="lbGraduate" required="" disabled="true">
                        <?php } else {  ?>
                            <select class="form-control input-lg" name="lbGraduate" required="">
                            <?php } ?>

                            <?php if (isset($_SESSION['SAS1'])) {
                                echo $_SESSION["EDITE"][25];
                                $checkpage6 = "1";
                                if (strcmp($_SESSION['SAS1'][1], $checkpage6) == 0) { ?>

                                    <option value="ป.6" <?php if (isset($_SESSION["EDITE"])) {
                                                            if ($_SESSION["EDITE"][25] == "ป.6") {
                                                                echo "selected";
                                                            }
                                                        } ?>>ประถมศึกษาปีที่ 6</option>
                                <?php } else { ?>

                                    <option value="ม.3" <?php if (isset($_SESSION["EDITE"])) {
                                                            if ($_SESSION["EDITE"][25] == "ม.3") {
                                                                echo "selected";
                                                            }
                                                        } ?>>มัธยมศึกษาปีที่ 3</option>

                                <?php } ?>

                            <?php  } else {  // ถ้าไม่มี $_SESSION['SAS1'] 

                                echo $_SESSION["EDITE"][25];
                            ?>
                                <option value="ป.6" <?php if (isset($_SESSION["EDITE"])) {
                                                        if ($_SESSION["EDITE"][25] == "ป.6") {
                                                            echo "selected";
                                                        }
                                                    } ?>>ประถมศึกษาปีที่ 6</option>

                                <option value="ม.3" <?php if (isset($_SESSION["EDITE"])) {
                                                        if ($_SESSION["EDITE"][25] == "ม.3") {
                                                            echo "selected";
                                                        }
                                                    } ?>>มัธยมศึกษาปีที่ 3</option>

                            <?php  }  ?>



                            </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="formGroupInputLarge"> จากสถานศึกษา</label>
                    <label stlyle="color:#ff0000">(ไม่ต้องใส่คำว่า "โรงเรียน" ตัวอย่าง "ธาตุนารายณ์วิทยา")</label></br>


                    <input name="txtLschool" class="form-control input-lg" id="lschool" placeholder="ชื่อโรงเรียนเดิม" type="text" required="" autofocus="" value="<?php if (isset($_SESSION["EDITE"])) {
                                                                                                                                                                        echo $_SESSION["EDITE"][26];
                                                                                                                                                                    } ?>">

                    <?php echo "<select name='lbPROVINCE_SC' class=\"form-control input-lg\" required=''>";
                    echo "<option value=''>- เลือกจังหวัด -</option>\n";
                    $resultprovince = mysqli_query($connected,"select * from province order by PROVINCE_NAME");

                    while ($rowpro = mysqli_fetch_array($resultprovince)) { ?>
                        <option value="<?php echo $rowpro["PROVINCE_NAME"]; ?>" <?php if (isset($_SESSION["EDITE"])) {
                                                                                    if (strcmp($_SESSION["EDITE"][45], $rowpro["PROVINCE_NAME"]) == 0) {
                                                                                        echo "selected";
                                                                                    }
                                                                                } ?>> <?php echo $rowpro["PROVINCE_NAME"]; ?>
                        </option>
                    <?php } ?>
                    </select>

                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3 ">
                    <label for="formGroupInputLarge"> เกรดเฉลี่ยสะสม </label>


                    <input name="txtGPA" class="form-control input-lg" id="gpa" placeholder="GPA" type="text" required="" autofocus="" maxlength="4" OnKeyPress="return chkNumberAndDot(this)" value="<?php if (isset($_SESSION["EDITE"])) {
                                                                                                                                                                                                            echo $_SESSION["EDITE"][27];
                                                                                                                                                                                                        } ?>">


                </div>
                <div class="col-md-6 mb-3 ">
                    <!-- <label for="formGroupInputLarge"> คะแนนสอบ O-NET </label> -->

                    <!-- คะแนนสอบ O-NET </label> -->

                    <input name="txtschoolsecond" class="form-control input-lg" id="schoolsecond" placeholder="O-NET" type="hidden" required="" autofocus="" maxlength="4" OnKeyPress="return chkNumberAndDot(this)" value="0">


                </div>
            </div>







            <hr class="mb-4">






                <?php if (!isset($_GET["edite"])) { ?>

                    <button class="btn btn-primary btn-lg btn-block" name="btnNext6" type="submit" value="Login">
                        ถัดไป <span class="glyphicon glyphicon-random" aria-hidden="true"></span>
                    </button>

                <?php } else { ?>

                    <button class="btn btn-primary btn-lg btn-block" name="btnEdite6" type="submit" value="Login" onclick="if(confirm('ยืนยันการแก้ไขส่วนที่6')) return true; else return false;">
                        บันทึกแก้ไขส่วนที่ 6 <span class="glyphicon glyphicon-check" aria-hidden="true"></span>
                    </button>

                <?php } ?>
            </form>
</div>