<?php
session_start(); // เริ่มเซสชัน
include $_SERVER['DOCUMENT_ROOT'] . '/cyrin/connectdb.php';

// ตรวจสอบว่ามีข้อมูล POST หรือไม่
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // SQL เพื่อตรวจสอบชื่อผู้ใช้และรหัสผ่าน
    $sql = "SELECT member_id, username, m_password FROM member WHERE username = ?";
    if ($stmt = $con->prepare($sql)) {
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows == 1) {
            $stmt->bind_result($id, $username, $hashed_password);
            $stmt->fetch();
            if (password_verify($password, $hashed_password)) {
                // รหัสผ่านถูกต้อง, ตั้งค่า session
                $_SESSION['loggedin'] = true;
                $_SESSION['member_id'] = $id;
                $_SESSION['username'] = $username;
                header("location: ../index.php"); // หน้าแรกหลังล็อกอิน
                exit; // หยุดการทำงาน
            } else {
                echo "รหัสผ่านไม่ถูกต้อง!";
            }
        } else {
            echo "ไม่มีชื่อผู้ใช้นี้!";
        }
        $stmt->close();
    } else {
        echo "เกิดข้อผิดพลาด: " . $con->error;
    }
}
$con->close();
?>
