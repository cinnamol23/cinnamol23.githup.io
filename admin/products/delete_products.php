<?php

if (isset($_GET["Action"])) {
  if ($_GET["Action"] == "delete") {
 
    $sql = "DELETE FROM products WHERE `products`.`id` ='".$_GET['id']."'";
    $query=mysqli_query($con,$sql);

    ?>
    <script language="javascript">
      alert("ลบข้อมูลเรียบร้อย");
      window.location.href = "index.php?link=products";
    </script>
<?php

  }
}





?>
<h2>Product</h2> <a class="btn btn-sm btn-outline-info" href="index.php?link=add_products">เพิ่มสินค้า</a>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>             
              <th scope="col">รายการ</th>
              <th scope="col">ราคา</th>
              <th scope="col">หน่วย</th>
              <th scope="col">แก้ไข</th>
              <th scope="col">ลบ</th>
            </tr>
          </thead>
          <tbody>
            <?php
               $i=0;
               $sql_product = "select * From products ";             
                $query = mysqli_query($con,$sql_product);
                while($result=mysqli_fetch_array($query))
                { 
            ?>
            <tr>
            <td><?php echo $result['id']; ?></td>          
              <td><?php echo $result['product_code']; ?></td>
              <td><?php echo $result['product_name']; ?></td>          
              <td><?php echo $result['product_desc']; ?></td>
              <td><?php echo $result['product_total']; ?></td>
              <td><?php echo $result['product_price']; ?></td>
              <td><?php echo $result['date_time']; ?></td>
              <td><?php echo $result['status_s']; ?></td>
              <td><a href="index.php?link=edit_products&id=<?php echo $result['id'];?>" class="btn btn-sm btn-outline-warning">แก้ไข</a></td>
              <td><a href="index.php?link=products&Action=delete&id=<?php echo $result['id'];?>" class="btn btn-sm btn-outline-danger">ลบ</a></td>
            
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>