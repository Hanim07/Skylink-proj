@extends('layouts.master')

@section('title', 'Sky Link - IT Services in Ethiopia')
@section('description', 'Leading IT services company in Ethiopia, helping businesses succeed with innovative technology solutions.')

@section('additional-styles')

@push('styles')

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
        overflow-x: hidden;
    }

   

    /* Hero Section - Updated to match the image */
    .hero-section {
        background: linear-gradient(rgba(59, 130, 246, 0.8), rgba(30, 64, 175, 0.8)), url('https://images.unsplash.com/photo-1521737604893-d14cc237f11d?w=1200&h=600&fit=crop') center/cover;
        min-height: 40vh;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        text-align: center;
        position: relative;
    }

    .hero-content {
        max-width: 800px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .hero-title {
        font-size: 72px;
        font-weight: 700;
        margin-bottom: 30px;
        line-height: 1.1;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    }

    .hero-breadcrumb {
        font-size: 18px;
        opacity: 0.9;
        font-weight: 400;
    }

    .hero-breadcrumb a {
        color: white;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .hero-breadcrumb a:hover {
        text-decoration: underline;
        opacity: 0.8;
    }

    .breadcrumb-separator {
        margin: 0 10px;
        opacity: 0.7;
    }

    /* About Section - Updated to match exact design */
    .about-section {
        padding: 80px 0;
        background: #f8f9fa;
    }

    .section-tag {
        color: #3B82F6;
        font-size: 14px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 15px;
        display: block;
    }

    .section-title {
        font-size: 32px;
        font-weight: 700;
        color: #333;
        margin-bottom: 25px;
        line-height: 1.3;
    }

    .about-text {
        color: #666;
        font-size: 15px;
        line-height: 1.7;
        margin-bottom: 30px;
    }

    .about-features-list {
        margin-bottom: 35px;
    }

    .feature-row {
        display: flex;
        gap: 60px;
        margin-bottom: 15px;
    }

    .feature-item-check {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .feature-item-check i {
        color: #3B82F6;
        font-size: 16px;
        width: 16px;
    }

    .feature-item-check span {
        font-weight: 500;
        color: #333;
        font-size: 15px;
    }

    .contact-info-box {
        color: rgb(0, 30, 255);
        padding: 20px 25px;
        border-radius: 8px;
        display: flex;
        align-items: center;
        gap: 20px;
        max-width: 280px;
    }

    .contact-icon-box {
        width: 50px;
        height: 50px;
        background: rgb(7, 85, 255);
        border-radius: 8px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .contact-icon-box i {
        font-size: 20px;
        color: white;
    }

    .contact-details h6 {
        margin: 0 0 5px 0;
        font-weight: 600;
        font-size: 14px;
        color: rgb(16, 15, 15);
    }

    .contact-details p {
        margin: 0;
        font-size: 16px;
        font-weight: 600;
        color: rgb(38, 120, 227);
    }

    .about-image-container {
        position: relative;
        padding-left: 20px;
    }

    .about-main-image {
        width: 100%;
        height: auto;
        border-radius: 10px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    /* Video Section */
    .video-section {
        padding: 70px 0;
        background: white;
        
    }

    .video-title {
        color: #3B82F6;
        font-size: 24px;
        font-weight: 700;
        margin-bottom: 40px;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .video-container {
        position: relative;

        max-width: 100%;
        margin: 0 auto;
        overflow: hidden;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
    }

    .video-thumbnail {
        width: 100%;
        height: 450px;
        background: url('https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=800&h=450&fit=crop') center/cover;
        position: relative;
    }

    .play-button {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 80px;
        height: 80px;
        background: rgba(255, 255, 255, 0.9);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .play-button:hover {
        background: white;
        transform: translate(-50%, -50%) scale(1.1);
    }

    .play-button i {
        font-size: 24px;
        color: #3B82F6;
        margin-left: 3px;
    }

    .video-caption {
        position: absolute;
        bottom: 20px;
        left: 50%;
        transform: translateX(-50%);
        background: rgba(0, 0, 0, 0.7);
        color: white;
        padding: 8px 16px;
        border-radius: 20px;
        font-size: 14px;
    }

    /* Team Section */
    .team-section {
        padding: 100px 0;
        background: #f8f9fa;
    }

    .team-title {
        text-align: center;
        margin-bottom: 60px;
    }

    .team-title .section-tag {
        display: block;
        text-align: center;
    }

    .team-title h2 {
        font-size: 36px;
        font-weight: 700;
        color: #333;
        margin-top: 15px;
    }

    .team-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
        margin-bottom: 60px;
    }

    .team-member {
        background: white;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        text-align: center;
    }

    .team-member:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
    }

    .team-photo {
        width: 100%;
        height: 250px;
        background: #e9ecef;
        position: relative;
        overflow: hidden;
    }

    .team-photo img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .team-info {
        padding: 25px;
    }

    .team-name {
        font-size: 20px;
        font-weight: 600;
        color: #3B82F6;
        margin-bottom: 5px;
    }

    .team-role {
        color: #666;
        font-size: 14px;
    }

    /* Growth Section */
    .growth-section {
        padding: 100px 0;
        background: white;
    }

    .growth-header {
        text-align: center;
        margin-bottom: 80px;
    }

    .growth-header .section-tag {
        display: block;
        text-align: center;
    }

    .growth-header h2 {
        font-size: 36px;
        font-weight: 700;
        color: #333;
        margin-top: 15px;
        line-height: 1.2;
    }

    .growth-content {
        display: grid;
        grid-template-columns: 1fr 400px 1fr;
        gap: 40px;
        align-items: center;
    }

    .growth-features {
        display: flex;
        flex-direction: column;
        gap: 40px;
    }

    .growth-feature {
        display: flex;
        align-items: flex-start;
        gap: 20px;
    }

    .feature-icon {
        width: 60px;
        height: 60px;
        background: #3B82F6;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 24px;
        flex-shrink: 0;
    }

    .feature-content h4 {
        font-size: 18px;
        font-weight: 600;
        color: #333;
        margin-bottom: 10px;
    }

    .feature-content p {
        color: #666;
        font-size: 14px;
        line-height: 1.6;
    }

    .growth-image {
        width: 100%;
        height: 400px;
        background: url('https://images.unsplash.com/photo-1552664730-d307ca884978?w=400&h=400&fit=crop') center/cover;
        border-radius: 15px;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
    }

    /* Awards Section */
    .awards-section {
        padding: 100px 0;
        background: #f8f9fa;
    }

    .awards-header {
        text-align: center;
        margin-bottom: 60px;
    }

    .awards-header .section-tag {
        display: block;
        text-align: center;
    }

    .awards-header h2 {
        font-size: 36px;
        font-weight: 700;
        color: #333;
        margin-top: 15px;
    }

    .awards-categories {
        display: flex;
        justify-content: center;
        gap: 40px;
        margin-bottom: 50px;
    }

    .award-category {
        text-align: center;
    }

    .award-category h4 {
        font-size: 18px;
        font-weight: 600;
        color: #333;
        margin-bottom: 5px;
    }

    .award-category span {
        color: #3B82F6;
        font-size: 14px;
        font-weight: 500;
    }

    .awards-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
        margin-bottom: 30px;
    }

    .award-item {
        background: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    .award-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
    }

    .award-image {
        width: 100%;
        height: 200px;
        background: #e9ecef;
    }

    .award-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .award-content {
        padding: 20px;
    }

    .award-title {
        font-size: 16px;
        font-weight: 600;
        color: #333;
        margin-bottom: 10px;
        line-height: 1.3;
    }

    .award-year {
        color: #666;
        font-size: 14px;
    }

    .awards-grid-bottom {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 30px;
    }

    

    /* Responsive Design */
    @media (max-width: 992px) {
        .hero-title {
            font-size: 48px;
        }

        .section-title {
            font-size: 28px;
        }

        .team-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .growth-content {
            grid-template-columns: 1fr;
            text-align: center;
        }

        .awards-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .footer-content {
            grid-template-columns: 1fr 1fr;
            gap: 30px;
        }
    }

    @media (max-width: 768px) {
        .navbar-nav {
            display: none;
        }

        .hero-title {
            font-size: 36px;
        }

        .about-features {
            flex-direction: column;
            gap: 20px;
        }

        .team-grid {
            grid-template-columns: 1fr;
        }

        .awards-categories {
            flex-direction: column;
            gap: 20px;
        }

        .awards-grid,
        .awards-grid-bottom {
            grid-template-columns: 1fr;
        }

        .footer-content {
            grid-template-columns: 1fr;
        }
    }
</style>
@section('content')

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="hero-content">
            <h1 class="hero-title">About Us</h1>
            <div class="hero-breadcrumb">
                <a href="">Home</a>
                <span class="breadcrumb-separator">/</span>
                <span>About Us</span>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="about-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="section-tag">About Us</div>
                <h2 class="section-title">The Best IT Solution With 10 Years of Experience</h2>
                <p class="about-text">
                    Pellentesque eget lorem lorem. Ut in lobortis mauris, vitae pulvinar ex. Morbi 
                    congue mauris vel augue cursus blandit. Mauris a accumsan mauris, vel 
                    consectetur lorem. Ut in lobortis mauris, vitae pulvinar ex.
                </p>
                
                <div class="about-features-list">
                    <div class="feature-row">
                        <div class="feature-item-check">
                            <i class="fas fa-check"></i>
                            <span>Award Winning</span>
                        </div>
                        <div class="feature-item-check">
                            <i class="fas fa-check"></i>
                            <span>24/7 Support</span>
                        </div>
                    </div>
                    <div class="feature-row">
                        <div class="feature-item-check">
                            <i class="fas fa-check"></i>
                            <span>Professional Staff</span>
                        </div>
                        <div class="feature-item-check">
                            <i class="fas fa-check"></i>
                            <span>Fair Prices</span>
                        </div>
                    </div>
                </div>
                
                <div class="contact-info-box">
                    <div class="contact-icon-box">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="contact-details">
                        <h6>Call to ask any question</h6>
                        <p>+91 1234567890</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-image-container">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=600&h=400&fit=crop" 
                         alt="Team working together" class="about-main-image">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Video Section -->
<section class="video-section">
    <div class="container">
        <h2 class="video-title">Let's See Our Promo Video</h2>
        <div class="video-container">
            <div class="video-thumbnail">
                <div class="play-button">
                    <i class="fas fa-play"></i>
                </div>
                <div class="video-caption">Watch video</div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="team-section">
    <div class="container">
        <div class="team-title">
            <span class="section-tag">Our Team</span>
            <h2>Professional Stuffs Ready to<br>Help Your Business</h2>
        </div>
        
        <div class="team-grid">
            <div class="team-member">
                <div class="team-photo">
                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=300&h=250&fit=crop&crop=face" alt="Alex Taylor">
                </div>
                <div class="team-info">
                    <h4 class="team-name">Alex Taylor</h4>
                    <p class="team-role">Engineer</p>
                </div>
            </div>
            
            <div class="team-member">
                <div class="team-photo">
                    <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?w=300&h=250&fit=crop&crop=face" alt="Lisa Patel">
                </div>
                <div class="team-info">
                    <h4 class="team-name">Lisa Patel</h4>
                    <p class="team-role">Professor</p>
                </div>
            </div>
            
            <div class="team-member">
                <div class="team-photo">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=300&h=250&fit=crop&crop=face" alt="Rachel Taylor">
                </div>
                <div class="team-info">
                    <h4 class="team-name">Rachel Taylor</h4>
                    <p class="team-role">Scientist</p>
                </div>
            </div>
            
            <div class="team-member">
                <div class="team-photo">
                    <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=300&h=250&fit=crop&crop=face" alt="Alex Taylor">
                </div>
                <div class="team-info">
                    <h4 class="team-name">Alex Taylor</h4>
                    <p class="team-role">Engineer</p>
                </div>
            </div>
            
            <div class="team-member">
                <div class="team-photo">
                    <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=300&h=250&fit=crop&crop=face" alt="Lisa Patel">
                </div>
                <div class="team-info">
                    <h4 class="team-name">Lisa Patel</h4>
                    <p class="team-role">Professor</p>
                </div>
            </div>
            
            <div class="team-member">
                <div class="team-photo">
                    <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=300&h=250&fit=crop&crop=face" alt="Rachel Taylor">
                </div>
                <div class="team-info">
                    <h4 class="team-name">Rachel Taylor</h4>
                    <p class="team-role">Scientist</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Growth Section -->
<section class="growth-section">
    <div class="container">
        <div class="growth-header">
            <span class="section-tag">Our Company</span>
            <h2>We Are Here to Grow Your<br>Business Exponentially</h2>
        </div>
        
        <div class="growth-content">
            <div class="growth-features">
                <div class="growth-feature">
                    <div class="feature-icon">
                        <i class="fas fa-industry"></i>
                    </div>
                    <div class="feature-content">
                        <h4>Best in Industry</h4>
                        <p>Best in Industry? It's been said to describe a company, product, service or process that is considered to be the finest or most outstanding in its particular industry or field.</p>
                    </div>
                </div>
                
                <div class="growth-feature">
                    <div class="feature-icon">
                        <i class="fas fa-trophy"></i>
                    </div>
                    <div class="feature-content">
                        <h4>Award Winning</h4>
                        <p>Fusce tempor magna mi, non egestas velit ultricies nec. Aenean convallis, risus non condimentum gravida, odio mauris ullamcorper felis, ut venenatis purus ex eu mi. Quisque imperdiet lacinia urna, a placerat sapien pretium eu.</p>
                    </div>
                </div>
            </div>
            
            <div class="growth-image"></div>
            
            <div class="growth-features">
                <div class="growth-feature">
                    <div class="feature-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="feature-content">
                        <h4>Professional Staff</h4>
                        <p>Professional staff typically refers to individuals who work in an organization and have specialized knowledge, skills, and expertise in their respective fields.</p>
                    </div>
                </div>
                
                <div class="growth-feature">
                    <div class="feature-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <div class="feature-content">
                        <h4>24/7 Support</h4>
                        <p>24/7 support refers to a customer service or technical support service that is available 24 hours a day, 7 days a week. This means that customers can get help or assistance at any time, day or night.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Awards Section -->
<section class="awards-section">
    <div class="container">
        <div class="awards-header">
            <span class="section-tag">Our Awards</span>
            <h2>We Have Achieved Different<br>Awards</h2>
        </div>
        
        <div class="awards-categories">
            <div class="award-category">
                <h4>Awards/Features</h4>
                <span>Awards</span>
            </div>
            <div class="award-category">
                <h4>Features</h4>
                <span>Features</span>
            </div>
        </div>
        
        <div class="awards-grid">
            <div class="award-item">
                <div class="award-image">
                    <img src="https://images.unsplash.com/photo-1560472354-b33ff0c44a43?w=300&h=200&fit=crop" alt="Award">
                </div>
                <div class="award-content">
                    <h4 class="award-title">Global's most respected Architecture CEO</h4>
                    <p class="award-year">2019</p>
                </div>
            </div>
            
            <div class="award-item">
                <div class="award-image">
                    <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=300&h=200&fit=crop" alt="Award">
                </div>
                <div class="award-content">
                    <h4 class="award-title">Architizer A+Awards Winning Project - Corporates</h4>
                    <p class="award-year">2018</p>
                </div>
            </div>
            
            <div class="award-item">
                <div class="award-image">
                    <img src="https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?w=300&h=200&fit=crop" alt="Award">
                </div>
                <div class="award-content">
                    <h4 class="award-title">International Architecture Awards - Corporates</h4>
                    <p class="award-year">2017</p>
                </div>
            </div>
        </div>
        
        <div class="awards-grid-bottom">
            <div class="award-item">
                <div class="award-image">
                    <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=300&h=200&fit=crop" alt="Award">
                </div>
                <div class="award-content">
                    <h4 class="award-title">1st Place - Design Competition for Juilliard Training Center</h4>
                    <p class="award-year">2016</p>
                </div>
            </div>
            
            <div class="award-item">
                <div class="award-image">
                    <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?w=300&h=200&fit=crop" alt="Award">
                </div>
                <div class="award-content">
                    <h4 class="award-title">1st Place - Design Competition for New Campus - Ghent Univ</h4>
                    <p class="award-year">2015</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Play button functionality
    document.querySelector('.play-button').addEventListener('click', function() {
        alert('Video would play here - integrate with your preferred video player');
    });

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
</script>
@endpush
