<?php
if (isset($_GET["Action"])) {
  if ($_GET["Action"] == "Save") {

    echo $_POST["product_name"];
    echo $_POST["product_desc"];
    echo $_POST["product_price"];
    echo $_POST["product_total"];
    echo $_FILES["product_img_name"]['name'];
    $sql_product = "SELECT * FROM `products`" . $_POST["product_name"] . "'";
    $query_product = mysqli_query($con, $sql_product);
    $result = mysqli_fetch_array($query_product);
    
    $image_name = $_FILES["product_img_name"]['name'];
    $folder ='image';
    $image_location = $folder.$image_name;

    if ($result) {
      $_POST["product_name"] = "";
?>
      <div class="alert alert-danger">
        <span class="glyphicon glyphicon-thumbs-down"></span><strong> เตือน!</strong> รายการซ้ำ
      </div>
    <?php

    } else {

      $sql = "INSERT INTO `products`(`product_name`, `product_desc`, `product_price`, `product_total`,`product_img_name`, `status_s`, `date_time`) VALUES ('".$_POST['product_name']."','".$_POST['product_desc']."','".$_POST['product_price']."','".$_POST['product_total']."','".$_FILES['product_img_name']."','".$_POST['status_s']."','".$_POST['date_time']."')";

      $dbquery = mysqli_query($con, $sql);
      

      




    ?>
      <script language="javascript">
        alert("บันทึกข้อมูลเรียบร้อย");
        window.location.href = "index.php?link=products";
      </script>
<?php

    }
  }
}




?>
<!-- Breadcrumbs-->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="index.php?link=product">ข้อมูลสินค้า</a>
  </li>
  <li class="breadcrumb-item active">เพิ่มข้อมูลสินค้า</li>
</ol>

<!-- DataTables Example -->
<div class="card mb-3">
  <div class="card-header">




    <form class="user" action="index.php?link=add_products&Action=Save" name="product_add" method="post" enctype="multipart/form-data">


      <div class="form-group row">
        <div class="col-sm-2 mb-3 mb-sm-0">
          <div align="right">
            <label>ชื่อสินค้า :</label>
          </div>
        </div>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-user" name="product_name" id="product_name">
        </div>
      </div>



      <div class="form-group row">
        <div class="col-sm-2 mb-3 mb-sm-0">
          <div align="right">
            <label>รายละเอียดสินค้า :</label>
          </div>
        </div>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-user" name="product_desc" id="product_desc">
        </div>
      </div>


      <div class="form-group row">
        <div class="col-sm-2 mb-3 mb-sm-0">
          <div align="right">
            <label>ราคาสินค้า :</label>
          </div>
        </div>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-user" name="product_price" id="product_price">
        </div>
      </div>



      <div class="form-group row">
        <div class="col-sm-2 mb-3 mb-sm-0">
          <div align="right">
            <label>จำนวนสินค้า :</label>
          </div>
        </div>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-user" name="product_total" id="	product_total">
        </div>
      </div>


      <div class="form-group row">
        <div class="col-sm-2 mb-3 mb-sm-0">
          <div align="right">
            <label>รูปภาพ:</label>
          </div>
        </div>
        <div class="col-sm-10">
          <input type="file" class="form-control form-control-user" name="product_img_name" id="product_img_name" accept="image/png, image/jpg">
        </div>
      </div>


      <div class="form-group row">
        <div class="col-sm-2 mb-3 mb-sm-0">
          <div align="right">
            <label>วันที่รายการ :</label>
          </div>
        </div>
        <div class="col-sm-10">
          <input type="date" class="form-control form-control-user" name="date_time" id="date_time">
        </div>
      </div>

      <div class="form-group row">
        <div class="col-sm-2 mb-3 mb-sm-0">
          <div align="right">
            <label>สถานะสินค้า :</label>
          </div>
        </div>
        <div class="col-sm-10">
          <select class="selectpicker" data-live-search="true" title="เลือกสถานะสินค้า" name="status_s" id="status_s" size="1" lang="th">
            <option>New</option>
            <option>Discount</option>
            <option>Normal</option>
          </select>
        </div>
      </div>


      <br />
      <div class="form-group row">
        <div class="col-sm-2 mb-3 mb-sm-0">
          <div align="right">

          </div>
        </div>
        <div class="col-sm-10">
          <button class="btn btn-primary btn-user btn-block" type="submit">
            <i class="fas fa-save"><strong> เพิ่มรายการสินค้า </strong></i>
          </button>
        </div>


      </div>
      <!-- /Order Details -->
    </form>

  </div>