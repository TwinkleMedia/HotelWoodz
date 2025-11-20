<link rel="stylesheet" href="/header/nav.css?v=<?php echo time(); ?>">

<nav class="navbar">
    <div class="navbar-container">
        <a href="/index.php" class="navbar-logo">
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
            <li><a href="/index.php" class="nav-link">Home</a></li>
            <li><a href="/About/AboutusPage.php" class="nav-link">About Us</a></li>
            <li><a href="/Room-Section/RoomsPage.php" class="nav-link">Rooms</a></li>
            <li><a href="/Gallery/gallery.php" class="nav-link">Gallery</a></li>
            <li><a href="/ContactUs/contact.php" class="nav-link">Contact</a></li>
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