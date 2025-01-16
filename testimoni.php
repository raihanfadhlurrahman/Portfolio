<?php
require 'connection.php';

// Query untuk mengambil semua data testimoni
$sql = "SELECT name, email, message, submitted_at FROM testimoni ORDER BY id DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Testimoni</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- External CSS -->
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #2b2727;
            font-family: 'Poppins', sans-serif;
        }
        .container-testimoni {
            padding-top: calc(150px + 20px); /* Menambahkan padding agar tidak tertutup navbar */
            width: 90%;
            margin: 20px auto;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 150px;
        }
        h1 {
            text-align: center;
            color: #00796b;
        }
        .testimoni-box {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #ddd;
            padding: 10px 0;
        }
        .testimoni-box:last-child {
            border-bottom: none;
        }
        .testimoni-info {
            display: flex;
            gap: 20px;
            flex: 1;
        }
        .testimoni-info div {
            flex: 1;
        }
        .testimoni-time {
            font-size: 0.8rem;
            color: #888;
            white-space: nowrap;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="img/logo.jpg" alt="Logo" width="45" height="45">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav gap-3">
                    <li class="nav-item"><a class="nav-link" href="index.php">Kembali</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Testimoni Section -->
    <div class="container-testimoni">
        <h1>Daftar Testimoni</h1>
        <?php
        if ($result->num_rows > 0) {
            // Loop untuk menampilkan setiap testimoni
            while ($row = $result->fetch_assoc()) {
                echo '<div class="testimoni-box">';
                echo '<div class="testimoni-info">';
                echo '<div><h3>' . htmlspecialchars($row['name']) . '</h3></div>';
                echo '<div><span>' . htmlspecialchars($row['email']) . '</span></div>';
                echo '<div><p>"' . nl2br(htmlspecialchars($row['message'])) . '"</p></div>';
                echo '</div>';
                echo '<div class="testimoni-time">' . htmlspecialchars($row['submitted_at']) . '</div>';
                echo '</div>';
            }
        } else {
            echo '<p>Tidak ada testimoni yang tersedia.</p>';
        }
        $conn->close();
        ?>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
