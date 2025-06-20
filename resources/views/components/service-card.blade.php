@props(['service', 'featured' => false])

<div class="service-card {{ $featured ? 'featured' : '' }}">
    <div class="service-icon">
        <i class="{{ $service['icon'] ?? 'fas fa-cog' }}"></i>
    </div>
    <h3>{{ $service['title'] ?? 'Service Title' }}</h3>
    <p>{{ $service['description'] ?? 'Service description goes here.' }}</p>
</div>