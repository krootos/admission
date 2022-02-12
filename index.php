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
        <div class="main-carousel ml-auto mr-auto">
            <div class="swiper-container swiper-banner">
                <!-- Wrapper -->
                <div class="swiper-wrapper invisible">
                    <!-- Slides -->

                    
                    <div class="swiper-slide position-relative">
                        <picture>
                            <!-- Small device -->
                            <source media="(max-width: 768px)" srcset="assets/images/building_s.jpg">
                            <!-- Large device -->
                            <source media="(min-width: 768.7px)" srcset="assets/images/building.jpg">
                            <!-- Fallback -->
                            <img src="assets/images/building.jpg" alt="โรงเรียนธาตุนารายณ์วิทยา">
                        </picture>
                    </div>

                    <!-- <div class="swiper-slide position-relative">
                        <a href="#" target="_blank">
                            <picture>
                                <source media="(max-width: 768px)" srcset="assets/images/boss_s.png">
                                <source media="(min-width: 768.7px)" srcset="assets/images/bosss.png">
                                <img src="assets/images/boss.jpg" alt="ผู้อำนวยการโรงเรียนธาตุนารายณ์วิทยา">
                            </picture>
                        </a>
                    </div> -->

                    
                    
                    <div class="swiper-slide position-relative">
                        <a href="#" target="_blank">
                            <picture>
                                <!-- Small device -->
                                    <source media="(max-width: 768px)" srcset="assets/images/admission_s.jpg">
                                <!-- Large device -->
                                    <source media="(min-width: 768.7px)" srcset="assets/images/admission.jpg">
                                <!-- Fallback -->
                                    <img src="assets/images/admission.jpg" alt="รับสมัครนักเรียนประจำปีการศึกษา 2565">
                            </picture>
                        </a>
                    <!-- </div> -->



                </div>
                <div class="swiper-lazy-preloader"></div>

                <!-- Pagination -->
                <div class="swiper-pagination banner-pagination"></div>
                <!-- Navigation buttons -->
                <div class="swiper-button-prev hero-banner-prev"></div>
                <div class="swiper-button-next hero-banner-next"></div>


            </div>
        </div>
    </div>

    <div id="bus-station-comp">
        <!-- Around Uni -->
        <!-- <div class="around-uni bus-station ku-check-webp aos-init webp aos-animate" data-aos="fade-up" data-aos-once="false">
            <a href="manual64.pdf" target="_balnk">
                <img src="https://tnw.ac.th/web/images/news/pala/64info_admissionTNW.png" alt="คู่มือการสมัคร" width="100%">
            </a>
            
        </div> -->
    </div>


    <!-- KU Four Side -->
    <div id="ku-sides-comp">
        <div class="ku-sides ku-check-webp d-flex flex-wrap" data-aos="fade-up">
            <!-- Each Policy -->
            <div class="side-01">
                <div class="bg-wrapper"></div>
                <h2 class="text-white" style="text-shadow: 0px 1px 2px #000">สมัครเรียนห้อง MST(ม.1), SMTE(ม.4)<br>คลิกที่นี่</h2>
                <div class="hover-text-content">
                    <h2><a href="#" class="text-white"> เข้าระบบรับสมัคร<br class="two-line-u"><br>(เปิดระบบรับสมัครวันที่ <br>19-23 ก.พ. 2565)</a></h2>

                </div>
                <div class="hover-mask">
                    <div class="top-mask"></div>
                    <div class="bottom-mask"></div>
                </div>
            </div>

            <div class="side-02">
                <div class="bg-wrapper"></div>
                <h2 class="text-white" style="text-shadow: 0px 1px 2px #000">สมัครเรียนห้อง EP ม.1, ม.4 <br>คลิกที่นี่</h2>

                <div class="hover-text-content">
                    <h2><a href="#" class="text-white"> เข้าระบบรับสมัคร<br class="two-line-u"><br>(เปิดระบบรับสมัครวันที่ <br>19-23 ก.พ. 2565)</a></h2>

                </div>

                <div class="hover-mask">
                    <div class="top-mask"></div>
                    <div class="bottom-mask"></div>
                </div>
            </div>

        </div>
    </div>



  

    <!-- list-group report student -->

    <div id="bus-station-comp">
        <!-- Around Uni -->
        <div class="around-uni bus-station ku-check-webp aos-init webp aos-animate" data-aos="fade-up" data-aos-once="false">
            <div class="bg-wrapper"></div>
            <div class="bg-wrapper-2"></div>
            <div>
                <div class="section-heading d-flex justify-content-center py-xl-5 py-3">
                    <div class="ku">TNW</div>
                    <div class="d-flex align-items-center">
                        <h1>
                            <a href="regisDoc.php" target="_self">
                                <div class="more-btn header-box corner-green-light bg-black text-white d-inline-block header-box-animated header-box-animated-light w-100">
                                    <i class="fa fa-arrow-up"></i>
                                    <span class="btn-text pr-3 d-flex align-items-center justify-content-center h-100">ระเบียบการรับสมัคร</span>
                                </div>
                            </a>
                        </h1>
                    </div>
                </div>
            </div>
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