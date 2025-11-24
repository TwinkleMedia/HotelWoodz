<footer class="footer">
    <div class="footer-container">
        <div class="footer-logo">
            <img src="/logo.png" alt="logo">
            <h4>HOTEL WOODZ</h4>
        </div>

        <div class="footer-section">
            <h5>Address</h5>
            <p>
                Golden Temple Rd, near BK Sr. Sec. School, inside Sheran Wala Gate, Town Hall,<br>
                Katra Ahluwalia, Amritsar, Amritsar Cantt., Punjab 143001
            </p>
        </div>

        <div class="footer-section">
            <h5>Feedback</h5>
            <p>
                Please send us your ideas, bug reports, suggestions! Any feedback would be appreciated.
            </p>
        </div>

        <div class="footer-section">
            <h5>Contact</h5>
            <p><i class="fa-solid fa-phone"></i> +91 99141 45491</p>
            <p><i class="fa-solid fa-envelope"></i> paramdeep525.is@gmail.com</p>
        </div>
    </div>

</footer>
<div class="footer-bottom">
    Designed by <a href="https://www.twinklemediahub.com/" target="_blank" rel="noopener noreferrer"><span>Twinkle Media
            Hub</span></a>
</div>
<?php include __DIR__ . '/../Whatsapp.php'; ?>
<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/a2e0e6a4ef.js" crossorigin="anonymous"></script>
<style>
    .footer {
        background-color: #1e1e1e;
        color: #fff;
        font-family: 'Poppins', sans-serif;
        padding: 65px 20px;
    }

    .footer-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 30px;
        align-items: start;
        text-align: left;
        max-width: 1399px;
        margin: auto;
    }

    .footer-logo {
        text-align: center;
    }

    .footer-logo img {
        width: 120px;
        margin-bottom: 10px;
    }

    .footer-logo h4 {
        font-weight: 700;
        letter-spacing: 1px;
        margin: 0;
    }

    .footer-section h5 {
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 10px;
    }

    .footer-section p {
        font-size: 14px;
        line-height: 1.6;
        color: #ccc;
    }

    .footer-section i {
        margin-right: 8px;
        color: #d4a017;
    }

    .footer-bottom {
        background-color: #414141;
        text-align: center;
        padding: 10px;
        font-size: 14px;
        color: #fff;
    }

    .footer-bottom span {
        color: #d4a017;
        font-weight: 600;
    }

    .footer-bottom a {
        text-decoration: none;
    }
@media (max-width: 1024px) {
    .footer-container {
        grid-template-columns: repeat(auto-fit, minmax(205px, 1fr));
        gap: 25px;
    }
}

    /* Responsive */
    @media (max-width: 768px) {
    .footer {
        padding: 50px 20px;
    }

    .footer-container {
        text-align: center;
        grid-template-columns: 1fr;
        gap: 35px;
    }

    .footer-section p {
        text-align: center;
    }

    .footer-logo img {
        width: 100px;
    }
}
    @media (max-width: 934px) {
    .footer {
        padding: 50px 20px;
    }

    .footer-container {
        text-align: center;
        grid-template-columns: 1fr;
        gap: 35px;
    }

    .footer-section p {
        text-align: center;
    }

    .footer-logo img {
        width: 100px;
    }
}
@media (max-width: 480px) {
    .footer {
        padding: 45px 15px;
    }

    .footer-logo img {
        width: 90px;
    }

    .footer-section h5 {
        font-size: 16px;
    }

    .footer-section p {
        font-size: 13px;
        line-height: 1.5;
    }

    .footer-bottom {
        font-size: 13px;
        padding: 12px;
    }
}
</style>