@extends('layouts.master')

@section('title', 'Sky Link - IT Services in Ethiopia')
@section('description', 'Leading IT services company in Ethiopia, helping businesses succeed with innovative technology solutions.')

@section('additional-styles')
<style>
   



   .hero {
    position: relative;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    text-align: center;
    overflow: hidden;
    background: transparent !important; /* clear any color */
}

.hero-bg {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    z-index: 1;
    opacity: 1; /* No tint! */
}

.hero-content {
    position: relative;
    z-index: 2;
    max-width: 800px;
    padding: 2rem;
    background: none; /* No background card */
}

.hero-content h1 {
    color: #000;
}

.hero-content p {
    color: #333;
}

/* FLOATING ICONS ON TOP RIGHT */
.hero-floating-icons {
    position: absolute;
    top: 2rem;
    right: 2rem;
    display: flex;
    flex-direction: column;
    gap: 1.2rem;
    z-index: 3;
}

.floating-icon {
    width: 60px;
    height: 60px;
    background: rgba(255, 255, 255, 0.95);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #2563eb;
    font-size: 1.5rem;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
}

.floating-icon:hover {
    transform: scale(1.1);
    background: white;
    color: #1d4ed8;
}

/* Tooltip (optional) */
.floating-icon::before {
    content: attr(data-tooltip);
    position: absolute;
    right: 75px;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(0, 0, 0, 0.75);
    color: white;
    padding: 6px 12px;
    font-size: 0.9rem;
    border-radius: 6px;
    white-space: nowrap;
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s ease;
}

.floating-icon:hover::before {
    opacity: 1;
    visibility: visible;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .hero-floating-icons {
        top: 1rem;
        right: 1rem;
    }

    .floating-icon {
        width: 50px;
        height: 50px;
        font-size: 1.2rem;
    }

    .floating-icon::before {
        display: none;
    }
}




</style>
@endsection


@section('content')
    <!-- Hero Section -->
   


<section class="hero" id="home">
    <div class="hero-bg" style="background-image: url('{{ asset('assets/images/hero-bg.jpg') }}');"></div>

    <!-- Floating Icons -->
    <div class="hero-floating-icons">
        <div class="floating-icon" data-tooltip="Call Us" onclick="handleIconClick('phone')">
            <i class="fas fa-phone"></i>
        </div>
        <div class="floating-icon" data-tooltip="Email Us" onclick="handleIconClick('email')">
            <i class="fas fa-envelope"></i>
        </div>
        <div class="floating-icon" data-tooltip="Chat Support" onclick="handleIconClick('chat')">
            <i class="fas fa-comments"></i>
        </div>
    </div>

    <div class="container">
        <div class="hero-content">
            <h1>{{ $heroTitle ?? 'Helping businesses succeed with the best IT services in Ethiopia' }}</h1>
            <p>{{ $heroDescription ?? 'Discover IT solutions that drive growth and innovation for your business. We provide comprehensive technology services tailored to your needs.' }}</p>
            <button class="btn-primary btn-large">More</button>
        </div>
    </div>
</section>







    <!-- Company Overview -->
    <section class="company-overview" id="about">
        <div class="container">
            <div class="overview-content">
                <h2>Company overview</h2>
                <p>{{ $companyDescription ?? 'Sky Link is a leading IT services company in Ethiopia, dedicated to providing innovative technology solutions that help businesses thrive in the digital age. With years of experience and a team of skilled professionals, we deliver comprehensive IT services and solutions.' }}</p>
            </div>
            <div class="stats">
                @php
                    $defaultStats = [
                        ['number' => '15+', 'label' => 'Years Experience'],
                        ['number' => '84k', 'label' => 'Happy Clients'],
                        ['number' => '600+', 'label' => 'Projects Completed']
                    ];
                @endphp
                
                @foreach($stats ?? $defaultStats as $stat)
                <div class="stat-item">
                    <h3>{{ $stat['number'] }}</h3>
                    <p>{{ $stat['label'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Trusted Partners -->
    <section class="partners">
        <div class="container">
            <h3>TRUSTED PARTNERS</h3>
            <div class="partners-logos">
                <img src="{{ asset('images/partners/microsoft-logo.png') }}" alt="Microsoft" class="partner-logo">
                <img src="{{ asset('images/partners/google-meet-logo.png') }}" alt="Google Meet" class="partner-logo">
                <img src="{{ asset('images/partners/zoom-logo.png') }}" alt="Zoom" class="partner-logo">
            </div>
        </div>
    </section>

    <!-- Services -->
    <section class="services" id="services">
        <div class="container">
            <h2>Our Services</h2>
            <div class="services-carousel">
                <button class="carousel-btn prev"><i class="fas fa-chevron-left"></i></button>
                <div class="services-grid">
                    @php
                        $defaultServices = [
                            [
                                'title' => 'Web Development',
                                'description' => 'Professional web development services using modern technologies and frameworks to create responsive, user-friendly websites.',
                                'icon' => 'fas fa-laptop-code',
                                'featured' => false
                            ],
                            [
                                'title' => 'SERVICE 1',
                                'description' => 'Comprehensive mobile application development for iOS and Android platforms with cutting-edge features and seamless user experience.',
                                'icon' => 'fas fa-mobile-alt',
                                'featured' => true
                            ],
                            [
                                'title' => 'Cloud Solutions',
                                'description' => 'Scalable cloud infrastructure and migration services to help your business leverage the power of cloud computing.',
                                'icon' => 'fas fa-cloud',
                                'featured' => false
                            ]
                        ];
                    @endphp
                    
                    @foreach($services ?? $defaultServices as $service)
                    <div class="service-card {{ $service['featured'] ? 'featured' : '' }}">
                        <div class="service-icon">
                            <i class="{{ $service['icon'] }}"></i>
                        </div>
                        <h3>{{ $service['title'] }}</h3>
                        <p>{{ $service['description'] }}</p>
                    </div>
                    @endforeach
                </div>
                <button class="carousel-btn next"><i class="fas fa-chevron-right"></i></button>
            </div>
        </div>
    </section>

    <!-- Latest News -->
    <section class="news">
        <div class="container">
            <h2>Latest News</h2>
            <div class="news-grid">
                @php
                    $defaultNews = [
                        [
                            'title' => 'How to Start a Career in Tech',
                            'excerpt' => 'Essential tips and guidance for starting your journey in the technology industry...',
                            'date' => 'Dec 15, 2024',
                            'image' => asset('images/news/tech-career.jpg')
                        ],
                        [
                            'title' => 'How to Start a Career in Tech',
                            'excerpt' => 'Essential tips and guidance for starting your journey in the technology industry...',
                            'date' => 'Dec 12, 2024',
                            'image' => asset('images/news/tech-trends.jpg')
                        ],
                        [
                            'title' => 'How to Start a Career in Tech',
                            'excerpt' => 'Essential tips and guidance for starting your journey in the technology industry...',
                            'date' => 'Dec 10, 2024',
                            'image' => asset('images/news/digital-transform.jpg')
                        ]
                    ];
                @endphp
                
                @foreach($news ?? $defaultNews as $article)
                <article class="news-card">
                    <img src="{{ $article['image'] }}" alt="{{ $article['title'] }}">
                    <div class="news-content">
                        <span class="news-date">{{ $article['date'] }}</span>
                        <h3>{{ $article['title'] }}</h3>
                        <p>{{ $article['excerpt'] }}</p>
                    </div>
                </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Featured Portfolio -->
    <section class="portfolio" id="portfolio">
        <div class="container">
            <h2>Featured Portfolio</h2>
            <div class="portfolio-grid">
                @php
                    $portfolioImages = [
                        asset('images/portfolio/ecommerce-platform.jpg'),
                        asset('images/portfolio/mobile-app.jpg'),
                        asset('images/portfolio/cloud-solution.jpg'),
                        asset('images/portfolio/healthcare-system.jpg'),
                        asset('images/portfolio/analytics-dashboard.jpg'),
                        asset('images/portfolio/iot-solution.jpg')
                    ];
                @endphp
                
                @foreach($portfolio ?? $portfolioImages as $index => $image)
                <div class="portfolio-item">
                    <img src="{{ $image }}" alt="Portfolio {{ $index + 1 }}">
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="products">
        <div class="container">
            <h2>Our Featured Products</h2>
            <div class="products-grid">
                @php
                    $defaultProducts = [
                        [
                            'name' => 'iPhone 14 Pro Max 256GB',
                            'image' => asset('images/products/iphone-14-pro-max.png'),
                            'rating' => 5
                        ],
                        [
                            'name' => 'Apple AirPods',
                            'image' => asset('images/products/airpods.png'),
                            'rating' => 5
                        ],
                        [
                            'name' => 'iPhone 14 Pro 128GB',
                            'image' => asset('images/products/iphone-14-pro.png'),
                            'rating' => 5
                        ]
                    ];
                @endphp
                
                @foreach($products ?? $defaultProducts as $product)
                <div class="product-card">
                    <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}">
                    <h3>{{ $product['name'] }}</h3>
                    <div class="rating">
                        @for($i = 0; $i < $product['rating']; $i++)
                        <i class="fas fa-star"></i>
                        @endfor
                    </div>
                </div>
                @endforeach
            </div>
            <button class="btn-primary">View All</button>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials">
        <div class="container">
            <h2>What Our Clients Say About Our Digital Services</h2>
            <div class="testimonials-grid">
                @php
                    $defaultTestimonials = [
                        [
                            'name' => 'Abebe Kebede',
                            'position' => 'CEO, Tech Solutions',
                            'avatar' => asset('images/testimonials/client-1.jpg'),
                            'content' => 'Sky Link provided exceptional IT services that transformed our business operations. Their team is professional and delivers quality results.'
                        ],
                        [
                            'name' => 'Meron Tadesse',
                            'position' => 'CTO, Digital Agency',
                            'avatar' => asset('images/testimonials/client-2.jpg'),
                            'content' => 'Outstanding service and support. Sky Link helped us implement modern solutions that improved our efficiency significantly.'
                        ],
                        [
                            'name' => 'Daniel Haile',
                            'position' => 'Manager, StartUp Inc',
                            'avatar' => asset('images/testimonials/client-3.jpg'),
                            'content' => 'Reliable, innovative, and customer-focused. Sky Link is our go-to partner for all IT-related needs and solutions.'
                        ]
                    ];
                @endphp
                
                @foreach($testimonials ?? $defaultTestimonials as $testimonial)
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

    <!-- Newsletter -->
    <section class="newsletter">
        <div class="container">
            <div class="newsletter-content">
                <h2>Subscribe for our latest update</h2>
                @if(Route::has('newsletter.subscribe'))
                <form action="{{ route('newsletter.subscribe') }}" method="POST" class="newsletter-form">
                    @csrf
                    <button type="submit" class="btn-primary">Subscribe</button>
                </form>
                @else
                <button class="btn-primary" onclick="alert('Newsletter subscription coming soon!')">Subscribe</button>
                @endif
            </div>
        </div>
    </section>
@endsection

@section('additional-scripts')
    // Handle floating icon clicks
    function handleIconClick(type) {
        switch(type) {
            case 'phone':
                window.location.href = 'tel:+251911123456';
                break;
            case 'email':
                window.location.href = 'mailto:info@skylink.et';
                break;
            case 'chat':
                alert('Chat support coming soon! Please call or email us for immediate assistance.');
                break;
        }
    }

    // Add animation delay for staggered entrance
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.floating-icon').forEach((icon, index) => {
            icon.style.animationDelay = `${index * 0.1}s`;
        });
    });

    // Carousel functionality
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

    // Portfolio hover effects
    document.querySelectorAll('.portfolio-item').forEach(item => {
        item.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.05)';
        });
        
        item.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1)';
        });
    });

    // Product card animations
    document.querySelectorAll('.product-card').forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-10px)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });

    console.log('Sky Link homepage loaded successfully');
@endsection
