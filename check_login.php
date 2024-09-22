<?php
session_start();

// ตรวจสอบว่าผู้ใช้เข้าสู่ระบบหรือยัง
if (!isset($_SESSION['username'])) {
    // ถ้ายังไม่ได้เข้าสู่ระบบ, ให้เปลี่ยนเส้นทางไปยังหน้าเข้าสู่ระบบ
    header("Location: sign_in/index.php");
    exit(); // หยุดการทำงานของสคริปต์
}
?>