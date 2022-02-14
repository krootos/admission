<div class="my-2 p-3 bg-white rounded shadow">
    <h3 class="border-bottom border-gray pb-2 mb-0 text-center" style="color: #23527c;">ลงทะเบียนผู้สมัครสอบ</h3>
    <span class="d-block">&nbsp;</span>

    <div class="row">
        <div class="col-sm-3">

        </div>
        <div class="col-sm-6">
            <form class="form-signin" method="post" action="index.php" name="formregister" id="formregister" data-toggle="validator">
                <div class="form-group form-group-lg">
                    <label class="col-sm-4 control-label" for="formGroupInputLarge" style="color: #23527c;">
                        ชื่อผู้ใช้งาน :
                    </label>
                    <input name="txtRegisno" class="form-control input-lg" id="txtRegisno" placeholder="เลขประจำตัวประชาชน 13 หลัก" type="text" required="" maxlength="13" OnKeyPress="return chkNumber(this)" onkeyup="javascript:remainLength();" autofocus="" value="<?php if (isset($_GET["id_card"])) {
                                                                                                                                                                                                                                                                            echo $_GET["id_card"];
                                                                                                                                                                                                                                                                        } ?>" readonly>
                    </input>

                </div>
                <div class="form-group form-group-lg">
                    <!-- <label class="col-sm-4 control-label" for="formGroupInputLarge" style="color: #23527c;">
                        รหัสผ่าน :
                    </label> -->


                    <input name="txtPwd" class="form-control input-lg" id="inputPassword" placeholder="เลขประจำตัวประชาชน" type="hidden" required="" readonly value="<?php if (isset($_GET["id_card"])) {
                                                                                                                                                                            echo $_GET["id_card"];
                                                                                                                                                                        } ?>">

                    <input name="txtconPwd" class="form-control input-lg" id="inputPassword3" placeholder="ยืนยันรหัสผ่าน" type="hidden" data-match="#inputPassword" data-match-error="รหัสผ่านไม่ตรงกัน" required="" value="<?php if (isset($_GET["id_card"])) {
                                                                                                                                                                                                                                    echo $_GET["id_card"];
                                                                                                                                                                                                                                } ?>" readonly>

                </div>
                <div class="form-group">
                    <div id="verify_math" style="padding-bottom: 5%;">
                        <span class="digital" style="background-position:<?php echo ($_SESSION['num_to_check'][0] * -30); ?>px 0px;"></span>
                        <span>+</span>
                        <span class="digital" style="background-position:<?php echo ($_SESSION['num_to_check'][1] * -30); ?>px 0px;"></span>
                        <span>=</span>

                    </div>


                    <input name="i_verify" type="text" maxlength="2" class="form-control" required="" placeholder="เลข 2 จำนวนบวกกัน" />

                </div>
                <div class="form-group">
                    <div class="col-md-12 mb-3 text-center">
                        <button name="register" class="btn btn-primary btn-lg-6" disabled="disabled" type="submit" value="Register" id="gen_button">
                            ลงทะเบียน
                        </button>
                        <a class="btn btn-success btn-md-6" href="../login.php?ses=destroy" target="_self" rel="noopener noreferrer">
                            <!-- <button name="ResetID" class="btn btn-success btn-lg" disabled="disabled" type="text" value="ResetID" id="ResetID"> -->
                            เปลี่ยนเลขประชาชน
                            <!-- </button> -->
                        </a>
                        <a class="btn btn-info btn-md-6" href="index.php?ses=destroy" target="_self" rel="noopener noreferrer">                                                                                                                                                                                                 
                            <!-- <button name="ResetID" class="btn btn-success btn-lg" disabled="disabled" type="text" value="ResetID" id="ResetID"> -->
                            เข้าสู่ระบบ
                            <!-- </button> -->
                            </a>


                    </div>
                </div>
        </div>







        <div class="form-group form-group-lg">
            <!-- <label class="col-sm-4 control-label" for="formGroupInputLarge"
                                        style="color: #23527c;">
                                            รหัสบัตรประจำตัวประชาชน
                                        </label>  -->

            <div class="col-sm-8">

                <input name="txtIDCard" type="hidden" class="form-control input-lg" id="txtIDCard" placeholder="เลขประจำตัวประชนชน 13 หลัก" type="text" maxlength="0" OnKeyPress="return chkNumber(this)" onkeyup="javascript:remainLength();" value="0000000000000">
                </input>
            </div>
        </div>


        </form>
    </div>
    <div class="col-sm-3">

    </div>
</div>




</div>