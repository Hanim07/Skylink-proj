@extends('layouts.master')

@section('content')

<!-- Hero Section -->
<section class="bg-dark text-white py-5" style="background: url('{{ asset('assets/images/service-banner.jpg') }}') center/cover no-repeat;">
  <div class="container text-center">
    <h1 class="display-4 fw-bold">Explore {{ ucfirst(str_replace('-', ' ', $category)) }}</h1>
    <p class="lead">Premium services tailored to meet your business goals.</p>
  </div>
</section>

<div class="container py-5">
  <h2 class="mb-4 text-center">Our Services in {{ ucfirst(str_replace('-', ' ', $category)) }}</h2>
  <div class="row">
    @forelse($items as $item)
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card h-100 shadow-lg border-0 transition hover-shadow">
          <img src="{{ asset('assets/images/services/' . $item['image']) }}" onerror="this.onerror=null; this.src='{{ asset('assets/images/placeholder.png') }}';" class="card-img-top" alt="{{ $item['title'] }}" style="height:200px; object-fit:cover;">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">{{ $item['title'] }}</h5>
            <p class="card-text text-muted">{{ $item['desc'] }}</p>
            <p class="fw-bold">{{ $item['price'] }}</p>
            <a href="{{ route('services.detail', ['subcategory' => $item['slug']]) }}" class="btn btn-outline-primary mt-auto w-100">View Details & Purchase</a>
          </div>
        </div>
      </div>
    @empty
      <div class="col-12"><div class="alert alert-warning text-center">No services found.</div></div>
    @endforelse
  </div>
</div>

@endsection
