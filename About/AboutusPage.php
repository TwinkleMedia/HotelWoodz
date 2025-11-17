<?php
$siteName = 'The Woodz Hotel';

/* Image paths – match your folder structure */
$heroImage = '../Banner/b6.jpg';            // Change to your real banner
$receptionImage = '../Banner/b3.png';
$ourValues = '../Banner/b5.jpg';
$missionImage = '../Banner/b8.jpg';
$valuesImage = '../Banner/b9.webp';
$aminities='../Banner/b10.jpg';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($siteName) ?> — About Us</title>

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

        /* HERO SECTION */
        .hero {
            position: relative;
            height: 55vh;
            min-height: 320px;
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
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
            z-index: 2;
            padding: 20px;
        }

        .hero h1 {
            font-size:clamp(32px, 6vw, 60px);
            font-weight: 700;
        }

        /* MAIN CONTENT WRAPPER WITHOUT OVERRIDING BOOTSTRAP */
        .about-wrapper {
            max-width: var(--max-width);
            margin: auto;
            padding: 50px 20px;
        }

        .intro-grid {
            display: grid;
            grid-template-columns: 1fr 420px;
            gap: 30px;
        }

        .card-box {
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: var(--card-shadow);
        }

        .intro-grid img {
            width: 100%;
            height: 340px;
            object-fit: cover;
            border-radius: 12px;
        }

        /* FEATURES SECTION */
        .features {
            margin-top: 40px;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 25px;
        }

        .feature {
            display: flex;
            gap: 18px;
        }

        .feature img {
            width: 160px;
            height: 120px;
            object-fit: cover;
            border-radius: 10px;
        }

        .feature p {
            color: var(--muted);
            line-height: 1.6;
        }

        /* BUTTON */
        .btn-gold {
            background: var(--accent);
            color: #fff;
            padding: 10px 18px;
            border-radius: 8px;
            font-weight: 600;
            text-decoration: none;
            margin-top: 5px;
        }

        .content-p {
            font-size: 22px;
        }

        /* RESPONSIVE */
        @media (max-width: 900px) {
            .intro-grid {
                grid-template-columns: 1fr;
            }

            .intro-grid img {
                height: 300px;
            }

            .features {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 500px) {
            .feature img {
                display: none;
            }
        }
    </style>

    <!-- Load NAV CSS last so it overrides everything -->
    <link rel="stylesheet" href="../header/nav.css">
</head>

<body>

    <?php include '../header/topnav.php'; ?>
    <?php include '../header/navigation.php'; ?>

    <!-- HERO -->
    <section class="hero" style="background-image:url('<?= $heroImage ?>')">
        <div class="content">
            <h1>About Us</h1>
            <p class="content-p">Experience luxury, comfort, and warmth at <?= htmlspecialchars($siteName) ?>.</p>
        </div>
    </section>

    <!-- MAIN CONTENT -->
    <main class="about-wrapper">

        <!-- INTRO SECTION -->
        <div class="intro-grid">
            <div>
                <div class="card-box">
                    <h2>Welcome to <?= htmlspecialchars($siteName) ?></h2>
                    <p class="text-muted">
                        We offer modern comforts,
                        elegant interiors, and warm Punjabi hospitality to make every stay memorable. Our spacious,
                        well-designed rooms provide the perfect place to relax after exploring the city.
                        Located just minutes from the Golden Temple and Jallianwala Bagh, our hotel offers unmatched
                        convenience for sightseeing and business travel.
                    </p>
                    <p class="text-muted">
                        Spacious rooms, premium amenities, and friendly service ensure an unforgettable stay.
                    </p>
                    <a href="#contact" class="btn-gold">Contact Us</a>
                </div>
            </div>

            <div>
                <div class="card-box p-0">
                    <img src="<?= $receptionImage ?>" alt="Hotel Reception">
                </div>
            </div>
        </div>

        <!-- FEATURES -->
        <section class="features">

            <div class="feature card-box">
                <img src="<?= $ourValues ?>" alt="Values">
                <div>
                    <h3>Our Values</h3>
                    <p>We embody warmth, service quality, and a welcoming atmosphere inspired by Punjabi culture.</p>
                </div>
            </div>

            <div class="feature card-box">
                <img src="<?= $missionImage ?>" alt="Mission">
                <div>
                    <h3>Our Mission</h3>
                    <p>To create meaningful, memorable stays through comfort, safety, and exceptional hospitality.</p>
                </div>
            </div>

            <div class="feature card-box">
                <img src="<?= $valuesImage ?>" alt="Culture">
                <div>
                    <h3>Location & Culture</h3>
                    <p>Situated near iconic landmarks, we celebrate Amritsar’s culture and heritage.</p>
                </div>
            </div>

            <div class="feature card-box">
                <img src="<?= $aminities ?>" alt="Amenities">
                <div>
                    <h3>Comfort & Amenities</h3>
                    <p>Enjoy spacious rooms, premium facilities, and personalized service during your stay.</p>
                </div>
            </div>

        </section>
    </main>

    <?php include '../Footer/footer.php'; ?>

</body>

</html>