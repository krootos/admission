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
    <meta http-equiv=refresh content="600; url=../login.php?ses=destroy">
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
    <link href="css/shop-item.css" rel="stylesheet">

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
    <p>&nbsp;</p>
    <div class="ml-auto mr-auto container">
        <div class="py-5 text-center">
            <!-- Start excel -->
            <div class="col-md-12 tex-align-center">
                <?php if (isset($_SESSION["Role"])) {
                    if ($_SESSION["Role"] == 1) { ?>
                        <div class="list-group">
                            <p class="list-group-item " style="border-bottom:#999 2px solid; background:#188407; color: #FFF; ">
                                <span class="glyphicon glyphicon-equalizer">
                                </span>
                                EXPORT EXCEL<br>
                                (นักเรียนมายื่นเอกสาร)
                            </p>
                            <form class="form-horizontal" name="formexcel" enctype="multipart/form-data" method="post" action="index.php">
                                <div class="list-group-item">
                                    <div>
                                        <span class="glyphicon glyphicon-thumbs-up"></span>
                                        <select name="lbexcel" id='excel'>
                                            <option value="1" <?php if (isset($_POST["lbexcel"])) {
                                                                    if ($_REQUEST["lbexcel"] == "1") {
                                                                        echo "selected";
                                                                    }
                                                                } ?>>
                                                รายชื่อ ม.1 ทั้งหมด</option>
                                            <option value="2" <?php if (isset($_POST["lbexcel"])) {
                                                                    if ($_REQUEST["lbexcel"] == "2") {
                                                                        echo "selected";
                                                                    }
                                                                } ?>>
                                                รายชื่อ ม.1 ในเขตฯ</option>
                                            <option value="3" <?php if (isset($_POST["lbexcel"])) {
                                                                    if ($_REQUEST["lbexcel"] == "3") {
                                                                        echo "selected";
                                                                    }
                                                                } ?>>
                                                รายชื่อ ม.1 นอกเขตฯ </option>
                                            <option value="4" <?php if (isset($_POST["lbexcel"])) {
                                                                    if ($_REQUEST["lbexcel"] == "4") {
                                                                        echo "selected";
                                                                    }
                                                                } ?>>
                                                รายชื่อ ม.4 ทั้งหมด </option>
                                            <option value="5" <?php if (isset($_POST["lbexcel"])) {
                                                                    if ($_REQUEST["lbexcel"] == "5") {
                                                                        echo "selected";
                                                                    }
                                                                } ?>>
                                                รายชื่อ ม.4 วิทย์ฯ-คณิตฯ</option>
                                            <option value="6" <?php if (isset($_POST["lbexcel"])) {
                                                                    if ($_REQUEST["lbexcel"] == "6") {
                                                                        echo "selected";
                                                                    }
                                                                } ?>>
                                                รายชื่อ ม.4 วิทย์ฯ-คอมฯ</option>
                                            <option value="7" <?php if (isset($_POST["lbexcel"])) {
                                                                    if ($_REQUEST["lbexcel"] == "7") {
                                                                        echo "selected";
                                                                    }
                                                                } ?>>
                                                รายชื่อ ม.4 อังกฤษ-จีน</option>
                                            <option value="8" <?php if (isset($_POST["lbexcel"])) {
                                                                    if ($_REQUEST["lbexcel"] == "8") {
                                                                        echo "selected";
                                                                    }
                                                                } ?>>
                                                รายชื่อ ม.4 อังกฤษ-ญี่ปุ่น</option>
                                            <option value="9" <?php if (isset($_POST["lbexcel"])) {
                                                                    if ($_REQUEST["lbexcel"] == "9") {
                                                                        echo "selected";
                                                                    }
                                                                } ?>>
                                                รายชื่อ ม.4 อังกฤษ-เวียดนาม</option>
                                            <option value="10" <?php if (isset($_POST["lbexcel"])) {
                                                                    if ($_REQUEST["lbexcel"] == "10") {
                                                                        echo "selected";
                                                                    }
                                                                } ?>>
                                                รายชื่อ ม.4 อังกฤษ-เกาหลี</option>
                                            <option value="11" <?php if (isset($_POST["lbexcel"])) {
                                                                    if ($_REQUEST["lbexcel"] == "11") {
                                                                        echo "selected";
                                                                    }
                                                                } ?>>
                                                รายชื่อ ม.4 ไทย-สังคม</option>
                                            <option value="12" <?php if (isset($_POST["lbexcel"])) {
                                                                    if ($_REQUEST["lbexcel"] == "12") {
                                                                        echo "selected";
                                                                    }
                                                                } ?>>
                                                รายชื่อ ม.1 ยังไม่ยืนยัน</option>
                                            <option value="13" <?php if (isset($_POST["lbexcel"])) {
                                                                    if ($_REQUEST["lbexcel"] == "13") {
                                                                        echo "selected";
                                                                    }
                                                                } ?>>
                                                รายชื่อ ม.1 ในเขตฯ ยังไม่ยืนยัน</option>
                                            <option value="14" <?php if (isset($_POST["lbexcel"])) {
                                                                    if ($_REQUEST["lbexcel"] == "14") {
                                                                        echo "selected";
                                                                    }
                                                                } ?>>
                                                รายชื่อ ม.1 นอกเขตฯ ยังไม่ยืนยัน</option>
                                            <option value="15" <?php if (isset($_POST["lbexcel"])) {
                                                                    if ($_REQUEST["lbexcel"] == "15") {
                                                                        echo "selected";
                                                                    }
                                                                } ?>>
                                                รายชื่อ ม.4 ยังไม่ยืนยัน</option>
                                            <!--option value="6"
                                                    <?php //if(isset($_POST["lbexcel"])) { if($_REQUEST["lbexcel"] == "6"){  echo"selected"; } } 
                                                    ?>>รายชื่อ ม.4 ทั่วไป</option-->
                                            <!--option value="7"
                                                    <?php //if(isset($_POST["lbexcel"])) { if($_REQUEST["lbexcel"] == "7"){  echo"selected"; } } 
                                                    ?>>รายชื่อ ม.4 ความสามารถพิเศษ</option-->
                                        </select>
                                        <div class="text-center">.....</div>
                                        <div class="text-center">
                                            <button name="btexcel" class="btn btn-success">Download!</button>
                                        </div>
                                    </div>

                                </div>
                            </form>
                            <!--/.formexcel -->
                        </div>
                        <!--/.list-group excel -->
                <?php }
                } ?>



            </div> <!-- end excel -->
        </div>
        <div class="row">




            <!-- Right content -->
            <div class="col-md-12 order-md-3">
                <div class="container">



                    <?php
                    if (isset($_SESSION["direct"]) && ($_SESSION["direct"] == 1)) { //ตรวจสอบว่าผ่านการ Login หรือยัง
                        if (isset($_SESSION["NaID"])) {
                            if (!isset($_POST['btnNext7'])) { // ต้องไม่มีตัวแปรเพิ่มฐานข้อมูล
                                if (isset($_GET['adminID'])) {
                                    $_SESSION["NaID"] = $_GET['adminID'];
                                }
                                include "fn.php";
                                selectfirst($nid);

                                if (isset($_GET["edite"])) { // กดปุ่มแก้ไข
                                    /* if(isset($_POST["btnEdite1"])){ //กดปุ่มแก้ไข Button1
                                            $nid  = $_SESSION["NaID"];
                                            $data = $_POST["lbClass"];
                                            updatedatabt1($nid, $data);
                                            }*/
                                    if (!isset($_GET['Refresh'])) {
                                        include "section/1.php";
                                    }
                                    if (isset($_POST["btnEdite2"])) { //กดปุ่มแก้ไข Button2
                                        $nid = $_SESSION["NaID"];
                                        $data[1] = $_POST['lbSname'];
                                        $data[2] = htmlspecialchars(trim($_POST['txtFname']));
                                        $data[3] = htmlspecialchars(trim($_POST['txtLname']));
                                        $data[4] = htmlspecialchars(trim($_POST['txtBirthday']));
                                        $data[5] = $_POST['lbSex'];
                                        $data[6] = $_POST['lbReli'];
                                        $data[7] = htmlspecialchars(trim($_POST['txtReginal']));
                                        $data[8] = $_POST['lbReginality'];
                                        $data[9] = $_POST['lbGroupblood'];
                                        if (isset($_SESSION['SAS1'])) {
                                            if ($_SESSION['SAS1'][1] == "4") {
                                                $data[10] = $_POST['txtstuIDold'];
                                            }
                                        }
                                        updatedatabt2($nid, $data);
                                    }
                                    include "section/sec/2.php";

                                    if (isset($_POST["btnEdite3"])) { //กดปุ่มแก้ไข Button2
                                        $nid = $_SESSION["NaID"];
                                        $data[1] = htmlspecialchars(trim($_POST['txtHaddress']));
                                        $data[2] = htmlspecialchars(trim($_POST['txtMoo']));
                                        $data[3] = htmlspecialchars(trim($_POST['txtSoi']));
                                        $data[4] = $_POST['lbProvince']; // ID จังหวัด
                                        $data[5] = $_POST['lbAmphor']; //ID อำเภอ
                                        $data[6] = $_POST['lbDistrict']; //ID ตำบล
                                        $data[7] = htmlspecialchars(trim($_POST['txtTel']));
                                        $data[8] = htmlspecialchars(trim($_POST['txtEmail']));
                                        $data[9] = htmlspecialchars(trim($_POST['txtRoad']));
                                        updatedatabt3($nid, $data);
                                    }
                                    include "section/sec/3.php";

                                    if (isset($_POST["btnEdite4"])) { //กดปุ่มแก้ไข Button2
                                        $nid = $_SESSION["NaID"];
                                        $data[1] = $_POST['raOption'];
                                        if (isset($_POST['lbSpecial'])) {
                                            $data[2] = $_POST['lbSpecial'];
                                        } else {
                                            $data[2] = "";
                                        }
                                        if (isset($_POST['txtaMore'])) {
                                            $data[3] = htmlspecialchars($_POST['txtaMore']); //txta
                                        } else {
                                            $data[3] = "";
                                        }

                                        updatedatabt4($nid, $data);
                                    }
                                    include "section/sec/4.php";

                                    if (isset($_POST["btnEdite4-1"])) { //กดปุ่มแก้ไข Button2
                                        $nid = $_SESSION["NaID"];
                                        $data[1] = $_POST['raOptionspe'];

                                        updatedatabt41($nid, $data);
                                    }
                                    // include "section/sec/4-1.php";

                                    if (isset($_POST["btnEdite4-2"])) { //กดปุ่มแก้ไข Button2
                                        $nid = $_SESSION["NaID"];
                                        $data[1] = $_POST['lbMore'];

                                        updatedatabt42($nid, $data);
                                    }
                                    // include "section/sec/4-2.php";

                                    if (isset($_POST["btnEdite5"])) { //กดปุ่มแก้ไข Button2
                                        $nid = $_SESSION["NaID"];
                                        $datadd[1] = $_POST['lbPlan1'];
                                        $datadd[2] = $_POST['lbPlan2'];
                                        $datadd[3] = $_POST['lbPlan3'];
                                        $datadd[4] = $_POST['lbCome'];
                                        //echo  $_SESSION["newdata"] = $_POST['lbPlan3'];
                                        updatedatabt5($nid, $datadd);
                                    }
                                    include "section/sec/5.php";

                                    if (isset($_POST["btnEdite6"])) { //กดปุ่มแก้ไข Button2
                                        $nid = $_SESSION["NaID"];
                                        $data[1] = htmlspecialchars(trim($_POST['txtLschool']));
                                        $data[2] = htmlspecialchars(trim($_POST['txtGPA']));
                                        $data[3] = htmlspecialchars(trim($_POST['lbPROVINCE_SC']));
                                        $data[4] = htmlspecialchars(trim($_POST['txtschoolsecond']));
                                        updatedatabt6($nid, $data);
                                    }
                                    include "section/6.php";

                                    if (isset($_POST["btnEdite7"])) { //กดปุ่มแก้ไข Button2
                                        $nid = $_SESSION["NaID"];
                                        $data[1] = htmlspecialchars(trim($_POST['txtSnamefa']));
                                        $data[2] = htmlspecialchars(trim($_POST['txtFnamefa']));
                                        $data[3] = htmlspecialchars(trim($_POST['txtLnamefa']));
                                        $data[4] = htmlspecialchars(trim($_POST['txtTelfa']));
                                        $data[5] = htmlspecialchars(trim($_POST['lbSnamema']));
                                        $data[6] = htmlspecialchars(trim($_POST['txtFnamema']));
                                        $data[7] = htmlspecialchars(trim($_POST['txtLnamema']));
                                        $data[8] = htmlspecialchars(trim($_POST['txtTelma']));
                                        $data[9] = $_POST['lbStatus'];
                                        // $data[9] = $_POST['lbStatus'];
                                        $data[10] = $_POST['lbFaOccupation'];
                                        $data[11] = $_POST['lbMaOccupation'];
                                        $data[12] = $_POST['raTypepa'];
                                        if (isset($_POST['txtFnamepa']) && ($_POST['txtFnamepa'] != "")) {
                                            $data[13] = $_POST['txtSnamepa'];
                                            $data[14] = $_POST['txtFnamepa'];
                                            $data[15] = $_POST['txtLnamepa'];
                                            $data[16] = $_POST['txtTelpa'];
                                            $data[17] = $_POST['lbPaOccupation'];
                                            $data[18] = $_POST['lbRelation'];
                                        }
                                        updatedatabt7($nid, $data);
                                    }
                                    include "section/7.php";
                                }
                            }
                        }

                        if (isset($_POST['btnNext1'])) {
                            $_SESSION['SAS1'][1] = $_POST['lbClass']; //lb

                            if (!isset($_POST['btnNext2'])) {
                                if (!isset($_POST['btnNext3'])) {
                                    if (!isset($_POST['btnNext4']) && !isset($_POST['btnNext4-1']) && !isset($_POST['btnNext4-2'])) {
                                        if (!isset($_POST['btnNext5'])) {
                                            if (!isset($_POST['btnNext6'])) {
                                                if (!isset($_POST['btnNext7'])) {
                                                    include 'section/breadcrumb.php';
                                                    include 'section/sec/2.php';
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }

                        if (isset($_GET['Refresh'])) {
                            include 'section/breadcrumb.php';
                            include 'section/sec/3.php';
                        }
                        if (isset($_POST['btnNext2'])) {
                            // ย้าย 4 มา

                            if (!isset($_POST['btnNext1'])) {
                                if (!isset($_POST['btnNext3'])) {
                                    if (!isset($_POST['btnNext4']) && !isset($_POST['btnNext4-1']) && !isset($_POST['btnNext4-2'])) {
                                        if (!isset($_POST['btnNext5'])) {
                                            if (!isset($_POST['btnNext6'])) {
                                                if (!isset($_POST['btnNext7'])) {
                                                    include 'section/breadcrumb.php';
                                                    include 'section/sec/3.php';

                                                    $_SESSION['SAS4'][1] = $_POST['lbSname'];
                                                    $_SESSION['SAS4'][2] = htmlspecialchars(trim($_POST['txtFname']));
                                                    $_SESSION['SAS4'][3] = htmlspecialchars(trim($_POST['txtLname']));
                                                    $_SESSION['SAS4'][4] = htmlspecialchars(trim($_POST['txtBirthday']));
                                                    $_SESSION['SAS4'][5] = $_POST['lbSex'];
                                                    $_SESSION['SAS4'][6] = $_POST['lbReli'];
                                                    $_SESSION['SAS4'][7] = htmlspecialchars(trim($_POST['txtReginal']));
                                                    $_SESSION['SAS4'][8] = $_POST['lbReginality'];
                                                    $_SESSION['SAS4'][9] = $_POST['lbGroupblood'];
                                                    $_SESSION['SAS4'][10] = $_POST['txtstuIDold'];
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }

                        if (isset($_POST['btnNext3'])) {
                            $_SESSION['SAS5'][1] = htmlspecialchars(trim($_POST['txtHaddress']));
                            $_SESSION['SAS5'][2] = htmlspecialchars(trim($_POST['txtMoo']));
                            $_SESSION['SAS5'][3] = htmlspecialchars(trim($_POST['txtSoi']));
                            $_SESSION['SAS5'][4] = $_POST['lbProvince']; // ID จังหวัด
                            $_SESSION['SAS5'][5] = $_POST['lbAmphor']; //ID อำเภอ
                            $_SESSION['SAS5'][6] = $_POST['lbDistrict']; //ID ตำบล
                            $_SESSION['SAS5'][7] = htmlspecialchars(trim($_POST['txtTel']));
                            $_SESSION['SAS5'][8] = htmlspecialchars(trim($_POST['txtEmail']));
                            $_SESSION['SAS5'][9] = htmlspecialchars(trim($_POST['txtRoad']));

                            if (!isset($_POST['btnNext1'])) {
                                if (!isset($_POST['btnNext2'])) {
                                    if (!isset($_POST['btnNext4']) && !isset($_POST['btnNext4-1']) && !isset($_POST['btnNext4-2'])) {
                                        if (!isset($_POST['btnNext5'])) {
                                            if (!isset($_POST['btnNext6'])) {
                                                if (!isset($_POST['btnNext7'])) {
                                                    include 'section/breadcrumb.php';
                                                    include 'section/sec/4.php';
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }

                        if (isset($_REQUEST['btnNext4'])) {
                            $_SESSION['SAS2'][1] = $_POST['raOption'];

                            if (!isset($_POST['btnNext1'])) {
                                if (!isset($_POST['btnNext2'])) {
                                    if (!isset($_POST['btnNext3'])) {
                                        if (!isset($_POST['btnNext5'])) {
                                            if (!isset($_POST['btnNext6'])) {
                                                if (!isset($_POST['btnNext7'])) {
                                                    include 'section/breadcrumb.php';

                                                    $checkspe = "นักเรียนที่มีความสามารถพิเศษ";
                                                    if (strcmp($_SESSION['SAS2'][1], $checkspe) == 0) {
                                                        include 'section/sec/4-1.php';
                                                    } else {
                                                        include 'section/sec/5.php';
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }

                        if (isset($_POST['btnNext4-1'])) {
                            $_SESSION['SAS2'][2] = $_POST['raOptionspe']; //rdo
                            if (!isset($_POST['btnNext1'])) {
                                if (!isset($_POST['btnNext2'])) {
                                    if (!isset($_POST['btnNext3'])) {
                                        if (!isset($_POST['btnNext4'])) {
                                            if (!isset($_POST['btnNext6'])) {
                                                if (!isset($_POST['btnNext7'])) {
                                                    if (!isset($_POST['btnNext5'])) {
                                                        $checkspemore1 = "ทัศนศิลป์";
                                                        $checkspemore2 = "นาฏศิลป์";
                                                        $checkspemore3 = "เทควันโด";
                                                        $checkspemore4 = "วอลเล่ย์บอล";
                                                        if (
                                                            strcmp($_SESSION['SAS2'][2], $checkspemore1) == 0 ||
                                                            strcmp($_SESSION['SAS2'][2], $checkspemore2) == 0 ||
                                                            strcmp($_SESSION['SAS2'][2], $checkspemore3) == 0 ||
                                                            strcmp($_SESSION['SAS2'][2], $checkspemore4) == 0
                                                        ) {
                                                            include 'section/breadcrumb.php';
                                                            include 'section/sec/5.php';
                                                        } else {
                                                            include 'section/breadcrumb.php';
                                                            include 'section/sec/4-2.php';
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                        if (isset($_POST['btnNext4-2'])) {
                            $_SESSION['SAS2'][3] = $_POST['lbMore']; //lb
                            if (!isset($_POST['btnNext1'])) {
                                if (!isset($_POST['btnNext2'])) {
                                    if (!isset($_POST['btnNext3'])) {
                                        if (!isset($_POST['btnNext4'])) {
                                            if (!isset($_POST['btnNext6'])) {
                                                if (!isset($_POST['btnNext7'])) {
                                                    if (!isset($_POST['btnNext5'])) {
                                                        if (!isset($_POST['btnNext4-1'])) {
                                                            include 'section/breadcrumb.php';
                                                            include 'section/sec/5.php';
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }

                        if (isset($_POST['btnNext5'])) {
                            $_SESSION['SAS3'][4] = $_POST['lbCome']; //lb
                            $_SESSION['SAS3'][1] = $_POST['lbPlan1'];
                            $_SESSION['SAS3'][2] = $_POST['lbPlan2'];
                            if (isset($_POST['lbPlan3'])) {
                                $_SESSION['SAS3'][3] = $_POST['lbPlan3'];
                            } else {
                                $_SESSION['SAS3'][3] = "";
                            }
                            $_SESSION['SAS3'][5] = $_POST['lbPlan4'];
                            $_SESSION['SAS3'][6] = $_POST['lbPlan5'];
                            if (!isset($_POST['btnNext1'])) {
                                if (!isset($_POST['btnNext2'])) {
                                    if (!isset($_POST['btnNext3'])) {
                                        if (!isset($_POST['btnNext4'])) {
                                            if (!isset($_POST['btnNext6'])) {
                                                if (!isset($_POST['btnNext7'])) {
                                                    include 'section/breadcrumb.php';
                                                    include 'section/6.php';
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }

                        if (isset($_POST['btnNext6'])) {
                            $_SESSION['SAS6'][1] = $_POST['lbGraduate'];
                            $_SESSION['SAS6'][2] = htmlspecialchars(trim($_POST['txtLschool']));
                            $_SESSION['SAS6'][3] = htmlspecialchars(trim($_POST['txtGPA']));
                            $_SESSION['SAS6'][4] = htmlspecialchars(trim($_POST['lbPROVINCE_SC']));
                            $_SESSION['SAS6'][5] = htmlspecialchars(trim($_POST['txtschoolsecond']));

                            if (!isset($_POST['btnNext1'])) {
                                if (!isset($_POST['btnNext2'])) {
                                    if (!isset($_POST['btnNext3'])) {
                                        if (!isset($_POST['btnNext4'])) {
                                            if (!isset($_POST['btnNext5'])) {
                                                if (!isset($_POST['btnNext7'])) {
                                                    include 'section/breadcrumb.php';
                                                    include 'section/7.php';
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }

                        if (isset($_POST['btnNext7'])) { // insert data student to DB 
                            $_SESSION['SAS7'][1] = htmlspecialchars(trim($_POST['txtSnamefa']));
                            $_SESSION['SAS7'][2] = htmlspecialchars(trim($_POST['txtFnamefa']));
                            $_SESSION['SAS7'][3] = htmlspecialchars(trim($_POST['txtLnamefa']));
                            $_SESSION['SAS7'][4] = htmlspecialchars(trim($_POST['txtTelfa']));
                            $_SESSION['SAS7'][5] = htmlspecialchars(trim($_POST['lbSnamema']));
                            $_SESSION['SAS7'][6] = htmlspecialchars(trim($_POST['txtFnamema']));
                            $_SESSION['SAS7'][7] = htmlspecialchars(trim($_POST['txtLnamema']));
                            $_SESSION['SAS7'][8] = htmlspecialchars(trim($_POST['txtTelma']));
                            $_SESSION['SAS7'][9] = $_POST['lbStatus'];
                            $_SESSION['SAS7'][10] = $_POST['lbFaOccupation'];
                            $_SESSION['SAS7'][11] = $_POST['lbMaOccupation'];
                            $_SESSION['SAS7'][12] = $_POST['raTypepa'];
                            if (isset($_POST['txtFnamepa']) && ($_POST['txtFnamepa'] != "")) {
                                $_SESSION['SAS7'][13] = $_POST['txtSnamepa'];
                                $_SESSION['SAS7'][14] = $_POST['txtFnamepa'];
                                $_SESSION['SAS7'][15] = $_POST['txtLnamepa'];
                                $_SESSION['SAS7'][16] = $_POST['txtTelpa'];
                                $_SESSION['SAS7'][17] = $_POST['lbPaOccupation'];
                                $_SESSION['SAS7'][18] = $_POST['lbRelation'];
                            }
                            $data7[1] = htmlspecialchars(trim($_POST['txtSnamefa']));
                            $data7[2] = htmlspecialchars(trim($_POST['txtFnamefa']));
                            $data7[3] = htmlspecialchars(trim($_POST['txtLnamefa']));
                            $data7[4] = htmlspecialchars(trim($_POST['txtTelfa']));
                            $data7[5] = htmlspecialchars(trim($_POST['lbSnamema']));
                            $data7[6] = htmlspecialchars(trim($_POST['txtFnamema']));
                            $data7[7] = htmlspecialchars(trim($_POST['txtLnamema']));
                            $data7[8] = htmlspecialchars(trim($_POST['txtTelma']));
                            $data7[9] = $_POST['lbStatus'];
                            $data7[10] = $_POST['lbFaOccupation'];
                            $data7[11] = $_POST['lbMaOccupation'];
                            $data7[12] = $_POST['raTypepa'];
                            if (isset($_POST['txtFnamepa']) && ($_POST['txtFnamepa'] != "")) {
                                $data7[13] = $_POST['txtSnamepa'];
                                $data7[14] = $_POST['txtFnamepa'];
                                $data7[15] = $_POST['txtLnamepa'];
                                $data7[16] = $_POST['txtTelpa'];
                                $data7[17] = $_POST['lbPaOccupation'];
                                $data7[18] = $_POST['lbRelation'];
                            }

                            //insert DB SAS_Studentdata
                            include "fn.php";
                            insertstudentdata($data1, $data2, $data3, $data4, $data5, $data6, $data7, $nid);
                        }
                        //include('section/5.php');
                        //include('section/4.php');
                        //include('section/5.php');
                        //include('section/6.php');
                        //include('section/7.php');

                    ?>
                    <?php
                    } else { ?>
                        <div class="caption-full">
                            <?php
                            if ((isset($_GET['re']) && $_GET['re'] == "register") || isset($_POST['register'])) { ?>
                                <h3 class="text-center">
                                    <p style="color: #23527c;">
                                        <span class="glyphicon glyphicon-plus"></span>
                                        หากท่านเคยลงทะเบียนแล้ว <strong><a href="../login.php#login" style="font-size: 20px; color:#c7254e;">คลิกที่นี่เพื่อเข้าสู่ระบบ</a></strong>
                                    </p>
                                </h3>


                            <?php } else { ?>
                                <!-- <div class="thumbnail">
                                    <img alt="" class="img-responsive" src="img/process.jpg">
                                </div> -->
                            <?php
                            }
                            ?>

                            <br />

                            <?php
                            if (!isset($_GET['re']) && !isset($_POST['register'])) { ?>
                                <?php if (!isset($_GET['regisdone'])) { ?>
                                    <!-- <div class="alert alert-warning text-center" role="alert">
                                        <p style="font-size: 20px;">ปิดระบบรับสมัครนักเรียน <br />ผู้สมัครเรียบร้อยแล้วสามารถเข้าระบบเพื่อแก้ไขข้อมูลได้
                                            <br />หากข้อมูลยังไม่สมบูรณ์
                                        </p>
                                        <p style="font-size: 20px;">


                                            <a href="index.php?re=register">
                                                            <span class="glyphicon glyphicon-plus" aria-hidden="true">
                                                            </span>กรุณาคลิกลงทะเบียน</a>
                                        </p>
                                    </div> -->
                                <?php
                                } ?>
                            <?php
                            } ?>
                            <?php
                            if (isset($_POST["login"], $_POST['txtRegisno'], $_POST['txtPwd'])) {
                                include "conn.php";
                                $ldata[0] = htmlspecialchars(trim($_POST['txtRegisno']));
                                $ldata[1] = htmlspecialchars(trim($_POST['txtPwd']));
                                include "section/login.php";
                                logindata($ldata);
                            }

                            if (isset(
                                $_POST["register"],
                                $_POST['txtRegisno'],
                                $_POST['txtPwd'],
                                $_POST['txtIDCard'],
                                $_POST['i_verify']
                            )) { // เช็คเมื่อกดปุ่มลงทะเบียน
                                include "conn.php";
                                include "fn.php";
                                $data[0] = htmlspecialchars(trim($_POST['txtRegisno']));
                                $data[1] = htmlspecialchars(trim($_POST['txtPwd']));
                                $data[2] = htmlspecialchars(trim($_POST['txtIDCard']));

                                if ($_POST['i_verify'] == @array_sum($_SESSION['num_to_check'])) { //เช็คว่ากรอกเลขถูกไหม บวกเลขถูกไหม
                                    $_SESSION['num_to_check'][0] = rand(1, 9);
                                    $_SESSION['num_to_check'][1] = rand(1, 9);

                                    $txtregisno = $_POST['txtRegisno'];
                                    //$dt = checktxtRegisno($txtregisno);
                                    $dt = checktxtRegisno("A02C4G");
                                    if ($dt > 0) {
                                        insertregister($data); // ฟังก์ชั่นกรอกข้อมูล
                                        mysql_close();
                                    } else { ?>
                                        <div class="alert alert-danger text-center" role="alert">
                                            <i><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                                คุณกรอกรหัสเข้าใช้งานผิด กรุณากรอกรหัส 6 หลักที่มากับระเบียบการและตัวพิมพ์ใหญ่เท่านั้น
                                            </i>
                                        </div>
                                    <?php }
                                } else {
                                    $_SESSION['num_to_check'][0] = rand(1, 9);
                                    $_SESSION['num_to_check'][1] = rand(1, 9);
                                    ?>

                                    <div class="alert alert-danger text-center" role="alert">
                                        <i><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                            คุณบวกเลขผิด
                                        </i>
                                    </div>

                                    <?php
                                }
                            }

                            if ((isset($_GET['re']) && $_GET['re'] == "register") || isset($_POST['register'])) {
                                # ส่วนของสมัครสมาชิก
                                $_SESSION['num_to_check'][0] = rand(1, 9);
                                $_SESSION['num_to_check'][1] = rand(1, 9);
                                if (!isset($_SESSION["SUCCESS_REGISTER"])) { //ตรวจสอบว่าถ้ายังไม่ลงทะเบียน
                                    include "section/register.php"; //include ฟอร์มสมัครสมาชิก
                                } else { //ตรวจสอบว่าถ้าลงทะเบียนแล้ว แต่ยังไม่ได้ Login
                                    // echo "5555555555555555555";
                                    if (!isset($_POST['register'])) {
                                        if (isset($_SESSION["REGISNAID"])) {
                                            include "conn.php";
                                            include "fn.php"; //include ฟอร์มสมัครสมาชิก
                                            SelectAfterRegister($_SESSION["REGISNAID"]);
                                        }
                                    }
                                }
                            } else { // if (!isset($_GET["re"])) {  // ถ้าไม่มีการกดลงทะเบียน ให้เปิด LOGIN FORM
                                include "loginform.php"; // FORM LOGIN HTML
                                    ?><?php
                                    } //else 
                                        ?>
                        </div><!-- /.caption-full -->
                    <?php
                    } ?>
                    </img>
                </div><!-- /.thumbnail right content-->

            </div><!-- /.col-md-9 -->


        </div>
        <!-- end right content -->
    </div> <!-- /.end row -->
    </div> <!-- /.end container -->
    <!-- end -->



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

        <!-- Footer -->
        <div class="container">
        <hr>
        <footer>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>
                        ระบบรับสมัครนักเรียนโรงเรียนธาตุนารายณ์วิทยา </br>
                        Developed by Kanokkan Chaiwongkot. <br>
                        Supporter by <a href="https://vanopenclub.com" target="_blank">vanopenclub.com</a><br> <a href="https://เช่ารถตู้สกลนคร.com" target="_blank">เช่ารถตู้สกลนคร</a><br>

                        Copyright © ICT and Academic Department Thatnaraiwittaya School.
                    </p>
                </div>
            </div>
        </footer>
        </hr>
    </div>
    <!-- /.container footer -->
    <!-- End footer -->
</body>

</html>