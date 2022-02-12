<?php
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
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">



    <!-- Style for home -->
    <link rel="stylesheet" href="../../assets/css/app.css" type="text/css">
    <link rel="stylesheet" href="../../assets/css/header.css" type="text/css">
    <link rel="stylesheet" href="../../assets/css/footer.css" type="text/css">
    <link href="../../assets/css/cms.css" rel="stylesheet">
    <link href="../../assets/css/home.css" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/web_fonts.css" type="text/css">
    <link href="https://unpkg.com/aos@next/dist/aos.css" rel="stylesheet">

    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/1472613b73.js" crossorigin="anonymous"></script>

    <!-- Custom CSS -->
    <!-- <link href="../css/shop-item.css" rel="stylesheet"> -->

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



</head>

<body onload="remainLength();">

    <!-- Navigation -->
    <?php include 'menu.php'; ?>

    <!-- Page Content -->
    <div class="ml-auto mr-auto container">
        <div class="py-5 text-center">
        <div class="py-4 text-center"></div>
            <div class="col-md-12 tex-align-center">
                <div class="thumbnail">
                    <div class="col-md-12 mb-3">
                        <p> &nbsp;&nbsp;</p>
                    </div>
                    <div class="col-md-12 mb-3">
                        <p> &nbsp;&nbsp;</p>
                    </div>

                    <div class="my-2 p-5 bg-white rounded shadow text-center">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <form class="form-horizontal" name="searchform" id="searchform">
                                    <div class="form-group">
                                    <label ><h2 class="text-primary"> ตรวจสอบสถานะการสมัครเรียน </h2> </label><br>
                                        <label for="textsearch"><h3> ระบุเลขประจำตัวประชาชน :</h3> </label>
                                        <input type="text" name="itemname" id="itemname" class="form-control input-lg" maxlength="13" onkeyup="javascript:remainLength();" placeholder="เลขประจำตัวประชาชน 13 หลัก !">
                                    </div>
                                    <button type="button" class="btn btn-primary  btn-lg" id="btnSearch">
                                        <span class="glyphicon glyphicon-search"></span>
                                        ค้นหา
                                    </button>
                                </form>
                            </div>

                            <div class="loading"></div>
                            <div class="row w-100" id="list-data" style="margin-top: 10px;"> </div>
                        </div>
                    </div>


                    <script type="text/javascript" src="jquery-3.1.1.min.js"></script>
                    <script type="text/javascript">
                        $(function() {
                            $("#btnSearch").click(function() {
                                $.ajax({
                                    url: "actionStatus.php",
                                    type: "post",
                                    data: {
                                        itemname: $("#itemname").val()
                                    },
                                    beforeSend: function() {
                                        $(".loading").show();
                                    },
                                    complete: function() {
                                        $(".loading").hide();
                                    },
                                    success: function(data) {
                                        $("#list-data").html(data);
                                    }
                                });
                            });
                            $("#searchform").on("keyup keypress", function(e) {
                                var code = e.keycode || e.which;
                                if (code == 13) {
                                    $("#btnSearch").click();
                                    return false;
                                }
                            });
                        });
                    </script>



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

                        Copyright © ICT and Academic Department Thatnaraiwittaya School.
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


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js">
    </script>
    <script src="js/number_only.js">
    </script>
    <script src="js/remainlength.js">
    </script>

    <!-- datepicker js -->
    <!--script src="js/jquery.js"></script-->
    <!--script src="//getbootstrap.com/2.3.2/assets/js/google-code-prettify/prettify.js"></script-->
    <script src="datepicker/js/bootstrap-datepicker.js"></script>
    <script src="datepicker/js/bootstrap-datepicker-thai.js"></script>
    <script src="datepicker/js/locales/bootstrap-datepicker.th.js"></script>
    <script src="js/validator.js"></script>
    <script src="js/sc.js"></script>

    <script type="text/javascript">
        $(function() {
            setInterval(function() { // เขียนฟังก์ชัน javascript ให้ทำงานทุก ๆ 30 วินาที

            }, 1000);
        });
    </script>

    <script type="text/javascript">
        $(function() {
            setInterval(function() { // เขียนฟังก์ชัน javascript ให้ทำงานทุก ๆ 30 วินาที
                $.getJSON("fn_statistic.php", function(data) {
                    // if(data!=null && data.length>0){ // ถ้ามีข้อมูล
                    // เราสามารถเลือกข้อมูลบ้างส่วนมาแสดงได้
                    $("span#showDataM1").html(data[0].one); // ม.1 ทั้งหมด
                    $("span#showDataM12").html(data[0].two); // ม.1 ในเขต
                    $("span#showDataM11").html(data[0].three); // ม.1 นอกเขต
                    $("span#showDataM13").html(data[0].four); // Coming soon
                    $("span#showDataM14").html(data[0].five); // Coming soon

                    // ระดับ ม.4
                    $("span#showDataM4").html(data[0].six); //ม.4 ทั้งหมด
                    $("span#showDataM41").html(data[0].seven); //วิทย์ฯ-คณิตฯ
                    $("span#showDataM42").html(data[0].eigth); //วิทย์ฯ-คอมฯ
                    $("span#showDataM43").html(data[0].nine); //จีน
                    $("span#showDataM44").html(data[0].ten); //ญี่ปุ่น 
                    $("span#showDataM45").html(data[0].eleven); //เวียดนาม
                    $("span#showDataM46").html(data[0].twelve); //เกาหลี
                    $("span#showDataM47").html(data[0].thirteen); //ไทย-สังคม
                    $("span#showDataAll").html(data[0].fourteen); //ทั้งหมด
                    // เราสามารถวนลูปแสดงข้อมูล json ได้ ด้วย $.each() ฟังก์ขัน
                    //$.each(data,function(i,k){
                    // $("#showData").append(data[i].province_name+"<br>");
                    //});
                    //}
                }).responseText;
            }, 3000);
        });
    </script>

    <script type="text/javascript">
        function KeyCode(objId) {
            if (event.keyCode >= 48 && event.keyCode <= 57 || event.keyCode >= 65 && event.keyCode <= 90)
            //48-57(ตัวเลข) ,65-90(Eng ตัวพิมพ์ใหญ่ ) ,97-122(Eng ตัวพิมพ์เล็ก)
            {
                return true;
            } else {
                //alert("กรอกได้เฉพาะ a-z และ 0-9");
                return false;
            }
        }
    </script>
    <?php

    if (isset($_SESSION["Role"])) {
        if ($_SESSION["Role"] == 1) {
            include './excel/exportexceljack.php';
        }
    }
    ?>
</body>

</html>