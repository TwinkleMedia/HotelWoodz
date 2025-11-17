<?php
$reviews = [
    [
        "name" => "Sonia Gill",
        "img" => "userIcon.png",
        "review" => "I recently stayed at Hotel Woodz Amritsar, and I must say it was a fantastic experience. From the moment I arrived, the staff made me feel welcomed with their warm hospitality and professionalism. The check-in process was smooth and quick.
The room was spacious, clean, and very comfortable. Everything from the bedding to the bathroom amenities was well thought out and neatly maintained. Housekeeping was prompt and ensured the room stayed fresh and tidy throughout my stay."
    ],
    [
        "name" => "aashi gupta",
        "img" => "userIcon.png",
        "review" => "Our family had a lovely time at Hotel Woodz. The rooms are spacious enough to accommodate us comfortably, and the staff was very accommodating with our requests for extra pillows and a crib. The location is safe and has easy access to family-friendly attractions. A wonderful and stress-free base for our vacation."
    ],
    [
        "name" => "Shairley Banerjee",
        "img" => "userIcon.png",
        "review" => "It’s a budget friendly stay but in the prime location. Golden Temple is just few steps away. Room was quite good with all the standard amenities. Owner is very much polite and staffs are also behaved. Overall it’s a good stay."
    ],
    [
        "name" => "Deep Gill",
        "img" => "userIcon.png",
        "review" => "Very good behaviour of staff , well maintained rooms ...."
    ]
]
    ?>

<section class="review-section">
    <div class="review-overlay"></div>
    <div class="container">
        <h2 class="section-title">Reviews</h2>
        <div class="review-top-rating">
            <div class="rating-box">
                <div class="rating-circle">4.3</div>
                <p>Rooms</p>
            </div>
            <div class="rating-box">
                <div class="rating-circle">4.0</div>
                <p>Location</p>
            </div>
            <div class="rating-box">
                <div class="rating-circle">4.0</div>
                <p>Services</p>
            </div>
            <div class="stars"></div>
            <div class="review-slider">
                <?php foreach ($reviews as $r): ?>
                    <div class="review-card">
                        <div class="review-user">
                            <img src="<?= $r['img'] ?>" alt="User-Icon">
                            <div>
                                <h4 class="name"><?= htmlspecialchars($r['name']) ?></h4>
                            </div>
                            <div class="review-stars">
                                ★★★★★
                            </div>
                        </div>
                        <p><?= htmlspecialchars(substr($r['review'], 0, 200)) ?>...</p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <button class="review-prev">&#10094;</button>
        <button class="review-next">&#10095;</button>
    </div>

</section>
<style>
    .review-section {
        padding: 60px 0;
        background: #F5F5DC;
        position: relative;
    }

    .review-overlay {
        position: absolute;
        background-color: #d9b350;
        top: 60%;
        left: 0;
        width: 100%;
        height: 40%;
    }

    .section-title {
        font-size: 28px;
        font-weight: 700;
        margin-bottom: 20px;
    }

    /* Top ratings */
    .review-top-rating {
        display: flex;
        justify-content: center;
        /* gap: 25px; */
        flex-wrap: wrap;
        margin: 30px auto;
    }

    .rating-box {
        text-align: center;
        margin: 20px;
    }

    .rating-circle {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background: #d4a017;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        font-size: 22px;
        color: #F5F5DC;
        margin-bottom: 10px;
    }

    /* Slider */
    .review-slider {
        display: flex;
        gap: 25px;
        overflow-x: auto;
        scroll-behavior: smooth;
        padding-bottom: 10px;
    }

    .review-slider::-webkit-scrollbar {
        height: 6px;
    }

    .review-slider::-webkit-scrollbar-thumb {
        background: #ccc;
        border-radius: 10px;
    }

    /* Review Card */
    .review-card {
        min-width: 400px;
        background: white;
        padding: 20px;
        border-radius: 18px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        z-index: 2;
    }

    .review-user {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 12px;
        margin-bottom: 15px;
    }

    .review-stars {
        color: #d4a017;
    }

    .review-user img {
        width: 50px;
        height: 50px;
        border-radius: 50%;
    }

    .review-card p {
        font-size: 15px;
        line-height: 1.5;
        color: #6e6a6a;
    }

    .name {
        color: #d4a017;
    }

    .review-prev,
    .review-next {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        border: none;
        font-size: 24px;
        padding: 8px 18px;
        border-radius: 50%;
        cursor: pointer;
        z-index: 10;
        color: #d4a017;
        background: none;
    }

    .review-prev {
        left: 10px;
    }

    .review-next {
        right: 10px;
    }

    .review-prev:hover,
    .review-next:hover {
        background: #f7d782ff;
        color: white;
    }

    @media (max-width: 576px) {
        .rating-circle {
            width: 50px;
            height: 50px;
            font-size: 18px;
        }

        .review-top-rating {
            gap: 0px;
        }

        .review-card {
            min-width: 360px;

        }

        .review-section {
            padding: 0px;
        }
    }
</style>
<script>
    const slider = document.querySelector('.review-slider');
    const btnPrev = document.querySelector('.review-prev');
    const btnNext = document.querySelector('.review-next');

    btnNext.addEventListener('click', () => {
        slider.scrollBy({
            left: 350,
            behavior: 'smooth'
        });
    });

    btnPrev.addEventListener('click', () => {
        slider.scrollBy({
            left: -350,
            behavior: 'smooth'
        });
    });

</script>