<?php

require 'connection.php';

// Tangkap data form
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Simpan ke database
$sql = "INSERT INTO testimoni (name, email, message) VALUES ('$name', '$email', '$message')";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimoni Dikirim</title>
    <!-- CSS Styling -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
            text-align: center;
        }
        .container {
            margin-top: 50px;
        }
        .message-box {
            background: #e0f7fa;
            border: 1px solid #00acc1;
            border-radius: 8px;
            padding: 20px;
            display: inline-block;
            max-width: 500px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #00796b;
        }
        p {
            font-size: 18px;
            line-height: 1.5;
        }
        a {
            text-decoration: none;
            color: #00796b;
            font-weight: bold;
            margin-top: 10px;
            display: inline-block;
        }
        a:hover {
            color: #004d40;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="message-box">
            <?php
            if ($conn->query($sql) === TRUE) {
                echo "<h1>Testimoni Berhasil Dikirim!</h1>";
                echo "<p>Terima kasih atas partisipasimu, <strong>" . htmlspecialchars($name) . "</strong>.</p>";
                echo "<p>Kami menghargai setiap masukan yang diberikan.</p>";
            } else {
                echo "<h1>Oops, Terjadi Kesalahan!</h1>";
                echo "<p>Error: " . $sql . "<br>" . $conn->error . "</p>";
            }
            ?>
            <a href="index.php">Kembali ke Beranda</a> <br>
            <a href="testimoni.php">Lihat Testimoni</a>
        </div>
    </div>
</body>
</html>
<?php
$conn->close();
?>
