<?php
include '../admission/conn.php';

session_start();

$naid = $_SESSION["NaID"];
echo $naid."<br>";

if (isset($_POST["action"])) {
 
  if ($_POST["action"] == "fetch") {
    $query = "SELECT * FROM tbl_images WHERE NID = '" . $naid . "' ORDER BY id DESC";
    $result = mysqli_query($connected, $query);
    $output = '
    <div class="">
   <table class="table table-bordered table-striped">  
    <tr>
     <th width="20%">ชื่อเอกสาร</th>
     <th width="50%">ภาพเอกสาร</th>
     
     <th width="15%">ลบ</th>
    </tr>
  ';
    while ($row = mysqli_fetch_array($result)) {
      $output .= '

    <tr>
     <td>' . $row["doc"] . '</td>
     <td>
      <img src="doc/' . $row["filename"] . ' "
         height="150" width="175" class="img-thumbnail" />
     </td>
     
     <td><button type="button" name="delete" class="btn btn-danger bt-xs delete" id="' . $row["id"] . '">ลบ</button></td>
    </tr>
   ';
    }
    $output .= '</table> </div>';
    echo $output;
  }

  if ($_POST["action"] == "insert") {



    $file_name = $_FILES["image"]["name"];
    $file_type = $_FILES["image"]["type"];
    $temp_name = $_FILES["image"]["tmp_name"];
    $file_size = $_FILES["image"]["size"];
    $error = $_FILES["image"]["error"];

    if (!$temp_name) {
      echo "ERROR: Please browse for file before uploading";
      exit();
    }
    function compress_image($source_url, $destination_url, $quality)
    {
      $info = getimagesize($source_url);
      if ($info['mime'] == 'image/jpeg') $image = imagecreatefromjpeg($source_url);
      elseif ($info['mime'] == 'image/gif') $image = imagecreatefromgif($source_url);
      elseif ($info['mime'] == 'image/png') $image = imagecreatefrompng($source_url);
      imagejpeg($image, $destination_url, $quality);
      echo "เพิ่มรูปภาพสำเร็จ";
    }
    if ($error > 0) {
      echo $error;
    } else if (($file_type == "image/gif") || ($file_type == "image/jpeg") || ($file_type == "image/png") || ($file_type == "image/pjpeg")) {


      $nid = $_POST["txtID"];
      $doc = $_POST["txtDoc"];
      $date = date("Y-m-d H:i:s");
      $file_name = $date.$file_name;
      $query = "INSERT INTO tbl_images(filename,NID,doc) VALUES ('$file_name',$nid,'$doc')";
      if (mysqli_query($connected, $query)) {
        $filename = compress_image($temp_name, "doc/" . $file_name, 35);
      } else {
        mysqli_error($connected);
        echo 'เพิ่มรูปภาพไม่สำเร็จ!!! "ภาพขนาดใหญ่เกินไป ขนาดภาพที่แนะนำ 2 MB"';
      }
    }
  }
  if ($_POST["action"] == "update") {
    $date = date("Y-m-d H:i:s");
    $file = $date.$file;
    $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $query = "UPDATE tbl_images SET name = '$file' WHERE id = '" . $_POST["image_id"] . "'";
    if (mysqli_query($connected, $query)) {
      echo 'เปลี่ยนรูปภาพสำเร็จ';
    }
  }
  if ($_POST["action"] == "delete") {
    $query = "DELETE FROM tbl_images WHERE id = '" . $_POST["image_id"] . "'";
    if (mysqli_query($connected, $query)) {
      echo 'ลบข้อมูลสำเร็จ';
    }
  }
}
