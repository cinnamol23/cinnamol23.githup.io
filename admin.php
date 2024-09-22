<?php
session_start();

// ข้อมูลสำหรับล็อกอิน (ในตัวอย่างนี้กำหนดแบบง่าย ๆ)
$username = "admin";
$password = "admin";

// ตรวจสอบว่ามีการส่งข้อมูลผ่าน POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // รับข้อมูลที่ผู้ใช้กรอก
    $input_username = $_POST['username'];
    $input_password = $_POST['password'];

    // ตรวจสอบข้อมูลล็อกอิน
    if ($input_username == $username && $input_password == $password) {
        // กำหนด session สำหรับล็อกอิน
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;

        // เปลี่ยนหน้าไปยังหน้าหลัก (หรือหน้าอื่น)
        header("Location: admin/index.php");
        exit;
    } else {
        // ข้อความแจ้งเตือนกรณีล็อกอินไม่สำเร็จ
        $error = "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
    }
}
?>
<link rel="icon" href="image/logo/logo.png">
<!-- ฟอร์มล็อกอิน -->
<!DOCTYPE html>
<html  lang="th">
<head>

    <title>Admin CYRIN</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin CYRIN</title>
    <!-- ใส่ CSS สำหรับการออกแบบ -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        h2 {
            margin-bottom: 20px;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #218838;
        }

        .error {
            color: red;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h2>Admin CYRIN</h2>

        <!-- แสดงข้อความแจ้งเตือนถ้าล็อกอินไม่สำเร็จ -->
        <?php if (isset($error)): ?>
            <p class="error"><?php echo $error; ?></p>
        <?php endif; ?>

        <form method="post" action="">
            <input type="text" name="username" placeholder="ชื่อผู้ใช้" required>
            <input type="password" name="password" placeholder="รหัสผ่าน" required>
            <button type="submit">เข้าสู่ระบบ</button>
            <h3>ชื่อ:admin รหัสผ่าน:admin</h3>
    
        </form>
    </div>
    
</body>
</html>
