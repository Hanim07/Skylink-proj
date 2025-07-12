@extends('layouts.master')

@section('title', 'Sky Link - IT Services in Ethiopia')
@section('description', 'Leading IT services company in Ethiopia, helping businesses succeed with innovative technology solutions.')

@section('additional-styles')

@push('styles')

<style>
    /* Hero Section - Updated to match the image */
    .hero-section {
    background: 
        linear-gradient(rgba(133, 174, 240, 0.4), rgba(248, 248, 249, 0.8)),
        url('{{ asset('assets/images/about/teammember2.JPG') }}') no-repeat center top;
    background-size: cover;
    min-height: 40vh;
    display: flex;
    flex-direction: column; 
    justify-content: flex-end; 
    align-items: center;
    color: white;
    text-align: center;
    background-position: center 35%; 
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
        background: url('{{ asset('assets/images/about/promoo.jpg') }}') center/cover;
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
    height: 350px;
    background: #e9ecef;
    position: relative;
    overflow: hidden;
}

.team-photo img {
    width: 100%;
    height: 100%;
    object-fit: cover;
object-position: 50% 15%; 
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
    height: 300px;
    background: url('{{ asset('assets/images/growing.png') }}') no-repeat;
    background-size: contain; /* Ensures the entire image is visible */
    border-radius: 15px;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
    background-color: #f9f9f9; /* Optional: fallback if image doesn't cover fully */
}
    .growth-image img {
        width: 100%;
        height: 800px;
        object-fit: cover;
        border-radius: 15px;
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
    }

    @media (max-width: 768px) {
   
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

</style>
@section('content')

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="hero-content">
            <h1 class="hero-title">About Us</h1>
            <div class="hero-breadcrumb">
                <a href="{{route('home')}}">Home</a>
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
                <h2 class="section-title">The Best IT Solution With Many Years of Experience</h2>
                <p class="about-text">
                    At Sky Link Technologies, we turn visionary concepts into cutting-edge digital solutions. With a passion for technology and a commitment to excellence, we empower businesses to thrive in the digital age.
                </p>
                
                <div class="about-features-list">
                    <div class="feature-row">
                        <div class="feature-item-check">
                            <i class="fas fa-check"></i>
                            <span>Award Winning</span>
                        </div>
                        <div class="feature-item-check">
                            <i class="fas fa-check"></i>
                            <span>Dedicated Support</span>
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
                        <p>+251911027667</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-image-container">
                    <img src="{{ asset('assets/images/about/teammember.JPG') }}" 
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
        <div class="video-container position-relative">
            <!-- Video element -->
            <video id="promoVideo" width="100%" height="auto" controls style="display: none;">
                <source src="{{ asset('assets/videos/PROMOVIDEO.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>

            <!-- Custom Thumbnail & Play Button -->
            <div id="videoThumbnail" class="video-thumbnail" style="cursor: pointer;">
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
                    <img src="{{ asset('assets/images/about/mohammedkerem.JPG') }}" alt="Alex Taylor">
                </div>
                <div class="team-info">
                    <h4 class="team-name">Mohammedkerem Ahmed</h4>
                    <p class="team-role">CEO</p>
                </div>
            </div>
            <div class="team-member">
                
                <div class="team-photo">
                    <img src="{{ asset('assets/images/about/mohammed oumer.png') }}" alt="Alex Taylor">
                </div>
                <div class="team-info">
                    <h4 class="team-name">Mohammed Oumer</h4>
                    <p class="team-role">Head of software department</p>
                </div>
            </div>
            
            <div class="team-member">
                <div class="team-photo">
                    <img src="{{ asset('assets/images/jemil.png') }}" alt="Lisa Patel">
                </div>
                <div class="team-info">
                    <h4 class="team-name">Jemil Gragn</h4>
                    <p class="team-role">Head of software department</p>
                </div>
            </div>
            <div class="team-member">
                <div class="team-photo">
                    <img src="{{ asset('assets/images/about/mohammed ahmed.JPG') }}" alt="Rachel Taylor">
                </div>
                <div class="team-info">
                    <h4 class="team-name">Mohammed Ahmed</h4>
                    <p class="team-role">project manager</p>
                </div>
            </div>
            <div class="team-member">
                <div class="team-photo">
                    <img src="{{ asset('assets/images/about/bedru hussen.png') }}" alt="Rachel Taylor">
                </div>
                <div class="team-info">
                    <h4 class="team-name">Bedru Hussen</h4>
                    <p class="team-role">Head of business development</p>
                </div>
            </div>
            
            <div class="team-member">
                <div class="team-photo">
                    <img src="{{ asset('assets/images/about/huda.png') }}" alt="Alex Taylor">
                </div>
                <div class="team-info">
                    <h4 class="team-name">Huda Mohammed</h4>
                    <p class="team-role">Marketing manager</p>
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
                        <h4>Leading in Digital Innovation</h4>
                        <p>From custom software to scalable cloud solutions, Sky Link Technologies delivers industry-leading digital services tailored to your business needs. We're not just a tech company — we set the standard in smart, secure, and future-ready solutions.</p>
                    </div>
                </div>
                
                <div class="growth-feature">
                    <div class="feature-icon">
                        <i class="fas fa-trophy"></i>
                    </div>
                    <div class="feature-content">
                        <h4>Recognized for Excellence</h4>
                        <p>Our work speaks for itself. Sky Link Technologies has been recognized for its commitment to quality, creativity, and client success — delivering award-winning digital experiences across industries.</p>
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
                        <p>Our professional team combines technical expertise with creative problem-solving. From developers and designers to consultants and project managers — we bring passion, precision, and purpose to every project.</p>
                    </div>
                </div>
                
                <div class="growth-feature">
                    <div class="feature-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <div class="feature-content">
                        <h4>Always Here for You </h4>
                        <p>Whether you're launching, scaling, or solving an urgent challenge — our dedicated support team is available 24/7 to assist you. At Sky Link Technologies, your success is always our priority.</p>
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
            <span class="section-tag">Our Achievements</span>
            <h2>We Have Achieved Different<br>Milestones</h2>
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
                    <img src="{{ asset('assets/images/about/diredawa.JPG') }}" alt="Award">
                </div>
                <div class="award-content">
                    <h4 class="award-title">Secured a landmark agreement with Diredawa Administration to spearhead the innovative Smart City Project with Skylink.</h4>
                    <p class="award-year">2024</p>
                </div>
            </div>
            
            <div class="award-item">
                <div class="award-image">
                    <img src="{{ asset('assets/images/about/hobe.JPG') }}" alt="Award">
                </div>
                <div class="award-content">
                    <h4 class="award-title">Established a key agreement with a customer to develop a cutting-edge app system.</h4>
                    <p class="award-year">2024</p>
                </div>
            </div>
            
            <div class="award-item">
                <div class="award-image">
                    <img src="{{ asset('assets/images/about/evergreen.JPG') }}" alt="Award">
                </div>
                <div class="award-content">
                    <h4 class="award-title">Formed a strategic partnership with Evergreen.</h4>
                    <p class="award-year">2024</p>
                </div>
            </div>
        </div>
        
        
    </div>
</section>
@endsection

@push('scripts')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    

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


    // Video thumbnail click to show video

    document.addEventListener("DOMContentLoaded", function () {
        const thumbnail = document.getElementById("videoThumbnail");
        const video = document.getElementById("promoVideo");

        thumbnail.addEventListener("click", function () {
            thumbnail.style.display = "none";
            video.style.display = "block";
            video.play();
        });
    });


</script>
@endpush
