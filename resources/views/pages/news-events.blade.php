@extends('layouts.master')

@section('title', 'Sky Link - IT Services in Ethiopia')
@section('description', 'Leading IT services company in Ethiopia, helping businesses succeed with innovative technology solutions.')

@section('additional-styles')

@push('styles')
    <style>
        :root {
            --primary-color: #2563eb;
            --secondary-color: #64b5f6;
            --light-blue: #e3f2fd;
        }
        .hero-section {
            background: #e5e7eb;
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

    </style>
@endpush

@section('content')

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






                 @foreach($news as $post)
<div class="col-md-6 blog-post" data-category="{{ strtolower(str_replace(' ', '-', $post->category->name)) }}">
    <div class="blog-card">
        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}">
        <div class="blog-card-body">
            <span class="category-tag">{{ $post->category->name }}</span>
            <h3 class="blog-title">{{ $post->title }}</h3>
            <p class="blog-excerpt">{{ $post->excerpt }}</p>
<a href="{{ route('news.show', $post->slug) }}" class="read-more">
    Read More <i class="fas fa-arrow-right ms-1"></i>
</a>
        </div>
    </div>
</div>
@endforeach


<div class="mt-4">
    {{ $news->links() }}
</div>









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
    
@endsection
@push('scripts')

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
    
@endpush
