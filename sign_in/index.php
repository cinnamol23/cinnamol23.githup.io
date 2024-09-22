
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        /* ตั้งค่าความสูงและความกว้างของหน้าเว็บให้ครอบคลุมทั้งหน้าจอ */
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            background: rgba(0, 0, 0, 0.5); /* สีพื้นหลังเป็นสีดำโปร่งใส */
        }

        /* ตั้งค่าการวางวิดีโอพื้นหลัง */
        #background-video {
            position: absolute;
            top: 0;
            left: 0;
            min-width: 100%;
            min-height: 100%;
            z-index: -1;
            object-fit: cover; /* ให้วิดีโอครอบคลุมทั้งพื้นที่ */
        }

        /* ตั้งค่าให้ฟอร์มลอยอยู่เหนือวิดีโอ */
        .login-container {
            background: rgba(0, 0, 0, 0.7);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            text-align: center;
        }

        .login-container h2 {
            margin-bottom: 20px;
            font-size: 28px;
            color: #fff;
        }

        .login-container label {
            font-size: 18px;
        }

        .login-container input {
            width: 100%;
            padding: 10px;
            margin: 10px 0 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
        }

        .login-container button {
            padding: 10px 20px;
            background-color: #28a745;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            color: white;
            cursor: pointer;
            width: 100%;
        }

        .login-container button:hover {
            background-color: #218838;
        }

        .login-container p {
            margin-top: 20px;
            font-size: 16px;
        }

        .login-container a {
            color: #28a745;
            text-decoration: none;
        }

        .login-container a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <!-- วิดีโอพื้นหลัง -->
    <video autoplay muted loop id="background-video">
        <source src="../image/flower.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <!-- คอนเทนเนอร์ของฟอร์มล็อกอิน -->
    <div class="login-container">
        <h2>Login</h2>
        <form action="sign_in.php" method="post">
            <label for="username">Username:</label>
            <input type="text" name="username" required>
            <label for="password">Password:</label>
            <input type="password" name="password" required>
            <button type="submit">Login</button>
        </form>
        <p>Don't have an account? <a href="../sign_up/index.php">Sign Up</a></p>
        <p><a href="../index.php">back</a></p>
    </div>
</body>
</html>
