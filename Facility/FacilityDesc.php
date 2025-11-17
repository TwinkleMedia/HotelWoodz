<section class="facilitydesc-section">
    <div class="facilitydesc-container">

        <h2 class="facilitydesc-title">Hotel Information</h2>

        <div class="facilitydesc-grid">

            <!-- Hotel Facilities -->
            <div class="facilitydesc-card">
                  <h3>Leisure Activities</h3>
            <ul>
                <li>Visit the sacred Golden Temple</li>
                <li>Historical tour of Jallianwala Bagh, Wagah Border, Maharaja Ranjit Singh Panorama</li>
                <li>Visit Durgiana Temple & Mata Ka Mandir</li>
                <li>Buy famous Phulkari suits & dupattas from Hall Bazaar</li>
            </ul>
            </div>

            <!-- Nearby Locations -->
            <div class="facilitydesc-card">
                <h3>Nearby Locations</h3>
                <ul>
                    <li>14.0 km from Sri Guru Ram Das Jee Airport</li>
                    <li>3.0 km from Amritsar Railway Station</li>
                    <li>1.7 km from Interstate Bus Terminal</li>
                    <li>500 meter from Golden Temple</li>
                    <li>500 meter from Jallianwala Bagh</li>
                    <li>2.3 km from Gobind Garh Fort</li>
                </ul>
            </div>

            <!-- TripAdvisor Mentions -->
            <div class="facilitydesc-card">
                <h3>Popular Mentions on TripAdvisor</h3>
                <ul>
                    <li>Clean & spacious rooms</li>
                    <li>Modern amenities</li>
                    <li>Prompt services</li>
                    <li>Nice property</li>
                    <li>Value for money</li>
                </ul>
            </div>

        </div>

    </div>
</section>
<style>
    /* Section wrapper */
    .facilitydesc-section {
        padding: 30px 0;
        background: #F5F5DC;
    }

    /* Centered container just like main theme */
    .facilitydesc-container {
        width: 90%;
        max-width: 1056px;
        margin: auto;
    }

    /* Title styling */
    .facilitydesc-title {
        font-weight: 600;
        text-align: center;
        font-size: 2rem;
        margin-bottom: 40px;
        color: #1c1c1c;
    }


    /* Responsive grid */
    .facilitydesc-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 25px;
    }

    /* Cards */
    .facilitydesc-card {
        background: #fff;
        padding: 25px;
        border-radius: 12px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    /* Leisure full width */
    .wide-card {
        margin-top: 30px;
        width: 341px;
    }

    /* Title in card */
    .facilitydesc-card h3 {
        font-size: 18px;
        margin-bottom: 12px;
        border-bottom: 2px solid #d4a017;
        display: inline-block;
        padding-bottom: 4px;
    }

    /* List styling */
    .facilitydesc-card ul {
        margin: 0;
        padding-left: 15px;
    }

    .facilitydesc-card ul li {
        line-height: 1.6em;
        margin-bottom: 6px;
    }

    /* RESPONSIVE FIXES */
    @media (max-width: 768px) {
        .facilitydesc-title {
            font-size: 24px;
        }

        .facilitydesc-card {
            padding: 20px;
        }
    }

    @media (max-width: 480px) {
        .facilitydesc-section {
            padding: 40px 0;
        }

        .wide-card {
            width: 356px;
        }
    }
</style>