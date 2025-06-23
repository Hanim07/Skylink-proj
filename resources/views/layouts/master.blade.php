<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Sky Link - IT Services in Ethiopia')</title>
    <meta name="description" content="@yield('description', 'Leading IT services company in Ethiopia, providing innovative technology solutions for businesses.')">
    
    <!-- Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
        
    <!-- Custom Styles -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Top Bar */
    .top-bar {
        background: #f8f9fa;
        padding: 8px 0;
        font-size: 13px;
        color: #666;
        border-bottom: 1px solid #e9ecef;
        transition: all 0.3s ease;
    }

    .top-bar.hidden {
        transform: translateY(-100%);
        opacity: 0;
    }

    .top-bar-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .top-bar-left {
        display: flex;
        align-items: center;
        gap: 30px;
    }

    .top-bar-item {
        display: flex;
        align-items: center;
        gap: 8px;
        color: #666;
    }

    .top-bar-item i {
        color: #3B82F6;
        font-size: 12px;
    }

    .top-bar-right {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .social-icon {
        color: #666;
        font-size: 14px;
        transition: all 0.3s ease;
        text-decoration: none;
    }

    .social-icon:hover {
        color: #3B82F6;
    }

    /* Main Navbar */
    .navbar-custom {
        background: white;
        padding: 15px 0;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        position: sticky;
        top: 0;
        z-index: 1000;
        transition: all 0.3s ease;
    }

    .navbar-custom.scrolled {
        padding: 10px 0;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
    }

    .navbar-brand {
        display: flex;
        align-items: center;
        text-decoration: none;
        color: #333 !important;
    }

    .navbar-brand:hover {
        color: #333 !important;
    }

    .logo-img {
    width: 50px;
    height: 50px;
    object-fit: contain;
    border-radius: 10px;
}

    .logo-text {
        display: flex;
        flex-direction: column;
        line-height: 1;
    }

    .logo-main {
        font-size: 24px;
        font-weight: 700;
        color: #333;
    }

    .logo-sub {
        font-size: 10px;
        font-weight: 400;
        color: #666;
        letter-spacing: 2px;
        text-transform: uppercase;
    }

    .navbar-nav {
        display: flex;
        align-items: center;
        gap: 40px;
    }

    .nav-link {
        color: #333 !important;
        font-weight: 500;
        font-size: 15px;
        text-decoration: none;
        position: relative;
        padding: 8px 0;
        transition: all 0.3s ease;
    }

    .nav-link:hover {
        color: #3B82F6 !important;
    }

    .nav-link.active {
        color: #333 !important;
        font-weight: 600;
    }

    .nav-link.active::after {
        content: '';
        position: absolute;
        bottom: -5px;
        left: 0;
        width: 100%;
        height: 2px;
        background: #3B82F6;
    }

    /* Apple-style Full Width Dropdown */
    .nav-item.mega-dropdown {
        position: static;
    }

    .mega-dropdown-menu {
        position: absolute;
        top: 100%;
        left: 0;
        width: 100vw;
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(20px);
        border: none;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
        padding: 40px 0;
        opacity: 0;
        visibility: hidden;
        transform: translateY(-20px);
        transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        z-index: 999;
    }

    .mega-dropdown:hover .mega-dropdown-menu {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }

    .mega-dropdown-content {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .mega-dropdown-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 40px;
    }

    .mega-dropdown-section h6 {
        font-size: 14px;
        font-weight: 600;
        color: #666;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 20px;
    }

    .mega-dropdown-item {
        display: block;
        padding: 12px 0;
        color: #333;
        text-decoration: none;
        font-size: 16px;
        font-weight: 500;
        transition: all 0.3s ease;
        border-bottom: 1px solid transparent;
    }

    .mega-dropdown-item:hover {
        color: #3B82F6;
        transform: translateX(10px);
        border-bottom-color: #3B82F6;
    }

    .mega-dropdown-item i {
        margin-right: 10px;
        width: 20px;
        color: #3B82F6;
    }

    .btn-get-started {
        background: linear-gradient(135deg, #3B82F6, #1E40AF);
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

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #1e40af 0%, #3b82f6 50%, #06b6d4 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
            margin-top: 80px;
        }

        .hero-bg {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 800"><defs><pattern id="tech" patternUnits="userSpaceOnUse" width="100" height="100"><circle cx="50" cy="50" r="2" fill="white" opacity="0.1"/></pattern></defs><rect width="100%" height="100%" fill="url(%23tech)"/></svg>') center/cover;
            opacity: 0.1;
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 600px;
            color: white;
        }

        .hero-content h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            line-height: 1.2;
        }

        .hero-content p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        /* Company Overview */
        .company-overview {
            padding: 5rem 0;
            background: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%);
            color: white;
        }

        .overview-content {
            max-width: 600px;
            margin-bottom: 3rem;
        }

        .overview-content h2 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
        }

        .overview-content p {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
        }

        .stat-item {
            text-align: center;
            padding: 2rem;
            border-left: 2px solid rgba(255,255,255,0.3);
        }

        .stat-item:first-child {
            border-left: none;
        }

        .stat-item h3 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .stat-item p {
            font-size: 1.1rem;
            opacity: 0.8;
        }

        /* Partners */
        .partners {
            padding: 3rem 0;
            background: #f8fafc;
            text-align: center;
        }

        .partners h3 {
            color: #64748b;
            font-size: 0.9rem;
            font-weight: 600;
            letter-spacing: 0.1em;
            margin-bottom: 2rem;
        }

        .partners-logos {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 3rem;
            flex-wrap: wrap;
        }

        .partner-logo {
            height: 40px;
            opacity: 0.6;
            transition: opacity 0.3s;
        }

        .partner-logo:hover {
            opacity: 1;
        }

        /* Services */
        .services {
            padding: 5rem 0;
            background: #f8fafc;
        }

        .services h2 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #1e293b;
        }

        .services-carousel {
            position: relative;
            display: flex;
            align-items: center;
            gap: 2rem;
        }

        .carousel-btn {
            background: #2563eb;
            color: white;
            border: none;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.3s;
        }

        .carousel-btn:hover {
            background: #1d4ed8;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            flex: 1;
        }

        .service-card {
            background: white;
            padding: 2rem;
            border-radius: 1rem;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }

        .service-card:hover {
            transform: translateY(-5px);
        }

        .service-card.featured {
            background: #0891b2;
            color: white;
            transform: scale(1.05);
        }

        .service-icon {
            width: 80px;
            height: 80px;
            background: #e0f2fe;
            border-radius: 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem;
            font-size: 2rem;
            color: #0891b2;
        }

        .service-card.featured .service-icon {
            background: rgba(255,255,255,0.2);
            color: white;
        }

        .service-card h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .service-card p {
            color: #64748b;
            line-height: 1.6;
        }

        .service-card.featured p {
            color: rgba(255,255,255,0.9);
        }

        /* News */
        .news {
            padding: 5rem 0;
        }

        .news h2 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #1e293b;
        }

        .news-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
        }

        .news-card {
            background: white;
            border-radius: 1rem;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }

        .news-card:hover {
            transform: translateY(-5px);
        }

        .news-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .news-content {
            padding: 1.5rem;
        }

        .news-date {
            color: #0891b2;
            font-size: 0.9rem;
            font-weight: 500;
        }

        .news-content h3 {
            font-size: 1.3rem;
            margin: 0.5rem 0;
            color: #1e293b;
        }

        .news-content p {
            color: #64748b;
            line-height: 1.6;
        }

        /* Portfolio */
        .portfolio {
            padding: 5rem 0;
            background: #f8fafc;
        }

        .portfolio h2 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #1e293b;
        }

        .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 1.5rem;
        }

        .portfolio-item {
            border-radius: 1rem;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }

        .portfolio-item:hover {
            transform: scale(1.05);
        }

        .portfolio-item img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        /* Products */
        .products {
            padding: 5rem 0;
            text-align: center;
        }

        .products h2 {
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #1e293b;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .product-card {
            background: white;
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }

        .product-card:hover {
            transform: translateY(-5px);
        }

        .product-card img {
            width: 150px;
            height: 200px;
            object-fit: cover;
            margin-bottom: 1rem;
        }

        .product-card h3 {
            font-size: 1.2rem;
            margin-bottom: 1rem;
            color: #1e293b;
        }

        .rating {
            color: #fbbf24;
        }

        /* Testimonials */
        .testimonials {
            padding: 5rem 0;
            background: #f8fafc;
        }

        .testimonials h2 {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #1e293b;
        }

        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
        }

        .testimonial-card {
            background: white;
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .testimonial-header {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1rem;
        }

        .testimonial-header img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
        }

        .testimonial-header h4 {
            color: #1e293b;
            margin-bottom: 0.25rem;
        }

        .testimonial-header span {
            color: #64748b;
            font-size: 0.9rem;
        }

        .testimonial-card p {
            color: #64748b;
            line-height: 1.6;
            font-style: italic;
        }

        /* Newsletter */
        .newsletter {
            padding: 4rem 0;
            background: linear-gradient(135deg, #0891b2 0%, #06b6d4 100%);
            text-align: center;
        }

        .newsletter-content h2 {
            color: white;
            font-size: 2.5rem;
            margin-bottom: 2rem;
        }

        /* Footer */
        .footer {
            background-color: #f8f9fa;
            padding: 60px 0 30px;
        }

        .footer h5 {
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
        }

        .footer ul {
            list-style: none;
            padding: 0;
        }

        .footer ul li {
            margin-bottom: 10px;
        }

        .footer ul li a {
            color: #666;
            text-decoration: none;
        }

        .footer ul li a:hover {
            color: var(--primary-blue);
        }

        .footer-bottom {
            border-top: 1px solid #ddd;
            padding-top: 20px;
            margin-top: 40px;
            text-align: center;
            color: #666;
        }

        .social-footer {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-footer a {
            color: #666;
            font-size: 18px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .nav {
                display: none;
            }
            
            .hero-content h1 {
                font-size: 2.5rem;
            }
            
            .services-grid {
                grid-template-columns: 1fr;
            }
            
            .carousel-btn {
                display: none;
            }
            
            .stats {
                grid-template-columns: 1fr;
            }
            
            .stat-item {
                border-left: none;
                border-top: 2px solid rgba(255,255,255,0.3);
            }
            
            .stat-item:first-child {
                border-top: none;
            }
            
            .partners-logos {
                gap: 1.5rem;
            }
            
            .news-grid,
            .portfolio-grid,
            .products-grid,
            .testimonials-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 0 15px;
            }
            
            .hero-content h1 {
                font-size: 2rem;
            }
            
            .hero-content p {
                font-size: 1rem;
            }
            
            .overview-content h2,
            .services h2,
            .news h2,
            .portfolio h2,
            .products h2,
            .testimonials h2,
            .newsletter-content h2 {
                font-size: 2rem;
            }
        }

        @yield('additional-styles')
    </style>
    
    @stack('styles')
</head>
<body>
    <!-- Top Bar -->
<div class="top-bar" id="topBar">
    <div class="container">
        <div class="top-bar-content">
            <div class="top-bar-left">
                <div class="top-bar-item">
                    <i class="far fa-clock"></i>
                    <span>Mon - Fri 08:00 - 18:00 / Sunday 8:00 - 14:00</span>
                </div>
                <div class="top-bar-item">
                    <i class="fas fa-phone"></i>
                    <span>+90 (555) 123 45 67</span>
                </div>
                <div class="top-bar-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Addis Ababa, Bole Tropical Mall No. 217</span>
                </div>
            </div>
            <div class="top-bar-right">
                <a href="#" class="social-icon"><i class="fab fa-facebook"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-whatsapp"></i></a>
            </div>
        </div>
    </div>
</div>

<!-- Main Navbar -->
        <nav class="navbar navbar-expand-lg navbar-custom" id="mainNavbar">
            <div class="container">
                <a href="/" class="d-flex align-items-center text-decoration-none">
                    <img src="{{ asset('assets/images/skylink-48a05ef2.svg') }}" alt="Skylink Logo" class="logo-img me-2">
                    
                </a>

                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About Us</a>
                        </li>
                        <li class="nav-item mega-dropdown">
                            <a class="nav-link" href="#services">Services</a>
                            <div class="mega-dropdown-menu">
                                <div class="mega-dropdown-content">
                                    <div class="mega-dropdown-grid">
                                        <div class="mega-dropdown-section">
                                            <h6>Web Development</h6>
                                            <a href="#" class="mega-dropdown-item">
                                                <i class="fas fa-code"></i>Frontend Development
                                            </a>
                                            <a href="#" class="mega-dropdown-item">
                                                <i class="fas fa-server"></i>Backend Development
                                            </a>
                                            <a href="#" class="mega-dropdown-item">
                                                <i class="fas fa-layer-group"></i>Full Stack Development
                                            </a>
                                            <a href="#" class="mega-dropdown-item">
                                                <i class="fas fa-shopping-cart"></i>E-commerce Solutions
                                            </a>
                                        </div>
                                        <div class="mega-dropdown-section">
                                            <h6>Mobile Development</h6>
                                            <a href="#" class="mega-dropdown-item">
                                                <i class="fab fa-apple"></i>iOS Development
                                            </a>
                                            <a href="#" class="mega-dropdown-item">
                                                <i class="fab fa-android"></i>Android Development
                                            </a>
                                            <a href="#" class="mega-dropdown-item">
                                                <i class="fas fa-mobile-alt"></i>Cross-Platform Apps
                                            </a>
                                            <a href="#" class="mega-dropdown-item">
                                                <i class="fas fa-tablet-alt"></i>Tablet Applications
                                            </a>
                                        </div>
                                        <div class="mega-dropdown-section">
                                            <h6>Design Services</h6>
                                            <a href="#" class="mega-dropdown-item">
                                                <i class="fas fa-paint-brush"></i>UI/UX Design
                                            </a>
                                            <a href="#" class="mega-dropdown-item">
                                                <i class="fas fa-palette"></i>Graphic Design
                                            </a>
                                            <a href="#" class="mega-dropdown-item">
                                                <i class="fas fa-drafting-compass"></i>Prototyping
                                            </a>
                                            <a href="#" class="mega-dropdown-item">
                                                <i class="fas fa-eye"></i>Brand Identity
                                            </a>
                                        </div>
                                        <div class="mega-dropdown-section">
                                            <h6>Digital Marketing</h6>
                                            <a href="#" class="mega-dropdown-item">
                                                <i class="fas fa-search"></i>SEO Services
                                            </a>
                                            <a href="#" class="mega-dropdown-item">
                                                <i class="fas fa-bullhorn"></i>Social Media Marketing
                                            </a>
                                            <a href="#" class="mega-dropdown-item">
                                                <i class="fas fa-envelope"></i>Email Marketing
                                            </a>
                                            <a href="#" class="mega-dropdown-item">
                                                <i class="fas fa-chart-line"></i>Analytics & Reporting
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item mega-dropdown">
                            <a class="nav-link" href="#products">Products</a>
                            <div class="mega-dropdown-menu">
                                <div class="mega-dropdown-content">
                                    <div class="mega-dropdown-grid">
                                        <div class="mega-dropdown-section">
                                            <h6>Web Applications</h6>
                                            <a href="#" class="mega-dropdown-item">
                                                <i class="fas fa-globe"></i>Business Websites
                                            </a>
                                            <a href="#" class="mega-dropdown-item">
                                                <i class="fas fa-store"></i>E-commerce Platforms
                                            </a>
                                            <a href="#" class="mega-dropdown-item">
                                                <i class="fas fa-blog"></i>Content Management
                                            </a>
                                            <a href="#" class="mega-dropdown-item">
                                                <i class="fas fa-users"></i>Social Platforms
                                            </a>
                                        </div>
                                        <div class="mega-dropdown-section">
                                            <h6>Mobile Apps</h6>
                                            <a href="#" class="mega-dropdown-item">
                                                <i class="fas fa-mobile"></i>Native iOS Apps
                                            </a>
                                            <a href="#" class="mega-dropdown-item">
                                                <i class="fab fa-android"></i>Native Android Apps
                                            </a>
                                            <a href="#" class="mega-dropdown-item">
                                                <i class="fas fa-sync"></i>Hybrid Applications
                                            </a>
                                            <a href="#" class="mega-dropdown-item">
                                                <i class="fas fa-gamepad"></i>Gaming Apps
                                            </a>
                                        </div>
                                        <div class="mega-dropdown-section">
                                            <h6>Enterprise Solutions</h6>
                                            <a href="#" class="mega-dropdown-item">
                                                <i class="fas fa-building"></i>CRM Systems
                                            </a>
                                            <a href="#" class="mega-dropdown-item">
                                                <i class="fas fa-chart-bar"></i>Analytics Dashboards
                                            </a>
                                            <a href="#" class="mega-dropdown-item">
                                                <i class="fas fa-cogs"></i>Workflow Automation
                                            </a>
                                            <a href="#" class="mega-dropdown-item">
                                                <i class="fas fa-database"></i>Data Management
                                            </a>
                                        </div>
                                        <div class="mega-dropdown-section">
                                            <h6>API & Integration</h6>
                                            <a href="#" class="mega-dropdown-item">
                                                <i class="fas fa-plug"></i>REST APIs
                                            </a>
                                            <a href="#" class="mega-dropdown-item">
                                                <i class="fas fa-link"></i>Third-party Integration
                                            </a>
                                            <a href="#" class="mega-dropdown-item">
                                                <i class="fas fa-cloud"></i>Cloud Services
                                            </a>
                                            <a href="#" class="mega-dropdown-item">
                                                <i class="fas fa-shield-alt"></i>Security Solutions
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#projects">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact Us</a>
                        </li>
                    </ul>
                    
                    <a href="#" class="btn-get-started">Get Started</a>
                </div>
            </div>
        </nav>


    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="logo mb-3">
                        sky link
                        <small style="display: block; font-size: 12px; font-weight: normal;">TECHNOLOGIES</small>
                    </div>
                    <p>Desires to obtain pain of itself because pain, but occasionally circumstances.</p>
                    <div class="social-footer">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-pinterest"></i></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h5>Page Link</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Blog Page</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h5>Services</h5>
                    <ul>
                        <li><a href="#">Cyber Security</a></li>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">AI Software</a></li>
                        <li><a href="#">Content Writing</a></li>
                        <li><a href="#">UI Design</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h5>Contact</h5>
                    <p>89 Brooklyn Street, 600 New York, USA</p>
                    <p><i class="fas fa-globe"></i> www.yourwebsite.com</p>
                    <p><i class="fas fa-envelope"></i> example@gmail.com</p>
                    <p><i class="fas fa-phone"></i> 555-555-0184</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>Copyright © 2023 Skylink | Powered By</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Simple carousel functionality
            const prevBtn = document.querySelector('.carousel-btn.prev');
            const nextBtn = document.querySelector('.carousel-btn.next');
            const servicesGrid = document.querySelector('.services-grid');
            
            if (prevBtn && nextBtn && servicesGrid) {
                let currentIndex = 0;
                const cards = servicesGrid.children;
                const totalCards = cards.length;
                
                function updateCarousel() {
                    const translateX = -currentIndex * (100 / totalCards);
                    servicesGrid.style.transform = `translateX(${translateX}%)`;
                }
                
                prevBtn.addEventListener('click', function() {
                    currentIndex = currentIndex > 0 ? currentIndex - 1 : totalCards - 1;
                    updateCarousel();
                });
                
                nextBtn.addEventListener('click', function() {
                    currentIndex = currentIndex < totalCards - 1 ? currentIndex + 1 : 0;
                    updateCarousel();
                });
            }
            
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
            
            // Active navigation link highlighting
            window.addEventListener('scroll', function() {
                const sections = document.querySelectorAll('section[id]');
                const navLinks = document.querySelectorAll('.nav-link');
                
                let current = '';
                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    const sectionHeight = section.clientHeight;
                    if (scrollY >= (sectionTop - 200)) {
                        current = section.getAttribute('id');
                    }
                });
                
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === '#' + current) {
                        link.classList.add('active');
                    }
                });
            });

            @yield('additional-scripts')
        });
    </script>
    
    @stack('scripts')
</body>
</html>