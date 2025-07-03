<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Sky Link - IT Services in Ethiopia')</title>
    <meta name="description" content="@yield('description', 'Leading IT services company in Ethiopia, providing innovative technology solutions for businesses.')">
    
    <!-- Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
        
    <!-- Custom Styles -->
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
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Top Bar */
    .top-bar {
        position: sticky;
        top: 0;
        z-index: 1030;
        background: #ced7fa;
        padding: 8px 0;
        font-size: 13px;
        color: #a9b9f2;
        transition: all 0.3s ease;
    }

    .top-bar.hidden {
        transform: translateY(-100%);
        opacity: 0;
    }

    .top-bar-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .top-bar-left {
        display: flex;
        align-items: center;
        gap: 30px;
    }

    .top-bar-item {
        display: flex;
        align-items: center;
        gap: 8px;
        color: #666;
    }

    .top-bar-item i {
        color: #3B82F6;
        font-size: 15px;
    }

    .top-bar-right {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .social-icon {
        color: #666;
        font-size: 20px;
        transition: all 0.3s ease;
        text-decoration: none;
        margin-right: 4px;
    }

    .social-icon:hover {
        color: #3B82F6;
    }

    .service-status {
    display: flex;
        align-items: center;
        gap: 8px;
        color: #666;
}

.check-icon {
    color: #3B82F6;
    font-size: 15px;
}

.status-text {
    color: #666;
}

.ethiopia-flag {
    width: 25px;
    height: 25px;
    border-radius: 50%;
    object-fit: cover;
    border: 1px solid #ccc;
}


    /* Main Navbar */
    .navbar-custom {
        background: white;
        padding: 15px 0;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        position: sticky;
        z-index: 1020;
        top:35px;
        transition: all 0.3s ease;
    }

    .navbar-custom.scrolled {
        padding: 10px 0;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
    }

    .navbar-brand {
        display: flex;
        align-items: center;
        text-decoration: none;
        color: #333 !important;
    }

    .navbar-brand:hover {
        color: #333 !important;
    }

    .logo-img {
    width: 130px;
    height: 50px;
    object-fit: contain;
    border-radius: 10px;
}

    .logo-text {
        display: flex;
        flex-direction: column;
        line-height: 1;
    }

    .logo-main {
        font-size: 24px;
        font-weight: 700;
        color: #333;
    }

    .logo-sub {
        font-size: 10px;
        font-weight: 400;
        color: #666;
        letter-spacing: 2px;
        text-transform: uppercase;
    }

    .navbar-nav {
        display: flex;
        align-items: center;
        gap: 40px;
    }

    .nav-link {
        color: #333 !important;
        font-weight: 500;
        font-size: 15px;
        text-decoration: none;
        position: relative;
        padding: 8px 0;
        transition: all 0.3s ease;
    }

    .nav-link:hover {
        color: #3B82F6 !important;
    }

    .nav-link.active {
        color: #333 !important;
        font-weight: 600;
    }

    .nav-link.active::after {
        content: '';
        position: absolute;
        bottom: -5px;
        left: 0;
        width: 100%;
        height: 2px;
        background: #3B82F6;
    }

    /* Apple-style Full Width Dropdown */
    .nav-item.mega-dropdown {
        position: static;
    }

    .mega-dropdown-menu {
        position: absolute;
        top: 100%;
        left: 0;
        width: 100vw;
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(20px);
        border: none;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
        padding: 40px 0;
        opacity: 0;
        visibility: hidden;
        transform: translateY(-20px);
        transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        z-index: 999;
    }

    .mega-dropdown:hover .mega-dropdown-menu {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }

    .mega-dropdown-content {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .mega-dropdown-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 40px;
    }

    .mega-dropdown-section h6 {
        font-size: 14px;
        font-weight: 600;
        color: #666;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 20px;
    }

    .mega-dropdown-item {
        display: block;
        padding: 12px 0;
        color: #333;
        text-decoration: none;
        font-size: 16px;
        font-weight: 500;
        transition: all 0.3s ease;
        border-bottom: 1px solid transparent;
    }

    .mega-dropdown-item:hover {
        color: #3B82F6;
        transform: translateX(10px);
        border-bottom-color: #3B82F6;
    }

    .mega-dropdown-item i {
        margin-right: 10px;
        width: 20px;
        color: #3B82F6;
    }

    .btn-get-started {
        background: linear-gradient(135deg, #3B82F6, #1E40AF);
        color: white;
        border: none;
        padding: 12px 30px;
        border-radius: 25px;
        font-weight: 600;
        font-size: 14px;
        transition: all 0.3s ease;
        text-decoration: none;
        display: inline-block;
    }

    .btn-get-started:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(59, 130, 246, 0.4);
        color: white;
    }







       




















        /* Footer */
        .footer {
            background-color: #f8f9fa;
            padding: 60px 0 30px;
        }

        .footer h5 {
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
        }

        .footer ul {
            list-style: none;
            padding: 0;
        }

        .footer ul li {
            margin-bottom: 10px;
        }

        .footer ul li a {
            color: #666;
            text-decoration: none;
        }

        .footer ul li a:hover {
            color: var(--primary-blue);
        }

        .footer-bottom {
            border-top: 1px solid #ddd;
            padding-top: 20px;
            margin-top: 40px;
            text-align: center;
            color: #666;
        }

        .social-footer {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-footer a {
            color: #666;
            font-size: 18px;
        }

        /* Responsive Design */
        @media (max-width: 991.98px) {
    .navbar-collapse {
        background: white;
        padding: 1rem;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
    }

    .navbar-nav {
        flex-direction: column !important;
        gap: 15px !important;
        align-items: flex-start !important;
    }

    .mega-dropdown-menu {
        position: static;
        width: 100%;
        opacity: 1;
        visibility: visible;
        transform: none;
        box-shadow: none;
        padding: 20px 0;
        display: none;
    }

    .mega-dropdown:hover .mega-dropdown-menu {
        display: block;
    }

    .btn-get-started {
        margin-top: 1rem;
        width: 100%;
        text-align: center;
    }

        .top-bar-left{
            flex-direction: column;
            align-items: flex-start;
            width: 100%;
            gap: 10px;
        }
        .navbar-custom {
            top:95px;

        }
        .navbar-collapse {
            background: white;
            padding: 1rem;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }

        .navbar-nav {
            flex-direction: column !important;
            gap: 5px !important;
            align-items: flex-start !important;
        }

        .mega-dropdown-menu {
            position: static;
            width: 50%;
            opacity: 1;
            visibility: visible;
            transform: none;
            box-shadow: none;
            padding: 20px 0;
            display: none;
        }
        .mega-dropdown-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(200px, 1fr));
            gap: 20px;
        }
        .mega-dropdown-section h6 {
        font-size: 13px;
        margin-bottom: 10px;
    }

    .mega-dropdown-item {
        font-size: 14px;
        padding: 8px 0;
        margin-bottom: 0%;
        
    }


        .mega-dropdown:hover .mega-dropdown-menu {
            display: block;
        }

        .btn-get-started {
            margin-top: 1rem;
            width: 50%;
            text-align: center;
        }
    }
    @media (min-width: 992px) {
    .mega-dropdown-menu {
        max-height: 500px; 
        max-width: 100%;   /* Limit dropdown height */
        overflow-y: auto;
             /* Enable vertical scrolling if content overflows */
    }
    .mega-dropdown-section h6 {
        font-size: 15px;
        margin-bottom: -2%;
        margin-top: -3%;
    }

    .mega-dropdown-item {
        font-size: 13px;
        margin-bottom: 0%;
        margin-top: 0% ;
    }
}
    @media (max-width: 668px) {
    .mega-dropdown-grid {
        grid-template-columns: repeat(2, minmax(200px, 1fr));
        gap: 10px;
    }

    .mega-dropdown-section h6 {
        font-size: 14px;
    }

    .mega-dropdown-item {
        font-size: 12px;
    }
    .mega-dropdown-menu {
        max-height: 250px;
        overflow-y: auto;
        max-width: 100%;
        min-width: 100%;
    }
}
@media (min-width: 669px) and (max-width: 991.98px) {
    .mega-dropdown-menu {
        max-height: 350px;
        overflow-y: auto;
        max-width: 100%;
        min-width: 100%;
    }
}



        @yield('additional-styles')
    </style>
    
    @stack('styles')
</head>
<body>
    <!-- Top Bar -->
<div class="top-bar" id="topBar">
    <div class="container">
        <div class="top-bar-content d-flex justify-content-between align-items-center flex-wrap">
            <div class="top-bar-left d-flex flex-wrap">
                <div class="top-bar-item me-4">
                    <i class="far fa-clock"></i>
                    <span>Mon - Fri 03:00 - 11:00</span>
                </div>
                <div class="top-bar-item me-4">
                    <i class="fas fa-phone"></i>
                    <span>+251911027667</span>
                </div>
                <div class="top-bar-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Addis Ababa, Bole Tropical Mall No. 217</span>
                </div>
            </div>
            <div class="top-bar-right d-flex align-items-center gap-3 mt-2 mt-md-0">
                <a href="#" class="social-icon"><i class="fab fa-facebook"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-telegram"></i></a>
                
                <!-- ✅ Service Status Block -->
                <div class="service-status d-flex align-items-center mx-5">
                    <span class="check-icon me-2"><i class="fas fa-check-circle"></i></span>
                    <span class="status-text me-2">Service Active</span>
                    <img src="{{ asset('assets/images/eth-flag.png') }}" alt="Ethiopia Flag" class="ethiopia-flag">
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Main Navbar -->
        <nav class="navbar navbar-expand-lg navbar-custom" id="mainNavbar">
            <div class="container">
                <a href="/" class="d-flex align-items-center text-decoration-none">
                    <img src="{{ asset('assets/images/logo-01.png') }}" alt="Skylink Logo" class="logo-img me-2">
                    
                </a>

                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About Us</a>
                        </li>

                        <li class="nav-item mega-dropdown">
    <a class="nav-link {{ request()->routeIs('services.*') ? 'active' : '' }}" href="{{ route('services') }}">Services</a>
    <div class="mega-dropdown-menu">
        <div class="mega-dropdown-content">
            <div class="mega-dropdown-grid">

                <!-- Software Service -->
                <div class="mega-dropdown-section">
                    <h6><a href="{{ route('services.category', ['category' => 'software-service']) }}">Software Service</a></h6>
                    <a href="{{ route('services.detail', ['subcategory' => 'web-apps']) }}" class="mega-dropdown-item"><i class="fas fa-laptop-code"></i> Web Applications</a>
                    <a href="{{ route('services.detail', ['subcategory' => 'mobile-apps']) }}" class="mega-dropdown-item"><i class="fas fa-mobile-alt"></i> Mobile Applications</a>
                    <a href="{{ route('services.detail', ['subcategory' => 'custom-dev']) }}" class="mega-dropdown-item"><i class="fas fa-cogs"></i> Custom Software</a>
                </div>

                <!-- Smart City & Infrastructure -->
                <div class="mega-dropdown-section">
                    <h6><a href="{{ route('services.category', ['category' => 'smart-city']) }}">Smart City & Infrastructure</a></h6>
                    <a href="{{ route('services.detail', ['subcategory' => 'physical-security']) }}" class="mega-dropdown-item"><i class="fas fa-shield-alt"></i> Physical Safety & Security</a>
                    <a href="{{ route('services.detail', ['subcategory' => 'structured-cabling']) }}" class="mega-dropdown-item"><i class="fas fa-network-wired"></i> Structured Cabling System</a>
                    <a href="{{ route('services.detail', ['subcategory' => 'smart-mobility']) }}" class="mega-dropdown-item"><i class="fas fa-car"></i> Smart Mobility & Transportation</a>
                    <a href="{{ route('services.detail', ['subcategory' => 'integrated-infra']) }}" class="mega-dropdown-item"><i class="fas fa-layer-group"></i> Integrated Smart Infrastructure</a>
                    <a href="{{ route('services.detail', ['subcategory' => 'data-center']) }}" class="mega-dropdown-item"><i class="fas fa-database"></i> Data Center Infrastructure</a>
                </div>

                <!-- Safety & Security -->
                <div class="mega-dropdown-section">
                    <h6><a href="{{ route('services.category', ['category' => 'safety-security']) }}">Safety & Security</a></h6>
                    <a href="{{ route('services.detail', ['subcategory' => 'network-security']) }}" class="mega-dropdown-item"><i class="fas fa-shield-virus"></i> Network & Application Security</a>
                    <a href="{{ route('services.detail', ['subcategory' => 'endpoint-security']) }}" class="mega-dropdown-item"><i class="fas fa-laptop-medical"></i> Endpoint Security</a>
                    <a href="{{ route('services.detail', ['subcategory' => 'data-protection']) }}" class="mega-dropdown-item"><i class="fas fa-lock"></i> Data Protection</a>
                    <a href="{{ route('services.detail', ['subcategory' => 'access-management']) }}" class="mega-dropdown-item"><i class="fas fa-user-shield"></i> Access Management</a>
                </div>

                <!-- Enterprise Network -->
                <div class="mega-dropdown-section">
                    <h6><a href="{{ route('services.category', ['category' => 'enterprise-network']) }}">Enterprise Network Solution</a></h6>
                    <a href="{{ route('services.detail', ['subcategory' => 'enterprise-network']) }}" class="mega-dropdown-item"><i class="fas fa-network-wired"></i> Enterprise Network Overview</a>
                    <a href="{{ route('services.detail', ['subcategory' => 'network-wlan']) }}" class="mega-dropdown-item"><i class="fas fa-wifi"></i> Network & WLAN Solution</a>
                </div>

                <!-- Consulting & Training -->
                <div class="mega-dropdown-section">
                    <h6><a href="{{ route('services.category', ['category' => 'consulting-training']) }}">Consulting & Training</a></h6>
                    <a href="{{ route('services.detail', ['subcategory' => 'smart-projects']) }}" class="mega-dropdown-item"><i class="fas fa-project-diagram"></i> Smart City Projects</a>
                    <a href="{{ route('services.detail', ['subcategory' => 'product-dev']) }}" class="mega-dropdown-item"><i class="fas fa-cogs"></i> Product Development</a>
                    <a href="{{ route('services.detail', ['subcategory' => 'business-strategy']) }}" class="mega-dropdown-item"><i class="fas fa-chart-line"></i> Business Strategy</a>
                    <a href="{{ route('services.detail', ['subcategory' => 'erp-consult']) }}" class="mega-dropdown-item"><i class="fas fa-database"></i> ERP Consultancy</a>
                </div>

                <!-- ICT Support -->
                <div class="mega-dropdown-section">
                    <h6><a href="{{ route('services.category', ['category' => 'ict-support']) }}">ICT Support</a></h6>
                    <a href="{{ route('services.detail', ['subcategory' => 'tech-assistance']) }}" class="mega-dropdown-item"><i class="fas fa-headset"></i> Technical Assistance</a>
                    <a href="{{ route('services.detail', ['subcategory' => 'system-maintenance']) }}" class="mega-dropdown-item"><i class="fas fa-tools"></i> System Maintenance</a>
                    <a href="{{ route('services.detail', ['subcategory' => 'security-privacy']) }}" class="mega-dropdown-item"><i class="fas fa-user-lock"></i> Security & Privacy</a>
                </div>

                <!-- GPS Tracking -->
                <div class="mega-dropdown-section">
                    <h6><a href="{{ route('services.category', ['category' => 'gps-tracking']) }}">GPS Tracking System</a></h6>
                    <a href="{{ route('services.detail', ['subcategory' => 'fleet-management']) }}" class="mega-dropdown-item"><i class="fas fa-truck"></i> Fleet Management</a>
                    <a href="{{ route('services.detail', ['subcategory' => 'asset-tracking']) }}" class="mega-dropdown-item"><i class="fas fa-map-marker-alt"></i> Asset Tracking</a>
                    <a href="{{ route('services.detail', ['subcategory' => 'vehicle-tracking']) }}" class="mega-dropdown-item"><i class="fas fa-car"></i> Vehicle Monitoring</a>
                </div>

                <!-- Datacenter Facility -->
                <div class="mega-dropdown-section">
                    <h6><a href="{{ route('services.category', ['category' => 'datacenter-facility']) }}">Datacenter Facility & Power</a></h6>
                    <a href="{{ route('services.detail', ['subcategory' => 'server-rooms']) }}" class="mega-dropdown-item"><i class="fas fa-server"></i> Server Rooms</a>
                    <a href="{{ route('services.detail', ['subcategory' => 'ups-power']) }}" class="mega-dropdown-item"><i class="fas fa-bolt"></i> UPS & Power Backup</a>
                    <a href="{{ route('services.detail', ['subcategory' => 'cooling-system']) }}" class="mega-dropdown-item"><i class="fas fa-snowflake"></i> Cooling Systems</a>
                </div>

            </div>
        </div>
    </div>
</li>


    <li class="nav-item mega-dropdown">  
    <a class="nav-link {{ request()->routeIs('products.*') ? 'active' : '' }}" href="{{ route('products') }}">Products</a>
    <div class="mega-dropdown-menu">
        <div class="mega-dropdown-content">
            <div class="mega-dropdown-grid">
                <!-- Industry Solutions -->
                <!-- Industry Solutions -->
<div class="mega-dropdown-section">
    <h6>Industry Solutions</h6>
    <a href="{{ route('products.detail', ['category' => 'industry-solutions', 'slug' => 'e-tourism']) }}" class="mega-dropdown-item"><i class="fas fa-suitcase-rolling"></i> E-Tourism</a>
    <a href="{{ route('products.detail', ['category' => 'industry-solutions', 'slug' => 'fleet-management']) }}" class="mega-dropdown-item"><i class="fas fa-warehouse"></i> Fleet Management</a>
    <a href="{{ route('products.detail', ['category' => 'industry-solutions', 'slug' => 'project-management']) }}" class="mega-dropdown-item"><i class="fas fa-project-diagram"></i> Project Management</a>
    <a href="{{ route('products.detail', ['category' => 'industry-solutions', 'slug' => 'real-estate-management']) }}" class="mega-dropdown-item"><i class="fas fa-building"></i> Real Estate Management</a>
    <a href="{{ route('products.detail', ['category' => 'industry-solutions', 'slug' => 'school-management']) }}" class="mega-dropdown-item"><i class="fas fa-school"></i> School Management</a>
    <a href="{{ route('products.detail', ['category' => 'industry-solutions', 'slug' => 'lms']) }}" class="mega-dropdown-item"><i class="fas fa-book-open"></i> LMS</a>
    <a href="{{ route('products.detail', ['category' => 'industry-solutions', 'slug' => 'smart-e-ticketing']) }}" class="mega-dropdown-item"><i class="fas fa-bus"></i> Smart E-ticketing</a>
</div>

<!-- Business & Office Tools -->
<div class="mega-dropdown-section">
    <h6>Business & Office Tools</h6>
    <a href="{{ route('products.detail', ['category' => 'business-tools', 'slug' => 'document-management']) }}" class="mega-dropdown-item"><i class="fas fa-folder-open"></i> Document Management</a>
    <a href="{{ route('products.detail', ['category' => 'business-tools', 'slug' => 'traffic-penalty']) }}" class="mega-dropdown-item"><i class="fas fa-gavel"></i> Traffic Penalty Management</a>
    <a href="{{ route('products.detail', ['category' => 'business-tools', 'slug' => 'erp']) }}" class="mega-dropdown-item"><i class="fas fa-cogs"></i> ERP Full Module</a>
    <a href="{{ route('products.detail', ['category' => 'business-tools', 'slug' => 'appointment-booking']) }}" class="mega-dropdown-item"><i class="fas fa-calendar-check"></i> Appointment Booking</a>
    <a href="{{ route('products.detail', ['category' => 'business-tools', 'slug' => 'qms']) }}" class="mega-dropdown-item"><i class="fas fa-stream"></i> QMS</a>
    <a href="{{ route('products.detail', ['category' => 'business-tools', 'slug' => 'building-management']) }}" class="mega-dropdown-item"><i class="fas fa-city"></i> Building Management</a>
    <a href="{{ route('products.detail', ['category' => 'business-tools', 'slug' => 'event-management']) }}" class="mega-dropdown-item"><i class="fas fa-calendar-alt"></i> Event Management</a>
</div>

<!-- Web & Mobile Applications -->
<div class="mega-dropdown-section">
    <h6>Web & Mobile Applications</h6>
    <a href="{{ route('products.detail', ['category' => 'web-mobile-apps', 'slug' => 'skylink-system']) }}" class="mega-dropdown-item"><i class="fas fa-laptop-code"></i> SkyLink Website & System</a>
    <a href="{{ route('products.detail', ['category' => 'web-mobile-apps', 'slug' => 'besira-app']) }}" class="mega-dropdown-item"><i class="fas fa-mobile-alt"></i> Besira App</a>
    <a href="{{ route('products.detail', ['category' => 'web-mobile-apps', 'slug' => 'e-commerce']) }}" class="mega-dropdown-item"><i class="fas fa-store"></i> E-Commerce</a>
    <a href="{{ route('products.detail', ['category' => 'web-mobile-apps', 'slug' => 'website-design']) }}" class="mega-dropdown-item"><i class="fas fa-paint-brush"></i> Website Design</a>
    <a href="{{ route('products.detail', ['category' => 'web-mobile-apps', 'slug' => 'entertainment-apps']) }}" class="mega-dropdown-item"><i class="fas fa-music"></i> Entertainment Apps</a>
</div>

<!-- Digital Services -->
<div class="mega-dropdown-section">
    <h6>Digital Services</h6>
    <a href="{{ route('products.detail', ['category' => 'digital-services', 'slug' => 'e-service']) }}" class="mega-dropdown-item"><i class="fas fa-concierge-bell"></i> E-Service</a>
    <a href="{{ route('products.detail', ['category' => 'digital-services', 'slug' => 'customer-support']) }}" class="mega-dropdown-item"><i class="fas fa-headset"></i> Customer Support Systems</a>
    <a href="{{ route('products.detail', ['category' => 'digital-services', 'slug' => 'system-maintenance']) }}" class="mega-dropdown-item"><i class="fas fa-tools"></i> System Maintenance</a>
    <a href="{{ route('products.detail', ['category' => 'digital-services', 'slug' => 'security-compliance']) }}" class="mega-dropdown-item"><i class="fas fa-user-shield"></i> Security & Compliance</a>
</div>

            </div>
        </div>
    </div>
</li>


                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('portfolio') ? 'active' : '' }}" href="{{ route('portfolio') }}">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('news') ? 'active' : '' }}" href="{{ route('news') }}">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact Us</a>
                        </li>
                    </ul>
                    
                    <a href="#" class="btn-get-started">Get Started</a>
                </div>
            </div>
        </nav>


    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
    <div class="container">
        <div class="row">
            <!-- Column 1 -->
            <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                <div class="logo mb-3">
                    <a href="/" class="d-flex align-items-center text-decoration-none">
                        <img src="{{ asset('assets/images/logo-01.png') }}" alt="Skylink Logo" class="logo-img me-2">
                    </a>
                </div>
                <p>
                    Skylink Technologies specializes in delivering reliable software, cybersecurity, and digital transformation services to businesses across sectors.
                </p>
                <div class="social-footer">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                    <a href="#"><i class="fab fa-pinterest"></i></a>
                </div>
            </div>

            <!-- Column 2 -->
            <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                <h5>Quick Links</h5>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="{{ route('services') }}">Services</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>

            <!-- Column 3 -->
            <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                <h5>Services</h5>
                <ul>
                    <li><a href="#">Cyber Security</a></li>
                    <li><a href="#">Web Development</a></li>
                    <li><a href="#">AI Software</a></li>
                    <li><a href="#">Content Writing</a></li>
                    <li><a href="#">UI Design</a></li>
                </ul>
            </div>

            <!-- Column 4 -->
            <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
                <h5>Contact</h5>
                <p>Addis Ababa Bole, Tropical Mall</p>
                <p><i class="fas fa-globe"></i> www.skylincict.com</p>
                <p><i class="fas fa-envelope"></i> info@skylinkict.com</p>
                <p><i class="fas fa-phone"></i> +251911027667</p>
            </div>
        </div>

        <div class="footer-bottom text-center pt-3">
            <p>Copyright © 2023 Skylink | Powered By Skylink Technologies</p>
        </div>
    </div>
</footer>


    <!-- JavaScript -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    
    @stack('scripts')
</body>
</html>