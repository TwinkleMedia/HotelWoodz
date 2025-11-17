<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MainBanner</title>

    <style>
        .carousel-inner {
            height: 700px;
            position: relative;
        }

        .carousel-item img {
            height: 100%;
            width: 100%;
            object-fit: fill;
            background-color: #F5F5DC;
        }

        /* Overlay bg */
        .carousel-inner::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.35);
            z-index: 2;
        }

        /* Booking Box */
        .booking-box {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 90%;
            max-width: 900px;
            background: rgba(255, 255, 255, 0.55);
            padding: 30px 40px;
            border-radius: 8px;
            backdrop-filter: blur(4px);
            z-index: 3;
        }

        .booking-grid {
            display: flex;
            justify-content: space-between;
            gap: 25px;
            flex-wrap: wrap;
        }

        .booking-item {
            flex: 1;
            min-width: 250px;
        }

        .booking-item label {
            display: block;
            font-size: 20px;
            color: #fff;
            font-weight: bold;
            margin-bottom: 8px;
        }

        .booking-item select {
            width: 100%;
            padding: 12px;
            border-radius: 5px;
            border: none;
            font-size: 15px;
        }

        .book-btn {
            background: #d4a017;
            color: white;
            border: none;
            padding: 14px 40px;
            font-size: 18px;
            font-weight: bold;
            border-radius: 6px;
            cursor: pointer;
            display: block;
            margin: 25px auto 0;
        }

        select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background: #ffffff url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black"><polygon points="0,0 16,0 8,8"/></svg>') no-repeat right 12px center;
            background-size: 14px;
            padding-right: 40px;
            border-radius: 6px;
            border: 1px solid #ccc;
            height: 45px;
            font-size: 15px;
        }


        @media (max-width: 768px) {
            .carousel-inner {
                height: 300px;
            }

            .booking-box {
                padding: 20px;
            }

            .booking-item label {
                font-size: 10px;
            }

            .book-btn {
                width: 100%;
            }

            .booking-item select {
                padding: 10px;
                font-size: 10px;
            }

            select {
                height: 34px;
                font-size: 10px;
            }

            .booking-grid {
                gap: 10px;
            }

            .book-btn {
                padding: 5px 40px;
                margin: 15px auto 0;
            }
        }
    </style>
</head>

<body>

    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

            <div class="carousel-item active">
                <img src="Banner/b2.png" class="d-block w-100" alt="banner2">
            </div>

            <div class="carousel-item">
                <img src="Banner/b3.jpg" class="d-block w-100" alt="banner3">
            </div>

            <div class="carousel-item">
                <img src="Banner/b5.jpg" class="d-block w-100" alt="banner5">
            </div>

            <div class="carousel-item">
                <img src="Banner/b4.jpg" class="d-block w-100" alt="banner4">
            </div>

            <div class="carousel-item">
                <img src="Banner/b7.jpg" class="d-block w-100" alt="banner7">
            </div>

            <div class="carousel-item">
                <img src="Banner/b8.jpg" class="d-block w-100" alt="banner8">
            </div>

            <!-- Booking Form Over Carousel -->
            <div class="booking-box">
                <div class="booking-grid">

                    <div class="booking-item">
                        <label>Destination</label>
                        <select id="destination">
                            <option value="Amritsar">Amritsar</option>
                        </select>

                    </div>

                    <div class="booking-item">
                        <label>Hotel/Resort</label>
                        <select id="hotel">
                            <option value="The Hotel Woodz, Amritsar">The Hotel Woodz, Amritsar</option>
                        </select>
                    </div>
                </div>

                <button class="book-btn" onclick="sendToWhatsApp()">Book Now</button>
            </div>

        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <script>
        function sendToWhatsApp() {
            let destination = document.getElementById("destination").value;
            let hotel = document.getElementById("hotel").value;

            let msg = `Booking Inquiry:%0A%0ADestination: ${destination}%0AHotel/Resort: ${hotel}`;
            let phone = "919914145491"; // change number

            window.open(`https://wa.me/${phone}?text=${msg}`, "_blank");
        }
    </script>
</body>

</html>