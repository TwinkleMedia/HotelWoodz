<?php
$siteName = 'The Woodz Hotel';
$roomImage = $_GET['img'] ?? '/Hotel Woodz/default-room.jpg';
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Deluxe Room – <?= htmlspecialchars($siteName) ?></title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- PAGE CSS -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #faf7e1;
        }

        .room-wrapper {
            max-width: 1200px;
            margin: auto;
            padding: 40px 20px;
        }

        /* Room Main Image */
        .room-image img {
            width: 100%;
            border-radius: 10px;
            height: 500px;
        }

        /* Title Row */
        .room-title {
            display: flex;
            justify-content: space-between;
            margin-top: 25px;
            font-size: 26px;
            font-weight: 600;
            color: #d9b350;
        }

        .sub-info {
            font-size: 20px;
            margin-top: 10px;
            color: #d9b350;
            font-weight: 500;
        }

        /* Section Titles */
        h2 {
            font-size: 28px;
            font-weight: 700;
            margin-top: 40px;
            margin-bottom: 20px;
        }

        /* Amenity Box */
        .tag {
            background: #d9b350;
            color: white;
            font-weight: 600;
            padding: 10px 22px;
            border-radius: 6px;
            display: inline-block;
            margin: 8px;
        }

        .rate-table {
            width: 100%;
            background: #faefcb;
            border-radius: 6px;
            overflow: hidden;
            border: 1px solid #e2d39d;
            margin-top: 20px;
        }

        /* Header */
        .rate-header {
            background: #d4af37;
            color: white;
            font-weight: 600;
            padding: 12px 20px;
            display: grid;
            grid-template-columns: 1fr 200px;
            font-size: 20px;
        }

        /* Row */
        .rate-row {
            display: grid;
            grid-template-columns: 1fr 200px;
            padding: 20px;
            border-top: 1px solid #efdca6;
        }

        .rate-left h4 {
            font-size: 22px;
            margin-bottom: 8px;
            font-weight: 600;
            color: #6b5016;
        }

        .rate-left p {
            margin: 0;
            line-height: 1.4;
            color: #5a4b23;
            font-weight: 500;
        }

        .rate-right {
            text-align: right;
        }

        .rate-right small {
            font-weight: 600;
            color: #5a4b23;
        }

        .old-price {
            text-decoration: line-through;
            font-size: 14px;
            color: #333;
        }

        .rate-price {
            font-size: 27px;
            color: #6b5016;
            font-weight: 700;
            margin-top: 5px;
        }

        .tax-line {
            font-size: 14px;
            margin-top: -4px;
            color: #444;
        }

        .book-btn {
            background: linear-gradient(135deg, #d4af37, #6b5016);
            color: white;
            border: none;
            padding: 10px 28px;
            border-radius: 8px;
            margin-top: 10px;
            font-weight: 600;
            font-size: 15px;
            cursor: pointer;
            transition: 0.2s;
        }

        .book-btn:hover {
            opacity: 0.9;
            transform: translateY(-1px);
        }

        @media (max-width: 992px) {

            .rate-header,
            .rate-row {
                grid-template-columns: 1fr 160px;
            }

            .rate-price {
                font-size: 24px;
            }

            .book-btn {
                padding: 8px 24px;
            }
        }

        /* Mobile (<= 768px) */
        @media (max-width: 768px) {

            .rate-header {
                grid-template-columns: 1fr 1fr;
                font-size: 18px;
                padding: 12px;
                text-align: center;
            }

            .rate-row {
                grid-template-columns: 1fr;
                text-align: left;
                padding: 15px;
                row-gap: 15px;
            }

            .rate-right {
                text-align: left;
            }

            .rate-price {
                font-size: 22px;
            }

            .book-btn {
                width: 100%;
                padding: 10px;
                font-size: 16px;
            }
        }

        /* Small Mobile (<= 480px) */
        @media (max-width: 480px) {

            .rate-header {
                font-size: 16px;
            }

            .rate-left h4 {
                font-size: 20px;
            }

            .rate-price {
                font-size: 20px;
            }

            .book-btn {
                padding: 10px;
                font-size: 15px;
            }
        }
    </style>

    <!-- Load NAV CSS last -->
    <link rel="stylesheet" href="../header/nav.css">
</head>

<body>

    <?php include '../header/topnav.php'; ?>
    <?php include '../header/navigation.php'; ?>

    <!-- CONTENT -->
    <div class="room-wrapper">

        <!-- Room Image -->
        <div class="room-image">
            <img src="<?= $roomImage ?>" alt="Room Image" />
        </div>

        <!-- Title Row -->
        <div class="room-title">
            <div>2637 sq.ft (245 sq.mt)</div>
            <div>City View</div>
        </div>

        <div class="sub-info">
            <span>1 King Bed</span> &nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;
            <span>1 Bathroom</span>
        </div>

        <!-- ROOM AMENITIES -->
        <h2>Room Amenities</h2>

        <h5>Popular with Guests</h5>
        <div>
            <span class="tag">Housekeeping</span>
            <span class="tag">Bathroom</span>
            <span class="tag">Room Service</span>
            <span class="tag">Wi-Fi</span>
            <span class="tag">Mineral Water</span>
            <span class="tag">Air Conditioning</span>
        </div>

        <h5 class="mt-4">Room Features</h5>
        <div>
            <span class="tag">Closet</span>
            <span class="tag">Chair</span>
            <span class="tag">Charging Points</span>
            <span class="tag">Telephone</span>
        </div>

        <h5 class="mt-4">In-Room Amenities</h5>
        <div>
            <span class="tag">Kettle</span>
            <span class="tag">Blanket</span>
            <span class="tag">Cupboards With Locks</span>
            <span class="tag">TV</span>
        </div>

        <h2>Bathroom</h2>
        <div>
            <span class="tag">Geyser</span>
            <span class="tag">Bidet</span>
            <span class="tag">Jetspray</span>
            <span class="tag">Towels</span>
            <span class="tag">Western Toilet Seat</span>
            <span class="tag">Dental Kit</span>
        </div>

        <!-- RATE PLANS -->
        <h2>Rate Plans</h2>

        <div class="rate-table">

            <!-- HEADER -->
            <div class="rate-header">
                <div>Options</div>
                <div>Ratings</div>
            </div>

            <!-- ROOM ONLY -->
            <div class="rate-row">
                <div class="rate-left">
                    <h4>Room Only</h4>
                    <p>
                        Complimentary INR 100 Hotel Credit<br>
                        10% off on Sightseeing Tour<br>
                        Non-Refundable
                    </p>
                </div>

                <div class="rate-right">
                    <small>Starting At</small><br>
                    <div class="rate-price">₹ 1,535</div>
                    <div class="tax-line">+₹ 181 taxes & fees</div>
                    <button class="book-btn">
                        <a href="https://wa.me/919914145491?text=Hi%20I%20want%20to%20book%20a%20room"
                            class="room-book-btn" target="_blank"  style="text-decoration:none;color:white">Book Now</a></button>
                </div>
            </div>

            <!-- ROOM WITH BREAKFAST -->
            <div class="rate-row">
                <div class="rate-left">
                    <h4>Room With Breakfast</h4>
                    <p>
                        Complimentary INR 100 Hotel Credit<br>
                        10% off on Sightseeing Tour<br>
                        Non-Refundable
                    </p>
                </div>

                <div class="rate-right">
                    <small>Starting At</small><br>
                    <div class="rate-price">₹ 2,073</div>
                    <div class="tax-line">+₹ 243 taxes & fees</div>
                    <button class="book-btn"><a href="https://wa.me/919914145491?text=Hi%20I%20want%20to%20book%20a%20room"
                            class="room-book-btn" target="_blank"  style="text-decoration:none;color:white">Book Now</a></button></button>
                </div>
            </div>

        </div>

    </div>

    <?php include '../Footer/footer.php'; ?>

</body>

</html>