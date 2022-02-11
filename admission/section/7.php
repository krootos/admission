<div class="caption-full">

  <!--h4 class="pull-right">$24.99</h4-->
  <h3 class="text-center">
    <p>
      <span class="glyphicon glyphicon-share"></span>
      7. ข้อมูลครอบครัว
    </p>
  </h3>
  <br>


  <?php if (!isset($_GET["edite"])) { ?>
    <form class="needs-validation" name="form1" method="post" action="index.php">
    <?php } else { ?>
      <form class="needs-validation" name="form1" method="post" action="index.php?edite=true">
      <?php } ?>

      <!-- ข้อมูลบิดา -->
      <div class="row">
        <div class="col-md-6 mb-3">
          <label>
            <h5 style="color:#019172">
              <span class="glyphicon glyphicon-user" aria-hidden="true"></span> ข้อมูลบิดา :
          </label>
          </h5>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 mb-3">
          <label for="formGroupInputLarge" style="color: #23527c;">
            <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
            คำนำหน้าชื่อ: </label>
          <input name="txtSnamefa" class="form-control input-lg" id="snamefa" placeholder="คำนำหน้า" type="text" required="" autofocus="" <?php if (!isset($_SESSION["EDITE"])) { ?> value="นาย" <?php } else { ?> value="<?php echo $_SESSION["EDITE"][28]; ?>" <?php } ?>>
        </div>
        <div class="col-md-4 mb-3">
          <label for="formGroupInputLarge" style="color: #23527c;">
            <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
            ชื่อบิดา: </label>
          <input name="txtFnamefa" class="form-control input-lg" id="fnamefa" placeholder="ชื่อบิดา" type="text" required="" autofocus="" value="<?php if (isset($_SESSION["EDITE"])) {
                                                                                                                                                    echo $_SESSION["EDITE"][29];
                                                                                                                                                  } ?>">
        </div>
        <div class="col-md-4 mb-3">
          <label for="formGroupInputLarge" style="color: #23527c;">
            <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
            นามสกุลบิดา: </label>
          <input name="txtLnamefa" class="form-control input-lg" id="lnamefa" placeholder="นามสกุลบิดา" type="text" required="" autofocus="" value="<?php if (isset($_SESSION["EDITE"])) {
                                                                                                                                                      echo $_SESSION["EDITE"][30];
                                                                                                                                                    } ?>">

        </div>

      </div>

      <div class="row">
        <div class="col-md-4 mb-3">
          <label for="formGroupInputLarge" style="color: #23527c;">
            <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
            หมายเลขโทรศัพท์ (บิดา): </label>
          <input name="txtTelfa" class="form-control input-lg" id="telfa" placeholder="เบอร์ติดต่อบิดา" type="text" OnKeyPress="return chkNumber(this)" required="" maxlength="10" value="<?php if (isset($_SESSION["EDITE"])) {
                                                                                                                                                                                            echo $_SESSION["EDITE"][31];
                                                                                                                                                                                          } ?>">

        </div>
        <div class="col-md-4 mb-3">
          <label for="formGroupInputLarge" style="color: #23527c;">
            <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
            อาชีพ: </label>
          <select class="form-control input-lg" name="lbFaOccupation" required="">
            <option value="">- บิดาประกอบอาชีพ -</option>
            <option value="เกษตรกรรม" <?php if (isset($_SESSION["EDITE"])) {
                                        if ($_SESSION["EDITE"][46] == "เกษตรกรรม") {
                                          echo "selected";
                                        }
                                      } ?>>เกษตรกรรม</option>
            <option value="รับจ้าง" <?php if (isset($_SESSION["EDITE"])) {
                                      if ($_SESSION["EDITE"][46] == "รับจ้าง") {
                                        echo "selected";
                                      }
                                    } ?>>รับจ้าง</option>
            <option value="ข้าราชการ" <?php if (isset($_SESSION["EDITE"])) {
                                        if ($_SESSION["EDITE"][46] == "ข้าราชการ") {
                                          echo "selected";
                                        }
                                      } ?>>ข้าราชการ</option>
            <option value="รัฐวิสาหกิจ" <?php if (isset($_SESSION["EDITE"])) {
                                          if ($_SESSION["EDITE"][46] == "รัฐวิสาหกิจ") {
                                            echo "selected";
                                          }
                                        } ?>>รัฐวิสาหกิจ</option>
            <option value="ค้าขาย" <?php if (isset($_SESSION["EDITE"])) {
                                      if ($_SESSION["EDITE"][46] == "ค้าขาย") {
                                        echo "selected";
                                      }
                                    } ?>>ค้าขาย</option>
            <option value="อื่นๆ" <?php if (isset($_SESSION["EDITE"])) {
                                    if ($_SESSION["EDITE"][46] == "อื่นๆ") {
                                      echo "selected";
                                    }
                                  } ?>>อื่นๆ</option>
          </select>
        </div>
      </div>
      <!-- /ข้อมูลบิดา -->


      <!-- ข้อมูลมารดา -->
      <div class="row">
        <div class="col-md-6 mb-3">
          <label>
            <h5 style="color:#019172">
              <span class="glyphicon glyphicon-user" aria-hidden="true"></span> ข้อมูลมารดา :
          </label>
          </h5>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 mb-3">
          <label for="formGroupInputLarge" style="color: #23527c;">
            <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
            คำนำหน้าชื่อ: </label>
          <select class="form-control input-lg" name="lbSnamema" required="">
            <option value="นางสาว" <?php if (isset($_SESSION["EDITE"])) {
                                      if ($_SESSION["EDITE"][32] == "นางสาว") {
                                        echo "selected";
                                      }
                                    } ?>>นางสาว</option>
            <option value="นาง" <?php if (isset($_SESSION["EDITE"])) {
                                  if ($_SESSION["EDITE"][32] == "นาง") {
                                    echo "selected";
                                  }
                                } ?>>นาง</option>
            <option value="Other" <?php if (isset($_SESSION["EDITE"])) {
                                    if ($_SESSION["EDITE"][32] == "Other") {
                                      echo "selected";
                                    }
                                  } ?>>อื่นๆ</option>
          </select>
        </div>
        <div class="col-md-4 mb-3">
          <label for="formGroupInputLarge" style="color: #23527c;">
            <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
            ชื่อมารดา: </label>
          <input name="txtFnamema" class="form-control input-lg" id="fnamema" placeholder="ชื่อมารดา" type="text" required="" autofocus="" value="<?php if (isset($_SESSION["EDITE"])) {
                                                                                                                                                    echo $_SESSION["EDITE"][33];
                                                                                                                                                  } ?>">
        </div>
        <div class="col-md-4 mb-3">
          <label for="formGroupInputLarge" style="color: #23527c;">
            <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
            นามสกุลมารดา: </label>
          <input name="txtLnamema" class="form-control input-lg" id="lnamema" placeholder="นามสกุลมารดา" type="text" required="" autofocus="" value="<?php if (isset($_SESSION["EDITE"])) {
                                                                                                                                                        echo $_SESSION["EDITE"][34];
                                                                                                                                                      } ?>">

        </div>

      </div>

      <div class="row">
        <div class="col-md-4 mb-3">
          <label for="formGroupInputLarge" style="color: #23527c;">
            <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
            หมายเลขโทรศัพท์ (มารดา): </label>
          <input name="txtTelma" class="form-control input-lg" id="telma" placeholder="เบอร์ติดต่อมารดา" type="text" OnKeyPress="return chkNumber(this)" required="" maxlength="10" value="<?php if (isset($_SESSION["EDITE"])) {
                                                                                                                                                                                              echo $_SESSION["EDITE"][35];
                                                                                                                                                                                            } ?>">

        </div>
        <div class="col-md-4 mb-3">
          <label for="formGroupInputLarge" style="color: #23527c;">
            <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
            อาชีพ: </label>
          <select class="form-control input-lg" name="lbMaOccupation" required="">
            <option value="">- มารดาประกอบอาชีพ -</option>
            <option value="เกษตรกรรม" <?php if (isset($_SESSION["EDITE"])) {
                                        if ($_SESSION["EDITE"][47] == "เกษตรกรรม") {
                                          echo "selected";
                                        }
                                      } ?>>เกษตรกรรม</option>
            <option value="รับจ้าง" <?php if (isset($_SESSION["EDITE"])) {
                                      if ($_SESSION["EDITE"][47] == "รับจ้าง") {
                                        echo "selected";
                                      }
                                    } ?>>รับจ้าง</option>
            <option value="ข้าราชการ" <?php if (isset($_SESSION["EDITE"])) {
                                        if ($_SESSION["EDITE"][47] == "ข้าราชการ") {
                                          echo "selected";
                                        }
                                      } ?>>ข้าราชการ</option>
            <option value="รัฐวิสาหกิจ" <?php if (isset($_SESSION["EDITE"])) {
                                          if ($_SESSION["EDITE"][47] == "รัฐวิสาหกิจ") {
                                            echo "selected";
                                          }
                                        } ?>>รัฐวิสาหกิจ</option>
            <option value="ค้าขาย" <?php if (isset($_SESSION["EDITE"])) {
                                      if ($_SESSION["EDITE"][47] == "ค้าขาย") {
                                        echo "selected";
                                      }
                                    } ?>>ค้าขาย</option>
            <option value="แม่บ้าน" <?php if (isset($_SESSION["EDITE"])) {
                                      if ($_SESSION["EDITE"][47] == "แม่บ้าน") {
                                        echo "selected";
                                      }
                                    } ?>>แม่บ้าน</option>
            <option value="อื่นๆ" <?php if (isset($_SESSION["EDITE"])) {
                                    if ($_SESSION["EDITE"][47] == "อื่นๆ") {
                                      echo "selected";
                                    }
                                  } ?>>อื่นๆ</option>
          </select>
        </div>
      </div>
      <!-- /ข้อมูลมารดา -->


      <!-- สถานภาพ -->
      <div class="row">
        <div class="col-md-6 mb-3">
          <label>
            <h5 style="color:#019172">
              <span class="glyphicon glyphicon-user" aria-hidden="true"></span> สถานภาพ บิดา-มารดา :
          </label>
          </h5>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 mb-3">
          <select class="form-control input-lg" name="lbStatus" required="">
            <option value="">- สถานภาพบิดา-มารดา -</option>
            <option value="อยู่ด้วยกันจดทะเบียนสมรส" <?php if (isset($_SESSION["EDITE"])) {
                                                        if ($_SESSION["EDITE"][36] == "อยู่ด้วยกันจดทะเบียนสมรส") {
                                                          echo "selected";
                                                        }
                                                      } ?>>อยู่ด้วยกันจดทะเบียนสมรส</option>
            <option value="โสด" <?php if (isset($_SESSION["EDITE"])) {
                                  if ($_SESSION["EDITE"][36] == "โสด") {
                                    echo "selected";
                                  }
                                } ?>>โสด</option>
            <option value="หม้าย" <?php if (isset($_SESSION["EDITE"])) {
                                    if ($_SESSION["EDITE"][36] == "หม้าย") {
                                      echo "selected";
                                    }
                                  } ?>>หม้าย</option>
            <option value="หย่าร้าง" <?php if (isset($_SESSION["EDITE"])) {
                                        if ($_SESSION["EDITE"][36] == "หย่าร้าง") {
                                          echo "selected";
                                        }
                                      } ?>>หย่าร้าง</option>
            <option value="แยกกันอยู่" <?php if (isset($_SESSION["EDITE"])) {
                                          if ($_SESSION["EDITE"][36] == "แยกกันอยู่") {
                                            echo "selected";
                                          }
                                        } ?>>แยกกันอยู่</option>
            <option value="บิดาถึงแก่กรรม" <?php if (isset($_SESSION["EDITE"])) {
                                              if ($_SESSION["EDITE"][36] == "บิดาถึงแก่กรรม") {
                                                echo "selected";
                                              }
                                            } ?>>บิดาถึงแก่กรรม</option>
            <option value="มารดาถึงแก่กรรม" <?php if (isset($_SESSION["EDITE"])) {
                                              if ($_SESSION["EDITE"][36] == "มารดาถึงแก่กรรม") {
                                                echo "selected";
                                              }
                                            } ?>>มารดาถึงแก่กรรม</option>
            <option value="บิดาและมารดาถึงแก่กรรรม" <?php if (isset($_SESSION["EDITE"])) {
                                                      if ($_SESSION["EDITE"][36] == "บิดาและมารดาถึงแก่กรรรม") {
                                                        echo "selected";
                                                      }
                                                    } ?>>บิดาและมารดาถึงแก่กรรรม</option>

          </select>
        </div>
      </div>
      <!-- /สถานภาพ-->


      <hr class="mb-4">

      <!-- ผู้ปกครอง -->
      <div class="row">
        <div class="col-md-6 mb-3">
          <label>
            <h5 style="color:#019172">
              <span class="glyphicon glyphicon-user" aria-hidden="true"></span> ผู้ปกครอง คือ : <span class="text-danger">(หากผู้ปกครองเป็น บิดา หรือ มารดา ให้เลือกบิดาหรือมารดา ไม่ต้องกรอกข้อมูลเพิ่มเติม)</span> 
          </label>
          </h5>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 mb-3">
          <div class="custom-control custom-radio">
            <h6><label>
                <input type="radio" name="raTypepa" id="optionpa1" value='1' onclick="javascript:Parent();" required="" <?php if (isset($_SESSION["EDITE"]) && $_SESSION["EDITE"][54] == 1) {
                                                                                                                          echo "checked";
                                                                                                                        } ?>>
                บิดา
              </label>
            </h6>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="custom-control custom-radio">
            <h6><label>
                <input type="radio" name="raTypepa" id="optionpa2" value='2' onclick="javascript:Parent();" required="" <?php if (isset($_SESSION["EDITE"]) && $_SESSION["EDITE"][54] == 2) {
                                                                                                                          echo "checked";
                                                                                                                        } ?>>
                มารดา
              </label>
            </h6>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="custom-control custom-radio">
            <h6><label>
                <input type="radio" name="raTypepa" id="optionpa3" value='3' onclick="javascript:Parent();" required="" <?php if (isset($_SESSION["EDITE"]) && $_SESSION["EDITE"][54] == 3) {
                                                                                                                          echo "checked";
                                                                                                                        } ?>>
                บุคคลอื่น <i style="font-size:13px; color: #ff0000;"> (กรอกด้านล่าง) </i>
              </label>
            </h6>
          </div>
        </div>
      </div>
      <!-- /ผู้ปกครอง-->

      <hr class="mb-4">


      <!-- ข้อมูลผู้ปกครอง -->
      <div class="row">

        <div class="col-md-6 mb-3">
          <label>
            <h5 style="color:#019172">
              <span class="glyphicon glyphicon-user" aria-hidden="true"></span> ข้อมูลผู้ปกครอง :
          </label>
          </h5>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 mb-3">
          <label for="formGroupInputLarge" style="color: #23527c;">
            <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
            คำนำหน้าชื่อ: </label>
          <input name="txtSnamepa" class="form-control input-lg" id="snamepa" placeholder="คำนำหน้า" type="text" required="" autofocus="" disabled="" <?php if (!isset($_SESSION["EDITE"])) { ?> value="" <?php } else { ?> value="<?php echo $_SESSION["EDITE"][48]; ?>" <?php } ?>>
        </div>
        <div class="col-md-4 mb-3">
          <label for="formGroupInputLarge" style="color: #23527c;">
            <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
            ชื่อผู้ปกครอง: </label>
          <input name="txtFnamepa" class="form-control input-lg" id="fnamepa" disabled="" placeholder="ชื่อผู้ปกครอง" type="text" required="" autofocus="" value="<?php if (isset($_SESSION["EDITE"])) {
                                                                                                                                                                    echo $_SESSION["EDITE"][49];
                                                                                                                                                                  } ?>">
        </div>
        <div class="col-md-4 mb-3">
          <label for="formGroupInputLarge" style="color: #23527c;">
            <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
            นามสกุลผู้ปกครอง: </label>
          <input name="txtLnamepa" class="form-control input-lg" id="lnamepa" placeholder="นามสกุลผู้ปกครอง" type="text" required="" autofocus="" disabled="" value="<?php if (isset($_SESSION["EDITE"])) {
                                                                                                                                                                        echo $_SESSION["EDITE"][50];
                                                                                                                                                                      } ?>">
        </div>



      </div>
      <div class="row">
        <div class="col-md-4 mb-3">
          <label for="formGroupInputLarge" style="color: #23527c;">
            <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
            หมายเลขโทรศัพท์ (ผู้ปกครอง): </label>
          <input name="txtTelpa" class="form-control input-lg" id="telpa" placeholder="เบอร์ติดต่อ" type="text" OnKeyPress="return chkNumber(this)" required="" maxlength="10" disabled="" value="<?php if (isset($_SESSION["EDITE"])) {
                                                                                                                                                                                                    echo $_SESSION["EDITE"][51];
                                                                                                                                                                                                  } ?>">
        </div>
        <div class="col-md-4 mb-3">
          <label for="formGroupInputLarge" style="color: #23527c;">
            <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
            อาชีพ: </label>

          <select class="form-control input-lg" name="lbPaOccupation" id="lbPaOccupation" required="" disabled="">
            <option value="">- ผู้ปกครองประกอบอาชีพ -</option>
            <option value="เกษตรกรรม" <?php if (isset($_SESSION["EDITE"])) {
                                        if ($_SESSION["EDITE"][52] == "เกษตรกรรม") {
                                          echo "selected";
                                        }
                                      } ?>>เกษตรกรรม</option>
            <option value="รับจ้าง" <?php if (isset($_SESSION["EDITE"])) {
                                      if ($_SESSION["EDITE"][52] == "รับจ้าง") {
                                        echo "selected";
                                      }
                                    } ?>>รับจ้าง</option>
            <option value="ข้าราชการ" <?php if (isset($_SESSION["EDITE"])) {
                                        if ($_SESSION["EDITE"][52] == "ข้าราชการ") {
                                          echo "selected";
                                        }
                                      } ?>>ข้าราชการ</option>
            <option value="รัฐวิสาหกิจ" <?php if (isset($_SESSION["EDITE"])) {
                                          if ($_SESSION["EDITE"][52] == "รัฐวิสาหกิจ") {
                                            echo "selected";
                                          }
                                        } ?>>รัฐวิสาหกิจ</option>
            <option value="ค้าขาย" <?php if (isset($_SESSION["EDITE"])) {
                                      if ($_SESSION["EDITE"][52] == "ค้าขาย") {
                                        echo "selected";
                                      }
                                    } ?>>ค้าขาย</option>
            <option value="แม่บ้าน" <?php if (isset($_SESSION["EDITE"])) {
                                      if ($_SESSION["EDITE"][52] == "แม่บ้าน") {
                                        echo "selected";
                                      }
                                    } ?>>แม่บ้าน</option>
            <option value="อื่นๆ" <?php if (isset($_SESSION["EDITE"])) {
                                    if ($_SESSION["EDITE"][52] == "อื่นๆ") {
                                      echo "selected";
                                    }
                                  } ?>>อื่นๆ</option>
          </select>
        </div>
      </div>
      <!-- /ข้อมูลผู้ปกครอง-->


      <!-- ความสัมพันธ์กับนักเรียน -->
      <div class="row">

        <div class="col-md-6 mb-3">
          <label>
            <h5 style="color:#019172">
              <span class="glyphicon glyphicon-user" aria-hidden="true"></span> ความสัมพันธ์กับนักเรียน :
          </label>
          </h5>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 mb-3">

          <select class="form-control input-lg" name="lbRelation" id="lbRelation" disabled="" required="">
            <option value="">- ความสัมพันธ์กับนักเรียน -</option>
            <option value="ปู่-ย่า" <?php if (isset($_SESSION["EDITE"])) {
                                      if ($_SESSION["EDITE"][53] == "ปู่-ย่า") {
                                        echo "selected";
                                      }
                                    } ?>>ปู่-ย่า</option>
            <option value="ตา-ยาย" <?php if (isset($_SESSION["EDITE"])) {
                                      if ($_SESSION["EDITE"][53] == "ตา-ยาย") {
                                        echo "selected";
                                      }
                                    } ?>>ตา-ยาย</option>
            <option value="ลุง-ป้า" <?php if (isset($_SESSION["EDITE"])) {
                                      if ($_SESSION["EDITE"][53] == "ลุง-ป้า") {
                                        echo "selected";
                                      }
                                    } ?>>ลุง-ป้า</option>
            <option value="น้า-อา" <?php if (isset($_SESSION["EDITE"])) {
                                      if ($_SESSION["EDITE"][53] == "น้า-อา") {
                                        echo "selected";
                                      }
                                    } ?>>น้า-อา</option>
            <option value="พี่สาว-พี่ชาย" <?php if (isset($_SESSION["EDITE"])) {
                                            if ($_SESSION["EDITE"][53] == "พี่สาว-พี่ชาย") {
                                              echo "selected";
                                            }
                                          } ?>>พี่สาว-พี่ชาย</option>
            <option value="อื่นๆ" <?php if (isset($_SESSION["EDITE"])) {
                                    if ($_SESSION["EDITE"][53] == "อื่นๆ") {
                                      echo "selected";
                                    }
                                  } ?>>อื่นๆ</option>
            <option value="บิดา" <?php if (isset($_SESSION["EDITE"])) {
                                    if ($_SESSION["EDITE"][53] == "บิดา") {
                                      echo "selected";
                                    }
                                  } ?>>บิดา</option>
            <option value="มารดา" <?php if (isset($_SESSION["EDITE"])) {
                                    if ($_SESSION["EDITE"][53] == "มารดา") {
                                      echo "selected";
                                    }
                                  } ?>>มารดา</option>

          </select>
        </div>




      </div>

      <hr class="mb-4">


      <?php if (!isset($_GET["edite"])) { ?>



        <div class="has-error form-group">
          
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="same-address">
          <input class="custom-control-input" name="chAccept" type="checkbox" id="checkboxError" value="OK" required="">

          <label class="custom-control-label" for="checkboxError"> ข้าพเจ้าขอรับรองว่า ข้อมูลที่นำมาสมัครครั้งนี้ ถูกต้องทุกประการและยินดีให้โรงเรียนสงวนลิขสิทธิ์ ในการเก็บข้อมูลหลักฐานการสมัครเข้าศึกษาต่อทุกฉบับ หากปรากฏว่าข้าพเจ้าขาดคุณสมบัติในการสมัคร ข้าพเจ้ายินยอมให้ตัดสิทธิ์ในการสมัครโดยไม่เรียกร้องค่าเสียหายใดๆ ทั้งสิ้น
</label>
        </div>

          
        </div>
      <?php } ?>
      <?php if (!isset($_GET["edite"])) { ?>
        
            <button class="btn btn-primary btn-lg btn-block" name="btnNext7" type="submit" value="Login">
              บันทึกข้อมูล <span class="glyphicon glyphicon-floppy-saved" aria-hidden="true"></span>
            </button>
        
      <?php } else { ?>
    
            <button class="btn btn-primary btn-lg btn-block" name="btnEdite7" type="submit" value="Login" onclick="if(confirm('ยืนยันการแก้ไขส่วนที่7')) return true; else return false;">
              บันทึกการแก้ไขส่วนที่ 7 <span class="glyphicon glyphicon-floppy-saved" aria-hidden="true"></span>
            </button>
        
      <?php } ?>
      </form>
</div>