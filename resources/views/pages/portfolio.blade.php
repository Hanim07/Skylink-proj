@extends('layouts.master')

@section('title', 'Portfolio - Sky Link IT Solutions')
@section('description', 'Explore our portfolio of successful IT projects and digital solutions delivered to clients across Ethiopia.')

@push('styles')
<style>
    /* Portfolio Page Specific Styles */
    .portfolio-hero {
        background: #e5e7eb;
        padding: 8rem 0 4rem;
        margin-top: 80px;
        text-align: center;
    }

    .portfolio-hero h1 {
        font-size: 4rem;
        font-weight: 700;
        color: #1f2937;
        margin-bottom: 2rem;
    }

    .search-container {
        max-width: 500px;
        margin: 0 auto;
        position: relative;
    }

    .search-input {
        width: 100%;
        padding: 1rem 1.5rem;
        border: 1px solid #d1d5db;
        border-radius: 2rem;
        font-size: 1rem;
        background: white;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }

    .search-input:focus {
        outline: none;
        border-color: #3b82f6;
        box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
    }

    .search-icon {
        position: absolute;
        right: 1.5rem;
        top: 50%;
        transform: translateY(-50%);
        color: #9ca3af;
    }

    /* Portfolio Projects Section */
    .portfolio-projects {
        padding: 5rem 0;
        background: white;
    }

    .section-title {
        text-align: center;
        font-size: 2.5rem;
        font-weight: 700;
        color: #1f2937;
        margin-bottom: 4rem;
    }

    .project-item {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 4rem;
        align-items: center;
        margin-bottom: 6rem;
        opacity: 0;
        transform: translateY(30px);
        transition: all 0.6s ease;
    }

    .project-item.animate {
        opacity: 1;
        transform: translateY(0);
    }

    .project-item.reverse {
        direction: rtl;
    }

    .project-item.reverse > * {
        direction: ltr;
    }

    .project-image {
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .project-circle {
        width: 350px;
        height: 350px;
        border: 8px solid #3b82f6;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #f3f4f6;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        overflow: hidden;
    }

    .project-circle:hover {
        transform: scale(1.05);
        box-shadow: 0 20px 40px rgba(59, 130, 246, 0.2);
    }

    .project-circle img {
        width: 280px;
        height: auto;
        border-radius: 8px;
        transition: transform 0.3s ease;
    }

    .project-circle:hover img {
        transform: scale(1.1);
    }

    .project-content {
        padding: 2rem 0;
    }

    .project-title {
        font-size: 2rem;
        font-weight: 700;
        color: #1f2937;
        margin-bottom: 1.5rem;
    }

    .project-description {
        color: #6b7280;
        line-height: 1.8;
        font-size: 1rem;
        margin-bottom: 2rem;
    }

    .view-project-btn {
        background: #3b82f6;
        color: white;
        border: none;
        padding: 0.75rem 2rem;
        border-radius: 0.5rem;
        font-weight: 500;
        cursor: pointer;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        text-decoration: none;
    }

    .view-project-btn:hover {
        background: #2563eb;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(59, 130, 246, 0.3);
    }

    .view-project-btn i {
        transition: transform 0.3s ease;
    }

    .view-project-btn:hover i {
        transform: translateX(3px);
    }

    /* Search Results */
    .search-results {
        padding: 2rem 0;
        text-align: center;
        color: #6b7280;
        display: none;
    }

    .no-results {
        font-size: 1.1rem;
        color: #9ca3af;
    }

    /* Filter Tags */
    .filter-tags {
        display: flex;
        justify-content: center;
        gap: 1rem;
        margin-bottom: 3rem;
        flex-wrap: wrap;
    }

    .filter-tag {
        background: #f3f4f6;
        color: #6b7280;
        border: none;
        padding: 0.5rem 1.5rem;
        border-radius: 2rem;
        font-weight: 500;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .filter-tag.active,
    .filter-tag:hover {
        background: #3b82f6;
        color: white;
        transform: translateY(-2px);
    }

    /* Loading Animation */
    .loading {
        display: none;
        text-align: center;
        padding: 2rem;
    }

    .loading-spinner {
        width: 40px;
        height: 40px;
        border: 4px solid #f3f4f6;
        border-top: 4px solid #3b82f6;
        border-radius: 50%;
        animation: spin 1s linear infinite;
        margin: 0 auto 1rem;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .portfolio-hero h1 {
            font-size: 2.5rem;
        }

        .project-item {
            grid-template-columns: 1fr;
            gap: 2rem;
            text-align: center;
        }

        .project-item.reverse {
            direction: ltr;
        }

        .project-circle {
            width: 280px;
            height: 280px;
        }

        .project-circle img {
            width: 220px;
        }

        .project-title {
            font-size: 1.5rem;
        }

        .filter-tags {
            justify-content: flex-start;
            overflow-x: auto;
            padding-bottom: 1rem;
        }

        .filter-tag {
            white-space: nowrap;
        }
    }

    @media (max-width: 480px) {
        .portfolio-hero {
            padding: 6rem 0 3rem;
        }

        .portfolio-hero h1 {
            font-size: 2rem;
        }

        .project-circle {
            width: 250px;
            height: 250px;
        }

        .project-circle img {
            width: 200px;
        }

        .section-title {
            font-size: 2rem;
        }
    }
</style>
@endpush

@section('content')
    <!-- Portfolio Hero Section -->
    <section class="portfolio-hero">
        <div class="container">
            <h1>Portfolio</h1>
            <div class="search-container">
                <input type="text" class="search-input" id="portfolioSearch" placeholder="Search internships, projects and more...">
                <i class="fas fa-search search-icon"></i>
            </div>
        </div>
    </section>

    <!-- Portfolio Projects Section -->
    <section class="portfolio-projects">
        <div class="container">
            <h2 class="section-title">Already Made Projects</h2>
            
            <!-- Filter Tags -->
            <div class="filter-tags">
                <button class="filter-tag active" data-filter="all">All Projects</button>
                <button class="filter-tag" data-filter="web">Web Development</button>
                <button class="filter-tag" data-filter="mobile">Mobile Apps</button>
                <button class="filter-tag" data-filter="ecommerce">E-commerce</button>
                <button class="filter-tag" data-filter="management">Management Systems</button>
            </div>

            <!-- Loading Animation -->
            <div class="loading" id="loadingAnimation">
                <div class="loading-spinner"></div>
                <p>Loading projects...</p>
            </div>

            <!-- Search Results -->
            <div class="search-results" id="searchResults">
                <p class="no-results">No projects found matching your search.</p>
            </div>

            <!-- Projects Container -->
            <div class="projects-container" id="projectsContainer">
                @php
                    $projects = [
                        [
                            'id' => 1,
                            'title' => 'Bijlalul Habeshi Virtual Tutor',
                            'description' => 'Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into.',
                            'image' => 'https://via.placeholder.com/280x200/1f2937/FFFFFF?text=Virtual+Tutor',
                            'category' => 'web',
                            'tags' => ['education', 'virtual tutor', 'web development'],
                            'link' => '#'
                        ],
                        [
                            'id' => 2,
                            'title' => 'Elida Ethiopia',
                            'description' => 'Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into.',
                            'image' => 'https://via.placeholder.com/280x200/10b981/FFFFFF?text=Elida+Ethiopia',
                            'category' => 'ecommerce',
                            'tags' => ['e-commerce', 'ethiopia', 'online store'],
                            'link' => '#'
                        ],
                        [
                            'id' => 3,
                            'title' => 'Kirb Gebeya',
                            'description' => 'Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into.',
                            'image' => 'https://via.placeholder.com/280x200/ef4444/FFFFFF?text=Kirb+Gebeya',
                            'category' => 'ecommerce',
                            'tags' => ['marketplace', 'gebeya', 'e-commerce'],
                            'link' => '#'
                        ],
                        [
                            'id' => 4,
                            'title' => 'Afar Website',
                            'description' => 'Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into.',
                            'image' => 'https://via.placeholder.com/280x200/8b5cf6/FFFFFF?text=Afar+Website',
                            'category' => 'web',
                            'tags' => ['tourism', 'afar', 'website'],
                            'link' => '#'
                        ],
                        [
                            'id' => 5,
                            'title' => 'Real State Management System',
                            'description' => 'Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into.',
                            'image' => 'https://via.placeholder.com/280x200/06b6d4/FFFFFF?text=Real+Estate',
                            'category' => 'management',
                            'tags' => ['real estate', 'management', 'system'],
                            'link' => '#'
                        ]
                    ];
                @endphp

                @foreach($projects as $index => $project)
                <div class="project-item {{ $index % 2 == 1 ? 'reverse' : '' }}" 
                     data-category="{{ $project['category'] }}" 
                     data-tags="{{ implode(',', $project['tags']) }}"
                     data-title="{{ strtolower($project['title']) }}">
                    
                    <div class="project-image">
                        <div class="project-circle">
                            <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}" loading="lazy">
                        </div>
                    </div>
                    
                    <div class="project-content">
                        <h3 class="project-title">{{ $project['title'] }}</h3>
                        <p class="project-description">{{ $project['description'] }}</p>
                        <a href="{{ $project['link'] }}" class="view-project-btn" data-project-id="{{ $project['id'] }}">
                            View Project
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Elements
    const searchInput = document.getElementById('portfolioSearch');
    const filterTags = document.querySelectorAll('.filter-tag');
    const projectItems = document.querySelectorAll('.project-item');
    const projectsContainer = document.getElementById('projectsContainer');
    const searchResults = document.getElementById('searchResults');
    const loadingAnimation = document.getElementById('loadingAnimation');

    // Animation on scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate');
            }
        });
    }, observerOptions);

    // Observe all project items
    projectItems.forEach(item => {
        observer.observe(item);
    });

    // Search functionality
    let searchTimeout;
    searchInput.addEventListener('input', function() {
        clearTimeout(searchTimeout);
        const searchTerm = this.value.toLowerCase().trim();
        
        // Show loading animation
        if (searchTerm.length > 0) {
            showLoading();
        }
        
        searchTimeout = setTimeout(() => {
            filterProjects(searchTerm);
            hideLoading();
        }, 500);
    });

    // Filter functionality
    filterTags.forEach(tag => {
        tag.addEventListener('click', function() {
            // Update active state
            filterTags.forEach(t => t.classList.remove('active'));
            this.classList.add('active');
            
            const filterValue = this.getAttribute('data-filter');
            showLoading();
            
            setTimeout(() => {
                filterByCategory(filterValue);
                hideLoading();
            }, 300);
        });
    });

    // View project button clicks
    document.querySelectorAll('.view-project-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            const projectId = this.getAttribute('data-project-id');
            
            // Add click animation
            this.style.transform = 'scale(0.95)';
            setTimeout(() => {
                this.style.transform = '';
            }, 150);
            
            // Simulate project view (you can replace with actual navigation)
            console.log('Viewing project:', projectId);
            
            // Show success message
            showNotification('Opening project details...');
        });
    });

    // Filter functions
    function filterProjects(searchTerm) {
        let visibleCount = 0;
        
        projectItems.forEach(item => {
            const title = item.getAttribute('data-title');
            const tags = item.getAttribute('data-tags');
            const isVisible = title.includes(searchTerm) || tags.includes(searchTerm);
            
            if (isVisible || searchTerm === '') {
                item.style.display = 'grid';
                visibleCount++;
                // Re-trigger animation
                setTimeout(() => {
                    item.classList.add('animate');
                }, 100);
            } else {
                item.style.display = 'none';
                item.classList.remove('animate');
            }
        });
        
        // Show/hide search results message
        if (searchTerm !== '' && visibleCount === 0) {
            searchResults.style.display = 'block';
            projectsContainer.style.display = 'none';
        } else {
            searchResults.style.display = 'none';
            projectsContainer.style.display = 'block';
        }
    }

    function filterByCategory(category) {
        let visibleCount = 0;
        
        projectItems.forEach(item => {
            const itemCategory = item.getAttribute('data-category');
            const isVisible = category === 'all' || itemCategory === category;
            
            if (isVisible) {
                item.style.display = 'grid';
                visibleCount++;
                // Re-trigger animation
                setTimeout(() => {
                    item.classList.add('animate');
                }, 100);
            } else {
                item.style.display = 'none';
                item.classList.remove('animate');
            }
        });
        
        // Clear search input when filtering by category
        searchInput.value = '';
        searchResults.style.display = 'none';
        projectsContainer.style.display = 'block';
    }

    function showLoading() {
        loadingAnimation.style.display = 'block';
        projectsContainer.style.opacity = '0.5';
    }

    function hideLoading() {
        loadingAnimation.style.display = 'none';
        projectsContainer.style.opacity = '1';
    }

    function showNotification(message) {
        // Create notification element
        const notification = document.createElement('div');
        notification.style.cssText = `
            position: fixed;
            top: 100px;
            right: 20px;
            background: #10b981;
            color: white;
            padding: 1rem 2rem;
            border-radius: 0.5rem;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            z-index: 1000;
            transform: translateX(100%);
            transition: transform 0.3s ease;
        `;
        notification.textContent = message;
        
        document.body.appendChild(notification);
        
        // Animate in
        setTimeout(() => {
            notification.style.transform = 'translateX(0)';
        }, 100);
        
        // Remove after 3 seconds
        setTimeout(() => {
            notification.style.transform = 'translateX(100%)';
            setTimeout(() => {
                document.body.removeChild(notification);
            }, 300);
        }, 3000);
    }

    // Keyboard shortcuts
    document.addEventListener('keydown', function(e) {
        // Focus search on Ctrl+F or Cmd+F
        if ((e.ctrlKey || e.metaKey) && e.key === 'f') {
            e.preventDefault();
            searchInput.focus();
        }
        
        // Clear search on Escape
        if (e.key === 'Escape' && document.activeElement === searchInput) {
            searchInput.value = '';
            filterProjects('');
        }
    });

    // Smooth scroll to top when filtering
    function scrollToProjects() {
        document.querySelector('.section-title').scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    }

    // Add scroll to top for filter buttons
    filterTags.forEach(tag => {
        tag.addEventListener('click', function() {
            setTimeout(scrollToProjects, 100);
        });
    });

    // Initialize animations for visible items
    setTimeout(() => {
        projectItems.forEach((item, index) => {
            if (isElementInViewport(item)) {
                setTimeout(() => {
                    item.classList.add('animate');
                }, index * 200);
            }
        });
    }, 100);

    function isElementInViewport(el) {
        const rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }
});
</script>
@endpush