<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/logo.jpg" alt="Logo" width="45" height="45">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav gap-3">
                    <li class="nav-item"><a class="nav-link text-white" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="testimoni.php">Testimoni</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Welcome Section -->
    <section class="welcome-section">
        <div class="container text-white text-center text-md-start">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <h1>Hello,</h1>
                    <h1 class="text-im">I'm Raihan Fadhlurrahman</h1>
                    <p> pengembang yang saat ini mendalami Front-end hingga Back-end Development. Dengan semangat
						besar
						terhadap teknologi, saya terus memperluas pengetahuan saya di dunia pengembangan web modern,
						menciptakan
						aplikasi web yang responsif dan fungsional. </p>
					<p> Selain pengembangan web, saya juga memiliki ketertarikan yang kuat di bidang Cyber Security.
						Saya
						tertantang
						untuk memahami bagaimana sistem dapat dibangun dengan aman, dan selalu berupaya untuk
						mengembangkan
						keterampilan
						saya dalam mengamankan aplikasi dari ancaman keamanan.</p>
					<p> Dalam perjalanan ini, saya percaya bahwa kombinasi antara kemampuan pengembangan penuh
						(full-stack) dan
						pemahaman mendalam tentang keamanan siber akan membantu saya menciptakan solusi yang tidak hanya
						canggih, tetapi
						juga aman dan terpercaya.</p>
                    <a href="#projects" class="btn btn-success mt-3">See My Work</a>
                </div>
                <div class="col-md-5 text-center d-none d-md-block">
                    <img src="img/laptop.png" class="img-fluid" alt="Laptop">
                </div>
            </div>
        </div>
    </section>

    <!-- Work Section -->
    <section id="projects" class="work-section bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-4">My Projects</h2>
            <div class="row g-4">
                <?php
                require_once 'connection.php';
                
                $sql = "SELECT * FROM projects ORDER BY created_at DESC";
                $result = $conn->query($sql);
    
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        ?>
                        <div class="col-sm-6 col-md-4">
                            <div class="card shadow">
                                <img src="<?php echo htmlspecialchars($row['image_url']); ?>" class="card-img-top" alt="Project Image">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo htmlspecialchars($row['title']); ?></h5>
                                    <p class="card-text"><?php echo htmlspecialchars($row['description']); ?></p>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                } else {
                    echo '<div class="col-12 text-center">No projects found.</div>';
                }
                ?>
            </div>
        </div>

        
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section py-5 bg-dark text-white">
        <div class="container text-center">
            <h2>Kirim Testimonimu Kesini!</h2>
            <form action="process_testimoni.php" method="POST" class="mt-4">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                    </div>
                    <div class="col-md-6">
                        <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                    </div>
                </div>
                <div class="mb-3">
                    <textarea name="message" rows="4" class="form-control" placeholder="Your Message"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Send</button>
            </form>
        </div>
    </section>

    <!-- Social Media Contact Section -->
    <section id="social-contact" class="py-5 bg-light">
    <div class="container text-center">
        <h2 class="mb-4">Kontak Saya</h2>
        <div class="row justify-content-center">
            <!-- Facebook -->
            <div class="col-6 col-sm-2 mb-4">
                <a href="https://www.facebook.com/Fadhlurrahmanrraihan" target="_blank" class="contact-icon">
                    <i class="bi bi-facebook"></i>
                    <p class="mt-2">Facebook</p>
                </a>
            </div>
            <!-- Gmail -->
            <div class="col-6 col-sm-2 mb-4">
                <a href="https://mail.google.com/mail/?view=cm&to=fadhlurrahmanraihan@gmail.com" target="_blank" class="contact-icon">
                    <i class="bi bi-envelope-fill"></i>
                    <p class="mt-2">Gmail</p>
                </a>
            </div>
            <!-- Instagram -->
            <div class="col-6 col-sm-2 mb-4">
                <a href="https://instagram.com/raaa.ihan" target="_blank" class="contact-icon">
                    <i class="bi bi-instagram"></i>
                    <p class="mt-2">Instagram</p>
                </a>
            </div>
            <!-- GitHub -->
            <div class="col-6 col-sm-2 mb-4">
                <a href="https://github.com" target="_blank" class="contact-icon">
                    <i class="bi bi-github"></i>
                    <p class="mt-2">GitHub</p>
                </a>
            </div>
            <!-- LinkedIn -->
            <div class="col-6 col-sm-2 mb-4">
                <a href="https://linkedin.com" target="_blank" class="contact-icon">
                    <i class="bi bi-linkedin"></i>
                    <p class="mt-2">LinkedIn</p>
                </a>
            </div>
        </div>
    </div>
    </section>


    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 Raihan Fadhlurrahman | Pengembangan Aplikasi Berbasis Web</p>
    </footer>

    <!-- Bootstrap Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
	<script>
		window.addEventListener('scroll', function () {
			const navbar = document.querySelector('.navbar');
			if (window.scrollY > 50) {
				navbar.classList.add('scrolled'); // Tambahkan class scrolled
			} else {
				navbar.classList.remove('scrolled'); // Hapus class scrolled
			}
		});
	</script>
	
</body>

</html>
