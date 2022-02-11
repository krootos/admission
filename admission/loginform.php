
<div class="col-md-12 mb-3">

<form class="form-horizontal" method="post" action="index.php" name="formlogin">
    <div class="form-group form-group-lg">
        <label class="col-sm-3 control-label" for="formGroupInputLarge">
            รหัสเข้าใช้งาน
        </label>
        <!--label for="inputEmail3" class="col-sm-2 control-label">เลขที่ใบสมัคร</label-->
        <div class="col-sm-12">
            <input name="txtRegisno" class="form-control input-lg" id="user" placeholder="เลขประจำตัวประชาชน 13 หลัก" type="text"
                required="" maxlength="13" onkeyup="javascript:remainLength();"
                value="<?php if(isset($_POST["txtRegisno"])){ echo $_POST["txtRegisno"]; }?>">
            </input>
        </div>
    </div>
    <div class="form-group form-group-lg">
        <label class="col-sm-3 control-label" for="formGroupInputLarge">
            รหัสผ่าน
        </label>
        <!--label for="inputPassword3" class="col-sm-2 control-label">รหัสผ่าน</label-->
        <div class="col-sm-12">
            <input name="txtPwd" class="form-control input-lg" id="inputPassword3" 
                type="password" required="" placeholder="เลขประจำตัวประชาชน 13 หลัก" type="text"
                maxlength="13" onkeyup="javascript:remainLength();">
            </input>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
            <div >
                <label>
                    <input type="checkbox">
                    Remember me
                    </input>
                </label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-1 col-sm-11 text-center">
            <button name="login" class="btn btn-success btn-lg" type="submit" value="Login">
                เข้าสู่ระบบ
            </button>
            <a href="../login.php" name="regis" class="btn btn-info btn-lg" >
                ลงทะเบียน
            </a>
        </div>
    </div>
</form>


</div>