<?php
// whatsapp.php
// Configure these:
$phone = '+919914145491';                 // WhatsApp phone number (with country code)
$prefillMsg = 'Hi, I want to book a room.'; // Default prefilled message

// Sanitise phone to digits only for wa.me link
$phone_digits = preg_replace('/\D+/', '', $phone);
$encodedMsg = rawurlencode($prefillMsg);
$waUrl = "https://wa.me/{$phone_digits}?text={$encodedMsg}";
?>
<!-- Floating WhatsApp button -->
<a href="<?= htmlspecialchars($waUrl) ?>" class="whatsapp-float" target="_blank" rel="noopener noreferrer"
  aria-label="Chat with us on WhatsApp" title="Chat with us on WhatsApp">

  <span class="wa-icon">
    <img src="/HOTEL WOODZ/whatsAppIcon.png" alt="WhatsApp">
  </span>


</a>

<style>
  /* Container */
  .whatsapp-float {
    position: fixed;
    bottom: 24px;
    right: 24px;
    z-index: 99999;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    /* background: linear-gradient(180deg, #25D366, #1da851); */
    color: #fff;
    padding: 10px 14px;
    border-radius: 999px;
    box-shadow: 0 8px 22px rgba(20, 100, 60, 0.18);
    text-decoration: none;
    transition: transform .12s ease, box-shadow .12s ease;
    -webkit-tap-highlight-color: transparent;
    font-weight: 600;
    font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
  }

  /* Hover */
  .whatsapp-float:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 28px rgba(20, 100, 60, 0.23);
  }

  /* Icon container */
  .wa-icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 34px;
    height: 34px;
    border-radius: 999px;
    background: rgba(255, 255, 255, 0.12);
    padding: 4px;
    flex: 0 0 auto;
  }

  /* FIXED: WhatsApp Icon size */
  .wa-icon img {
    width: 100px;
    height: 100px;
    object-fit: contain;
  }

  /* Text for desktop */
  .wa-text {
    display: none;
    white-space: nowrap;
    font-size: 0.98rem;
    line-height: 1;
    margin-right: 6px;
  }

  /* Pulse effect */
  .wa-pulse {
    position: absolute;
    right: 8px;
    bottom: 8px;
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.16);
    box-shadow: 0 0 0 4px rgba(37, 211, 102, 0.06);
    pointer-events: none;
    opacity: 0.9;
    animation: wa-pulse 2200ms infinite ease-out;
  }

  @keyframes wa-pulse {
    0% {
      transform: scale(1);
      opacity: 0.9;
    }

    70% {
      transform: scale(1.6);
      opacity: 0;
    }

    100% {
      transform: scale(1.6);
      opacity: 0;
    }
  }

  /* Desktop/tablet: show text */
  @media (min-width: 640px) {
    .wa-text {
      display: inline-block;
    }
  }

  /* Mobile: circle-only button */
  @media (max-width: 480px) {
    .whatsapp-float {
      width: 52px;
      height: 52px;
      padding: 0;
      border-radius: 50%;
      justify-content: center;
      bottom: 40px;
    }

    .wa-text {
      display: none;
    }

    .wa-icon {
      background: transparent;
      padding: 0;
      width: 28px;
      height: 28px;
    }

    .wa-pulse {
      right: 10px;
      bottom: 12px;
    }
  }
</style>