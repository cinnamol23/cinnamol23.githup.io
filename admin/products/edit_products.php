<?php
if (isset($_GET["Action"])) {

  if ($_GET["Action"] == "edit") {
    // ตรวจสอบการเชื่อมต่อฐานข้อมูล
    if (!$con) {
        die("การเชื่อมต่อฐานข้อมูลล้มเหลว: " . mysqli_connect_error());
    }

    // ตรวจสอบ ID ที่ส่งมาว่าถูกต้องหรือไม่
    if (!isset($_GET['id']) || empty($_GET['id'])) {
        die("ไม่พบข้อมูลสินค้า");
    }
    $id = mysqli_real_escape_string($con, $_GET['id']);

    // กรองข้อมูลจากฟอร์มเพื่อป้องกัน SQL Injection
    $product_name = mysqli_real_escape_string($con, $_POST['product_name']);
    $product_price = mysqli_real_escape_string($con, $_POST['product_price']);
    $product_desc = mysqli_real_escape_string($con, $_POST['product_desc']);
    $product_total = mysqli_real_escape_string($con, $_POST['product_total']);
    $date_time = mysqli_real_escape_string($con, $_POST['date_time']);
    $status_s = mysqli_real_escape_string($con, $_POST['status_s']);

    // แก้ไขข้อมูลสินค้าในฐานข้อมูล
    $sql = "UPDATE products 
            SET product_name='$product_name',
                product_price='$product_price',
                product_desc='$product_desc',
                product_total='$product_total',
                date_time='$date_time',
                status_s='$status_s' 
            WHERE id='$id'";

    // ตรวจสอบผลการทำงานของ SQL
    $dbName = mysqli_query($con, $sql);
    if ($dbName) {
        echo "อัปเดตข้อมูลสำเร็จ";
        ?>
        <script language="javascript">
          alert("แก้ไขข้อมูลเรียบร้อย");
          window.location.href = "index.php?link=products";
        </script>
        <?php
    } else {
        echo "เกิดข้อผิดพลาดในการอัปเดต: " . mysqli_error($con);
    }
  }
}
?>




<!-- Breadcrumbs-->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="index.php?link=products">ข้อมูลสินค้า</a>
  </li>
  <li class="breadcrumb-item Active">แก้ไข ข้อมูลสินค้า</li>
</ol>

<!-- DataTables Example -->
<div class="card mb-3">
  <div class="card-header">

    <?php
    if (!isset($_GET['id']) || empty($_GET['id'])) {
        die("ไม่พบข้อมูลสินค้า");
    }
    
    $id_pro = $_GET['id'];
    $sql = "SELECT * FROM products WHERE id = '" . mysqli_real_escape_string($con, $id_pro) . "'";
    $query_product = mysqli_query($con, $sql);

    if (!$query_product) {
        die("เกิดข้อผิดพลาดในการดึงข้อมูลสินค้า: " . mysqli_error($con));
    }

    $result = mysqli_fetch_array($query_product);

    if (!$result) {
        die("ไม่พบข้อมูลสินค้าที่ต้องการแก้ไข");
    }
    ?>

    <form class="user" action="index.php?link=edit&Action=edit&id=<?php echo $_GET['id']; ?>" name="add_products" method="post" enctype="multipart/form-data">

      <div class="form-group row my-1">
        <div class="col-sm-2 mb-3 mb-sm-0">
          <div align="right">
            <label>ชื่อสินค้า :</label>
          </div>
        </div>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-user" name="product_name" id="product_name" value="<?php echo $result['product_name']; ?>">
        </div>
      </div>

      <div class="form-group row my-1">
        <div class="col-sm-2 mb-3 mb-sm-0">
          <div align="right">
            <label>รายละเอียดสินค้า :</label>
          </div>
        </div>
        <div class="col-sm-10">
        <input type="text" class="form-control form-control-user" name="product_desc" id="product_desc" value="<?php echo $result['product_desc']; ?>">
        </div>
      </div>

      <div class="form-group row my-1">
        <div class="col-sm-2 mb-3 mb-sm-0">
          <div align="right">
            <label>ราคาสินค้า :</label>
          </div>
        </div>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-user" name="product_price" id="product_price" value="<?php echo $result['product_price']; ?>">
        </div>
      </div>

      <div class="form-group row my-1">
        <div class="col-sm-2 mb-3 mb-sm-0">
          <div align="right">
            <label>จำนวนสินค้า:</label>
          </div>
        </div>
        <div class="col-sm-10">
          <input type="text" class="form-control form-control-user" name="product_total" id="product_total" value="<?php echo $result['product_total']; ?>">
        </div>
      </div>

      <div class="form-group row my-1">
        <div class="col-sm-2 mb-3 mb-sm-0">
          <div align="right">
            <label>วันที่รายการ :</label>
          </div>
        </div>
        <div class="col-sm-10">
          <input type="date" class="form-control form-control-user" name="date_time" id="date_time" value="<?php echo $result['date_time']; ?>">
        </div>
      </div>

      <div class="form-group row my-1">
        <div class="col-sm-2 mb-3 mb-sm-0">
          <div align="right">
            <label>สถานะสินค้า :</label>
          </div>
        </div>
        <div class="col-sm-10">
          <select class="form-select" data-live-search="true" title="เลือกสถานะสินค้า" name="status_s" id="status_s">
            <option value="New" <?php echo ($result['status_s'] == 'New') ? 'selected' : ''; ?>>New</option>
            <option value="Discount" <?php echo ($result['status_s'] == 'Discount') ? 'selected' : ''; ?>>Discount</option>
            <option value="Normal" <?php echo ($result['status_s'] == 'Normal') ? 'selected' : ''; ?>>Normal</option>
          </select>
        </div>
      </div>

      <br />
      <div class="form-group row">
        <div class="col-sm-2 mb-3 mb-sm-0">
          <div align="right"></div>
        </div>
        <div class="col-sm-10">
          <button class="btn btn-warning btn-user btn-block" type="submit">
            <strong>แก้ไขรายการสินค้า</strong>
          </button>
        </div>
      </div>
    </form>
  </div>
