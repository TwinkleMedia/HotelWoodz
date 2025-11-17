<?php
$siteName = 'The Woodz Hotel';
$heroImage = '../Banner/sightSeeing3.jpg';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($siteName) ?> — Contact Us</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        :root {
            --gold: #c89d29;
            --brown: #5c4632;
            --bg-light: #f7f3ee;
            --shadow: 0 10px 25px rgba(0, 0, 0, 0.10);
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: var(--bg-light);
        }

        /* HERO */
        .hero {
            height: 55vh;
            min-height: 320px;
            background: url('<?= $heroImage ?>') center/cover no-repeat;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
        }

        .hero::after {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.55);
        }

        .hero h1 {
            position: relative;
            z-index: 2;
            font-size: clamp(32px, 6vw, 58px);
            font-weight: 700;
            letter-spacing: 1px;
        }

        /* Section Title */
        .section-title {
            text-align: center;
            margin: 50px 0 10px;
            font-size: 36px;
            font-weight: 700;
            color: #1c1c1c;
            position: relative;
        }

        .section-title::after {
            content: "";
            width: 120px;
            height: 4px;
            background: var(--gold);
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 10px;
        }

        /* CONTACT GRID */
        .contact-wrapper {
            max-width: 1200px;
            margin: auto;
            padding: 40px 20px 80px;
        }

        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1.3fr;
            gap: 35px;
            margin-top: 40px;
        }

        /* CARDS (wooden theme) */
        .contact-card,
        .map-card {
            background: #fff;
            border-radius: 14px;
            padding: 30px;
            box-shadow: var(--shadow);
            border-left: 6px solid var(--gold);
        }

        .contact-card h3,
        .map-card h3 {
            font-size: 26px;
            font-weight: 600;
            margin-bottom: 18px;
            color: #1c1c1c;
        }

        .contact-card p {
            font-size: 16px;
            line-height: 1.7;
            color: #444;
        }

        /* MAP */
        .map-frame {
            width: 100%;
            height: 320px;
            border-radius: 12px;
            border: none;
            margin-bottom: 15px;
        }

        /* BUTTON */
        .direction-btn {
            display: inline-block;
            background-color: var(--gold) !important;
            color: #fff;
            padding: 10px 22px;
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            transition: 0.3s ease;
        }

        .direction-btn:hover {
            background-color: #dda114ff !important;
        }
        .contact-list
        {
            padding-left: 0;
            color: #444;
        }
        .contact-list li{
            list-style: none;
        }

        /* RESPONSIVE */
        @media(max-width: 900px) {
            .contact-grid {
                grid-template-columns: 1fr;
            }

            .map-frame {
                height: 260px;
            }
        }
    </style>
</head>

<body>

    <?php include '../header/topnav.php'; ?>
    <?php include '../header/navigation.php'; ?>

    <!-- HERO -->
    <section class="hero">
        <h1>Contact Us</h1>
    </section>

    <!-- CONTACT SECTION -->
    <section class="contact-wrapper">

        <h2 class="section-title">The Woodz Hotel</h2>

        <div class="contact-grid">

            <!-- LEFT CARD -->
            <div class="contact-card">
                <h3>Reach Us</h3>

                <p>
                    Golden Temple Rd, near BK Sr. Sec. School,<br>
                    Inside Sheran Wala Gate, Town Hall,<br>
                    Katra Ahluwalia, Amritsar Cantt.,<br>
                    Punjab 143001
                </p>
                <ul class="contact-list">
                    <li>➤ 14.0 km from Sri Guru Ram Das Jee Airport</li>
                    <li> ➤ 3.0 km from Amritsar Railway Station</li>
                    <li> ➤ 1.7 km from Interstate Bus Terminal</li>
                    <li> ➤ 500 meter from Golden Temple</li>
                    <li> ➤ 500 meter from Jallianwala Bagh</li>
                    <li> ➤ 2.3 km from Gobind Garh Fort</li>

                </ul>
                <p><strong>📞 Phone:</strong> +91 99141 45491</p>
                <p><strong>✉ Email:</strong> paramdeep525.is@gmail.com</p>

            </div>

            <!-- RIGHT MAP CARD -->
            <div class="map-card">
                <h3>Find Us on Map</h3>

                <iframe class="map-frame"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3397.331286390126!2d74.8827723!3d31.6247786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39197d210726ba0b%3A0x35efc9ba138f773a!2sHotel%20woodz!5e0!3m2!1sen!2sin!4v1763117823593!5m2!1sen!2sin"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>


                <a class="direction-btn" target="_blank"
                    href="https://www.google.com/maps/dir/?api=1&destination=The+Hotel+Woodz+Amritsar+Punjab+Near+Golden+Temple">
                    ➤ Get Directions
                </a>

            </div>

        </div>

    </section>

    <?php include '../Footer/footer.php'; ?>

</body>

</html>