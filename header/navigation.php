<link rel="stylesheet" href="header/nav.css">

<nav class="navbar">
    <div class="container">
        <a href="/HOTEL WOODZ/index.php" class="navbar-logo">
            <img src="../logo.png" alt="logo">
        </a>

        <!-- Hamburger Icon -->
        <div class="menu-toggle" id="mobile-menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>

        <!-- Menu Links -->
        <ul class="nav-menu">
            <li><a href="index.php" class="nav-link">Home</a></li>
            <li><a href="./AboutusPage.php" class="nav-link">About Us</a></li>
            <li><a href="/HOTEL WOODZ/Room-Section/RoomsPage.php" class="nav-link">Rooms</a></li>
            <li><a href="/HOTEL WOODZ/Gallery/gallery.php" class="nav-link">Gallery</a></li>
            <li><a href="/HOTEL WOODZ/ContactUs/contact.php" class="nav-link">Contact</a></li>
            <li><a href="tel:+919914145491" class="call-btn">Book Your Stay</a></li>
        </ul>
    </div>
</nav>
<div class="menu-overlay" id="menu-overlay"></div>
<script>
    const menu = document.getElementById('mobile-menu');
    const navMenu = document.querySelector('.nav-menu');
    const overlay = document.getElementById("menu-overlay");

    //  Toggle mobile menu
    menu.addEventListener('click', (e) => {
        e.stopPropagation(); // Prevent immediate close when clicking the hamburger
        menu.classList.toggle('is-active');
        navMenu.classList.toggle('active');
        overlay.classList.toggle('active'); //  show/hide overlay when menu toggles
    });

    //  Close when clicking overlay
    overlay.addEventListener("click", () => {
        menu.classList.remove("is-active");
        navMenu.classList.remove("active");
        overlay.classList.remove("active");
    });

    //  Close when clicking any nav link
    document.querySelectorAll(".nav-link").forEach(link => {
        link.addEventListener("click", () => {
            menu.classList.remove('is-active');
            navMenu.classList.remove("active");
            overlay.classList.remove("active");
        });
    });

    //  Close when clicking outside menu and hamburger
    document.addEventListener("click", (e) => {
        if (!navMenu.contains(e.target) && !menu.contains(e.target)) {
            menu.classList.remove("is-active");
            navMenu.classList.remove("active");
            overlay.classList.remove("active");
        }
    });
</script>
<style>
    /* Banner */
    .contact-banner {
        background: url("banner.jpg") center/cover no-repeat;
        padding: 120px 20px;
        text-align: center;
        color: #fff;
        font-size: 48px;
        font-weight: 700;
    }

    /* Wrapper */
    .contact-wrapper {
        background: #f4f4d7;
        padding: 60px 20px;
    }

    .section-title {
        text-align: center;
        font-size: 36px;
        font-weight: 700;
        margin-bottom: 40px;
    }

    /* Grid */
    .contact-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 30px;
    }

    /* Cards */
    .contact-card,
    .map-card {
        background: #fff;
        padding: 30px;
        border-radius: 14px;
        box-shadow: 0 4px 14px rgba(0, 0, 0, 0.1);
    }

    .contact-card h3,
    .map-card h3 {
        margin-bottom: 20px;
    }

    /* Map */
    .map-frame {
        width: 100%;
        height: 320px;
        border: none;
        border-radius: 10px;
    }

    .direction-btn {
        display: inline-block;
        margin-top: 15px;
        padding: 10px 18px;
        background: #000;
        color: #fff;
        border-radius: 8px;
        text-decoration: none;
        font-size: 16px;
    }

    .direction-btn:hover {
        background: #333;
    }

    /* Footer */
    .footer {
        background: #111;
        color: #eee;
        padding: 50px 20px;
    }

    .footer-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        gap: 30px;
    }

    .footer-logo img {
        width: 110px;
    }

    .footer-credit {
        text-align: center;
        font-size: 14px;
        margin-top: 30px;
        opacity: 0.8;
    }
</style>