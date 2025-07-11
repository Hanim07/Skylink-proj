<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Admin Dashboard')</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        .sidebar {
            min-height: 100vh;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .sidebar .nav-link {
            color: rgba(255, 255, 255, 0.8);
            padding: 12px 20px;
            margin: 2px 0;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            color: white;
            background: rgba(255, 255, 255, 0.1);
            transform: translateX(5px);
        }
        .main-content {
            background-color: #f8f9fa;
            min-height: 100vh;
        }
        .navbar {
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .card {
            border: none;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .stat-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }
        .stat-card-success {
            background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
        }
        .stat-card-warning {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        }
        .stat-card-info {
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        }
    </style>
    
    @stack('styles')
</head>
<body>
    <div class="container-fluid">
        <div class="row">


           <!-- Sidebar -->
<nav class="col-md-3 col-lg-2 d-md-block sidebar collapse bg-dark text-white">
    <div class="position-sticky pt-3">
        <!-- Logo/Brand -->
        <div class="text-center mb-4">
            <h4 class="text-white">
                Admin Panel
            </h4>
        </div>
        
        <!-- Navigation Menu -->
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" 
                   href="{{ route('admin.dashboard') }}">
                    Dashboard
                </a>
            </li>

            {{-- Portfolio --}}
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.portfolio.*') ? 'active' : '' }}" 
                   href="{{ route('admin.portfolio.index') }}">
                    Portfolio
                </a>
            </li>
            <li class="nav-item ps-3">
                <a class="nav-link {{ request()->routeIs('admin.portfolio.create') ? 'active' : '' }}" 
                   href="{{ route('admin.portfolio.create') }}">
                    Create Portfolio
                </a>
            </li>


            {{-- News --}}
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.news.*') ? 'active' : '' }}" 
                   href="{{ route('admin.news.index') }}">
                    News
                </a>
            </li>
            <li class="nav-item ps-3">
                <a class="nav-link {{ request()->routeIs('admin.news.create') ? 'active' : '' }}" 
                   href="{{ route('admin.news.create') }}">
                    Create News
                </a>
            </li>
            
            {{-- Portfolio --}}
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.services.*') ? 'active' : '' }}" 
                   href="{{ route('admin.services.index') }}">
                    Service
                </a>
            </li>
            <li class="nav-item ps-3">
                <a class="nav-link {{ request()->routeIs('admin.services.create') ? 'active' : '' }}" 
                   href="{{ route('admin.services.create') }}">
                    Create Service
                </a>
            </li>

            {{-- Subscribers --}}
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.subscribers.*') ? 'active' : '' }}" 
                   href="{{ route('admin.subscribers.index') }}">
                    Subscribers
                </a>
            </li>

            {{-- Contact Messages --}}
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.contact-messages.*') ? 'active' : '' }}" 
                   href="{{ route('admin.contact-messages.index') }}">
                    Contact Messages
                </a>
            </li>

            <hr class="my-3" style="border-color: rgba(255,255,255,0.3);">

            {{-- Logout --}}
            <li class="nav-item">
                <a class="nav-link text-danger" href="{{ route('logout') }}"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</nav>

            <!-- Main Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 main-content">
                <!-- Top Navigation Bar -->
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">@yield('page-title', 'Dashboard')</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <button type="button" class="btn btn-sm btn-outline-secondary">
                                <i class="fas fa-bell"></i>
                                <span class="badge bg-danger rounded-pill ms-1">3</span>
                            </button>
                        </div>


                        <div class="dropdown">
                            <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" 
                                    data-bs-toggle="dropdown">
                                <i class="fas fa-user me-1"></i>
                                {{ Auth::user()->name ?? 'Admin' }}
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#"><i class="fas fa-user me-2"></i>Profile</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-cog me-2"></i>Settings</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt me-2"></i>Logout
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Page Content -->
                <div class="container-fluid">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="fas fa-check-circle me-2"></i>
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="fas fa-exclamation-circle me-2"></i>
                            {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif

                    @yield('content')
                </div>
            </main>
        </div>
    </div>

    <!-- Logout Form -->
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    @stack('scripts')
</body>
</html>
