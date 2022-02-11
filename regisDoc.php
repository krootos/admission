<?php include('header.php'); ?>

<body class=" mr-auto ml-auto" style="max-width: 100%">

    <?php include('menu.php'); ?>

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <div id="sub-menu-overlay" class="collapse"></div>
    </div>
    <!-- Banner -->

    <!-- Herobanner -->
    <!-- Banner -->

    <div class="main-carousel ml-auto mr-auto">
    <p>&nbsp;</p>
    </div>

    <div id="bus-station-comp">
        <!-- Around Uni -->
        <!-- <div class="around-uni bus-station ku-check-webp aos-init webp aos-animate" data-aos="fade-up" data-aos-once="false">
            <a href="manual64.pdf" target="_balnk">
                <img src="https://tnw.ac.th/web/images/news/pala/64info_admissionTNW.png" alt="คู่มือการสมัคร" width="100%">
            </a>
            
        </div> -->
    </div>






    <!-- list-group report student -->

    <div id="bus-station-comp">
        <!-- Register Admission TNW -->
      
            <div class="header-dropdown-menu__content col-12">
                <ul>
                    <li><b>ระเบียบการรับสมัครห้องเรียนพิเศษคณิตศาสตร์ วิทยาศาสตร์ และเทคโนโลยี (MST) ม.1</b>
                        <ul class="sub_3" style="margin-left: 20px;">
                            <li>
                                <a href="assets/regisDoc/ประกาศรับนักเรียน-ม.1ม.4-พิเศษวิทย์.pdf" target="_blank">ประกาศรับสมัครนักเรียนห้องเรียนพิเศษคณิตศาสตร์ วิทยาศาสตร์ และเทคโนโลยี (MST) ม.1</a>
                            </li>
                            <li>
                                <a href="assets/regisDoc/ใบรับรองผลการเรียนMST-ม.1.pdf" target="_blank">ใบรับรองผลการเรียนนักเรียนห้องเรียนพิเศษคณิตศาสตร์ วิทยาศาสตร์ และเทคโนโลยี (MST) ม.1</a>
                            </li>
                        </ul>
                    </li>

                </ul>
                <ul>
                    <li><b>ระเบียบการรับสมัครห้องเรียนพิเศษวิทยาศาสตร์ คณิตศาสตร์ วิทยาศาสตร์ เทคโนโลยี และสิ่งแวดล้อม (SMSTE) ม.4</b>
                        <ul class="sub_3" style="margin-left: 20px;">

                            <li>
                                <a href="assets/regisDoc/ประกาศรับนักเรียน-ม.1ม.4-พิเศษวิทย์.pdf" target="_blank">ประกาศรับสมัครนักเรียนห้องเรียนพิเศษวิทยาศาสตร์ คณิตศาสตร์ วิทยาศาสตร์ เทคโนโลยี และสิ่งแวดล้อม (SMTE) ม.4</a>
                            </li>
                            <li>
                                <a href="assets/regisDoc/ใบรับรองผลการเรียนSMTE-ม.4.pdf" target="_blank">ใบรับรองผลการเรียนนักเรียนห้องเรียนพิเศษวิทยาศาสตร์ คณิตศาสตร์ วิทยาศาสตร์ เทคโนโลยี และสิ่งแวดล้อม (SMTE) ม.4</a>
                            </li>

                        </ul>
                </ul>
                <ul>
                    <li><b>ระเบียบการรับสมัครห้องเรียนพิเศษภาษาอังกฤษ( English Program (EP) ) ม.1, ม.4</b>
                        <ul class="sub_3" style="margin-left: 20px;">
                            <li>
                                <a href="assets/regisDoc/ประกาศรับนักเรียนห้องEP.pdf" target="_blank">ประกาศรับสมัครนักเรียนห้องเรียนพิเศษภาษาอังกฤษ(EP) ม.1, ม.4</a>
                            </li>
                            <li>
                                <a href="assets/regisDoc/ใบรับรองผลการเรียนEP-ม.1.pdf" target="_blank">ใบรับรองนักเรียนห้องเรียนพิเศษภาษาอังกฤษ(EP) ม.1</a>
                            </li>
                            <li>
                                <a href="assets/regisDoc/ใบรับรองผลการเรียนEP-ม.4.pdf" target="_blank">ใบรับรองนักเรียนห้องเรียนพิเศษภาษาอังกฤษ(EP) ม.4</a>
                            </li>
                        </ul>
                </ul>

            </div>
        
    </div>







    <script language="javascript">
        $('.count').each(function() {
            $(this).prop('Counter', 0).animate({
                Counter: $(this).text()
            }, {
                duration: 5000,
                easing: 'swing',
                step: function(now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
    </script>


    <script language="javascript">
        var fired = 0;
        $(document).ready(function() {
            if (fired === 0) {
                $('.count').each(function() {
                    $(this).prop('Counter', 0).animate({
                        Counter: $(this).text()
                    }, {
                        duration: 3000,
                        easing: 'swing',
                        step: function(now) {
                            $(this).text(Math.ceil(now));
                        }
                    });
                });
                fired = 1; //Only do scroll function once
            }
        });
    </script>


    <script type="text/javascript">
        $(function() {
            setInterval(function() { // เขียนฟังก์ชัน javascript ให้ทำงานทุก ๆ 30 วินาที
                $.getJSON("fn_statistic.php", function(data) {
                    // if(data!=null && data.length>0){ // ถ้ามีข้อมูล
                    // เราสามารถเลือกข้อมูลบ้างส่วนมาแสดงได้
                    $("span#fac-n-cur-count-one").html(data[0].one); // ม.1 ทั้งหมด
                    $("span#fac-n-cur-count-two").html(data[0].two); // ม.1 ในเขต
                    $("span#fac-n-cur-count-three").html(data[0].three); // ม.1 นอกเขต
                    $("span#showDataM13").html(data[0].four); // Coming soon
                    $("span#showDataM14").html(data[0].five); // Coming soon

                    // ระดับ ม.4
                    $("span#fac-n-cur-count-four").html(data[0].six); //ม.4 ทั้งหมด
                    $("span#fac-n-cur-count-sc").html(data[0].seven); //วิทย์ฯ-คณิตฯ
                    $("span#fac-n-cur-count-cs").html(data[0].eigth); //วิทย์ฯ-คอมฯ
                    $("span#fac-n-cur-count-chinese").html(data[0].nine); //จีน
                    $("span#fac-n-cur-count-japan").html(data[0].ten); //ญี่ปุ่น
                    $("span#fac-n-cur-count-vietnamese").html(data[0].eleven); //เวียดนาม
                    $("span#fac-n-cur-count-korea").html(data[0].twelve); //เกาหลี
                    $("span#fac-n-cur-count-thaiSocial").html(data[0].thirteen); //ไทย-สังคม
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





    <?php
    include('footer.php');
    ?>