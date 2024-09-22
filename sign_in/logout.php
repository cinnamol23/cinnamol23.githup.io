<?php
session_start();
session_destroy(); // ล้างข้อมูลทั้งหมดในเซสชัน
header("Location: index.php"); // เปลี่ยนเส้นทางไปหน้าแรก
exit();
?>
