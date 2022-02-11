<?php
session_destroy();
session_start();

if (isset($_POST["login"], $_POST['txtRegisno'], $_POST['txtPwd'])) {
    include "conn.php";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">
    <title>
        T.N.W. Admission 2021
    </title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


    <!-- Bootstrap Core CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">



    <!-- Style for home -->
    <link rel="stylesheet" href="../assets/css/app.css" type="text/css">
    <link rel="stylesheet" href="../assets/css/header.css" type="text/css">
    <link rel="stylesheet" href="../assets/css/footer.css" type="text/css">
    <link href="../assets/css/cms.css" rel="stylesheet">
    <link href="../assets/css/home.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/web_fonts.css" type="text/css">
    <link href="https://unpkg.com/aos@next/dist/aos.css" rel="stylesheet">

    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/1472613b73.js" crossorigin="anonymous"></script>

    <!-- Custom CSS -->
    <!-- <link href="css/shop-item.css" rel="stylesheet"> -->

    <script type="text/javascript">
        deferstyle('https://unpkg.com/swiper@5.3.8/css/swiper.min.css', 500);
    </script>


    <!--script Datepicker-->
    <link href="datepicker/css/datepicker.css" rel="stylesheet" media="screen">

    <style type="text/css">
        #verify_math {
            display: block;
            height: 21px;
        }

        #verify_math span {
            display: block;
            height: 21px;
            width: 30px;
            position: relative;
            float: left;
            text-align: center;
            line-height: 20px;
            color: #000;
        }

        #verify_math span.digital {
            background: url(img/digi_img.jpg) left top no-repeat;
        }

        .big-checkbox {
            width: 30px;
            height: 30px;

        }
    </style>
    <script src="js/country.js"></script>
    <script language=Javascript>
        window.onLoad = dochange('province', -1);
    </script>



    <!-- ID Check  Script-->

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
          document.getElementById("sp_result").innerHTML = "<img src='img/fault.png'><font color='red'>&nbsp;&nbsp;0</font>";
          document.getElementById("sp_result_text").innerHTML = "<font color='red'>&nbsp;&nbsp;เลขประจำตัวประชาชนไม่ถูกต้อง</font>";
          
        } else {
          //alert('รหัสบัตรประชาชนถูกต้อง');
          document.getElementById("sp_result").innerHTML = "<img src='img/correct.png'><font color='blue'>&nbsp;&nbsp;1</font>";
          document.getElementById("sp_result_text").innerHTML = "<font color='blue'>&nbsp;&nbsp;เลขประจำตัวประชาชนถูกต้อง</font>";
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
          document.f.action = "admission/index.php?re=register&id_card=" + document.getElementById("id_card").value;
          document.f.submit();
        }
      }
    }
  </script>




</head>


<body class="bg-light">
    <!-- Navigation -->
    <?php include('menulogin.php'); ?>
    <!-- End Navigation -->

    <!-- Page Content -->
    <!-- <div id="ku-sides-comp"> -->
    <div class="main-carousel ml-auto mr-auto" id="IDCheck">
        <div class="row">
            <div class="col-md-12">


            </div>
            <!-- end col-md-3 -->

            <!-- Right content -->
            <div class="col-md-12">
                <div class="thumbnail">

                    <div class="caption-full">



                        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center">
                            <div class="auth-box border-secondary">

                                <div id="loginform">

                                    <!-- /.card -->

                                    <div class="card card-outline-secondary my-4">
                                        <div class="card-header">
                                            <!-- <h5 class="my-0 text-center">ลงทะเบียนด้วยเลขบัตรประชาชนก่อนทำการสมัคร </h5> -->
                                            <h5 class="my-0 text-center">ระบบรับสมัครนักเรียนโรงเรียนธาตุนารายณ์วิทยา </h5> 

                                        </div>
                                        <div class="card-body">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>

                                                            <form class="form-inline" method="post" name="f">

                                                                    <div class="text-danger">
                                                                        <h3>ปิดการรับสมัครนักเรียนประจำปีการศึกษา 2564!!</h3>
                                                                    </div>

                                                                <!-- <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="fa fa-address-card"></i></span>
                                                                    </div>
                                                                    <input type="text" class="form-control" placeholder="เลขประจำตัวประชาชนผู้สมัคร" id="id_card" name="id_card" size="30" maxlength="13" onKeyPress="return num_key(event);" onkeyUp="checkID(this.value);">
                                                                    &nbsp;&nbsp; <span> <button type="submit" class="btn btn-primary" name="Submit" onClick="fncSubmit();" value="ตกลง">ตกลง</button></span>
                                                                </div> -->
                                                                <!-- <input type="text" class="form-control" id="id_card" name="id_card" size="25" maxlength="13" onKeyPress="return num_key(event);" onkeyUp="checkID(this.value);"> -->

                                                            </form>
                                                        </td>
                                                    </tr>
                                                    <!-- <tr>
                                        <td><a href="check_passport.php"><br><i class='fa fa-hand-o-right'></i>  ปิดการรับสมัครนักเรียนประจำปีการศึกษา 2564!!</a></td>
                                    </tr> -->
                                                    <tr>
                                                        <td>
                                                            <span id="sp_result"></span><span id="sp_result_text"></span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- /.card -->


                                </div>

                            </div>
                        </div>


                        <div id="login"></div>

                        <?php include "loginform.php"; // FORM LOGIN HTML
                        ?>

                    </div><!-- /.caption-full -->

                    </img>
                </div><!-- /.thumbnail right content-->

            </div><!-- /.col-md-9 -->
            <!-- end right content -->
        </div> <!-- /.end row -->
    </div> <!-- /.end container -->
    <!-- end -->

    <!-- Footer -->
    <div class="container">
        <hr>
        <footer>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>
                        ระบบรับสมัครนักเรียนโรงเรียนธาตุนารายณ์วิทยา </br>
                        Developed by Kanokkan Chaiwongkot. <br>
                        Supporter by <a href="https://เช่ารถตู้สกลนคร.com" target="_blank">เช่ารถตู้สกลนคร</a><br>

                        Copyright © ICT and Academic Department <br> Thatnaraiwittaya School.
                    </p>
                </div>
            </div>
        </footer>
        </hr>
    </div>
    <!-- /.container footer -->
    <!-- End footer -->

    <script src="https://www.ku.ac.th/assets/vendor/jquery/jquery-3.4.1.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>

    <script defer src="https://www.ku.ac.th/assets/vendor/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script defer src="https://unpkg.com/swiper@5.3.8/js/swiper.min.js"></script>
    <script defer src="https://www.ku.ac.th/assets/js/vendor/anime.min.js" type="text/javascript"></script>
    <script defer src="https://www.ku.ac.th/assets/js/components/header.js" type="text/javascript"></script>
    <script defer src="https://www.ku.ac.th/assets/js/components/footer.js" type="text/javascript"></script>


    <!-- Script for home -->
    <script defer src="https://www.ku.ac.th/assets/js/components/news-and-activities.js" type="text/javascript">
    </script>
    <script defer src="https://www.ku.ac.th/assets/js/components/research.bundle.js" type="text/javascript"></script>
    <script defer src="https://www.ku.ac.th/assets/js/home/home.js" type="text/javascript"></script>
    <script defer src="https://www.ku.ac.th/assets/js/components/bus-station.js" type="text/javascript"></script>
    <script defer src="https://www.ku.ac.th/assets/js/components/hero-banner.js" type="text/javascript"></script>
    <script defer src="https://www.ku.ac.th/assets/js/vendor/rellax.min.js" type="text/javascript"></script>
    <script defer src="assets/js/fac-n-cur.bundle.js" type="text/javascript"></script>

    <script defer src="https://unpkg.com/aos@next/dist/aos.js"></script>


    <script type="text/javascript">
        var move_marquee;
        var marquee_status;
        var marquee_move;
        var marquee_speed;
        var marquee_step;
        var marquee_direction;
        var newLeft;
        var obj;
        $(function() {

            var divCover_w = $(".containMarquee").width(); // หาความกว้างพื้นที่ส่วนแสดง marquee
            var divMarquee_w = $(".obj_marquee").width(); //หาความกว้างของเนื้อหา marquee
            obj = $(".obj_marquee"); // กำหนดเป็น ตัวแปร jQuery object
            marquee_direction = 1; /* กำหนดการเลื่อนซ้ายขวา 1 = จากขวามาซ้าย 2 = จากซ้ายไปขวา */
            marquee_speed = 30; // กำหนดความเร็วของเวลาในการเคลื่อนที่ ค่ายิ่งมาก จะช้า
            marquee_step = 2; // กำหนดระยะการเคลื่อนที่ ค่ายิ่งมาก จะเร็ว

            obj.css("left", (marquee_direction == 1) ? divCover_w : -divMarquee_w);
            marquee_move = function(obj) {
                marquee_status = setTimeout(function() {
                    move_marquee(obj)
                }, marquee_speed);
            }
            move_marquee = function(obj) {
                var condition_mq = (marquee_direction == 2) ? 'newLeft<divCover_w' : 'newLeft>-divMarquee_w';
                var initLeft = (marquee_direction == 1) ? divCover_w : -divMarquee_w;
                newLeft = (marquee_direction == 1) ?
                    parseInt(obj.css('left')) - marquee_step :
                    parseInt(obj.css('left')) + marquee_step;
                if (eval(condition_mq)) {
                    obj.css({
                        'left': newLeft + 'px'
                    });
                } else {
                    obj.css("left", initLeft);
                }
                marquee_move(obj);
            }
            marquee_move(obj);


            $(".containMarquee").mouseover(function() {
                clearTimeout(marquee_status);
            }).mouseout(function() {
                marquee_move(obj);
            });


        });
    </script>
</body>


</html>