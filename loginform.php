<form class="form-horizontal ali" method="post" action="admission/index.php" name="formlogin">
    <div class="auth-box border-secondary"><p>&nbsp;</p>
        <center><span style="color: indianred;"> *เข้าสู่ระบบได้เมื่อท่านลงทะเบียนเสร็จแล้ว <br>
            เพื่อทำการสมัครหรือแก้ไขข้อมูล และพิมพ์ใบสมัคร</span><p>&nbsp;</p>
            

            <div class="form-group ">
                <label class="col-sm-2 control-label" for="formGroupInputLarge">
                    ชื่อผู้ใช้ :
                </label>
                <!--label for="inputEmail3" class="col-sm-2 control-label">เลขที่ใบสมัคร</label-->
                <div class="col-lg-5">
                    <input name="txtRegisno" class="form-control input-lg" id="user" placeholder="เลขประจำตัวประชาชน 13 หลัก" type="text" required="" maxlength="13" onkeyup="javascript:remainLength();" value="<?php if (isset($_POST["txtRegisno"])) {
                                                                                                                                                                                                                        echo $_POST["txtRegisno"];
                                                                                                                                                                                                                    } ?>">
                    </input>
                </div>
            </div>
            <div class="form-group form-group-lg">
                <label class="col-sm-3 control-label" for="formGroupInputLarge">
                    รหัสผ่าน :
                </label>
                <!--label for="inputPassword3" class="col-sm-2 control-label">รหัสผ่าน</label-->
                <div class="col-lg-5">
                    <input name="txtPwd" class="form-control " id="inputPassword3" placeholder="เลขประจำตัวประชาชน 13 หลัก" type="password" required="">
                    </input>
                </div>
            </div>
            <!-- <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox">
                            จดจำฉัน
                            </input>
                        </label>
                    </div>
                </div>
            </div> -->
            <div class="form-group">
                <div class="col-sm-offset-1 col-sm-11 text-center">
                    <button name="login" class="btn btn-success btn-lg" type="submit" value="Login">
                        เข้าสู่ระบบ
                    </button>
                </div>
            </div>
        </center>
    </div>
</form>