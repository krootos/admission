<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>:: ระบบรับสมัครนักเรียนออนไลน์ โรงเรียนแม่จันวิทยาคม จังหวัดเชียงราย ::</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-item.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="../admission/img/icons/favicon.ico" />
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script language="JavaScript">
        function chkNumber(ele) {
            var vchar = String.fromCharCode(event.keyCode);
            if ((vchar < '0' || vchar > '9') && (vchar != '.')) return false;
            ele.onKeyPress = vchar;
        }
    </script>
    <script>
        function num_key(evt) {
            var iKeyCode;
            if (window.event) { // IE
                iKeyCode = evt.keyCode
            } else if (evt.which) { // Netscape/Firefox/Opera
                iKeyCode = evt.which
            }

            if ((iKeyCode >= 48 && iKeyCode <= 57) || iKeyCode == 8 || iKeyCode == 46) { // 8 Backapace , 46 Delete
                return true;
            } else {
                return false;
            }
        }

        function checkID(id) {
            if (id.length == 13) {
                for (i = 0, sum = 0; i < 12; i++) {
                    sum += parseFloat(id.charAt(i)) * (13 - i);
                }

                if ((11 - sum % 11) % 10 != parseFloat(id.charAt(12))) {
                    //alert('รหัสบัตรประชาชนไม่ถูกต้อง');
                    document.getElementById("sp_result").innerHTML = "<img src='../admission/img/fault.png'><font color='red'>&nbsp;&nbsp;0</font>";
                } else {
                    //alert('รหัสบัตรประชาชนถูกต้อง');
                    document.getElementById("sp_result").innerHTML = "<img src='../admission/img/correct.png'><font color='blue'>&nbsp;&nbsp;1</font>";
                }
            }
        }

        function fncSubmit() {
            if (document.getElementById("sp_result").innerHTML == "" || document.getElementById("sp_result").innerHTML.indexOf("0") != -1) {
                alert("กรุณากรอกเลขบัตรประชาชนให้ถูกต้องด้วยค่ะ!");
                document.getElementById("id_card").focus();
            } else {
                if (confirm("คุณต้องการที่จะสมัครเรียน ใช่หรือไม่ ?")) {
                    document.f.target = "_top";
                    document.f.method = "post";
                    document.f.action = "register.php?id_card=" + document.getElementById("id_card").value;
                    document.f.submit();
                }
            }
        }
    </script>

</head>

<body>



    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-lg-3">



            </div>
            <!-- /.col-lg-3 -->

            <div class="col-lg-6">


                <!-- /.card -->

                <div class="card card-outline-secondary my-4">
                    <div class="card-header">
                        <i class="fa fa-arrow-circle-right"></i>
                        <font color="#1498A3" size="4">&nbsp;ตรวจสอบเลขบัตรประชาชนก่อนทำการสมัคร </font>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>

                                        <form class="form-inline" method="post" name="f">
                                            ระบุเลขบัตรประชาชนผู้สมัคร : &nbsp;
                                            <input type="text" class="form-control" id="id_card" name="id_card" size="20" maxlength="13" onKeyPress="return num_key(event);" onkeyUp="checkID(this.value);">
                                            &nbsp;&nbsp; <button type="submit" class="btn btn-primary" name="Submit" onClick="fncSubmit();" value="ตกลง">ตกลง</button>
                                        </form>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span id="sp_result"></span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.card -->

            </div>
            <!-- /.col-lg-9 -->
        </div>

    </div>
    <!-- /.container -->
    <br><br><br>
   

    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>