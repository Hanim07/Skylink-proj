<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News and Events - Sky Link</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #2563eb;
            --secondary-color: #64b5f6;
            --light-blue: #e3f2fd;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .navbar {
            background: white;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            padding: 1rem 0;
        }

        .navbar-brand {
            font-weight: bold;
            color: var(--primary-color) !important;
        }

        .navbar-nav .nav-link {
            color: #333 !important;
            font-weight: 500;
            margin: 0 10px;
            transition: color 0.3s;
        }

        .navbar-nav .nav-link:hover {
            color: var(--primary-color) !important;
        }

        .btn-get-started {
            background: var(--primary-color);
            color: white;
            border: none;
            padding: 10px 25px;
            border-radius: 25px;
            font-weight: 500;
            transition: all 0.3s;
        }

        .btn-get-started:hover {
            background: #1d4ed8;
            transform: translateY(-2px);
        }

        .hero-section {
            background: linear-gradient(135deg, var(--light-blue), #bbdefb);
            padding: 80px 0;
            text-align: center;
        }

        .hero-section h1 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
        }

        .hero-section p {
            font-size: 1.1rem;
            color: #666;
            max-width: 600px;
            margin: 0 auto;
        }

        .main-content {
            padding: 60px 0;
        }

        .blog-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            margin-bottom: 30px;
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .blog-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }

        .blog-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .blog-card-body {
            padding: 20px;
        }

        .category-tag {
            background: var(--secondary-color);
            color: white;
            padding: 5px 15px;
            border-radius: 15px;
            font-size: 0.8rem;
            display: inline-block;
            margin-bottom: 15px;
        }

        .blog-title {
            font-size: 1.2rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }

        .blog-excerpt {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 15px;
        }

        .read-more {
            color: var(--secondary-color);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }

        .read-more:hover {
            color: var(--primary-color);
        }

        .sidebar {
            background: #f8f9fa;
            padding: 30px;
            border-radius: 10px;
        }

        .search-box {
            position: relative;
            margin-bottom: 30px;
        }

        .search-box input {
            width: 100%;
            padding: 12px 40px 12px 15px;
            border: 1px solid #ddd;
            border-radius: 25px;
            outline: none;
        }

        .search-box i {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #999;
        }

        .category-list {
            list-style: none;
            padding: 0;
        }

        .category-list li {
            padding: 10px 0;
            border-bottom: 1px solid #eee;
            cursor: pointer;
            transition: color 0.3s;
        }

        .category-list li:hover {
            color: var(--primary-color);
        }

        .category-list li.active {
            color: var(--primary-color);
            font-weight: 500;
        }

        .contact-info {
            background: linear-gradient(135deg, var(--secondary-color), var(--primary-color));
            color: white;
            padding: 40px 30px;
            border-radius: 10px;
            margin-top: 30px;
        }

        .contact-info h4 {
            margin-bottom: 30px;
        }

        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .contact-item i {
            background: rgba(255,255,255,0.2);
            padding: 10px;
            border-radius: 50%;
            margin-right: 15px;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .pagination {
            justify-content: center;
            margin-top: 50px;
        }

        .page-link {
            color: var(--primary-color);
            border: 1px solid #ddd;
            margin: 0 2px;
        }

        .page-link:hover {
            background: var(--primary-color);
            color: white;
        }

        .page-item.active .page-link {
            background: var(--primary-color);
            border-color: var(--primary-color);
        }

        .footer {
            background: #2c3e50;
            color: white;
            padding: 50px 0 20px;
            margin-top: 80px;
        }

        .footer h5 {
            color: var(--secondary-color);
            margin-bottom: 20px;
        }

        .footer ul {
            list-style: none;
            padding: 0;
        }

        .footer ul li {
            margin-bottom: 8px;
        }

        .footer ul li a {
            color: #bdc3c7;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer ul li a:hover {
            color: white;
        }

        .social-icons a {
            color: #bdc3c7;
            font-size: 1.2rem;
            margin-right: 15px;
            transition: color 0.3s;
        }

        .social-icons a:hover {
            color: var(--secondary-color);
        }

        .top-bar {
            background: #34495e;
            color: white;
            padding: 8px 0;
            font-size: 0.9rem;
        }

        .top-bar a {
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <!-- Top Bar -->
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <span><i class="fas fa-phone me-2"></i>+1 (555) 123-4567</span>
                    <span class="ms-4"><i class="fas fa-envelope me-2"></i>info@skylink.com</span>
                    <span class="ms-4"><i class="fas fa-map-marker-alt me-2"></i>123 Business Ave, Suite 100</span>
                </div>
                <div class="col-md-4 text-end">
                    <a href="#" class="me-3"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="me-3"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="me-3"><i class="fab fa-linkedin"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-link me-2"></i>sky link
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Services
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Web Design</a></li>
                            <li><a class="dropdown-item" href="#">Web Development</a></li>
                            <li><a class="dropdown-item" href="#">App Development</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            Products
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Software Solutions</a></li>
                            <li><a class="dropdown-item" href="#">Mobile Apps</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                </ul>
                <button class="btn btn-get-started">Get Started</button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1>News, Innovations & Events</h1>
            <p>Discover the latest developments, updates, and event highlights from our team. We’re committed to sharing valuable insights and celebrating milestones with our community.</p>
        </div>
    </section>

    <!-- Main Content -->
    <section class="main-content">
        <div class="container">
            <div class="row">
                <!-- Blog Posts -->
                <div class="col-lg-8 col-md-7">
                    <div class="row" id="blogContainer">
                        @php
                            $blogPosts = [
                                [
                                    'image' => 'https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=400&h=250&fit=crop',
                                    'category' => 'Web Design',
                                    'title' => 'How to build a website',
                                    'excerpt' => 'Building a website involves several steps, from planning and design to development and deployment.'
                                ],
                                [
                                    'image' => 'https://images.unsplash.com/photo-1556761175-b413da4baf72?w=400&h=250&fit=crop',
                                    'category' => 'Web Design',
                                    'title' => 'How to build a website',
                                    'excerpt' => 'Building a website involves several steps, from planning and design to development and deployment.'
                                ],
                                [
                                    'image' => 'https://images.unsplash.com/photo-1531482615713-2afd69097998?w=400&h=250&fit=crop',
                                    'category' => 'Web Design',
                                    'title' => 'How to build a website',
                                    'excerpt' => 'Building a website involves several steps, from planning and design to development and deployment.'
                                ],
                                [
                                    'image' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?w=400&h=250&fit=crop',
                                    'category' => 'Web Design',
                                    'title' => 'How to build a website',
                                    'excerpt' => 'Building a website involves several steps, from planning and design to development and deployment.'
                                ],
                                [
                                    'image' => 'https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=400&h=250&fit=crop',
                                    'category' => 'Web Design',
                                    'title' => 'How to build a website',
                                    'excerpt' => 'Building a website involves several steps, from planning and design to development and deployment.'
                                ],
                                [
                                    'image' => 'https://images.unsplash.com/photo-1553028826-f4804a6dba3b?w=400&h=250&fit=crop',
                                    'category' => 'Web Design',
                                    'title' => 'How to build a website',
                                    'excerpt' => 'Building a website involves several steps, from planning and design to development and deployment.'
                                ]
                            ];
                        @endphp

                        @foreach($blogPosts as $post)
                        <div class="col-md-6 blog-post" data-category="{{ strtolower(str_replace(' ', '-', $post['category'])) }}">
                            <div class="blog-card">
                                <img src="{{ $post['image'] }}" alt="{{ $post['title'] }}">
                                <div class="blog-card-body">
                                    <span class="category-tag">{{ $post['category'] }}</span>
                                    <h3 class="blog-title">{{ $post['title'] }}</h3>
                                    <p class="blog-excerpt">{{ $post['excerpt'] }}</p>
                                    <a href="#" class="read-more">Read More <i class="fas fa-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <!-- Pagination -->
                    {{-- <nav aria-label="Blog pagination">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <i class="fas fa-chevron-left"></i>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav> --}}
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4 col-md-5">
                    <div class="sidebar">
                        <!-- Search -->
                        <div class="search-box">
                            <input type="text" id="searchInput" placeholder="Search news, projects and more...">
                            <i class="fas fa-search"></i>
                        </div>

                        <!-- Categories -->
                        <h4>Category</h4>
                        <ul class="category-list">
                            <li class="category-filter active" data-category="all">
                                <i class="fas fa-circle me-2" style="color: #64b5f6;"></i>All Categories
                            </li>
                            <li class="category-filter" data-category="web-design">
                                <i class="fas fa-circle me-2" style="color: #64b5f6;"></i>Web Design
                            </li>
                            <li class="category-filter" data-category="app-development">
                                <i class="fas fa-circle me-2" style="color: #64b5f6;"></i>App Development
                            </li>
                            <li class="category-filter" data-category="web-development">
                                <i class="fas fa-circle me-2" style="color: #64b5f6;"></i>Web Development
                            </li>
                            <li class="category-filter" data-category="keyword-research">
                                <i class="fas fa-circle me-2" style="color: #64b5f6;"></i>Networking
                            </li>
                            <li class="category-filter" data-category="email-marketing">
                                <i class="fas fa-circle me-2" style="color: #64b5f6;"></i>Email Marketing
                            </li>
                        </ul>
                    </div>

                    <!-- Contact Info -->
                    <div class="contact-info">
                        <h4>Contact Info</h4>
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <strong>Location</strong><br>
                                Addis Ababa, Bole Tropical Mall No. 217
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-phone"></i>
                            <div>
                                <strong>Call Us</strong><br>
                                +251911027667
                            </div>
                        </div>
                        <div class="contact-item">
                            <i class="fas fa-envelope"></i>
                            <div>
                                <strong>Email Us</strong><br>
                                info@skylinkict.com
                            </div>
                        </div>
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
                    <div class="mb-4">
                        <h4><i class="fas fa-link me-2"></i>sky link</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                        <div class="social-icons">
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
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
                    <p><i class="fas fa-map-marker-alt me-2"></i>123 Business Street, Suite 100 New York, USA</p>
                    <p><i class="fas fa-envelope me-2"></i>www.yourwebsite.com</p>
                    <p><i class="fas fa-envelope me-2"></i>example@gmail.com</p>
                    <p><i class="fas fa-phone me-2"></i>200-456-7890</p>
                </div>
            </div>
            <hr class="my-4">
            <div class="text-center">
                <p>&copy; 2024 SkyLink | Powered by SkyLink</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Category filtering
        document.querySelectorAll('.category-filter').forEach(filter => {
            filter.addEventListener('click', function() {
                // Remove active class from all filters
                document.querySelectorAll('.category-filter').forEach(f => f.classList.remove('active'));
                // Add active class to clicked filter
                this.classList.add('active');
                
                const category = this.dataset.category;
                const blogPosts = document.querySelectorAll('.blog-post');
                
                blogPosts.forEach(post => {
                    if (category === 'all' || post.dataset.category === category) {
                        post.style.display = 'block';
                        post.style.animation = 'fadeIn 0.5s';
                    } else {
                        post.style.display = 'none';
                    }
                });
            });
        });

        // Search functionality
        document.getElementById('searchInput').addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            const blogPosts = document.querySelectorAll('.blog-post');
            
            blogPosts.forEach(post => {
                const title = post.querySelector('.blog-title').textContent.toLowerCase();
                const excerpt = post.querySelector('.blog-excerpt').textContent.toLowerCase();
                const category = post.querySelector('.category-tag').textContent.toLowerCase();
                
                if (title.includes(searchTerm) || excerpt.includes(searchTerm) || category.includes(searchTerm)) {
                    post.style.display = 'block';
                } else {
                    post.style.display = 'none';
                }
            });
        });

        // Smooth scroll for navigation links
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

        // Add fade-in animation
        const style = document.createElement('style');
        style.textContent = `
            @keyframes fadeIn {
                from { opacity: 0; transform: translateY(20px); }
                to { opacity: 1; transform: translateY(0); }
            }
        `;
        document.head.appendChild(style);

        // Initialize tooltips
        const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        const tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    </script>
</body>
</html>