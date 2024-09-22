<?php
include '../connectdb.php';

// ตรวจสอบว่ามี ID ที่ต้องแก้ไข
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // ดึงข้อมูลน้ำหอมที่ต้องการแก้ไข
    $sql = "SELECT * FROM perfumes WHERE id = $id";
    $result = $con->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
    } else {
        echo "ไม่พบข้อมูลน้ำหอมที่ต้องการแก้ไข.";
        exit();
    }
}

// ตรวจสอบว่ามีการส่งฟอร์มแก้ไขข้อมูล
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

    // อัปโหลดรูปภาพใหม่ (ถ้ามี)
    $image = $row['image']; // ตั้งค่ารูปเดิมไว้ก่อน
    if (!empty($_FILES['image']['name'])) {
        $target_dir = __DIR__ . '../images/product/';
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            $image = basename($_FILES["image"]["name"]); // เปลี่ยนชื่อรูปใหม่
        } else {
            echo "เกิดข้อผิดพลาดในการอัปโหลดรูปภาพ.";
            
        }
    }

    // อัปเดตข้อมูลน้ำหอม
    $sql = "UPDATE perfumes 
            SET name='$name', brand='$brand', scent_notes='$scent_notes', concentration='$concentration', 
                volume_ml=$volume_ml, price=$price, release_year=$release_year, description='$description', image='$image'
            WHERE id = $id";

    if ($con->query($sql) === TRUE) {
        echo "แก้ไขข้อมูลน้ำหอมสำเร็จ!";
        header("Location: index.php");
    } else {
        echo "เกิดข้อผิดพลาด: " . $con->error;
    }
}
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขน้ำหอม | CYRIN</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #a37e2c;
        }
        form {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 10px;
            color: #333;
        }
        input[type="text"], input[type="number"], textarea, input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        textarea {
            height: 100px;
        }
        img {
            display: block;
            margin-bottom: 20px;
            max-width: 200px;
            height: auto;
        }
        input[type="submit"] {
            background-color: #a37e2c;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #916925;
        }
    </style>
</head>
<body>

<h1>แก้ไขน้ำหอม</h1>

<form class="user" action="index.php?link=edit_perfume&Action=edit_perfume&id=<?php echo $_GET['id']; ?>" name="edit_perfume" method="post" enctype="multipart/form-data">
    <label for="name">ชื่อ:</label>
    <input type="text" name="name" value="<?php echo htmlspecialchars($row['name']); ?>" required>

    <label for="brand">ยี่ห้อ:</label>
    <input type="text" name="brand" value="<?php echo htmlspecialchars($row['brand']); ?>" required>

    <label for="scent_notes">โน๊ตกลิ่น:</label>
    <textarea name="scent_notes" required><?php echo htmlspecialchars($row['scent_notes']); ?></textarea>

    <label for="concentration">ประเภท:</label>
    <input type="text" name="concentration" value="<?php echo htmlspecialchars($row['concentration']); ?>" required>

    <label for="volume_ml">ปริมาณ (ml):</label>
    <input type="number" name="volume_ml" value="<?php echo $row['volume_ml']; ?>" required>

    <label for="price">ราคา (บาท):</label>
    <input type="number" name="price" value="<?php echo $row['price']; ?>" required>

    <label for="release_year">ปีที่เปิดตัว:</label>
    <input type="number" name="release_year" value="<?php echo $row['release_year']; ?>" required>

    <label for="description">คำอธิบาย:</label>
    <textarea name="description" required><?php echo htmlspecialchars($row['description']); ?></textarea>

    <label for="image">รูปภาพ (อัปโหลดใหม่หากต้องการเปลี่ยน):</label>
    <img src="../images/product/<?php echo htmlspecialchars($row['image']); ?>" alt="น้ำหอม">
    <input type="file" name="image">

    <input type="submit" value="บันทึก">
</form>

</body>
</html>
