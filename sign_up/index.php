<?php
// นำเข้าไฟล์เชื่อมต่อฐานข้อมูล
include('../connectdb.php');
session_start(); // เพิ่มคำสั่ง session_start()

// ตรวจสอบว่ามีการส่งข้อมูลผ่านฟอร์ม
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // รับข้อมูลจากฟอร์ม
    $firstname = $_POST['m_firstname'];
    $lastname = $_POST['m_lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password1 = $_POST['m_password'];
    $password2 = $_POST['c_password'];

    // ตรวจสอบว่ารหัสผ่านทั้งสองช่องตรงกัน
    if ($password1 !== $password2) {
        echo "รหัสผ่านทั้งสองช่องไม่ตรงกัน!";
    } else {
        // เข้ารหัสรหัสผ่าน (Hash password)
        $hashed_password = password_hash($password1, PASSWORD_DEFAULT);

        // SQL สำหรับเพิ่มข้อมูลผู้ใช้ใหม่
        $sql = "INSERT INTO member (m_firstname, m_lastname, username, email, m_password) VALUES (?, ?, ?, ?, ?)";

        // เตรียมและ bind ข้อมูล
        if ($stmt = $con->prepare($sql)) {
            $stmt->bind_param("sssss", $firstname, $lastname, $username, $email, $hashed_password);

            // ลองเพิ่มข้อมูลลงฐานข้อมูล
            if ($stmt->execute()) {
                echo "สมัครสมาชิกสำเร็จ! คุณสามารถล็อกอินได้แล้ว.";
            } else {
                echo "เกิดข้อผิดพลาด: " . $stmt->error;
            }

            // ปิด statement
            $stmt->close();
        } else {
            echo "เกิดข้อผิดพลาดในการเตรียมคำสั่ง SQL: " . $con->error;
        }
    }
}

// ปิดการเชื่อมต่อฐานข้อมูล
$con->close();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Checkout example · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/checkout/">
    
    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .container {
            text-align: center; /* จัดกึ่งกลางเนื้อหาด้านใน */
            padding: 20px;
            border: 2px solid #ccc;
            background-color: #f4f4f4;
        }
    </style>

    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
    <link rel="icon" href="../image/logo/logo.png">
  </head>
  <body class="bg-light">
    
<div class="container">
  <main>
  
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="../image/logo/logo.png" alt="" width="150" height="150">
      <h2>ร่วมกันเป็นชาว Cyrin</h2>
      <p class="lead">สมัครเพื่อรับสิทธิพิเศษ และโปรโมชั่นต่างๆ ก่อนใครจากทาง Cyrin </p>
    </div>

    <div class="row justify-content-start">
        <h4 class="mb-3">สมัครสมาชิก</h4>
        <form class="needs-validation" action="index.php" method="post">
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="m_firstname" class="form-label">First name</label>
              <input type="text" class="form-control" name="m_firstname" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Last name</label>
              <input type="text" class="form-control" name="m_lastname" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

            <div class="col-12">
              <label for="username" class="form-label">Username</label>
              <div class="input-group has-validation">
                <span class="input-group-text">@</span>
                <input type="text" class="form-control" name="username" placeholder="ชื่อผู้ใช้" required>
                <div class="invalid-feedback">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control" name="email" placeholder="you@example.com" required>
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="col-12">
              <label for="password" class="form-label">รหัสผ่าน</label>
              <input type="password" class="form-control" name="m_password" placeholder="รหัสผ่าน" required>
            </div>

            <div class="col-12 py-3">
              <label for="confirm_password" class="form-label">ยืนยันรหัสผ่าน <span class="text-muted">(8ตัว)</span></label>
              <input type="password" class="form-control" name="c_password" placeholder="รหัสผ่าน" required>
            </div>

          <button class="w-100 btn btn-primary btn-lg" type="submit">Continue</button>
          <p>Already a member? <a href="../sign_in/index.php">Sign in</a></p>
          <p><a href="../index.php">back</a></p>
        </form>
      </div>
    </main>
</div>

<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="form-validation.js"></script>
</body>
</html>
