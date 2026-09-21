<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GlowDent - Modern Dental Clinic</title>
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500;1,600&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
    
    <style>
        * { box-sizing: border-box; }
        body {
            background-color: #f7fbfc;
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: #263238;
            overflow-x: hidden;
        }

        
        .navbar-custom {
            background-color: #ffffff;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            padding: 15px 0;
            border-bottom: 1px solid #eef8fa;
        }

        .brand-logo {
            font-family: 'Playfair Display', Georgia, serif;
            font-style: italic;
            font-weight: 700;
            font-size: 1.8rem;
            color: #167d8d;
            text-decoration: none;
        }

        .brand-logo span { color: #106674; }

        .nav-link {
            font-weight: 500;
            color: #263238 !important;
            margin: 0 8px;
            transition: color 0.3s ease;
        }

        .nav-link:hover { color: #167d8d !important; }

        .btn-book-nav {
            background-color: #167d8d;
            color: #ffffff !important;
            border-radius: 50px;
            padding: 8px 22px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-book-nav:hover {
            background-color: #106674;
            transform: translateY(-2px);
        }

        
        .hero-section {
            background: #ffffff;
            border-radius: 32px;
            padding: 50px 30px;
            margin-top: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.03);
            border: 1px solid #eef8fa;
        }

        .hero-title {
            color: #167d8d;
            font-size: 3.2rem;
            font-weight: 700;
            line-height: 1.15;
        }

        .hero-title .italic-text {
            font-family: 'Playfair Display', Georgia, serif;
            font-style: italic;
            color: #263238;
        }

        .btn-main-primary {
            background-color: #167d8d;
            color: #ffffff;
            border-radius: 50px;
            padding: 12px 28px;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
        }

        .btn-main-primary:hover {
            background-color: #106674;
            color: #ffffff;
            transform: translateY(-2px);
        }

        .btn-main-outline {
            border: 2px solid #167d8d;
            color: #167d8d;
            border-radius: 50px;
            padding: 10px 26px;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
        }

        .btn-main-outline:hover {
            background-color: #167d8d;
            color: #ffffff;
        }

        .hero-img {
            width: 100%;
            border-radius: 24px;
            object-fit: cover;
            max-height: 480px;
        }

       
        .section-header { text-align: center; margin-bottom: 50px; }
        .section-title { font-size: 2.2rem; font-weight: 700; color: #167d8d; }
        .section-subtitle { color: #777777; font-size: 0.95rem; }

       
        .feature-card {
            background: #ffffff;
            border: 1px solid #eef8fa;
            border-radius: 20px;
            padding: 28px;
            height: 100%;
            transition: all 0.3s ease;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.04);
        }

        .feature-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.08);
            border-color: #167d8d;
        }

        .icon-box {
            width: 60px;
            height: 60px;
            background-color: #eef8fa;
            color: #167d8d;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

       
        .gallery-img {
            width: 100%;
            height: 240px;
            object-fit: cover;
            border-radius: 16px;
            transition: transform 0.3s ease;
        }

        .gallery-img:hover { transform: scale(1.03); }

       
        footer {
            background-color: #167d8d;
            color: #eef8fa;
            padding: 60px 0 20px 0;
            border-top-left-radius: 36px;
            border-top-right-radius: 36px;
            margin-top: 80px;
        }

        footer h5 { color: #ffffff; font-weight: 600; margin-bottom: 20px; }
        footer a { color: #eef8fa; text-decoration: none; transition: color 0.2s; }
        footer a:hover { color: #ffffff; text-decoration: underline; }
        .social-icons a {
            width: 38px; height: 38px; background: #106674;
            display: inline-flex; align-items: center; justify-content: center;
            border-radius: 50%; margin-right: 8px; color: #fff; text-decoration: none;
        }
    </style>
</head>
<body>

    
    <nav class="navbar navbar-expand-lg navbar-custom sticky-top">
        <div class="container">
            <a class="brand-logo" href="#">Glow<span>Dent</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#why-us">Why Choose Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="#gallery">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="#doctors">Doctors</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
                <a href="#appointment" class="btn btn-book-nav">Book Appointment</a>
            </div>
        </div>
    </nav>

    <div class="container">
       
        <section id="home" class="hero-section my-4" data-aos="fade-up">
            <div class="row align-items-center g-4">
                <div class="col-lg-6 ps-lg-4">
                    <h1 class="hero-title mb-3">
                        Your Perfect <span class="italic-text">Smile</span><br>
                        Begins With Us
                    </h1>
                    <p class="text-muted mb-4 lead">
                        We provide modern, compassionate dental care using state-of-the-art technology to ensure your health and comfort.
                    </p>
                    <div class="d-flex gap-3 flex-wrap">
                        <a href="#appointment" class="btn-main-primary">Book Appointment <i class="fa-solid fa-arrow-right ms-1"></i></a>
                        <a href="#services" class="btn-main-outline">Our Services</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="https://images.unsplash.com/photo-1629909613654-28e377c37b09?q=80&w=800&auto=format&fit=crop" alt="Dental Clinic" class="hero-img shadow-sm">
                </div>
            </div>
        </section>

        
        <section id="about" class="py-5 my-4" data-aos="fade-up">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <img src="https://images.unsplash.com/photo-1588776814546-1ffcf47267a5?q=80&w=800&auto=format&fit=crop" alt="About Our Clinic" class="img-fluid rounded-4 shadow-sm">
                </div>
                <div class="col-lg-6">
                    <span class="fw-bold text-uppercase small" style="color: #167d8d;">About Our Clinic</span>
                    <h2 class="section-title mt-2 mb-3">We Provide Modern Dental Care</h2>
                    <p class="text-muted">
                        Our clinic offers comprehensive dental solutions tailored to your individual needs. We prioritize patient comfort, cleanliness, and long-lasting results using top-tier equipment and gentle treatment approaches.
                    </p>
                    <ul class="list-unstyled mt-3 text-muted">
                        <li class="mb-2"><i class="fa-solid fa-check me-2" style="color: #167d8d;"></i> High standards of hygiene & sterilization</li>
                        <li class="mb-2"><i class="fa-solid fa-check me-2" style="color: #167d8d;"></i> Gentle treatments designed for sensitive patients</li>
                        <li class="mb-2"><i class="fa-solid fa-check me-2" style="color: #167d8d;"></i> Comprehensive care for all age groups</li>
                    </ul>
                </div>
            </div>
        </section>

        
        <section id="services" class="py-5" data-aos="fade-up">
            <div class="section-header">
                <span class="fw-bold text-uppercase small" style="color: #167d8d;">What We Offer</span>
                <h2 class="section-title">Our Specialty Services</h2>
                <p class="section-subtitle">Explore our wide range of professional dental treatments</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="icon-box"><i class="fa-solid fa-tooth"></i></div>
                        <h5 class="fw-bold mb-2">Dental Implants</h5>
                        <p class="text-muted small">Permanent, natural-looking replacements for missing teeth restored with high precision.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="icon-box"><i class="fa-solid fa-wand-magic-sparkles"></i></div>
                        <h5 class="fw-bold mb-2">Teeth Whitening</h5>
                        <p class="text-muted small">Safe and effective whitening procedures to enhance and brighten your smile quickly.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="icon-box"><i class="fa-solid fa-syringe"></i></div>
                        <h5 class="fw-bold mb-2">Root Canal</h5>
                        <p class="text-muted small">Pain-free therapy designed to save infected teeth and relieve severe discomfort.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="icon-box"><i class="fa-solid fa-pump-medical"></i></div>
                        <h5 class="fw-bold mb-2">Dental Cleaning</h5>
                        <p class="text-muted small">Thorough professional scaling to eliminate plaque, tartar, and maintain healthy gums.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="icon-box"><i class="fa-solid fa-teeth-open"></i></div>
                        <h5 class="fw-bold mb-2">Orthodontics</h5>
                        <p class="text-muted small">Modern braces and clear aligners to correct bite issues and align teeth perfectly.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="icon-box"><i class="fa-solid fa-face-smile"></i></div>
                        <h5 class="fw-bold mb-2">Cosmetic Dentistry</h5>
                        <p class="text-muted small">Veneers, bonding, and smile makeovers to boost your self-confidence completely.</p>
                    </div>
                </div>
            </div>
        </section>

        
        <section id="why-us" class="py-5" data-aos="fade-up">
            <div class="section-header">
                <span class="fw-bold text-uppercase small" style="color: #167d8d;">Our Advantages</span>
                <h2 class="section-title">Why Choose Us</h2>
                <p class="section-subtitle">Dedicated to delivering exceptional dental experiences</p>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-4 col-lg">
                    <div class="feature-card text-center">
                        <div class="icon-box mx-auto"><i class="fa-solid fa-microscope"></i></div>
                        <h6 class="fw-bold">Modern Equipment</h6>
                    </div>
                </div>
                <div class="col-md-4 col-lg">
                    <div class="feature-card text-center">
                        <div class="icon-box mx-auto"><i class="fa-solid fa-user-doctor"></i></div>
                        <h6 class="fw-bold">Experienced Doctors</h6>
                    </div>
                </div>
                <div class="col-md-4 col-lg">
                    <div class="feature-card text-center">
                        <div class="icon-box mx-auto"><i class="fa-solid fa-heart"></i></div>
                        <h6 class="fw-bold">Patient Satisfaction</h6>
                    </div>
                </div>
                <div class="col-md-4 col-lg">
                    <div class="feature-card text-center">
                        <div class="icon-box mx-auto"><i class="fa-solid fa-couch"></i></div>
                        <h6 class="fw-bold">Comfortable Environment</h6>
                    </div>
                </div>
                <div class="col-md-4 col-lg">
                    <div class="feature-card text-center">
                        <div class="icon-box mx-auto"><i class="fa-solid fa-tag"></i></div>
                        <h6 class="fw-bold">Affordable Prices</h6>
                    </div>
                </div>
            </div>
        </section>

       
        <section id="gallery" class="py-5" data-aos="fade-up">
            <div class="section-header">
                <span class="fw-bold text-uppercase small" style="color: #167d8d;">Clinic Preview</span>
                <h2 class="section-title">Our Gallery</h2>
            </div>
            <div class="row g-3">
                <div class="col-md-4"><img src="https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?q=80&w=500&auto=format&fit=crop" class="gallery-img shadow-sm" alt="Gallery 1"></div>
                <div class="col-md-4"><img src="https://images.unsplash.com/photo-1606811841689-23dfddce3e95?q=80&w=500&auto=format&fit=crop" class="gallery-img shadow-sm" alt="Gallery 2"></div>
                <div class="col-md-4"><img src="https://images.unsplash.com/photo-1598256989800-fe5f95da9787?q=80&w=500&auto=format&fit=crop" class="gallery-img shadow-sm" alt="Gallery 3"></div>
            </div>
        </section>
    </div>

    
    <footer>
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <a class="brand-logo text-white" href="#">Glow<span class="text-white-50">Dent</span></a>
                    <p class="mt-3 small">Providing high-quality dental treatments with a commitment to patient satisfaction and modern technologies.</p>
                    <div class="social-icons mt-3">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled small">
                        <li class="mb-2"><a href="#home">Home</a></li>
                        <li class="mb-2"><a href="#about">About</a></li>
                        <li class="mb-2"><a href="#services">Services</a></li>
                        <li class="mb-2"><a href="#gallery">Gallery</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4">
                    <h5>Opening Hours</h5>
                    <ul class="list-unstyled small">
                        <li class="mb-2">Mon - Thu: 9:00 AM - 8:00 PM</li>
                        <li class="mb-2">Friday: 2:00 PM - 9:00 PM</li>
                        <li class="mb-2">Saturday: 10:00 AM - 6:00 PM</li>
                        <li class="mb-2 text-warning">Sunday: Closed</li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4" id="contact">
                    <h5>Contact Us</h5>
                    <ul class="list-unstyled small">
                        <li class="mb-2"><i class="fa-solid fa-location-dot me-2"></i> 123 Health Street, City</li>
                        <li class="mb-2"><i class="fa-solid fa-phone me-2"></i> +123 456 7890</li>
                        <li class="mb-2"><i class="fa-solid fa-envelope me-2"></i> info@glowdent.com</li>
                    </ul>
                </div>
            </div>
            <hr class="mt-4 border-light opacity-25">
            <p class="text-center small mb-0">&copy; 2026 GlowDent. All Rights Reserved.</p>
        </div>
    </footer>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS Animation JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 800, once: true });
    </script>
</body>
</html>