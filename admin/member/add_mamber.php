<?php
if (isset($_GET["Action"])) {
  if ($_GET["Action"] == "Save") {

    echo $_POST["m_firstname"];
    echo $_POST["m_lastname"];
    echo $_POST["username"];
    echo $_POST["email"];
    echo $_POST["m_password"];
    echo $_FILES["m_image"]['name'];
    $sql_product = "SELECT * FROM `member`" . $_POST["username"] ."'";
    $query_product = mysqli_query($con, $sql_product);
    $result = mysqli_fetch_array($query_product);
    
    $image_name = $_FILES["m_image"]['name'];
    $folder ='image';
    $image_location = $folder.$image_name;

    if ($result) {
      $_POST["username"] = "";
?>
      <div class="alert alert-danger">
        <span class="glyphicon glyphicon-thumbs-down"></span><strong> เตือน!</strong> รายการซ้ำ
      </div>
    <?php

    } else {

      $sql = "INSERT INTO `member`(`m_firstname`, `m_lastname`, `username`, `email`,`m_password`) VALUES ('".$_POST['m_firstname']."','".$_POST['m_lastname']."','".$_POST['username']."','".$_POST['email']."','".$_POST['m_password']."','".$_FILES['m_image']."')";

      $dbquery = mysqli_query($con, $sql);
      

      




    ?>
      <script language="javascript">
        alert("บันทึกข้อมูลเรียบร้อย");
        window.location.href = "index.php?link=member";
      </script>
<?php

    }
  }
}

