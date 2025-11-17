<section class="about-section">
    <div class="about-container">
        <h2>Hospitality from the Heart of Punjab</h2>
        <p class="intro">
            Welcome to The Woodz Hotel, Amritsar — where comfort meets elegance. Located in the heart of the city,
            we offer a perfect blend of modern luxury and heartfelt hospitality, ideal for both leisure and business
            travelers.
        </p>
        <p class="details">
            Relax in our spacious rooms, enjoy attentive service, and experience personalized care that makes every stay
            unforgettable.
            Just minutes away from the Golden Temple and Jallianwala Bagh, The Woodz Hotel is your perfect base to
            explore Amritsar’s
            rich heritage — or simply unwind in style.
        </p>

        <div class="image-grid">
            <div class="circle">
                <img src="Banner/b1.webp" alt="Hotel Woodz">
            </div>
            <div class="circle">
                <img src="Banner/b6.jpg" alt="Golden Temple">
            </div>
            <div class="circle">
                <img src="Banner/sightSeeing.jpg" alt="Durgiana Temple">
            </div>
            <div class="circle">
                <img src="Banner/sightSeeing2.jpg" alt="Jallianwala Bagh">
            </div>

        </div>
    </div>
</section>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    .about-section {
        background-color: #F5F5DC;
        padding: 30px 20px;
        text-align: center;
    }

    .about-container {
        max-width: 1100px;
        margin: 0 auto;
    }

    .about-container h2 {
        font-size: 2rem;
        color: #222;
        font-weight: 700;
        margin-bottom: 20px;
    }

    .about-container p {
        color: #444;
        line-height: 1.7;
        margin: 0 auto 5px;
        max-width: 900px;
    }

    .image-grid {
        margin-top: 50px;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 40px;
        justify-items: center;
    }

    .circle {
        width: 200px;
        height: 200px;
        border-radius: 50%;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .circle:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }

    .circle img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    @media (max-width: 767px) {
        .about-section {
            padding: 60px 15px;
        }

        .circle {
            width: 150px;
            height: 150px;
        }

        .about-container h2 {
            font-size: 1.5rem;
        }

        .image-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .about-container p {
            font-size: 13px;
            text-align: justify;
        }
    }
</style>