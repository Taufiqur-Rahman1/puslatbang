<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAN RI</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="logo">
            <img src="lanrinobg.png" alt="Logo LAN RI">
        </div>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Jadwal</a></li>
                <li><a href="#">Layanan</a></li>
                <li><a href="#">Tim</a></li>
                <li><a href="#">Histori</a></li>
                <li><a href="#">Hubungi Kami</a></li>
            </ul>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-text">
            <h1>Sistem Informasi LAN RI</h1>
            <p>Menyediakan Layanan Terbaik Untuk Pegawai dan Masyarakat</p>
        </div>
    </section>

    <!-- PHP Section for Background Images -->
    <?php
        // Array of background images
        $images = [
            'kantor2.jpg',   // Replace with your image paths
            'atas lagi.png',
            'atas lll.png'
        ];
    ?>

    <!-- Include JavaScript -->
    <script>
        // PHP to JavaScript: Convert PHP array to JavaScript array
        const images = <?php echo json_encode($images); ?>;
        
        // Current image index
        let currentIndex = 0;

        // Function to change background image
        function changeBackground() {
            const heroSection = document.querySelector('.hero');
            heroSection.style.backgroundImage = `url(${images[currentIndex]})`;
            currentIndex = (currentIndex + 1) % images.length;
        }

        // Change image every 5 seconds
        setInterval(changeBackground, 5000);

        // Set the first image when the page loads
        window.onload = changeBackground;
    </script>
</body>
</html>
