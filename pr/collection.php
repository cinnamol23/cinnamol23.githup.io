<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CYRIN - คอลเล็กชันพิเศษ</title>

    <!-- เพิ่มฟอนต์ Itim จาก Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        /* ใช้ฟอนต์ Itim ทั่วทั้งหน้าเว็บ */
        body {
            background-color: #f5f5f5;
            font-family: 'Itim', cursive; /* ตั้งค่าฟอนต์ Itim */
        }

        .specialCollectionHeader {
            background-image: url('https://example.com/nature-bg.jpg'); /* Replace with actual image URL */
            background-size: cover;
            background-position: center;
            color: palevioletred;
            padding: 100px 0;
            text-align: center;
        }

        .specialCollectionHeader h1 {
            font-size: 3.5rem;
            font-weight: bold;
        }

        .specialCollectionHeader p {
            font-size: 1.5rem;
            margin-top: 10px;
        }

        .collectionSection {
            padding: 60px 0;
        }

        .card {
            border: none;
            transition: transform 0.3s;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .card img {
            border-radius: 10px;
            object-fit: cover;
            width: 100%;
            height: 300px;
        }

        .cardTitle {
            font-size: 1.5rem;
            margin-top: 20px;
            font-weight: bold;
        }

        .cardText {
            font-size: 1.2rem;
            color: #666;
        }

        .btn-primary {
            background-color: #6d6875;
            border-color: #6d6875;
        }

        .btn-primary:hover {
            background-color: #5c546b;
            border-color: #5c546b;
        }
    </style>
</head>

<body>

    <!-- Header Section -->
    <header class="specialCollectionHeader">
        <h1>คอลเล็กชันพิเศษของ CYRIN</h1>
        <p>สัมผัสความหรูหราและเอกลักษณ์ที่เป็นหนึ่งเดียว</p>
    </header>

    <!-- Collection Section -->
    <section class="container collectionSection">
        <div class="row text-center mb-5">
            <h2>น้ำหอมจากคอลเล็กชันพิเศษ</h2>
            <p class="text-muted">ทุกหยดคือความประทับใจที่ไม่มีวันลืม</p>
        </div>
        <div class="row">
            <!-- Perfume Item 1 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="image/product/pf_9.jfif" alt="น้ำหอมกลิ่นเอกลักษณ์ 1">
                    <div class="card-body text-center">
                        <h5 class="cardTitle">CYRIN Noir</h5>
                        <p class="cardText">กลิ่นหอมลึกลับ ผสานความหรูหราและความเข้มแข็ง</p>
                        <a href="#" class="btn btn-primary">ดูรายละเอียด</a>
                    </div>
                </div>
            </div>

            <!-- Perfume Item 2 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="image/product/pf_10.jfif" alt="น้ำหอมกลิ่นเอกลักษณ์ 2">
                    <div class="card-body text-center">
                        <h5 class="cardTitle">CYRIN Blossom</h5>
                        <p class="cardText">กลิ่นหอมละมุน สดชื่นดั่งดอกไม้แรกแย้มในฤดูใบไม้ผลิ</p>
                        <a href="#" class="btn btn-primary">ดูรายละเอียด</a>
                    </div>
                </div>
            </div>

            <!-- Perfume Item 3 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="image/product/pf_11.jfif" alt="น้ำหอมกลิ่นเอกลักษณ์ 3">
                    <div class="card-body text-center">
                        <h5 class="cardTitle">CYRIN Eternity</h5>
                        <p class="cardText">ความหอมที่ไม่มีวันจางหาย ด้วยส่วนผสมจากธรรมชาติ</p>
                        <a href="#" class="btn btn-primary">ดูรายละเอียด</a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    
</body>

</html>
