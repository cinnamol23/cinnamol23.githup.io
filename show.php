


<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <script src="assets/js/color-modes.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <link rel="icon" href="image/logo/logo.png">
    <title> Cyrin </title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    
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

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-flow: row wrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;
        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
      main.main_div{
        width: 20%;
        height: 20;
        display: flex;
        flex-direction: row;
      }
    </style>
    <link href="carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>
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
        </li>ท
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
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">น้ำหอมทัล</a></li>
                  <li><a class="dropdown-item" href="#">น้ำหอมสำหรับผู้หญิง</a></li>
                  <li><a class="dropdown-item" href="#">น้ำหอมแบบ Unisex</a></li>
                  <li><a class="dropdown-item" href="#">น้ำหอมสำหรับเด็ก</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?link=pr">คอลเล็กชันพิเศษ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php?link=pr">เกี่ยวกับเรา</a>
              </li>
            </ul>
          </div>
          <div class="col-md-3 text-end me-2">
            <a class="btn btn-primary" href="sign_in"><i class="fas fa-user"></i> เข้าสู่ระบบ</a>
            <a class="btn btn-primary" href="cart.php"><i class="fas fa-shopping-cart"></i> ตะกร้า</a>
            <a class="btn btn-primary" href="admin/index.php" role="button">ผู้ดูแลระบบ</a>
          </div>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>

          <!-- Button to Open the Modal -->
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">
            เข้าสู่ระบบ
          </button>

          <!-- The Modal -->
          <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                  <h5 class="modal-title" id="loginModalLabel">เข้าสู่ระบบ</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">
                  <form>
                    <div class="mb-3">
                      <label for="email" class="form-label">อีเมล</label>
                      <input type="email" class="form-control" id="email" placeholder="กรอกอีเมลของคุณ" required>
                    </div>
                    <div class="mb-3">
                      <label for="password" class="form-label">รหัสผ่าน</label>
                      <input type="password" class="form-control" id="password" placeholder="กรอกรหัสผ่านของคุณ" required>
                    </div>
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="rememberMe">
                      <label class="form-check-label" for="rememberMe">จำฉันไว้</label>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">เข้าสู่ระบบ</button>
                  </form>
                </div>

                <!-- Modal Footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
                </div>
              </div>
            </div>
          </div>
        </div>
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
      <div>
  <?php 
    include 'body.php'; // แก้ไขให้ปิดคำสั่ง PHP
    include 'connectdb.php';
  ?>

  <div class="row row-cols-1 row-cols-md-4 g-4 px-5">
    <?php
      $sql_product = "SELECT * FROM `products` ORDER BY `products`.`product_img_name` DESC";													
      $query = mysqli_query($con, $sql_product);
      while($result = mysqli_fetch_array($query)) { 
    ?>
      <div class="col">
        <div class="card">
          <img src="image/<?php echo $result['product_img_name']; ?>" class="card-img-top" width="300" height="300" alt=""/>
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

  </div><!-- /.container -->

 </main>
  </body>
</html>

      
                  
            
                 


  </div>
   <!-- Bootstrap JS (include this at the end of your document) -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
                         
  </body>
</html>
