@extends('layouts.master')

@section('content')
<!-- Hero Section -->
<section class="bg-dark text-white py-5" style="background: url('/assets/images/service-banner.jpg') center center/cover no-repeat;">
    <div class="container text-center">
        <h1 class="display-4 fw-bold">Explore {{ ucfirst(str_replace('-', ' ', $category)) }}</h1>
        <p class="lead">Premium services tailored to meet your business goals.</p>
    </div>
</section>

<!-- Services Grid -->
<div class="container py-5">
    <h2 class="mb-4 text-center">Our Services in {{ ucfirst(str_replace('-', ' ', $category)) }}</h2>
    <div class="row">
        @php
            $subcategories = [
                'software-service' => [
                    ['slug' => 'web-apps', 'title' => 'Web Applications', 'desc' => 'Custom web-based platforms for your business.', 'image' => 'web-app.jpg'],
                    ['slug' => 'mobile-apps', 'title' => 'Mobile Apps', 'desc' => 'iOS & Android applications tailored to your needs.', 'image' => 'mobile-app.jpg'],
                    ['slug' => 'custom-dev', 'title' => 'Custom Software', 'desc' => 'Bespoke software solutions for enterprises.', 'image' => 'custom-software.jpg'],
                ],
                'smart-city' => [
                    ['slug' => 'iot', 'title' => 'IoT Integration', 'desc' => 'Connect city infrastructure with smart IoT systems.', 'image' => 'iot.jpg'],
                    ['slug' => 'smart-lighting', 'title' => 'Smart Lighting', 'desc' => 'Automated lighting systems for urban safety.', 'image' => 'smart-lighting.jpg'],
                ],
                'safety-security' => [
                    ['slug' => 'cctv', 'title' => 'CCTV Systems', 'desc' => 'Advanced surveillance systems and monitoring.', 'image' => 'cctv.jpg'],
                    ['slug' => 'access-control', 'title' => 'Access Control', 'desc' => 'Secure facility entry systems and automation.', 'image' => 'access-control.jpg'],
                ],
                'enterprise-network' => [
                    ['slug' => 'lan-wan', 'title' => 'LAN/WAN Setup', 'desc' => 'Reliable enterprise-grade network solutions.', 'image' => 'network.jpg'],
                    ['slug' => 'vpn-solutions', 'title' => 'VPN Solutions', 'desc' => 'Secure remote access and encrypted traffic.', 'image' => 'vpn.jpg'],
                ],
                'consulting-training' => [
                    ['slug' => 'it-consulting', 'title' => 'IT Consulting', 'desc' => 'Strategic IT advisory for business success.', 'image' => 'consulting.jpg'],
                    ['slug' => 'training', 'title' => 'Staff Training', 'desc' => 'Upskill your workforce with modern IT practices.', 'image' => 'training.jpg'],
                ],
                'ict-support' => [
                    ['slug' => 'remote-support', 'title' => 'Remote Support', 'desc' => 'On-demand tech support from our experts.', 'image' => 'remote.jpg'],
                    ['slug' => 'on-site-support', 'title' => 'On-site Support', 'desc' => 'Hands-on IT support at your location.', 'image' => 'onsite.jpg'],
                ],
                'gps-tracking' => [
                    ['slug' => 'vehicle-tracking', 'title' => 'Vehicle Tracking', 'desc' => 'Monitor fleets in real-time with GPS.', 'image' => 'vehicle.jpg'],
                    ['slug' => 'asset-tracking', 'title' => 'Asset Tracking', 'desc' => 'Track valuable assets across geographies.', 'image' => 'asset.jpg'],
                ],
                'datacenter-facility' => [
                    ['slug' => 'server-rooms', 'title' => 'Server Rooms', 'desc' => 'Build and maintain secure data facilities.', 'image' => 'server-room.jpg'],
                    ['slug' => 'cooling-system', 'title' => 'Cooling Systems', 'desc' => 'Maintain optimal conditions for servers.', 'image' => 'cooling.jpg'],
                ],
            ];

            $items = $subcategories[$category] ?? [];
        @endphp

        @forelse ($items as $item)
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('assets/images/services/' . $item['image']) }}" class="card-img-top" alt="{{ $item['title'] }}">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $item['title'] }}</h5>
                        <p class="card-text">{{ $item['desc'] }}</p>
                        <a href="{{ route('services.detail', ['subcategory' => $item['slug']]) }}" class="btn btn-primary mt-auto w-100">
                            View Details & Purchase
                        </a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="alert alert-warning text-center">No services found for this category.</div>
            </div>
        @endforelse
    </div>
</div>
@endsection
