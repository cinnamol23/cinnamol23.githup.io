
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <link rel="icon" href="image/logo/logo.png">
    <title> Cyrin </title>
    
    <!-- ลิงก์ฟอนต์ Itim จาก Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" rel="stylesheet">
    
    <script src="assets/js/color-modes.js"></script>

    <style>
      .footer{
        width: 100%;
        height: 75px;
        background-color:#C8ACD6;
      }

      /* ใช้ฟอนต์ Itim ทั่วทั้งหน้า */
      body {
        font-family: 'Itim', cursive;
      }

       /* ซ่อนไอคอนผู้ใช้โดยเริ่มต้น */
       #userIcon {
            display: none;
      }
      .card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      }
      .card {
            border: none;
            transition: transform 0.3s;
      }
    </style>
    
  </head>
  <body>
    <?php     
      include 'connectdb.php';
      include 'sign_in/sign_in.php'; // แทรกไฟล์ session.php
    ?>
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <!-- Your SVG symbols here -->
    </svg>

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
      <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown" aria-label="สลับธีม (อัตโนมัติ)">
        <svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#circle-half"></use></svg>
        <span class="visually-hidden" id="bd-theme-text">สลับธีม</span>
      </button>
      <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#sun-fill"></use></svg>
            สว่าง
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
            มืด
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#circle-half"></use></svg>
            อัตโนมัติ
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
      </ul>
    </div>

    <nav class="mt-3 py-1 px-4  bg-body-tertiary border-bottom">

  <div class="container d-flex flex-wrap">
    <header data-bs-theme="light">
      <nav class="navbar navbar-expand-md px-4 navbar-light fixed-top" style="background-color: #C8ACD6 !important;">
        <div class="container-fluid">
          <img src="image/logo/logo.png" alt="โลโก้" width="45" height="45">
          <a class="navbar-brand px-2" href="#">Cyrin</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-label="สลับการนำทาง">
            <span class="navbar-toggler-icon"></span>
          </button>
      
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">หน้าแรก</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?link=pr">ประชาสัมพันธ์</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">ประเภทน้ำหอม</a>
                <ul class="dropdown-menu" >
                  <li><a class="dropdown-item" href="index.php?link=women">น้ำหอมสำหรับผู้หญิง</a></li>
                  <li><a class="dropdown-item" href="index.php?link=men">น้ำหอมสำหรับผู้ชาย</a></li>
                  
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?link=collection">คอลเล็กชันพิเศษ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?link=about_us">เกี่ยวกับเรา</a>
              </li>
              
    
            </ul>
          
          </div>
          

        <!-- เพิ่มปุ่มเข้าสู่ระบบ/ออกจากระบบ -->
              <div class="nav-item me-2">
                <?php
                include 'connectdb.php';
                
                  // ตรวจสอบว่าผู้ใช้เข้าสู่ระบบหรือยัง
                  if(isset($_SESSION['username'])) {
                      // ผู้ใช้เข้าสู่ระบบแล้ว แสดงไอคอนและดรอปดาวน์
                      ?>
                      <div class="dropdown">
                      <button class="btn btn-secondary dropdown-toggle" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fas fa-user-circle me-2"></i> 
                      <?php echo isset($_SESSION['username']) ? htmlspecialchars($_SESSION['username']) : 'ผู้ใช้ทั่วไป'; ?>
                  </button>


                          <ul class="dropdown-menu" aria-labelledby="userDropdown">
                              <li><a class="dropdown-item" href="#">โปรไฟล์</a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="sign_in/logout.php">ออกจากระบบ</a></li>
                          </ul>
                      </div>
                      <?php
                  } else {
                      // ผู้ใช้ยังไม่ได้เข้าสู่ระบบ แสดงปุ่มเข้าสู่ระบบ
                      ?>
                      <a class="btn btn-primary" href="sign_in/index.php">
                          <i class="fas fa-sign-in-alt"></i> เข้าสู่ระบบ
                      </a>
                      <?php
                  }
                ?>
              </div>
            <!-- ลิงก์เข้าสู่ระบบ -->
            

            <!-- ไอคอนผู้ใช้ -->
            <div id="userIcon">
                <i class="fas fa-user-circle fa-2x me-2"></i>
            </div>

            <script>
                // เมื่อผู้ใช้กดปุ่มเข้าสู่ระบบ
                document.getElementById('loginBtn').addEventListener('click', function(event) {
                    // เปลี่ยนเป็นไอคอนผู้ใช้ทันที
                    document.getElementById('loginBtn').style.display = 'none'; // ซ่อนปุ่มเข้าสู่ระบบ
                    document.getElementById('userIcon').style.display = 'block'; // แสดงไอคอนผู้ใช้

                    // ลิงก์ไปหน้า sign_in/index.php ทำงานต่อไปตามปกติ
                });
            </script>
            <div>
            <a class="btn btn-primary" href="cart.php"><i class="fas fa-shopping-cart"></i> ตะกร้า</a>
            <a class="btn btn-primary me-2" href="admin.php" role="button"><i class="fab fa-black-tie me-1"></i>ผู้ดูแลระบบ</a>
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
            <img src="image/1.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item active">
            <img src="image/2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="image/3.png" class="d-block w-100" alt="...">
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
      
      <marquee direction="left" onmouseover="this.stop();" onmouseout="this.start();">

        <ul class="top-bar-text-left list-inline mb-0 ml-4 text-center" style="display: inline-flex;">
        <li class="list-text-first me-3">ลดราคาเฉพาะสมาชิก 15%
        </li>
        <a lang="en" href="#" id="dailyDeal1" class="offer-btn btn btn-outline-primary me-3">SHOP NOW</a>
        </ul>
        <ul class="top-bar-text-left list-inline mb-0 ml-4 text-center" style="display: inline-flex;">
        <li class="list-text-first me-3">โปรโมชันวันเกิดรับส่วนลด 30%
        </li>
        <a lang="en" href="#" id="dailyDeal2" class="offer-btn btn btn-outline-primary me-3">SHOP NOW</a>
        </ul>
        <ul class="top-bar-text-left list-inline mb-0 ml-4 text-center" style="display: inline-flex;">
        <li class="list-text-first me-3">โปรโมชั่นพิเศษในวันหยุด
        </li>
        <li>T&amp;CS APPLY.</li><a lang="en" href="#" id="todaysOffers" class="offer-btn btn btn-outline-primary me-3">View Offers</a>
        </ul>
      </marquee>
      
      <div>
        <?php
           include 'body.php';
        ?>
      
  

  <div class="row row-cols-1 row-cols-md-4 g-4 px-5">
    <?php
      include 'connectdb.php';
      
      $sql_product = "SELECT * FROM `products` ORDER BY `products`.`product_img_name` DESC";													
      $query = mysqli_query($con, $sql_product);
      while($result = mysqli_fetch_array($query)) { 
    ?>
      <div class="col">
        <div class="card w-100 h-100" style="width: 20rem;">
          <img src="image/product/<?php echo $result['product_img_name']; ?>" class="card-img-top" width="300" height="300" alt=""/>
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

<div class="container py-5">
<div class="row text-center mb-5">
    <h2>น้ำหอมผู้หญิง | CYRIN</h2>
    <p class="text-muted">ทุกหยดคือความประทับใจที่ไม่มีวันลืม</p>
</div>
<div class="row mb-5">
    <?php
    include 'connectdb.php';

    // ดึงข้อมูลน้ำหอมทั้งหมด
    $sql = "SELECT * FROM perfumes";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            ?>
            <!-- Perfume Item -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="admin/images/product/<?php echo htmlspecialchars($row['image']); ?>" alt="<?php echo htmlspecialchars($row['name']); ?>" class="card-img-top" width="250" height="500">
                    <div class="card-body text-center">
                        <h5 class="card-title"><?php echo htmlspecialchars($row['name']); ?></h5>
                        <p class="card-text"><?php echo htmlspecialchars($row['scent_notes']); ?></p>
                        <a href="#" class="btn btn-primary">ดูรายละเอียด</a>
                    </div>
                </div>
            </div>
            <?php
        }
    } else {
        echo "<p>ไม่พบข้อมูลน้ำหอมในคอลเล็คชันนี้</p>";
    }

    $con->close();
    ?>
</div>


<div class="container marketing py-5">
    <h2 class="text-center mb-4">รีวิวจากผู้ใช้</h2>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card text-center">
                <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="image/member/m1.jfif" alt="รีวิวจาก Bokchoy" />
                <h4 class="fw-normal py-2">Bokchoy</h4>
                <p>เป็นน้ำหอมที่ดิฉันใช้ฉีดก่อนออกไปข้างนอกทุกวันเลยค่ะ หอมสดชื่น ไม่ฉุน</p>
                <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
            </div>
        </div>
        <div class="col">
            <div class="card text-center">
                <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="image/member/m2.jfif" alt="รีวิวจาก Chuaikun" />
                <h4 class="fw-normal py-2">Chuaikun แนะนำน้ำหอม</h4>
                <p>เยี่ยมมากค่ะ หอมสะอาด เหมือนอาบน้ำทุกวัน</p>
                <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
            </div>
        </div>
        <div class="col">
            <div class="card text-center">
                <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="image/member/m3.jfif" alt="รีวิวจาก แหล่ง รีวิว" />
                <h4 class="fw-normal py-2">แหล่ง รีวิว</h4>
                <p>สมาร์ทดีคับ ผมลองใช้ตอนเดตฝ่ายหญิงชอบครับ ถึงกับเอ่ยถามเลยว่ากลิ่นอะไร</p>
                <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
            </div>
        </div>
    </div>
</div>

<style>
    .card {
        border: none; /* เอากรอบการ์ดออก */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* เพิ่มเงาให้การ์ด */
        border-radius: 15px; /* มุมการ์ดมน */
    }
    .card img {
        margin-bottom: 20px; /* ระยะห่างระหว่างภาพกับชื่อ */
        margin: 0 auto;
        display: block;
    }
    h3 {
        color: #a37e2c; /* สีชื่อหัวข้อ */
    }
</style>



    <!-- START THE FEATURETTES -->

   

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->

 </main>
  </body>
</html>

<footer class="text-center py-4">
        <p>&copy; 2024 CYRIN. TANCHANOK CHUADEE. | For education <i class="fas fa-heart"></i> วิทยาลัยเทคนิคพะเยา</p>
    </footer>   
            
                 


  </div>
   <!-- Bootstrap JS (include this at the end of your document) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  
  </body>
</html>
