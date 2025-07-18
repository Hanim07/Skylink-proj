@extends('layouts.master')

@section('title', 'Homepage - Sky Link IT Solutions')
@section('description', 'Explore our portfolio of successful IT projects and digital solutions delivered to clients across Ethiopia.')

@push('styles')
    <style>
        :root {
            --primary-blue:rgb(63, 122, 249);
            --dark-blue: #4a90e2;
            --light-blue:rgb(212, 224, 244);
            --gray-bg: #f8f9fa;
        }

        /* Floating Social Icons */
        .floating-social {
            position: fixed;
            right: 25px;
            top: 50%;
            transform: translateY(-50%);
            z-index: 999;
            display: flex;
            flex-direction: column;
            gap: 0.8rem;
        }

        .floating-social a {
            width:55px;
            height:55px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: rgb(92, 112, 244);
            position: relative;
            overflow: visible;
            text-decoration: none;
            transition: transform 0.3s;
            font-size: 2rem;
        }

        .floating-social .mobile { background: #ffffff; }
        .floating-social .telegram { background: #ffffff; }
        .floating-social .chat { background: #ffffff; }
        .floating-social a:hover {
            transform: scale(1.1);
        }
        

        .social-label {
    position: absolute;
    right: 110%;
    top: 50%;
    transform: translateY(-50%);
    background: #333;
    color: #fff;
    padding: 4px 10px;
    border-radius: 4px;
    font-size: 18px;
    white-space: nowrap;
    opacity: 0;
    pointer-events: none;
    transition: opacity 0.3s, right 0.3s;
}

.floating-social a:hover .social-label {
    opacity: 1;
    right: 130%;
}

        /* Hero Section */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
            height: 100vh; /* Full viewport height */
            background-image: url('../assets/images/27075.jpg');
            background-size: cover;      /* Cover entire section */
            background-position: center; /* Center the image */
            background-repeat: no-repeat;
            color: white; /* Text color (adjust if needed) */
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            opacity: 0.12;
        }

.hero-content {
            position: relative;
            z-index: 2;
            max-width: 600px;
        }

        .hero h1 {
            font-size: 3.4rem;
            font-weight: 700;
            padding-top: 10px;
            margin-bottom: 1.8rem;
            line-height: 1.15;
            color:white;
        }

        .hero p {
            font-size: 1.1rem;
            margin-bottom: 2.5rem;
            opacity: 0.92;
            line-height: 1.6;
            collor: white;
        }

        .btn-get-started {
        background: linear-gradient(135deg, #3B82F6,rgb(72, 113, 248));
        color: white;
        border: none;
        padding: 12px 30px;
        border-radius: 25px;
        font-weight: 600;
        font-size: 14px;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-block;
    }

    .btn-get-started:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(59, 130, 246, 0.4);
        color: white;
    }

        .hero-btn {
            background: white;
            color: var(--primary-blue);
            padding: 0.9rem 2.2rem;
            border: none;
            border-radius: 20px;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s;
            font-size: 1rem;
        }

        .hero-btn:hover {
            transform: translateY(-2px);
            color: var(--primary-blue);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }

        /* Company Overview */
        .stats-section {
            background: var(--primary-blue);
            color: white;
            padding: 60px 0;
        }

        .stat-item {
            text-align: center;
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: bold;
            display: block;
        }

        /* Trusted Partners */
        .partners-section {
            padding: 40px 0;
            background: #ffffff;
        }

        .partner-logo {
            height: 90px;
            object-fit: cover;
            transition: filter 0.3s;
        }

        .partner-logo:hover {
            filter: grayscale(0%);
        }

        /* Partners Slider */
.partners-slider {
    overflow: hidden;
    white-space: nowrap;
}

.partners-track {
    display: inline-flex;
    animation: slidePartners 20s linear infinite;
}

.partners-track .partner-logo {
    margin: 0 40px;
    flex-shrink: 0;
}

@keyframes slidePartners {
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); }
}
/* Pause animations on hover */
.partners-track:hover,
.products-track:hover,
.testimonials-track:hover {
    animation-play-state: paused;
}

        /* Services Section */
        .services {
            padding: 6rem 0;
            background: var(--gray-bg);
        }

        .services-header {
  text-align: left;
  margin-bottom: 60px;
}

.services-label {
  color: #4a90e2;
  font-size: 14px;
  font-weight: 600;
  letter-spacing: 2px;
  margin-bottom: 10px;
  position: relative;
}

.services-label::after {
  content: "";
  position: absolute;
  left: 80px;
  top: 50%;
  transform: translateY(-50%);
  width: 60px;
  height: 2px;
  background-color: #4a90e2;
}

.services-title {
  font-size: 48px;
  font-weight: 700;
  color: #333;
  margin: 0;
}

        .services-container {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: stretch;
            gap: 3rem;
            max-width: 1000px;
            margin: 0 auto;
            padding: 25px 0;
        }

        .service-card {
            width: 300px;
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
            transition: opacity 0.3s ease;
            position: relative;
        }
        
        .service-card.center {
            background: var(--dark-blue);
            color: white;
            transform: scale(1.14);
            z-index: 2;
            box-shadow: 0 15px 40px #1e40af;
        }

        .service-card.side {
            background: var(--light-blue);
            color: #333;
        }

        .service-image {
            height: 200px;
            background: rgba(255,255,255,0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3.5rem;
            color: rgba(255,255,255,0.4);
        }

        .service-card.side .service-image {
            background: rgba(0,0,0,0.03);
            color: rgba(0,0,0,0.15);
        }

        .service-content {
            padding: 2.5rem 2rem;
            text-align: center;
        }

        .service-content h4 {
            font-size: 1.4rem;
            font-weight: 600;
            margin-bottom: 1.2rem;
        }

        .service-content p {
            font-size: 0.9rem;
            line-height: 1.7;
            opacity: 0.9;
        }

        .carousel-nav {
            position: absolute;
            top: 50%;
            background: var(--primary-blue);
            color: white;
            border: none;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            cursor: pointer;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
        }

        .carousel-nav:hover {
            background: var(--dark-blue);
        }

        .carousel-prev {
            left: -80px;
        }

        .carousel-next {
            right: -80px;
        }

        /* Latest News */
        .news-section {
            padding: 40px 0;
            background-color: #ffffff;
        }
        
        .news-header {
            margin-bottom: 50px;
        }
        
        .news-tab {
            color: #3B82F6;
            font-weight: 600;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 1px;
            position: relative;
            display: inline-block;
            margin-bottom: 20px;
        }
        
        .news-tab::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 60px;
            height: 3px;
            background-color: #2196F3;
        }
        
        .news-title {
            font-size: 48px;
            font-weight: 700;
            color: #333;
            margin: 0;
        }
        
        .news-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
            margin-bottom: 30px;
            cursor: pointer;
        }
        
        .news-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 8px 30px rgba(0,0,0,0.15);
        }
        
        .card-image {
            position: relative;
            height: 180px;
            overflow: hidden;
        }
        
        .card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .category-badge {
            position: absolute;
            top: 15px;
            left: 15px;
            background: #2196F3;
            color: white;
            padding: 6px 12px;
            border-radius: 6px;
            font-size: 11px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .card-content {
            padding: 20px;
        }
        
        .card-meta {
            display: flex;
            align-items: center;
            gap: 15px;
            margin-bottom: 15px;
            color: #666;
            font-size: 13px;
        }
        
        .meta-item {
            display: flex;
            align-items: center;
            gap: 6px;
        }
        
        .meta-item i {
            color: #2196F3;
            font-size: 14px;
        }
        
        .card-title {
            font-size: 20px;
            font-weight: 700;
            color: #333;
            margin-bottom: 12px;
            line-height: 1.3;
        }
        
        .card-description {
            color: #666;
            line-height: 1.6;
            margin-bottom: 20px;
            font-size: 14px;
        }
        
        .read-more {
            color: #2196F3;
            text-decoration: none;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
            font-size: 14px;
        }
        
        .read-more:hover {
            color: #1976D2;
            gap: 12px;
        }
        
        .read-more i {
            transition: transform 0.3s ease;
        }
        
        .read-more:hover i {
            transform: translateX(4px);
        }
        
        @media (max-width: 768px) {
            .news-title {
                font-size: 36px;
            }
            
            .card-content {
                padding: 15px;
            }
            
            .card-title {
                font-size: 18px;
            }
            
            .card-image {
                height: 160px;
            }

            .carousel-prev {
            left: 1px;
        }

        .carousel-next {
            right: 1px;
        }
        }
        /* Featured Portfolio */
        .portfolio-section {
            padding: 80px 0;
            background: #f8f9fa;
        }

        .portfolio-header {
  text-align: left;
  margin-bottom: 60px;
}

.portfolio-label {
  color: #4a90e2;
  font-size: 14px;
  font-weight: 600;
  letter-spacing: 2px;
  margin-bottom: 10px;
  position: relative;
}

.portfolio-label::after {
  content: "";
  position: absolute;
  left: 80px;
  top: 50%;
  transform: translateY(-50%);
  width: 60px;
  height: 2px;
  background-color: #4a90e2;
}

.portfolio-title {
  font-size: 48px;
  font-weight: 700;
  color: #333;
  margin: 0;
}

        .portfolio-item {
            border-radius: 6px;
            overflow: hidden;
            margin-bottom: 20px;
            position: relative;
            cursor: pointer;
        }

        ,.portfolio-item h1{
            margin-bottom: 10px;
        }

        .portfolio-item img {
            width: 90%;
            height: 200px;
            object-fit: cover;
            transition: transform 0.3s;
        }

        .portfolio-item:hover img {
            transform: scale(1.1);
        }
        /* Portfolio Overlay */
.portfolio-item {
    position: relative;
    overflow: hidden;
}

.portfolio-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(to right, #5f74ff, #bbcaf3);
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s;
}

.portfolio-item:hover .portfolio-overlay {
    opacity: 1;
}

.portfolio-content {
    text-align: center;
    padding: 20px;
}

        /* Featured Products */
 .products-section {
            padding: 80px 0;
        }
         .product-header {
  text-align: left;
  margin-bottom: 60px;
}

.product-label {
  color: #4a90e2;
  font-size: 14px;
  font-weight: 600;
  letter-spacing: 2px;
  margin-bottom: 10px;
  position: relative;
}

.product-label::after {
  content: "";
  position: absolute;
  left: 100px;
  top: 50%;
  transform: translateY(-50%);
  width: 60px;
  height: 2px;
  background-color: #4a90e2;
}

.product-title {
  font-size: 48px;
  font-weight: 700;
  color: #333;
  margin: 0;
}

        .product-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }

        .product-card:hover {
            transform: translateY(-5px);
        }

        /* Products Slider */
.products-slider {
    overflow: hidden;
    padding: 20px 0;
}

.products-track {
    display: flex;
    animation: slideProducts 10s linear infinite;
}

.products-track .product-card {
    min-width: 300px;
    margin: 0 20px;
    flex-shrink: 0;
}


.btn-view-more {
        background: linear-gradient(135deg, #3a7bd5,rgb(0, 136, 255));
        color: white;
        border: none;
        padding: 12px 30px;
        font-size: 1rem;
        border-radius: 50px;
        cursor: pointer;
        transition: all 0.3s ease;
        text-decoration: none;
        box-shadow: 0 4px 15px rgba(58, 123, 213, 0.3);
        position: relative;
        overflow: hidden;
    }
    
    .btn-view-more:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 20px rgba(58, 123, 213, 0.4);
    }

@keyframes slideProducts {
    0% { transform: translateX(0); }
    100% { transform: translateX(-50%); }
}

/*testimonials-section*/
    .testimonials-section {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            padding: 80px 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            overflow: hidden;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #2c3e50;
            text-align: center;
            margin-bottom: 3rem;
            line-height: 1.2;
        }

        .title-underline {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            margin-top: 15px;
        }

        .line-long {
            width: 80px;
            height: 4px;
            background: #17a2b8;
            border-radius: 2px;
        }

        .line-short {
            width: 20px;
            height: 4px;
            background: #17a2b8;
            border-radius: 2px;
        }

        .carousel-container {
            overflow: hidden;
            width: 100%;
            position: relative;
            margin-top: 2rem;
        }

        .carousel-track {
            display: flex;
            width: calc(400px * 6); /* 3 cards × 2 sets */
            animation: slideInfinite 15s linear infinite;
        }

        .carousel-track:hover {
            animation-play-state: paused;
        }

        @keyframes slideInfinite {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(calc(-400px * 3)); /* Move by 3 card widths */
            }
        }

        .testimonial-card {
            background: rgba(173, 216, 230, 0.3);
            border-radius: 15px;
            padding: 30px 25px;
            margin: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.4s ease;
            flex: 0 0 370px; /* Fixed width for consistent spacing */
            position: relative;
            overflow: hidden;
        }

        .testimonial-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
            z-index: 10;
        }


        .profile-section {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .profile-icon {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            margin-right: 20px;
            border: 3px solid #17a2b8;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: #17a2b8;
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
            box-shadow: 0 4px 15px rgba(23, 162, 184, 0.2);
        }

        .client-info h5 {
            color: #17a2b8;
            font-weight: 600;
            margin-bottom: 5px;
            font-size: 1.2rem;
        }

        .client-info .profession {
            color: #6c757d;
            font-size: 0.9rem;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .testimonial-text {
            color: #495057;
            line-height: 1.6;
            font-size: 0.95rem;
        }

        /* Pause animation on hover */
        .carousel-container:hover .carousel-track {
            animation-play-state: paused;
        }

        

        @media (max-width: 768px) {
            .section-title {
                font-size: 2rem;
            }
            
            .testimonial-card {
                flex: 0 0 300px;
                margin: 10px;
                padding: 20px 15px;
            }
            
            .carousel-track {
                width: calc(320px * 6);
            }
            
            @keyframes slideInfinite {
                0% {
                    transform: translateX(0);
                }
                100% {
                    transform: translateX(calc(-320px * 3));
                }
            }

            .profile-icon {
                width: 60px;
                height: 60px;
                font-size: 1.5rem;
            }
        }

        /* Additional visual effects */
        .testimonial-card::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }

        .testimonial-card:hover::after {
            left: 100%;
        }

        /* Icon animation */
        .profile-icon i {
            transition: all 0.3s ease;
        }

        .testimonial-card:hover .profile-icon i {
            transform: scale(1.1);
        }

        /* Newsletter */
        .newsletter {
            background: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%);
            color: white;
            padding: 3rem 0;
            text-align: center;
        }

        .newsletter h2 {
            font-size: 2.4rem;
            font-weight: 600;
            margin-bottom: 1.2rem;
        }

        .newsletter p {
            font-size: 1.1rem;
            opacity: 0.9;
            margin-bottom: 3rem;
        }

        .newsletter-form {
            max-width: 450px;
            margin: 0 auto;
        }

        .newsletter-input {
            width: 100%;
            padding: 1.2rem 1.8rem;
            border: none;
            border-radius: 50px;
            margin-bottom: 1.5rem;
            font-size: 1rem;
            outline: none;
        }

        .newsletter-btn {
            background: white;
            color: var(--primary-blue);
            padding: 1.2rem 3.5rem;
            border: none;
            border-radius: 50px;
            font-weight: 600;
            cursor: pointer;
            font-size: 1rem;
            transition: all 0.3s;
        }

        .newsletter-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }

       

/* Responsive Design */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .floating-social {
                display: none;
            }
            
            .stats-container {
                flex-direction: column;
                gap: 2rem;
            }
            
            .stat-item::after {
                display: none;
            }
            
            .services-container {
                flex-direction: column;
                align-items: center;
            }
            
            .service-card.center {
                transform: none;
            }
            
            .carousel-nav {
                display: none;
            }
            
            .portfolio-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            
        }
    </style>
@endpush
    
@section('content')
    <!-- Floating Social Icons -->
    <div class="floating-social">
  <a href="tel:+251911027667" class="mobile">
    <i class="fas fa-phone"></i>
    <span class="social-label">Quick Contact</span>
  </a>
  <a href="https://t.me/Skylinktechnologies" target="_blank" class="telegram">
    <i class="fab fa-telegram-plane"></i>
    <span class="social-label">Telegram Chat</span>
  </a>
  <a href="#" class="chat">
    <i class="fas fa-comments"></i>
    <span class="social-label">Live Chat</span>
  </a>
</div>




    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="hero-content">
                        
                        <h1>Helping businesses succeed with the best IT services in Ethiopia</h1>
                        <p>Empowering businesses with cutting-edge technology solutions. We provide comprehensive IT services to help your business grow and thrive in the digital age.</p>
                        <a href="#services" class="btn-get-started">More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>



<!-- Company Overview -->
<section class="stats-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="mb-4">Company overview</h2>
                <p>Sky Link is a leading IT services company in Ethiopia, providing innovative solutions to businesses of all sizes. With our experienced team and cutting-edge technology, we help organizations achieve their digital transformation goals and stay competitive in today's market.</p>
            </div>
            <div class="col-lg-6">
                <div class="row text-center">
                    <div class="col-4">
                        <div class="stat-item">
                            <div class="stat-number" data-target="4+">0</div>
                            <small>Years Experience</small>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="stat-item">
                            <div class="stat-number" data-target="400+">0</div>
                            <small>Happy Clients</small>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="stat-item">
                            <div class="stat-number" data-target="100+">0</div>
                            <small>Projects Done</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Trusted Partners -->
<section class="partners-section">
    <div class="container">
        <h5 class="text-center mb-4">TRUSTED PARTNERS</h5>
        <div class="partners-slider">
            <div class="partners-track">
                <img src="{{ asset('assets/images/minbertv.webp') }}" alt="Minber" class="partner-logo">
                <img src="{{ asset('assets/images/iman.webp') }}" alt="iman" class="partner-logo">
                <img src="{{ asset('assets/images/Ethiotel.jpg') }}" alt="ethiotel" class="partner-logo">
                <img src="{{ asset('assets/images/evergreen.jfif') }}" alt="evergreen" class="partner-logo">
                <img src="{{ asset('assets/images/bilalul.jpg') }}" alt="bilalul" class="partner-logo">
                <img src="{{ asset('assets/images/aauLogo.png') }}" alt="aau" class="partner-logo">
                <img src="{{ asset('assets/images/diredawa.JPG') }}" alt="diredawa" class="partner-logo">
                <img src="{{ asset('assets/images/Safaricom.png') }}" alt="safaricom" class="partner-logo">
                <!-- Duplicate for seamless loop -->
                <img src="{{ asset('assets/images/minbertv.webp') }}" alt="Minber" class="partner-logo">
                <img src="{{ asset('assets/images/iman.webp') }}" alt="iman" class="partner-logo">
                <img src="{{ asset('assets/images/Ethiotel.jpg') }}" alt="ethiotel" class="partner-logo">
                <img src="{{ asset('assets/images/diredawa.JPG') }}" alt="diredawa" class="partner-logo">
                <img src="{{ asset('assets/images/aauLogo.png') }}" alt="aau" class="partner-logo">
                <img src="{{ asset('assets/images/bilalul.jpg') }}" alt="bilalul" class="partner-logo">
                <img src="{{ asset('assets/images/evergreen.jfif') }}" alt="evergreen" class="partner-logo">
                <img src="{{ asset('assets/images/Safaricom.png') }}" alt="safaricom" class="partner-logo">
            </div>
        </div>
    </div>
</section>

    <!-- Services Section -->
    <section class="services" id="services">
        <div class="container">
            <div class="services-header">
                <div class="services-label">SERVICES</div>
                <h2 class="services-title">Our Services</h2>
            </div>
            <div class="services-container">
                <button class="carousel-nav carousel-prev">
                    <i class="fas fa-chevron-left"></i>
                </button>
                
                <div class="service-card side">
                    <div class="service-image">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <div class="service-content">
                        <h4>Web Development</h4>
                        <p>We create modern, responsive websites and web applications using the latest technologies and best practices to ensure optimal performance and exceptional user experience for your business.</p>
                    </div>
                </div>

                <div class="service-card center">
                    <div class="service-image">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <div class="service-content">
                        <h4>Mobile App</h4>
                        <p>Our flagship mobile application development service provides comprehensive end-to-end solutions for iOS and Android platforms, ensuring seamless user experiences and robust functionality that drives business growth.</p>
                    </div>
                </div>


                <div class="service-card side">
                    <div class="service-image">
                        <i class="fas fa-cloud"></i>
                    </div>
                    <div class="service-content">
                        <h4>Cloud Solutions</h4>
                        <p>Comprehensive cloud services including migration, management, and optimization to help your business scale efficiently, reduce operational costs, and improve overall system reliability.</p>
                    </div>
                </div>

                <button class="carousel-nav carousel-next">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>

            <div class="text-center mt-5">
            <a href="{{ route('services') }}" class=" btn-view-more">
                View More Services
                <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
        </div>
    </section>






    <!-- Latest News -->
<section class="news-section">
    <div class="container">
        <div class="news-header">
            <div class="news-tab">NEWS</div>
            <h2 class="news-title">Latest News</h2>
        </div>
        
        <div class="row">
            {{-- This loop dynamically loads the latest news from the controller --}}
            @forelse($latestNews as $news)
            <div class="col-lg-4 col-md-6">
                <article class="news-card">
                    <a href="{{ route('news.show', $news->slug) }}" class="news-link-wrapper">
                        <div class="card-image">
                            {{-- Use asset() helper to get the image from storage --}}
                            <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}" loading="lazy">
                            {{-- Display category name from the relationship, with a fallback --}}
                            <div class="category-badge">{{ $news->category->name ?? 'News' }}</div>
                        </div>
                        
                        <div class="card-content">
                            <div class="card-meta">
                                <div class="meta-item">
                                    <i class="fas fa-user"></i>
                                    {{-- Assuming an author relationship or field, otherwise defaults to 'Admin' --}}
                                    <span>{{ $news->author->name ?? 'Admin' }}</span>
                                </div>
                                <div class="meta-item">
                                    <i class="fas fa-calendar"></i>
                                    {{-- Format the date --}}
                                    <span>{{ $news->created_at->format('d M Y') }}</span>
                                </div>
                            </div>
                            
                            <h3 class="card-title">{{ $news->title }}</h3>
                            {{-- Use the excerpt field and limit its length --}}
                            <p class="card-description">{{ Str::limit($news->excerpt, 120) }}</p>
                            
                            <span class="read-more">
                                Read More
                                <i class="fas fa-arrow-right"></i>
                            </span>
                        </div>
                    </a>
                </article>
            </div>
            @empty
            <div class="col-12 text-center">
                <p class="text-muted">No news available at the moment.</p>
            </div>
            @endforelse
        </div>
    </div>
</section>

<!-- Featured Portfolio -->
<section id="portfolio" class="portfolio-section">
    <div class="container">
        <div class="portfolio-header">
            <div class="portfolio-label">PROJECTS</div>
            <h2 class="portfolio-title">Featured Portfolio</h2>
        </div>
        <div class="row">
            {{-- This loop dynamically loads the latest portfolios from the controller --}}
            @forelse($latestPortfolios as $portfolio)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="portfolio-item">
                    {{-- Use asset() helper to get the image from storage --}}
                    <img src="{{ asset('storage/' . $portfolio->image) }}" alt="{{ $portfolio->title }}">
                    <div class="portfolio-overlay">
                        <div class="portfolio-content">
                            <h5>{{ $portfolio->title }}</h5>
                            <p>{{ Str::limit($portfolio->description, 100) }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center">
                <p class="text-muted">No projects available at the moment.</p>
            </div>
            @endforelse
        </div>
        <div class="text-center mt-5">
            <a href="{{ route('portfolio') }}" class="btn-view-more">
                More Projects
                <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</section>



     <!-- Featured Products -->
<section class="products-section">
    <div class="container">
        <div class="product-header">
                <div class="product-label">PRODUCTS</div>
                <h2 class="product-title">Featured Products</h2>
        </div>
        <div class="products-slider">
            <div class="products-track">
                @php
                    $products = [
                        ['name' => 'Cctv Camera', 'description' => 'High-definition surveillance camera', 'image' => asset('assets/images/cctv.jfif'), 'rating' => 5],
                        ['name' => 'Attendance Tracker', 'description' => 'Biometric and RFID-based attendance', 'image' => asset('assets/images/attendance.jfif'), 'rating' => 4],
                        ['name' => 'Security Camera', 'description' => 'Advanced indoor/outdoor camera', 'image' => asset('assets/images/cctv3.jfif'), 'rating' => 5],
                        ['name' => 'Ecommerce Application', 'description' => 'Custom-built online store solutions', 'image' => asset('assets/images/ecommerce.jfif'), 'rating' => 5],
                        ['name' => 'Cctv Camera', 'description' => 'Durable and weatherproof CCTV system', 'image' => asset('assets/images/cctv4.jfif'), 'rating' => 4]
                    ];
                @endphp
                
                @foreach(array_merge($products, $products) as $product)
                <div class="product-card">
                    <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="img-fluid mb-3" style="height: 200px; object-fit: contain;">
                    <h5>{{ $product['name'] }}</h5>
                    <p class="text-muted">{{ $product['description'] }}</p>
                    
                </div>
                @endforeach
            </div>
            
        </div>
        <div class="text-center mt-5">
            <a href="{{ route('products') }}" class=" btn-view-more">
                View More Products
                <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</section>

<!-- Client Testimonials -->
    <section class="testimonials-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title">
                        What Our Clients Say About<br>
                        Our Digital Services
                        <div class="title-underline">
                            <div class="line-long"></div>
                            <div class="line-short"></div>
                        </div>
                    </h2>
                </div>
            </div>
            
            <div class="carousel-container">
                <div class="carousel-track" id="carouselTrack">
                    <!-- First set of cards -->
                    <div class="testimonial-card">
                        <div class="profile-section">
                            <div class="profile-icon">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <div class="client-info">
                                <h5>Ibrahim Mohammed</h5>
                                <p class="profession">CUSTOMER</p>
                            </div>
                        </div>
                        <p class="testimonial-text">
                Skylink Technologies exceeded our expectations with their technical expertise and timely delivery. Their solutions are well-structured and scalable, making them ideal for any growing business.
            </p>
                    </div>

                    <div class="testimonial-card">
                        <div class="profile-section">
                            <div class="profile-icon">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <div class="client-info">
                                <h5>Aisha Malik</h5>
                                <p class="profession">CUSTOMER</p>
                            </div>
                        </div>
                        <p class="testimonial-text">
                Working with Skylink has been a game-changer. Their team helped digitize our operations with a custom e-commerce platform that increased our efficiency and customer satisfaction.
            </p>
                    </div>

                    <div class="testimonial-card">
                        <div class="profile-section">
                            <div class="profile-icon">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <div class="client-info">
                                <h5>Khalid Kibrom</h5>
                                <p class="profession">CUSTOMER</p>
                            </div>
                        </div>
                        <p class="testimonial-text">
                The collaboration with Skylink was smooth and productive. Their developers understood our vision and turned it into a responsive, user-friendly mobile app within a short timeframe.
            </p>
                    </div>

                    <div class="testimonial-card">
                        <div class="profile-section">
                            <div class="profile-icon">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <div class="client-info">
                                <h5>Zain Karim</h5>
                                <p class="profession">CUSTOMER</p>
                            </div>
                        </div>
                        <p class="testimonial-text">
                I was impressed by the professionalism and depth of knowledge at Skylink. Their network solutions significantly improved our infrastructure performance and security.
            </p>
                    </div>

                    <div class="testimonial-card">
                        <div class="profile-section">
                            <div class="profile-icon">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <div class="client-info">
                                <h5>Kalkidan Gezu</h5>
                                <p class="profession">CUSTOMER</p>
                            </div>
                        </div>
                        <p class="testimonial-text">
                Skylink helped transform our business with a beautiful, easy-to-manage website. Their support team is always available and attentive to our needs.
            </p>
                    </div>

                    <div class="testimonial-card">
                        <div class="profile-section">
                            <div class="profile-icon">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <div class="client-info">
                                <h5>Taye Abrar</h5>
                                <p class="profession">CUSTOMER</p>
                            </div>
                        </div>
                        <p class="testimonial-text">
                Their commitment to quality and innovation is what sets Skylink apart. I’d recommend them to anyone looking to build a reliable tech solution.
            </p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Newsletter -->
    <section class="newsletter">
        <div class="container">

 @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

            <h2>Subscribe for our latest update</h2>
            <p>Stay informed about our latest services, technology trends, and industry insights delivered directly to your inbox</p>
           <form class="newsletter-form" method="POST" action="{{ route('subscribe') }}">
    @csrf
    <input type="email" name="email" class="newsletter-input" placeholder="Enter your email address" required>
    <button type="submit" class="newsletter-btn">Subscribe</button>
</form>
        </div>
    </section>


    
   


@endsection

@push('scripts')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script >
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        document.addEventListener('DOMContentLoaded', () => {
  // Counter animation for stats
  function animateCounters() {
    document.querySelectorAll('.stat-number').forEach(counter => {
      if (counter.dataset.animated === "true") return;
      counter.dataset.animated = "true";

      const target = counter.getAttribute('data-target') || '0';
      const isK = target.toLowerCase().includes('k');
      const isPlus = target.includes('+');
      const numericValue = parseFloat(target.replace(/[^\d.]/g, ''));
      const numericTarget = isK ? numericValue * 1000 : numericValue;

      const duration = 2000; // animation duration in ms
      const startTime = performance.now();

      function updateCounter(now) {
        const elapsed = now - startTime;
        let progress = Math.min(elapsed / duration, 1);
        let current = Math.floor(progress * numericTarget);

        if (isK) {
          counter.textContent = Math.floor(current / 1000) + 'k';
        } else if (isPlus) {
          counter.textContent = current + '+';
        } else {
          counter.textContent = current;
        }

        if (progress < 1) {
          requestAnimationFrame(updateCounter);
        } else {
          counter.textContent = target;
        }
      }

      requestAnimationFrame(updateCounter);
    });
  }

  const statsSection = document.querySelector('.stats-section');
  if (statsSection) {
    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          animateCounters();
          observer.unobserve(entry.target); // only once
        }
      });
    }, { threshold: 0.2 });

    observer.observe(statsSection);
  }
});


        document.addEventListener('DOMContentLoaded', function () {
  // ========= SERVICES DATA =========
  const services = [
    {
      icon: 'fas fa-laptop-code',
      title: 'Web Development',
      desc: 'We create modern, responsive websites and web applications using the latest technologies and best practices to ensure optimal performance and exceptional user experience for your business.'
    },
    {
      icon: 'fas fa-mobile-alt',
      title: 'Mobile Apps',
      desc: 'End-to-end mobile app development for iOS and Android that delivers seamless user experiences and powerful functionality.'
    },
    {
      icon: 'fas fa-shield-alt',
      title: 'Physical Safety and Security',
      desc: 'Integrated physical security systems including surveillance, access control, and alarm solutions to safeguard your assets.'
    },
    {
      icon: 'fas fa-shield-alt',
      title: 'Enterprise Network Solution',
      desc: 'Scalable and secure network infrastructure solutions designed to meet the demands of growing enterprise environments.'
    },
    {
      icon: 'fas fa-database',
      title: 'ERP Consultancy',
      desc: 'Expert guidance on ERP system selection, implementation, and optimization to streamline your business operations.'
    },
    {
      icon: 'fas fa-cogs',
      title: 'ICT Support',
      desc: 'Reliable and timely technical support services to ensure your IT systems run smoothly with minimal downtime.'
    },
    {
      icon: 'fas fa-database',
      title: 'Smart City Projects',
      desc: 'Innovative smart city technologies that enhance urban living through intelligent infrastructure and data-driven services.'
    }
  ];

  let currentIndex = 1;

  const container = document.querySelector('.services-container');
  const cards = container.querySelectorAll('.service-card');
  const prevBtn = document.querySelector('.carousel-prev');
  const nextBtn = document.querySelector('.carousel-next');

  function updateCard(card, service, position) {
    card.className = 'service-card ' + position;
    card.querySelector('.service-image i').className = service.icon;
    card.querySelector('h4').textContent = service.title;
    card.querySelector('p').textContent = service.desc;
  }

  function renderServices() {
    if (cards.length < 3) {
      console.warn('Not enough cards in the DOM. Expected 3.');
      return;
    }

    const prev = services[(currentIndex - 1 + services.length) % services.length];
    const current = services[currentIndex % services.length];
    const next = services[(currentIndex + 1) % services.length];

    updateCard(cards[0], prev, 'side');
    updateCard(cards[1], current, 'center');
    updateCard(cards[2], next, 'side');
  }

  prevBtn.addEventListener('click', () => {
    currentIndex = (currentIndex - 1 + services.length) % services.length;
    renderServices();
  });

  nextBtn.addEventListener('click', () => {
    currentIndex = (currentIndex + 1) % services.length;
    renderServices();
  });

  // Swipe Support
  let startX = 0;
  container.addEventListener('touchstart', (e) => {
    startX = e.touches[0].clientX;
  });

  container.addEventListener('touchend', (e) => {
    const endX = e.changedTouches[0].clientX;
    const deltaX = endX - startX;

    if (deltaX > 50) {
      prevBtn.click();
    } else if (deltaX < -50) {
      nextBtn.click();
    }
  });

   // Counter animation for stats
        function animateCounters() {
    document.querySelectorAll('.stat-number').forEach(counter => {
        if (counter.dataset.animated) return;
        counter.dataset.animated = "true";

        const target = counter.getAttribute('data-target') || '0';
        console.log('Counter target:', target);
        const isK = target.toLowerCase().includes('k');
        const isPlus = target.includes('+');
        const numericValue = parseFloat(target.replace(/[^\d.]/g, ''));
        const numericTarget = isK ? numericValue * 1000 : numericValue;

        const duration = 2000; // ms
        const startTime = performance.now();

        function updateCounter(now) {
            const elapsed = now - startTime;
            let progress = Math.min(elapsed / duration, 1);
            let current = Math.floor(progress * numericTarget);

            if (isK) {
                counter.textContent = Math.floor(current / 1000) + 'k';
            } else if (isPlus) {
                counter.textContent = current + '+';
            } else {
                counter.textContent = current;
            }

            if (progress < 1) {
                requestAnimationFrame(updateCounter);
            } else {
                counter.textContent = target; // Final value with suffix
            }
        }

        requestAnimationFrame(updateCounter);
    });
}

document.addEventListener('DOMContentLoaded', function() {
    const statsSection = document.querySelector('.stats-section');
    if (!statsSection) return;

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounters();
                observer.unobserve(entry.target); // Only animate once
            }
        });
    }, { threshold: 0.1 }); // 50% visible

    observer.observe(statsSection);
});

        // Add smooth scrolling and animation effects
        document.addEventListener('DOMContentLoaded', function() {
            // Animate cards on scroll
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);

            // Initially hide cards for animation
            const cards = document.querySelectorAll('.news-card');
            cards.forEach((card, index) => {
                card.style.opacity = '0';
                card.style.transition = `opacity 0.6s ease ${index * 0.1}s, transform 0.6s ease ${index * 0.1}s`;
                observer.observe(card);
            });
        });

        // Add click tracking
        document.querySelectorAll('.news-card').forEach(card => {
            card.addEventListener('click', function() {
                // Add click animation
                this.style.transform = 'scale(0.98)';
                setTimeout(() => {
                    this.style.transform = '';
                }, 150);
            });
        });

        // Newsletter form submission
        document.querySelector('.newsletter-form').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Thank you for subscribing to our newsletter!');
            this.reset();
        });

        // Floating social icons scroll effect
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const rate = scrolled * -0.25;
            const floatingSocial = document.querySelector('.floating-social');
            if (floatingSocial) {
                floatingSocial.style.transform = `translateY(calc(-50% + ${rate}px))`;
            }
        });

        // Service carousel functionality
        document.querySelector('.carousel-prev').addEventListener('click', function() {
            console.log('Previous service');
        });

        document.querySelector('.carousel-next').addEventListener('click', function() {
            console.log('Next service');
        });

        // Intersection Observer for scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Initialize scroll animations
        document.querySelectorAll('section').forEach(section => {
            section.style.opacity = '0';
            section.style.transform = 'translateY(30px)';
            section.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
            observer.observe(section);
        });


  // INITIAL RENDER
  renderServices();
});

</script>
@endpush

   