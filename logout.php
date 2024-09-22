

<?php
session_start();

// ฟังก์ชันสำหรับ Logout
function logout() {
    // ลบ Session ทั้งหมด
    session_unset();
    // ทำลาย Session
    session_destroy();
    // Redirect ไปยังหน้า Login
    header("Location: sign_in/index.php");
    exit();
}

// ตรวจสอบว่ามีการกดปุ่ม Logout หรือไม่
if (isset($_POST['logout'])) {
    logout();
}
?>
    