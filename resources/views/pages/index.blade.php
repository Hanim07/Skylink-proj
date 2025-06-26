@extends('layouts.master')

@section('title', 'Sky Link - IT Services in Ethiopia')
@section('description', 'Leading IT services company in Ethiopia, helping businesses succeed with innovative technology solutions.')

@section('additional-styles')

@push('styles')

<style>



/* HERO SECTION IMAGE + TEXT ONLY */
/* Hero Section */
.hero {
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    min-height: 100vh;
    margin-top: 80px;
    overflow: hidden;
    text-align: center;
    color: #111;
    background: transparent;
}

.hero-bg {
    position: absolute;
    inset: 0;
    background-size: cover;
    background-position: center;
    z-index: 1;
}

.hero-floating-icons {
    position: absolute;
    top: 1rem;
    right: 1rem;
    z-index: 3;
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.floating-icon {
    background: #0284c7;
    color: white;
    padding: 0.75rem;
    border-radius: 50%;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    cursor: pointer;
    transition: transform 0.3s;
    position: relative;
}

.floating-icon:hover {
    transform: scale(1.1);
}

.floating-icon::after {
    content: attr(data-tooltip);
    position: absolute;
    right: 110%;
    top: 50%;
    transform: translateY(-50%);
    background: #334155;
    color: white;
    padding: 4px 8px;
    border-radius: 5px;
    font-size: 0.75rem;
    white-space: nowrap;
    opacity: 0;
    transition: opacity 0.3s;
    pointer-events: none;
}

.floating-icon:hover::after {
    opacity: 1;
}

.hero-content {
    position: relative;
    z-index: 2;
    max-width: 900px;
    padding: 2rem;
}

.hero-content h1,
.hero-content p {
    color: #111;
}

.company-overview-simple {
    background: #ffffff;
    padding: 2rem;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
    margin-top: 2rem;
}

.hero-stats {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 2rem;
    margin-top: 2rem;
}

.hero-stat h3 {
    font-size: 2.5rem;
    color: #0284c7;
    font-weight: bold;
}

.hero-stat p {
    font-size: 1rem;
    color: #334155;
}


/* Partners */
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
    height: 100px;
    object-fit: contain;
    transition: transform 0.3s ease;
}

.partner-logo:hover {
    transform: scale(1.1);
}

@keyframes scrollLeft {
    0% { transform: translateX(0); }
    100% { transform: translateX(-100%); }
}

/* Services */
.services {
    padding: 4rem 0;
    background-color: #ffffff;
    text-align: center;
}

.services h2 {
    font-size: 2.2rem;
    margin-bottom: 2rem;
    color: #1e3a8a;
}

.services-carousel-track {
    display: flex;
    gap: 1.5rem;
    animation: scrollLeft 30s linear infinite;
}

.service-card {
    min-width: 250px;
    max-width: 360px;
    height: 300px;
    padding: 0.75rem;
    background-color: #5ebdcb;
    color: #1f2937;
    border-radius: 0.75rem;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.06);
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
    color: #2563eb;
}

.service-card h3 {
    font-size: 1rem;
    font-weight: 600;
    margin-bottom: 0.3rem;
}

.service-card p {
    font-size: 0.85rem;
    color: #4b5563;
}

/* News Section */
.news-card {
    background-color: white;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.05);
    overflow: hidden;
    width: 300px;
    margin: 1rem;
}

.news-card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    display: block;
    border-radius: 10px 10px 0 0;
}

.news-grid {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 2rem;
}

/* Responsive */
@media (max-width: 768px) {
    .partner-logo {
        height: 70px;
    }
    .service-card {
        min-width: 220px;
        padding: 1.5rem;
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
        <h1 data-aos="fade-up">{{ $heroTitle ?? 'Helping businesses succeed with the best IT services in Ethiopia' }}</h1>
        <p data-aos="fade-up" data-aos-delay="150">{{ $heroDescription ?? 'Discover IT solutions that drive growth and innovation for your business.' }}</p>

        <!-- Company Overview -->
        <div class="company-overview-simple" data-aos="zoom-in">
            <h2>Company Overview</h2>
            <p>{{ $companyDescription ?? 'Sky Link is a leading IT services company in Ethiopia, dedicated to delivering solutions that help businesses thrive in the digital age.' }}</p>

            <div class="hero-stats">
                @php
                    $defaultStats = [
                        ['number' => 15, 'label' => 'Years Experience'],
                        ['number' => 84000, 'label' => 'Happy Clients'],
                        ['number' => 600, 'label' => 'Projects Completed']
                    ];
                @endphp

                @foreach($stats ?? $defaultStats as $stat)
                    <div class="hero-stat">
                        <h3 class="counter" data-target="{{ $stat['number'] }}">0</h3>
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
                       'image' => 'assets/images/news1.jpg'  ],

                    [
                        'title' => 'How to Start a Career in Tech',
                        'excerpt' => 'Essential tips and guidance for starting your journey in the technology industry...',
                        'date' => 'Dec 12, 2024',
                       'image' => 'assets/images/news2.jpg' ],
                    [
                        'title' => 'How to Start a Career in Tech',
                        'excerpt' => 'Essential tips and guidance for starting your journey in the technology industry...',
                        'date' => 'Dec 10, 2024',
                       'image' => 'assets/images/news3.jpg'
                   ]
                ];
            @endphp

            @foreach($news ?? $defaultNews as $article)
                <article class="news-card">
                    <img src="{{ asset($article['image']) }}" alt="{{ $article['title'] }}" style="width: 100%; height: auto;">
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
                        asset('assets/images/portfolioafar.webp' ),
                        asset('assets/images/portfoliobilalul.webp' ),
                        asset('assets/images/portfolioelida.webp' ),
                        asset('assets/images/portfoliokirb.webp' ),
                        asset('assets/images/portfolio5.jpg' ),
                        asset('assets/images/portfolio6.jpg' )
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
                            'image' => asset('assets/images/products/software.png'),
                            'rating' => 5
                        ],
                        [
                            'name' => 'Apple AirPods',
                            'image' => asset('assets/images/products/cecurity.jpg'),
                            'rating' => 5
                        ],
                        [
                            'name' => 'iPhone 14 Pro 128GB',
                            'image' => asset('assets/images/products/erp.jpg'),
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
                    'position' => 'CEO, Tech Solutions Ethiopia',
                    'avatar' => asset('assets/images/clients/client1.jpg'),
                    'content' => 'Sky Link provided exceptional IT services that transformed our business operations. Their team is professional and delivers quality results on time.'
                ],
                [
                    'name' => 'Meron Tadesse',
                    'position' => 'CTO, Digital Innovations',
                    'avatar' => asset('assets/images/clients/client2.jpg'),
                    'content' => 'Outstanding service and support. Sky Link helped us implement modern solutions that improved our efficiency and productivity significantly.'
                ],
                [
                    'name' => 'Daniel Haile',
                    'position' => 'Manager, StartUp Ethiopia',
                    'avatar' => asset('assets/images/clients/client3.jpg'),
                    'content' => 'Reliable, innovative, and customer-focused. Sky Link is our go-to partner for all IT-related needs and digital transformation solutions.'
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


<script>
    function animateCounter(counter) {
        const target = +counter.dataset.target;
        const speed = 200;
        const step = Math.ceil(target / speed);

        const update = () => {
            const value = +counter.innerText;
            if (value < target) {
                counter.innerText = Math.min(value + step, target);
                requestAnimationFrame(update);
            } else {
                counter.innerText = target.toLocaleString();
            }
        };
        update();
    }

    document.addEventListener("DOMContentLoaded", () => {
        document.querySelectorAll('.counter').forEach(animateCounter);
    });

    function handleIconClick(type) {
        if (type === 'phone') {
            window.location.href = 'tel:+251911234567';
        } else if (type === 'email') {
            window.location.href = 'mailto:info@skylink.com';
        } else if (type === 'chat') {
            alert('Chat support coming soon!');
        }
    }
</script>

@endpush
