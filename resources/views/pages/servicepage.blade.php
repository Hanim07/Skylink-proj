<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sky Link - Top Tech Services</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
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
        overflow-x: hidden;
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

    .logo-icon {
        width: 40px;
        height: 40px;
        background: linear-gradient(135deg, #3B82F6, #1E40AF);
        border-radius: 8px;
        margin-right: 12px;
        position: relative;
        transform: rotate(-15deg);
    }

    .logo-icon::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 20px;
        height: 20px;
        background: white;
        border-radius: 3px;
        transform: translate(-50%, -50%) rotate(45deg);
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
    .hero-section {
        background: #f8f9fa;
        min-height: 80vh;
        position: relative;
        overflow: hidden;
        padding: 60px 0;
    }

    .hero-content {
        position: relative;
        z-index: 2;
    }

    .hero-service-tag {
        color: #3B82F6;
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 15px;
    }

    .categories-dropdown {
        background: #3B82F6;
        color: white;
        border: none;
        padding: 12px 20px;
        border-radius: 8px;
        font-weight: 500;
        margin-bottom: 40px;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        cursor: pointer;
        transition: all 0.3s ease;
        position: relative;
    }

    .categories-dropdown:hover {
        background: #1E40AF;
        transform: translateY(-2px);
    }

    .categories-dropdown i {
        font-size: 14px;
    }

    .hero-title {
        font-size: 48px;
        font-weight: 800;
        line-height: 1.2;
        margin-bottom: 25px;
        color: #333;
    }

    .hero-title .tech-text {
        color: #3B82F6;
    }

    .hero-description {
        font-size: 16px;
        line-height: 1.6;
        color: #666;
        margin-bottom: 40px;
        max-width: 500px;
    }

    .search-container {
        display: flex;
        max-width: 400px;
        margin-bottom: 40px;
        position: relative;
    }

    .search-input {
        flex: 1;
        padding: 15px 20px;
        border: 1px solid #e9ecef;
        border-right: none;
        border-radius: 8px 0 0 8px;
        font-size: 14px;
        outline: none;
        transition: all 0.3s ease;
    }

    .search-input:focus {
        border-color: #3B82F6;
        box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
    }

    .search-btn {
        background: #3B82F6;
        color: white;
        border: none;
        padding: 15px 25px;
        border-radius: 0 8px 8px 0;
        font-weight: 500;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .search-btn:hover {
        background: #1E40AF;
        transform: translateY(-1px);
    }

    .search-results {
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        background: white;
        border: 1px solid #e9ecef;
        border-radius: 8px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        max-height: 300px;
        overflow-y: auto;
        z-index: 1000;
        display: none;
    }

    .search-result-item {
        padding: 12px 20px;
        border-bottom: 1px solid #f8f9fa;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .search-result-item:hover {
        background: #f8f9fa;
        color: #3B82F6;
    }

    .search-result-item:last-child {
        border-bottom: none;
    }

    /* Blue Circle Background */
    .hero-circle {
        position: absolute;
        right: -30px;
        top: 50%;
        transform: translateY(-50%);
        width: 700px;
        height: 700px;
        background: linear-gradient(135deg, #3B82F6, #1E40AF);
        border-radius: 50%;
        z-index: 1;
    }

    /* Hero Icons Container */
    .hero-icons-container {
        position: absolute;
        right: 22%;
        top: 50%;
        transform: translateY(-50%);
        width: 500px;
        height: 500px;
        z-index: 5;
    }

    /* Social Icons in Hero */
    .hero-social-icons {
        position: absolute;
        top: 50px;
        right: 100px;
        display: flex;
        gap: 15px;
        z-index: 4;
    }

    .hero-social-icon {
        width: 45px;
        height: 45px;
        background: white;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        cursor: pointer;
        position: relative;
    }

    .hero-social-icon:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    }

    .hero-social-icon i {
        color: #3B82F6;
        font-size: 18px;
    }

    .notification-badge {
        position: absolute;
        top: -5px;
        right: -5px;
        width: 20px;
        height: 20px;
        background: #ff4757;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 10px;
        color: white;
        font-weight: 600;
    }

    /* Tech Icons */
    .tech-icon {
        position: absolute;
        width: 100px;
        height: 100px;
        background: white;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        animation: float 6s ease-in-out infinite;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .tech-icon:hover {
        transform: translateY(-5px) scale(1.05);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.2);
        animation-play-state: paused;
    }

    .tech-icon img {
        width: 50px;
        height: 50px;
    }

    /* Specific positioning for each tech icon */
    .tech-icon.laravel {
        top: 40px;
        right: 370px;
        animation-delay: 0s;
    }

    .tech-icon.angular {
        top: 70px;
        right: 130px;
        animation-delay: -2s;
    }

    .tech-icon.nodejs {
        top: 220px;
        right: 420px;
        animation-delay: -4s;
    }

    .tech-icon.vuejs {
        top: 370px;
        right: 250px;
        animation-delay: -1s;
    }

    .tech-icon.dotnet {
        top: 270px;
        right: 70px;
        animation-delay: -3s;
    }

    @keyframes float {
        0%, 100% { transform: translateY(0px) rotate(0deg); }
        25% { transform: translateY(-10px) rotate(1deg); }
        50% { transform: translateY(-5px) rotate(-1deg); }
        75% { transform: translateY(-15px) rotate(0.5deg); }
    }

    /* Services Section */
    .services-section {
        padding: 100px 0;
        background: white;
    }

    .section-title {
        font-size: 2.5rem;
        font-weight: 700;
        text-align: center;
        margin-bottom: 60px;
        color: #333;
    }

    .service-tabs {
        display: flex;
        justify-content: center;
        gap: 15px;
        margin-bottom: 60px;
        flex-wrap: wrap;
    }

    .service-tab {
        background: #f8f9fa;
        border: none;
        padding: 12px 24px;
        border-radius: 25px;
        font-weight: 500;
        color: #666;
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .service-tab.active,
    .service-tab:hover {
        background: #3B82F6;
        color: white;
        transform: translateY(-2px);
    }

    .service-card {
        background: white;
        overflow: hidden;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        margin-bottom: 30px;
        opacity: 1;
        transform: translateY(0);
    }

    .service-card.hidden {
        display: none !important;
    }

    .service-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
    }

    .service-card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        transition: all 0.3s ease;
    }

    .service-card:hover img {
        transform: scale(1.05);
    }

    .service-card-body {
        padding: 25px;
    }

    .service-card h5 {
        font-weight: 600;
        margin-bottom: 10px;
        color: #333;
    }

    .service-card p {
        color: #666;
        font-size: 0.9rem;
        margin-bottom: 20px;
    }

    .service-card-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .service-price {
        font-weight: 700;
        color: #3B82F6;
        font-size: 1.2rem;
    }

    .btn-view-details {
        background: #3B82F6;
        color: white;
        border: none;
        padding: 8px 16px;
        border-radius: 20px;
        font-size: 0.9rem;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .btn-view-details:hover {
        background: #1E40AF;
        transform: translateY(-2px);
    }

    /* Services Grid - Updated for proper filtering */
    #servicesGrid {
        display: flex;
        flex-wrap: wrap;
        gap: 30px;
    }

    #servicesGrid .service-item {
        flex: 0 0 calc(25% - 22.5px);
        max-width: calc(25% - 22.5px);
    }

    @media (max-width: 992px) {
        #servicesGrid .service-item {
            flex: 0 0 calc(50% - 15px);
            max-width: calc(50% - 15px);
        }
    }

    @media (max-width: 576px) {
        #servicesGrid .service-item {
            flex: 0 0 100%;
            max-width: 100%;
        }
    }

    /* Testimonials Section - Fixed and Enhanced */
    .testimonials-section {
        padding: 100px 0;
        background: #f8f9fa;
        overflow: hidden;
        position: relative;
    }

    .testimonials-wrapper {
        position: relative;
        height: 450px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .testimonials-container {
        width: 100%;
        overflow: hidden;
        position: relative;
    }

    .testimonials-track {
        display: flex;
        transition: transform 0.99s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        will-change: transform;
    }

    .testimonial-card {
        background: #EAF9FF;
        color: rgb(0, 0, 0);
        padding: 30px;
        box-shadow: 0 10px 30px rgba(59, 130, 246, 0.3);
        min-width: 350px;
        max-width: 350px;
        height: 320px;
        flex-shrink: 0;
        transform: scale(0.99);
        opacity: 0.6;
        position: relative;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .testimonial-card.center {
        transform: scale(1.1);
        opacity: 1;
        box-shadow: 0 20px 50px rgba(59, 130, 246, 0.4);
        z-index: 10;
    }

    .testimonial-card.left {
        transform: scale(0.9) translateX(-20px);
        opacity: 0.8;
    }

    .testimonial-card.right {
        transform: scale(0.9) translateX(20px);
        opacity: 0.8;
    }

    .testimonial-header {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
        color: #000;
    }

    .testimonial-avatar {
        width: 60px;
        height: 60px;
        margin-right: 15px;
        object-fit: cover;
        border: 3px solid rgba(255, 255, 255, 0.3);
        transition: all 0.3s ease;
    }

    .testimonial-card.center .testimonial-avatar {
        border-color: white;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }

    .testimonial-info h6 {
        font-weight: 600;
        margin-bottom: 5px;
        color: rgb(43, 163, 255);
        font-size: 16px;
    }

    .testimonial-info small {
        color: rgba(77, 82, 93, 0.8);
        font-size: 13px;
    }

    .testimonial-text {
        color: rgba(77, 82, 93, 0.8);
        line-height: 1.6;
        margin-bottom: 20px;
        font-size: 15px;
        flex-grow: 1;
    }

    .testimonial-rating {
        color: #ffc107;
        font-size: 16px;
    }

    .testimonial-rating i {
        margin-right: 3px;
    }

    /* Testimonial Navigation Dots */
    .testimonial-dots {
        display: flex;
        justify-content: center;
        gap: 10px;
        margin-top: 40px;
    }

    .testimonial-dot {
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: rgba(59, 130, 246, 0.3);
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .testimonial-dot.active {
        background: #3B82F6;
        transform: scale(1.2);
    }

    /* Contact Section */
    .contact-section {
        padding: 100px 0;
        background: white;
    }

    .contact-info {
        padding-right: 30px;
    }

    .contact-feature {
        display: flex;
        align-items: center;
        margin-bottom: 30px;
    }

    .contact-icon {
        width: 60px;
        height: 60px;
        background: #3B82F6;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 20px;
        color: white;
        font-size: 1.2rem;
    }

    .contact-form {
        background: rgb(0, 123, 255);
        padding: 40px;
        color: white;
    }

    .contact-form .form-control {
        border: none;
        padding: 15px;
        margin-bottom: 20px;
        font-size: 1rem;
    }

    .contact-form .form-control:focus {
        box-shadow: 0 0 0 3px rgba(255, 255, 255, 0.3);
    }

    .btn-submit {
        background: white;
        color: #3B82F6;
        border: none;
        padding: 15px 30px;
        border-radius: 10px;
        font-weight: 600;
        width: 100%;
        transition: all 0.3s ease;
    }

    .btn-submit:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(255, 255, 255, 0.3);
    }

    /* Footer */
    .footer {
        background:rgb(226, 223, 223);
        color: white;
        padding: 60px 0 30px;
    }

    .footer h5 {
        font-weight: 600;
        margin-bottom: 20px;
        color: rgb(0, 0, 0);
    }

    .footer a {
        color: #4d5051;
        text-decoration: none;
        transition: all 0.3s ease;
        display: block;
        margin-bottom: 8px;
    }

    .footer a:hover {
        color: #3B82F6;
        transform: translateX(5px);
    }

    .footer-social a {
        display: inline-block;
        margin-right: 15px;
        font-size: 1.2rem;
    }

    .footer-bottom {
        border-top: 1px solid #333;
        margin-top: 40px;
        padding-top: 20px;
        text-align: center;
        color: #ccc;
    }

    /* Animations */
    .fade-in {
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.6s ease;
    }

    .fade-in.visible {
        opacity: 1;
        transform: translateY(0);
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .top-bar {
            display: none;
        }
        
        .hero-title {
            font-size: 32px;
        }
        
        .hero-circle,
        .hero-icons-container,
        .hero-social-icons {
            display: none;
        }
        
        .navbar-nav {
            display: none;
        }
        
        .search-container {
            max-width: 100%;
        }

        .contact-info {
            padding-right: 0;
            margin-bottom: 40px;
        }

        .mega-dropdown-menu {
            display: none !important;
        }

        .testimonial-card {
            min-width: 280px;
            max-width: 280px;
            height: 300px;
        }

        .testimonials-wrapper {
            height: 380px;
        }

        #servicesGrid {
            gap: 20px;
        }
    }

    @media (max-width: 992px) {
        .hero-circle {
            right: -300px;
            width: 600px;
            height: 600px;
        }
        
        .hero-icons-container {
            width: 400px;
            height: 400px;
        }

        .navbar-nav {
            gap: 20px;
        }

        .mega-dropdown-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .testimonial-card {
            min-width: 320px;
            max-width: 320px;
        }

        #servicesGrid {
            gap: 25px;
        }
    }
</style>
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
        <a class="navbar-brand" href="#">
            <div class="logo-icon"></div>
            <div class="logo-text">
                <span class="logo-main">Sky Link</span>
                <span class="logo-sub">TECHNOLOGIES</span>
            </div>
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

<!-- Hero Section -->
<section class="hero-section" id="home">
    <div class="hero-circle"></div>
    
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="hero-content">
                    <div class="hero-service-tag">Our Service</div>
                    
                    <button class="categories-dropdown" data-bs-toggle="dropdown">
                        <i class="fas fa-th-large"></i>
                        Categories
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#" data-filter="web">Web Development</a></li>
                        <li><a class="dropdown-item" href="#" data-filter="mobile">Mobile Development</a></li>
                        <li><a class="dropdown-item" href="#" data-filter="design">UI/UX Design</a></li>
                        <li><a class="dropdown-item" href="#" data-filter="marketing">Digital Marketing</a></li>
                        <li><a class="dropdown-item" href="#" data-filter="ecommerce">E-commerce</a></li>
                        <li><a class="dropdown-item" href="#" data-filter="analytics">Analytics</a></li>
                        <li><a class="dropdown-item" href="#" data-filter="cloud">Cloud Solutions</a></li>
                        <li><a class="dropdown-item" href="#" data-filter="consulting">Consulting</a></li>
                    </ul>
                    
                    <h1 class="hero-title">
                        Our Top <span class="tech-text">Tech,</span><br>
                        services
                    </h1>
                    
                    <p class="hero-description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Facilisi ultrices habitant eget sollicitudin ut tempor in dolor. 
                        Praesent mi velit in id hac platea leo vulputate.
                    </p>
                    
                    <div class="search-container">
                        <input type="text" class="search-input" id="searchInput" placeholder='e.g. "analytics"'>
                        <button class="search-btn" id="searchBtn">
                            <i class="fas fa-search"></i> Search
                        </button>
                        <div class="search-results" id="searchResults"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Hero Social Icons -->
    <div class="hero-social-icons">
        <div class="hero-social-icon">
            <i class="far fa-heart"></i>
        </div>
        <div class="hero-social-icon">
            <i class="fas fa-shopping-cart"></i>
        </div>
        <div class="hero-social-icon">
            <i class="far fa-bell"></i>
            <div class="notification-badge">3</div>
        </div>
    </div>
    
    <!-- Tech Icons -->
    <div class="hero-icons-container">
        <div class="tech-icon laravel">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-plain.svg" alt="Laravel">
        </div>
        <div class="tech-icon angular">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/angularjs/angularjs-original.svg" alt="Angular">
        </div>
        <div class="tech-icon nodejs">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/nodejs/nodejs-original.svg" alt="Node.js">
        </div>
        <div class="tech-icon vuejs">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/vuejs/vuejs-original.svg" alt="Vue.js">
        </div>
        <div class="tech-icon dotnet">
            <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/dot-net/dot-net-original.svg" alt=".NET">
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services-section" id="services">
    <div class="container">
        <h2 class="section-title fade-in">Let's Check Out Services</h2>
        
        <div class="service-tabs fade-in">
            <button class="service-tab active" data-filter="all">All Categories</button>
            <button class="service-tab" data-filter="analytics">Analytics</button>
            <button class="service-tab" data-filter="design">Design</button>
            <button class="service-tab" data-filter="web">Web Development</button>
            <button class="service-tab" data-filter="ecommerce">E-commerce</button>
            <button class="service-tab" data-filter="marketing">Marketing</button>
            <button class="service-tab" data-filter="cloud">Cloud</button>
            <button class="service-tab" data-filter="consulting">Consulting</button>
        </div>
        
        <div id="servicesGrid">
            <div class="service-item fade-in" data-category="analytics" data-keywords="analytics dashboard data visualization reporting">
                <div class="service-card">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=400&h=250&fit=crop" alt="Analytics Dashboard">
                    <div class="service-card-body">
                        <h5>Analytics Dashboard</h5>
                        <p>Modern analytics dashboard with real-time data visualization and reporting features.</p>
                        <div class="service-card-footer">
                            <span class="service-price">$299</span>
                            <button class="btn-view-details">View Details</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="service-item fade-in" data-category="design" data-keywords="mobile app design interface ux ui">
                <div class="service-card">
                    <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3?w=400&h=250&fit=crop" alt="Mobile App Design">
                    <div class="service-card-body">
                        <h5>Mobile App Design</h5>
                        <p>Beautiful mobile app interface design with modern UX principles and interactions.</p>
                        <div class="service-card-footer">
                            <span class="service-price">$499</span>
                            <button class="btn-view-details">View Details</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="service-item fade-in" data-category="web" data-keywords="web development fullstack wordpress cms">
                <div class="service-card">
                    <img src="https://images.unsplash.com/photo-1563013544-824ae1b704d3?w=400&h=250&fit=crop" alt="Web Development">
                    <div class="service-card-body">
                        <h5>Web Development</h5>
                        <p>Full-stack web development with modern technologies and best practices.</p>
                        <div class="service-card-footer">
                            <span class="service-price">$799</span>
                            <button class="btn-view-details">View Details</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="service-item fade-in" data-category="ecommerce" data-keywords="ecommerce solution online store shopping">
                <div class="service-card">
                    <img src="https://images.unsplash.com/photo-1555421689-491a97ff2040?w=400&h=250&fit=crop" alt="E-commerce Solution">
                    <div class="service-card-body">
                        <h5>E-commerce Solution</h5>
                        <p>Complete e-commerce platform with payment integration and inventory management.</p>
                        <div class="service-card-footer">
                            <span class="service-price">$999</span>
                            <button class="btn-view-details">View Details</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="service-item fade-in" data-category="analytics" data-keywords="data analytics business intelligence insights">
                <div class="service-card">
                    <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=400&h=250&fit=crop" alt="Data Analytics">
                    <div class="service-card-body">
                        <h5>Data Analytics</h5>
                        <p>Advanced data analytics and business intelligence solutions for better insights.</p>
                        <div class="service-card-footer">
                            <span class="service-price">$599</span>
                            <button class="btn-view-details">View Details</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="service-item fade-in" data-category="marketing" data-keywords="digital marketing seo social media">
                <div class="service-card">
                    <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?w=400&h=250&fit=crop" alt="Digital Marketing">
                    <div class="service-card-body">
                        <h5>Digital Marketing</h5>
                        <p>Comprehensive digital marketing strategy and execution for business growth.</p>
                        <div class="service-card-footer">
                            <span class="service-price">$399</span>
                            <button class="btn-view-details">View Details</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="service-item fade-in" data-category="cloud" data-keywords="cloud solutions infrastructure deployment">
                <div class="service-card">
                    <img src="https://images.unsplash.com/photo-1563013544-824ae1b704d3?w=400&h=250&fit=crop" alt="Cloud Solutions">
                    <div class="service-card-body">
                        <h5>Cloud Solutions</h5>
                        <p>Scalable cloud infrastructure and deployment services for modern applications.</p>
                        <div class="service-card-footer">
                            <span class="service-price">$699</span>
                            <button class="btn-view-details">View Details</button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="service-item fade-in" data-category="consulting" data-keywords="tech consulting strategy planning">
                <div class="service-card">
                    <img src="https://images.unsplash.com/photo-1555421689-491a97ff2040?w=400&h=250&fit=crop" alt="Consulting">
                    <div class="service-card-body">
                        <h5>Tech Consulting</h5>
                        <p>Expert technology consulting and strategic planning for digital transformation.</p>
                        <div class="service-card-footer">
                            <span class="service-price">$299</span>
                            <button class="btn-view-details">View Details</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section - Fixed and Enhanced -->
<section class="testimonials-section">
    <div class="container">
        <h2 class="section-title fade-in">What Our Clients Say About</h2>
        <h3 class="text-center mb-5 fade-in" style="color: #3B82F6; font-weight: 600;">Our Digital Services</h3>
        
        <div class="testimonials-wrapper">
            <div class="testimonials-container">
                <div class="testimonials-track" id="testimonialsTrack">
                    <div class="testimonial-card">
                        <div class="testimonial-header">
                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=60&h=60&fit=crop&crop=face" alt="Client" class="testimonial-avatar">
                            <div class="testimonial-info">
                                <h6>Andrew Anderson</h6>
                                <small>CEO, TechCorp</small>
                            </div>
                        </div>
                        <p class="testimonial-text">"Sky Link delivered exceptional results for our project. Their team's expertise in modern web technologies helped us achieve our goals efficiently and exceed our expectations."</p>
                        <div class="testimonial-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    
                    <div class="testimonial-card center">
                        <div class="testimonial-header">
                            <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?w=60&h=60&fit=crop&crop=face" alt="Client" class="testimonial-avatar">
                            <div class="testimonial-info">
                                <h6>Sarah Johnson</h6>
                                <small>Marketing Director</small>
                            </div>
                        </div>
                        <p class="testimonial-text">"Outstanding service and professional approach. The team understood our requirements perfectly and delivered beyond expectations. Highly recommend their services."</p>
                        <div class="testimonial-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    
                    <div class="testimonial-card">
                        <div class="testimonial-header">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=60&h=60&fit=crop&crop=face" alt="Client" class="testimonial-avatar">
                            <div class="testimonial-info">
                                <h6>James Wilson</h6>
                                <small>Startup Founder</small>
                            </div>
                        </div>
                        <p class="testimonial-text">"Highly recommend Sky Link for any tech project. Their innovative solutions and timely delivery made our product launch successful and profitable."</p>
                        <div class="testimonial-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <div class="testimonial-header">
                            <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=60&h=60&fit=crop&crop=face" alt="Client" class="testimonial-avatar">
                            <div class="testimonial-info">
                                <h6>Michael Chen</h6>
                                <small>Product Manager</small>
                            </div>
                        </div>
                        <p class="testimonial-text">"The quality of work and attention to detail is remarkable. Sky Link transformed our vision into reality with their innovative approach and technical expertise."</p>
                        <div class="testimonial-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <div class="testimonial-header">
                            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=60&h=60&fit=crop&crop=face" alt="Client" class="testimonial-avatar">
                            <div class="testimonial-info">
                                <h6>Emily Rodriguez</h6>
                                <small>Creative Director</small>
                            </div>
                        </div>
                        <p class="testimonial-text">"Working with Sky Link was a game-changer for our business. Their creative solutions and professional service exceeded all our expectations."</p>
                        <div class="testimonial-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>

                    <div class="testimonial-card">
                        <div class="testimonial-header">
                            <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=60&h=60&fit=crop&crop=face" alt="Client" class="testimonial-avatar">
                            <div class="testimonial-info">
                                <h6>David Thompson</h6>
                                <small>Operations Manager</small>
                            </div>
                        </div>
                        <p class="testimonial-text">"Exceptional service quality and professional delivery. Sky Link's team provided innovative solutions that significantly improved our business operations."</p>
                        <div class="testimonial-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="testimonial-dots" id="testimonialDots">
            <div class="testimonial-dot" data-index="0"></div>
            <div class="testimonial-dot active" data-index="1"></div>
            <div class="testimonial-dot" data-index="2"></div>
            <div class="testimonial-dot" data-index="3"></div>
            <div class="testimonial-dot" data-index="4"></div>
            <div class="testimonial-dot" data-index="5"></div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="contact-section" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-info fade-in">
                    <h2 class="mb-4" style="font-weight: 700; color: #333;">Need A Free Quote? Please Feel Free to Contact Us</h2>
                    
                    <div class="contact-feature">
                        <div class="contact-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div>
                            <h5 style="font-weight: 600; margin-bottom: 5px;">Work within 24 hours</h5>
                            <p style="color: #666; margin: 0;">Quick response and fast delivery guaranteed</p>
                        </div>
                    </div>
                    
                    <div class="contact-feature">
                        <div class="contact-icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <div>
                            <h5 style="font-weight: 600; margin-bottom: 5px;">24 hrs telephone support</h5>
                            <p style="color: #666; margin: 0;">Round the clock customer support available</p>
                        </div>
                    </div>
                    
                    <div class="bg-light p-4 rounded" style="margin-top: 30px;">
                        <p style="color: #666; margin-bottom: 20px;">"Sky Link is among one of the most professional web development companies I have worked with. They have a great team of developers who are always ready to help."</p>
                        <div class="contact-feature" style="margin-bottom: 0;">
                            <div class="contact-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div>
                                <h5 style="font-weight: 600; margin-bottom: 5px;">Call to ask any Question</h5>
                                <p style="color: #3B82F6; font-weight: 600; margin: 0;">+1 (555) 123-4567</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="contact-form fade-in">
                    <h3 class="mb-4" style="font-weight: 600;">Request A Quote</h3>
                    <form id="contactForm">
                        <input type="text" class="form-control" placeholder="Your Name" required>
                        <input type="email" class="form-control" placeholder="Your Email" required>
                        <input type="tel" class="form-control" placeholder="Your Phone">
                        <select class="form-control" required>
                            <option value="">Select Service</option>
                            <option value="web-development">Web Development</option>
                            <option value="mobile-app">Mobile App Development</option>
                            <option value="ui-design">UI/UX Design</option>
                            <option value="digital-marketing">Digital Marketing</option>
                            <option value="consulting">Tech Consulting</option>
                        </select>
                        <textarea class="form-control" rows="4" placeholder="Your Message" required></textarea>
                        <button type="submit" class="btn-submit">Request A Quote</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="navbar-brand mb-3">
                    <div class="logo-icon"></div>
                    <div class="logo-text">
                        <span class="logo-main">Sky Link</span>
                        <span class="logo-sub">TECHNOLOGIES</span>
                    </div>
                </div>
                <p style="color: #ccc; margin-bottom: 20px;">Leading technology solutions provider specializing in web development, mobile apps, and digital transformation services.</p>
                <div class="footer-social">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4">
                <h5>Page Link</h5>
                <a href="#home">Home</a>
                <a href="#about">About Us</a>
                <a href="#services">Services</a>
                <a href="#portfolio">Portfolio</a>
                <a href="#projects">Projects</a>
                <a href="#contact">Contact</a>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4">
                <h5>Services</h5>
                <a href="#">Web Development</a>
                <a href="#">App Development</a>
                <a href="#">UI/UX Design</a>
                <a href="#">Digital Marketing</a>
                <a href="#">SEO Services</a>
                <a href="#">Tech Consulting</a>
            </div>
            
            <div class="col-lg-3 col-md-6 mb-4">
                <h5>Contact</h5>
                <div style="color: #ccc;">
                    <p><i class="fas fa-map-marker-alt" style="color: #3B82F6; margin-right: 10px;"></i>123 Tech Street, Digital City, TC 12345</p>
                    <p><i class="fas fa-phone" style="color: #3B82F6; margin-right: 10px;"></i>+1 (555) 123-4567</p>
                    <p><i class="fas fa-envelope" style="color: #3B82F6; margin-right: 10px;"></i>info@skylink.com</p>
                    <p><i class="fas fa-globe" style="color: #3B82F6; margin-right: 10px;"></i>www.skylink.com</p>
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; {{ date('Y') }} Sky Link Technologies. All rights reserved.</p>
        </div>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        let lastScrollTop = 0;
        let currentTestimonial = 1; // Start with center testimonial
        const totalTestimonials = 6;
        let testimonialInterval;
        
        // Fixed navbar on scroll
        window.addEventListener('scroll', function() {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            const topBar = document.getElementById('topBar');
            const navbar = document.getElementById('mainNavbar');
            
            if (scrollTop > lastScrollTop && scrollTop > 100) {
                // Scrolling down
                topBar.classList.add('hidden');
                navbar.classList.add('scrolled');
            } else {
                // Scrolling up
                topBar.classList.remove('hidden');
                navbar.classList.remove('scrolled');
            }
            
            lastScrollTop = scrollTop;
        });

        // Search functionality
        const searchInput = document.getElementById('searchInput');
        const searchBtn = document.getElementById('searchBtn');
        const searchResults = document.getElementById('searchResults');
        const serviceItems = document.querySelectorAll('.service-item');

        function performSearch(query) {
            const results = [];
            serviceItems.forEach(item => {
                const title = item.querySelector('h5').textContent.toLowerCase();
                const description = item.querySelector('p').textContent.toLowerCase();
                const keywords = item.getAttribute('data-keywords').toLowerCase();
                
                if (title.includes(query.toLowerCase()) || 
                    description.includes(query.toLowerCase()) || 
                    keywords.includes(query.toLowerCase())) {
                    results.push({
                        title: item.querySelector('h5').textContent,
                        description: item.querySelector('p').textContent,
                        element: item
                    });
                }
            });
            return results;
        }

        function displaySearchResults(results) {
            if (results.length === 0) {
                searchResults.innerHTML = '<div class="search-result-item">No services found</div>';
            } else {
                searchResults.innerHTML = results.map(result => 
                    `<div class="search-result-item" data-title="${result.title}">
                        <strong>${result.title}</strong><br>
                        <small>${result.description.substring(0, 80)}...</small>
                    </div>`
                ).join('');
            }
            searchResults.style.display = 'block';
        }

        searchInput.addEventListener('input', function() {
            const query = this.value.trim();
            if (query.length > 0) {
                const results = performSearch(query);
                displaySearchResults(results);
            } else {
                searchResults.style.display = 'none';
            }
        });

        searchBtn.addEventListener('click', function() {
            const query = searchInput.value.trim();
            if (query) {
                const results = performSearch(query);
                displaySearchResults(results);
                
                // Filter services based on search and rearrange
                filterAndRearrangeServices(results.map(r => r.element));
                
                // Scroll to services section
                document.getElementById('services').scrollIntoView({ behavior: 'smooth' });
            }
        });

        // Click on search results
        searchResults.addEventListener('click', function(e) {
            if (e.target.classList.contains('search-result-item')) {
                const title = e.target.getAttribute('data-title');
                searchInput.value = title;
                searchResults.style.display = 'none';
                
                // Filter and highlight the selected service
                const matchingItems = [];
                serviceItems.forEach(item => {
                    if (item.querySelector('h5').textContent === title) {
                        matchingItems.push(item);
                    }
                });
                
                filterAndRearrangeServices(matchingItems);
                document.getElementById('services').scrollIntoView({ behavior: 'smooth' });
            }
        });

        // Hide search results when clicking outside
        document.addEventListener('click', function(e) {
            if (!searchInput.contains(e.target) && !searchResults.contains(e.target)) {
                searchResults.style.display = 'none';
            }
        });

        // Function to filter and rearrange services
        function filterAndRearrangeServices(visibleItems) {
            const servicesGrid = document.getElementById('servicesGrid');
            
            // Hide all items first
            serviceItems.forEach(item => {
                item.classList.add('hidden');
            });
            
            // Clear the grid and re-append only visible items
            const allItems = Array.from(serviceItems);
            allItems.forEach(item => {
                if (servicesGrid.contains(item)) {
                    servicesGrid.removeChild(item);
                }
            });
            
            // Add visible items back to the grid in order
            visibleItems.forEach(item => {
                item.classList.remove('hidden');
                servicesGrid.appendChild(item);
            });
        }

        // Service tabs functionality - Updated to rearrange services
        document.querySelectorAll('.service-tab').forEach(tab => {
            tab.addEventListener('click', function() {
                // Remove active class from all tabs
                document.querySelectorAll('.service-tab').forEach(t => t.classList.remove('active'));
                // Add active class to clicked tab
                this.classList.add('active');
                
                const filter = this.getAttribute('data-filter');
                const visibleItems = [];
                
                serviceItems.forEach(item => {
                    const category = item.getAttribute('data-category');
                    const title = item.querySelector('h5').textContent.toLowerCase();
                    
                    // Check if filter matches category or if it's "all"
                    let shouldShow = false;
                    
                    if (filter === 'all') {
                        shouldShow = true;
                    } else if (category === filter) {
                        shouldShow = true;
                    } else {
                        // Also check if the filter word is in the title
                        shouldShow = title.includes(filter.toLowerCase());
                    }
                    
                    if (shouldShow) {
                        visibleItems.push(item);
                    }
                });
                
                if (filter === 'all') {
                    // Show all items in original order
                    const servicesGrid = document.getElementById('servicesGrid');
                    const allItems = Array.from(serviceItems);
                    
                    // Clear grid
                    allItems.forEach(item => {
                        if (servicesGrid.contains(item)) {
                            servicesGrid.removeChild(item);
                        }
                    });
                    
                    // Re-add all items in original order
                    allItems.forEach(item => {
                        item.classList.remove('hidden');
                        servicesGrid.appendChild(item);
                    });
                } else {
                    filterAndRearrangeServices(visibleItems);
                }
                
                // Clear search when filtering
                searchInput.value = '';
                searchResults.style.display = 'none';
            });
        });

        // Categories dropdown filtering - Updated to rearrange services
        document.querySelectorAll('.categories-dropdown + .dropdown-menu .dropdown-item').forEach(item => {
            item.addEventListener('click', function(e) {
                e.preventDefault();
                const filter = this.getAttribute('data-filter');
                
                // Update active tab
                document.querySelectorAll('.service-tab').forEach(t => t.classList.remove('active'));
                const matchingTab = document.querySelector(`[data-filter="${filter}"]`);
                if (matchingTab) {
                    matchingTab.classList.add('active');
                }
                
                // Filter services and rearrange
                const visibleItems = [];
                serviceItems.forEach(serviceItem => {
                    const category = serviceItem.getAttribute('data-category');
                    const title = serviceItem.querySelector('h5').textContent.toLowerCase();
                    
                    let shouldShow = false;
                    
                    if (category === filter) {
                        shouldShow = true;
                    } else {
                        // Check if the filter word is in the title
                        shouldShow = title.includes(filter.toLowerCase());
                    }
                    
                    if (shouldShow) {
                        visibleItems.push(serviceItem);
                    }
                });
                
                filterAndRearrangeServices(visibleItems);
                
                // Scroll to services
                document.getElementById('services').scrollIntoView({ behavior: 'smooth' });
            });
        });

        // Enhanced Auto-scrolling testimonials with proper positioning
        function updateTestimonials() {
            const track = document.getElementById('testimonialsTrack');
            const cards = track.querySelectorAll('.testimonial-card');
            const dots = document.querySelectorAll('.testimonial-dot');
            
            // Remove all classes from cards
            cards.forEach(card => {
                card.classList.remove('center', 'left', 'right');
            });
            
            // Remove active class from dots
            dots.forEach(dot => dot.classList.remove('active'));
            
            // Calculate positions
            const cardWidth = 380; // card width + gap
            const containerWidth = window.innerWidth;
            const centerOffset = (containerWidth / 2) - (cardWidth / 2);
            
            // Set transform to center the current testimonial
            const translateX = centerOffset - (currentTestimonial * cardWidth);
            track.style.transform = `translateX(${translateX}px)`;
            
            // Add classes based on position relative to center
            cards.forEach((card, index) => {
                if (index === currentTestimonial) {
                    card.classList.add('center');
                } else if (index === currentTestimonial - 1 || (currentTestimonial === 0 && index === totalTestimonials - 1)) {
                    card.classList.add('left');
                } else if (index === currentTestimonial + 1 || (currentTestimonial === totalTestimonials - 1 && index === 0)) {
                    card.classList.add('right');
                }
            });
            
            // Update active dot
            if (dots[currentTestimonial]) {
                dots[currentTestimonial].classList.add('active');
            }
            
            // Move to next testimonial
            currentTestimonial = (currentTestimonial + 1) % totalTestimonials;
        }

        // Start testimonial auto-scroll
        function startTestimonialAutoScroll() {
            testimonialInterval = setInterval(updateTestimonials, 3000);
        }

        // Stop testimonial auto-scroll
        function stopTestimonialAutoScroll() {
            if (testimonialInterval) {
                clearInterval(testimonialInterval);
            }
        }

        // Initialize testimonials
        updateTestimonials();
        startTestimonialAutoScroll();

        // Dot navigation for testimonials
        document.querySelectorAll('.testimonial-dot').forEach((dot, index) => {
            dot.addEventListener('click', function() {
                currentTestimonial = index;
                updateTestimonials();
                stopTestimonialAutoScroll();
                setTimeout(startTestimonialAutoScroll, 5000); // Restart after 5 seconds
            });
        });

        // Pause auto-scroll on hover
        const testimonialsSection = document.querySelector('.testimonials-section');
        testimonialsSection.addEventListener('mouseenter', stopTestimonialAutoScroll);
        testimonialsSection.addEventListener('mouseleave', startTestimonialAutoScroll);

        // Contact form submission
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const submitBtn = this.querySelector('.btn-submit');
            const originalText = submitBtn.textContent;
            submitBtn.textContent = 'Sending...';
            submitBtn.disabled = true;
            
            setTimeout(() => {
                alert('Thank you for your inquiry! We will get back to you within 24 hours.');
                this.reset();
                submitBtn.textContent = originalText;
                submitBtn.disabled = false;
            }, 2000);
        });

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.fade-in').forEach(el => {
            observer.observe(el);
        });

        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const href = this.getAttribute('href');
                if (href !== '#') {
                    e.preventDefault();
                    const target = document.querySelector(href);
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                }
            });
        });

        // Hero social icons functionality
        document.querySelectorAll('.hero-social-icon').forEach(icon => {
            icon.addEventListener('click', function() {
                const iconClass = this.querySelector('i').classList;
                if (iconClass.contains('fa-heart')) {
                    const heartIcon = this.querySelector('i');
                    if (heartIcon.classList.contains('far')) {
                        heartIcon.classList.remove('far');
                        heartIcon.classList.add('fas');
                        this.style.background = '#ff6b6b';
                        heartIcon.style.color = 'white';
                    } else {
                        heartIcon.classList.remove('fas');
                        heartIcon.classList.add('far');
                        this.style.background = 'white';
                        heartIcon.style.color = '#3B82F6';
                    }
                } else if (iconClass.contains('fa-shopping-cart')) {
                    alert('Shopping cart clicked!');
                } else if (iconClass.contains('fa-bell')) {
                    alert('You have 3 new notifications!');
                    const badge = this.querySelector('.notification-badge');
                    if (badge) badge.style.display = 'none';
                }
            });
        });

        // Tech icons functionality
        document.querySelectorAll('.tech-icon').forEach(icon => {
            icon.addEventListener('click', function() {
                const techName = this.querySelector('img').alt;
                alert(`Learn more about ${techName} development services!`);
            });
        });

        // View details button functionality
        document.querySelectorAll('.btn-view-details').forEach(btn => {
            btn.addEventListener('click', function() {
                const card = this.closest('.service-card');
                const title = card.querySelector('h5').textContent;
                alert(`Viewing details for: ${title}`);
            });
        });

        // Mega dropdown interactions
        document.querySelectorAll('.mega-dropdown-item').forEach(item => {
            item.addEventListener('click', function(e) {
                e.preventDefault();
                const service = this.textContent.trim();
                alert(`Learn more about ${service}`);
            });
        });

        console.log('All functionality loaded successfully!');
    });
</script>
</body>
</html>