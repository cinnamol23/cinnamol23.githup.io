      <h2>Product</h2> 
      <a class="btn btn-primary" href="index.php?link=add_products">เพิ่มจำนวนสินค้า</a>
         
      <div class="table-responsive small">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">เลขที่</th>
              <th scope="col">หมายเลขห้อง</th>
              <th scope="col">ชื่อสินค้า</th>
              <th scope="col">รายละเอียดสินค้า</th>              
              <th scope="col">จำนวนสินค้า</th>
              <th scope="col">ราคาสินค้า</th>
              <th scope="col">รูปภาพ</th>
              <th scope="col">วันที่ทำรายการ</th>
              <th scope="col">สถานะสินค้า</th>
              <th scope="col">แก้ไขข้อมูลสินค้า</th>
            </tr>
          </thead>


          <tbody>
            <?php
               $i=0;
               $sql_product = "SELECT * FROM `products` ORDER BY `products`.`product_img_name` DESC";													
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
              <td><?php echo $result['product_img_name']; ?></td>
              <td><?php echo $result['date_time']; ?></td>
              <td><?php echo $result['status_s']; ?></td>

              <td><a href="index.php?link=edit&id=<?php echo $result['id'];?>" class="btn btn-sm btn-outline-warning me-3">แก้ไข</a> </td>

              <td><a href="index.php?link=delete&Action=delete&id=<?php echo $result['id'];?>" class="btn btn-sm btn-danger me-3">ลบ</a> </td>
            
            </tr>
            <?php } ?>
          </tbody>
          

          

