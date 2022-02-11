<div>

    <header id="top-main-header" class="main-header fixed-top p-0 header fixed-top white-navbar">
        <div class="d-flex justify-content-between h-100">

            <div class="logo-n-name position-relative d-flex align-items-center p-3">
                <div class="logo-lightning"></div>
                <a href="index.php" class="ku-logo">
                    <img src="../assets/images/logo1.png" alt="TNW Logo" />
                </a>
                <div class="">
                    <a href="index.php">
                        <img class="ku-logo-name" src="../assets/images/logo-text.png" alt="TNW Logo" />
                    </a>
                </div>
            </div>




            <div class="menu-area">
                <div class="d-flex top-part justify-content-end">

                    <div class="d-flex page-options ml-2">
                        <div>
                            <ul class="no-bullets d-flex lang-selector">

                                <li>
                                    <a class="h-100 text-white bg-b2bb1c " href="">T.N.W.</a>
                                </li>
                                <li>
                                    <a class="h-100 text-white bg-006b67 " href="">Admission</a>
                                </li>
                                <li>
                                    <a class="h-100 text-white bg-6e4b32 " href="">System</a>
                                </li>


                            </ul>
                        </div>

                    </div>
                </div>



                <!-- Bottom Part Menu -->
                <div class="bottom-part d-flex justify-content-end pb-1">

                    <div style="margin: 0;">
                        <div class="containMarquee">
                            <span class="obj_marquee header-sub-menu-btn menu__item mr-3" data-target="admission-heading-sub-menu" aria-expanded="false" aria-controls="admission-heading-sub-menu">
                                ระบบรับสมัครนักเรียนอนไลน์ โรงเรียนธาตุนารายณ์วิทยา ประจำปีการศึกษา 2564
                            </span>
                        </div>
                    </div>


                </div>




                <!-- Full width Part Menu -->
                <nav class="full-width-part">
                    <ul class="no-bullets">

                        <a href="http://admission.tnw.ac.th/" target="_self">
                            <li> <button type="button" class="menu__item no-sub-menu">
                                    กลับสู่หน้าหลัก
                                </button>
                            </li>
                        </a>

                        <a href="../manual64.pdf" target="_blank">
                            <li> <button type="button" class="menu__item no-sub-menu">
                                    คู่มือการสมัคร
                                </button>
                            </li>
                        </a>
                        <a href="status.php">
                            <li> <button type="button" class="menu__item no-sub-menu">
                                    ติดตามสถานะการสมัคร
                                </button>
                            </li>
                        </a>

                        <!-- <a href="../chdate.html" target="_blank">
                            <li> <button type="button" class="menu__item no-sub-menu">
                                    ตรวจสอบประเภทนักเรียนสำหรับ ม.1
                                </button>
                            </li>
                        </a> -->


                        <!-- <li>
                            <button type="button" class="menu__item" data-target="ku-sub-menu-274" aria-expanded="false" aria-controls="ku-sub-menu-274">เกี่ยวกับการรับสมัคร</button>
                        </li> -->

                        <?php if (isset($_SESSION["Role"])) {
                            if ($_SESSION["Role"] == 1) { ?>
                                <a class="navbar-nav" href="admin/user">
                                    <li>
                                        <button type="button" class="menu__item no-sub-menu">
                                            <span class="glyphicon glyphicon-globe">
                                            </span>
                                            เข้าสู่ระบบเจ้าหน้าที่รับสมัคร
                                        </button>



                                    </li>
                                </a>
                        <?php }
                        } ?>


                        <?php if (isset($_SESSION["RegisNO"])) { ?>
                            <a class="navbar-nav" href="index.php?ses=destroy" onclick="if(confirm('ยืนยันการ Logout & Reset')) return true; else return false;">

                                <li>
                                    <button type="button" class="menu__item no-sub-menu">
                                        เลขที่ใบสมัคร : <?php echo $_SESSION["RegisNO"]; ?>
                                        <!-- <i class="fas fa-sign-out-alt"></i> ออกจากระบบ -->

                                    </button>
                                </li>
                            </a>

                            <a class="navbar-nav" href="index.php?ses=destroy" onclick="if(confirm('ยืนยันการ Logout & Reset')) return true; else return false;">

                                <li>
                                    <button type="button" class="menu__item no-sub-menu text-danger">

                                        <i class="fas fa-sign-out-alt"></i> ออกจากระบบ

                                    </button>
                                </li>
                            </a>

                        <?php }
                        if (isset($_GET["ses"]) && $_GET["ses"] == "destroy") {
                            echo "<script type=\"text/javascript\">";
                            echo "window.location=\"../login.php\" ";
                            echo "</script>";
                            session_destroy();
                        }
                        ?>
                        <!-- <a href="guidebook.php">
                            <li> <button type="button" class="menu__item no-sub-menu" onclick="window.open('guidebook.php'); ">
                                    คู่มือการสมัคร
                                </button>
                            </li>
                        </a>
                        <a href="guidebook.php">
                            <li> <button type="button" class="menu__item no-sub-menu" onclick="window.open('guidebook.php'); ">
                                    ติดตามสถานะการสมัคร
                                </button>
                            </li>
                        </a>
                        <a href="guidebook.php">
                            <li> <button type="button" class="menu__item no-sub-menu" onclick="window.open('guidebook.php'); ">
                                    พิมพ์ใบสมัคร
                                </button>
                            </li>
                        </a> -->


                    </ul>
                    <ul>

                    </ul>
                </nav>
                <!-- Full width part shield -->
                <div class="full-width-part-shield"></div>

                <!-- Dropdown -->
                <div class="header-dropdown-holder">
                    <div class="header-dropdown__arrow">
                        <div class="arrow-inner"></div>
                    </div>
                    <div class="header-dropdown__bg"></div>

                    <div class="header-dropdown__wrap">
                        <!-- Admission sub-menu -->


                        <!-- Curriculum sub-menu -->


                        <!-- Faculty and units sub-menu -->



                        <div class="header-dropdown-menu" id="ku-sub-menu-274">
                            <div class="header-dropdown-menu__content">
                                <ul>
                                    <li><a href="../manual64.pdf" target="_blank">คู่มือการสมัคร</a></li>
                                    <li><a href="#" target="_blank">ติดตามสถานะการสมัคร</a>
                                    </li>
                                    <!-- <li><a href="#" target="_blank">พิมพ์ใบสมัคร</a></li> -->

                                </ul>
                            </div>
                        </div>
                        <div class="header-dropdown-menu" id="ku-sub-menu-313">
                            <div class="header-dropdown-menu__content">
                                <!-- <ul>
                                      <li><a href="/th/social-activities" target="_self">กิจกรรมเพื่อสังคม</a></li>
                                      <li><a href="/th/knowledge-for-the-people"
                                              target="_self">องค์ความรู้เพื่อประชาชน</a></li>
                                  </ul> -->
                            </div>
                        </div>
                        <div class="header-dropdown-menu" id="ku-sub-menu-277">
                            <div class="header-dropdown-menu__content">
                                <!-- <ul>
                                      <li><a href="/th/scholarships-at-ku" target="_self">ประเภททุนการศึกษา</a></li>
                                      <li><a href="/th/scholarships" target="_self">ทุนการศึกษา ใน มก.</a></li>
                                      <li><a href="/th/scholarships-abroad" target="_self">ทุนการศึกษาในต่างประเทศ</a>
                                      </li>
                                      <li><a href="/th/guidelines-for-participating"
                                              target="_self">แนวทางการเข้าร่วมกิจกรรมในต่างประเทศ</a></li>
                                  </ul> -->
                            </div>
                        </div>
                        <div class="header-dropdown-menu" id="ku-sub-menu-337">
                            <div class="header-dropdown-menu__content">
                                <!-- <ul>
                                      <li><a href="/th/news1" target="_self">ข่าวมหาวิทยาลัย</a></li>
                                      <li><a href="/th/student-news" target="_self">ข่าวนิสิต</a></li>
                                      <li><a href="/th/meeting-seminar-training-news"
                                              target="_self">ประชุม/สัมมนา/อบรม</a></li>
                                      <li><a href="/th/education-news" target="_self">การศึกษา</a></li>
                                      <li><a href="/th/award-news" target="_self">การรับรางวัล</a></li>
                                      <li><a href="#">จัดซื้อจัดจ้าง</a>
                                          <ul class="sub_3" style="margin-left: 20px;">
                                              <li><a href="http://finance.ku.ac.th/index.php?option=com_content&amp;task=section&amp;id=14&amp;Itemid=74&amp;lang=th_TH"
                                                      target="_blank">กองคลัง</a></li>
                                              <li><a href="/th/central-procurement-ku" target="_self">หน่วยงานใน
                                                      มก.</a></li>
                                          </ul>
                                      <li></li>
                                      <li><a href="#">รับสมัครบุคลากร</a>
                                          <ul class="sub_3" style="margin-left: 20px;">
                                              <li><a href="/th/jobnews-ku" target="_self">ข่าวรับสมัครงาน</a></li>
                                              <li><a href="https://ku.thaijobjob.com/"
                                                      target="_blank">ระบบสมัครงานออนไลน์</a></li>
                                          </ul>
                                      <li></li>
                                      <li><a href="/th/event-calendar" target="_blank">ปฏิทินกิจกรรม</a></li>
                                  </ul> -->
                            </div>
                        </div>
                        <div class="header-dropdown-menu" id="ku-sub-menu-278">
                            <div class="header-dropdown-menu__content">
                                <!-- <ul>
                                      <li><a href="/th/contact-address" target="_self">ที่อยู่ ติดต่อสอบถาม</a></li>
                                      <li><a href="/th/phone-number" target="_self">หมายเลขโทรศัพท์</a></li>
                                      <li><a href="/th/kasetsart-university-map" target="_self">แผนที่และการเดินทางมา
                                              มก.</a></li>
                                      <li><a href="/car-service-routes-in-maha-vickya-sai/"
                                              target="_self">แผนที่และการเดินทางใน มก.</a></li>
                                      <li><a href="https://directory.ku.ac.th/ver3/index.php"
                                              target="_blank">ค้นหาข้อมูลบุคลากร</a></li>
                                      <li><a href="http://docs.google.com/forms/d/e/1FAIpQLSdCdbUvnTnxZe8N82gkqTRosJw3Q_-5N-I4hWoNt70P1yg_hQ/viewform"
                                              target="_blank">แจ้งเสนอแนะและร้องเรียน</a></li>
                                  </ul> -->
                            </div>
                        </div>

                        <!-- About KU -->
                        <div class="header-dropdown-menu" id="ku-sub-menu-275" data-sub="ku-sub-menu-275">
                            <div class="header-dropdown-menu__content col-3">
                                <!-- <ul>
                                      <li><a href="/th/history-ku" target="_self">ประวัติ มก.</a>
                                      <li><a href="/th/philosophy-vision-mission" target="_self">ปรัชญา วิสัยทัศน์
                                              พันธกิจ</a>
                                      <li><a href="/th/the-identity-of-ku" target="_self">สัญลักษณ์ มก.</a>
                                      <li><a href="/th/university-information" target="_self">ข้อมูลมหาวิทยาลัย</a>
                                          <ul class="sub_3" style="margin-left: 20px;">
                                              <li>
                                                  <a href="/th/campus-information" target="_self">ข้อมูลวิทยาเขต</a>
                                              </li>
                                              <li>
                                                  <a href="/th/statistical-data" target="_self">ข้อมูลสถิติ</a>
                                              </li>
                                              <li>
                                                  <a href="/th/world-university-rankings"
                                                      target="_self">ผลการจัดอันดับมหาวิทยาลัยโลก</a>
                                              </li>
                                              <li>
                                                  <a href="/th/kustatute" target="_self">พระราชบัญญัติ มก.</a>
                                              </li>
                                          </ul>
                                      <li><a href="/th/gallery-and-vdo" target="_self">คลังภาพและวิดีโอ</a>
                                          <ul class="sub_3" style="margin-left: 20px;"></ul>
                                      <li><a href="https://ku.ac.th/th/kulogo" target="_self">ดาวน์โหลด</a>
                                  </ul>
                                  <ul>
                                      <li><a href="#">โครงสร้างมหาวิทยาลัย</a>
                                          <ul class="sub_3" style="margin-left: 20px;">
                                              <li>
                                                  <a href="/th/organize-structure"
                                                      target="_self">แผนผังโครงสร้างการบริหาร</a>
                                              </li>
                                              <li>
                                                  <a href="/th/section-structure"
                                                      target="_self">แผนผังโครงสร้างส่วนงาน</a>
                                              </li>
                                              <li>
                                                  <a href="/th/university-council"
                                                      target="_self">กรรมการสภามหาวิทยาลัย</a>
                                              </li>
                                              <li>
                                                  <a href="/th/university-affairs-board"
                                                      target="_self">คณะกรรมการส่งเสริมกิจการมหาวิทยาลัย</a>
                                              </li>
                                              <li>
                                                  <a href="/th/university-administrators"
                                                      target="_self">คณะผู้บริหารมหาวิทยาลัย</a>
                                              </li>
                                              <li>
                                                  <a href="/th/dean-and-director"
                                                      target="_self">คณบดีและผู้อำนวยการ</a>
                                              </li>
                                              <li>
                                                  <a href="/th/president-s-palace" target="_self">ทำเนียบอธิการบดี</a>
                                              </li>
                                          </ul>
                                  </ul>
                                  <ul>
                                      <li><a href="/th/around-university-fence" target="_self">รอบรั้วมหาวิทยาลัย</a>
                                          <ul class="sub_3" style="margin-left: 20px;">
                                              <li>
                                                  <a href="/th/landmark" target="_self">สถานที่สำคัญ</a>
                                              </li>
                                              <li>
                                                  <a href="/th/learning-resources" target="_self">แหล่งเรียนรู้</a>
                                              </li>
                                              <li>
                                                  <a href="/th/facility" target="_self">สิ่งอำนวยความสะดวก</a>
                                              </li>
                                              <li>
                                                  <a href="/th/sports-and-health" target="_self">กีฬาและสุขภาพ</a>
                                              </li>
                                              <li>
                                                  <a href="/th/ku-products" target="_self">ผลิตภัณฑ์ มก.</a>
                                              </li>
                                          </ul>
                                  </ul> -->

                            </div>
                        </div>



                    </div>



                </div>

            </div>




            <div class="sidenav-button mr-3">

                <button id="sidenav-toggle-btn">
                    <svg viewBox="0 0 100 100" width="31" height="24">
                        <rect x="-20%" y="0%" width="140%" height="7.4" fill="#292929"></rect>
                        <rect x="-20%" y="46%" width="140%" height="7.4" fill="#292929"></rect>
                        <rect x="-20%" y="92.5%" width="140%" height="7.4" fill="#292929"></rect>
                    </svg>
                </button>
            </div>



            <div class="sidenav-overlay"></div>


            <div id="header-search-area">

                <div class="header-search-box">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col">
                                <h2 class="text-center">ค้นหาข้อมูลภายในเว็บไซต์</h2>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col">
                                <form class="header-search-form" action="/th/search">
                                    <div class="row justify-content-center no-gutters">

                                        <div class="input col-10 col-md-8 col-lg-6 mt-3 mt-lg-0">
                                            <input id="header-search-input" type="text" name="headKeySearch" placeholder="คุณต้องการค้นหาอะไร?" aria-label="ค้นหา" required />
                                        </div>
                                        <div class="col-2 col-md-1 mt-3 mt-lg-0">
                                            <button class="search-btn" type="submit" aria-label="Search">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 17" width="17" height="17">
                                                    <style>
                                                        tspan {
                                                            white-space: pre;
                                                        }

                                                        .shp0 {
                                                            fill: #ffffff;
                                                        }
                                                    </style>
                                                    <path id="ic_mag" class="shp0" d="M16.82 16.13L12.7 12C13.8 10.73 14.47 9.06 14.47 7.25C14.47 3.25 11.23 0 7.24 0C3.24 0 0 3.25 0 7.25C0 11.24 3.25 14.5 7.24 14.5C9.05 14.5 10.71 13.83 11.98 12.72L16.11 16.85C16.2 16.95 16.34 17 16.46 17C16.59 17 16.72 16.95 16.82 16.85C17.02 16.65 17.02 16.33 16.82 16.13ZM1.01 7.25C1.01 3.81 3.8 1.02 7.23 1.02C10.66 1.02 13.45 3.81 13.45 7.25C13.45 10.68 10.66 13.48 7.23 13.48C3.8 13.48 1.01 10.69 1.01 7.25Z" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </header>