@extends('layouts.master')

@push('styles')
<style>
  .nav-pills .nav-link {
    border-radius: 50rem;
    font-weight: 500;
    padding: 0.5rem 1.2rem;
    background-color: #f3f4f6;
    color: #111827;
    transition: background-color 0.3s ease;
  }
  .nav-pills .nav-link.active {
    background: linear-gradient(to right, #4f46e5, #3b82f6);
    color: white;
  }
  .nav-pills .nav-link:hover:not(.active) {
    background-color: #e5e7eb;
  }
  .btn-gradient-primary {
    background: linear-gradient(to right, #4f46e5, #3b82f6);
    color: white;
    border: none;
    font-weight: 500;
    transition: opacity 0.3s ease;
  }
  .btn-gradient-primary:hover {
    opacity: 0.9;
  }
  .hover-shadow:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 20px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease-in-out;
  }
  .category-item {
    cursor: pointer;
    transition: transform 0.3s ease;
  }
  .category-item:hover {
    transform: translateY(-5px);
  }
  .category-icon img {
    width: 120px;
    height: 120px;
    object-fit: cover;
    border: 3px solid #f8f9fa;
    transition: border-color 0.3s ease;
  }
  .category-item:hover .category-icon img {
    border-color: #007bff;
  }
  .feature-item {
    padding: 20px;
    transition: transform 0.3s ease;
  }
  .feature-item:hover {
    transform: translateY(-5px);
  }
  .feature-icon {
    width: 60px;
    height: 60px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    justify-content: center;
    background: rgba(0, 123, 255, 0.1);
    border-radius: 50%;
  }
  @media (max-width: 768px) {
    .category-item, .feature-item {
      margin-bottom: 30px;
    }
  }
  @keyframes fadeInUp {
    from {
      opacity: 0;
      transform: translateY(30px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }
</style>
@endpush

@section('content')
<section class="py-5 bg-light">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h3 class="mb-1">Shop From <span class="text-primary">Top Categories</span></h3>
      <a href="#" class="text-primary text-decoration-none">View All <i class="fas fa-chevron-right"></i></a>
    </div>

    <div class="row text-center">
      <div class="col-lg-2 col-md-4 col-6 mb-4">
        <div class="category-item">
          <div class="category-icon">
            <img src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?w=80&h=80&fit=crop" alt="Mobile" class="rounded-circle">
          </div>
          <h6 class="mt-3">Business Tools</h6>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="container py-5">
  <h2 class="text-center mb-5 display-5 fw-bold">Explore Our Products</h2>

  <div class="row mb-4 justify-content-center">
    <div class="col-md-6">
      <input id="searchBox" type="text" class="form-control" placeholder="🔍 Search products..." onkeyup="filterProducts()">
    </div>
  </div>

  <div class="container-fluid px-2 mb-4">
    <div class="d-flex justify-content-center">
      <ul class="nav nav-pills flex-wrap gap-2" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="tab-all" data-bs-toggle="pill" data-bs-target="#content-all" type="button" role="tab" aria-controls="content-all" aria-selected="true">All</button>
        </li>

        @foreach ($products->keys() as $cat)
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="tab-{{ $cat }}" data-bs-toggle="pill" data-bs-target="#content-{{ $cat }}" type="button" role="tab" aria-controls="content-{{ $cat }}" aria-selected="false">
            {{ ucwords(str_replace('-', ' ', $cat)) }}
          </button>
        </li>
        @endforeach
      </ul>
    </div>
  </div>

  <div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="content-all" role="tabpanel" aria-labelledby="tab-all">
      <div id="products-all">
        @foreach ($products as $category => $items)
        <h4 class="mt-5 mb-3 text-primary border-bottom pb-1">{{ ucwords(str_replace('-', ' ', $category)) }}</h4>
        <div class="row">
          @foreach ($items as $p)
          <div class="col-sm-6 col-md-4 col-lg-3 mb-4 product-card">
            <div class="card h-100 shadow-sm border-0 hover-shadow" data-name="{{ strtolower($p['name']) }}">
              @php
              $isExternal = Str::startsWith($p['image'], ['http://', 'https://']);
              @endphp
              <img src="{{ $isExternal ? $p['image'] : asset('assets/' . $p['image']) }}" class="card-img-top" alt="{{ $p['name'] }}">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title text-primary fw-semibold">{{ $p['name'] }}</h5>
                <p class="card-text small">{{ Str::limit($p['description'], 90) }}</p>
                <div class="mt-auto">
                  <div class="d-flex justify-content-between align-items-center">
                    <span class="fw-bold text-success">ETB {{ number_format($p['price']) }}</span>
                  </div>
                  <button class="btn btn-sm btn-gradient-primary w-100 mt-2">Subscribe</button>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        @endforeach
      </div>
    </div>

    @foreach ($products as $category => $items)
    <div class="tab-pane fade" id="content-{{ $category }}" role="tabpanel" aria-labelledby="tab-{{ $category }}">
      <div class="row" id="products-{{ $category }}">
        @foreach ($items as $p)
        <div class="col-sm-6 col-md-4 col-lg-3 mb-4 product-card">
          <div class="card h-100 shadow-sm border-0 hover-shadow" data-name="{{ strtolower($p['name']) }}">
            @php
            $isExternal = Str::startsWith($p['image'], ['http://', 'https://']);
            @endphp
            <img src="{{ $isExternal ? $p['image'] : asset('assets/' . $p['image']) }}" class="card-img-top" alt="{{ $p['name'] }}">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title text-primary fw-semibold">{{ $p['name'] }}</h5>
              <p class="card-text small">{{ Str::limit($p['description'], 90) }}</p>
              <div class="mt-auto">
                <div class="d-flex justify-content-between align-items-center">
                  <span class="fw-bold text-success">ETB {{ number_format($p['price']) }}</span>
                </div>
                <button class="btn btn-sm btn-gradient-primary w-100 mt-2">Subscribe</button>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    @endforeach
  </div>
</div>

<section class="py-5 bg-white">
  <div class="container">
    <div class="row text-center">
      <div class="col-md-3 mb-4">
        <div class="feature-item">
          <div class="feature-icon mb-3">
            <i class="fas fa-trophy fa-2x text-warning"></i>
          </div>
          <h5>High Quality</h5>
          <p class="text-muted">crafted from top materials</p>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="feature-item">
          <div class="feature-icon mb-3">
            <i class="fas fa-shield-alt fa-2x text-success"></i>
          </div>
          <h5>Warranty Protection</h5>
          <p class="text-muted">Over 2 years</p>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="feature-item">
          <div class="feature-icon mb-3">
            <i class="fas fa-shipping-fast fa-2x text-primary"></i>
          </div>
          <h5>Fast Delivery</h5>
          <p class="text-muted">Order over 150 $</p>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="feature-item">
          <div class="feature-icon mb-3">
            <i class="fas fa-headset fa-2x text-danger"></i>
          </div>
          <h5>24/7 Support</h5>
          <p class="text-muted">Dedicated support</p>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection


@push('scripts')
<script>
  
  // Smooth scrolling for navigation links
  const navLinks = document.querySelectorAll(".nav-link")
  navLinks.forEach((link) => {
    link.addEventListener("click", function (e) {
      if (this.getAttribute("href") === "#") {
        e.preventDefault()
      }
    })
  })

  

  // Search filter function
  function filterProducts() {
    const query = document.getElementById('searchBox').value.toLowerCase();
    document.querySelectorAll('.product-card').forEach(card => {
      const name = card.querySelector('.card').dataset.name;
      card.style.display = name.includes(query) ? 'block' : 'none';
    });
  }

  // Bootstrap tooltip initialization
  document.addEventListener('DOMContentLoaded', () => {
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.map(t => new bootstrap.Tooltip(t));
  });

 

</script>

@endpush
