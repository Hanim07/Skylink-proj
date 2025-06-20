@extends('layouts.master')

@section('title', 'Sky Link - IT Services in Ethiopia')
@section('description', 'Leading IT services company in Ethiopia, helping businesses succeed with innovative technology solutions.')

@section('content')
    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-bg"></div>
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
                @php
                    $defaultPartners = [
                        ['name' => 'Microsoft', 'logo' => 'https://via.placeholder.com/120x40/0078D4/FFFFFF?text=Microsoft'],
                        ['name' => 'Google Meet', 'logo' => 'https://via.placeholder.com/120x40/4285F4/FFFFFF?text=Google'],
                        ['name' => 'Zoom', 'logo' => 'https://via.placeholder.com/120x40/2D8CFF/FFFFFF?text=Zoom']
                    ];
                @endphp
                
                @foreach($partners ?? $defaultPartners as $partner)
                <img src="{{ $partner['logo'] }}" alt="{{ $partner['name'] }}" class="partner-logo">
                @endforeach
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
                            'image' => 'https://via.placeholder.com/300x200/2563EB/FFFFFF?text=Tech+Career'
                        ],
                        [
                            'title' => 'How to Start a Career in Tech',
                            'excerpt' => 'Essential tips and guidance for starting your journey in the technology industry...',
                            'date' => 'Dec 12, 2024',
                            'image' => 'https://via.placeholder.com/300x200/0891B2/FFFFFF?text=Tech+News'
                        ],
                        [
                            'title' => 'How to Start a Career in Tech',
                            'excerpt' => 'Essential tips and guidance for starting your journey in the technology industry...',
                            'date' => 'Dec 10, 2024',
                            'image' => 'https://via.placeholder.com/300x200/06B6D4/FFFFFF?text=Latest+Tech'
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
                        'https://via.placeholder.com/350x250/10B981/FFFFFF?text=Web+Project',
                        'https://via.placeholder.com/350x250/8B5CF6/FFFFFF?text=Mobile+App',
                        'https://via.placeholder.com/350x250/F59E0B/FFFFFF?text=Cloud+Solution',
                        'https://via.placeholder.com/350x250/EF4444/FFFFFF?text=E-commerce',
                        'https://via.placeholder.com/350x250/3B82F6/FFFFFF?text=Dashboard',
                        'https://via.placeholder.com/350x250/06B6D4/FFFFFF?text=Analytics'
                    ];
                @endphp
                
                @foreach($portfolio ?? $portfolioImages as $index => $image)
                <div class="portfolio-item">
                    @if(is_array($image))
                        <img src="{{ $image['image'] }}" alt="Portfolio {{ $index + 1 }}">
                    @else
                        <img src="{{ $image }}" alt="Portfolio {{ $index + 1 }}">
                    @endif
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
                            'image' => 'https://via.placeholder.com/150x200/000000/FFFFFF?text=iPhone+14+Pro+Max',
                            'rating' => 5
                        ],
                        [
                            'name' => 'Apple AirPods',
                            'image' => 'https://via.placeholder.com/150x200/FFFFFF/000000?text=AirPods',
                            'rating' => 5
                        ],
                        [
                            'name' => 'iPhone 14 Pro 128GB',
                            'image' => 'https://via.placeholder.com/150x200/1D1D1F/FFFFFF?text=iPhone+14+Pro',
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
                            'avatar' => 'https://via.placeholder.com/50x50/2563EB/FFFFFF?text=AK',
                            'content' => 'Sky Link provided exceptional IT services that transformed our business operations. Their team is professional and delivers quality results.'
                        ],
                        [
                            'name' => 'Meron Tadesse',
                            'position' => 'CTO, Digital Agency',
                            'avatar' => 'https://via.placeholder.com/50x50/0891B2/FFFFFF?text=MT',
                            'content' => 'Outstanding service and support. Sky Link helped us implement modern solutions that improved our efficiency significantly.'
                        ],
                        [
                            'name' => 'Daniel Haile',
                            'position' => 'Manager, StartUp Inc',
                            'avatar' => 'https://via.placeholder.com/50x50/10B981/FFFFFF?text=DH',
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
    // Additional page-specific JavaScript can go here
    console.log('Sky Link website loaded successfully');
@endsection