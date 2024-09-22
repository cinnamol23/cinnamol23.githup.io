<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Blog Template · Bootstrap v5.3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/blog/">

    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

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
        flex-wrap: nowrap;
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
       
    </style>

    
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
  </head>
  <body>
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
      </symbol>
    </svg>

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
      <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
              id="bd-theme"
              type="button"
              aria-expanded="false"
              data-bs-toggle="dropdown"
              aria-label="Toggle theme (auto)">
        <svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#circle-half"></use></svg>
        <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
      </button>
      <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#sun-fill"></use></svg>
            Light
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
            Dark
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#circle-half"></use></svg>
            Auto
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
      </ul>
    </div>

    
<svg xmlns="http://www.w3.org/2000/svg" class="d-none">
  <symbol id="aperture" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
    <circle cx="12" cy="12" r="10"/>
    <path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/>
  </symbol>
  <symbol id="cart" viewBox="0 0 16 16">
    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
  <symbol id="chevron-right" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
  </symbol>
</svg>

<main class="container">
  <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
    <div class="col-lg-6 px-0">
      <h1 class="display-4 fst-italic">เคล็ดลับการใช้น้ำหอม CYRIN ให้ติดทนนานตลอดวัน</h1>
      <p class="lead my-3">แนะนำวิธีการใช้น้ำหอม CYRIN อย่างมีประสิทธิภาพให้กลิ่นติดทนนาน ทั้งการฉีดในจุดต่างๆ ของร่างกาย เช่น ข้อมือ หลังหู และเคล็ดลับการเก็บรักษาน้ำหอมให้คุณภาพคงทน</p>
      <p class="lead mb-0"><a href="#" class="text-body-emphasis fw-bold">Continue reading...</a></p>
    </div>
  </div>

  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary-emphasis">Design</strong>
          <h3 class="mb-0">ประวัติความเป็นมาของน้ำหอม CYRIN: การเดินทางจากแนวคิดสู่ขวดน้ำหอม</h3>
          <div class="mb-1 text-body-secondary">Sep 20</div>
          <p class="card-text mb-auto">ในบทความนี้จะเล่าถึงประวัติและแรงบันดาลใจในการสร้างแบรนด์ CYRIN ว่าเกิดขึ้นมาอย่างไร ผู้ก่อตั้งได้แรงบันดาลใจจากอะไร และกระบวนการพัฒนากลิ่นหอมที่ไม่เหมือนใครจนกลายมาเป็นน้ำหอมในท้องตลาดวันนี้</p>
          <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
            Continue reading
            <svg class="bi"><use xlink:href="#chevron-right"/></svg>
          </a>
        </div>
        <div class="col-auto d-none d-lg-block">
            <img src="image/product/pf_6.jfif" alt="Product Image" width="200" height="250" style="border: 1px solid #55595c; object-fit: cover;">
        </div>

      </div>
    </div>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success-emphasis">World</strong>
          <h3 class="mb-0">น้ำหอม CYRIN: กลิ่นหอมที่เชื่อมโยงกับอารมณ์และความทรงจำ</h3>
          <div class="mb-1 text-body-secondary">Sep 23</div>
          <p class="mb-auto">บทความนี้จะเจาะลึกเกี่ยวกับวิทยาศาสตร์ของกลิ่น ว่ากลิ่นหอมของ CYRIN สามารถกระตุ้นอารมณ์และความทรงจำได้อย่างไร พร้อมทั้งแนะนำกลิ่นหอมที่เป็นซิกเนเจอร์ของ CYRIN ที่ออกแบบมาเพื่อสร้างประสบการณ์ที่ยาวนาน</p>
          <a href="#" class="icon-link gap-1 icon-link-hover stretched-link">
            Continue reading
            <svg class="bi"><use xlink:href="#chevron-right"/></svg>
          </a>
        </div>
        <div class="col-auto d-none d-lg-block">
            <img src="image/product/pf_8.jfif" alt="Product Image" width="200" height="250" style="border: 1px solid #55595c; object-fit: cover;">
        </div>
      </div>
    </div>
  </div>

  <div class="row g-5">
    <div class="col-md-8">
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
        From the Firehose
      </h3>

      <article class="blog-post">
        <h2 class="display-5 link-body-emphasis mb-1">
        CYRIN น้ำหอมยอดนิยมในหมู่เซเลบ: กลิ่นหอมที่ครองใจดาราและนักแสดง</h2>
        <p class="blog-post-meta">September 23, 2024 by <a href="#">Linly</a></p>

        <p> ในโลกของแฟชั่นและบิวตี้ น้ำหอมเป็นมากกว่ากลิ่นหอม มันเป็นสิ่งที่สะท้อนตัวตน สร้างความประทับใจ และบอกเล่าเรื่องราวในแบบของเราเอง </p>
        <hr>
        <p> หนึ่งในแบรนด์ที่สามารถทำให้กลิ่นหอมมีเอกลักษณ์และทรงพลังในทุกครั้งที่ใช้ คือแบรนด์น้ำหอมที่กำลังเป็นที่นิยมในหมู่เซเลบทั่วโลก—CYRIN น้ำหอมที่มีกลิ่นหอมละมุนและเป็นเอกลักษณ์เฉพาะตัว</p>
        <h2>เซเลบคนไหนที่เลือกใช้ CYRIN?</h2>
        <p>น้ำหอม CYRIN ไม่ได้เป็นเพียงแค่กลิ่นหอมที่สวยงามเท่านั้น แต่ยังเป็นกลิ่นหอมที่สร้างความทรงจำที่ยาวนาน ดาราหลายคนเลือกใช้น้ำหอม CYRIN เพื่อเสริมสร้างความมั่นใจในทุกการปรากฏตัวทั้งบนพรมแดงและในชีวิตประจำวัน เช่นเดียวกับเซเลบเหล่านี้:</p>
        <blockquote class="blockquote">
          <p>Anna Clover</p>
        </blockquote>
        <p> นักแสดงสาวจากฮอลลีวูดกล่าวว่า “CYRIN ทำให้ฉันรู้สึกมั่นใจและสง่างามในทุกครั้งที่เดินออกจากบ้าน มันเป็นกลิ่นหอมที่เหมาะกับทุกโอกาส ตั้งแต่การเข้าฉากถ่ายทำไปจนถึงการไปงานเลี้ยงหรู”</p>
        <p>Jason Lucas</p>
        </blockquote>
        <p> นักร้องและนักแสดงชื่อดังจากวงการเพลงป็อปชอบใช้น้ำหอมรุ่น Cyrin Noir เขาบอกว่ากลิ่นนี้เหมาะกับการแสดงสด เพราะมีเสน่ห์และดึงดูดใจแฟนๆ ได้ทันทีที่ขึ้นเวที</p>
        <h3>ทำไม CYRIN ถึงเป็นที่ชื่นชอบของคนดัง?</h3>
        <p>ความพิเศษที่หาไม่ได้จากที่อื่น: CYRIN เป็นแบรนด์น้ำหอมที่เน้นการออกแบบกลิ่นที่เป็นเอกลักษณ์เฉพาะตัว กลิ่นหอมของน้ำหอมแต่ละขวดถูกปรุงแต่งด้วยส่วนผสมคุณภาพสูง และมีกลิ่นหอมที่โดดเด่นซึ่งไม่ซ้ำกับน้ำหอมแบรนด์อื่น</p>
        <ul>
          <li>การสะท้อนตัวตนผ่านกลิ่น</li>
          <li>ความยั่งยืนและเป็นมิตรต่อสิ่งแวดล้อม</li>
          <li>ความพิเศษที่หาไม่ได้จากที่อื่น</li>
        </ul>
        
        <h2>CYRIN: น้ำหอมที่สร้างภาพลักษณ์เหนือกาลเวลา</h2>
        <p>หนึ่งในคุณสมบัติที่ทำให้ CYRIN แตกต่างจากน้ำหอมแบรนด์อื่น คือการสร้างภาพลักษณ์ที่คงทนและเหนือกาลเวลา กลิ่นหอมของ <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element">CYRIN</a>.</p>
        
       

      <nav class="blog-pagination" aria-label="Pagination">
        <a class="btn btn-outline-primary rounded-pill" href="#">Older</a>
        <a class="btn btn-outline-secondary rounded-pill disabled" aria-disabled="true">Newer</a>
      </nav>

    </div>

    <div class="col-md-4">
      <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-body-tertiary rounded">
          <h4 class="fst-italic">About</h4>
          <p class="mb-0">ให้ CYRIN ปรับฟีโรโมนให้คุณได้สัมผัสความน่าหลงใหลแก่คุณ</p>
        </div>

        <div>
          <h4 class="fst-italic">Recent posts</h4>
          <ul class="list-unstyled">
            <li>
              <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                <img class="bd-placeholder-img" width="96" height="96" src="image/product/pf_6.jfif" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></img>
                <div class="col-lg-8">
                  <h6 class="mb-0">คำแนะนำในการเก็บน้ำหอม CYRIN: เก็บอย่างไรให้หอมเหมือนใหม่</h6>
                  <small class="text-body-secondary">January 15, 2024</small>
                </div>
              </a>
            </li>
            <li>
              <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                <img class="bd-placeholder-img" width="96" height="96" src="image/product/pf_2.png" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></img>
                <div class="col-lg-8">
                  <h6 class="mb-0">CYRIN และส่วนผสมจากธรรมชาติ: การผสมผสานอย่างลงตัวของความงามและสุขภาพ</h6>
                  <small class="text-body-secondary">January 14, 2024</small>
                </div>
              </a>
            </li>
            <li>
              <a class="d-flex flex-column flex-lg-row gap-3 align-items-start align-items-lg-center py-3 link-body-emphasis text-decoration-none border-top" href="#">
                <img class="bd-placeholder-img" width="96" height="96" src="image/product/pf_5.jfif" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></img>
                <div class="col-lg-8">
                  <h6 class="mb-0"> CYRIN น้ำหอม Unisex: กลิ่นที่ทุกเพศใช้ได้</h6>
                  <small class="text-body-secondary">January 13, 2024</small>
                </div>
              </a>
            </li>
          </ul>
        </div>

        <div class="p-4">
          <h4 class="fst-italic">Archives</h4>
          <ol class="list-unstyled mb-0">
            <li><a href="#">March 2022</a></li>
            <li><a href="#">February 2022</a></li>
            <li><a href="#">January 2022</a></li>
            <li><a href="#">December 2021</a></li>
            <li><a href="#">November 2021</a></li>
            <li><a href="#">October 2021</a></li>
            <li><a href="#">September 2021</a></li>
            <li><a href="#">August 2021</a></li>
            <li><a href="#">July 2021</a></li>
            <li><a href="#">June 2021</a></li>
            <li><a href="#">May 2021</a></li>
            <li><a href="#">April 2021</a></li>
          </ol>
        </div>

        <div class="p-4">
          <h4 class="fst-italic">Elsewhere</h4>
          <ol class="list-unstyled">
            <li><a href="#">Instagram</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>

</main>


<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
