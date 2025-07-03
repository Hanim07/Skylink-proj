@extends('layouts.master')

@section('title', 'Homepage - Sky Link IT Solutions')
@section('description', 'Explore our portfolio of successful IT projects and digital solutions delivered to clients across Ethiopia.')

@push('styles')
    <style>
        :root {
            --primary-blue: #2563eb;
            --dark-blue: #1e40af;
            --light-blue: #3b82f6;
            --teal: #0891b2;
            --light-teal: #67e8f9;
            --gray-bg: #f8f9fa;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            overflow-x: hidden;
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
            width: 42px;
            height: 42px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
            transition: transform 0.3s;
            font-size: 1rem;
        }

        .floating-social .mobile { background: #3b5998; }
        .floating-social .telegram { background: #1da1f2; }
        .floating-social .chat { background: #0077b5; }
        .floating-social a:hover {
            transform: scale(1.1);
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
            gap: 2rem;
            max-width: 1000px;
            margin: 0 auto;
        }

        .service-card {
            width: 300px;
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 8px 30px rgba(0,0,0,0.08);
            transition: opacity 0.3s ease;
            position: relative;
        }
        
.service-card.center {
            background: var(--teal);
            color: white;
            transform: scale(1.14);
            z-index: 2;
            box-shadow: 0 15px 40px rgba(8, 145, 178, 0.3);
        }

        .service-card.side {
            background: var(--light-teal);
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
            background: var(--teal);
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
            color: #2196F3;
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
            width: 100%;
            height: 250px;
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

        .product-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }

        .product-card img {
            width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center;
  border-radius: 0.5rem;
  transition: transform 0.3s ease;
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
    animation: slideProducts 30s linear infinite;
}

.products-track .product-card {
    min-width: 300px;
    margin: 0 20px;
    flex-shrink: 0;
}
.btn-view-more {
        background: linear-gradient(135deg, #3a7bd5, #00d2ff);
        color: white;
        border: none;
        padding: 12px 30px;
        font-size: 1rem;
        border-radius: 50px;
        cursor: pointer;
        transition: all 0.3s ease;
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
            margin-bottom: 15px;
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
            padding: 5rem 0;
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
        <a href="#" class="mobile"><i class="fa fa-mobile-alt"></i></a>
        <a href="#" class="telegram"><i class="fab fa-telegram"></i></a>
        <a href="#" class="chat"><i class="fa fa-comment"></i></a>
    </div>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="hero-content">
                        
                        <h1>Helping businesses succeed with the best IT services in Ethiopia</h1>
                        <p>Empowering businesses with cutting-edge technology solutions. We provide comprehensive IT services to help your business grow and thrive in the digital age.</p>
                        <a href="#services" class="hero-btn">More</a>
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
                            <div class="stat-number" data-target="15k">0</div>
                            <small>Years Experience</small>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="stat-item">
                            <div class="stat-number" data-target="80+">0</div>
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
                <img src="{{ asset('assets/images/minbertv.webp') }}" alt="Microsoft" class="partner-logo">
                <img src="{{ asset('assets/images/iman.webp') }}" alt="Google" class="partner-logo">
                <img src="{{ asset('assets/images/mirkuz.jpg') }}" alt="Zoom" class="partner-logo">
                <img src="{{ asset('assets/images/bilalul.jpg') }}" alt="Amazon" class="partner-logo">
                <img src="{{ asset('assets/images/befan.jpg') }}" alt="Facebook" class="partner-logo">
                <img src="{{ asset('assets/images/newleaf.webp') }}" alt="Oracle" class="partner-logo">
                <!-- Duplicate for seamless loop -->
                <img src="{{ asset('assets/images/minbertv.webp') }}" alt="Microsoft" class="partner-logo">
                <img src="{{ asset('assets/images/iman.webp') }}" alt="Google" class="partner-logo">
                <img src="{{ asset('assets/images/mirkuz.jpg') }}" alt="Zoom" class="partner-logo">
                <img src="{{ asset('assets/images/bilalul.jpg') }}" alt="Amazon" class="partner-logo">
                <img src="{{ asset('assets/images/befan.jpg') }}" alt="Facebook" class="partner-logo">
                <img src="{{ asset('assets/images/newleaf.webp') }}" alt="Oracle" class="partner-logo">
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
                        <h4>SERVICE 1</h4>
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
                @php
                    $newsItems = [
                        [
                            'id' => 1,
                            'image' => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                            'category' => 'Web Design',
                            'author' => 'Admin',
                            'date' => '01 Jan 2024',
                            'title' => 'How to build a website',
                            'description' => 'Building a website involves several steps, from planning and design to development and deployment.'
                        ],
                        [
                            'id' => 2,
                            'image' => 'https://images.unsplash.com/photo-1556761175-b413da4baf72?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                            'category' => 'Web Design',
                            'author' => 'Admin',
                            'date' => '01 Jan 2024',
                            'title' => 'How to build a website',
                            'description' => 'Building a website involves several steps, from planning and design to development and deployment.'
                        ],
                        [
                            'id' => 3,
                            'image' => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80',
                            'category' => 'Web Design',
                            'author' => 'Admin',
                            'date' => '01 Jan 2024',
                            'title' => 'How to build a website',
                            'description' => 'Building a website involves several steps, from planning and design to development and deployment.'
                        ]
                    ];
                @endphp
                
                @foreach($newsItems as $item)
                <div class="col-lg-4 col-md-6">
                    <article class="news-card" onclick="readMore({{ $item['id'] }})">
                        <div class="card-image">
                            <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}" loading="lazy">
                            <div class="category-badge">{{ $item['category'] }}</div>
                        </div>
                        
                        <div class="card-content">
                            <div class="card-meta">
                                <div class="meta-item">
                                    <i class="fas fa-user"></i>
                                    <span>{{ $item['author'] }}</span>
                                </div>
                                <div class="meta-item">
                                    <i class="fas fa-calendar"></i>
                                    <span>{{ $item['date'] }}</span>
                                </div>
                            </div>
                            
                            <h3 class="card-title">{{ $item['title'] }}</h3>
                            <p class="card-description">{{ $item['description'] }}</p>
                            
                            <a href="#" class="read-more" onclick="event.stopPropagation(); readMore({{ $item['id'] }})">
                                Read More
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </article>
                </div>
                @endforeach
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
            @php
                $portfolioItems = [
                    ['image' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80', 'title' => 'E-Commerce Platform', 'description' => 'Modern online shopping platform with advanced features'],
                    ['image' => 'https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80', 'title' => 'Mobile Banking App', 'description' => 'Secure and user-friendly mobile banking solution'],
                    ['image' => 'https://images.unsplash.com/photo-1551650975-87deedd944c3?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80', 'title' => 'Business Dashboard', 'description' => 'Comprehensive analytics and reporting dashboard'],
                    ['image' => 'https://images.unsplash.com/photo-1563013544-824ae1b704d3?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80', 'title' => 'Healthcare System', 'description' => 'Digital healthcare management platform'],
                    ['image' => 'https://images.unsplash.com/photo-1556075798-4825dfaaf498?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80', 'title' => 'Learning Management', 'description' => 'Online education and training platform'],
                    ['image' => 'https://images.unsplash.com/photo-1559136555-9303baea8ebd?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80', 'title' => 'Real Estate Portal', 'description' => 'Property listing and management system']
                ];
            @endphp
            
            @foreach($portfolioItems as $item)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="portfolio-item">
                    <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}">
                    <div class="portfolio-overlay">
                        <div class="portfolio-content">
                            <h5>{{ $item['title'] }}</h5>
                            <p>{{ $item['description'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
     <!-- Featured Products -->
<section class="products-section">
    <div class="container">
        <h2 class="section-title">Our Featured Products</h2>
        <div class="products-slider">
            <div class="products-track">
                @php
                    $products = [
                        ['name' => 'iPhone 14 Pro Max', 'description' => 'Latest iPhone with advanced features', 'image' => 'https://images.unsplash.com/photo-1592750475338-74b7b21085ab?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80', 'rating' => 5],
                        ['name' => 'AirPods Pro', 'description' => 'Wireless earbuds with noise cancellation', 'image' => 'https://images.unsplash.com/photo-1583394838336-acd977736f90?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80', 'rating' => 4],
                        ['name' => 'iPhone 14 Pro', 'description' => 'Professional grade smartphone', 'image' => 'https://images.unsplash.com/photo-1585060544812-6b45742d762f?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80', 'rating' => 5],
                        ['name' => 'MacBook Pro', 'description' => 'High-performance laptop for professionals', 'image' => 'https://images.unsplash.com/photo-1541807084-5c52b6b3adef?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80', 'rating' => 5],
                        ['name' => 'iPad Air', 'description' => 'Versatile tablet for work and creativity', 'image' => 'https://images.unsplash.com/photo-1544244015-0df4b3ffc6b0?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80', 'rating' => 4],
                        ['name' => 'Apple Watch', 'description' => 'Smart watch with health monitoring', 'image' => 'https://images.unsplash.com/photo-1551816230-ef5deaed4a26?ixlib=rb-4.0.3&auto=format&fit=crop&w=300&q=80', 'rating' => 4]
                    ];
                @endphp
                
                @foreach(array_merge($products, $products) as $product)
                <div class="product-card">
                    <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="img-fluid mb-3" style="height: 200px; object-fit: contain;">
                    <h5>{{ $product['name'] }}</h5>
                    <p class="text-muted">{{ $product['description'] }}</p>
                    <div class="text-warning mb-2">
                        @for($i = 1; $i <= 5; $i++)
                            <i class="fas fa-star{{ $i <= $product['rating'] ? '' : ' far' }}"></i>
                        @endfor
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="text-center mt-5">
            <button class="btn btn-view-more">
                View More Products
                <i class="fas fa-arrow-right ml-2"></i>
            </button>
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
                <div class="direction-indicator">→</div>
                <div class="carousel-track" id="carouselTrack">
                    <!-- First set of cards -->
                    <div class="testimonial-card">
                        <div class="profile-section">
                            <div class="profile-icon">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <div class="client-info">
                                <h5>Michael Anderson</h5>
                                <p class="profession">PROFESSION</p>
                            </div>
                        </div>
                        <p class="testimonial-text">
                            The Information Technology (IT) field encompasses a wide range of professions and career opportunities. IT professionals work with technology systems and software to design, develop, manage, and maintain various aspects of computing and information systems.
                        </p>
                    </div>

                    <div class="testimonial-card">
                        <div class="profile-section">
                            <div class="profile-icon">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <div class="client-info">
                                <h5>Emily Davis</h5>
                                <p class="profession">BUSINESS WOMEN</p>
                            </div>
                        </div>
                        <p class="testimonial-text">
                            "Business women" refers to women who are actively engaged in various aspects of the business world. This can include women who are entrepreneurs, business owners, corporate executives, managers, professionals, or employees in various industries.
                        </p>
                    </div>

                    <div class="testimonial-card">
                        <div class="profile-section">
                            <div class="profile-icon">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <div class="client-info">
                                <h5>James Wilson</h5>
                                <p class="profession">APPLICATION DEVELOPMENT</p>
                            </div>
                        </div>
                        <p class="testimonial-text">
                            Application development refers to the process of creating software applications for various platforms and devices, such as mobile phones, desktop computers, web browsers, and more.
                        </p>
                    </div>

                    <!-- Duplicate set for seamless loop -->
                    <div class="testimonial-card">
                        <div class="profile-section">
                            <div class="profile-icon">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <div class="client-info">
                                <h5>Michael Anderson</h5>
                                <p class="profession">PROFESSION</p>
                            </div>
                        </div>
                        <p class="testimonial-text">
                            The Information Technology (IT) field encompasses a wide range of professions and career opportunities. IT professionals work with technology systems and software to design, develop, manage, and maintain various aspects of computing and information systems.
                        </p>
                    </div>

                    <div class="testimonial-card">
                        <div class="profile-section">
                            <div class="profile-icon">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <div class="client-info">
                                <h5>Emily Davis</h5>
                                <p class="profession">BUSINESS WOMEN</p>
                            </div>
                        </div>
                        <p class="testimonial-text">
                            "Business women" refers to women who are actively engaged in various aspects of the business world. This can include women who are entrepreneurs, business owners, corporate executives, managers, professionals, or employees in various industries.
                        </p>
                    </div>

                    <div class="testimonial-card">
                        <div class="profile-section">
                            <div class="profile-icon">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <div class="client-info">
                                <h5>James Wilson</h5>
                                <p class="profession">APPLICATION DEVELOPMENT</p>
                            </div>
                        </div>
                        <p class="testimonial-text">
                            Application development refers to the process of creating software applications for various platforms and devices, such as mobile phones, desktop computers, web browsers, and more.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Newsletter -->
    <section class="newsletter">
        <div class="container">
            <h2>Subscribe for our latest update</h2>
            <p>Stay informed about our latest services, technology trends, and industry insights delivered directly to your inbox</p>
            <form class="newsletter-form">
                <input type="email" class="newsletter-input" placeholder="Enter your email address" required>
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


// JavaScript for infinite carousel with smooth transitions and swipe support (autoplay removed, bounce removed)
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

// Swipe support
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

// Initial render
document.addEventListener('DOMContentLoaded', renderServices);

    </script>

@endpush
