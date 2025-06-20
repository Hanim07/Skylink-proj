@props(['testimonial'])

<div class="testimonial-card">
    <div class="testimonial-header">
        <img src="{{ $testimonial['avatar'] ?? 'https://via.placeholder.com/50x50' }}" alt="{{ $testimonial['name'] ?? 'Client' }}">
        <div>
            <h4>{{ $testimonial['name'] ?? 'Client Name' }}</h4>
            <span>{{ $testimonial['position'] ?? 'Position' }}</span>
        </div>
    </div>
    <p>"{{ $testimonial['content'] ?? 'Testimonial content goes here.' }}"</p>
</div>