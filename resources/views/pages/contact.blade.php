<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Sky Link Technologies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-blue: #4285f4;
            --dark-purple: #2d1b69;
            --light-blue-bg: #e3f2fd;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Top Bar */
        .top-bar {
            background-color: #f8f9fa;
            padding: 8px 0;
            font-size: 14px;
            color: #666;
        }

        .top-bar .contact-info {
            display: flex;
            align-items: center;
            gap: 30px;
        }

        .top-bar .social-icons {
            display: flex;
            gap: 15px;
        }

        .top-bar .social-icons a {
            color: #666;
            font-size: 16px;
            text-decoration: none;
        }

        /* Header */
        .header {
            background: white;
            padding: 15px 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .logo {
            display: flex;
            align-items: center;
            font-size: 24px;
            font-weight: bold;
            color: var(--primary-blue);
        }

        .logo::before {
            content: '';
            width: 40px;
            height: 40px;
            background: linear-gradient(45deg, var(--primary-blue), #1976d2);
            margin-right: 10px;
            border-radius: 8px;
        }

        .navbar-nav .nav-link {
            color: #333 !important;
            font-weight: 500;
            margin: 0 15px;
            position: relative;
        }

        .navbar-nav .nav-link:hover {
            color: var(--primary-blue) !important;
        }

        .btn-get-started {
            background-color: var(--primary-blue);
            color: white;
            padding: 10px 25px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 500;
            border: none;
        }

        .btn-get-started:hover {
            background-color: #1976d2;
            color: white;
        }

        /* Contact Hero Section */
        .contact-hero {
            background: linear-gradient(135deg, #e3f2fd 0%, #bbdefb 100%);
            padding: 60px 0;
            text-align: center;
        }

        .contact-hero h1 {
            font-size: 48px;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
        }

        .contact-hero p {
            font-size: 16px;
            color: #666;
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
    
        }

        /* Contact Form */
        .contact-form-section {
            padding: 30px 40px;
            margin-top: 20px;
        }

        .form-control {
            border: none;
            border-bottom: 2px solid #ddd;
            border-radius: 0;
            padding: 15px 0;
            background: transparent;
            font-size: 16px;
        }

        .form-control:focus {
            border-bottom-color: var(--primary-blue);
            box-shadow: none;
            background: transparent;
        }

        .form-label {
            color: #666;
            font-weight: 500;
            margin-bottom: 5px;
        }

        .btn-submit {
            background-color: var(--primary-blue);
            color: white;
            padding: 12px 40px;
            border-radius: 25px;
            border: none;
            font-weight: 500;
            margin-top: 30px;
        }

        .btn-submit:hover {
            background-color: #1976d2;
        }

/* Contact Info Cards */
       
        .contact-card {
            text-align: center;
            padding: 20px 20px;
            background: #ffffff;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .contact-card-icon {
            width: 50px;
            height: 50px;
            background-color: var(--dark-purple);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            color: white;
            font-size: 24px;
        }

        .contact-card h5 {
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }

        .contact-card p {
            color: #666;
            margin: 0;
        }

        /* Map Section */
        .map-section {
            background: linear-gradient(135deg, var(--primary-blue) 0%, #1976d2 100%);
            padding: 30px 0;
            color: white;
        }

        .map-content h2 {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .map-content p {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 30px;
        }

        .btn-lorem {
            background-color: var(--dark-purple);
            color: white;
            padding: 12px 30px;
            border-radius: 25px;
            border: none;
            font-weight: 500;
        }

        .map-image {
            border-radius: 10px;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
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
    </style>
</head>
<body>
    <!-- Top Bar -->
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="contact-info">
                        <span><i class="fas fa-phone"></i> Mon - Fri (8:00) - 18:00 / Sunday 8:00 - 14:00</span>
                        <span><i class="fas fa-phone"></i> +62 (305) 23 48 67</span>
                        <span><i class="fas fa-map-marker-alt"></i> Addis Ababa, Bole Tropical Mall No. 217</span>
                    </div>
                </div>
                <div class="col-md-4 text-end">
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <div class="logo">
                    sky link
                    <small style="display: block; font-size: 12px; font-weight: normal;">TECHNOLOGIES</small>
                </div>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Services</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Products</a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#">Projects</a></li>
                        <li class="nav-item"><a class="nav-link active" href="#">Contact Us</a></li>
                    </ul>
                    <button class="btn-get-started">Get Started</button>
                </div>
            </nav>
        </div>
    </header>

    <!-- Contact Hero -->
    <section class="contact-hero">
        <div class="container">
            <h1>Connect With Our Experts</h1>
            <p>Have a question, business proposal, or need technical support? Our experienced team is ready to provide tailored IT solutions that help your business operate more efficiently and grow with confidence. We’re just one message away.</p>
        </div>
    </section>

    <!-- Contact Form -->
    <section class="contact-form-section py-5">
    <div class="container">
        <div class="row">
            <!-- Contact Cards Column (Left) -->
            <div class="col-lg-3 mb-4 mx-4 mt-1">
                <div class="contact-card mb-4">
                    <div class="contact-card-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h5>Call Us</h5>
                    <p>+251911027667</p>
                </div>
                <div class="contact-card mb-4">
                    <div class="contact-card-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h5>Email Through</h5>
                    <p>info@skylinkict.com</p>
                </div>
                <div class="contact-card mb-4">
                    <div class="contact-card-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h5>Location</h5>
                    <p>Addis Ababa, Bole Tropical Mall<br>Office No. 217</p>
                </div>
            </div>

            <!-- Contact Form Column (Right) -->
            <div class="col-lg-7 mx-4">
                <form id="contactForm" action="" method="POST">
                    @csrf
                    <div class="row mx-6">
                        <div class="form-group col-md-6 mb-2">
                            <label class="form-label">First Name</label>
                            <input type="text" class="form-control" name="first_name" required>
                        </div>
                        <div class="form-group col-md-6 mb-2">
                            <label class="form-label">Last Name</label>
                            <input type="text" class="form-control" name="last_name" required>
                        </div>
                    </div>
                    <div class="row mx-6">
                        <div class="form-group col-md-6 mb-2">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="form-group col-md-6 mb-2">
                            <label class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" name="phone" required>
                        </div>
                    </div>
                    <div class="form-group mb-2 mx-6">
                        <label class="form-label">Company Name</label>
                        <input type="text" class="form-control" name="company_name">
                    </div>
                    <div class="form-group mb-2 mx-6">
                        <label class="form-label">Your Message</label>
                        <textarea class="form-control" name="message" rows="4" required></textarea>
                    </div>
                    <div class="form-group mx-6">
                        <button type="submit" class="btn btn-primary px-4">SUBMIT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

    <!-- Map Section -->
    <section class="map-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="map-content">
                        <h2>Want To Find Us Through The Map ?</h2>
                        <p>Reach out to discuss your business goals—we provide expert IT services designed to help you scale, automate, and grow efficiently. Our team is here to assist you, Monday to Friday from 8:00 AM to 6:00 PM.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="map-image">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3548.139703280376!2d38.78086865522774!3d8.991575084606922!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x164b85f52615ebdf%3A0x6a0949274cd951c7!2sTropical%20Mall!5e0!3m2!1sen!2set!4v1750667760140!5m2!1sen!2set" width="600" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Form submission handling
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(this);
            const data = Object.fromEntries(formData);
            
            // Simple validation
            if (!data.first_name  !data.last_name  !data.email || !data.message) {
                alert('Please fill in all required fields.');
                return;
            }
            
            // Email validation
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(data.email)) {
                alert('Please enter a valid email address.');
                return;
            }
            
            // Simulate form submission
            const submitBtn = this.querySelector('.btn-submit');
            const originalText = submitBtn.textContent;
            submitBtn.textContent = 'SUBMITTING...';
            submitBtn.disabled = true;
            
            setTimeout(() => {
                alert('Thank you for your message! We will get back to you soon.');
                this.reset();
                submitBtn.textContent = originalText;
                submitBtn.disabled = false;
            }, 2000);
        });

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

        // Form field focus effects
        document.querySelectorAll('.form-control').forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.classList.add('focused');
            });
            
            input.addEventListener('blur', function() {
                if (!this.value) {
                    this.parentElement.classList.remove('focused');
                }
            });
        });
    </script>
</body>
</html>