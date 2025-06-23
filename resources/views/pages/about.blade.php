@extends('layouts.master')

@section('title', 'About Us - Sky Link IT Solutions')
@section('description', 'Learn more about Sky Link, Ethiopia\'s leading IT services company providing innovative technology solutions for over 15 years.')

@push('styles')
<style>
    /* About Page Specific Styles */
    .about-hero {
        background: linear-gradient(135deg, #1e40af 0%, #3b82f6 50%, #06b6d4 100%);
        min-height: 80vh;
        display: flex;
        align-items: center;
        position: relative;
        overflow: hidden;
        margin-top: 80px;
    }

    .about-hero-bg {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 800"><defs><pattern id="abouttech" patternUnits="userSpaceOnUse" width="100" height="100"><circle cx="50" cy="50" r="2" fill="white" opacity="0.1"/></pattern></defs><rect width="100%" height="100%" fill="url(%23abouttech)"/></svg>') center/cover;
        opacity: 0.1;
    }

    .about-hero-content {
        position: relative;
        z-index: 2;
        color: white;
        text-align: center;
        max-width: 800px;
        margin: 0 auto;
    }

    .about-hero h1 {
        font-size: 4rem;
        font-weight: 700;
        margin-bottom: 1.5rem;
        line-height: 1.2;
    }

    .about-hero p {
        font-size: 1.3rem;
        margin-bottom: 2rem;
        opacity: 0.9;
        line-height: 1.6;
    }

    .hero-stats {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
        gap: 2rem;
        margin-top: 3rem;
    }

    .hero-stat {
        text-align: center;
        padding: 1rem;
    }

    .hero-stat h3 {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
        color: #fbbf24;
    }

    .hero-stat p {
        font-size: 1rem;
        opacity: 0.8;
    }

    /* Company Story Section */
    .company-story {
        padding: 6rem 0;
        background: white;
    }

    .story-content {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 4rem;
        align-items: center;
        margin-bottom: 4rem;
    }

    .story-text h2 {
        font-size: 2.5rem;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 1.5rem;
    }

    .story-text p {
        color: #64748b;
        line-height: 1.8;
        font-size: 1.1rem;
        margin-bottom: 1.5rem;
    }

    .story-image {
        position: relative;
        border-radius: 1rem;
        overflow: hidden;
        box-shadow: 0 20px 40px rgba(0,0,0,0.1);
    }

    .story-image img {
        width: 100%;
        height: 400px;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .story-image:hover img {
        transform: scale(1.05);
    }

    /* Mission Vision Section */
    .mission-vision {
        padding: 6rem 0;
        background: #f8fafc;
    }

    .mission-vision h2 {
        text-align: center;
        font-size: 2.5rem;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 3rem;
    }

    .mission-vision-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 3rem;
    }

    .mission-card, .vision-card {
        background: white;
        padding: 3rem;
        border-radius: 1rem;
        text-align: center;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        transition: transform 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .mission-card:hover, .vision-card:hover {
        transform: translateY(-10px);
    }

    .mission-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, #3b82f6, #06b6d4);
    }

    .vision-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, #10b981, #34d399);
    }

    .mission-card h3, .vision-card h3 {
        font-size: 1.8rem;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 1.5rem;
    }

    .mission-card p, .vision-card p {
        color: #64748b;
        line-height: 1.6;
        font-size: 1.1rem;
    }

    /* Values Section */
    .values-section {
        padding: 6rem 0;
        background: white;
    }

    .values-section h2 {
        text-align: center;
        font-size: 2.5rem;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 3rem;
    }

    .values-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 2rem;
    }

    .value-card {
        background: #f8fafc;
        padding: 2.5rem;
        border-radius: 1rem;
        text-align: center;
        transition: all 0.3s ease;
        border: 2px solid transparent;
    }

    .value-card:hover {
        background: white;
        border-color: #3b82f6;
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(59, 130, 246, 0.1);
    }

    .value-icon {
        width: 80px;
        height: 80px;
        background: linear-gradient(135deg, #3b82f6, #06b6d4);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1.5rem;
        font-size: 2rem;
        color: white;
    }

    .value-card h3 {
        font-size: 1.3rem;
        font-weight: 600;
        color: #1e293b;
        margin-bottom: 1rem;
    }

    .value-card p {
        color: #64748b;
        line-height: 1.6;
    }

    /* Team Section */
    .team-section {
        padding: 6rem 0;
        background: #f8fafc;
    }

    .team-section h2 {
        text-align: center;
        font-size: 2.5rem;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 1rem;
    }

    .team-subtitle {
        text-align: center;
        color: #64748b;
        font-size: 1.1rem;
        margin-bottom: 3rem;
        max-width: 600px;
        margin-left: auto;
        margin-right: auto;
    }

    .team-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 2rem;
    }

    .team-card {
        background: white;
        border-radius: 1rem;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        transition: transform 0.3s ease;
    }

    .team-card:hover {
        transform: translateY(-10px);
    }

    .team-image {
        width: 100%;
        height: 250px;
        background: linear-gradient(135deg, #e2e8f0, #cbd5e1);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 4rem;
        color: #64748b;
    }

    .team-info {
        padding: 2rem;
        text-align: center;
    }

    .team-info h3 {
        font-size: 1.3rem;
        font-weight: 600;
        color: #1e293b;
        margin-bottom: 0.5rem;
    }

    .team-info p {
        color: #64748b;
        margin-bottom: 1rem;
    }

    .team-social {
        display: flex;
        justify-content: center;
        gap: 1rem;
    }

    .team-social a {
        width: 35px;
        height: 35px;
        background: #f1f5f9;
        color: #64748b;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .team-social a:hover {
        background: #3b82f6;
        color: white;
        transform: translateY(-2px);
    }

    /* CTA Section */
    .cta-section {
        padding: 6rem 0;
        background: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%);
        text-align: center;
        color: white;
    }

    .cta-content h2 {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 1rem;
    }

    .cta-content p {
        font-size: 1.2rem;
        opacity: 0.9;
        margin-bottom: 2rem;
        max-width: 600px;
        margin-left: auto;
        margin-right: auto;
    }

    .cta-buttons {
        display: flex;
        gap: 1rem;
        justify-content: center;
        flex-wrap: wrap;
    }

    .cta-btn {
        padding: 1rem 2rem;
        border-radius: 0.5rem;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
    }

    .cta-btn.primary {
        background: white;
        color: #1e40af;
    }

    .cta-btn.primary:hover {
        background: #f1f5f9;
        transform: translateY(-2px);
    }

    .cta-btn.secondary {
        background: transparent;
        color: white;
        border: 2px solid white;
    }

    .cta-btn.secondary:hover {
        background: white;
        color: #1e40af;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .about-hero h1 {
            font-size: 2.5rem;
        }

        .about-hero p {
            font-size: 1.1rem;
        }

        .story-content {
            grid-template-columns: 1fr;
            gap: 2rem;
        }

        .hero-stats {
            grid-template-columns: repeat(2, 1fr);
        }

        .mission-vision-grid {
            grid-template-columns: 1fr;
        }

        .values-grid {
            grid-template-columns: 1fr;
        }

        .team-grid {
            grid-template-columns: 1fr;
        }

        .cta-buttons {
            flex-direction: column;
            align-items: center;
        }
    }

    @media (max-width: 480px) {
        .about-hero h1 {
            font-size: 2rem;
        }

        .story-text h2,
        .mission-vision h2,
        .values-section h2,
        .team-section h2,
        .cta-content h2 {
            font-size: 2rem;
        }

        .hero-stats {
            grid-template-columns: 1fr;
        }
    }
</style>
@endpush

@section('content')
    <!-- About Hero Section -->
    <section class="about-hero">
        <div class="about-hero-bg"></div>
        <div class="container">
            <div class="about-hero-content">
                <h1>About Sky Link</h1>
                <p>We are Ethiopia's leading IT services company, dedicated to transforming businesses through innovative technology solutions. For over 15 years, we've been at the forefront of digital transformation, helping organizations achieve their goals through cutting-edge technology.</p>
                
                <div class="hero-stats">
                    <div class="hero-stat">
                        <h3>15+</h3>
                        <p>Years of Excellence</p>
                    </div>
                    <div class="hero-stat">
                        <h3>500+</h3>
                        <p>Projects Delivered</p>
                    </div>
                    <div class="hero-stat">
                        <h3>200+</h3>
                        <p>Happy Clients</p>
                    </div>
                    <div class="hero-stat">
                        <h3>50+</h3>
                        <p>Expert Team</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Company Story Section -->
    <section class="company-story">
        <div class="container">
            <div class="story-content">
                <div class="story-text">
                    <h2>Our Story</h2>
                    <p>Founded in 2009, Sky Link began as a small technology startup with a big vision: to bridge the digital divide in Ethiopia and empower businesses with world-class IT solutions.</p>
                    <p>What started as a team of passionate developers has grown into Ethiopia's most trusted IT services company. We've witnessed and contributed to the country's digital transformation, helping businesses of all sizes leverage technology to achieve unprecedented growth.</p>
                    <p>Today, we continue to innovate and lead the industry with our comprehensive suite of services, from web development and mobile applications to cloud solutions and digital transformation consulting.</p>
                </div>
                <div class="story-image">
                    <img src="https://via.placeholder.com/500x400/3b82f6/FFFFFF?text=Sky+Link+Office" alt="Sky Link Office" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision Section -->
    <section class="mission-vision">
        <div class="container">
            <h2>Our Mission & Vision</h2>
            <div class="mission-vision-grid">
                <div class="mission-card">
                    <h3>Our Mission</h3>
                    <p>To empower Ethiopian businesses with innovative technology solutions that drive growth, efficiency, and digital transformation. We are committed to delivering exceptional value through cutting-edge technology, expert consultation, and unwavering support.</p>
                </div>
                <div class="vision-card">
                    <h3>Our Vision</h3>
                    <p>To be the leading technology partner in Ethiopia and East Africa, recognized for our innovation, excellence, and contribution to the region's digital economy. We envision a future where every business has access to world-class technology solutions.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="values-section">
        <div class="container">
            <h2>Our Core Values</h2>
            <div class="values-grid">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3>Innovation</h3>
                    <p>We constantly explore new technologies and methodologies to provide cutting-edge solutions that keep our clients ahead of the competition.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <h3>Excellence</h3>
                    <p>We are committed to delivering the highest quality in everything we do, from code quality to customer service and project delivery.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Integrity</h3>
                    <p>We build trust through transparency, honesty, and ethical business practices in all our client relationships and partnerships.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Collaboration</h3>
                    <p>We believe in the power of teamwork and work closely with our clients to understand their needs and deliver tailored solutions.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3>Growth</h3>
                    <p>We are dedicated to continuous learning and improvement, both for our team and our clients' businesses.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h3>Passion</h3>
                    <p>We are passionate about technology and its potential to transform businesses and improve lives in our community.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section">
        <div class="container">
            <h2>Meet Our Leadership Team</h2>
            <p class="team-subtitle">Our experienced leadership team brings together decades of expertise in technology, business, and innovation to guide Sky Link's vision and strategy.</p>
            
            <div class="team-grid">
                @php
                    $teamMembers = [
                        [
                            'name' => 'Dawit Mekonnen',
                            'position' => 'Chief Executive Officer',
                            'image' => 'https://via.placeholder.com/280x250/1e40af/FFFFFF?text=DM',
                            'social' => [
                                'linkedin' => '#',
                                'twitter' => '#',
                                'email' => 'dawit@skylink.et'
                            ]
                        ],
                        [
                            'name' => 'Sara Tadesse',
                            'position' => 'Chief Technology Officer',
                            'image' => 'https://via.placeholder.com/280x250/10b981/FFFFFF?text=ST',
                            'social' => [
                                'linkedin' => '#',
                                'twitter' => '#',
                                'email' => 'sara@skylink.et'
                            ]
                        ],
                        [
                            'name' => 'Michael Haile',
                            'position' => 'Head of Development',
                            'image' => 'https://via.placeholder.com/280x250/8b5cf6/FFFFFF?text=MH',
                            'social' => [
                                'linkedin' => '#',
                                'twitter' => '#',
                                'email' => 'michael@skylink.et'
                            ]
                        ],
                        [
                            'name' => 'Hanan Ahmed',
                            'position' => 'Head of Design',
                            'image' => 'https://via.placeholder.com/280x250/ef4444/FFFFFF?text=HA',
                            'social' => [
                                'linkedin' => '#',
                                'twitter' => '#',
                                'email' => 'hanan@skylink.et'
                            ]
                        ]
                    ];
                @endphp

                @foreach($teamMembers as $member)
                <div class="team-card">
                    <div class="team-image">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="team-info">
                        <h3>{{ $member['name'] }}</h3>
                        <p>{{ $member['position'] }}</p>
                        <div class="team-social">
                            <a href="{{ $member['social']['linkedin'] }}"><i class="fab fa-linkedin"></i></a>
                            <a href="{{ $member['social']['twitter'] }}"><i class="fab fa-twitter"></i></a>
                            <a href="mailto:{{ $member['social']['email'] }}"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Ready to Transform Your Business?</h2>
                <p>Join hundreds of satisfied clients who have transformed their businesses with our innovative IT solutions. Let's discuss how we can help you achieve your digital transformation goals.</p>
                <div class="cta-buttons">
                    <a href="{{ route('contact') }}" class="cta-btn primary">
                        <i class="fas fa-phone"></i>
                        Get In Touch
                    </a>
                    <a href="{{ route('portfolio') }}" class="cta-btn secondary">
                        <i class="fas fa-eye"></i>
                        View Our Work
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Animate elements on scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    // Observe all animated elements
    const animatedElements = document.querySelectorAll('.value-card, .team-card, .mission-card, .vision-card');
    animatedElements.forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'all 0.6s ease';
        observer.observe(el);
    });

    // Counter animation for hero stats
    const counters = document.querySelectorAll('.hero-stat h3');
    const animateCounters = () => {
        counters.forEach(counter => {
            const target = parseInt(counter.textContent);
            const increment = target / 100;
            let current = 0;
            
            const updateCounter = () => {
                if (current < target) {
                    current += increment;
                    counter.textContent = Math.ceil(current) + (counter.textContent.includes('+') ? '+' : '');
                    requestAnimationFrame(updateCounter);
                } else {
                    counter.textContent = target + (counter.textContent.includes('+') ? '+' : '');
                }
            };
            
            updateCounter();
        });
    };

    // Start counter animation when hero is visible
    const heroObserver = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                setTimeout(animateCounters, 500);
                heroObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });

    const heroStats = document.querySelector('.hero-stats');
    if (heroStats) {
        heroObserver.observe(heroStats);
    }

    // Add hover effects to team cards
    const teamCards = document.querySelectorAll('.team-card');
    teamCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-10px) scale(1.02)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(-10px) scale(1)';
        });
    });

    // Smooth scroll for CTA buttons
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
});
</script>
@endpush