<section class="facilities-section">
  <div class="overlay"></div>
  <div class="container">
    <h2 class="facility-title">Facility</h2>
    <div class="facility-grid">
      <div class="facility-item">
        <i class="fas fa-wifi"></i>
        <p>Free Wifi</p>
      </div>
      <div class="facility-item">
        <i class="fas fa-phone-alt"></i>
        <p>Best Location</p>
      </div>
      <div class="facility-item">
        <i class="fas fa-bolt"></i>
        <p>Power Backup</p>
      </div>
      <div class="facility-item">
        <i class="fas fa-car"></i>
        <p>Travel Assistance</p>
      </div>
      <div class="facility-item">
        <i class="fas fa-dollar-sign"></i>
        <p>Money Exchange</p>
      </div>
    </div>
  </div>
</section>

<!-- Font Awesome for icons -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<style>
  /* --- Facilities Section --- */
  .facilities-section {
    position: relative;
    background: url('Facility/facilityBg.jpg') no-repeat center center/cover;
    color: #fff;
    text-align: center;
    padding: 90px 20px;
    margin-top: 50px;
  }

  .facilities-section .overlay {
    position: absolute;
    inset: 0;
    background: rgb(0 0 0 / 70%);
    z-index: 1;
  }

  .facilities-section .container {
    position: relative;
    z-index: 2;
    max-width: 1100px;
    margin: 0 auto;
  }

  .facility-title {
    font-size: 2.8rem;
    font-weight: 600;
    margin-bottom: 40px;
  }

  .facility-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    justify-items: center;
  }

  .facility-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    transition: transform 0.3s ease;
  }

  .facility-item i {
    font-size: 40px;
    margin-bottom: 10px;
    color: #fff;
  }

  .facility-item p {
    font-size: 1rem;
    font-weight: 500;
    text-transform: capitalize;
  }

  .facility-item:hover {
    transform: translateY(-5px);
  }

  @media (max-width: 768px) {
    .facility-title {
      font-size: 1.5rem;
    }

    .facility-item i {
      font-size: 32px;
    }

    .facility-item p {
      font-size: 0.9rem;
    }
  }

  @media (max-width: 480px) {
    .facilities-section {
      padding: 50px 10px;
    }
  }
</style>