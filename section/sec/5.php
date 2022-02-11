<script src="http://code.jquery.com/jquery-latest.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {

    


        $('#SelectionReset').click(function(){$(".uniqueSelection option").show();});

        $(".uniqueSelection").change(function(){
            var indx = $(".uniqueSelection").index(this);
            var currentVal = $("option:selected",this).val();
            
            $(".uniqueSelection").each(function(index,val){
                if(indx != index){
                    $(this).find("option[value='"+currentVal+"']").hide();
                }
            });
        });  
    });



   
  </script>
<?php 
//include "fn.php";


list($d3,$d4,$d5,$d6,$d7,$M3,$M4,$M5,$M6,$M7,$M8,$M9,$M10) = selectcomeschool2562();

//echo $_SESSION['SAS1'][1];
//echo $_SESSION["EDITE"][5]."<br>";
//echo $_SESSION["EDITE"][6]."<br>";
//echo $_SESSION["EDITE"][7]."<br>";
                /*echo "----------------<br>";
                echo   $d27."<br>";
                echo   $d28."<br>";
                echo   $d29."<br>";
                echo   $d30."<br>";
                echo "----------------<br>";
                echo   $M27."<br>";
                echo   $M28."<br>";
                echo   $M29."<br>";
                echo   $M30."<br>"; */

?>
<div class="caption-full">
    <?php //if($_SESSION['SAS2'][1]){}
        //$_SESSION['SAS2'][1]
  ?>
    <h3 class="text-center">
         <p>
                                    <span class="glyphicon glyphicon-share"></span>
           5. แผนการเรียนและวันยื่นใบสมัคร
        </p>
    </h3>
   <br>  
   
    <?php if(!isset($_GET["edite"])){ ?>
    <form class="form-horizontal" name="form1" method="post" action="index.php">
    <?php }else{ ?>
    <form class="form-horizontal" name="form1" method="post" action="index.php?edite=true">
    <?php }  ?>

        <?php if((isset($_SESSION['SAS1'])) && ($_SESSION['SAS1'][1] == "1")) { // เช็คว่าค่าที่รับมา ม.1 หรือไม่

          if(!isset($_GET["edite"])){ // เช็คว่ามีแก้ไขมาไหม
        ?> 
       <div class="form-group form-group-lg">
            <label class="col-sm-3 control-label" for="formGroupInputLarge">
                ระบุวันที่มายื่นใบสมัคร
            </label>
            <!--label for="inputEmail3" class="col-sm-2 control-label">เลขที่ใบสมัคร</label-->
            <div class="col-sm-9">
                <?php if(isset($_GET["edite"])){ ?>
            <select class="form-control input-lg" name="lbCome" required="" autofocus="">
                <?php }else{ ?>
            <select class="form-control input-lg" name="lbCome" required="" autofocus="">
                <?php } ?>
                 <option value="">-- กรุณาเลือก --</option>

                  <?php if($d3 <= 200){ ?>
                 <option value="3"
                 <?php if(isset($_SESSION["EDITE"])){if($_SESSION["EDITE"][44] == "3"){  echo"selected"; }}?>
                 >3 พฤษภาคม 2563 </option>
                  <?php } ?>

                <?php if($d4 <= 200){ ?>
                 <option value="4"
                 <?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][44] == "4"){ echo"selected";}}?>
                 >4 พฤษภาคม 2563</option>
                <?php } ?>


                    <?php   
                            

                            if(isset($_SESSION['SAS2'])){ 
                            $checktalent = "นักเรียนความสามารถพิเศษ";
                            if(strcmp($_SESSION['SAS2'][1],$checktalent) != 0){
                    ?>

                <?php if($d5 <= 200){ ?>
                  <option value="5"
                 <?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][44] == "5"){ echo"selected";}}?>
                 >5 พฤษภาคม 2563</option>
                <?php } ?>

                <?php if($d6 <= 200){ ?>
                 <option value="6"
                 <?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][44] == "6"){ echo"selected";}}?>
                 >6 พฤษภาคม 2563</option>
                 <?php } ?>

                 <?php if($d7 <= 200){ ?>
                 <option value="7"
                 <?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][44] == "7"){ echo"selected";}}?>
                 >7 พฤษภาคม 2563</option>
                 <?php } ?>
                    
                    <?php   }
                            } ?>
                </select>

            </div>
        </div>
        <?php }} // เช็ค ม.1 ?>


<?php if((isset($_SESSION['SAS1'])) && ($_SESSION['SAS1'][1] == "4")) { 

       if(!isset($_GET["edite"])){ // เช็คว่ามีแก้ไขมาไหม  
// เช็คว่าค่าที่รับมา ม.1 หรือไม่?>
       <div class="form-group form-group-lg">
            <label class="col-sm-3 control-label" for="formGroupInputLarge">
                ระบุวันที่มายื่นใบสมัคร
            </label>
            <!--label for="inputEmail3" class="col-sm-2 control-label">เลขที่ใบสมัคร</label-->
            <div class="col-sm-9">
                <?php if(isset($_GET["edite"])){ ?>
            <select class="form-control input-lg" name="lbCome" required="" autofocus="" >
                <?php }else{ ?>
            <select class="form-control input-lg" name="lbCome" required="" autofocus="">
                <?php } ?>
                 <option value="">-- ณ โรงเรียนธาตุนารายณ์วิทยา --</option>

                  <?php if($M3 <= 200){ ?>
                 <option value="3"
                 <?php if(isset($_SESSION["EDITE"])){if($_SESSION["EDITE"][44] == "3"){  echo"selected"; }}?>
                 >3 พฤษภาคม 2563 </option>
                  <?php } ?>

                <?php if($M4 <= 200){ ?>
                 <option value="4"
                 <?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][44] == "4"){ echo"selected";}}?>
                 >4 พฤษภาคม 2563</option>
                <?php } ?>

                    <?php   if(isset($_SESSION['SAS2'])){ 
                            $checktalent = "นักเรียนความสามารถพิเศษ";
                            if(strcmp($_SESSION['SAS2'][1],$checktalent) != 0){
                    ?>
                <?php if($M5 <= 200){ ?>
                  <option value="5"
                 <?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][44] == "5"){ echo"selected";}}?>
                 >5 พฤษภาคม 2563</option>
                <?php } ?>

                <?php if($M6 <= 200){ ?>
                 <option value="6"
                 <?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][44] == "6"){ echo"selected";}}?>
                 >6 พฤษภาคม 2563</option>
                 <?php } ?>

                 <?php if($M7 <= 500){ ?>
                 <option value="7"
                 <?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][44] == "7"){ echo"selected";}}?>
                 >7 พฤษภาคม 2563</option>
                 <?php } ?>

                 <?php if($M8 <= 500){ ?>
                 <option value="8"
                 <?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][44] == "8"){ echo"selected";}}?>
                 >8 พฤษภาคม 2563</option>
                 <?php } ?>

                 <?php if($M9 <= 500){ ?>
                 <option value="9"
                 <?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][44] == "9"){ echo"selected";}}?>
                 >9 พฤษภาคม 2563</option>
                 <?php } ?>

                 <?php if($M10 <= 500){ ?>
                 <option value="7"
                 <?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][44] == "10"){ echo"selected";}}?>
                 >10 พฤษภาคม 2563</option>
                 <?php } ?>
                    
                <?php }
                      }
                 ?>
                </select>

            </div>
        </div>
        <?php } } // เช็ค ม.4 ?>


      <?php if(isset($_GET["edite"])){ // เช็คว่ามีแก้ไขมาไหม  ?> 
       <div class="form-group form-group-lg">
            <label class="col-sm-3 control-label" for="formGroupInputLarge">
                ระบุวันที่มายื่นใบสมัคร
            </label>
            <!--label for="inputEmail3" class="col-sm-2 control-label">เลขที่ใบสมัคร</label-->
            <div class="col-sm-9">
              
            <select class="form-control input-lg" name="lbCome" required="" autofocus="">
         
           
                 <option value="">-- ณ โรงเรียนธาตุนารายณ์วิทยา --</option>

                 
                 <option value="3"
                 <?php if(isset($_SESSION["EDITE"])){if($_SESSION["EDITE"][44] == "3"){  echo"selected"; }}?>
                 >3 พฤษภาคม 2563</option>
            

               
                 <option value="4"
                 <?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][44] == "4"){ echo"selected";}}?>
                 >4 พฤษภาคม 2563</option>
              
                
                  <option value="5"
                 <?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][44] == "5"){ echo"selected";}}?>
                 >5 พฤษภาคม 2563</option>
               

                
                 <option value="6"
                 <?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][44] == "6"){ echo"selected";}}?>
                 >6 พฤษภาคม 2563</option>

                 <option value="7"
                 <?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][44] == "7"){ echo"selected";}}?>
                 >7 พฤษภาคม 2563</option>

                 <option value="8"
                 <?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][44] == "8"){ echo"selected";}}?>
                 >8 พฤษภาคม 2563</option>

                 <option value="9"
                 <?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][44] == "9"){ echo"selected";}}?>
                 >9 พฤษภาคม 2563</option>

                 <option value="10"
                 <?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][44] == "10"){ echo"selected";}}?>
                 >10 พฤษภาคม 2563</option>
                
                </select>

            </div>
        </div>
        <?php } // โชว์แก้ไข?>


<?php 
           if(isset($_SESSION['SAS1'])){ 
                    $checkm1 = "1";
                    if(strcmp($_SESSION['SAS1'][1], $checkm1) == 0){ ?>

    <!--div class="form-group form-group-lg">
            <label class=" col-sm-4 control-label" style="color: #23527c;"> มัธยมศึกษาปีที่ 1  </label>
            <div class="col-sm-8"></div>
            
    </div-->
            <?php } else{ ?>

            <div class="form-group form-group-lg">
                <label class=" col-sm-10 control-label" style="color: #23527c;"> มัธยมศึกษาปีที่ 4  <sapan style="color: #b51515;">*หมายเหตุ แผนการเรียนวิทยาศาสตร์-คณิตศาสตร์  เกรดเฉลี่ย 2.50 ขึ้นไป</span></label>
                <br>
    
                <div class="col-sm-8"></div>  

                <div class="form-group" >
                    <div class="col-sm-offset-7 col-sm-12 text-center " >
                    </br><button style="background-color:#fa9d00" class="btn btn-info btn-lg btn-block" name="bntReset" 
                    type="button" value = "Refresh" onclick="history.go(0)"  >
                    เลือกแผนการเรียนใหม่   <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span> 
                    </button>
                </div>
            </div>
            
    </div> 
      <?php            }
          }else{ 
                $checkeditemmm1 = "1";
                        if(strcmp($_SESSION["EDITE"][1], $checkeditemmm1) == 0){ ?>
                    
            <!--div class="form-group form-group-lg">
            <label class=" col-sm-4 control-label" style="color: #23527c;"> มัธยมศึกษาปีที่ 1  </label>
            <div class="col-sm-8"></div>
             </div-->

     <?php              }else{  ?>
             <div class="form-group form-group-lg">
            <label class=" col-sm-4 control-label" style="color: #23527c;"> มัธยมศึกษาปีที่ 4  </label>
            <div class="col-sm-8"></div>
             </div>

    <?php                   }
             }
      ?>

            <?php 
                if((isset($_SESSION['SAS1'])) && ($_SESSION['SAS1'][1] == "4")) { // เช็คว่าค่าที่รับมา ม.4 หรือไม่

                 ?>
        <div class="form-group form-group-lg">
            <label class="col-sm-4 control-label" for="formGroupInputLarge">
                อันดับที่ 1 :
            </label>
            <!--label for="inputEmail3" class="col-sm-2 control-label">เลขที่ใบสมัคร</label-->
            <div class="col-sm-8">


               

                <select class="form-control input-lg uniqueSelection" name="lbPlan1"  required=""  autofocus="">
                 <option value="">-- กรุณาเลือกแผนการเรียน --</option>
                 <option value="วิทยาศาสตร์-คณิตศาสตร์" 
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "วิทยาศาสตร์-คณิตศาสตร์"){  echo"selected"; }}?>
                 >วิทยาศาสตร์-คณิตศาสตร์</option>
                 <option value="วิทยาศาสตร์-คอมพิวเตอร์"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "วิทยาศาสตร์-คอมพิวเตอร์"){  echo"selected"; }}?>
                 >วิทยาศาสตร์-คอมพิวเตอร์</option>
                 <option value="อังกฤษ-จีน"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "อังกฤษ-จีน"){  echo"selected"; }}?>
                 >อังกฤษ-จีน</option>
                 <option value="อังกฤษ-ญี่ปุ่น"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "อังกฤษ-ญี่ปุ่น"){  echo"selected"; }}?>
                 >อังกฤษ-ญี่ปุ่น</option>
                 <option value="อังกฤษ-เวียดนาม"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "อังกฤษ-เวียดนาม"){  echo"selected"; }}?>
                 >อังกฤษ-เวียดนาม</option>
                 <option value="อังกฤษ-เกาหลี"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "อังกฤษ-เกาหลี"){  echo"selected"; }}?>
                 >อังกฤษ-เกาหลี</option>
                 <option value="ไทย-สังคม"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "ไทย-สังคม"){  echo"selected"; }}?>
                 >ไทย-สังคม</option>

<?php 
                    if(isset($_SESSION['SAS1'])){ 
                    $checkm1 = "1";
                    if(strcmp($_SESSION['SAS1'][1], $checkm1) == 0){ ?>
                 <!--option value="ทั่วไป"
<?php //if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "ทั่วไป"){  echo"selected"; }}?>
                 >ทั่วไป</option-->
                    <?php }else{ ?>

               


                   <?php }

                          }else {  // ถ้ามีตัวแปรแก้ไข

                            if (isset($_SESSION["EDITE"])){ 
                                
                                         $checkeditingm1 = "1";
                                         if(strcmp($_SESSION["EDITE"][1], $checkeditingm1) == 0){    ?>
                                          <!--option value="ทั่วไป"
                                         <?php //if(isset($_SESSION["EDITE"])){ 
                                                //if($_SESSION["EDITE"][5] == "ทั่วไป"){  echo"selected"; }}?>
                                                >ทั่วไป</option-->
                                        <?php } else{   ?>

                                            <option value="วิทยาศาสตร์-คณิตศาสตร์" 
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "วิทยาศาสตร์-คณิตศาสตร์"){  echo"selected"; }}?>
                 >วิทยาศาสตร์-คณิตศาสตร์</option>
                 <option value="วิทยาศาสตร์-คอมพิวเตอร์"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "วิทยาศาสตร์-คอมพิวเตอร์"){  echo"selected"; }}?>
                 >วิทยาศาสตร์-คอมพิวเตอร์</option>
                 <option value="อังกฤษ-จีน"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "อังกฤษ-จีน"){  echo"selected"; }}?>
                 >อังกฤษ-จีน</option>
                 <option value="อังกฤษ-ญี่ปุ่น"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "อังกฤษ-ญี่ปุ่น"){  echo"selected"; }}?>
                 >อังกฤษ-ญี่ปุ่น</option>
                 <option value="อังกฤษ-เวียดนาม"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "อังกฤษ-เวียดนาม"){  echo"selected"; }}?>
                 >อังกฤษ-เวียดนาม</option>
                 <option value="อังกฤษ-เกาหลี"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "อังกฤษ-เกาหลี"){  echo"selected"; }}?>
                 >อังกฤษ-เกาหลี</option>
                 <option value="ไทย-สังคม"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "ไทย-สังคม"){  echo"selected"; }}?>
                 >ไทย-สังคม</option>


                                              <?php  } ?>  
                           <?php } ?>


            <?php } ?>
                </select>

          

            </div>
        </div>
        <?php } //  if((isset($_SESSION['SAS1'])) && ($_SESSION['SAS1'][1] == "4")) {?>  


                 
            <?php    if((isset($_SESSION['SAS1'])) && ($_SESSION['SAS1'][1] == "4")) { // เช็คว่าค่าที่รับมา ม.4 หรือไม่

?>

         <div class="form-group form-group-lg">
            <label class="col-sm-4 control-label" for="formGroupInputLarge" style="color: #666464;">
                อันดับที่ 2 :
            </label>
            <!--label for="inputEmail3" class="col-sm-2 control-label">เลขที่ใบสมัคร</label-->
            <div class="col-sm-8">
       

                <select class="form-control input-lg uniqueSelection" name="lbPlan2" required="">
                 <option value="">-- กรุณาเลือกแผนการเรียน --</option>
                 <option value="วิทยาศาสตร์-คณิตศาสตร์" 
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "วิทยาศาสตร์-คณิตศาสตร์"){  echo"selected"; }}?>
                 >วิทยาศาสตร์-คณิตศาสตร์</option>
                 <option value="วิทยาศาสตร์-คอมพิวเตอร์"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "วิทยาศาสตร์-คอมพิวเตอร์"){  echo"selected"; }}?>
                 >วิทยาศาสตร์-คอมพิวเตอร์</option>
                 <option value="อังกฤษ-จีน"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "อังกฤษ-จีน"){  echo"selected"; }}?>
                 >อังกฤษ-จีน</option>
                 <option value="อังกฤษ-ญี่ปุ่น"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "อังกฤษ-ญี่ปุ่น"){  echo"selected"; }}?>
                 >อังกฤษ-ญี่ปุ่น</option>
                 <option value="อังกฤษ-เวียดนาม"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "อังกฤษ-เวียดนาม"){  echo"selected"; }}?>
                 >อังกฤษ-เวียดนาม</option>
                 <option value="อังกฤษ-เกาหลี"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "อังกฤษ-เกาหลี"){  echo"selected"; }}?>
                 >อังกฤษ-เกาหลี</option>
                 <option value="ไทย-สังคม"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "ไทย-สังคม"){  echo"selected"; }}?>
                 >ไทย-สังคม</option>

                <?php 
                    if(isset($_SESSION['SAS1'])){ 
                    $checkm1 = "1";
                    if(strcmp($_SESSION['SAS1'][1], $checkm1) == 0){ ?>
                 <!--option value="ทั่วไป"
<?php //if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][6] == "ทั่วไป"){  echo"selected"; }}?>
                 >ทั่วไป</option-->
 <?php }else{ ?>

                   

                   <?php }

                          }else {  // ถ้ามีตัวแปรแก้ไข

                            if(isset($_SESSION["EDITE"])){ 
                                
                                         $checkeditingm1 = "1";
                                         if(strcmp($_SESSION["EDITE"][1], $checkeditingm1) == 0){    ?>
                                          <!--option value="ทั่วไป"
                                         <?php //if(isset($_SESSION["EDITE"])){ 
                                                //if($_SESSION["EDITE"][6] == "ทั่วไป"){  echo"selected"; }}?>
                                                >ทั่วไป</option-->
                                        <?php } else{   ?>

                                            <option value="วิทยาศาสตร์-คณิตศาสตร์" 
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "วิทยาศาสตร์-คณิตศาสตร์"){  echo"selected"; }}?>
                 >วิทยาศาสตร์-คณิตศาสตร์</option>
                 <option value="วิทยาศาสตร์-คอมพิวเตอร์"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "วิทยาศาสตร์-คอมพิวเตอร์"){  echo"selected"; }}?>
                 >วิทยาศาสตร์-คอมพิวเตอร์</option>
                 <option value="อังกฤษ-จีน"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "อังกฤษ-จีน"){  echo"selected"; }}?>
                 >อังกฤษ-จีน</option>
                 <option value="อังกฤษ-ญี่ปุ่น"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "อังกฤษ-ญี่ปุ่น"){  echo"selected"; }}?>
                 >อังกฤษ-ญี่ปุ่น</option>
                 <option value="อังกฤษ-เวียดนาม"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "อังกฤษ-เวียดนาม"){  echo"selected"; }}?>
                 >อังกฤษ-เวียดนาม</option>
                 <option value="อังกฤษ-เกาหลี"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "อังกฤษ-เกาหลี"){  echo"selected"; }}?>
                 >อังกฤษ-เกาหลี</option>
                 <option value="ไทย-สังคม"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "ไทย-สังคม"){  echo"selected"; }}?>
                 >ไทย-สังคม</option>
                                              

                                              <?php  } ?>  
                           <?php } ?>


            <?php } ?>


                </select>

                  

            </div>
        </div>


        <?php } //  if((isset($_SESSION['SAS1'])) && ($_SESSION['SAS1'][1] == "4")) {?>


 








            <?php    if((isset($_SESSION['SAS1'])) && ($_SESSION['SAS1'][1] == "4")) { // เช็คว่าค่าที่รับมา ม.4 หรือไม่

?>

         <div class="form-group form-group-lg">
            <label class="col-sm-4 control-label" for="formGroupInputLarge" style="color: #666464;">
                อันดับที่ 3 :
            </label>
            <!--label for="inputEmail3" class="col-sm-2 control-label">เลขที่ใบสมัคร</label-->
            <div class="col-sm-8">
       

                <select class="form-control input-lg uniqueSelection" name="lbPlan3" required="">
                 <option value="">-- กรุณาเลือกแผนการเรียน --</option>
                 <option value="วิทยาศาสตร์-คณิตศาสตร์" 
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "วิทยาศาสตร์-คณิตศาสตร์"){  echo"selected"; }}?>
                 >วิทยาศาสตร์-คณิตศาสตร์</option>
                 <option value="วิทยาศาสตร์-คอมพิวเตอร์"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "วิทยาศาสตร์-คอมพิวเตอร์"){  echo"selected"; }}?>
                 >วิทยาศาสตร์-คอมพิวเตอร์</option>
                 <option value="อังกฤษ-จีน"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "อังกฤษ-จีน"){  echo"selected"; }}?>
                 >อังกฤษ-จีน</option>
                 <option value="อังกฤษ-ญี่ปุ่น"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "อังกฤษ-ญี่ปุ่น"){  echo"selected"; }}?>
                 >อังกฤษ-ญี่ปุ่น</option>
                 <option value="อังกฤษ-เวียดนาม"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "อังกฤษ-เวียดนาม"){  echo"selected"; }}?>
                 >อังกฤษ-เวียดนาม</option>
                 <option value="อังกฤษ-เกาหลี"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "อังกฤษ-เกาหลี"){  echo"selected"; }}?>
                 >อังกฤษ-เกาหลี</option>
                 <option value="ไทย-สังคม"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "ไทย-สังคม"){  echo"selected"; }}?>
                 >ไทย-สังคม</option>

                <?php 
                    if(isset($_SESSION['SAS1'])){ 
                    $checkm1 = "1";
                    if(strcmp($_SESSION['SAS1'][1], $checkm1) == 0){ ?>
                 <!--option value="ทั่วไป"
<?php //if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][6] == "ทั่วไป"){  echo"selected"; }}?>
                 >ทั่วไป</option-->
 <?php }else{ ?>

                   

                   <?php }

                          }else {  // ถ้ามีตัวแปรแก้ไข

                            if(isset($_SESSION["EDITE"])){ 
                                
                                         $checkeditingm1 = "1";
                                         if(strcmp($_SESSION["EDITE"][1], $checkeditingm1) == 0){    ?>
                                          <!--option value="ทั่วไป"
                                         <?php //if(isset($_SESSION["EDITE"])){ 
                                                //if($_SESSION["EDITE"][6] == "ทั่วไป"){  echo"selected"; }}?>
                                                >ทั่วไป</option-->
                                        <?php } else{   ?>

                                            <option value="วิทยาศาสตร์-คณิตศาสตร์" 
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "วิทยาศาสตร์-คณิตศาสตร์"){  echo"selected"; }}?>
                 >วิทยาศาสตร์-คณิตศาสตร์</option>
                 <option value="วิทยาศาสตร์-คอมพิวเตอร์"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "วิทยาศาสตร์-คอมพิวเตอร์"){  echo"selected"; }}?>
                 >วิทยาศาสตร์-คอมพิวเตอร์</option>
                 <option value="อังกฤษ-จีน"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "อังกฤษ-จีน"){  echo"selected"; }}?>
                 >อังกฤษ-จีน</option>
                 <option value="อังกฤษ-ญี่ปุ่น"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "อังกฤษ-ญี่ปุ่น"){  echo"selected"; }}?>
                 >อังกฤษ-ญี่ปุ่น</option>
                 <option value="อังกฤษ-เวียดนาม"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "อังกฤษ-เวียดนาม"){  echo"selected"; }}?>
                 >อังกฤษ-เวียดนาม</option>
                 <option value="อังกฤษ-เกาหลี"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "อังกฤษ-เกาหลี"){  echo"selected"; }}?>
                 >อังกฤษ-เกาหลี</option>
                 <option value="ไทย-สังคม"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "ไทย-สังคม"){  echo"selected"; }}?>
                 >ไทย-สังคม</option>
                                              

                                              <?php  } ?>  
                           <?php } ?>


            <?php } ?>


                </select>

                  

            </div>
        </div>


        <?php } //  if((isset($_SESSION['SAS1'])) && ($_SESSION['SAS1'][1] == "4")) {?>









<?php 
           if(isset($_SESSION["EDITE"])){ 
                    $checkpageff5 = "4";
                    if(strcmp($_SESSION["EDITE"][1], $checkpageff5) == 0){ ?>

<div class="form-group form-group-lg">
            <label class="col-sm-4 control-label" for="formGroupInputLarge" style="color: #666464;">
                อันดับที่ 1 :
            </label>
            <!--label for="inputEmail3" class="col-sm-2 control-label">เลขที่ใบสมัคร</label-->
            <div class="col-sm-8">            
                 <select class="form-control input-lg uniqueSelection" name="lbPlan1" required="">
                 <option value="">-- กรุณาเลือก --</option>
                 <option value="วิทย์-คณิต" 
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "วิทย์-คณิต"){  echo"selected"; }}?>
                 >วิทย์-คณิต</option>
                 <option value="ศิลป์-คำนวณ"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "ศิลป์-คำนวณ"){  echo"selected"; }}?>
                 >ศิลป์-คำนวณ</option>
                 <option value="ศิลป์-ภาษา"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "ศิลป์-ภาษา"){  echo"selected"; }}?>
                 >ศิลป์-ภาษา</option>
                 <option value="ภาษาจีน"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "ภาษาจีน"){  echo"selected"; }}?>
                 >ภาษาจีน</option>
                 <option value="ภาษาญี่ปุ่น"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][5] == "ภาษาญี่ปุ่น"){  echo"selected"; }}?>
                 >ภาษาญี่ปุ่น</option>
                
                </select>
            </div>
        </div>


        <div class="form-group form-group-lg">
            <label class="col-sm-4 control-label" for="formGroupInputLarge" style="color: #666464;">
                อันดับที่ 2 :
            </label>
            <!--label for="inputEmail3" class="col-sm-2 control-label">เลขที่ใบสมัคร</label-->
            <div class="col-sm-8">            
                 <select class="form-control input-lg uniqueSelection" name="lbPlan2" required="">
                 <option value="">-- กรุณาเลือก --</option>
                 <option value="วิทย์-คณิต" 
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][6] == "วิทย์-คณิต"){  echo"selected"; }}?>
                 >วิทย์-คณิต</option>
                 <option value="ศิลป์-คำนวณ"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][6] == "ศิลป์-คำนวณ"){  echo"selected"; }}?>
                 >ศิลป์-คำนวณ</option>
                 <option value="ศิลป์-ภาษา"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][6] == "ศิลป์-ภาษา"){  echo"selected"; }}?>
                 >ศิลป์-ภาษา</option>
                 <option value="ภาษาจีน"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][6] == "ภาษาจีน"){  echo"selected"; }}?>
                 >ภาษาจีน</option>
                 <option value="ภาษาญี่ปุ่น"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][6] == "ภาษาญี่ปุ่น"){  echo"selected"; }}?>
                 >ภาษาญี่ปุ่น</option>
                
                </select>
            </div>
        </div>



            <div class="form-group form-group-lg">
            <label class="col-sm-4 control-label" for="formGroupInputLarge" style="color: #666464;">
                อันดับที่ 3 :
            </label>
            <!--label for="inputEmail3" class="col-sm-2 control-label">เลขที่ใบสมัคร</label-->
            <div class="col-sm-8">            
                 <select class="form-control input-lg uniqueSelection" name="lbPlan3" required="">
                 <option value="">-- กรุณาเลือก --</option>
                 <option value="วิทย์-คณิต" 
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][7] == "วิทย์-คณิต"){  echo"selected"; }}?>
                 >วิทย์-คณิต</option>
                 <option value="ศิลป์-คำนวณ"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][7] == "ศิลป์-คำนวณ"){  echo"selected"; }}?>
                 >ศิลป์-คำนวณ</option>
                 <option value="ศิลป์-ภาษา"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][7] == "ศิลป์-ภาษา"){  echo"selected"; }}?>
                 >ศิลป์-ภาษา</option>
                 <option value="ภาษาจีน"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][7] == "ภาษาจีน"){  echo"selected"; }}?>
                 >ภาษาจีน</option>
                 <option value="ภาษาญี่ปุ่น"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][7] == "ภาษาญี่ปุ่น"){  echo"selected"; }}?>
                 >ภาษาญี่ปุ่น</option>
                
                </select>
            </div>
        </div>

              
        <div class="form-group form-group-lg">
            <label class="col-sm-4 control-label" for="formGroupInputLarge" style="color: #666464;">
                อันดับที่ 4 :
            </label>
            <!--label for="inputEmail3" class="col-sm-2 control-label">เลขที่ใบสมัคร</label-->
            <div class="col-sm-8">            
                 <select class="form-control input-lg uniqueSelection" name="lbPlan4" required="">
                 <option value="">-- กรุณาเลือก --</option>
                 <option value="วิทย์-คณิต" 
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][57] == "วิทย์-คณิต"){  echo"selected"; }}?>
                 >วิทย์-คณิต</option>
                 <option value="ศิลป์-คำนวณ"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][57] == "ศิลป์-คำนวณ"){  echo"selected"; }}?>
                 >ศิลป์-คำนวณ</option>
                 <option value="ศิลป์-ภาษา"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][57] == "ศิลป์-ภาษา"){  echo"selected"; }}?>
                 >ศิลป์-ภาษา</option>
                 <option value="ภาษาจีน"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][57] == "ภาษาจีน"){  echo"selected"; }}?>
                 >ภาษาจีน</option>
                 <option value="ภาษาญี่ปุ่น"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][57] == "ภาษาญี่ปุ่น"){  echo"selected"; }}?>
                 >ภาษาญี่ปุ่น</option>
                
                </select>
            </div>
        </div>


        <div class="form-group form-group-lg">
            <label class="col-sm-4 control-label" for="formGroupInputLarge" style="color: #666464;">
                อันดับที่ 5 :
            </label>
            <!--label for="inputEmail3" class="col-sm-2 control-label">เลขที่ใบสมัคร</label-->
            <div class="col-sm-8">            
                 <select class="form-control input-lg uniqueSelection" name="lbPlan5" required="">
                 <option value="">-- กรุณาเลือก --</option>
                 <option value="วิทย์-คณิต" 
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][58] == "วิทย์-คณิต"){  echo"selected"; }}?>
                 >วิทย์-คณิต</option>
                 <option value="ศิลป์-คำนวณ"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][58] == "ศิลป์-คำนวณ"){  echo"selected"; }}?>
                 >ศิลป์-คำนวณ</option>
                 <option value="ศิลป์-ภาษา"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][58] == "ศิลป์-ภาษา"){  echo"selected"; }}?>
                 >ศิลป์-ภาษา</option>
                 <option value="ภาษาจีน"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][58] == "ภาษาจีน"){  echo"selected"; }}?>
                 >ภาษาจีน</option>
                 <option value="ภาษาญี่ปุ่น"
<?php if(isset($_SESSION["EDITE"])){ if($_SESSION["EDITE"][58] == "ภาษาญี่ปุ่น"){  echo"selected"; }}?>
                 >ภาษาญี่ปุ่น</option>
                
                </select>
            </div>
        </div>

                            


        <?php }} ?>

        <?php if(!isset($_GET["edite"])){ ?>
        <div class="form-group" >
            
            <div class="col-sm-offset-7 col-sm-4 text-center ">
                <button class="btn btn-info btn-lg btn-block" name="btnNext5" 
                type="submit" value="Login">
                    ถัดไป   <span class="glyphicon glyphicon-random" aria-hidden="true"></span> 
                </button>
            </div>
        </div>
        <?php }else{ ?>
        <div class="form-group">
            <div class="col-sm-offset-8 col-sm-4 text-center">
                <button class="btn btn-success btn-lg btn-block" name="btnEdite5" 
                type="submit" value="Login" 
                onclick="if(confirm('ยืนยันการแก้ไขส่วนที่5')) return true; else return false;"
                >
                    แก้ไขส่วนที่ 5   <span class="glyphicon glyphicon-check" aria-hidden="true"></span> 
                </button>
            </div>
        </div>
        <?php } ?>
    </form>
</div>
