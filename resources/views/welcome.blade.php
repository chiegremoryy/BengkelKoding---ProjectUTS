<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ChieMedical</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background: #fff;
      color: #333;
    }

    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1.5rem 2rem;
      background: #fff;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      position: sticky;
      top: 0;
      z-index: 1000;
    }

    .logo {
      font-size: 1.5rem;
      font-weight: bold;
      color: #4a148c;
    }

    .nav-links a {
      margin-left: 1.5rem;
      text-decoration: none;
      color: #333;
      font-size: 0.95rem;
    }

    .nav-links a:hover {
      color: #4a148c;
    }

    .auth-links a {
      margin-left: 1rem;
      text-decoration: none;
      font-size: 0.9rem;
      color: #fff;
      background: #4a148c;
      padding: 0.4rem 0.9rem;
      border-radius: 7px;
    }

    .hero {
      display: flex;
      justify-content: center;
      padding: 40px 20px;
      scroll-margin-top: 40px;
    }

    .hero-content {
      display: flex;
      flex-wrap: wrap;
      padding: 50px;
      align-items: center;
      justify-content: center;
      gap: 40px;
      max-width: 1200px;
    }

    .hero-text {
      flex: 1;
      min-width: 280px;
    }

    .hero-text h1 {
      font-size: 2.5rem;
      margin-bottom: 20px;
      color: #4a148c;
    }

    .hero-text p {
      font-size: 1.1rem;
      margin-bottom: 10px;
    }

    .hero-image {
      flex: 1;
      min-width: 280px;
      text-align: center;
    }

    .hero-img {
      width: 100%;
      max-width: 400px;
      height: auto;
      border-radius: 12px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    @media (max-width: 768px) {
      .hero-content {
        flex-direction: column-reverse;
        text-align: center;
      }

      .hero-text h1 {
        font-size: 2rem;
      }

      .hero-text p {
        font-size: 1rem;
      }
    }

    .section {
      padding: 80px 2rem 4rem;
      text-align: center;
      scroll-margin-top: 40px;
    }

    .section-title {
      font-size: 2rem;
      margin-bottom: 2rem;
      color: #4a148c;
    }

    .stats-section {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 24px;
      padding: 40px 20px;
    }

    .stat-card {
      width: 220px;
      text-align: center;
      background: #fff;
      border-radius: 16px;
      padding: 24px;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.05);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .stat-icon {
      font-size: 48px;
      color: #4a148c;
      margin-bottom: 16px;
    }

    .stat-card h2 {
      font-size: 1.8rem;
      margin: 0;
      color: #111;
    }

    .stat-card p {
      margin-top: 8px;
      font-size: 1rem;
      color: #666;
    }

    .stat-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 12px 24px rgba(0, 0, 0, 0.1);
    }

    .analytics-chart {
      display: flex;
      flex-direction: column;
      gap: 24px;
      max-width: 955px;
      margin: 0 auto;
      padding-top: 30px;
    }

    .bar-item .label {
      display: block;
      margin-bottom: 8px;
      font-weight: 600;
      color: #4a148c;
      font-size: 1.05rem;
    }

    .bar {
      background-color: #e0e0e0;
      border-radius: 10px;
      height: 30px;
      overflow: hidden;
      position: relative;
    }

    .bar-fill {
      background-color: #4a148c;
      height: 100%;
      color: #fff;
      text-align: right;
      padding-right: 10px;
      font-size: 0.9rem;
      line-height: 30px;
      border-radius: 10px;
      transition: width 0.5s ease;
    }

    .features {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 10px;
      padding: 60px 20px;
    }

    .feature-item {
      width: 260px;
      margin: 35px;
      text-align: center;
      background: #fff;
      border-radius: 16px;
      padding: 10px;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.05);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      cursor: pointer;
    }

    .feature-item:hover {
      transform: translateY(-6px);
      box-shadow: 0 12px 24px rgba(0, 0, 0, 0.1);
    }

    .feature-item img {
      width: 100%;
      height: auto;
      border-radius: 8px;
      margin-bottom: 1rem;
    }

    .feature-item h3 {
      font-size: 1.2rem;
      margin: 1rem 0 0.5rem;
      color: #4a148c;
    }

    .feature-item p {
      font-size: 1rem;
      color: #666;
    }

    .testimonials {
      padding: 60px 20px;
      background-color: #f9fafc;
      text-align: center;
    }

    .testimonial-grid {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
    }

    .testimonial-card {
      width: 300px;
      padding: 30px;
      text-align: left;
      background: #fff;
      border-radius: 16px;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.05);
      transition: transform 0.3s ease;
    }

    .testimonial-card:hover {
      transform: translateY(-6px);
    }

    .quote {
      font-style: italic;
      margin-bottom: 20px;
      color: #333;
    }

    .info span {
      font-size: 0.9rem;
      color: #666;
      line-height: 1.3;
    }

    .contact {
      padding: 40px 0;
    }

    .contact-container {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: center;
      max-width: 1100px;
      margin: 0 auto;
      gap: 20px;
    }

    .contact-content {
      flex: 1;
      min-width: 100px;
      padding-right: 1px;
    }

    .contact-content p {
      margin-bottom: 20px;
      color: #555;
    }

    .contact-form input,
    .contact-form textarea {
      width: 100%;
      padding: 12px 16px;
      margin-bottom: 16px;
      font-size: 1rem;
      background-color: #f9f9f9;
      border: 1px solid #ddd;
      border-radius: 10px;
    }

    .contact-form button {
      padding: 12px 20px;
      color: #fff;
      background-color: #4a148c;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .contact-form button:hover {
      background-color: #6a1b9a;
    }

    .contact-image {
      flex: 1;
      min-width: 300px;
      text-align: center;
      padding-left: 2px;
    }

    .contact-image img {
      max-width: 85%;
      height: auto;
      border-radius: 12px;
    }

    footer {
      background: #4a148c;
      color: #fff;
      padding: 1rem;
      text-align: center;
    }
  </style>
</head>

<body>
  <header>
    <div class="brand" style="display: flex; align-items: center; gap: 8px;">
      <img src="lte/dist/img/logo-chie-medical.png" alt="dokter" style="width: 32px; height: auto;">
      <div class="logo">ChieMedical</div>
    </div>
    <div class="nav-links">
      <a href="#home">Home</a>
      <a href="#analytics">Analytics</a>
      <a href="#features">Features</a>
      <a href="#testimonials">Testimonials</a>
      <a href="#contact">Contact</a>
    </div>

    <div class="auth-links">
      @if (Route::has('login'))
        @auth
          <a href="{{ url('/dashboard') }}">Dashboard</a>
        @else
          <a href="{{ route('login') }}">Login</a>
          @if (Route::has('register'))
            <a href="{{ route('register') }}">Register</a>
          @endif
        @endauth
      @endif
    </div>
  </header>

  <section class="hero" id="home">
    <div class="hero-content">
      <div class="hero-text">
        <h1>ChieMedical: Platform Klinik Digital All-in-One untuk Pelayanan Modern & Efisien</h1>
        <p>Dengan ChieMedical, Anda dapat meningkatkan efisiensi pelayanan, mempercepat alur kerja, dan menghadirkan pengalaman terbaik bagi pasien.</p>
      </div>
      <div class="hero-image">
        <img src="lte/dist/img/halo-dokter.png" alt="dokter" class="hero-img">
      </div>
    </div>
  </section>

  <section class="stats-section">
    <div class="stat-card">
      <i class="fas fa-house-medical stat-icon"></i>
      <h2>100+</h2>
      <p>Klinik</p>
    </div>
    <div class="stat-card">
      <i class="fas fa-user-md stat-icon"></i>
      <h2>1,000+</h2>
      <p>Tenaga Medis</p>
    </div>
    <div class="stat-card">
      <i class="fas fa-calendar-check stat-icon"></i>
      <h2>5,000+</h2>
      <p>Janji Temu</p>
    </div>
    <div class="stat-card">
      <i class="fas fa-shield-alt stat-icon"></i>
      <h2>100%</h2>
      <p>Keamanan Data</p>
    </div>
  </section>

  <section class="section" id="analytics">
    <h2 class="section-title">Analytics</h2>
    
    <div class="analytics-chart">
      <div class="bar-item">
        <span class="label">Statistik Penggunaan</span>
        <div class="bar">
          <div class="bar-fill" style="width: 85%;">85%</div>
        </div>
      </div>

      <div class="bar-item">
        <span class="label">Data Kesehatan Terkini</span>
        <div class="bar">
          <div class="bar-fill" style="width: 72%;">72%</div>
        </div>
      </div>

      <div class="bar-item">
        <span class="label">Insight Pengunjung</span>
        <div class="bar">
          <div class="bar-fill" style="width: 64%;">64%</div>
        </div>
      </div>

      <div class="bar-item">
        <span class="label">Rekap Aktivitas</span>
        <div class="bar">
          <div class="bar-fill" style="width: 91%;">91%</div>
        </div>
      </div>
    </div>
  </section>

  <section class="section" id="features">
    <h2 class="section-title">Features</h2>
    <div class="features">
      <div class="feature-item">
        <h3>Dashboard Eksekutif</h3>
        <img src="lte/dist/img/fitur-1.png" alt="Fitur 1" style="width: 100%; height: auto;">
        <p>Pantau kinerja klinik secara menyeluruh langsung dari satu tampilan dashboard yang intuitif dan real-time.</p>
      </div>
      <div class="feature-item">
        <h3>Rekam Medis</h3>
        <img src="lte/dist/img/fitur-2.png" alt="Fitur 2" style="width: 100%; height: auto;">
        <p>Kelola data pasien dengan lebih aman dan rapi. ChieMedical mendukung standar Permenkes No. 24 Tahun 2022 tentang Rekam Medis Elektronik</p>
      </div>
      <div class="feature-item">
        <h3>Jejaring Luas</h3>
        <img src="lte/dist/img/fitur-3.png" alt="Fitur 3" style="width: 100%; height: auto;">
        <p>Terkoneksi dengan Sistem Informasi Puskesmas dan Dinas Kesehatan, laporan terkait bisa selesai lebih mudah.</p>
      </div>
    </div>
  </section>

  <section class="section" id="testimonials">
    <h2 class="section-title">Testimonials</h2>
    <div class="testimonial-grid">
      <div class="testimonial-card">
        <p class="quote">"ChieMedical membuat proses administrasi pasien jauh lebih cepat dan efisien. Sekarang staf kami bisa lebih fokus pada pelayanan langsung."</p>
        <div class="profile">
          <div class="info">
            <strong>Rina Lestari</strong><br>
            <span>Manajer Operasional<br>Klinik Medika Sejahtera</span>
          </div>
        </div>
      </div>
      <div class="testimonial-card">
        <p class="quote">"Integrasi dengan sistem BPJS dan SATUSEHAT sangat membantu, terutama dalam pelaporan dan validasi data pasien secara real-time."</p>
        <div class="profile">
          <div class="info">
            <strong>Dr. Dimas Nugroho</strong><br>
            <span>Dokter Umum<br>Praktek Bersama Harmoni</span>
          </div>
        </div>
      </div>
      <div class="testimonial-card">
        <p class="quote">"Tim support ChieMedical sangat responsif. Setiap kali kami butuh bantuan atau training tambahan, mereka selalu siap membantu tanpa hambatan."</p>
        <div class="profile">
          <div class="info">
            <strong>Veronica Ayu</strong><br>
            <span>IT Support<br>RSU Bina Kasih</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="contact" id="contact">
    <div class="contact-container">
      <div class="contact-content">
        <h2 class="section-title">Contact</h2>
        <p>Ingin tahu lebih banyak tentang ChieMedical atau butuh bantuan teknis? Silakan isi form di bawah atau hubungi kami langsung.</p>
        <form class="contact-form">
          <input type="text" placeholder="Nama Anda" required>
          <input type="email" placeholder="Email" required>
          <textarea placeholder="Pesan Anda" rows="5" required></textarea>
          <button type="submit">Kirim Pesan</button>
        </form>
      </div>
      <div class="contact-image">
        <img src="lte/dist/img/contact.png" alt="Contact Illustration">
      </div>
    </div>
  </section>

  <footer>
    <p>2025&copy; ChieMedical. All rights reserved.</p>
  </footer>
</body>

</html>