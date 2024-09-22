<?php
include '../connectdb.php';

// ตรวจสอบว่ามีการส่งฟอร์มหรือไม่
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // รับค่าจากฟอร์ม
    $name = $_POST['name'];
    $brand = $_POST['brand'];
    $scent_notes = $_POST['scent_notes'];
    $concentration = $_POST['concentration'];
    $volume_ml = $_POST['volume_ml'];
    $price = $_POST['price'];
    $release_year = $_POST['release_year'];
    $description = $_POST['description'];

 // ตรวจสอบและอัปโหลดรูปภาพ
 $target_dir = __DIR__ . '/../images/product/'; // โฟลเดอร์เก็บรูปภาพ
 if (!file_exists($target_dir)) {
     mkdir($target_dir, 0777, true);  // สร้างโฟลเดอร์ถ้าไม่มีอยู่
 }

 $target_file = $target_dir . basename($_FILES["image"]["name"]);
 $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

 // ตรวจสอบว่ามีการอัปโหลดไฟล์รูปภาพจริง
 if (is_uploaded_file($_FILES['image']['tmp_name'])) {
     // ตรวจสอบประเภทไฟล์รูปภาพ
     $check = getimagesize($_FILES["image"]["tmp_name"]);
     if ($check !== false) {
         if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
             // เก็บชื่อไฟล์รูปภาพในฐานข้อมูล
             $image = basename($_FILES["image"]["name"]);

             // เพิ่มข้อมูลน้ำหอมพร้อมรูปภาพลงในฐานข้อมูล
             $sql = "INSERT INTO perfumes (name, brand, scent_notes, concentration, volume_ml, price, release_year, description, image) 
                     VALUES ('$name', '$brand', '$scent_notes', '$concentration', $volume_ml, $price, $release_year, '$description', '$image')";

             if ($con->query($sql) === TRUE) {
                 echo "เพิ่มข้อมูลน้ำหอมสำเร็จ!";
             } else {
                 echo "เกิดข้อผิดพลาด: " . $con->error;
             }
         } else {
             echo "เกิดข้อผิดพลาดในการย้ายไฟล์รูปภาพ.";
         }
     } else {
         echo "ไฟล์นี้ไม่ใช่รูปภาพ.";
     }
 } else {
     echo "ไฟล์อัปโหลดไม่สำเร็จ.";
 }
}
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มน้ำหอม | CYRIN</title>
</head>
<body>

<h1>เพิ่มน้ำหอม</h1>

<form class="user" action="index.php?link=add_women&Action=Save" name="perfumes" method="post" enctype="multipart/form-data">
    <label for="name">ชื่อ:</label>
    <input type="text" name="name" required><br><br>

    <label for="brand">ยี่ห้อ:</label>
    <input type="text" name="brand" required><br><br>

    <label for="scent_notes">โน๊ตกลิ่น:</label>
    <textarea name="scent_notes" required></textarea><br><br>

    <label for="concentration">ประเภท:</label>
    <input type="text" name="concentration" required><br><br>

    <label for="volume_ml">ปริมาณ (ml):</label>
    <input type="number" name="volume_ml" required><br><br>

    <label for="price">ราคา:</label>
    <input type="number" step="0.01" name="price" required><br><br>

    <label for="release_year">ปีที่เปิดตัว:</label>
    <input type="number" name="release_year" required><br><br>

    <label for="description">คำอธิบาย:</label>
    <textarea name="description" required></textarea><br><br>

    <label for="image">เลือกรูปภาพ:</label>
    <input type="file" name="image" required><br><br>

    <input type="submit" value="เพิ่มน้ำหอม">
</form>

</body>
</html>
