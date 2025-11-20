<?php
$siteName = 'The Woodz Hotel';

/* DEMO IMAGE PATHS — Replace with your real files */
$heroImage = '../Banner/sightSeeing2.jpg';
$deluxeImg = '../Banner/b4.jpg';
$superDeluxeImg = '../Banner/b7.jpg';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($siteName) ?> — Rooms</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

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

        /* HERO */
        .hero {
            height: 55vh;
            min-height: 330px;
            background-size: cover;
            background-position: center;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: #fff;
        }

        .hero::after {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.6);
        }

        .hero .content {
            position: relative;
            z-index: 3;
        }

        .hero h1 {
            font-size: clamp(32px, 6vw, 60px);
            font-weight: 700;
        }

        /* MAIN WRAPPER */
        .rooms-wrapper {
            max-width: var(--max-width);
            margin: auto;
            padding: 50px 20px;
        }

        .room-box {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            margin-bottom: 60px;
            align-items: center;
        }

        .room-box img {
            width: 100%;
            height: 360px;
            object-fit: cover;
            border-radius: 12px;
            box-shadow: var(--card-shadow);
        }

        .room-content h2 {
            font-size: 32px;
            font-weight: 700;
        }

        .room-content p {
            color: var(--muted);
            line-height: 1.7;
        }

        .btn-gold {
            background: var(--accent);
            padding: 10px 20px;
            color: #fff;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
        }


        /* RESPONSIVE */
        @media (max-width: 900px) {
            .room-box {
                grid-template-columns: 1fr;
            }
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
            <h1>Rooms We Offer!</h1>
            <p class="mt-2 fs-5">Experience comfort, warmth, and a relaxing stay. Choose the perfect room for you.</p>
        </div>
    </section>

    <!-- MAIN -->
    <div class="rooms-wrapper">

        <!-- DELUXE ROOM -->
        <div class="room-box">
            <img src="<?= $deluxeImg ?>" alt="Deluxe Room">
            <div class="room-content">
                <h2>DELUXE ROOM</h2>
                <p>
                    Our Deluxe Room offers the perfect mix of comfort and style. Featuring soft bedding,
                    modern interiors, and premium amenities, it ensures a peaceful stay for couples, families,
                    or solo travelers.
                </p>
                <a href="https://wa.me/919914145491?text=Hi%20I%20want%20to%20book%20a%20room" class="btn-gold"
                    target="_blank">
                    Book Now
                </a>
            </div>
        </div>

        <!-- SUPER DELUXE -->
        <div class="room-box">
            <div class="room-content">
                <h2>SUPER DELUXE</h2>
                <p>
                    The Super Deluxe Triple Room is spacious and ideal for groups or families who want extra comfort.
                    Enjoy modern furnishings, enhanced amenities, and a cozy environment perfect for relaxation.
                </p>
                <a href="https://wa.me/919914145491?text=Hi%20I%20want%20to%20book%20a%20room" class="btn-gold"
                    target="_blank">
                    Book Now
                </a>
            </div>
            <img src="<?= $superDeluxeImg ?>" alt="Super Deluxe Room">
        </div>
        <?php include '/Room-Section/rooms.php' ?>
    </div>

    <?php include '../Footer/footer.php'; ?>

</body>

</html>