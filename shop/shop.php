<?php
session_start();

// ตรวจสอบว่าผู้ใช้ล็อกอินแล้วหรือยัง
if (!isset($_SESSION['username'])) {
    // ถ้ายังไม่ได้ล็อกอิน, ให้เปลี่ยนเส้นทางไปยังหน้าเข้าสู่ระบบ
    header("Location: sign_in.php");
    exit();
}

// ข้อมูลผู้ใช้หลังจากล็อกอิน
$user_name = $_SESSION['username'];  // ชื่อผู้ใช้ที่เก็บในเซสชัน
?>
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <script src="assets/js/color-modes.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <link rel="icon" href="../image/logo/logo.png">
    <title>Cyrin - Welcome <?php echo $user_name; ?></title>

    <!-- Bootstrap CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <style>
      /* Styles ส่วนตัว */
      .welcome-message {
        text-align: center;
        margin-top: 50px;
      }

      .logout-btn {
        display: flex;
        justify-content: center;
        margin-top: 20px;
      }
      .footer{
        
        width: 100%;
        height: 75px;
        background-color:#C8ACD6 ;

      }
    </style>
    <link href="carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>

  <nav class="mt-3 py-1 px-4  bg-body-tertiary border-bottom">
  <div class="container d-flex flex-wrap">
    <header data-bs-theme="light">
      <nav class="navbar navbar-expand-md px-4 navbar-light fixed-top" style="background-color: #C8ACD6 !important;">
        <div class="container-fluid">
          <img src="../image/logo/logo.png" alt="โลโก้" width="45" height="45">
          <a class="navbar-brand px-2" href="#">Cyrin</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-label="สลับการนำทาง">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../index.php">หน้าแรก</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../index.php?link=pr">ประชาสัมพันธ์</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">ประเภทน้ำหอม</a>
                <ul class="dropdown-menu" >
                  <li><a class="dropdown-item" href="#">น้ำหอมทัล</a></li>
                  <li><a class="dropdown-item" href="#">น้ำหอมสำหรับผู้หญิง</a></li>
                  <li><a class="dropdown-item" href="#">น้ำหอมแบบ Unisex</a></li>
                  <li><a class="dropdown-item" href="#">น้ำหอมสำหรับเด็ก</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../index.php?link=collection">คอลเล็กชันพิเศษ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../index.php?link=home">เกี่ยวกับเรา</a>
              </li>
            </ul>
          </div>
          <div class="col-md-3 text-end me-2">
            <a class="btn btn-primary" href="cart.php"><i class="fas fa-shopping-cart"></i> ตะกร้า</a>
            <a class="btn btn-primary" href="../admin.php" role="button"><i class="fab fa-black-tie me-1"></i>ผู้ดูแลระบบ</a> 
            <a class="btn btn-danger" href="../index.php">ออกจากระบบ</a> 
          </div>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
          
      </nav>
    </header>
  </div>
</nav>

    <main>
     
        
        <!-- เริ่มต้น Carousel -->
        <div id="carouselExampleControls" class="carousel slide mt-3 " data-bs-ride="carousel">
          <div class="carousel-inner py-4">
            <div class="carousel-item">
              <img src="../image/1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item active">
              <img src="../image/2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="../image/3.png" class="d-block w-100" alt="...">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">ก่อนหน้า</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">ถัดไป</span>
          </button>
        </div>
        <div class="welcome-message">
        <h1>WELCOME, <?php echo $user_name; ?>!</h1>
        <p>Welcome to the land of fragrance CYRIN</p>
      </div>
        <div>
    <?php 
      include '../body.php'; // แก้ไขให้ปิดคำสั่ง PHP
      include '../connectdb.php';
    ?>

    <div class="row row-cols-1 row-cols-md-4 g-4 px-5">
      <?php
        $sql_product = "SELECT * FROM `products` ORDER BY `products`.`product_img_name` DESC";													
        $query = mysqli_query($con, $sql_product);
        while($result = mysqli_fetch_array($query)) { 
      ?>
        <div class="col">
          <div class="card w-100 h-100" style="width: 20rem;">
            <img src="../image/product/<?php echo $result['product_img_name']; ?>" class="card-img-top" width="300" height="300" alt=""/>
            <div class="card-body">
              <h5 class="card-title"><?php echo $result['product_name']; ?></h5>
              <p class="card-text"><?php echo $result['product_desc']; ?></p>
              <p class="card-text"><?php echo $result['product_price']; ?> บาท</p>
              <a href="#" class="btn btn-primary">Add to cart</a>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
    </div>

      <div class="container marketing py-5">
  <h3> รีวิวจากผู้ใช้ </h3>
    <!-- Three columns of text below the carousel -->
    <div class="row py-4">
      <div class="col-lg-4 mt-3 py-3">
        <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="../image/mamber/m1.jfif" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
        <h3 class="fw-normal py-2">ฺBokchoy</h3>
        <p>เป็นน้ำหอมที่ดิฉันใช้ฉีดก่อนออกไปข้างนอกทุกวันเลยค่ะ  หอมสดชื่น ไม่ฉุน</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4 py-3">
        <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="../image/mamber/m2.jfif" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
        <h3 class="fw-normal py-2">Chuaikun แนะนำน้ำหอม</h3>
        <p>เยี่ยมมากค่ะ หอมสะอาด เหมือนอาบน้ำทุกวัน</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4 py-3">
        <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="../image/mamber/m3.jfif" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-color)"/></svg>
        <h3 class="fw-normal py-2">แหล่ง รีวิว</h3>
        <p>สมาร์ทดีคับ ผมลองใช้ตอนเดตฝ่ายหญิงชอบครับ ถึงกับเอ่ยถามเลยว่ากลิ่นอะไร</p>
        <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

   

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->
  <div class="footer">
        <p align="center" style="padding-top:25px;">
            &copy:copyright Miss.TANCHANOK CHUADEE  วิทยาลัยเทคนิคพะเยา

        </p>

  </div>  
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
