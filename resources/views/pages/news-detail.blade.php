@extends('layouts.master')

@section('title', 'Sky Link - IT Services in Ethiopia')
@section('description', 'Leading IT services company in Ethiopia, helping businesses succeed with innovative technology solutions.')

@section('additional-styles')

@push('styles')
    <style>
        :root {
            --primary-blue: #007bff;
            --light-gray: #f8f9fa;
            --dark-gray: #6c757d;
        }

        .hero-section {
            padding: 20px 0;
            text-align: center;
        }

        .hero-title {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 10px;
            color: #000;
        }

        .content-section {
            padding-bottom: 50px;
            padding-top: 10px;
        }

        .content-image {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .content-text {
            font-size: 0.95rem;
            line-height: 1.7;
            color: #333;
        }

        .content-text p {
            margin-bottom: 20px;
        }

        .navigation-section {
            padding: 20px 0;
            border-top: 2px solid #e7e8ea;
            border-bottom: 2px solid #e7e8ea;
        }

        .btn-nav {
            background-color: var(--primary-blue);
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 25px;
            font-weight: 500;
        }

        .btn-nav:hover {
            background-color: #0056b3;
            color: white;
        }

        .share-icons {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .share-icons .btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: var(--dark-gray);
            color: white;
            border: none;
        }

        .share-icons .btn:hover {
            background-color: var(--primary-blue);
        }

        .subscription-section {
            background: linear-gradient(135deg, #b3d9ff 0%, #e6f3ff 100%);
            padding: 80px 0;
            position: relative;
            overflow: hidden;
        }

        .subscription-section::before,
        .subscription-section::after {
            content: '';
            position: absolute;
            width: 200px;
            height: 200px;
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
        }

        .subscription-section::before {
            top: 20px;
            left: 50px;
        }

        .subscription-section::after {
            bottom: 20px;
            right: 50px;
        }

        .subscription-title {
            font-size: 2rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 40px;
            color: #000;
        }

        .subscription-form {
            max-width: 500px;
            margin: 0 auto;
        }

        .form-control {
            border-radius: 25px;
            padding: 15px 20px;
            border: 1px solid #ddd;
            margin-bottom: 20px;
        }

        .btn-subscribe {
            background-color: #2c5282;
            color: white;
            border: none;
            padding: 15px 40px;
            border-radius: 25px;
            width: 100%;
            font-weight: 500;
        }

        .btn-subscribe:hover {
            background-color: #2a4a7a;
            color: white;
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 2rem;
            }
            
            .content-section .row {
                flex-direction: column-reverse;
            }
            
            .subscription-section::before,
            .subscription-section::after {
                display: none;
            }
        }
    </style>
@endpush

@section('content')
    
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1 class="hero-title">International Tech Expo</h1>
        
        </div>
    </section>

    <!-- Content Section -->
    <section class="content-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <img src="{{ asset('storage/' . $newsItem->image) }}" alt="{{ $newsItem->title }}" class="content-image">
            </div>
            <div class="col-lg-6">
                <div class="content-text">
                    <h1>{{ $newsItem->title }}</h1>
                    <p class="text-muted"><strong>Category:</strong> {{ $newsItem->category->name }}</p>
                    <p>{!! nl2br(e($newsItem->content)) !!}</p>
                </div>
            </div>
        </div>
    </div>
</section>





    <!-- Navigation Section -->
    <section class="navigation-section">
        <div class="container">
            <div class="row align-items-center mb-3">
                <div class="col-md-3">
                    <button class="btn btn-nav" onclick="previousPage()">
                        <i class="fas fa-chevron-left me-2"></i>Previous
                    </button>
                </div>
                <div class="col-md-6 text-center">
                    <div class="d-flex justify-content-center align-items-center">
                        <span class="me-3">Share</span>
                        <div class="share-icons">
                            <button class="btn" onclick="shareOn('twitter')">
                                <i class="fab fa-twitter"></i>
                            </button>
                            <button class="btn" onclick="shareOn('facebook')">
                                <i class="fab fa-facebook"></i>
                            </button>
                            <button class="btn" onclick="shareOn('linkedin')">
                                <i class="fab fa-linkedin"></i>
                            </button>
                            <button class="btn" onclick="shareOn('pinterest')">
                                <i class="fab fa-pinterest"></i>
                            </button>
                            <button class="btn" onclick="shareOn('email')">
                                <i class="fas fa-envelope"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-end">
                    <button class="btn btn-nav" onclick="nextPage()">
                        Next<i class="fas fa-chevron-right ms-2"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Subscription Section -->
    <section class="subscription-section">
        <div class="container">
            <h2 class="subscription-title">Subscribe for our latest update</h2>
            <form class="subscription-form" onsubmit="handleSubscription(event)">
                <input type="text" class="form-control" placeholder="Full Name" required>
                <input type="email" class="form-control" placeholder="Your Email" required>
                <button type="submit" class="btn btn-subscribe">Variations</button>
            </form>
        </div>
    </section>

@endsection

@push('scripts')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Navigation functionality
        function setActiveNav(element) {
            // Remove active class from all nav links
            document.querySelectorAll('.nav-link').forEach(link => {
                link.classList.remove('active');
            });
            // Add active class to clicked link
            element.classList.add('active');
        }

        // Previous/Next page functionality
        function previousPage() {
            alert('Previous page functionality would be implemented here');
        }

        function nextPage() {
            alert('Next page functionality would be implemented here');
        }

        // Social sharing functionality
        function shareOn(platform) {
            const url = encodeURIComponent(window.location.href);
            const title = encodeURIComponent(document.title);
            
            let shareUrl = '';
            
            switch(platform) {
                case 'twitter':
                    shareUrl = `https://twitter.com/intent/tweet?url=${url}&text=${title}`;
                    break;
                case 'facebook':
                    shareUrl = `https://www.facebook.com/sharer/sharer.php?u=${url}`;
                    break;
                case 'linkedin':
                    shareUrl = `https://www.linkedin.com/sharing/share-offsite/?url=${url}`;
                    break;
                case 'pinterest':
                    shareUrl = `https://pinterest.com/pin/create/button/?url=${url}&description=${title}`;
                    break;
                case 'email':
                    shareUrl = `mailto:?subject=${title}&body=${url}`;
                    break;
            }
            
            if (shareUrl) {
                window.open(shareUrl, '_blank', 'width=600,height=400');
            }
        }

        // Subscription form handling
        function handleSubscription(event) {
            event.preventDefault();
            const formData = new FormData(event.target);
            const name = event.target.querySelector('input[type="text"]').value;
            const email = event.target.querySelector('input[type="email"]').value;
            
            // Here you would typically send the data to your server
            alert(`Thank you ${name}! You've been subscribed with email: ${email}`);
            
            // Reset form
            event.target.reset();
        }

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

        // Add some interactive hover effects
        document.addEventListener('DOMContentLoaded', function() {
            // Add hover effect to cards and buttons
            const interactiveElements = document.querySelectorAll('.btn, .card, .nav-link');
            
            interactiveElements.forEach(element => {
                element.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-2px)';
                    this.style.transition = 'transform 0.3s ease';
                });
                
                element.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });
        });
    </script>
    
@endpush
