@extends('layouts.master')

@section('title', 'Sky Link - IT Services in Ethiopia')
@section('description', 'Leading IT services company in Ethiopia, helping businesses succeed with innovative technology solutions.')

@section('additional-styles')

@push('styles')

<style>



/* HERO SECTION IMAGE + TEXT ONLY */
.hero.light-hero {
    position: relative;
    min-height: 70vh; /* you can adjust this if needed */
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: #111; /* black text */
    background: transparent !important; /* no background color */
    overflow: hidden;
    padding: 4rem 0 2rem;
}

.hero-bg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    z-index: 1;
    opacity: 1; /* fully visible image */
}

.hero-content {
    position: relative;
    z-index: 2;
    max-width: 900px;
    margin: auto;
    padding: 1rem 2rem;
    background: none; /* no background card */
}

.hero-content h1,
.hero-content p {
    color: #111; /* pure black */
}

/* Optional: Remove any residual background on merged overview */



.company-overview-simple {
    background-color:  #ffffff; /* light blue */
    padding: 2rem;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
    max-width: 900px;
    margin: 2rem auto 0;
    z-index: 2;
    position: relative;
}

.company-overview-simple h2 {
    color: #0f172a; /* dark blue/gray for contrast */
    font-size: 2rem;
    margin-bottom: 1rem;
    text-align: center;
}

.company-overview-simple p {
    color: #1e293b; /* slate color */
    font-size: 1rem;
    line-height: 1.6;
    text-align: center;
    max-width: 700px;
    margin: 0 auto;
}

.hero-stats {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 2rem;
    margin-top: 2rem;
}

.hero-stat {
    text-align: center;
}

.hero-stat h3 {
    font-size: 1.75rem;
    color: #0284c7; /* vibrant blue */
    font-weight: bold;
}

.hero-stat p {
    color: #334155;
    font-size: 1rem;
}

/* Stats no cards, just numbers/text */
.hero-stats {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 2rem;
    margin-top: 2rem;
}

.hero-stat {
    text-align: center;
}

.hero-stat h3 {
    font-size: 2rem;
    font-weight: bold;
    color: #111;
}

.hero-stat p {
    font-size: 1rem;
    color: #333;
}


.partners {
    padding: 4rem 0;
    background: #fdf6e3;
    text-align: center;
}

.partners h3 {
    font-size: 2rem;
    margin-bottom: 2rem;
    color: #333;
}

.partners-carousel {
    overflow: hidden;
    position: relative;
    width: 100%;
}

.partners-track {
    display: flex;
    animation: scrollLeft 40s linear infinite;
    gap: 3rem;
}

.partner-logo {
    height: 100px; /* Increase logo size */
    width: auto;
    object-fit: contain;
    filter: grayscale(0%);
    transition: transform 0.3s ease;
}

.partner-logo:hover {
    transform: scale(1.1);
}

/* Animation keyframes */
@keyframes scrollLeft {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(-100%);
    }
}

/* Responsive */
@media (max-width: 768px) {
    .partner-logo {
        height: 70px;
    }

    .partners-track {
        gap: 2rem;
    }
}








.services {
    padding: 4rem 0;
    background-color: #ffffff; /* Light background */
    text-align: center;
}

.services h2 {
    font-size: 2.2rem;
    margin-bottom: 2rem;
    color: #1e3a8aff;
}

.services-carousel-wrapper {
    overflow: hidden;
    position: relative;
    width: 100%;
}

.services-carousel-track {
    display: flex;
    gap: 1.5rem;
    animation: scrollLeft 30s linear infinite;
}

.service-card {
    
    min-width: 50px; /* You can try 120px if needed */
    max-width: 360px; /* Limit the max width */
    height: 300px;
    padding: 0.75rem;
    background-color: #5ebdcb;
    color: #1f2937;
    border-radius: 0.75rem;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.06);
    flex-shrink: 0;
    text-align: center;
    display: flex;
    flex-direction: column;
    justify-content: center;
    transition: transform 0.3s ease;
}




.service-card:hover {
    transform: translateY(-6px);
}
.service-icon {
    font-size: 1.6rem;
    margin-bottom: 0.5rem;
    color: #2563eb; /* Blue icon for visual consistency */
}

.service-card h3 {
    font-size: 1rem;
    font-weight: 600;
    margin-bottom: 0.3rem;
}

.service-card p {
    font-size: 0.85rem;
    color: #4b5563; /* subtle gray text */
}



/* Infinite scroll */
@keyframes scrollLeft {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(-50%);
    }
}

/* Responsive tweaks */
@media (max-width: 768px) {
    .service-card {
        min-width: 220px;
        padding: 1.5rem;
    }

    .service-icon {
        font-size: 1.8rem;
    }
}





/* Scroll animation */
@keyframes scrollServices {
    0% {
        transform: translateX(0);
    }
    100% {
        transform: translateX(-50%);
    }
}

/* Responsive adjustments */
@media (max-width: 992px) {
    .service-card {
        flex: 0 0 45%;
    }
}

@media (max-width: 600px) {
    .service-card {
        flex: 0 0 80%;
    }

    .services-carousel-track {
        animation-duration: 25s;
    }
}







</style>
@endpush





@section('content')
<section class="hero light-hero" id="home">
    <!-- Background Image -->
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

    <!-- Hero Content -->
    <div class="container hero-content">
        <h1>{{ $heroTitle ?? 'Helping businesses succeed with the best IT services in Ethiopia' }}</h1>
        <p>{{ $heroDescription ?? 'Discover IT solutions that drive growth and innovation for your business. We provide comprehensive technology services tailored to your needs.' }}</p>

        <!-- Company Overview (merged into hero) -->
        <div class="company-overview-simple">
            <h2>Company Overview</h2>
            <p>{{ $companyDescription ?? 'Sky Link is a leading IT services company in Ethiopia, dedicated to providing innovative technology solutions that help businesses thrive in the digital age. With years of experience and a team of skilled professionals, we deliver comprehensive IT services and solutions.' }}</p>

            <div class="hero-stats">
                @php
                    $defaultStats = [
                        ['number' => '15+', 'label' => 'Years Experience'],
                        ['number' => '84k', 'label' => 'Happy Clients'],
                        ['number' => '600+', 'label' => 'Projects Completed']
                    ];
                @endphp

                @foreach($stats ?? $defaultStats as $stat)
                    <div class="hero-stat">
                        <h3>{{ $stat['number'] }}</h3>
                        <p>{{ $stat['label'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>





  <section class="partners">
    <div class="container">
        <h3>TRUSTED PARTNERS</h3>
        <div class="partners-carousel">
            <div class="partners-track">
                @foreach([
                    'minbertech.png', 'afar.webp', 'befan.jpg', 'betopia.webp', 'bilalul.jpg',
                    'hayat.jpg', 'iman.webp', 'kirbgebeya.webp', 'minbertv.webp',
                    'mirkuz.jpg', 'newleaf.webp'
                ] as $logo)
                    <img src="{{ asset('assets/images/' . $logo) }}" alt="Partner Logo" class="partner-logo">
                @endforeach
            </div>
        </div>
    </div>
</section>






<section class="services" id="services">
    <div class="container">
        <h2>Our Services</h2>
        <div class="services-carousel-wrapper">
            <div class="services-carousel-track">
                @foreach($services ?? $defaultServices as $service)
                <div class="service-card">
                    <div class="service-icon">
                        <i class="{{ $service['icon'] }}"></i>
                    </div>
                    <h3>{{ $service['title'] }}</h3>
                    <p>{{ $service['description'] }}</p>
                </div>
                @endforeach
                {{-- Duplicate for infinite loop effect --}}
                @foreach($services ?? $defaultServices as $service)
                <div class="service-card">
                    <div class="service-icon">
                        <i class="{{ $service['icon'] }}"></i>
                    </div>
                    <h3>{{ $service['title'] }}</h3>
                    <p>{{ $service['description'] }}</p>
                </div>
                @endforeach
            </div>
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



@push('scripts')


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
@endpush
