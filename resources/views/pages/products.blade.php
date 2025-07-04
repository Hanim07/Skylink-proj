@extends('layouts.master')

@section('content')
<div class="container py-5">
  <h2 class="text-center mb-5 display-5 fw-bold">Explore Our Products</h2>

  {{-- Search Bar --}}
  <div class="row mb-4 justify-content-center">
    <div class="col-md-6">
      <input id="searchBox" type="text" class="form-control" placeholder="🔍 Search products..." onkeyup="filterProducts()">
    </div>
  </div>

  {{-- Category Tabs --}}
  <div class="d-flex justify-content-center mb-4 px-2" >
    <ul class="nav nav-pills gap-2 flex-nowrap flex-md-wrap" id="pills-tab" role="tablist" style="white-space: nowrap;">
      {{-- All Tab --}}
      <li class="nav-item" role="presentation">
        <button 
          class="nav-link active text-nowrap" 
          id="tab-all" 
          data-bs-toggle="pill" 
          data-bs-target="#content-all" 
          type="button" 
          role="tab"
          aria-controls="content-all"
          aria-selected="true"
        >
          All
        </button>
      </li>

      {{-- Dynamic Category Tabs --}}
      @foreach ($products as $cat => $items)
        <li class="nav-item" role="presentation">
          <button 
            class="nav-link text-nowrap" 
            id="tab-{{ $cat }}" 
            data-bs-toggle="pill" 
            data-bs-target="#content-{{ $cat }}" 
            type="button" 
            role="tab"
            aria-controls="content-{{ $cat }}"
            aria-selected="false"
          >
            {{ ucwords(str_replace('-', ' ', $cat)) }}
          </button>
        </li>
      @endforeach
    </ul>
  </div>

  {{-- Tab Contents --}}
  <div class="tab-content" id="pills-tabContent">
    {{-- All Products Tab Pane --}}
    <div class="tab-pane fade show active" id="content-all" role="tabpanel" aria-labelledby="tab-all">
      <div id="products-all">
  @foreach ($products as $cat => $items)
    <h4 class="mt-5 mb-3 text-primary border-bottom pb-1">{{ ucwords(str_replace('-', ' ', $cat)) }}</h4>
    <div class="row">
      @foreach ($items as $p)
        <div class="col-sm-6 col-md-4 col-lg-3 mb-4 product-card">
          <div class="card h-100 shadow-sm border-0 hover-shadow" data-name="{{ strtolower($p['name']) }}">
            <img src="{{ asset('assets/' . $p['image']) }}" class="card-img-top" alt="{{ $p['name'] }}">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title text-primary fw-semibold">{{ $p['name'] }}</h5>
              <p class="card-text small">{{ Str::limit($p['description'], 90) }}</p>
              <div class="mt-auto">
                <div class="d-flex justify-content-between align-items-center">
                  <span class="fw-bold text-success">ETB {{ number_format($p['price']) }}</span>
                  <a href="{{ route('products.detail', [$cat, $p['slug']]) }}" class="btn btn-sm btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="View Details">Details</a>
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

    {{-- Category Specific Tab Panes --}}
    @foreach ($products as $cat => $items)
      <div class="tab-pane fade" id="content-{{ $cat }}" role="tabpanel" aria-labelledby="tab-{{ $cat }}">
        <div class="row" id="products-{{ $cat }}">
          @foreach ($items as $p)
            <div class="col-sm-6 col-md-4 col-lg-3 mb-4 product-card">
              <div class="card h-100 shadow-sm border-0 hover-shadow" data-name="{{ strtolower($p['name']) }}">
                <img src="{{ asset('assets/' . $p['image']) }}" class="card-img-top" alt="{{ $p['name'] }}">
                <div class="card-body d-flex flex-column">
                  <h5 class="card-title text-primary fw-semibold">{{ $p['name'] }}</h5>
                  <p class="card-text small">{{ Str::limit($p['description'], 90) }}</p>
                  <div class="mt-auto">
                    <div class="d-flex justify-content-between align-items-center">
                      <span class="fw-bold text-success">ETB {{ number_format($p['price']) }}</span>
                      <a href="{{ route('products.detail', [$cat, $p['slug']]) }}" class="btn btn-sm btn-outline-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="View Details">Details</a>
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
@endsection

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
</style>
@endpush

@push('scripts')
<script>
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
