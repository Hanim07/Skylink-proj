@extends('layouts.master')

@section('title', 'Our Services - Sky Link IT Solutions')
@section('description', 'Explore our comprehensive IT services including web development, mobile apps, cloud solutions, and digital transformation services.')

@push('styles')
<style>
    /* Services Page Specific Styles */
    .services-hero {
        background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
        padding: 8rem 0 4rem;
        margin-top: 80px;
        position: relative;
        overflow: hidden;
    }

    .services-hero-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
        color: white;
    }

    .services-hero-left h1 {
        font-size: 3rem;
        font-weight: 700;
        margin-bottom: 1rem;
    }

    .services-hero-right {
        display: flex;
        gap: 1rem;
        align-items: center;
    }

    .categories-dropdown {
        background: #2563eb;
        color: white;
        border: none;
        padding: 0.75rem 1.5rem;
        border-radius: 0.5rem;
        font-weight: 500;
        cursor: pointer;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .social-icons {
        display: flex;
        gap: 0.5rem;
    }

    .social-icon {
        width: 40px;
        height: 40px;
        background: white;
        color: #2563eb;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 0.5rem;
        text-decoration: none;
        transition: transform 0.3s;
    }

    .social-icon:hover {
        transform: translateY(-2px);
    }

    /* Tech Services Section */
    .tech-services {
        padding: 5rem 0;
        background: #f8fafc;
    }

    .tech-services-content {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 4rem;
        align-items: center;
    }

    .tech-services-left h2 {
        font-size: 2.5rem;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 1rem;
    }

    .tech-services-left h2 .highlight {
        color: #2563eb;
    }

    .tech-services-left p {
        color: #64748b;
        line-height: 1.6;
        margin-bottom: 2rem;
    }

    .search-box {
        display: flex;
        gap: 0.5rem;
        max-width: 400px;
    }

    .search-input {
        flex: 1;
        padding: 0.75rem;
        border: 1px solid #d1d5db;
        border-radius: 0.5rem;
        font-size: 0.9rem;
    }

    .search-btn {
        background: #2563eb;
        color: white;
        border: none;
        padding: 0.75rem 1.5rem;
        border-radius: 0.5rem;
        font-weight: 500;
        cursor: pointer;
    }

    .tech-services-right {
        position: relative;
        height: 400px;
    }

    .tech-circle {
        width: 400px;
        height: 400px;
        background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
        border-radius: 50%;
        position: relative;
        margin: 0 auto;
    }

    .tech-icon {
        position: absolute;
        width: 80px;
        height: 80px;
        background: white;
        border-radius: 1rem;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        font-size: 2rem;
    }

    .tech-icon.laravel { top: 20px; right: 60px; color: #ff2d20; }
    .tech-icon.angular { top: 80px; right: 20px; color: #dd0031; }
    .tech-icon.nodejs { bottom: 80px; right: 20px; color: #339933; }
    .tech-icon.vuejs { bottom: 20px; right: 60px; color: #4fc08d; }
    .tech-icon.dotnet { bottom: 60px; left: 20px; color: #512bd4; }

    /* Services Categories */
    .services-categories {
        padding: 5rem 0;
    }

    .services-categories h2 {
        text-align: center;
        font-size: 2.5rem;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 3rem;
    }

    .category-tabs {
        display: flex;
        justify-content: center;
        gap: 1rem;
        margin-bottom: 3rem;
        flex-wrap: wrap;
    }

    .category-tab {
        background: #f1f5f9;
        color: #64748b;
        border: none;
        padding: 0.75rem 1.5rem;
        border-radius: 0.5rem;
        font-weight: 500;
        cursor: pointer;
        transition: all 0.3s;
    }

    .category-tab.active {
        background: #2563eb;
        color: white;
    }

    .category-tab:hover {
        background: #e2e8f0;
    }

    .category-tab.active:hover {
        background: #1d4ed8;
    }

    /* Portfolio Grid */
    .portfolio-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 2rem;
    }

    .portfolio-card {
        background: white;
        border-radius: 1rem;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        transition: transform 0.3s;
    }

    .portfolio-card:hover {
        transform: translateY(-5px);
    }

    .portfolio-card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .portfolio-card-content {
        padding: 1.5rem;
    }

    .portfolio-card h3 {
        font-size: 1.2rem;
        font-weight: 600;
        color: #1e293b;
        margin-bottom: 0.5rem;
    }

    .portfolio-card p {
        color: #64748b;
        font-size: 0.9rem;
        margin-bottom: 1rem;
    }

    .learn-more {
        color: #2563eb;
        text-decoration: none;
        font-weight: 500;
        font-size: 0.9rem;
    }

    .learn-more:hover {
        text-decoration: underline;
    }

    /* Quote Section */
    .quote-section {
        padding: 5rem 0;
        background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
    }

    .quote-content {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 4rem;
        align-items: center;
    }

    .quote-left h2 {
        font-size: 2.5rem;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 2rem;
    }

    .quote-features {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 2rem;
        margin-bottom: 2rem;
    }

    .quote-feature {
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }

    .quote-feature i {
        color: #2563eb;
        font-size: 1.2rem;
    }

    .quote-feature span {
        color: #64748b;
        font-weight: 500;
    }

    .quote-description {
        color: #64748b;
        line-height: 1.6;
        margin-bottom: 2rem;
    }

    .contact-info {
        display: flex;
        align-items: center;
        gap: 1rem;
        background: #2563eb;
        color: white;
        padding: 1rem;
        border-radius: 0.5rem;
        text-decoration: none;
        font-weight: 500;
        max-width: fit-content;
    }

    .contact-info:hover {
        background: #1d4ed8;
    }

    .quote-form {
        background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
        padding: 2rem;
        border-radius: 1rem;
        color: white;
    }

    .quote-form h3 {
        font-size: 1.5rem;
        margin-bottom: 1.5rem;
        text-align: center;
    }

    .form-group {
        margin-bottom: 1rem;
    }

    .form-input {
        width: 100%;
        padding: 0.75rem;
        border: none;
        border-radius: 0.5rem;
        font-size: 1rem;
    }

    .form-select {
        width: 100%;
        padding: 0.75rem;
        border: none;
        border-radius: 0.5rem;
        font-size: 1rem;
        background: white;
    }

    .form-textarea {
        width: 100%;
        padding: 0.75rem;
        border: none;
        border-radius: 0.5rem;
        font-size: 1rem;
        min-height: 100px;
        resize: vertical;
    }

    .quote-submit {
        width: 100%;
        background: #1e293b;
        color: white;
        border: none;
        padding: 1rem;
        border-radius: 0.5rem;
        font-size: 1rem;
        font-weight: 600;
        cursor: pointer;
        transition: background 0.3s;
    }

    .quote-submit:hover {
        background: #0f172a;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .services-hero-content {
            flex-direction: column;
            gap: 2rem;
            text-align: center;
        }

        .services-hero-left h1 {
            font-size: 2rem;
        }

        .tech-services-content {
            grid-template-columns: 1fr;
            gap: 2rem;
        }

        .tech-circle {
            width: 300px;
            height: 300px;
        }

        .tech-icon {
            width: 60px;
            height: 60px;
            font-size: 1.5rem;
        }

        .quote-content {
            grid-template-columns: 1fr;
            gap: 2rem;
        }

        .category-tabs {
            justify-content: flex-start;
            overflow-x: auto;
            padding-bottom: 1rem;
        }

        .portfolio-grid {
            grid-template-columns: 1fr;
        }
    }
</style>
@endpush

@section('content')
    <!-- Services Hero Section -->
    <section class="services-hero">
        <div class="container">
            <div class="services-hero-content">
                <div class="services-hero-left">
                    <h1>Our Services</h1>
                </div>
                <div class="services-hero-right">
                    <button class="categories-dropdown">
                        <i class="fas fa-th-large"></i>
                        Categories
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="social-icons">
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fas fa-share-alt"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tech Services Section -->
    <section class="tech-services">
        <div class="container">
            <div class="tech-services-content">
                <div class="tech-services-left">
                    <h2>Our Top <span class="highlight">Tech</span>, services</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Facilisi ultricies habitant eget volutpat ut semper in dolor. Praesent mi velit ut id hac placerat leo vulputate.</p>
                    <div class="search-box">
                        <input type="text" class="search-input" placeholder="e.g. wordpress">
                        <button class="search-btn">
                            <i class="fas fa-search"></i>
                            Search
                        </button>
                    </div>
                </div>
                <div class="tech-services-right">
                    <div class="tech-circle">
                        <div class="tech-icon laravel">
                            <i class="fab fa-laravel"></i>
                        </div>
                        <div class="tech-icon angular">
                            <i class="fab fa-angular"></i>
                        </div>
                        <div class="tech-icon nodejs">
                            <i class="fab fa-node-js"></i>
                        </div>
                        <div class="tech-icon vuejs">
                            <i class="fab fa-vuejs"></i>
                        </div>
                        <div class="tech-icon dotnet">
                            <i class="fas fa-code"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Categories -->
    <section class="services-categories">
        <div class="container">
            <h2>Let's Check Out Services</h2>
            <div class="category-tabs">
                @php
                    $categories = [
                        'All Categories',
                        'HTML Design',
                        'WP Themes',
                        'CMS Themes',
                        'eCommerce',
                        'Blogging',
                        'UI Templates'
                    ];
                @endphp
                
                @foreach($categories as $index => $category)
                <button class="category-tab {{ $index === 0 ? 'active' : '' }}" data-category="{{ strtolower(str_replace(' ', '-', $category)) }}">
                    {{ $category }}
                </button>
                @endforeach
            </div>

            <div class="portfolio-grid">
                @php
                    $portfolioItems = [
                        [
                            'title' => 'MasterD2 - Multipurpose Medical Website',
                            'description' => 'Complete medical website solution with appointment booking',
                            'image' => 'https://via.placeholder.com/280x200/6366f1/FFFFFF?text=Medical+Website',
                            'category' => 'html-design'
                        ],
                        [
                            'title' => 'Hazel - Clean Minimalist Multi-Purpose',
                            'description' => 'Modern minimalist design for various business needs',
                            'image' => 'https://via.placeholder.com/280x200/0891b2/FFFFFF?text=Minimalist+Design',
                            'category' => 'wp-themes'
                        ],
                        [
                            'title' => 'Techno - IT Solutions & Business Services',
                            'description' => 'Professional IT services website template',
                            'image' => 'https://via.placeholder.com/280x200/10b981/FFFFFF?text=IT+Solutions',
                            'category' => 'cms-themes'
                        ],
                        [
                            'title' => 'ParkSoft - IT Solutions for Your Business',
                            'description' => 'Comprehensive IT solutions and consulting services',
                            'image' => 'https://via.placeholder.com/280x200/f59e0b/FFFFFF?text=Business+IT',
                            'category' => 'ecommerce'
                        ],
                        [
                            'title' => 'Brave Theme Multipurpose HTML Template',
                            'description' => 'Versatile HTML template for multiple use cases',
                            'image' => 'https://via.placeholder.com/280x200/8b5cf6/FFFFFF?text=Multipurpose',
                            'category' => 'html-design'
                        ],
                        [
                            'title' => 'Technology & IT Solution Services',
                            'description' => 'Complete technology solutions for modern businesses',
                            'image' => 'https://via.placeholder.com/280x200/ef4444/FFFFFF?text=Tech+Solutions',
                            'category' => 'blogging'
                        ],
                        [
                            'title' => 'Techno - IT Solutions & Business Services',
                            'description' => 'Advanced IT consulting and development services',
                            'image' => 'https://via.placeholder.com/280x200/06b6d4/FFFFFF?text=IT+Consulting',
                            'category' => 'ui-templates'
                        ],
                        [
                            'title' => 'ParkSoft - IT Solutions for Your Business',
                            'description' => 'Enterprise-level IT solutions and support',
                            'image' => 'https://via.placeholder.com/280x200/3b82f6/FFFFFF?text=Enterprise+IT',
                            'category' => 'all-categories'
                        ]
                    ];
                @endphp

                @foreach($portfolioItems as $item)
                <div class="portfolio-card" data-category="{{ $item['category'] }}">
                    <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}">
                    <div class="portfolio-card-content">
                        <h3>{{ $item['title'] }}</h3>
                        <p>{{ $item['description'] }}</p>
                        <a href="#" class="learn-more">Learn more →</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials">
        <div class="container">
            <h2>What Our Clients Say About<br>Our Digital Services</h2>
            <div class="testimonials-grid">
                @php
                    $serviceTestimonials = [
                        [
                            'name' => 'Michael Anderson',
                            'position' => 'PROFESSION',
                            'avatar' => 'https://via.placeholder.com/50x50/2563EB/FFFFFF?text=MA',
                            'content' => 'Sky Link has provided exceptional service with a wide range of professional and career opportunities. IT professionals work with technology systems and software that include servers, networks, databases, and computing and information systems.'
                        ],
                        [
                            'name' => 'Emily Davis',
                            'position' => 'BUSINESS WOMEN',
                            'avatar' => 'https://via.placeholder.com/50x50/0891B2/FFFFFF?text=ED',
                            'content' => 'As a business owner, I have been thoroughly impressed with various aspects of the business world. This can include women who are entrepreneurs, business owners, executives, managers, professionals, or employees in various industries.'
                        ],
                        [
                            'name' => 'James Wilson',
                            'position' => 'APPLICATION DEVELOPMENT',
                            'avatar' => 'https://via.placeholder.com/50x50/10B981/FFFFFF?text=JW',
                            'content' => 'The application development services have been outstanding. We create software applications for various platforms and devices such as mobile phones, desktop computers, web browsers, and more.'
                        ]
                    ];
                @endphp
                
                @foreach($serviceTestimonials as $testimonial)
                <div class="testimonial-card">
                    <div class="testimonial-header">
                        <img src="{{ $testimonial['avatar'] }}" alt="{{ $testimonial['name'] }}">
                        <div>
                            <h4>{{ $testimonial['name'] }}</h4>
                            <span>{{ $testimonial['position'] }}</span>
                        </div>
                    </div>
                    <p>"{{ $testimonial['content'] }}"</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Quote Request Section -->
    <section class="quote-section">
        <div class="container">
            <div class="quote-content">
                <div class="quote-left">
                    <div style="color: #2563eb; font-weight: 600; margin-bottom: 1rem;">REQUEST A QUOTE</div>
                    <h2>Need A Free Quote? Please Feel Free to Contact Us</h2>
                    
                    <div class="quote-features">
                        <div class="quote-feature">
                            <i class="fas fa-clock"></i>
                            <span>Reply within 24 hours</span>
                        </div>
                        <div class="quote-feature">
                            <i class="fas fa-phone"></i>
                            <span>12 hrs telephone support</span>
                        </div>
                    </div>

                    <p class="quote-description">
                        Let us know specifically what you need a free quote for and we will get back to you as soon as possible. If you need a quote for: Please provide details about the product or service you're interested in, any specific requirements, and any other relevant information, so I can assist you in generating an accurate quote.
                    </p>

                    <a href="tel:+251123456789" class="contact-info">
                        <i class="fas fa-phone"></i>
                        Call to ask any Question
                        <strong>+251 123 456 789</strong>
                    </a>
                </div>

                <div class="quote-form">
                    <h3>Get A Free Quote</h3>
                    <form action="{{ route('quote.request') ?? '#' }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" class="form-input" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-input" placeholder="Your Email" required>
                        </div>
                        <div class="form-group">
                            <select name="service" class="form-select" required>
                                <option value="">Select a Service</option>
                                <option value="web-development">Web Development</option>
                                <option value="mobile-development">Mobile Development</option>
                                <option value="cloud-solutions">Cloud Solutions</option>
                                <option value="it-consulting">IT Consulting</option>
                                <option value="digital-marketing">Digital Marketing</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea name="message" class="form-textarea" placeholder="Message" required></textarea>
                        </div>
                        <button type="submit" class="quote-submit">Request A Quote</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
<script>
    // Category filtering functionality
    document.addEventListener('DOMContentLoaded', function() {
        const categoryTabs = document.querySelectorAll('.category-tab');
        const portfolioCards = document.querySelectorAll('.portfolio-card');

        categoryTabs.forEach(tab => {
            tab.addEventListener('click', function() {
                // Remove active class from all tabs
                categoryTabs.forEach(t => t.classList.remove('active'));
                // Add active class to clicked tab
                this.classList.add('active');

                const selectedCategory = this.getAttribute('data-category');

                // Filter portfolio cards
                portfolioCards.forEach(card => {
                    const cardCategory = card.getAttribute('data-category');
                    
                    if (selectedCategory === 'all-categories' || cardCategory === selectedCategory) {
                        card.style.display = 'block';
                        setTimeout(() => {
                            card.style.opacity = '1';
                            card.style.transform = 'translateY(0)';
                        }, 100);
                    } else {
                        card.style.opacity = '0';
                        card.style.transform = 'translateY(20px)';
                        setTimeout(() => {
                            card.style.display = 'none';
                        }, 300);
                    }
                });
            });
        });

        // Search functionality
        const searchInput = document.querySelector('.search-input');
        const searchBtn = document.querySelector('.search-btn');

        if (searchBtn) {
            searchBtn.addEventListener('click', function() {
                const searchTerm = searchInput.value.toLowerCase();
                
                portfolioCards.forEach(card => {
                    const title = card.querySelector('h3').textContent.toLowerCase();
                    const description = card.querySelector('p').textContent.toLowerCase();
                    
                    if (title.includes(searchTerm) || description.includes(searchTerm) || searchTerm === '') {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        }

        // Categories dropdown functionality
        const categoriesDropdown = document.querySelector('.categories-dropdown');
        if (categoriesDropdown) {
            categoriesDropdown.addEventListener('click', function() {
                // Add dropdown functionality here if needed
                console.log('Categories dropdown clicked');
            });
        }
    });
</script>
@endpush