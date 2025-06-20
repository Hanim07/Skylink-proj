<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Sky Link - IT Services in Ethiopia')</title>
    <meta name="description" content="@yield('description', 'Leading IT services company in Ethiopia, providing innovative technology solutions for businesses.')">
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
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

        /* Header */
        .header {
            background: #fff;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
        }

        .nav-wrapper {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1rem 0;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 1.5rem;
            font-weight: 700;
            color: #2563eb;
        }

        .logo i {
            font-size: 1.8rem;
        }

        .nav {
            display: flex;
            gap: 2rem;
        }

        .nav-link {
            text-decoration: none;
            color: #64748b;
            font-weight: 500;
            transition: color 0.3s;
        }

        .nav-link:hover,
        .nav-link.active {
            color: #2563eb;
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .phone {
            color: #64748b;
            font-weight: 500;
        }

        .btn-primary {
            background: #2563eb;
            color: white;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            font-weight: 500;
            cursor: pointer;
            transition: background 0.3s;
            text-decoration: none;
            display: inline-block;
        }

        .btn-primary:hover {
            background: #1d4ed8;
        }

        .btn-large {
            padding: 1rem 2rem;
            font-size: 1.1rem;
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
            background: #1e293b;
            color: white;
            padding: 3rem 0 1rem;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .footer-section h4 {
            font-size: 1.2rem;
            margin-bottom: 1rem;
            color: #f1f5f9;
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section ul li {
            margin-bottom: 0.5rem;
        }

        .footer-section ul li a {
            color: #94a3b8;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-section ul li a:hover {
            color: white;
        }

        .footer-section ul li i {
            margin-right: 0.5rem;
            color: #2563eb;
        }

        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }

        .social-links a {
            width: 40px;
            height: 40px;
            background: #2563eb;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            text-decoration: none;
            transition: background 0.3s;
        }

        .social-links a:hover {
            background: #1d4ed8;
        }

        .footer-bottom {
            border-top: 1px solid #334155;
            padding-top: 1rem;
            text-align: center;
            color: #94a3b8;
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
    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="nav-wrapper">
                <div class="logo">
                    <i class="fas fa-link"></i>
                    <span>Sky Link</span>
                </div>
                <nav class="nav">
                    <a href="#home" class="nav-link active">Home</a>
                    <a href="#about" class="nav-link">About</a>
                    <a href="#services" class="nav-link">Services</a>
                    <a href="#portfolio" class="nav-link">Portfolio</a>
                    <a href="#contact" class="nav-link">Contact</a>
                </nav>
                <div class="header-actions">
                    <span class="phone">{{ config('app.phone', '+251 911 123 456') }}</span>
                    <button class="btn-primary">Get Started</button>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer" id="contact">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <div class="logo">
                        <i class="fas fa-link"></i>
                        <span>Sky Link</span>
                    </div>
                    <p>Leading IT services company in Ethiopia, providing innovative technology solutions.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
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
                        <li><a href="#">Mobile Apps</a></li>
                        <li><a href="#">Cloud Solutions</a></li>
                        <li><a href="#">IT Consulting</a></li>
                        <li><a href="#">Digital Marketing</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Contact</h4>
                    <ul>
                        <li><i class="fas fa-phone"></i> {{ config('app.phone', '+251 911 123 456') }}</li>
                        <li><i class="fas fa-envelope"></i> {{ config('app.email', 'info@skylink.et') }}</li>
                        <li><i class="fas fa-map-marker-alt"></i> {{ config('app.address', 'Addis Ababa, Ethiopia') }}</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} Sky Link. All rights reserved.</p>
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