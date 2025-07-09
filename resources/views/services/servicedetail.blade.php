@extends('layouts.master')
@section('title', $service['title'] . ' | Sky Link')
@section('description', $service['desc'])

@section('content')
<style>.top-header {
    margin-bottom: 0 !important;
  }

  .navbar {
    margin-top: 0 !important;
  }

  :root {
    --blue-dark: #1e3a8a;
    --blue-light: #f0f8ff;
    --silver: #e6e7e8;
  }

  body {
    background-color: var(--blue-light);
    color: #333;
  }

  .hero {
    background-color: white;
    color: var(--blue-dark);
  }

  .pricing-card {
    background: white;
    border-radius: 1rem;
    transition: all 0.3s ease;
    border: 1px solid var(--silver);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
  }

  .pricing-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.12);
  }

  .pricing-card .card-body {
    padding: 2rem;
  }

  .pricing-card .hover-actions {
    position: absolute;
    inset: 0;
    background: rgba(255, 255, 255, 0.75);
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    opacity: 0;
    transition: opacity .3s ease;
  }

  .pricing-card:hover .hover-actions {
    opacity: 1;
  }

  .trust-badge {
    background: var(--silver);
    display: inline-block;
    padding: 0.4rem 1rem;
    border-radius: 999px;
    font-size: 0.95rem;
    margin-top: 1rem;
  }

  .accordion-button {
    background: #f9fafb;
    color: var(--blue-dark);
  }

  .contact-section {
    background: white;
    padding: 4rem 0;
    border-top: 1px solid #ddd;
  }

  .form-control:focus {
    border-color: var(--blue-dark);
    box-shadow: 0 0 0 0.2rem rgba(30, 58, 138, 0.25);
  }

  .btn-primary {
    background-color: var(--blue-dark);
    border-color: var(--blue-dark);
  }

  .btn-primary:hover {
    background-color: #16368c;
  }</style>

<section class="hero text-center py-5">
  <div class="container">
    <h1 class="display-3 fw-bold mb-3">{{ $service['title'] }}</h1>
    <p class="lead mb-4">{{ $service['desc'] }}</p>
    <span class="trust-badge">🌟 Trusted by 500+ businesses</span>
  </div>
</section>

<section class="py-6">
  <div class="container">
    <h2 class="text-center mb-5 text-primary">Our Flexible Plans</h2>
    <div class="row g-4 justify-content-center">
      @php
        $plans = [
          ['name'=>'Starter','price'=>$service['price'],'slug'=>'starter','features'=> $service['features'] ?? [], 'highlight'=>false],
          // Add alt-tier plans if needed
        ];
      @endphp

      @foreach($plans as $plan)
        <div class="col-md-6 col-lg-4">
          <div class="card pricing-card position-relative text-center h-100 border-0 shadow-sm rounded-4">
            @if($plan['highlight'])
              <div class="position-absolute top-0 end-0 bg-primary text-white px-3 py-1 rounded-bottom-start">Popular</div>
            @endif
            <div class="card-body d-flex flex-column justify-content-between">
              <div>
                <h3 class="fw-bold mb-2 text-primary">{{ $plan['name'] }}</h3>
                <h2 class="mb-4">{{ $plan['price'] }}</h2>
                <a href="{{ url('/subscribe/'.$plan['slug']) }}" class="btn btn-outline-primary mb-4 w-100">Subscribe Now</a>
                <ul class="list-unstyled text-start mb-4">
                  @foreach($plan['features'] as $feat)
                    <li class="mb-2"><i class="bi bi-check-circle text-primary me-2"></i>{{ $feat }}</li>
                  @endforeach
                </ul>
              </div>
            <a href="#contact" class="btn btn-primary w-100">Discuss Plan</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>


<!-- FAQ Section -->
<section class="py-6 bg-light">
  <div class="container">
    <h2 class="text-center mb-4 text-primary">FAQs</h2>
    <div class="accordion" id="faqAccordion">
      @foreach ([
        ['q'=>'What payment methods do you accept?','a'=>'We accept all major credit cards, PayPal, and bank transfers.'],
        ['q'=>'Is there a contract?','a'=>'No long-term contracts. Cancel anytime.'],
        ['q'=>'How long does setup take?','a'=>'Most accounts are ready within 1-2 business days.']
      ] as $i => $faq)
      <div class="accordion-item mb-3">
        <h2 class="accordion-header">
          <button class="accordion-button {{ $i !== 0 ? 'collapsed' : '' }}" type="button" data-bs-toggle="collapse" data-bs-target="#faq{{ $i }}">
            {{ $faq['q'] }}
          </button>
        </h2>
        <div id="faq{{ $i }}" class="accordion-collapse collapse {{ $i === 0 ? 'show' : '' }}" data-bs-parent="#faqAccordion">
          <div class="accordion-body">{{ $faq['a'] }}</div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

<!-- Contact Form Section -->
<section id="contact" class="contact-section">
  <div class="container">
    <h2 class="text-center mb-4 text-primary">Let’s Connect</h2>
    <p class="text-center text-muted mb-5">Send us a message and our team will get back to you within 24 hours.</p>
    <form class="row g-4 justify-content-center">
      <div class="col-md-6">
        <input type="text" class="form-control form-control-lg" placeholder="Your Full Name" required>
      </div>
      <div class="col-md-6">
        <input type="email" class="form-control form-control-lg" placeholder="Your Email Address" required>
      </div>
      <div class="col-md-6">
        <input type="tel" class="form-control form-control-lg" placeholder="Phone Number (optional)">
      </div>
      <div class="col-md-6">
        <select class="form-select form-select-lg" required>
          <option selected disabled>Select a Service</option>
          <option>Web Development</option>
          <option>Mobile App</option>
          <option>UI/UX Design</option>
          <option>Cloud Solutions</option>
        </select>
      </div>
      <div class="col-12">
        <textarea class="form-control form-control-lg" rows="5" placeholder="Tell us more about your project..." required></textarea>
      </div>
      <div class="col-12 d-grid">
        <button type="submit" class="btn btn-primary btn-lg">Submit Request</button>
      </div>
    </form>
  </div>
</section>

@endsection
