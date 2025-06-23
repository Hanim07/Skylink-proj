<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SKYLINK - International Tech Expo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-blue: #007bff;
            --light-gray: #f8f9fa;
            --dark-gray: #6c757d;
        }

        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
        }

        .top-bar {
            background-color: var(--light-gray);
            font-size: 0.85rem;
            padding: 8px 0;
            border-bottom: 1px solid #e9ecef;
        }

        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
            color: #000 !important;
        }

        .navbar-nav .nav-link {
            color: #000 !important;
            font-weight: 500;
            margin: 0 10px;
        }

        .navbar-nav .nav-link:hover {
            color: var(--primary-blue) !important;
        }

        .hero-section {
            padding: 20px 0;
            text-align: center;
        }

        .hero-title {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 10px;
            color: #000;
        }

        .content-section {
            padding-bottom: 50px;
            padding-top: 10px;
        }

        .content-image {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .content-text {
            font-size: 0.95rem;
            line-height: 1.7;
            color: #333;
        }

        .content-text p {
            margin-bottom: 20px;
        }

        .navigation-section {
            padding: 20px 0;
            border-top: 2px solid #e7e8ea;
            border-bottom: 2px solid #e7e8ea;
        }

        .btn-nav {
            background-color: var(--primary-blue);
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 25px;
            font-weight: 500;
        }

        .btn-nav:hover {
            background-color: #0056b3;
            color: white;
        }

        .share-icons {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .share-icons .btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: var(--dark-gray);
            color: white;
            border: none;
        }

        .share-icons .btn:hover {
            background-color: var(--primary-blue);
        }

        .subscription-section {
            background: linear-gradient(135deg, #b3d9ff 0%, #e6f3ff 100%);
            padding: 80px 0;
            position: relative;
            overflow: hidden;
        }

        .subscription-section::before,
        .subscription-section::after {
            content: '';
            position: absolute;
            width: 200px;
            height: 200px;
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
        }

        .subscription-section::before {
            top: 20px;
            left: 50px;
        }

        .subscription-section::after {
            bottom: 20px;
            right: 50px;
        }

        .subscription-title {
            font-size: 2rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 40px;
            color: #000;
        }

        .subscription-form {
            max-width: 500px;
            margin: 0 auto;
        }

        .form-control {
            border-radius: 25px;
            padding: 15px 20px;
            border: 1px solid #ddd;
            margin-bottom: 20px;
        }

        .btn-subscribe {
            background-color: #2c5282;
            color: white;
            border: none;
            padding: 15px 40px;
            border-radius: 25px;
            width: 100%;
            font-weight: 500;
        }

        .btn-subscribe:hover {
            background-color: #2a4a7a;
            color: white;
        }

        .footer {
            background-color: var(--light-gray);
            padding: 60px 0 30px;
        }

        .footer-logo {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .footer-logo img {
            width: 40px;
            height: 40px;
            margin-right: 10px;
        }

        .footer-title {
            font-weight: bold;
            margin-bottom: 20px;
            color: #000;
        }

        .footer-links {
            list-style: none;
            padding: 0;
        }

        .footer-links li {
            margin-bottom: 8px;
        }

        .footer-links a {
            color: var(--dark-gray);
            text-decoration: none;
            font-size: 0.9rem;
        }

        .footer-links a:hover {
            color: var(--primary-blue);
        }

        .social-icons {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-icons a {
            width: 35px;
            height: 35px;
            background-color: var(--dark-gray);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 5px;
            text-decoration: none;
        }

        .social-icons a:hover {
            background-color: var(--primary-blue);
            color: white;
        }

        .copyright {
            text-align: center;
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px solid #ddd;
            color: var(--dark-gray);
            font-size: 0.9rem;
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 2rem;
            }
            
            .content-section .row {
                flex-direction: column-reverse;
            }
            
            .subscription-section::before,
            .subscription-section::after {
                display: none;
            }
        }
    </style>
</head>
<body>
    <!-- Top Bar -->
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <i class="fas fa-clock"></i> Mon - Fri 08:00 - 18:00 | Sunday CLOSED - 14:00
                </div>
                <div class="col-md-4 text-center">
                    <i class="fas fa-phone"></i> +90 (392) 123 45 67
                </div>
                <div class="col-md-4 text-end">
                    <span>Adres Adress Bras Tropical Mavi No: 27</span>
                    <div class="d-inline-block ms-3">
                        <a href="#" class="text-dark me-2"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-dark me-2"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-dark me-2"><i class="fas fa-envelope"></i></a>
                        <a href="#" class="text-dark"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand" href="#">SKYLINK</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#" onclick="setActiveNav(this)">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="setActiveNav(this)">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="setActiveNav(this)">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="setActiveNav(this)">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="setActiveNav(this)">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="setActiveNav(this)">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1 class="hero-title">International Tech Expo</h1>
        
        </div>
    </section>

    <!-- Content Section -->
    <section class="content-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <img src="https://images.unsplash.com/photo-1517336714731-489689fd1ca8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" 
                         alt="Apple MacBook" class="content-image">
                </div>
                <div class="col-lg-6">
                    <div class="content-text">
                        <p>Crowds watched solemnly as the body of Rep. John Lewis crossed the Edmund Pettus Bridge one final time, 55 years after the civil rights icon marched for peace and was met with brutality in Selma, Alabama.</p>
                        <p>Body bearers from the U.S. armed forces placed the late Georgia congressman and civil rights icon onto a horse-drawn caisson Sunday at the Brown Chapel African Methodist Episcopal Church. From there, the public were allowed to line up to honor Lewis for about a half-mile to the foot of the bridge.</p>
                        <p>Rep. Terri Sewell, D-AL, thanked Lewis' family during a ceremony at the chapel for sharing the congressman with the public for so many years.</p>
                        
                        <p>"Our nation is better off because of John Robert Lewis," she remarked. "My life is better, Selma is better, this nation and this world is better because of John Robert Lewis."</p>
                       
                        <p>"Our nation is better off because of John Robert Lewis," she remarked. "My life is better, Selma is better, this nation and this world is better because of John Robert Lewis."</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Navigation Section -->
    <section class="navigation-section">
        <div class="container">
            <div class="row align-items-center mb-3">
                <div class="col-md-3">
                    <button class="btn btn-nav" onclick="previousPage()">
                        <i class="fas fa-chevron-left me-2"></i>Previous
                    </button>
                </div>
                <div class="col-md-6 text-center">
                    <div class="d-flex justify-content-center align-items-center">
                        <span class="me-3">Share</span>
                        <div class="share-icons">
                            <button class="btn" onclick="shareOn('twitter')">
                                <i class="fab fa-twitter"></i>
                            </button>
                            <button class="btn" onclick="shareOn('facebook')">
                                <i class="fab fa-facebook"></i>
                            </button>
                            <button class="btn" onclick="shareOn('linkedin')">
                                <i class="fab fa-linkedin"></i>
                            </button>
                            <button class="btn" onclick="shareOn('pinterest')">
                                <i class="fab fa-pinterest"></i>
                            </button>
                            <button class="btn" onclick="shareOn('email')">
                                <i class="fas fa-envelope"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-end">
                    <button class="btn btn-nav" onclick="nextPage()">
                        Next<i class="fas fa-chevron-right ms-2"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Subscription Section -->
    <section class="subscription-section">
        <div class="container">
            <h2 class="subscription-title">Subscribe for our latest update</h2>
            <form class="subscription-form" onsubmit="handleSubscription(event)">
                <input type="text" class="form-control" placeholder="Full Name" required>
                <input type="email" class="form-control" placeholder="Your Email" required>
                <button type="submit" class="btn btn-subscribe">Variations</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-logo">
                        <img src="https://images.unsplash.com/photo-1611224923853-80b023f02d71?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=100&q=80" alt="Sky Link Logo">
                        <div>
                            <strong>sky link</strong><br>
                            <small>TECHNOLOGY</small>
                        </div>
                    </div>
                    <p class="text-muted">
                        Desires to obtain pain of itself, because it is pain, but occasionally circumstances.
                    </p>
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-pinterest"></i></a>
                    </div>
                </div>
                
                <div class="col-lg-2">
                    <h5 class="footer-title">Page Link</h5>
                    <ul class="footer-links">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Blog Page</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-3">
                    <h5 class="footer-title">Services</h5>
                    <ul class="footer-links">
                        <li><a href="#">Cyber Security</a></li>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">AI Software</a></li>
                        <li><a href="#">Content Writing</a></li>
                        <li><a href="#">UI Design</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-4">
                    <h5 class="footer-title">Contact</h5>
                    <ul class="footer-links">
                        <li>
                            <i class="fas fa-map-marker-alt me-2"></i>
                            88 Brooklyn Street, 600 New York, USA
                        </li>
                        <li>
                            <i class="fas fa-globe me-2"></i>
                            <a href="#">www.yourweb.com</a>
                        </li>
                        <li>
                            <i class="fas fa-envelope me-2"></i>
                            <a href="#">example@gmail.com</a>
                        </li>
                        <li>
                            <i class="fas fa-phone me-2"></i>
                            000-000-0000
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="copyright">
                Copyright © 2024 Skylink | Powered by
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Navigation functionality
        function setActiveNav(element) {
            // Remove active class from all nav links
            document.querySelectorAll('.nav-link').forEach(link => {
                link.classList.remove('active');
            });
            // Add active class to clicked link
            element.classList.add('active');
        }

        // Previous/Next page functionality
        function previousPage() {
            alert('Previous page functionality would be implemented here');
        }

        function nextPage() {
            alert('Next page functionality would be implemented here');
        }

        // Social sharing functionality
        function shareOn(platform) {
            const url = encodeURIComponent(window.location.href);
            const title = encodeURIComponent(document.title);
            
            let shareUrl = '';
            
            switch(platform) {
                case 'twitter':
                    shareUrl = `https://twitter.com/intent/tweet?url=${url}&text=${title}`;
                    break;
                case 'facebook':
                    shareUrl = `https://www.facebook.com/sharer/sharer.php?u=${url}`;
                    break;
                case 'linkedin':
                    shareUrl = `https://www.linkedin.com/sharing/share-offsite/?url=${url}`;
                    break;
                case 'pinterest':
                    shareUrl = `https://pinterest.com/pin/create/button/?url=${url}&description=${title}`;
                    break;
                case 'email':
                    shareUrl = `mailto:?subject=${title}&body=${url}`;
                    break;
            }
            
            if (shareUrl) {
                window.open(shareUrl, '_blank', 'width=600,height=400');
            }
        }

        // Subscription form handling
        function handleSubscription(event) {
            event.preventDefault();
            const formData = new FormData(event.target);
            const name = event.target.querySelector('input[type="text"]').value;
            const email = event.target.querySelector('input[type="email"]').value;
            
            // Here you would typically send the data to your server
            alert(`Thank you ${name}! You've been subscribed with email: ${email}`);
            
            // Reset form
            event.target.reset();
        }

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Add some interactive hover effects
        document.addEventListener('DOMContentLoaded', function() {
            // Add hover effect to cards and buttons
            const interactiveElements = document.querySelectorAll('.btn, .card, .nav-link');
            
            interactiveElements.forEach(element => {
                element.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-2px)';
                    this.style.transition = 'transform 0.3s ease';
                });
                
                element.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });
        });
    </script>
</body>
</html>