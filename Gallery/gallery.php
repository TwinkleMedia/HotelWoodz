<?php
$siteName = 'The Woodz Hotel';

/* Image paths – use demo now, replace later */
$heroImage = '../Banner/b10.jpg';
$receptionImg1 = 'assets/rec1.jpg';
$receptionImg2 = 'assets/rec2.jpg';
$receptionImg3 = 'assets/rec3.jpg';
$receptionImg4 = 'assets/rec4.jpg';
$receptionImg5 = 'assets/rec5.jpg';

$passageImg1 = 'assets/pass1.jpg';
$passageImg2 = 'assets/pass2.jpg';
$passageImg3 = 'assets/pass3.jpg';

$deluxeImg1 = 'assets/dr1.jpg';
$deluxeImg2 = 'assets/dr2.jpg';
$deluxeImg3 = 'assets/dr3.jpg';
$deluxeImg4 = 'assets/dr4.jpg';
$deluxeImg5 = 'assets/dr5.jpg';

$superDeluxeImg1 = 'assets/sdr1.jpg';
$superDeluxeImg2 = 'assets/sdr2.jpg';
$superDeluxeImg3 = 'assets/sdr3.jpg';
$superDeluxeImg4 = 'assets/sdr4.jpg';
$superDeluxeImg5 = 'assets/sdr5.jpg';
$superDeluxeImg6 = 'assets/sdr6.jpg';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($siteName) ?> — Rooms</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Page Styles -->
    <style>
        :root {
            --accent: #c89d29;
            --muted: #555;
            --card-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
            --max-width: 1200px;
        }

        body {
            font-family: 'Poppins', sans-serif;
        }

        .hero {
            position: relative;
            height: 55vh;
            min-height: 320px;
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }

        .hero::after {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.6);
        }

        .hero .content {
            position: relative;
            z-index: 2;
        }

        .wrapper {
            max-width: var(--max-width);
            margin: auto;
            padding: 60px 20px;
            background: #F5F5DC;
        }

        .video-container {
            width: 100%;
            max-width: 900px;
            margin: 50px auto;
            border-radius: 10px;
            overflow: hidden;
        }

        .video-container video {
            width: 100%;
            border: 4px solid #c89d29;
        }

        .underline {
            position: relative;
        }

        .underline::after {
            content: '';
            position: absolute;
            left: 50%;
            bottom: -6px;
            transform: translateX(-50%);
            width: 256px;
            height: 4px;
            background-color: #d4a017;
        }

        .section-title {
            text-align: center;
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 35px;
        }

        .img-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .img-grid img {
            width: 100%;
            height: 260px;
            object-fit: cover;
            border-radius: 10px;
            cursor: pointer;
            transition: .3s ease;
        }

        .img-grid img:hover {
            transform: scale(1.04);
        }

        @media (max-width: 992px) {
            .img-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 600px) {
            .img-grid {
                grid-template-columns: 1fr;
            }
        }

        /* ---------------------- LIGHTBOX ---------------------- */

        .lightbox {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, 0.9);
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        .lightbox img {
            max-width: 90%;
            max-height: 90%;
            object-fit: contain;
        }

        .close-btn {
            position: absolute;
            top: 25px;
            right: 40px;
            font-size: 45px;
            color: white;
            cursor: pointer;
        }

        .nav {
            position: absolute;
            top: 50%;
            font-size: 60px;
            color: white;
            padding: 10px;
            cursor: pointer;
            user-select: none;
        }

        .prev {
            left: 30px;
        }

        .next {
            right: 30px;
        }

        .content h1 {
            position: relative;
            z-index: 2;
            font-size: clamp(32px, 6vw, 58px);
            font-weight: 700;
            letter-spacing: 1px;
        }
    </style>

    <link rel="stylesheet" href="../header/nav.css">
</head>

<body>

    <?php include '../header/topnav.php'; ?>
    <?php include '../header/navigation.php'; ?>

    <!-- HERO -->
    <section class="hero" style="background-image:url('<?= $heroImage ?>')">
        <div class="content">
            <h1>Gallery</h1>
        </div>
    </section>

    <!-- MAIN WRAPPER -->
    <div class="wrapper">

        <h2 class="section-title underline">Visit Our Gallery</h2>

        <!-- RECEPTION -->
        <h2 class="section-title">Reception</h2>
        <div class="img-grid gallery">
            <img src="<?= $receptionImg1 ?>">
            <img src="<?= $receptionImg2 ?>">
            <img src="<?= $receptionImg3 ?>">
            <img src="<?= $receptionImg4 ?>">
            <img src="<?= $receptionImg5 ?>">
        </div>

        <!-- PASSAGE -->
        <h2 class="section-title mt-5">Passage</h2>
        <div class="img-grid gallery">
            <img src="<?= $passageImg1 ?>">
            <img src="<?= $passageImg2 ?>">
            <img src="<?= $passageImg3 ?>">
        </div>

        <!-- DELUXE -->
        <h2 class="section-title mt-5">Deluxe Rooms</h2>
        <div class="img-grid gallery">
            <img src="<?= $deluxeImg1 ?>">
            <img src="<?= $deluxeImg2 ?>">
            <img src="<?= $deluxeImg3 ?>">
            <img src="<?= $deluxeImg4 ?>">
            <img src="<?= $deluxeImg5 ?>">
        </div>

        <!-- SUPER DELUXE -->
        <h2 class="section-title mt-5">Super Deluxe Rooms</h2>
        <div class="img-grid gallery">
            <img src="<?= $superDeluxeImg1 ?>">
            <img src="<?= $superDeluxeImg2 ?>">
            <img src="<?= $superDeluxeImg3 ?>">
            <img src="<?= $superDeluxeImg4 ?>">
            <img src="<?= $superDeluxeImg5 ?>">
            <img src="<?= $superDeluxeImg6 ?>">
        </div>

        <!-- VIDEO -->
        <div class="video-container">
            <h2 class="section-title">Watch Video</h2>
            <video autoplay muted loop playsinline>
                <source src="HotelIntro.mp4" type="video/mp4">
            </video>
        </div>

    </div>

    <?php include '../Footer/footer.php'; ?>

    <!-- LIGHTBOX POPUP -->
    <div id="lightbox" class="lightbox">
        <span class="close-btn">&times;</span>
        <img id="lightbox-img">
        <div class="nav prev">&#10094;</div>
        <div class="nav next">&#10095;</div>
    </div>

    <!-- LIGHTBOX SCRIPT -->
    <script>
        const images = document.querySelectorAll(".gallery img");
        const lightbox = document.getElementById("lightbox");
        const lightboxImg = document.getElementById("lightbox-img");
        const closeBtn = document.querySelector(".close-btn");
        const nextBtn = document.querySelector(".next");
        const prevBtn = document.querySelector(".prev");

        let index = 0;

        function showImage(i) {
            index = i;
            lightbox.style.display = "flex";
            lightboxImg.src = images[i].src;
        }

        images.forEach((img, i) => {
            img.addEventListener("click", () => showImage(i));
        });

        closeBtn.addEventListener("click", () => {
            lightbox.style.display = "none";
        });

        nextBtn.addEventListener("click", () => {
            index = (index + 1) % images.length;
            showImage(index);
        });

        prevBtn.addEventListener("click", () => {
            index = (index - 1 + images.length) % images.length;
            showImage(index);
        });

        lightbox.addEventListener("click", (e) => {
            if (e.target === lightbox) lightbox.style.display = "none";
        });
    </script>

</body>

</html>