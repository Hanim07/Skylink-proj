@extends('layouts.master')

@section('content')
<div class="container py-5">
  <div class="row align-items-center gy-4">
    {{-- Product Image --}}
    <div class="col-md-5">
      <img 
        src="{{ asset('assets/' . $product['image']) }}" 
        class="img-fluid rounded shadow-sm" 
        alt="{{ $product['name'] }}"
        loading="lazy"
      >
    </div>

    {{-- Product Details --}}
    <div class="col-md-7">
      <h2 class="fw-bold mb-4">{{ $product['name'] }}</h2>

      {{-- Tabs Nav --}}
      <div class="product-tabs">
        <ul class="nav nav-tabs mb-4 justify-content-start gap-3" id="productTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button 
              class="nav-link active" 
              id="desc-tab" 
              data-bs-toggle="tab" 
              data-bs-target="#desc" 
              type="button" 
              role="tab" 
              aria-controls="desc" 
              aria-selected="true"
            >
              Description
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button 
              class="nav-link" 
              id="features-tab" 
              data-bs-toggle="tab" 
              data-bs-target="#features" 
              type="button" 
              role="tab" 
              aria-controls="features" 
              aria-selected="false"
            >
              Features
            </button>
          </li>
          <li class="nav-item" role="presentation">
            <button 
              class="nav-link" 
              id="additional-tab" 
              data-bs-toggle="tab" 
              data-bs-target="#additional" 
              type="button" 
              role="tab" 
              aria-controls="additional" 
              aria-selected="false"
            >
              Additional Info
            </button>
          </li>
        </ul>

        {{-- Tabs Content --}}
        <div class="tab-content" id="productTabContent">
          {{-- Description --}}
          <div class="tab-pane fade show active" id="desc" role="tabpanel" aria-labelledby="desc-tab">
            <p class="lead">{{ $product['description'] }}</p>
          </div>

          {{-- Features --}}
          <div class="tab-pane fade" id="features" role="tabpanel" aria-labelledby="features-tab">
            @if (!empty($product['features']) && is_array($product['features']))
              <ul class="list-group list-group-flush">
                @foreach ($product['features'] as $feature)
                  <li class="list-group-item d-flex align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#0d6efd" class="bi bi-check-circle me-2" viewBox="0 0 16 16">
                      <path d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm3.354-9.354a.5.5 0 0 1 0 .708l-4.5 4.5a.5.5 0 0 1-.708 0L4.646 8.354a.5.5 0 1 1 .708-.708L7.5 9.793l3.646-3.647a.5.5 0 0 1 .708 0z"/>
                    </svg>
                    {{ $feature }}
                  </li>
                @endforeach
              </ul>
            @else
              <p class="text-muted fst-italic">No features listed for this product.</p>
            @endif
          </div>

          {{-- Additional Info --}}
          <div class="tab-pane fade" id="additional" role="tabpanel" aria-labelledby="additional-tab">
            @if (!empty($product['additional_info']))
              <p>{{ $product['additional_info'] }}</p>
            @else
              <p class="text-muted fst-italic">No additional information available.</p>
            @endif
          </div>
        </div>
      </div>

      {{-- Price and Subscribe Button 
      <div class="mt-5 d-flex flex-column align-items-start gap-3">
        <span class="h4 text-primary fw-semibold">ETB {{ number_format($product['price']) }}</span>
        <button class="btn btn-lg btn-gradient-primary px-5 py-3 shadow">
          Subscribe
        </button>
      </div>--}}
    </div>
  </div>
</div>
@endsection

@section('styles')
<style>
  /* Scoped only to product tab */
  .product-tabs .nav-tabs .nav-link {
    font-weight: 600;
    color: #4f46e5;
    border-radius: 0.375rem;
    transition: all 0.3s ease;
  }

  .product-tabs .nav-tabs .nav-link.active {
    color: white;
    background-color: #4f46e5;
    border-color: #4f46e5 #4f46e5 #fff;
  }

  /* Gradient Button */
  .btn-gradient-primary {
    background: linear-gradient(90deg, #4f46e5 0%, #3b82f6 100%);
    border: none;
    color: white;
    font-weight: 600;
    transition: background 0.3s ease, transform 0.2s ease;
  }

  .btn-gradient-primary:hover {
    background: linear-gradient(90deg, #4338ca 0%, #2563eb 100%);
    transform: scale(1.02);
  }
</style>
@endsection
