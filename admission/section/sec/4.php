<?php session_start(); ?>

<div class="col-md-12 mb-3">


    <h3 class="text-center">
        <p>
            <span class="glyphicon glyphicon-share"></span>
            4. ประเภทนักเรียน 
        </p>
    </h3>

    <?php //echo "aaaaaaa".$_SESSION['EDITE'][1]; 
    ?>

    <?php
    if (isset($_SESSION['SAS1'])) {
        $checkm4 = "4";
        if (strcmp($_SESSION['SAS1'][1], $checkm4) != 0) { ?>
            <div class="alert alert-danger text-center" role="alert">

                <i>
                    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                    ส่วนนี้ให้ท่านตรวจสอบให้ถูกต้อง อ่านข้อความข้างต้น ก่อนทำการเลือก
                </i>
            </div>

            <div class="alert alert-tumbon text-left" role="alert">
                <p>
                    <i class="fas fa-address-book fa-2x"></i>
                    นักเรียนในเขตพื้นที่บริการ คือ นักเรียนที่มีรายชื่อในทะเบียนบ้าน ที่อยู่ในเขตเขตพื้นที่บริการโรงเรียนธาตุนารายณ์วิทยา ได้แก่ <br> ตำบล ธาตุเชิงชุม
                    ธาตุนาเวง พังขว้าง ฮางโฮง เชียงเครือ ก่อนวันที่ 16 พฤษภาคม 2562
                </p>
                <p>
                    <i class="fas fa-address-book fa-2x"></i>
                    นักเรียนนอกเขตพื้นที่บริการ คือ นักเรียนที่มีรายชื่อในทะเบียนบ้าน ไม่อยู่ในเขตพื้นที่บริการฯ
                </p>
                <!-- <p>
                    หรือ นักเรียนที่มีรายชื่อในทะเบียนบ้าน ที่อยู่ในเขตพื้นที่บริการฯ หลังวันที่ 16 พฤษภาคม 2562
                </p> -->
                <!-- <p>
                    <i class="far fa-calendar-check fa-2x"></i>
                    หากท่านไม่แน่ใจกรุณาตรวจสอบประเภทของผู้สมัครก่อน <strong><a href="chdate.html" target="_blank">คลิ๊กที่นี่</a></strong>
                </p> -->
            </div>

        <?php
        } else { ?>
            <div class="alert alert-danger text-center" role="alert">

                <i>
                    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                    ระดับชั้นมัธยมศึกษาปีที่ 4 ไม่ต้องเลือกประเภทนักเรียน
                </i>
            </div>
        <?php
        }
    } else { ?>

    <?php
    }
    ?>


    <div class="col-md-12 mb-3">
        <?php if (!isset($_GET["edite"])) { ?>
            <form class="needs-validation" name="Formnext2" id="Formnext2" method="post" action="index.php" >
            <?php
        } else { ?>
                <form class="needs-validation" name="Formnext2" id="Formnext2" method="post" action="index.php?edite=true" >
                <?php
            } ?>
                <?php
                if (isset($_SESSION['SAS1'])) {
                    $checkm4 = "4";
                    if (strcmp($_SESSION['SAS1'][1], $checkm4) != 0) { ?>
                        <div class="custom-control custom-radio">
                            <h4>
                                <label>
                                    <input type="radio" name="raOption" id="option2" value="นักเรียนในเขตพื้นที่บริการ" onclick="javascript:chickCheckbox();" <?php if (isset($_SESSION["EDITE"]) && $_SESSION["EDITE"][2] == "นักเรียนในเขตพื้นที่บริการ") {
                                                                                                                                                                    echo "checked";
                                                                                                                                                                } ?>>

                                    นักเรียนในเขตพื้นที่บริการ
                                    <h6>
                                        <label>
                                            <i class="fas fa-address-book "></i>&nbsp;
                                            นักเรียนในเขตพื้นที่บริการ คือ นักเรียนต้องมีชื่อในทะเบียนบ้าน ในเขตพื้นที่บริการ 5 ตำบล ได้แก่
                                            <br /><i style="color:#0000ff">ตำบลธาตุเชิงชุม ตำบลธาตุนาเวง ตำบลพังขว้าง ตำบลฮางโฮง ตำบลเชียงเครือ <br /></i>
                                        </label>
                                    </h6>
                                </label>
                            </h4>

                        </div>


                        <div class="custom-control custom-radio">
                            <h4><label>
                                    <input type="radio" name="raOption" id="option1" value="นักเรียนนอกเขตพื้นที่บริการ" onclick="javascript:chickCheckbox();" required="" <?php
                                                                                                                                                                            if (isset($_SESSION["EDITE"]) && $_SESSION["EDITE"][2] == "นักเรียนนอกเขตพื้นที่บริการ") {
                                                                                                                                                                                echo "checked";
                                                                                                                                                                            } else {

                                                                                                                                                                                if (isset($_SESSION['SAS1'])) {

                                                                                                                                                                                    if ($_SESSION['SAS1'][1] == "4") {

                                                                                                                                                                                        // echo "checked";
                                                                                                                                                                                    }
                                                                                                                                                                                }
                                                                                                                                                                            }
                                                                                                                                                                            ?>>
                                    นักเรียนนอกเขตพื้นที่บริการ
                                    <h6>
                                        <label>
                                            <i class="fas fa-address-book "></i>&nbsp;
                                            นักเรียนนอกเขตพื้นที่บริการ คือ นักเรียนที่มีรายชื่อในทะเบียนบ้าน ไม่อยู่ในเขตพื้นที่บริการ 
                                        </label>
                                    </h6>
                                </label>
                            </h4>
                        </div>



                    <?php }  ?>

                    <div class="radio">
                        <!-- <h4>
                                <label>
                                    <input type="radio" name="raOption" id="option3"  value="นักเรียนที่มีเงื่อนไขพิเศษ"
                                    onclick="javascript:chickCheckbox();"
                            <?php if (isset($_SESSION["EDITE"]) && $_SESSION["EDITE"][2] == "นักเรียนที่มีเงื่อนไขพิเศษ") {
                                echo "checked";
                            } ?>>

                นักเรียนที่มีเงื่อนไขพิเศษ
                                </label>
                            </h4> -->

                    </div>

                    <div class="radio">
                        <!-- <h4>
                                <label>
                                    <input type="radio" name="raOption" id="option4"  value="นักเรียนที่มีความสามารถพิเศษ"
                                    onclick="javascript:chickCheckbox();"
                <?php if (isset($_SESSION["EDITE"]) && $_SESSION["EDITE"][2] == "นักเรียนที่มีความสามารถพิเศษ") {
                        echo "checked";
                    } ?>>

                นักเรียนที่มีความสามารถพิเศษ
                                </label>
                            </h4> -->

                    </div>


                    <?php

                } else { //เมื่อ !isset($_SESSION['SAS1'])     

                    if (isset($_SESSION["EDITE"])) {
                        $checkeditm4 = "4";
                        if (strcmp($_SESSION["EDITE"][1], $checkeditm4) != 0) { ?>
                            <div class="custom-control custom-radio">
                                <h4>
                                    <label>
                                        <input type="radio" name="raOption" id="option2" value="นักเรียนในเขตพื้นที่บริการ" onclick="javascript:chickCheckbox();" <?php if (isset($_SESSION["EDITE"]) && $_SESSION["EDITE"][2] == "นักเรียนในเขตพื้นที่บริการ") {
                                                                                                                                                                        echo "checked";
                                                                                                                                                                    } ?>>

                                        นักเรียนในเขตพื้นที่บริการ
                                        <h6>
                                            <label>
                                                <i class="fas fa-address-book"></i>&nbsp;
                                                ( นักเรียนในเขตพื้นที่บริการ คือ นักเรียนต้องมีชื่อในทะเบียนบ้านในเขตพื้นที่บริการของโรงเรียน 5 ตำบล ได้แก่ ธาตุเชิงชุม ธาตุนาเวง พังขว้าง ฮางโฮง เชียงเครือ )
                                            </label>
                                        </h6>
                                    </label>

                                </h4>


                            </div>






                        <?php } ?>

                        <div class="custom-control custom-radio" <?php if (isset($_SESSION["EDITE"]) && $_SESSION["EDITE"][2] == "") {

                                                                        echo " style='display:none' ";
                                                                    } ?>>
                            <h4>
                                <label>
                                    <input type="radio" name="raOption" id="option3" value="นักเรียนนอกเขตพื้นที่บริการ" onclick="javascript:chickCheckbox();" <?php if (isset($_SESSION["EDITE"]) && $_SESSION["EDITE"][2] == "นักเรียนนอกเขตพื้นที่บริการ") {
                                                                                                                                                                    echo "checked";
                                                                                                                                                                } ?>>

                                    นักเรียนนอกเขตพื้นที่บริการ
                                    <h6>
                                        <label>
                                            <i class="fas fa-address-book "></i>&nbsp;
                                            นักเรียนนอกเขตพื้นที่บริการ คือ นักเรียนที่มีรายชื่อในทะเบียนบ้าน ไม่อยู่ในเขตพื้นที่บริการ 
                                        </label>
                                    </h6>
                                </label>
                            </h4>


                        </div>

                        <!-- <div class="radio">
                            <h4>
                                <label>
                                    <input type="radio" name="raOption" id="option4"  value="นักเรียนที่มีความสามารถพิเศษ"
                                    onclick="javascript:chickCheckbox();"
            <?php if (isset($_SESSION["EDITE"]) && $_SESSION["EDITE"][2] == "นักเรียนที่มีความสามารถพิเศษ") {
                            echo "checked";
                        } ?>>

            นักเรียนที่มีความสามารถพิเศษ
                                </label>
                            </h4>

                        </div> -->

                <?php }
                } ?>






                <!--div class="radio">
                <h4>
                    <label>
                        <input type="radio" name="raOption" id="option3" value="นักเรียนเงื่อนไขพิเศษ"
                        onclick="javascript:chickCheckbox();"
                        <?php //if(isset($_SESSION["EDITE"]) && $_SESSION["EDITE"][2] == "นักเรียนเงื่อนไขพิเศษ"){ echo "checked"; } 
                        ?>>
                        นักเรียนเงื่อนไขพิเศษ
                    </label>
                </h4>
            </div-->


                <!--โค้ดที่หายไปอยู่ที่ไฟล์bak4.php!-->


                <!--div class="col-sm-offset-2 col-sm-10 text-center"-->
                <hr class="mb-4">
                <?php if (!isset($_GET["edite"])) { ?>

                    <button class="btn btn-primary btn-lg btn-block" name="btnNext4" type="submit" value="Login">
                        ถัดไป <span class="glyphicon glyphicon-random" aria-hidden="true"></span>
                    </button>

                <?php } else { ?>

                    <button class="btn btn-primary btn-lg btn-block" name="btnEdite4" type="submit" value="Login" onclick="if(confirm('ยืนยันการแก้ไขส่วนที่4')) return true; else return false;">
                        บันทึกการแก้ไขส่วนที่ 4 <span class="glyphicon glyphicon-check" aria-hidden="true"></span>
                    </button>

                <?php } ?>

                </form>

    </div>
</div>