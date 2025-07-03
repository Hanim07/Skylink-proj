<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sky Link - IT Services in Ethiopia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
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

        /* Header Styles */
        .header {
            background: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.08);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            padding: 0.8rem 0;
        }

        .header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            font-size: 1.4rem;
            font-weight: 700;
            color: var(--primary-blue);
        }

        .logo i {
            margin-right: 0.5rem;
            font-size: 1.6rem;
        }

        .nav-menu {
            display: flex;
            list-style: none;
            gap: 2.5rem;
            margin: 0;
        }

        .nav-menu a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            font-size: 0.95rem;
            transition: color 0.3s;
        }

        .nav-menu a:hover {
            color: var(--primary-blue);
        }

        .header-contact {
            display: flex;
            align-items: center;
            gap: 1.5rem;
            font-size: 0.8rem;
            color: #666;
        }

        .header-contact span {
            display: flex;
            align-items: center;
            gap: 0.4rem;
        }

        .header-contact i {
            font-size: 0.75rem;
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

        .floating-social .facebook { background: #3b5998; }
        .floating-social .twitter { background: #1da1f2; }
        .floating-social .linkedin { background: #0077b5; }
        .floating-social .instagram { background: #e4405f; }

        .floating-social a:hover {
            transform: scale(1.1);
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
            margin-top: 70px;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('https://hebbkx1anhila5yf.public.blob.vercel-storage.com/homepage%20%281%29.png-fADUe73kcrMRZnpLvfrvNarYdHFqpK.jpeg') center/cover;
            opacity: 0.12;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            color: white;
            max-width: 600px;
        }

        .hero h1 {
            font-size: 3.4rem;
            font-weight: 700;
            margin-bottom: 1.8rem;
            line-height: 1.15;
        }

        .hero p {
            font-size: 1.1rem;
            margin-bottom: 2.5rem;
            opacity: 0.92;
            line-height: 1.6;
        }

        .hero-btn {
            background: white;
            color: var(--primary-blue);
            padding: 0.9rem 2.2rem;
            border: none;
            border-radius: 6px;
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
        .company-overview {
            background: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%);
            color: white;
            padding: 5rem 0;
        }

        .company-overview h2 {
            font-size: 2.4rem;
            font-weight: 600;
            margin-bottom: 2rem;
        }

        .company-overview .description {
            font-size: 1rem;
            opacity: 0.9;
            line-height: 1.8;
            margin-bottom: 1.2rem;
        }

        .stats-container {
            display: flex;
            justify-content: space-around;
            align-items: center;
            margin-top: 3rem;
        }

        .stat-item {
            text-align: center;
            position: relative;
        }

        .stat-item:not(:last-child)::after {
            content: '';
            position: absolute;
            right: -60px;
            top: 50%;
            transform: translateY(-50%);
            width: 1px;
            height: 80px;
            background: rgba(255,255,255,0.25);
        }

        .stat-number {
            font-size: 3.2rem;
            font-weight: 700;
            display: block;
            margin-bottom: 0.5rem;
        }

        .stat-label {
            font-size: 0.95rem;
            opacity: 0.85;
        }

        /* Trusted Partners */
        .trusted-partners {
            padding: 4rem 0;
            background: var(--gray-bg);
        }

        .trusted-partners h3 {
            text-align: center;
            font-size: 0.9rem;
            font-weight: 600;
            color: #666;
            margin-bottom: 2.5rem;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .partners-container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 5rem;
        }

        .partner-logo {
            height: 45px;
            opacity: 0.6;
            transition: opacity 0.3s;
            filter: grayscale(100%);
        }

        .partner-logo:hover {
            opacity: 1;
            filter: grayscale(0%);
        }

        /* Services Section */
        .services {
            padding: 6rem 0;
            background: var(--gray-bg);
        }

        .services h2 {
            text-align: center;
            font-size: 2.4rem;
            font-weight: 600;
            margin-bottom: 4rem;
            color: #333;
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
            transition: all 0.3s;
            position: relative;
        }

        .service-card.center {
            background: var(--teal);
            color: white;
            transform: scale(1.08);
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
            transform: translateY(-50%);
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
            transform: translateY(-50%) scale(1.1);
        }

        .carousel-prev {
            left: -80px;
        }

        .carousel-next {
            right: -80px;
        }

        /* Latest News */
        .latest-news {
            padding: 6rem 0;
            background: white;
        }

        .latest-news h2 {
            text-align: center;
            font-size: 2.4rem;
            font-weight: 600;
            margin-bottom: 4rem;
            color: #333;
        }

        .news-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 8px 30px rgba(0,0,0,0.08);
            transition: transform 0.3s;
            margin-bottom: 2rem;
        }

        .news-card:hover {
            transform: translateY(-8px);
        }

        .news-image {
            height: 220px;
            background: url('https://hebbkx1anhila5yf.public.blob.vercel-storage.com/homepage%20%281%29.png-fADUe73kcrMRZnpLvfrvNarYdHFqpK.jpeg') center/cover;
            position: relative;
        }

        .news-content {
            padding: 2rem;
        }

        .news-date {
            color: var(--teal);
            font-size: 0.85rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .news-content h5 {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: #333;
        }

        .news-content p {
            font-size: 0.9rem;
            color: #666;
            line-height: 1.7;
        }

        /* Featured Portfolio */
        .featured-portfolio {
            padding: 6rem 0;
            background: white;
        }

        .featured-portfolio h2 {
            text-align: center;
            font-size: 2.4rem;
            font-weight: 600;
            margin-bottom: 4rem;
            color: #333;
        }

        .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.5rem;
            max-width: 1000px;
            margin: 0 auto;
        }

        .portfolio-item {
            aspect-ratio: 1;
            border-radius: 20px;
            overflow: hidden;
            position: relative;
            cursor: pointer;
            transition: transform 0.3s;
        }

        .portfolio-item:hover {
            transform: scale(1.03);
        }

        .portfolio-item:nth-child(1) { 
            background: linear-gradient(135deg, #10b981, #059669);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 2.5rem;
        }
        .portfolio-item:nth-child(2) { background: url('https://hebbkx1anhila5yf.public.blob.vercel-storage.com/homepage%20%281%29.png-fADUe73kcrMRZnpLvfrvNarYdHFqpK.jpeg') center/cover; }
        .portfolio-item:nth-child(3) { background: url('https://hebbkx1anhila5yf.public.blob.vercel-storage.com/homepage%20%281%29.png-fADUe73kcrMRZnpLvfrvNarYdHFqpK.jpeg') center/cover; }
        .portfolio-item:nth-child(4) { background: url('https://hebbkx1anhila5yf.public.blob.vercel-storage.com/homepage%20%281%29.png-fADUe73kcrMRZnpLvfrvNarYdHFqpK.jpeg') center/cover; }
        .portfolio-item:nth-child(5) { 
            background: linear-gradient(135deg, #f59e0b, #d97706);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 2.5rem;
        }
        .portfolio-item:nth-child(6) { background: url('https://hebbkx1anhila5yf.public.blob.vercel-storage.com/homepage%20%281%29.png-fADUe73kcrMRZnpLvfrvNarYdHFqpK.jpeg') center/cover; }

        /* Featured Products */
        .featured-products {
            padding: 6rem 0;
            background: var(--gray-bg);
        }

        .featured-products h2 {
            text-align: center;
            font-size: 2.4rem;
            font-weight: 600;
            margin-bottom: 4rem;
            color: #333;
        }

        .product-card {
            background: white;
            border-radius: 20px;
            padding: 2.5rem 2rem;
            text-align: center;
            transition: transform 0.3s;
            margin-bottom: 2rem;
            box-shadow: 0 8px 30px rgba(0,0,0,0.08);
        }

        .product-card:hover {
            transform: translateY(-8px);
        }

        .product-image {
            height: 220px;
            background: #f8f9fa;
            border-radius: 15px;
            margin-bottom: 2rem;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .product-image i {
            font-size: 4.5rem;
        }

        .product-card:nth-child(1) .product-image i { color: #e879f9; }
        .product-card:nth-child(2) .product-image i { color: #d1d5db; }
        .product-card:nth-child(3) .product-image i { color: #1f2937; }

        .product-title {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 1.2rem;
            color: #333;
            line-height: 1.4;
        }

        .product-rating {
            color: #fbbf24;
            margin-bottom: 1.2rem;
            font-size: 1.1rem;
        }

        .product-description {
            font-size: 0.9rem;
            color: #666;
            line-height: 1.6;
        }

        /* Client Testimonials */
        .client-testimonials {
            padding: 6rem 0;
            background: white;
        }

        .client-testimonials h2 {
            text-align: center;
            font-size: 2.4rem;
            font-weight: 600;
            margin-bottom: 4rem;
            color: #333;
            line-height: 1.3;
        }

        .testimonial-card {
            background: #f8f9fa;
            border-radius: 20px;
            padding: 2.5rem;
            box-shadow: 0 8px 30px rgba(0,0,0,0.08);
            margin-bottom: 2rem;
            transition: transform 0.3s;
        }

        .testimonial-card:hover {
            transform: translateY(-8px);
        }

        .testimonial-text {
            font-size: 0.95rem;
            line-height: 1.8;
            color: #555;
            margin-bottom: 2rem;
            font-style: italic;
        }

        .client-info {
            display: flex;
            align-items: center;
        }

        .client-avatar {
            width: 55px;
            height: 55px;
            border-radius: 50%;
            background: var(--primary-blue);
            margin-right: 1.2rem;
            flex-shrink: 0;
        }

        .client-details h6 {
            font-size: 1rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 0.3rem;
        }

        .client-details span {
            font-size: 0.85rem;
            color: #666;
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

        /* Footer */
        .footer {
            background: #1f2937;
            color: white;
            padding: 4rem 0 1.5rem;
        }

        .footer-content {
            display: grid;
            grid-template-columns: 2.5fr 1fr 1fr 1.5fr;
            gap: 4rem;
            margin-bottom: 3rem;
        }

        .footer-section h4 {
            margin-bottom: 2rem;
            color: var(--light-blue);
            font-size: 1.1rem;
            font-weight: 600;
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section ul li {
            margin-bottom: 1rem;
        }

        .footer-section ul li a {
            color: #d1d5db;
            text-decoration: none;
            transition: color 0.3s;
            font-size: 0.9rem;
        }

        .footer-section ul li a:hover {
            color: white;
        }

        .footer-section p {
            color: #d1d5db;
            font-size: 0.9rem;
            line-height: 1.7;
        }

        .footer-bottom {
            border-top: 1px solid #374151;
            padding-top: 2rem;
            text-align: center;
            color: #9ca3af;
            font-size: 0.85rem;
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
            
            .footer-content {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="logo">
                <i class="fas fa-link"></i>
                Sky Link
            </div>
            <nav>
                <ul class="nav-menu">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#portfolio">Portfolio</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
            <div class="header-contact">
                <span><i class="fas fa-phone"></i> +251 911 23 45 67</span>
                <span><i class="fas fa-envelope"></i> info@skylink.et</span>
            </div>
        </div>
    </header>

    <!-- Floating Social Icons -->
    <div class="floating-social">
        <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
        <a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
        <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
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
    <section class="company-overview">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h2>Company overview</h2>
                    <p class="description">Sky Link is a leading IT services company in Ethiopia, dedicated to providing innovative technology solutions that drive business success. With over 15 years of experience in the industry, we have established ourselves as a trusted partner for businesses of all sizes.</p>
                    <p class="description">Our comprehensive range of services includes web development, mobile applications, cloud solutions, and IT consulting. We pride ourselves on delivering high-quality solutions that meet our clients' specific needs and help them achieve their business objectives through innovative technology implementations.</p>
                </div>
                <div class="col-lg-4">
                    <div class="stats-container">
                        <div class="stat-item">
                            <span class="stat-number">15+</span>
                            <span class="stat-label">Years Experience</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">84k</span>
                            <span class="stat-label">Happy Clients</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">600+</span>
                            <span class="stat-label">Projects Completed</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Trusted Partners -->
    <section class="trusted-partners">
        <div class="container">
            <h3>TRUSTED PARTNERS</h3>
            <div class="partners-container">
                <img src="/api/placeholder/120/45" alt="Microsoft" class="partner-logo">
                <img src="/api/placeholder/120/45" alt="Google Drive" class="partner-logo">
                <img src="/api/placeholder/120/45" alt="Zoom" class="partner-logo">
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services" id="services">
        <div class="container">
            <h2>Our Services</h2>
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
    <section class="latest-news">
        <div class="container">
            <h2>Latest News</h2>
            <div class="row">
                <div class="col-lg-4">
                    <div class="news-card">
                        <div class="news-image"></div>
                        <div class="news-content">
                            <div class="news-date">Dec 15, 2024</div>
                            <h5>How to build a website</h5>
                            <p>Learn the fundamentals of building modern websites with the latest technologies and best practices for optimal performance and user engagement.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="news-card">
                        <div class="news-image"></div>
                        <div class="news-content">
                            <div class="news-date">Dec 12, 2024</div>
                            <h5>How to build a website</h5>
                            <p>Learn the fundamentals of building modern websites with the latest technologies and best practices for optimal performance and user engagement.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="news-card">
                        <div class="news-image"></div>
                        <div class="news-content">
                            <div class="news-date">Dec 10, 2024</div>
                            <h5>How to build a website</h5>
                            <p>Learn the fundamentals of building modern websites with the latest technologies and best practices for optimal performance and user engagement.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Portfolio -->
    <section class="featured-portfolio" id="portfolio">
        <div class="container">
            <h2>Featured Portfolio</h2>
            <div class="portfolio-grid">
                <div class="portfolio-item">
                    <i class="fas fa-chart-line"></i>
                </div>
                <div class="portfolio-item"></div>
                <div class="portfolio-item"></div>
                <div class="portfolio-item"></div>
                <div class="portfolio-item">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <div class="portfolio-item"></div>
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="featured-products">
        <div class="container">
            <h2>Our Featured Products</h2>
            <div class="row">
                <div class="col-lg-4">
                    <div class="product-card">
                        <div class="product-image">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <div class="product-title">iPhone 15 Pro Max with Dynamic Island</div>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="product-description">Latest iPhone with advanced features and Dynamic Island technology for enhanced user experience</div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="product-card">
                        <div class="product-image">
                            <i class="fas fa-headphones"></i>
                        </div>
                        <div class="product-title">Wireless Headset</div>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="product-description">Premium wireless audio experience with advanced noise cancellation technology</div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="product-card">
                        <div class="product-image">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <div class="product-title">iPhone 15 Pro Max with Dynamic Island</div>
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="product-description">Latest iPhone with advanced features and Dynamic Island technology for enhanced user experience</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Client Testimonials -->
    <section class="client-testimonials">
        <div class="container">
            <h2>What Our Clients Say About<br>Our Digital Services</h2>
            <div class="row">
                <div class="col-lg-4">
                    <div class="testimonial-card">
                        <div class="testimonial-text">
                            "Sky Link has been instrumental in transforming our business operations through their innovative IT solutions. Their expertise and dedication to customer service is truly unmatched in the industry. We've experienced significant improvements in our efficiency and overall productivity."
                        </div>
                        <div class="client-info">
                            <div class="client-avatar"></div>
                            <div class="client-details">
                                <h6>Abebe Kebede</h6>
                                <span>CEO, Tech Solutions Ethiopia</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-card">
                        <div class="testimonial-text">
                            "Working with Sky Link has been a complete game-changer for our company's digital transformation journey. Their innovative approach to problem-solving and unwavering commitment to delivering exceptional quality results has consistently exceeded our expectations."
                        </div>
                        <div class="client-info">
                            <div class="client-avatar"></div>
                            <div class="client-details">
                                <h6>Meron Tadesse</h6>
                                <span>CTO, Digital Innovation Corp</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-card">
                        <div class="testimonial-text">
                            "The professional team at Sky Link demonstrates exceptional knowledge and expertise in every project they undertake. They are always available when we need support and their comprehensive solutions have helped us streamline our processes effectively."
                        </div>
                        <div class="client-info">
                            <div class="client-avatar"></div>
                            <div class="client-details">
                                <h6>Daniel Haile</h6>
                                <span>Operations Manager, Business Solutions Ltd</span>
                            </div>
                        </div>
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

    <!-- Footer -->
    <footer class="footer" id="contact">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <div class="logo mb-4">
                        <i class="fas fa-link"></i>
                        Sky Link
                    </div>
                    <p>Leading IT services company in Ethiopia, providing innovative technology solutions that drive business success and enable digital transformation for organizations of all sizes across various industries.</p>
                </div>
                <div class="footer-section">
                    <h4>Page Link</h4>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Services</h4>
                    <ul>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">Mobile Applications</a></li>
                        <li><a href="#">Cloud Solutions</a></li>
                        <li><a href="#">IT Consulting</a></li>
                        <li><a href="#">Digital Marketing</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Contact</h4>
                    <ul>
                        <li><i class="fas fa-map-marker-alt"></i> Addis Ababa, Ethiopia</li>
                        <li><i class="fas fa-phone"></i> +251 911 23 45 67</li>
                        <li><i class="fas fa-envelope"></i> info@skylink.et</li>
                        <li><i class="fas fa-globe"></i> www.skylink.et</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Sky Link. All rights reserved. | Powered by Sky Link Technology</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
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

        // Newsletter form submission
        document.querySelector('.newsletter-form').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Thank you for subscribing to our newsletter!');
            this.reset();
        });

        // Floating social icons scroll effect
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const rate = scrolled * -0.15;
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

        // Header scroll effect
        window.addEventListener('scroll', function() {
            const header = document.querySelector('.header');
            if (window.scrollY > 100) {
                header.style.background = 'rgba(255, 255, 255, 0.95)';
                header.style.backdropFilter = 'blur(10px)';
            } else {
                header.style.background = 'white';
                header.style.backdropFilter = 'none';
            }
        });
    </script>
</body>
</html>
