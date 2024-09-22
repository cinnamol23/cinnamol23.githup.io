<?php
include 'connectdb.php';
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>น้ำหอมผู้หญิง | CYRIN</title>
    <style>
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 40px;
        }
        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #a37e2c;
            color: white;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
        img {
            width: 65px;
            height: auto;
        }
        
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


   
<div class="container">
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
                    <img src="admin/images/product/<?php echo htmlspecialchars($row['image']); ?>" alt="<?php echo htmlspecialchars($row['name']); ?>" class="card-img-top" width="100" height="100">
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
</body>
</html>
