<h2 class="py-3">Perfumes for Women</h2>
<a class="btn btn-primary" href="index.php?link=add_women">เพิ่มสินค้าสำหรับผู้หญิง</a>


<?php
include '../connectdb.php';
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>น้ำหอมผู้หญิง | CYRIN</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
           
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 40px;
        }
        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #a37e2c;
            color: white;
        }
        img {
            width: 100px;
            height: auto;
        }
       
      
    </style>
</head>
<body>

<h1 class="py-3">น้ำหอมผู้หญิง | CYRIN</h1>

<table>
    <thead>
        <tr>
            <th>รูปภาพ</th>
            <th>ชื่อ</th>
            <th>ยี่ห้อ</th>
            <th>โน๊ตกลิ่น</th>
            <th>ประเภท</th>
            <th>ปริมาณ (ml)</th>
            <th>ราคา (บาท)</th>
            <th>ปีที่เปิดตัว</th>
            <th>ปรับปรุง</th>

        </tr>
    </thead>
    <tbody>
        <?php
        // ดึงข้อมูลน้ำหอมจากฐานข้อมูล
        $sql = "SELECT id, name, brand, scent_notes, concentration, volume_ml, price, release_year, image FROM perfumes";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            // แสดงข้อมูลน้ำหอมแต่ละรายการ
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td><img src='images/product/" . $row['image'] . "' alt='" . $row['name'] . "'></td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['brand'] . "</td>";
                echo "<td>" . $row['scent_notes'] . "</td>";
                echo "<td>" . $row['concentration'] . "</td>";
                echo "<td>" . $row['volume_ml'] . "</td>";
                echo "<td>" . number_format($row['price'], 2) . "</td>";
                echo "<td>" . $row['release_year'] . "</td>";
                echo "<td>";
                echo "<div class='action-btns'>";
                echo "<a href='index.php?link=edit_perfume&id=" . $row['id'] . "' class='edit-btn'>แก้ไข</a>";
                echo "</div>";
                echo "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='9' style='text-align:center;'>ไม่มีข้อมูลน้ำหอม</td></tr>";
        }
        

        // ปิดการเชื่อมต่อ
        $con->close();
        ?>
    </tbody>
</table>

</body>
</html>