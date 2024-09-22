<?php
include '../connectdb.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // ลบข้อมูลน้ำหอมออกจากฐานข้อมูล
    $sql = "DELETE FROM perfumes WHERE id = $id";

    if ($con->query($sql) === TRUE) {
        echo "ลบข้อมูลน้ำหอมสำเร็จ!";
    } else {
        echo "เกิดข้อผิดพลาด: " . $con->error;
    }

    // หลังจากลบเสร็จ กลับไปที่หน้ารายการน้ำหอม
    header("Location: index.php");
} else {
    echo "ไม่มี ID ที่จะลบ.";
}

$con->close();
?>
